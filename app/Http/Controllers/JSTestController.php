<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class JSTestController extends Controller
{
  
  public function index(){
    $date[] = 'testing dates';
    return view('jstest', $date);
    // return view('jstest');
  }  
  
  public function setDate(){

  }

  public function getDate(){
    
  }
}
