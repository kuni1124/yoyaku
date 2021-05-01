<?php

namespace App\Http\Controllers;

use App\Yoyaku;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class YoyakusController extends Controller
{    
  

    public function index()
    {

        $yoyakus= Yoyaku::all();
        
        return view('yoyakus.index', [
               'yoyakus'=>$yoyakus,
            ]);
        
    }
  
 


    public function create(Request $request)
    { 
        $yoyaku = new Yoyaku; 
        $sumitimes = Yoyaku::where('date','=',$request->date)->get()->pluck('time');
        
        
        return view('yoyakus.create', [
            'yoyaku' =>$yoyaku,
            'date' => $request->date,
            'sumitimes' => $sumitimes,
        ]);
    }
    
    public function store(Request $request)
    {  
       $user = Auth::user();
       $yoyaku = new Yoyaku;
       $yoyaku->id = $request->id;
       $yoyaku->time = $request->time;
       $yoyaku->date = $request->date;
       
       if($user){
          $yoyaku->tel = $user->tel;
          $yoyaku->name = $user->name;
          $yoyaku->user_id = $user->id;
       }else{
       $yoyaku->tel = $request->tel;
       $yoyaku->name = $request->name;
       }
       $yoyaku->save();
       
       return view('tuuti.index', [
            
        ]);
       
    }

    // putまたはpatchでmessages/（任意のid）にアクセスされた場合の「更新処理」
    public function update(Request $request, $id)
    {
        // $randam = Dai::findOrFail($id);
        // $shushoku = Shushoku::findOrFail($request->shushoku_id);
        // $randam->bunrui = $shushoku->bunrui;
        // $randam->kakaku = $shushoku->kakaku;
        // $randam->name = $shushoku->name;
        // $randam->genka = $shushoku->genka;

        // $randam->save();
        // return redirect('/randam-index')->with('flash_message', 'PUT!');
    }

    public function destroy($id)
    {    
         $yoyaku = Yoyaku::findOrFail($id);
          
         $yoyaku->delete();
         return view('tuuti.index2', [
            
        ]);
        
    }


    public function update3(Request $request, $id)
    {
        // $randam3 = Shou::findOrFail($id);
        // $sirumono = Sirumono::findOrFail($request->sirumono_id);
        // $randam3->bunrui = $sirumono->bunrui;
        // $randam3->kakaku = $sirumono->kakaku;
        // $randam3->name = $sirumono->name;
        
        // $randam3->genka = $sirumono->genka;

        // $randam3->save();
        // return redirect('/randam-index')->with('flash_message', 'PUT!');
    }


    // deleteでmessages/（任意のid）にアクセスされた場合の「削除処理」
   

    public function destroy2($id)
    {
        // $randam2 = Tyuu::findOrFail($id);
        // $randam2->bunrui = null;
        // $randam2->kakaku = null;
        // $randam2->name = null;
        // $randam2->genka = null;
        // $randam2->save();
        //  return redirect('/randam-index')->with('flash_message', 'DELETE!');
    }
    public function destroy3($id)
    {
        // $randam3 = Shou::findOrFail($id);
        // $randam3->bunrui = null;
        // $randam3->kakaku = null;
        // $randam3->name = null;
        // $randam3->genka = null;
        // $randam3->save();
        //  return redirect('/randam-index')->with('flash_message', 'DELETE!');
    }

    public function destroy4()
    {
        // \DB::table('dais')->delete();
        // \DB::table('tyuus')->delete();
        // \DB::table('shous')->delete();
  
        // return redirect('/randam-index')->with('flash_message', 'PUT!');
    }

    private function shushoku_create() {
        // $shushokushikui = Shushoku::where('display', true)->where('bunrui' , '1')->where('kakaku' , '1')->get();
        // $shushokushikui = $shushokushikui->shuffle();
        // $shushokustakai = Shushoku::where('display', true)->where('bunrui' , '1')->where('kakaku' , '2')->get();
        // $shushokustakai = $shushokustakai->shuffle();
        
        // $this->create_shoku_data('App\Dai', $shushokushikui, $shushokustakai);
    }
    
    private function shushoku_create2() {
        // $shushokushikui = Shushoku::where('display', true)->where('bunrui' , '2')->where('kakaku' , '1')->get();
        // $shushokushikui = $shushokushikui->shuffle();
        // $shushokustakai = Shushoku::where('display', true)->where('bunrui' , '2')->where('kakaku' , '2')->get();
        // $shushokustakai = $shushokustakai->shuffle();

        // $this->create_shoku_data('App\Dai', $shushokushikui, $shushokustakai);
    }

    private function fukushoku_create() {
        // $fukushokushikui = Fukushoku::where('display', true)->where('bunrui' , '1')->where('kakaku' , '2')->get();
        // $fukushokushikui = $fukushokushikui->shuffle();
        // $fukushokustakai = Fukushoku::where('display', true)->where('bunrui' , '1')->where('kakaku' , '1')->get();
        // $fukushokustakai = $fukushokustakai->shuffle();
        
        // $this->create_shoku_data('App\Tyuu', $fukushokushikui, $fukushokustakai);
        
    }

    private function fukushoku_create2() {
        // $fukushokushikui = Fukushoku::where('display', true)->where('bunrui' , '2')->where('kakaku' , '2')->get();
        // $fukushokushikui = $fukushokushikui->shuffle();
        // $fukushokustakai = Fukushoku::where('display', true)->where('bunrui' , '2')->where('kakaku' , '1')->get();
        // $fukushokustakai = $fukushokustakai->shuffle();
        // $this->create_shoku_data('App\Tyuu', $fukushokushikui, $fukushokustakai);
    }

}
//         $sirumonoshikui = Sirumono::where('display', true)->where('bunrui' , '1')->where('kakaku' , '1')->get();
//         $sirumonoshikui = $sirumonoshikui->shuffle();
//         $sirumonostakai = Sirumono::where('display', true)->where('bunrui' , '1')->where('kakaku' , '2')->get();
//         $sirumonostakai = $sirumonostakai->shuffle();
        
