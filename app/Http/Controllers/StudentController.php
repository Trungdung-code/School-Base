<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function billinginfo()
    {
        return view('pages.students.billinginfo');
    }
    public function deleteprofile()
    {
        return view('pages.students.deleteprofile');
    }
    public function editprofile()
    {
        return view('pages.students.editprofile');
    }
    public function invoice()
    {
        return view('pages.students.invoice');
    }
    public function linkedaccounts()
    {
        return view('pages.students.linked');
    }
    public function notifications()
    {
        return view('pages.students.notifications');
    }
    public function payment()
    {
        return view('pages.students.payment');
    }
    public function profileprivacy()
    {
        return view('pages.students.profileprivacy');
    }
    public function security()
    {
        return view('pages.students.security');
    }
    public function socialprofiles()
    {
        return view('pages.students.socialprofile');
    }
    public function subscrip()
    {
        return view('pages.students.subcriptions');
    }
}
