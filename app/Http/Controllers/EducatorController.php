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
}
