<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registerController extends Controller
{
    public function showregister(){
        return View::make('/register');
    }
    public function showlogin(){
        return View::make('/login');
    }
    public function showForget(){
        return View::make('/forgot');
    }
    public function showReset(){
        return View::make('/reset');
    }
}
