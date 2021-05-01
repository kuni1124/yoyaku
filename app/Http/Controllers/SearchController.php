<?php

namespace App\Http\Controllers;

use App\Yoyaku;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class SearchController extends Controller
{
    public function index(){
       
        
        return view('kakuninn.index', [
            
         ]);
    }

    public function show(Request $request){
        
        $query = Yoyaku::query();
        $users = Auth::user();
    if($users){
        $yoyakus = $users->yoyakus()->get();
        $search1 = $request->input('name');
        $search2 = $request->input('tel');
         // プルダウンメニューで指定なし以外を選択した場合、$query->whereで選択した棋力と一致するカラムを取得します
        

         // プルダウンメニューで指定なし以外を選択した場合、$query->whereで選択した好きな戦法と一致するカラムを取得します
           $query->where('name', 'like', '%'.$search1.'%')->get();
           $query->where('tel', $search2)->get();
           
           $data = $query->paginate(10);
        return view('kakuninn.show',[
            'data' => $data,
            'yoyakus' => $yoyakus,
        ]);
    }else{
        
        
        $search1 = $request->input('name');
        $search2 = $request->input('tel');
         // プルダウンメニューで指定なし以外を選択した場合、$query->whereで選択した棋力と一致するカラムを取得します
        

         // プルダウンメニューで指定なし以外を選択した場合、$query->whereで選択した好きな戦法と一致するカラムを取得します
           $query->where('name', 'like', '%'.$search1.'%')->get();
           $query->where('tel', $search2)->get();
           
           $data = $query->paginate(10);
           return view('kakuninn.show',[
               'data' => $data,
               
           ]);
    }
        // ユーザ名入力フォームで入力した文字列を含むカラムを取得します
        
           
        

        
       
    }
}