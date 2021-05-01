<?php

namespace App\Http\Controllers;

use App\Yoyaku;
use Illuminate\Http\Request;
use Carbon\Carbon;

class TuutiController extends Controller
{
    public function index(){
        
        return view('tuuti.index', [
            
         ]);
    }
   
   
}