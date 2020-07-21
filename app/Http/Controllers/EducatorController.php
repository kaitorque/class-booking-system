<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EducatorController extends Controller
{
    public function edu_dashboard()
    {
      session(['pagetitle' => "dashboard"]);
      return view('edu_dashboard');
    }

    public function edu_class_list()
    {
      session(['pagetitle' => "class"]);
      return view('edu_class_list');
    }

    public function edu_class()
    {
      session(['pagetitle' => "class"]);
      return view('edu_class');
    }

    public function edu_class_edit()
    {
      session(['pagetitle' => "class"]);
      return view('edu_class_edit');
    }

    public function edu_profile_edit()
    {
      session(['pagetitle' => "profile"]);
      return view('edu_profile_edit');
    }

    public function edu_class_find()
    {
      session(['pagetitle' => "findclass"]);
      return view('edu_class_find');
    }
}
