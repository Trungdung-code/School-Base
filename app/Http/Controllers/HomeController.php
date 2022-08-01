<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Contest;
use App\Models\Course;
use App\Models\User;
use App\Repositories\CourseRepository;
use App\Repositories\GroupRepository;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * @param GroupRepository $groupRepository
     * @param CourseRepository $courseRepository
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(GroupRepository $groupRepository, CourseRepository $courseRepository)
    {
        $groups = $groupRepository->groups();
        $courses = Course::available()->orderBy('updated_at', 'desc')->take(8)->get();
        // dd($courses);
        $contests = Contest::available()->orderBy('start_time', 'desc')->take(8)->get();
        $activities = Activity::orderBy('created_at', 'desc')->take(2)->get();
        $upcomingContest = Contest::where('start_time', '>', Carbon::now())->orderBy('start_time')->first();
        /*        $courses = [$all_courses[0], $all_courses[1], $all_courses[2]];*/
        return view('pages.home', compact('groups', 'courses', 'contests', 'activities', 'upcomingContest'));
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function login()
    {
        return view('guests.login');
    }

    public function checkEmail(Request $request)
    {
        $email = $request->email;
        $emails = User::select('email')->pluck('email')->toArray();
        if (in_array($email, $emails))
            return 'True';
        return 'False';
    }

    public function about()
    {
        return view('pages.about');
    }
}
