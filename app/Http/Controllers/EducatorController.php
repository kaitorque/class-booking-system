<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EducatorController extends Controller
{
    public function edu_dashboard()
    {
      return view('edu_dashboard');
    }

    public function edu_class_list()
    {
      return view('edu_class_list');
    }

    public function edu_class()
    {
      return view('edu_class');
    }
}