//         $count = 0;
//         // $dt = new Carbon('first day of next month');
//         // $tukiowari =  $dt->daysInMonth;
//         $hikui = true;
//         $hikui_count = 0;
//         $takai_count = 0;
//         for ($i = 1;$i <= 38;$i++) {
//             //if($dt->isSunday() or $dt->isSaturday())
//             if($i == 1 ){
//                 $randam3 = new Shou;
//                 $randam3->bunrui = null;
//                 $randam3->kakaku = null;
//                 $randam3->name = null;
//                 $randam3->genka = null;
//                 $randam3->save();
              
//             }
//             elseif($i == 7 ){
//                 $randam3 = new Shou;
//                 $randam3->bunrui = null;
//                 $randam3->kakaku = null;
//                 $randam3->name = null;
//                 $randam3->genka = null;
//                 $randam3->save();
              
//             }
//             elseif($i == 8 ){
//                 $randam3 = new Shou;
//                 $randam3->bunrui = null;
//                 $randam3->kakaku = null;
//                 $randam3->name = null;
//                 $randam3->genka = null;
//                 $randam3->save();
              
//             }
//             elseif($i == 14 ){
//                 $randam3 = new Shou;
//                 $randam3->bunrui = null;
//                 $randam3->kakaku = null;
//                 $randam3->name = null;
//                 $randam3->genka = null;
//                 $randam3->save();
              
//             }
//             elseif($i == 15 ){
//                 $randam3 = new Shou;
//                 $randam3->bunrui = null;
//                 $randam3->kakaku = null;
//                 $randam3->name = null;
//                 $randam3->genka = null;
//                 $randam3->save();
              
//             }
//             elseif($i == 21 ){
//                 $randam3 = new Shou;
//                 $randam3->bunrui = null;
//                 $randam3->kakaku = null;
//                 $randam3->name = null;
//                 $randam3->genka = null;
//                 $randam3->save();
              
//             }
//             elseif($i == 22 ){
//                 $randam3 = new Shou;
//                 $randam3->bunrui = null;
//                 $randam3->kakaku = null;
//                 $randam3->name = null;
//                 $randam3->genka = null;
//                 $randam3->save();
              
