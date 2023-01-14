<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rendv;
use App\Http\Requests\rvRequest;
use Carbon\Carbon;

class RendezController extends Controller
{
    public function index(){
        $listrv=Rendv::all();
        return view('index',['rvs'=>$listrv]);
    }
    public function store(rvRequest $request){
        $rv=new Rendv();
        $rv->event_start=$request->input('event_start');
       // $rv->event_end=$request->input('event_end');
       $date = Carbon::parse($rv->event_start);
       $rv->event_end= $date->addMinutes(15);
        $rv->username=$request->input('username');
        $rv->telephone=$request->input('tel');
        $rv->email=$request->input('email');
        $rv->ville=$request->input('city');
     $rv->save();
     session()->flash('success','le rendezvous est bien été ajouter !');
     return redirect('rv');
    }
    public function edit($id){
      $rv=Rendv::find($id);
      return view('edit',['rv'=>$rv]);
    }
    public function update(rvRequest $request,$id){
        $rv=Rendv::find($id);
        $rv->event_start=$request->input('event_start');
       // $rv->event_end=$request->input('event_end');
       $date = Carbon::parse($rv->event_start);
       $rv->event_end= $date->addMinutes(15);
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
