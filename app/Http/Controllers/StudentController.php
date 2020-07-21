<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function stud_dashboard()
    {
      session(['pagetitle' => "dashboard"]);
      return view('stud_dashboard');
    }

    public function stud_class_list()
    {
      session(['pagetitle' => "classlist"]);
      return view('stud_class_list');
    }

    public function stud_profile_edit()
    {
      session(['pagetitle' => "profile"]);
      return view('stud_profile_edit');
    }

    public function stud_class_find()
    {
      session(['pagetitle' => "classfind"]);
      return view('stud_class_find');
    }

    public function stud_class_details1()
    {
      session(['pagetitle' => "classdetails1"]);
      return view('stud_class_details1');
    }
    
    public function stud_class_details2()
    {
      session(['pagetitle' => "classdetails2"]);
      return view('stud_class_details2');
    }

    public function stud_cart()
    {
      session(['pagetitle' => "cart"]);
      return view('stud_cart');
    }

    public function stud_payment()
    {
      session(['pagetitle' => "payment"]);
      return view('stud_payment');
    }

    public function stud_invoice()
    {
      session(['pagetitle' => "invoice"]);
      return view('stud_invoice');
    }
}
