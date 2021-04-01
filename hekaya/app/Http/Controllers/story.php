<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class story extends Controller
{
    public function index()
    {
         $story = DB::table('story')->select('id', 'story_name', 'is_active')->get(); 
         return view('Pages.story.story')->with(['story'=>$story]);
    }
      
    public function readall()  //list all user
    {
       $story = DB::table('story')->select('id', 'story_name', 'is_active',DB::raw("CASE WHEN (is_active=1) THEN 'Active' ELSE 'Inactive' END AS statusname "))->get(); 
       echo "{\"data\":" .json_encode($story). "}";
    } 
   public function insert(Request $request)
    {
        $story_name=$_REQUEST['story_name'];
        $is_active=$_REQUEST['is_active'];
       
        $id = DB::table('story')->insertGetId(
        [ 
           'story_name'=>$story_name,
           'is_active'=>$is_active
            ]
       );
	   file_get_contents(env("HTTP_BASE_URL")."/api/reload_data");
     return redirect()->back();
    }
    public function delete ()
    {
    $id=$_REQUEST['id'];
    DB::table('story')->where('id', '=', $id)->delete();
    DB::table('level')->where('story_id', '=', $id)->delete();
	file_get_contents(env("HTTP_BASE_URL")."/api/reload_data");
    return redirect()->back(); 
    }
    public function getstory ($id) // to show customer details
    {
        $story = DB::table('story')->select('id','story_name','is_active')->where('id','=',$id)->get(); 
        echo "{\"data\":" .json_encode($story). "}";
    }
    public function edit(Request $request)
    {
        $id=$_REQUEST['Eid'];
        $story_name=$_REQUEST['Estory_name'];
        $is_active=$_REQUEST['Eis_active'];
       
         $id = DB::table('story')->where('id', $id)
       ->update(
        [ 
          'is_active'=>$is_active,
           'story_name'=>$story_name
        ]
       );
       file_get_contents(env("HTTP_BASE_URL")."/api/reload_data");
        return redirect()->back(); 
}

}
