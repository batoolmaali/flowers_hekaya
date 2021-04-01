<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class winner extends Controller
{
  
 
    public function getwinner () // to show random winner
    {
        $winner = DB::table('player_scores')->select('player_id','score')->inRandomOrder()->limit(1)->get(); 
		
		$player_datas = DB::table('user_profiles')->select('player_data')->where('id','=',$winner[0]->player_id)->get(); 
		
		$json_data = json_decode($player_datas[0]->player_data, true);
		$winner[0]->player_data = $json_data['playerData']['playerName'];
		
        return view('Pages.winner.winner')->with(['winner'=>$winner]);
	}
      public function index()
    {
         return view('Pages.winner.winner');
    }
}
