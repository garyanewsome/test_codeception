<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Date;

class JSTestController extends Controller
{

  public function index(Request $request){

    $dates = Date::all();
    return view('jstest',compact('title', 'dates'));
  }

  public function store(Request $request){
    $params = $request->only(['date']);
    $input = Input::create($params);

    return Redirect::route('jstest.index');
  }

  public function update(Request $request, $jstest){
    $date = Date::find($jstest);
    $params = $request->only(['payload']);
    // dd($date, $params);
    $date->update(['created_at' => $params['payload']]);
  }

}