//             } elseif($i == 28 ){
//                 $randam3 = new Shou;
//                 $randam3->bunrui = null;
//                 $randam3->kakaku = null;
//                 $randam3->name = null;
//                 $randam3->genka = null;
//                 $randam3->save();
              
//             } elseif($i == 29 ){
//                 $randam3 = new Shou;
//                 $randam3->bunrui = null;
//                 $randam3->kakaku = null;
//                 $randam3->name = null;
//                 $randam3->genka = null;
//                 $randam3->save();
              
//             } elseif($i == 35 ){
//                 $randam3 = new Shou;
//                 $randam3->bunrui = null;
//                 $randam3->kakaku = null;
//                 $randam3->name = null;
//                 $randam3->genka = null;
//                 $randam3->save();
              
//             }elseif($i == 36 ){
//                 $randam3 = new Shou;
//                 $randam3->bunrui = null;
//                 $randam3->kakaku = null;
//                 $randam3->name = null;
//                 $randam3->genka = null;
//                 $randam3->save();
              
//             }
//          else {
//             $shoku = null;
                
//             if($hikui){
//                 if(isset($sirumonoshikui[$hikui_count])){
//                     $shoku = $sirumonoshikui[$hikui_count];
//                     $hikui_count++;
//                 }else{
//                     if(isset($sirumonostakai[$takai_count])){
//                         $shoku = $sirumonostakai[$takai_count];
//                         $takai_count++;
//                     }
//                 }
//                 $hikui = false;
//             }else{
//                 if(isset($sirumonostakai[$takai_count])){
//                     $shoku = $sirumonostakai[$takai_count];
//                     $takai_count++;
//                 }else{
//                     if(isset($sirumonoshikui[$hikui_count])){
//                         $shoku = $sirumonoshikui[$hikui_count];
//                         $hikui_count++;
//                     }
//                 }
//                 $hikui = true;
//             }
            
//             if(isset($shoku)){
//                 $randam = new Shou;
//                 $randam->bunrui = $shoku->bunrui;
//                 $randam->kakaku = $shoku->kakaku;
//                 $randam->name = $shoku->name;
//                 $randam->genka = $shoku->genka;
//                 $randam->save();
              
//             } else{
//                 $hikui = true;
//                 $hikui_count = 0;
//                 $takai_count = 0;

//                 $shoku = null;
                
//             if($hikui){
//                 if(isset($sirumonoshikui[$hikui_count])){
//                     $shoku = $sirumonoshikui[$hikui_count];
//                     $hikui_count++;
//                 }else{
//                     if(isset($sirumonostakai[$takai_count])){
//                         $shoku = $sirumonostakai[$takai_count];
//                         $takai_count++;
//                     }
//                 }
//                 $hikui = false;
//             }else{
//                 if(isset($sirumonostakai[$takai_count])){
//                     $shoku = $sirumonostakai[$takai_count];
//                     $takai_count++;
//                 }else{
//                     if(isset($sirumonoshikui[$hikui_count])){
//                         $shoku = $sirumonoshikui[$hikui_count];
//                         $hikui_count++;
//                     }
//                 }
//                 $hikui = true;
//             }
            
//             if(isset($shoku)){
//                 $randam = new Shou;
//                 $randam->bunrui = $shoku->bunrui;
//                 $randam->kakaku = $shoku->kakaku;
//                 $randam->name = $shoku->name;
//                 $randam->genka = $shoku->genka;
//                 $randam->save();
              
//             }}
//           }
//         //   $dt->addDay(1);
          
//         }
      
//        }
    
//        private function sirumono_create2() {
//         $sirumonoshikui = Sirumono::where('display', true)->where('bunrui' , '1')->where('kakaku' , '1')->get();
//         $sirumonoshikui = $sirumonoshikui->shuffle();
//         $sirumonostakai = Sirumono::where('display', true)->where('bunrui' , '1')->where('kakaku' , '2')->get();
//         $sirumonostakai = $sirumonostakai->shuffle();
    
