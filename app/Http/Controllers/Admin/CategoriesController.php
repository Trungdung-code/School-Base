<?php

namespace App\Http\Controllers\Admin;

use App\Models\CategoryGroup;
use App\Repositories\CategoryRepository;
use App\Repositories\CourseRepository;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\QuestionBlock;

class CategoriesController extends Controller
{
    public function store(Request $request, CategoryRepository $categoryRepository)
    {
        $name = $request->get('name');
        $groupId = $request->get('group_id');
        $courses = $request->get('courses');
        $category = $categoryRepository->createByName($name, $groupId);
        $courseRepository = new CourseRepository();
        if($courses != null){
            foreach($courses as $course)
            {
                $courseRepository->createByName($course, $category->id);
            }
        }
        return redirect()->back();
    }

    public function editCategoryName(Request $request, CategoryRepository $categoryRepository)
    {
        $category = $categoryRepository->category($request->id);
        $category->name = $request->name;
        $category->save();
        return redirect()->back();
    }

    public function update($id, Request $request, CategoryRepository $categoryRepository)
    {
        $name = $request->get('name');
        $groupId = $request->get('group_id');
        $coursesName = $request->get('courses');
        $coursesId = $request->get('coursesId');
        $category = $categoryRepository->category($id);
        $category->name = $name;
        $category->save();
        $courseRepository = new CourseRepository();
        //delete removed courses
        $courses = $category->courses;
        for($i = 0; $i < count($courses); $i++){
            $id = $courses[$i]->id;
            if(array_search($id, $coursesId) === false){
                $courses[$i]->delete();
            }
        }
        for($i = 0; $i < count($coursesId); $i++){
            //update available courses name
            if($coursesId[$i] >= 0){
                $course = $courseRepository->course($coursesId[$i]);
                $course->name = $coursesName[$i];
                $course->save();
            }
            //create the new courses
            if($coursesId[$i] == -1){
                $courseRepository->createByName($coursesName[$i], $category->id);
            }
        }
        return redirect()->back();
    }

    public function destroy($id, CategoryRepository $categoryRepository)
    {
        $category = $categoryRepository->category($id);
        $courses = $category->courses;
        foreach($courses as $course)
        {
            $course->delete();
        }
        $category->delete();
        return redirect()->back();
    }
}
