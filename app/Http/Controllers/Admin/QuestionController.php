<?php

namespace App\Http\Controllers\Admin;

use App\Models\Question;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Redirect;
use URL;

class QuestionController extends Controller
{

    public function store($id, Request $request)
    {
        switch ($request->get('q_type')) {
            case Question::TYPE_1:
                $this->questionType1($id, $request);
                break;
            case Question::TYPE_2:
                $this->questionType2($id, $request);
                break;
            case Question::TYPE_3:
                $this->questionType3($id, $request);
                break;
            case Question::TYPE_4:
                $this->questionType4($id, $request);
                break;
            case Question::TYPE_5:
                $this->questionType5($id, $request);
                break;
            case Question::TYPE_6:
                $this->questionType6($id, $request);
                break;
            case Question::TYPE_7:
                $this->questionType7($id, $request);
                break;
            case Question::TYPE_8:
                $this->questionType8($id, $request);
                break;
            case Question::TYPE_9:
                $this->questionType9($id, $request);
                break;
            case Question::TYPE_10:
                $this->questionType10($id, $request);
                break;
            case Question::TYPE_11;
                $this->questionType11($id, $request);
                break;
            case Question::TYPE_12;
                $this->questionType12($id, $request);
                break;
            case Question::TYPE_13:
                $this->questionType13($id, $request);
                break;
        }

        return Redirect::to(URL::previous() . "#block_add");
    }

    public function delete($id)
    {
        $question = Question::find($id);
        $question->delete();
        return Redirect::to(URL::previous() . "#block_add");
    }

    public function update($id, Request $request)
    {
        $question = Question::findOrFail($id);
        switch ($question->type) {
            case Question::TYPE_1:
                $this->updateQuestionType1($question, $request);
                break;
            case Question::TYPE_2:
                $this->updateQuestionType2($question, $request);
                break;
            case Question::TYPE_3:
                $this->updateQuestionType3($question, $request);
                break;
            case Question::TYPE_4:
                $this->updateQuestionType4($question, $request);
                break;
            case Question::TYPE_5:
                $this->updateQuestionType5($question, $request);
                break;
            case Question::TYPE_6:
                $this->updateQuestionType6($question, $request);
                break;
            case Question::TYPE_7:
                $this->updateQuestionType7($question, $request);
                break;
            case Question::TYPE_8:
                $this->updateQuestionType8($question, $request);
                break;
            case Question::TYPE_9:
                $this->updateQuestionType9($question, $request);
                break;
            case Question::TYPE_10:
                $this->updateQuestionType10($question, $request);
                break;
            case Question::TYPE_11;
                $this->updateQuestionType11($question, $request);
                break;
            case Question::TYPE_12;
                $this->updateQuestionType12($question, $request);
                break;
            case Question::TYPE_13:
                $this->updateQuestionType13($question, $request);
                break;
        }

        return Redirect::to(URL::previous() . "#block_add");
    }

    /**
     * choose the right answer
     * @param $id
     * @param $request
     */
    private function questionType1($id, $request)
    {
        Question::create([
            'question_block_id' => $id,
            'type' => $request->get('q_type'),
            'question' => $request->get('task'),
            'answer' => json_encode($request->get('answers')),
            'true_answer' => $request->get('key'),
            'hint' => $request->get('explanation'),
            'point' => $request->get('point'),
        ]);
    }

    /**
     * multiple choice
     * @param $id
     * @param $request
     */
    private function questionType2($id, $request)
    {
        Question::create([
            'question_block_id' => $id,
            'type' => $request->get('q_type'),
            'question' => $request->get('task'),
            'answer' => json_encode($request->get('answers')),
            'true_answer' => json_encode($request->get('key')),
            'hint' => $request->get('explanation'),
            'point' => json_encode($request->get('point'))
        ]);
    }

    /**
     * short answer
     * @param $id
     * @param $request
     */
    private function questionType3($id, $request)
    {
        Question::create([
            'question_block_id' => $id,
            'type' => $request->get('q_type'),
            'question' => $request->get('task'),
            'true_answer' => $request->get('key'),
            'hint' => $request->get('explanation'),
            'point' => $request->get('point')
        ]);
    }

    /**
     * reoder words
     * @param $id
     * @param $request
     */
    private function questionType4($id, $request)
    {
        Question::create([
            'question_block_id' => $id,
            'type' => $request->get('q_type'),
            'question' => $request->get('task'),
            'answer' => json_encode($request->get('trunks')),
            'true_answer' => join(" ", $request->get('trunks')),
            'hint' => $request->get('explanation'),
            'point' => $request->get('point')
        ]);
    }

