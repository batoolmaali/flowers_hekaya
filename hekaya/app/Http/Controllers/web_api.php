<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use ReallySimpleJWT\Token;
require 'vendor/autoload.php';

class web_api extends Controller{
	
	
    public function get_token(){
		$user_id = $_REQUEST['user_id'];	
		$password = $_REQUEST['password'];
		$user = DB::table('user_profiles')->select('id')->where([['id','=', $user_id],['password','=', $password]])->get();
		$token = '';
		$main_arr = array();
		
        if (!$user->isEmpty()){
			$user_id = $user[0]->id;			
			
			$payload = [
				'iat' => time(),
				'uid' => $user_id,
				'name' => $user_id.'',
				'exp' => time() + 3600,
				'iss' => 'Hekaya'
			];

			$token = Token::customPayload($payload, env('JWT_SECRET'));				
			$main_arr['token'] = $token;
		} else {
			$main_arr['token'] = $token;			
		}			
	   //echo "{\"token\":" .json_encode($main_arr)."}";
	   echo json_encode($main_arr);
    }
	
    public function save_user(){
		$player_id = $_REQUEST['player_id'];	
		$password = $_REQUEST['password'];
		$data = $_REQUEST['data'];	
		$data = urldecode($data);
		$main_arr = array();
		
		//if (Token::validate(isset($_REQUEST['token'])?$_REQUEST['token']:'',  env('JWT_SECRET'))){
			$data = preg_replace('/\r|\n/','\n',trim($data));

			$user = DB::table('user_profiles')->select('id')->where([['id','=', $player_id]])->get();
			if (!$user->isEmpty()){
				$result = DB::table('user_profiles')->where('id', $player_id)
				   ->update(
					[ 
						'player_data'=> $data
					]
				   );
				  if ($result > 0){
					  $main_arr['error_code'] = '1';
				  } else {
					  $main_arr['error_code'] = '-1';
				  }
			} else {
				$result = DB::table('user_profiles')->insertGetId(
				[ 
					   'id'=>$player_id,
					   'password'=>$password,
					   'player_data'=>$data
				]);	
				if( !empty($result) ){ 
					$main_arr['error_code'] = '-1';
				} else {
					$main_arr['error_code'] = '1';
				}
			}
		//} else {
		//	$main_arr['error_code'] = '-100';	
		//}		
	   echo json_encode($main_arr);
    }
	
    public function get_user(){
		$player_id = $_REQUEST['player_id'];	
		$main_arr = array();
		
		//if (Token::validate(isset($_REQUEST['token'])?$_REQUEST['token']:'',  env('JWT_SECRET'))){
			$user = DB::table('user_profiles')->select('player_data')->where([['id','=', $player_id]])->get();
			if (!$user->isEmpty()){
				echo $user[0]->player_data;
			} else {
				echo '';
			}			
		//} else {
		//	$main_arr['error_code'] = '-100';	
		//	echo json_encode($main_arr);
		//}	   
    }	
	
    public function save_score(){
		$player_id = $_REQUEST['player_id'];	
		$score = $_REQUEST['score'];	
		$main_arr = array();
		
		if (Token::validate(isset($_REQUEST['token'])?$_REQUEST['token']:'',  env('JWT_SECRET'))){
			$user = DB::table('player_scores')->select('player_id')->where([['player_id','=', $player_id]])->get();
			// check if token userid is same as player id
			if (!$user->isEmpty()){
				$result = DB::table('player_scores')->where('player_id', $player_id)
				   ->update(
					[ 
						'score'=> $score
					]
				   );
				  if ($result > 0){
					  $main_arr['error_code'] = '1';
				  } else {
					  $main_arr['error_code'] = '-1';
				  }
			} else {
				$result = DB::table('player_scores')->insertGetId(
				[ 
					   'player_id'=>$player_id,
					   'score'=>$score
				]);	
				if( !empty($result) ){ 
					$main_arr['error_code'] = '-1';
				} else {
					$main_arr['error_code'] = '1';
				}
			}
		} else {
			$main_arr['error_code'] = '-100';	
		}		
	   echo json_encode($main_arr);
    }
	
	
    public function reload_data(){
		$main_arr = array();
		$return_arr = array();	

		$stories = DB::table('story')->select('id', 'story_name', 'is_active')->orderBy('id', 'ASC')->get();
		$i = 1;
		foreach($stories as $story){
			$row_array = array();
			$row_array['index'] = $i;
			$row_array['name'] = $story->story_name;
			$row_array['URL'] = "";
			if ( $story->is_active == 1){
				$row_array['active'] = true;
			} else {
				$row_array['active'] = false;
			}						
			$i++;
			$levels = DB::table('level')->select('id', 'story_id', 'is_active','level_name', 'story_text', 'image_level', 'image_story', 'bundle_name', 'bundle_link', 'bundle_link_ios', 'version')->where([['story_id','=', $story->id]])->orderBy('id', 'ASC')->get();
			$return_arr2 = array();	
			$j = 1;
			foreach($levels as $level){
				$row_array2 = array();
				$row_array2['index'] = $j;				
				if ($level->is_active == 'active'){
					$row_array2['active'] = true;
				} else {
					$row_array2['active'] = false;
				}			
				$row_array2['name'] = $level->level_name;
				$row_array2['imageLevelUIURL'] = env('HTTP_BASE_URL').$level->image_level;
				$row_array2['imageStoryURL'] = env('HTTP_BASE_URL').$level->image_story;
				$row_array2['storyText'] = $level->story_text;
				$row_array2['bundleName'] = $level->bundle_name;
				$row_array2['bundleLinkAndroid'] = env('HTTP_BASE_URL').$level->bundle_link;				
				$row_array2['bundleLinkIOS'] = env('HTTP_BASE_URL').$level->bundle_link_ios;				
				$row_array2['version'] = $level->version;				
				array_push($return_arr2, $row_array2);		
				$j++;
			}
			$row_array['levelsData'] = $return_arr2;
			array_push($return_arr, $row_array);
		}
		$main_arr['newStories'] = $return_arr;	
		
		$return_arr = array();		
		$active_levels = DB::table('active_level')->select('id', 'is_active')->orderBy('id', 'ASC')->get();
		foreach($active_levels as $alevel){
			if ($alevel->is_active == 1){
				array_push($return_arr, true);	
			} else {
				array_push($return_arr, false);	
			}	
		}
		$main_arr['activeMainLevels'] = $return_arr;
		
		$myfile = fopen(public_path()."/GameManager.txt","w");
		fwrite($myfile, json_encode($main_arr));
		fclose($myfile);
		
		echo json_encode($main_arr);
    }	
} //end class
