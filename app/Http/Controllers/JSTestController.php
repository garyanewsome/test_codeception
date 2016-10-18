<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class JSTestController extends Controller
{
  
  public function index(){
    $dates = Input::all();
    
    return View::make('jstest', array('dates'=>$dates));

  }

  public function store(Request $request){
    $params = $request->only(['date']);
    $input = Input::create($params);

    return Redirect::route('jstest.index');
  }

}
