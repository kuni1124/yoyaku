<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Yoyaku;
use App\User;
use Carbon\Carbon;
class StaffController extends Controller
{
    public function index(){
       
        $yoyakus = Yoyaku::all();
        return view('staff.index', [
            'yoyakus' => $yoyakus,
         ]);
    }


    public function show()
    {    
         $users = User::pluck('id');
         $yoyakus = Yoyaku::where('user_id','=',$users)->get();
         
         
         return view('staff.show', [ 
            'yoyakus' => $yoyakus,
        ]);
        
    }


    public function destroy()
    {    
         $datetime = new Carbon();
         $nowtime = Yoyaku::where('date','<=',$datetime);
         $nowtime -> delete();
         return view('staff.tuuti', [
            
        ]);
        
    }

    public function destroy2($id)
    {    
         $user = User::findOrFail($id);
          
         $user->delete();
         return view('staff.tuuti2', [
            
        ]);
        
    }

}