    /**
     * reoder sentence
     * @param $id
     * @param $request
     */
    private function questionType5($id, $request)
    {
        Question::create([
            'question_block_id' => $id,
            'type' => $request->get('q_type'),
            'question' => $request->get('task'),
            'answer' => json_encode($request->get('trunks')),
            'true_answer' => join(" ", $request->get('trunks')),
            'hint' => $request->get('explanation'),
            'point' => $request->get('point')
        ]);
    }

    /**
     * matching
     * @param $id
     * @param $request
     */
    private function questionType6($id, $request)
    {
        $ans = array_merge($request->get('keys'), $request->get('answers'));
        Question::create([
            'question_block_id' => $id,
            'type' => $request->get('q_type'),
            'question' => $request->get('task'),
            'answer' => json_encode($request->get('trunks2')),
            'true_answer' => json_encode($ans),
            'hint' => $request->get('explanation'),
            'point' => json_encode($request->get('point'))
        ]);
    }

    /**
     * write a paragraph
     * @param $id
     * @param $request
     */
    private function questionType7($id, $request)
    {
        Question::create([
            'question_block_id' => $id,
            'type' => $request->get('q_type'),
            'question' => $request->get('task'),
            'answer' => $request->get('totalword'),
            'hint' => $request->get('explanation'),
        ]);
    }

    /**
     * fill in the blank
     * @param $id
     * @param $request
     */
    private function questionType8($id, $request)
    {
        Question::create([
            'question_block_id' => $id,
            'type' => $request->get('q_type'),
            'question' => $request->get('task'),
            'answer' => $request->get('key'),
            'point' => $request->get('point'),
            'hint' => $request->get('explanation'),
        ]);
    }

    /**
     * correct the sentence
     * @param $id
     * @param $request
     */
    private function questionType9($id, $request)
    {
        Question::create([
            'question_block_id' => $id,
            'type' => $request->get('q_type'),
            'question' => $request->get('task'),
            'answer' => $request->get('answer'),
            'true_answer' => $request->get('key'),
            'point' => $request->get('point'),
            'hint' => $request->get('explanation'),
        ]);
    }

    /**
     * choose the right answer
     * @param $id
     * @param $request
     */
    private function questionType10($id, $request)
    {
        Question::create([
            'question_block_id' => $id,
            'type' => $request->get('q_type'),
            'question' => $request->get('task'),
            'answer' => $request->get('key'),
            'point' => $request->get('point'),
            'hint' => $request->get('explanation'),
        ]);
    }

    /**
     * find words in paragraph
     * @param $id
     * @param $request
     */
    private function questionType11($id, $request)
    {
        Question::create([
            'question_block_id' => $id,
            'type' => $request->get('q_type'),
            'question' => $request->get('task'),
            'answer' => $request->get('key'),
            'point' => $request->get('point'),
            'hint' => $request->get('explanation'),
        ]);
    }

    /**
     * insert sentence
     * @param $id
     * @param $request
     */
    private function questionType12($id, $request)
    {
        Question::create([
            'question_block_id' => $id,
            'type' => $request->get('q_type'),
            'question' => $request->get('task'),
            'answer' => $request->get('key'),
            'true_answer' => $request->get('answer'),
            'point' => $request->get('point'),
            'hint' => $request->get('explanation'),
        ]);
    }

    /**
     * speaking
     * @param $id
     * @param $request
     */
    private function questionType13($id, $request)
    {
        Question::create([
            'question_block_id' => $id,
            'type' => $request->get('q_type'),
            'question' => $request->get('task'),
            'true_answer' => $request->get('duration'),
            'hint' => $request->get('explanation'),
        ]);
    }

    private function updateQuestionType1($question, $request)
    {
        $question->question = $request->get('task');
        $question->answer = json_encode($request->get('answers'));
        $question->true_answer = $request->get('key');
        $question->hint = $request->get('explanation');
        $question->point = $request->get('point');
        $question->save();
    }

    private function updateQuestionType2($question, $request)
    {
        $question->question = $request->get('task');
        $question->answer = json_encode($request->get('answers'));
        $question->true_answer = json_encode($request->get('key'));
        $question->hint = $request->get('explanation');
        $question->point = json_encode($request->get('point'));
        $question->save();
    }

