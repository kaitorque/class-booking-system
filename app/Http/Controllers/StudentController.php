<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function stud_dashboard()
    {
      return view('stud_dashboard');
    }

    public function stud_class_list()
    {
      return view('stud_class_list');
    }
}
