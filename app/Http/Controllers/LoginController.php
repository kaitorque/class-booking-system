<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
      return view('login');
    }

    public function login_post(Request $request)
    {
      //Declare custom error message for custom validator
      $errorMsg = [];
      //Using laravel validator for input
      //Custom Validation
      //If no error
      if(empty($errorMsg))
      {
        session(['loginas' => $request->loginas]);
        if($request->loginas == 'edu')
          $link = route('edu_dashboard');
        else
          $link = route('stud_dashboard');
        $response = "Successfully sign in";
        return response()->json([
          "success" => true,
          "response" => $response,
          "link" => $link,
        ]);
      }

      //Return for custom validation
      return response()->json([
        "success" => false,
        "response" => $errorMsg,
      ]);
    }

    public function logout(Request $request)
    {
      session()->flush();
      return redirect()->route('login');
    }

    
}