//         $count = 0;
//         // $dt = new Carbon('first day of next month');
//         // $tukiowari =  $dt->daysInMonth;
//         $hikui = true;
//         $hikui_count = 0;
//         $takai_count = 0;
//         for ($i = 1;$i <= 38;$i++) {
//             if($i == 1 ){
//                 $randam3 = new Shou;
//                 $randam3->bunrui = null;
//                 $randam3->kakaku = null;
//                 $randam3->name = null;
//                 $randam3->genka = null;
//                 $randam3->save();
              
//             }
//             elseif($i == 7 ){
//                 $randam3 = new Shou;
//                 $randam3->bunrui = null;
//                 $randam3->kakaku = null;
//                 $randam3->name = null;
//                 $randam3->genka = null;
//                 $randam3->save();
              
//             }
//             elseif($i == 8 ){
//                 $randam3 = new Shou;
//                 $randam3->bunrui = null;
//                 $randam3->kakaku = null;
//                 $randam3->name = null;
//                 $randam3->genka = null;
//                 $randam3->save();
              
//             }
//             elseif($i == 14 ){
//                 $randam3 = new Shou;
//                 $randam3->bunrui = null;
//                 $randam3->kakaku = null;
//                 $randam3->name = null;
//                 $randam3->genka = null;
//                 $randam3->save();
              
//             }
//             elseif($i == 15 ){
//                 $randam3 = new Shou;
//                 $randam3->bunrui = null;
//                 $randam3->kakaku = null;
//                 $randam3->name = null;
//                 $randam3->genka = null;
//                 $randam3->save();
              
//             }
//             elseif($i == 21 ){
//                 $randam3 = new Shou;
//                 $randam3->bunrui = null;
//                 $randam3->kakaku = null;
//                 $randam3->name = null;
//                 $randam3->genka = null;
//                 $randam3->save();
              
//             }
//             elseif($i == 22 ){
//                 $randam3 = new Shou;
//                 $randam3->bunrui = null;
//                 $randam3->kakaku = null;
//                 $randam3->name = null;
//                 $randam3->genka = null;
//                 $randam3->save();
              
//             } elseif($i == 28 ){
//                 $randam3 = new Shou;
//                 $randam3->bunrui = null;
//                 $randam3->kakaku = null;
//                 $randam3->name = null;
//                 $randam3->genka = null;
//                 $randam3->save();
              
//             } elseif($i == 29 ){
//                 $randam3 = new Shou;
//                 $randam3->bunrui = null;
//                 $randam3->kakaku = null;
//                 $randam3->name = null;
//                 $randam3->genka = null;
//                 $randam3->save();
              
//             } elseif($i == 35 ){
//                 $randam3 = new Shou;
//                 $randam3->bunrui = null;
//                 $randam3->kakaku = null;
//                 $randam3->name = null;
//                 $randam3->genka = null;
//                 $randam3->save();
              
//             }elseif($i == 36 ){
//                 $randam3 = new Shou;
//                 $randam3->bunrui = null;
//                 $randam3->kakaku = null;
//                 $randam3->name = null;
//                 $randam3->genka = null;
//                 $randam3->save();
              
//             } 
//             else {
//             $shoku = null;
                
//             if($hikui){
//                 if(isset($sirumonoshikui[$hikui_count])){
//                     $shoku = $sirumonoshikui[$hikui_count];
//                     $hikui_count++;
//                 }else{
//                     if(isset($sirumonostakai[$takai_count])){
//                         $shoku = $sirumonostakai[$takai_count];
//                         $takai_count++;
//                     }
//                 }
//                 $hikui = false;
//             }else{
//                 if(isset($sirumonostakai[$takai_count])){
//                     $shoku = $sirumonostakai[$takai_count];
//                     $takai_count++;
//                 }else{
//                     if(isset($sirumonoshikui[$hikui_count])){
//                         $shoku = $sirumonoshikui[$hikui_count];
//                         $hikui_count++;
//                     }
//                 }
//                 $hikui = true;
//             }
            
//             if(isset($shoku)){
//                 $randam = new Shou;
//                 $randam->bunrui = $shoku->bunrui;
//                 $randam->kakaku = $shoku->kakaku;
//                 $randam->name = $shoku->name;
//                 $randam->genka = $shoku->genka;
//                 $randam->save();
              
//             } else{
//                 $hikui = true;
//                 $hikui_count = 0;
//                 $takai_count = 0;