    private function updateQuestionType3($question, $request)
    {
        $question->question = $request->get('task');
        $question->true_answer = $request->get('key');
        $question->hint = $request->get('explanation');
        $question->point = $request->get('point');
        $question->save();
    }

    private function updateQuestionType4($question, $request)
    {
        $question->question = $request->get('task');
        $question->answer = json_encode($request->get('answers'));
        $question->true_answer = join(" ", $request->get('answers'));
        $question->hint = $request->get('explanation');
        $question->point = $request->get('point');
        $question->save();
    }

    private function updateQuestionType5($question, $request)
    {
        $question->question = $request->get('task');
        $question->answer = json_encode($request->get('answers'));
        $question->true_answer = join(" ", $request->get('answers'));
        $question->hint = $request->get('explanation');
        $question->point = $request->get('point');
        $question->save();
    }

    private function updateQuestionType6($question, $request)
    {
        $ans = array_merge($request->get('keys'), $request->get('answers'));
        $question->question = $request->get('task');
        $question->answer = json_encode($request->get('trunks2'));
        $question->true_answer = json_encode($ans);
        $question->hint = $request->get('explanation');
        $question->point = json_encode($request->get('point'));
        $question->save();
    }

    private function updateQuestionType7($question, $request)
    {
        $question->question = $request->get('task');
        $question->answer = $request->get('totalword');
        $question->hint = $request->get('explanation');
        $question->save();
    }


    private function updateQuestionType8($question, $request)
    {
        $question->question = $request->get('task');
        $question->answer = $request->get('key');
        $question->hint = $request->get('explanation');
        $question->point = $request->get('point');
        $question->save();
    }

    private function updateQuestionType9($question, $request)
    {
        $question->question = $request->get('task');
        $question->answer = $request->get('answer');
        $question->true_answer = $request->get('key');
        $question->hint = $request->get('explanation');
        $question->point = $request->get('point');
        $question->save();
    }

    private function updateQuestionType10($question, $request)
    {
        $question->question = $request->get('task');
        $question->answer = $request->get('key');
        $question->hint = $request->get('explanation');
        $question->point = $request->get('point');
        $question->save();
    }

    private function updateQuestionType11($question, $request)
    {
        $question->question = $request->get('task');
        $question->answer = $request->get('key');
        $question->hint = $request->get('explanation');
        $question->point = $request->get('point');
        $question->save();
    }

    private function updateQuestionType12($question, $request)
    {
        $question->question = $request->get('task');
        $question->answer = $request->get('key');
        $question->true_answer = $request->get('answer');
        $question->point = $request->get('point');
        $question->hint = $request->get('explanation');
        $question->save();
    }

    private function updateQuestionType13($question, $request)
    {
        $question->question = $request->get('task');
        $question->true_answer = $request->get('duration');
        $question->hint = $request->get('explanation');
        $question->save();
    }

    //import bunch of questions
    public function import($id, Request $request)
    {
        $data = $request->data;
        $result = [];
        $lines = preg_split("/((\r?\n)|(\r\n?))/", $data);
        $i = 0;
        for ($i; $i < count($lines) - 3; $i = $i + 3) {
            $questionText = trim($lines[$i]);
            $answersLine = $lines[$i + 1];
            $trueAnswer = $lines[$i + 2];
            $start = strpos($questionText, ':');
            $questionText = trim(substr($questionText, $start + 1));
            $answers = [];

            $tempAnswers = preg_split('/\t+/', $answersLine);
            foreach ($tempAnswers as $item) {
                $index = strpos($item, '.');
                array_push($answers, trim(substr($item, $index + 1)));
            }
            if ($trueAnswer == 'A') {
                $trueAnswer = 1;
            }
            if ($trueAnswer == 'B') {
                $trueAnswer = 2;
            }
            if ($trueAnswer == 'C') {
                $trueAnswer = 3;
            }
            if ($trueAnswer == 'D') {
                $trueAnswer = 4;
            }
            array_push($result, $questionText);
            array_push($result, $answers);
            array_push($result, $trueAnswer);

            $question = new \App\Models\Question();
            $question->question_block_id = $id;
            $question->type = "Choose one answer";
            $question->question = $questionText;
            $question->answer = json_encode($answers);
            $question->point = 1;
            $question->true_answer = $trueAnswer;
            $question->hint = "";
            $question->explain = "";
            $question->save();
        }
        return Redirect::back();
    }
}
