<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Log;

class Curriculum extends Model
{
    protected $fillable = ['course_id', 'name'];

    public function course()
    {
        return $this->belongsTo('App\Models\Course');
    }

    public function myClasses()
    {
        return $this->hasMany('App\Models\MyClass');
    }

    public function incomingClasses()
    {
        return $this->myClasses()->where('start_time', '>', Carbon::now());
    }

    public function inProcessClasses()
    {

    }

    public function endedClasses()
    {

    }

    public function sections()
    {
        return $this->hasMany('App\Models\Section');
    }
    public function duration()
    {
        $duration = 0;
        $sections = $this->sections;
        foreach($sections as $section)
        {
            $lessons = $section->lessons;
            foreach ($lessons as $lesson) {
                $duration += $lesson->duration;
            }
        }
        return $duration;
    }
    public function duplicate()
    {
        //duplicate curriculum
        $oldCurriculum = $this;
        $newCurriculum = Curriculum::create(['name'=>$oldCurriculum->name]);
        //coppy section
        foreach($oldCurriculum->sections as $section)
        {
            $sectionData = clone $section;
            $sectionData->curriculum_id = $newCurriculum->id;
            unset($sectionData->id);
            $newSection = Section::create($sectionData->toArray());
            foreach($section->lessons as $lesson)
            {
                $lessonData = clone $lesson;
                $lessonData->section_id = $newSection->id;
                //clone lesson
                unset($lessonData->id);
                $newLesson = Lesson::create($lessonData->toArray());
                //clone lesson's material
                foreach($lesson->materials as $material)
                {

                    if(json_decode($material->properties)->type == Resource::TYPE_PDF){
                        $oldFile = $material->path;
                        $destinationPath = 'uploads/docs/';
                        $fileName = "docs" . time() . "-" . $newLesson->id.Str::random(5).".pdf";
                        $newFile = '/' . $destinationPath . $fileName;
                        copy($_SERVER['DOCUMENT_ROOT'].$oldFile, $_SERVER['DOCUMENT_ROOT'].$newFile);
                        $material->path = $newFile;
                        $material->resourceable_id = $newLesson->id;
                        unset($material->id);
                        Resource::create($material->toArray());
                    }else{
                        $material->resourceable_id = $newLesson->id;
                        unset($material->id);
                        Resource::create($material->toArray());
                    }
                }
                //todo
                foreach($lesson->questionBlocks as $qBlock)
                {
                    //clone lesson's question block
                    $qBlockData = clone $qBlock;
                    $qBlockData->lesson_id = $newLesson->id;
                    unset($qBlockData->id);
                    $newQBlock = QuestionBlock::create($qBlockData->toArray());
                    //clone question block's material
                    foreach($qBlock->materials as $material)
                    {
                        if(json_decode($material->properties)->type == Resource::TYPE_PDF){
                            $oldFile = $material->path;
                            $destinationPath = 'uploads/quest/';
                            $fileName = "mat" . time() . "-" . $qBlock->id .Str::random(5). ".pdf";
                            $newFile = '/' . $destinationPath . $fileName;
                            copy($_SERVER['DOCUMENT_ROOT'].$oldFile, $_SERVER['DOCUMENT_ROOT'].$newFile);
                            $material->path = $newFile;
                            $material->resourceable_id = $newQBlock->id;
                            unset($material->id);
                            Resource::create($material->toArray());
                        }else{
                            $material->resourceable_id = $newQBlock->id;
                            unset($material->id);
                            Resource::create($material->toArray());
                        }
                    }
                    foreach($qBlock->questions as $question)
                    {
                        //clone question block's question
                        $question->question_block_id = $newQBlock->id;
                        unset($question->id);
                        Question::create($question->toArray());
                    }
                }
            }
        }
    }

    public function remove()
    {
        //duplicate curriculum
        $curriculum = $this;
        //delete section
        foreach($curriculum->sections as $section) {
            foreach ($section->lessons as $lesson) {
                foreach ($lesson->materials as $material) {
                    if (json_decode($material->properties)->type == Resource::TYPE_PDF) {
                        unlink($_SERVER['DOCUMENT_ROOT'].$material->path);
                    }
                    $material->delete();
                }
                foreach ($lesson->questionBlocks as $qBlock) {
                    //clone lesson's question block
                    foreach ($qBlock->materials as $material) {
                        if (json_decode($material->properties)->type == Resource::TYPE_PDF) {
                            unlink($_SERVER['DOCUMENT_ROOT'].$material->path);
                        }
                        $material->delete();
                    }
                    foreach ($qBlock->questions as $question) {
                        $question->delete();
                    }
                    $qBlock->delete();
                }
                $lesson->delete();
            }
            $section->delete();
        }
        $curriculum->delete();
    }
}
