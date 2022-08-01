<?php

namespace App\Http\Controllers\Admin;

use App\Models\CategoryGroup;
use App\Models\Resource;
use App\Repositories\GroupRepository;
use DB;
use Faker\Provider\Image;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Validator;

class GroupsController extends Controller
{
    public function store(Request $request)
    {
        $group = new CategoryGroup();
        $group->name = $request->get('name');
        $group->description = $request->get('description');
        $group->save();
        DB::table('resources')->insert([
            'resourceable_id' => $group->id,
            'resourceable_type' => CategoryGroup::class,
            'path' => 'uploads/courses/default_cover.jpg'
        ]);

        if ($request->hasFile('image')) {
            $validator = Validator::make($request->all(), [
                'image' => 'required|image',
            ]);

            if ($validator->fails()) {
                return response()->json(['success' => false, 'errors' => $validator->errors()->all()]);
            } else {
                $destinationPath = 'uploads/courses';
                $fileName = time() . "-" . $group->id;
                $group->coverImage->path = $destinationPath . '/' . $fileName;
                $group->coverImage->save();
                $request->file('image')->move($destinationPath, $fileName);
                return redirect()->back();
            }
        }else
            return redirect()->back();


    }
    public function  update($id, Request $request, GroupRepository $groupRepository)
    {
        $group = $groupRepository->group($id);
        $group->name = $request->get('name');
        $group->description = $request->get('description');
        $group->save();

        if ($request->hasFile('image')) {
            $validator = Validator::make($request->all(), [
                'image' => 'required|image',
            ]);

            if ($validator->fails()) {
                return response()->json(['success' => false, 'errors' => $validator->errors()->all()]);
            } else {
                $destinationPath = 'uploads/courses';
                $fileName = time() . "-" . $group->id;
                $group->coverImage->path = $destinationPath . '/' . $fileName;
                $group->coverImage->save();
                $request->file('image')->move($destinationPath, $fileName);
                return redirect()->back();
            }
        }else
            return redirect()->back();

    }

    public function destroy($id, GroupRepository $groupRepository)
    {
        $group = $groupRepository->group($id);
        $group->delete();
        return redirect()->back();
    }
}
