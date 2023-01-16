<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Succurcales;
use App\Http\Requests\rvRequest;
use Carbon\Carbon;

class SuccurcaleController extends Controller
{
    public function create(){
        return view('createsucc');
    }
    public function index(){
        $listsucc=Succurcales::all();
        return view('indexsucc',['succs'=>$listsucc]);
    }
    public function store(Request $request){
        $succ=new Succurcales();
        $succ->nom=$request->input('nom');
        $succ->region=$request->input('region');
        $succ->ville=$request->input('ville');
     $succ->save();
     session()->flash('success','le Succurcale a bien été ajouter !');
     return redirect('succ');
    }
    public function edit($id){
        $succ=Succurcales::find($id);
        return view('editsucc',['succ'=>$succ]);
      }
      public function update(Request $request,$id){
          $succ=Succurcales::find($id);
          $succ->nom=$request->input('nom');
          $succ->region=$request->input('region');
          $succ->ville=$request->input('ville');
          $succ->save();
       return redirect('succ');
      }
      public function destroy(Request $request,$id){
        $tech=Succurcales::find($id);
        $tech->delete();
        return redirect('succ');
           }
}
