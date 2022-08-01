<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\ChangePasswordRequest;
use Auth;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Response;
use Validator;

class ProfileController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function show()
    {
        $user = Auth::user();
        return view('students.profile.profile', compact('user'));
    }

    public function editProfile()
    {

        return view('pages.students.editprofile');
    }
    public function socialprofiles()
    {
        return view('pages.students.socialprofile');
    }
    public function deleteProfile()
    {
        $user = Auth::user();
        return view('pages.students.deleteprofile');
    }
    public function changePassword(ChangePasswordRequest $request)
    {
        $user = Auth::user();
        $password_old = $request->password_old;
        $password_new = $request->password_new;

        if (Hash::check($password_old, $user->password)) {
            $user->password = bcrypt($password_new);
            $user->save();
            return redirect()->route('student.profile.show');
        } else {
            return redirect()->route('student.profile.show')->withErrors(['msg', 'The old password does not match']);
        }
    }
    public function changeAvatar(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'image' => 'required|image',
        ]);

        if ($validator->fails()) {
            return Response::json(['success' => false, 'errors' => $validator->errors()->all()]);
        } else {
            $user = Auth::user();
            $destinationPath = 'uploads';
            $fileName = time() . "-" . $user->id;
            $user->avatar = '/' . $destinationPath . '/' . $fileName;
            $user->save();
            Input::file('image')->move($destinationPath, $fileName);
            return redirect()->back()->with('success', 'Change avatar successfully');
            /*            return Response::json(['success'=>true,'file'=>asset($user->avatar->path)]);*/
        }
    }
}
