<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Yoyaku;
use App\User;
use Carbon\Carbon;
class StaffController extends Controller
{
    public function index(Request $request){
        $yoyaku_date = $request->input('date');  
        
       
        if ($yoyaku_date){
            $yoyakus = Yoyaku::where('date',$yoyaku_date)->get();
           
            
        } else {
            $yoyakus = Yoyaku::all();
           
        }
        
        return view('staff.index', [
            'yoyakus' => $yoyakus,
         ]);
    }


    public function show()
    {    
         $users = User::all();
         
         
         
         return view('staff.show', [ 
            'users' => $users,
        ]);
        
    }

    public function edit($id)
    {    
         $user = User::findOrFail($id);
         return view('staff.edit', [ 
            'user' => $user,
        ]);
        
    }
    public function store(Request $request ,$id)
    {    
         $user = User::findOrFail($id);
         $user->text = $request->text;
         $user->save();
         return redirect('/staff.show')->with('flash_message', 'STORE!');
        
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
         $yoyaku = Yoyaku::where('user_id','=',$user->id);
         $yoyaku->delete();
         $user->delete();
         return view('staff.tuuti2', [
            
            ]);
    }

}
