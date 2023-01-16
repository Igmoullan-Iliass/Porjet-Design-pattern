<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class HomeController extends Controller
{
    //
    public function redirect(){

        if(Auth::id()){
            if(Auth::user()->role=='0')
            {
                return view('home');
            }
            
            else{
                if(Auth::user()->role=='1')
                {
                    return view('admin.admindashboard');
                }
                else {
                    if(Auth::user()->role=='2')
                    {
                        return view('technicien.home');
                    }
                    else {
                        if(Auth::user()->role=='3')
                        {
                            return view('succurcale.home');
                        }
                    }
                }
            }
        }

        else{
            return redirect()->back();
        }
    }
   
}