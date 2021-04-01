<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Str;


class level extends Controller
{
  
   public function insert(Request $request)
    {
        $story_id=$_REQUEST['story_id'];
        $level_name=$_REQUEST['level_name'];  
        $is_active=$_REQUEST['is_active'];
        $bundle_name=$_REQUEST['bundle_name'];
        $story_text=$_REQUEST['story_text'];
        $fileimage_level = $request->file('image_level');
        $destinationPath = public_path('image_level');
        $mdate = date("m/d/Y",time());
        $mdate = strtotime($mdate);  
        $filepathimage_level= $mdate.$fileimage_level->getClientOriginalName();
        $fileimage_level->move($destinationPath, $filepathimage_level);
        $fileimage_story= $request->file('image_story');
        $destinationPath = public_path('image_story');
        $mdate = date("m/d/Y",time());
        $mdate = strtotime($mdate);  
        $filepathimage_story= $mdate.$fileimage_story->getClientOriginalName();
        $fileimage_story->move($destinationPath, $filepathimage_story);
        $filebundle_link= $request->file('bundle_link');
        $destinationPath = public_path('bundle_link');
        $mdate = date("m/d/Y",time());
        $mdate = strtotime($mdate);  
        $filepathbundle_link= $mdate.$filebundle_link->getClientOriginalName();
        $filebundle_link->move($destinationPath, $filepathbundle_link);
        
		
		$filebundle_link_ios= $request->file('bundle_link_ios');
        $destinationPath = public_path('bundle_link_ios');
        $mdate = date("m/d/Y",time());
        $mdate = strtotime($mdate);  
        $filepathbundle_link_ios= $mdate.$filebundle_link_ios->getClientOriginalName();
        $filebundle_link_ios->move($destinationPath, $filepathbundle_link_ios);
        
        
        $id = DB::table('level')->insertGetId(
        [ 
            'version'=>$_REQUEST['version'],
           'story_id'=>$story_id,
           'level_name'=>$level_name, 
           'is_active'=>$is_active,
           'story_text'=>$story_text,
           'image_level'=>'public/image_level/'.$filepathimage_level, 'image_story'=>'public/image_story/'.$filepathimage_story, 'bundle_name'=>$bundle_name, 
           'bundle_link'=>'public/bundle_link/'.$filepathbundle_link,
		   'bundle_link_ios'=>'public/bundle_link/'.$filepathbundle_link_ios,
        ]
       );
	   file_get_contents(env("HTTP_BASE_URL")."/api/reload_data");
     return redirect()->back();
    }
    public function delete ()
    {
     $id=$_REQUEST['id'];
     $level= DB::table('level')->select('image_level', 'image_story', 'bundle_link')->Where('id','=',$id)->get(); 
     $image_level=$level[0]->image_level;
     $image_story=$level[0]->image_story;
     $bundle_link=$level[0]->bundle_link;
     
    DB::table('level')->where('id', '=', $id)->delete();
    File::delete($image_level);
    File::delete($image_story);
    File::delete($bundle_link);
	file_get_contents(env("HTTP_BASE_URL")."/api/reload_data");
    return redirect()->back();
    }
    public function getlevel ($id) // to show customer details
    {
        $level = DB::table('level')->select('id', 'story_id', 'version','level_name', 'is_active', 'story_text', 'image_level', 'image_story', 'bundle_name', 'bundle_link', 'bundle_link_ios')->where('id','=',$id)->get(); 
        echo "{\"data\":" .json_encode($level). "}";
    }
    public function edit(Request $request)
    {
        $id=$_POST['Eid'];
        $level_name=$_REQUEST['Elevel_name'];  
        $is_active=$_REQUEST['Eis_active'];
        $bundle_name=$_REQUEST['Ebundle_name'];
        $story_text=$_REQUEST['Estory_text'];
        $version=$_REQUEST['Eversion'];
        $imagestorypath=$_REQUEST['Eimage_storypath'];
        $imagelevelpath=$_REQUEST['Eimage_levelpath'];
        $bundlelinkpath=$_REQUEST['Ebundle_linkpath'];
		$bundlelinkpath_ios=$_REQUEST['Ebundle_linkpath_ios'];
        if ($request->file('Eimage_level')!=null)
        {
		File::delete($imagelevelpath);
        $file=$request->file('Eimage_level');
        $destinationPath = public_path('image_level');
        $mdate = date("m/d/Y",time());
        $mdate = strtotime($mdate);  
        $filepath= $mdate.$file->getClientOriginalName();
        $file->move($destinationPath, $filepath);
        $imagelevelpath='public/image_level/'.$filepath;
         
        }
        if ($request->file('Eimage_story')!=null)
        {
			File::delete($imagestorypath);
        $file=$request->file('Eimage_story');
        $destinationPath = public_path('image_story');
        $mdate = date("m/d/Y",time());
        $mdate = strtotime($mdate);  
        $filepath= $mdate.$file->getClientOriginalName();
        $file->move($destinationPath, $filepath);
        $imagestorypath='public/image_story/'.$filepath;
         
        }
        if ($request->file('Ebundle_link')!=null)
        {
			File::delete($bundlelinkpath);
        $file=$request->file('Ebundle_link');
        $destinationPath = public_path('bundle_link');
        $mdate = date("m/d/Y",time());
        $mdate = strtotime($mdate);  
        $filepath= $mdate.$file->getClientOriginalName();
        $file->move($destinationPath, $filepath);
        $bundlelinkpath='public/bundle_link/'.$filepath;
         
        }
		
		 if ($request->file('Ebundle_link_ios')!=null)
        {
			File::delete($bundlelinkpath_ios);
        $file=$request->file('Ebundle_link_ios');
        $destinationPath = public_path('bundle_link_ios');
        $mdate = date("m/d/Y",time());
        $mdate = strtotime($mdate);  
        $filepath= $mdate.$file->getClientOriginalName();
        $file->move($destinationPath, $filepath);
        $bundlelinkpath_ios='public/bundle_link/'.$filepath;
         
        }
        
         $id = DB::table('level')->where('id', $id)
       ->update(
        [ 
           'version'=>$version,
           'level_name'=>$level_name, 
           'is_active'=>$is_active,
           'story_text'=>$story_text,
           'image_level'=>   $imagelevelpath,
           'image_story'=>$imagestorypath,
           'bundle_name'=>$bundle_name, 
           'bundle_link'=>$bundlelinkpath,
		   'bundle_link_ios'=>$bundlelinkpath_ios
           
        ]
       );
	   file_get_contents(env("HTTP_BASE_URL")."/api/reload_data");
    return redirect()->back();
}
 public function readall($id)  //list all level
    {
       $levels= DB::table('level')->select('id','version', 'story_id', 'level_name', 'is_active', 'story_text', 'image_level', 'image_story', 'bundle_name', 'bundle_link', 'bundle_link_ios',DB::raw("CASE WHEN (is_active=1) THEN 'Active' ELSE 'Inactive' END AS statusname "))->where('story_id','=',$id)->get(); 
       echo "{\"data\":" .json_encode($levels). "}";
    } 
      public function index($id)
    {
      
         return view('Pages.level.level')->with(['id'=>$id]);
    }
}
