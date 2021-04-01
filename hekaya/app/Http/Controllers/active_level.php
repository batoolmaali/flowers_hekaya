<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class active_level extends Controller
{
    public function index()
    {
         $active_level = DB::table('active_level')->select('id', 'is_active')->get(); 
         return view('Pages.active_level.active_level')->with(['active_level'=>$active_level]);
    }
      
    public function readall()  //list all user
    {
       $active_level= DB::table('active_level')->select('id','is_active',DB::raw("CASE WHEN (is_active=1) THEN 'Active' ELSE 'Inactive' END AS statusname "))->get(); 
       echo "{\"data\":" .json_encode($active_level). "}";
    } 
   
    public function getactive_level ($id) // to show customer details
    {
        $active_level = DB::table('active_level')->select('id','is_active')->where('id','=',$id)->get(); 
        echo "{\"data\":" .json_encode($active_level). "}";
    }
    public function edit(Request $request)
    {
        $id=$_REQUEST['Eid'];
        $is_active=$_REQUEST['Eis_active'];
       
         $id = DB::table('active_level')->where('id', $id)
       ->update(
        [ 
          'is_active'=>$is_active
        ]
       );
       file_get_contents(env("HTTP_BASE_URL")."/api/reload_data");
        return redirect()->back(); 
}

}
