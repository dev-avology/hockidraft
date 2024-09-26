<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\League;
use App\Models\Matche;

class HockyController extends Controller
{
     public function leagues(){
      $leagues = League::whereHas('leagueMatches')->orderBy('start_date', 'desc')->get();
      return view('front_end.pages.hocky.premier_league', compact('leagues'));
     }

     public function getLeagueMatches($leagueId)
     {
        $matches = Matche::getMatchByLeagueId($leagueId);
   
        if(isset($matches) && !empty($matches))
         {
            return view('front_end.pages.hocky.matches',compact('matches'));
         }
         else
         {
            return redirect()->back()->with('error','No matches found in this league.');
         }
     }

     public function matchDetails($matcheId)
      {        
        $matchDetails = Matche::with(['league'])->where('id',$matcheId)->first();  

        $organizedPlayers = [
            'Attacker' => [],
            'Defender' => [],
            'Midfielder' => [],
            'Goalkeeper' => []
        ];

        if(isset($matchDetails[0]->matchPlayers) && !empty($matchDetails[0]->matchPlayers)){

            foreach($matchDetails[0]->matchPlayers as $player){
    
                if (isset($organizedPlayers[$player->position])) {
                    
                    $organizedPlayers[$player->position][] = $player;
                }
            }
        }
      //   return view('front_end.pages.football.premier_league_players',compact('matchDetails','organizedPlayers','matcheId'));
        return view('front_end.pages.hocky.premier_league_players',compact('matchDetails','matcheId'));
      }
}
