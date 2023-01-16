<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Techniciens;
use App\Http\Requests\rvRequest;
use Carbon\Carbon;

class TechController extends Controller
{
    public function create(){
        return view('createt');
    }
    public function index(){
        $listech=Techniciens::all();
        return view('indextech',['techs'=>$listech]);
    }
    public function store(Request $request){
        $tech=new Techniciens();
        $tech->username=$request->input('username');
        $tech->email=$request->input('email');
     $tech->save();
     session()->flash('success','le Techniciens est bien été ajouter !');
     return redirect('tech');
    }
    public function edit($id){
        $tech=Techniciens::find($id);
        return view('edittech',['tech'=>$tech]);
      }
      public function update(Request $request,$id){
          $tech=Techniciens::find($id);
          $tech->username=$request->input('username');
          $tech->email=$request->input('email');
          $tech->save();
       return redirect('tech');
      }
      public function destroy(Request $request,$id){
        $tech=Techniciens::find($id);
        $tech->delete();
        return redirect('tech');
           }
    
}
