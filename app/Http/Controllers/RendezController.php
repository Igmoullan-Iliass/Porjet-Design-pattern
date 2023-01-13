<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rendv;

class RendezController extends Controller
{
    public function index(){
        $listrv=Rendv::all();
        return view('index',['rvs'=>$listrv]);
    }
    public function store(Request $request){
        $rv=new Rendv();
        $rv->date=$request->input('daterv');
        $rv->time=$request->input('time');
        $rv->username=$request->input('username');
        $rv->telephone=$request->input('tel');
        $rv->email=$request->input('email');
        $rv->ville=$request->input('city');
     $rv->save();
     return redirect('rv');
    }
    public function edit($id){
      $rv=Rendv::find($id);
      return view('edit',['rv'=>$rv]);
    }
    public function update(Request $request,$id){
        $rv=Rendv::find($id);
        $rv->date=$request->input('daterv');
        $rv->time=$request->input('time');
        $rv->username=$request->input('username');
        $rv->telephone=$request->input('tel');
        $rv->email=$request->input('email');
        $rv->ville=$request->input('city');
        $rv->save();
     return redirect('rv');
    }
    public function destroy(Request $request,$id){
        $rv=Rendv::find($id);
        $rv->delete();
        return redirect('rv');
           }
}