//                 $shoku = null;
                
//             if($hikui){
//                 if(isset($sirumonoshikui[$hikui_count])){
//                     $shoku = $sirumonoshikui[$hikui_count];
//                     $hikui_count++;
//                 }else{
//                     if(isset($sirumonostakai[$takai_count])){
//                         $shoku = $sirumonostakai[$takai_count];
//                         $takai_count++;
//                     }
//                 }
//                 $hikui = false;
//             }else{
//                 if(isset($sirumonostakai[$takai_count])){
//                     $shoku = $sirumonostakai[$takai_count];
//                     $takai_count++;
//                 }else{
//                     if(isset($sirumonoshikui[$hikui_count])){
//                         $shoku = $sirumonoshikui[$hikui_count];
//                         $hikui_count++;
//                     }
//                 }
//                 $hikui = true;
//             }
            
//             if(isset($shoku)){
//                 $randam = new Shou;
//                 $randam->bunrui = $shoku->bunrui;
//                 $randam->kakaku = $shoku->kakaku;
//                 $randam->name = $shoku->name;
//                 $randam->genka = $shoku->genka;
//                 $randam->save();
              
//             }}
//           }
//         //   $dt->addDay(1);
          
//         }
      
//        }

//     private function create_shoku_data($class_name, $shokuhikui, $shokutakai)
//     {
//         $dt = new Carbon('first day of next month');
//         // $tukiowari =  $dt->daysInMonth;
//         $hikui = true;
//         $hikui_count = 0;
//         $takai_count = 0;
//         for ($i = 1;$i <= 38;$i++) {
//             if($i == 1 ){
//                 $this->empty_shoku_save($class_name);
//             }
//             elseif($i == 7 ){
//                 $this->empty_shoku_save($class_name);
              
//             }
//             elseif($i == 8 ){
//                 $this->empty_shoku_save($class_name);
//             }
//             elseif($i == 14 ){
//                 $this->empty_shoku_save($class_name);
              
//             }
//             elseif($i == 15 ){
//                 $this->empty_shoku_save($class_name);;
              
//             }
//             elseif($i == 21 ){
//                 $this->empty_shoku_save($class_name);
//             }
//             elseif($i == 22 ){
//                 $this->empty_shoku_save($class_name);
              
//             } elseif($i == 28 ){
//                 $this->empty_shoku_save($class_name);
              
//             } elseif($i == 29 ){
//                 $this->empty_shoku_save($class_name);
//             } elseif($i == 35 ){
//                 $this->empty_shoku_save($class_name);
//             }elseif($i == 36 ){
//                 $this->empty_shoku_save($class_name);
//             }
        
//         else {
//             $shoku = null;
                
//             if($hikui){
//                 if(isset($shokuhikui[$hikui_count])){
//                     $shoku = $shokuhikui[$hikui_count];
//                     $hikui_count++;
//                 }else{
//                     if(isset($shokutakai[$takai_count])){
//                         $shoku = $shokutakai[$takai_count];
//                         $takai_count++;
//                     }
//                 }
//                 $hikui = false;
//             }else{
//                 if(isset($shokutakai[$takai_count])){
//                     $shoku = $shokutakai[$takai_count];
//                     $takai_count++;
//                 }else{
//                     if(isset($shokuhikui[$hikui_count])){
//                         $shoku = $shokuhikui[$hikui_count];
//                         $hikui_count++;
//                     }
//                 }
//                 $hikui = true;
//             }
//             if(isset($shoku)){
//                 $randam = new $class_name;
//                 $randam->bunrui = $shoku->bunrui;
//                 $randam->kakaku = $shoku->kakaku;
//                 $randam->name = $shoku->name;
//                 $randam->genka = $shoku->genka;
//                 $randam->save();
//             } else {
//                 $this->empty_shoku_save($class_name);
//             }
//           }
//         //   $dt->addDay(1);
//         }
      
//     }

//     private function empty_shoku_save($class_name) {
//         $randam = new $class_name;
//         $randam->bunrui = null;
//         $randam->kakaku = null;
//         $randam->name = null;
//         $randam->genka = null;
//         $randam->save();
//     