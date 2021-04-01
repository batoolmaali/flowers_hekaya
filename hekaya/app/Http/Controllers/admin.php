<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use Session;
use Mail;

class admin extends Controller
{
 
 public function read1()
 {
         $users =DB::table('level2user')->join('users','users.id','level2user.user_id')
               ->select('level2user.id','level2user.result1','level2user.path','level2user.path','users.name', DB::raw("(CASE WHEN level2user.yes_no_flag=1 THEN 'نعم' WHEN level2user.yes_no_flag=2 THEN 'لا' ELSE 'لم يتم التصويت' END) AS result2"))->get();
       echo "{\"data\":" .json_encode($users). "}";
 }
  public function read12()
 {
            $users =DB::table('level2user')->join('users','users.id','level2user.user_id')
               ->select('level2user.id','level2user.result1','level2user.path','level2user.path','users.name', DB::raw("(CASE WHEN level2user.yes_no_flag=1 THEN 'نعم' WHEN level2user.yes_no_flag=2 THEN 'لا' ELSE 'لم يتم التصويت' END) AS result2"))->where('level2user.yes_no_flag','!=','0')->get();
       echo "{\"data\":" .json_encode($users). "}";
 }
  public function read13()
 {
         $users =      $users =DB::table('level2user')->join('users','users.id','level2user.user_id')
               ->select('level2user.id','level2user.result1','level2user.path','level2user.path','users.name', DB::raw("(CASE WHEN level2user.yes_no_flag=1 THEN 'نعم' WHEN level2user.yes_no_flag=2 THEN 'لا' ELSE 'لم يتم التصويت' END) AS result2"))->where('level2user.yes_no_flag','=','0')->get();
       echo "{\"data\":" .json_encode($users). "}";
 }
 public function insert(Request $request)
 {
       $file = $request->file('video');
       $destinationPath = public_path('uploadvideo');
        $mdate = date("m/d/Y",time());
        $mdate = strtotime($mdate);  
        $filepath= $mdate.$file->getClientOriginalName();
        $file->move($destinationPath, $filepath);

     $id = DB::table('level2user')->insertGetId([
             'user_id'=>Auth::user()->id, 
             'path'=>'public/uploadvideo/subcategory/'.$filepath,
             'yes_no_flag'=>0, 
             'points'=>0, 
             'yes_no_judges'=>'',
             'points_judges'=>''
        ]
       );  
       return redirect('stages2');
 }
public function updateyes($id)
{
    DB::table('level2user')
            ->where('id',$id)
            ->update(['yes_no_flag'=>1,'yes_no_judges'=>Auth::user()->name]);
           return redirect()->back();
}
public function updateno($id)
{
    DB::table('level2user')
            ->where('id',$id)
            ->update(['yes_no_flag'=>2,'yes_no_judges'=>Auth::user()->name]);
            return redirect()->back();
}

 public function read2()
 {
         $users =DB::table('level2user')->join('users','users.id','level2user.user_id')
               ->select('level2user.id','level2user.result1','level2user.path','level2user.path','users.name','level2user.points', DB::raw("(CASE WHEN level2user.yes_no_flag=1 THEN 'نعم' WHEN level2user.yes_no_flag=2 THEN 'لا' ELSE 'لم يتم التصويت' END) AS result2"))->WHERE('level2user.yes_no_flag','=',1)->get();
       echo "{\"data\":" .json_encode($users). "}";
 }
  public function read22()
 {
            $users =DB::table('level2user')->join('users','users.id','level2user.user_id')
               ->select('level2user.id','level2user.result1','level2user.path','level2user.path','users.name','level2user.points', DB::raw("(CASE WHEN level2user.yes_no_flag=1 THEN 'نعم' WHEN level2user.yes_no_flag=2 THEN 'لا' ELSE 'لم يتم التصويت' END) AS result2"))->where([['level2user.points','!=','0'],['level2user.yes_no_flag','=',1]])->get();
       echo "{\"data\":" .json_encode($users). "}";
 }
  public function read23()
 {
         $users =      $users =DB::table('level2user')->join('users','users.id','level2user.user_id')
               ->select('level2user.id','level2user.result1','level2user.path','level2user.path','users.name','level2user.points', DB::raw("(CASE WHEN level2user.yes_no_flag=1 THEN 'نعم' WHEN level2user.yes_no_flag=2 THEN 'لا' ELSE 'لم يتم التصويت' END) AS result2"))->where([['level2user.points','=','0'],['level2user.yes_no_flag','=',1]])->get();
       echo "{\"data\":" .json_encode($users). "}";
 }
 public function updatepoints(Request $request)
{
    $id=$request->id;
    $points=$request->points;
    DB::table('level2user')
            ->where('id',$id)
            ->update(['points'=>$points,'points_judges'=>Auth::user()->name]);
            return redirect()->back();
}
}
