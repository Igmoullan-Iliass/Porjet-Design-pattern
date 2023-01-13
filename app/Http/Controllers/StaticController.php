<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function master() {
        return view('layout.master');
    }
    public function admin() {
        return view('admin.admin');
    }
    public function dashboard() {
        return view('admin.dashboard');
    }
    public function contact() {
        return view('layout.contact');
    }

    public function techniciens() {
        return view('admin.techniciens');
    }
    public function responsable(){
        return view('responsable.responsable');
    }
    public function responsabledashboard() {
        return view('responsable.dashboard');
    }

}
   
    
