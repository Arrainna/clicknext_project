<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForgetPasswordController extends Controller
{
    //
    public function ForgetPassword(){
        return view('auth.forgot-password');

    }

    function forgotPasswordPost(Request $request){


    }
}
