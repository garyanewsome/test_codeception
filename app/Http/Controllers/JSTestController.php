<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class JSTestController extends Controller
{
  
  public function index(){
    $date = array('testing 1, 2...');
    return view('jstest', $date);
  }  
  
  public function create(){

  }

}
