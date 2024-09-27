@extends('front_end.layout.main')
@section('content')


<section class="page-title-section overlay" >
   <!-- <div class="container">
      <div class="row">
         <div class="col-md-8">
            <ul class="list-inline custom-breadcrumb mb-2">
               <li class="list-inline-item"><a class="h2 text-primary font-secondary"
                  href="/frontend/hockidraft/">Home</a></li>
               <li class="list-inline-item text-white h3 font-secondary nasted">Terms and conditions
               </li>
            </ul>
         </div>
      </div>
   </div> -->
</section>
<section class="play-bet premier_bg premier_players">
   <div class="container">
      <div class="leagure_container">
         <div class="flex flex-col items-center justify-center w-screen min-h-screen bg-gray-900 py-10">
            <a href="{{ route('leagueMatches',['leagueId'=>request()->segment(2)]) }}" class="back-btn">
               <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#fff">
                  <path d="M360-240 120-480l240-240 56 56-144 144h568v80H272l144 144-56 56Z"></path>
               </svg>
            </a>
            <!-- Component Start -->
            <h1 class="font-medium">{{date('Y')}} Season</h1>
            <div class="flex flex-col mt-6">
               <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                  <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                     <div class="palyer-header">
                        <div class="team-logo">
                           <img src="{{$matchDetails->home_team_logo}}" alt="team-logo-4">
                           <h6>{{$matchDetails->home_team_name}}</h6>
                        </div>
                        <div class="match-details">
                           {{-- <h6>Futbalové ihrisko TJ Horná Mičiná</h6>
                           <p>Horná Mičiná</p> --}}
                           <span>{{ date('Y-m-d h:i a',strtotime($matchDetails->fixture_date))}}</span>
                        </div>
                        <div class="team-logo">
                           <img src="{{$matchDetails->away_team_logo}}" alt="team-logo-2">
                           <h6>{{$matchDetails->away_team_name}}</h6>
                        </div>
                     </div>
                     <div class="player-tab">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                           <li class="nav-item" role="presentation">
                              <button class="nav-link" id="gk" data-bs-toggle="tab" data-bs-target="#gk-pane" type="button" role="tab" aria-controls="gk-pane" aria-selected="false">GK</button>
                           </li>
                           <li class="nav-item" role="presentation">
                              <button class="nav-link" id="def" data-bs-toggle="tab" data-bs-target="#def-pane" type="button" role="tab" aria-controls="def-pane" aria-selected="false">DEF</button>
                           </li>
                           <li class="nav-item" role="presentation">
                              <button class="nav-link" id="mid" data-bs-toggle="tab" data-bs-target="#mid-pane" type="button" role="tab" aria-controls="mid-pane" aria-selected="false">MID</button>
                           </li>
                           <li class="nav-item" role="presentation">
                              <button class="nav-link active" id="st" data-bs-toggle="tab" data-bs-target="#st-pane" type="button" role="tab" aria-controls="st-pane" aria-selected="true">ST</button>
                           </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                           <div class="tab-pane fade" id="gk-pane" role="tabpanel" aria-labelledby="gk" tabindex="0">
                              <div class="div-tbl">
                                 <table class="table   table-hover table-sm">
                                    <thead class="thead-light text-uppercase">
                                       <tr>
                                          <th scope="col"></th>
                                          <th scope="col">selected by</th>
                                          <th scope="col">Team</th>
                                          <th scope="col">Age</th>
                                          <th scope="col">Injured</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr class="matche-main" data-team-id="15982" data-player-id="382038" data-player-role="G" data-player-name="K. Vančíková" data-team-logo="https://media.api-sports.io/football/teams/15982.png" data-match-id="1210795" data-team-name="testing" data-home-team="15977" data-away-team="15982" data-slug-matchid="896">
                                          <td class="player-dp">
                                          </td>
                                          <td>
                                             <h6>K. Vančíková</h6>
                                          </td>
                                          <td class="team-logo">
                                             <img src="https://media.api-sports.io/football/teams/15982.png" alt="team-logo-2">
                                          </td>
                                          <td>
                                             <p>24</p>
                                          </td>
                                          <td class="credits_points">
                                             <span>No</span>
                                             <button class="plus player-toggle" data-event="plus">
                                             <i class="fa fa-plus" aria-hidden="true"></i>
                                             </button>
                                             <button class="minus player-toggle d-none" data-event="minus">
                                             <i class="fa fa-minus" aria-hidden="true"></i>
                                             </button>
                                          </td>
                                       </tr>
                                       <tr class="matche-main" data-team-id="15982" data-player-id="382025" data-player-role="G" data-player-name="N. Čermáková" data-team-logo="https://media.api-sports.io/football/teams/15982.png" data-match-id="1210795" data-team-name="testing" data-home-team="15977" data-away-team="15982" data-slug-matchid="896">
                                          <td class="player-dp">
                                          </td>
                                          <td>
                                             <h6>N. Čermáková</h6>
                                          </td>
                                          <td class="team-logo">
                                             <img src="https://media.api-sports.io/football/teams/15982.png" alt="team-logo-2">
                                          </td>
                                          <td>
                                             <p>19</p>
                                          </td>
                                          <td class="credits_points">
                                             <span>No</span>
                                             <button class="plus player-toggle" data-event="plus">
                                             <i class="fa fa-plus" aria-hidden="true"></i>
                                             </button>
                                             <button class="minus player-toggle d-none" data-event="minus">
                                             <i class="fa fa-minus" aria-hidden="true"></i>
                                             </button>
                                          </td>
                                       </tr>
                                       <tr class="matche-main" data-team-id="15982" data-player-id="438398" data-player-role="G" data-player-name="V. Opalková" data-team-logo="https://media.api-sports.io/football/teams/15982.png" data-match-id="1210795" data-team-name="testing" data-home-team="15977" data-away-team="15982" data-slug-matchid="896">
                                          <td class="player-dp">
                                          </td>
                                          <td>
                                             <h6>V. Opalková</h6>
                                          </td>
                                          <td class="team-logo">
                                             <img src="https://media.api-sports.io/football/teams/15982.png" alt="team-logo-2">
                                          </td>
                                          <td>
                                             <p>18</p>
                                          </td>
                                          <td class="credits_points">
                                             <span>No</span>
                                             <button class="plus player-toggle" data-event="plus">
                                             <i class="fa fa-plus" aria-hidden="true"></i>
                                             </button>
                                             <button class="minus player-toggle d-none" data-event="minus">
                                             <i class="fa fa-minus" aria-hidden="true"></i>
                                             </button>
                                          </td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="def-pane" role="tabpanel" aria-labelledby="def" tabindex="0">
                              <div class="div-tbl">
                                 <table class="table   table-hover table-sm">
                                    <thead class="thead-light text-uppercase">
                                       <tr>
                                          <th scope="col"></th>
                                          <th scope="col">selected by</th>
                                          <th scope="col">Team</th>
                                          <th scope="col">Age</th>
                                          <th scope="col">Injured</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr class="matche-main" data-team-id="15982" data-player-id="381908" data-player-role="D" data-player-name="M. Pirťanová" data-team-logo="https://media.api-sports.io/football/teams/15982.png" data-match-id="1210795" data-team-name="testing" data-home-team="15977" data-away-team="15982" data-slug-matchid="896">
                                          <td class="player-dp">
                                          </td>
                                          <td>
                                             <h6>M. Pirťanová</h6>
                                          </td>
                                          <td class="team-logo">
                                             <img src="https://media.api-sports.io/football/teams/15982.png" alt="team-logo-2">
                                          </td>
                                          <td>
                                             <p>24</p>
                                          </td>
                                          <td class="credits_points">
                                             <span>No</span>
                                             <button class="plus player-toggle" data-event="plus">
                                             <i class="fa fa-plus" aria-hidden="true"></i>
                                             </button>
                                             <button class="minus player-toggle d-none" data-event="minus">
                                             <i class="fa fa-minus" aria-hidden="true"></i>
                                             </button>
                                          </td>
                                       </tr>
                                       <tr class="matche-main" data-team-id="15982" data-player-id="382027" data-player-role="D" data-player-name="S. Kršiaková" data-team-logo="https://media.api-sports.io/football/teams/15982.png" data-match-id="1210795" data-team-name="testing" data-home-team="15977" data-away-team="15982" data-slug-matchid="896">
                                          <td class="player-dp">
                                          </td>
                                          <td>
                                             <h6>S. Kršiaková</h6>
                                          </td>
                                          <td class="team-logo">
                                             <img src="https://media.api-sports.io/football/teams/15982.png" alt="team-logo-2">
                                          </td>
                                          <td>
                                             <p>21</p>
                                          </td>
                                          <td class="credits_points">
                                             <span>No</span>
                                             <button class="plus player-toggle" data-event="plus">
                                             <i class="fa fa-plus" aria-hidden="true"></i>
                                             </button>
                                             <button class="minus player-toggle d-none" data-event="minus">
                                             <i class="fa fa-minus" aria-hidden="true"></i>
                                             </button>
                                          </td>
                                       </tr>
                                       <tr class="matche-main" data-team-id="15982" data-player-id="381909" data-player-role="D" data-player-name="J. Horváthová" data-team-logo="https://media.api-sports.io/football/teams/15982.png" data-match-id="1210795" data-team-name="testing" data-home-team="15977" data-away-team="15982" data-slug-matchid="896">
                                          <td class="player-dp">
                                          </td>
                                          <td>
                                             <h6>J. Horváthová</h6>
                                          </td>
                                          <td class="team-logo">
                                             <img src="https://media.api-sports.io/football/teams/15982.png" alt="team-logo-2">
                                          </td>
                                          <td>
                                             <p>19</p>
                                          </td>
                                          <td class="credits_points">
                                             <span>No</span>
                                             <button class="plus player-toggle" data-event="plus">
                                             <i class="fa fa-plus" aria-hidden="true"></i>
                                             </button>
                                             <button class="minus player-toggle d-none" data-event="minus">
                                             <i class="fa fa-minus" aria-hidden="true"></i>
                                             </button>
                                          </td>
                                       </tr>
                                       <tr class="matche-main" data-team-id="15982" data-player-id="382037" data-player-role="D" data-player-name="E. Nikodemová" data-team-logo="https://media.api-sports.io/football/teams/15982.png" data-match-id="1210795" data-team-name="testing" data-home-team="15977" data-away-team="15982" data-slug-matchid="896">
                                          <td class="player-dp">
                                          </td>
                                          <td>
                                             <h6>E. Nikodemová</h6>
                                          </td>
                                          <td class="team-logo">
                                             <img src="https://media.api-sports.io/football/teams/15982.png" alt="team-logo-2">
                                          </td>
                                          <td>
                                             <p>24</p>
                                          </td>
                                          <td class="credits_points">
                                             <span>No</span>
                                             <button class="plus player-toggle" data-event="plus">
                                             <i class="fa fa-plus" aria-hidden="true"></i>
                                             </button>
                                             <button class="minus player-toggle d-none" data-event="minus">
                                             <i class="fa fa-minus" aria-hidden="true"></i>
                                             </button>
                                          </td>
                                       </tr>
                                       <tr class="matche-main" data-team-id="15982" data-player-id="382036" data-player-role="D" data-player-name="L. Letková" data-team-logo="https://media.api-sports.io/football/teams/15982.png" data-match-id="1210795" data-team-name="testing" data-home-team="15977" data-away-team="15982" data-slug-matchid="896">
                                          <td class="player-dp">
                                          </td>
                                          <td>
                                             <h6>L. Letková</h6>
                                          </td>
                                          <td class="team-logo">
                                             <img src="https://media.api-sports.io/football/teams/15982.png" alt="team-logo-2">
                                          </td>
                                          <td>
                                             <p>19</p>
                                          </td>
                                          <td class="credits_points">
                                             <span>No</span>
                                             <button class="plus player-toggle" data-event="plus">
                                             <i class="fa fa-plus" aria-hidden="true"></i>
                                             </button>
                                             <button class="minus player-toggle d-none" data-event="minus">
                                             <i class="fa fa-minus" aria-hidden="true"></i>
                                             </button>
                                          </td>
                                       </tr>
                                       <tr class="matche-main" data-team-id="15982" data-player-id="382026" data-player-role="D" data-player-name="T. Honková" data-team-logo="https://media.api-sports.io/football/teams/15982.png" data-match-id="1210795" data-team-name="testing" data-home-team="15977" data-away-team="15982" data-slug-matchid="896">
                                          <td class="player-dp">
                                          </td>
                                          <td>
                                             <h6>T. Honková</h6>
                                          </td>
                                          <td class="team-logo">
                                             <img src="https://media.api-sports.io/football/teams/15982.png" alt="team-logo-2">
                                          </td>
                                          <td>
                                             <p>27</p>
                                          </td>
                                          <td class="credits_points">
                                             <span>No</span>
                                             <button class="plus player-toggle" data-event="plus">
                                             <i class="fa fa-plus" aria-hidden="true"></i>
                                             </button>
                                             <button class="minus player-toggle d-none" data-event="minus">
                                             <i class="fa fa-minus" aria-hidden="true"></i>
                                             </button>
                                          </td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="mid-pane" role="tabpanel" aria-labelledby="mid" tabindex="0">
                              <div class="div-tbl">
                                 <table class="table   table-hover table-sm">
                                    <thead class="thead-light text-uppercase">
                                       <tr>
                                          <th scope="col"></th>
                                          <th scope="col">selected by</th>
                                          <th scope="col">Team</th>
                                          <th scope="col">Age</th>
                                          <th scope="col">Injured</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr class="matche-main" data-team-id="15982" data-player-id="382028" data-player-role="M" data-player-name="E. Glatzová" data-team-logo="https://media.api-sports.io/football/teams/15982.png" data-match-id="1210795" data-team-name="testing" data-home-team="15977" data-away-team="15982" data-slug-matchid="896">
                                          <td class="player-dp">
                                          </td>
                                          <td>
                                             <h6>E. Glatzová</h6>
                                          </td>
                                          <td class="team-logo">
                                             <img src="https://media.api-sports.io/football/teams/15982.png" alt="team-logo-2">
                                          </td>
                                          <td>
                                             <p>21</p>
                                          </td>
                                          <td class="credits_points">
                                             <span>No</span>
                                             <button class="plus player-toggle" data-event="plus">
                                             <i class="fa fa-plus" aria-hidden="true"></i>
                                             </button>
                                             <button class="minus player-toggle d-none" data-event="minus">
                                             <i class="fa fa-minus" aria-hidden="true"></i>
                                             </button>
                                          </td>
                                       </tr>
                                       <tr class="matche-main" data-team-id="15982" data-player-id="438308" data-player-role="M" data-player-name="T. Ordzovenská" data-team-logo="https://media.api-sports.io/football/teams/15982.png" data-match-id="1210795" data-team-name="testing" data-home-team="15977" data-away-team="15982" data-slug-matchid="896">
                                          <td class="player-dp">
                                          </td>
                                          <td>
                                             <h6>T. Ordzovenská</h6>
                                          </td>
                                          <td class="team-logo">
                                             <img src="https://media.api-sports.io/football/teams/15982.png" alt="team-logo-2">
                                          </td>
                                          <td>
                                             <p>25</p>
                                          </td>
                                          <td class="credits_points">
                                             <span>No</span>
                                             <button class="plus player-toggle" data-event="plus">
                                             <i class="fa fa-plus" aria-hidden="true"></i>
                                             </button>
                                             <button class="minus player-toggle d-none" data-event="minus">
                                             <i class="fa fa-minus" aria-hidden="true"></i>
                                             </button>
                                          </td>
                                       </tr>
                                       <tr class="matche-main" data-team-id="15982" data-player-id="382029" data-player-role="M" data-player-name="D. Kucharčíková" data-team-logo="https://media.api-sports.io/football/teams/15982.png" data-match-id="1210795" data-team-name="testing" data-home-team="15977" data-away-team="15982" data-slug-matchid="896">
                                          <td class="player-dp">
                                          </td>
                                          <td>
                                             <h6>D. Kucharčíková</h6>
                                          </td>
                                          <td class="team-logo">
                                             <img src="https://media.api-sports.io/football/teams/15982.png" alt="team-logo-2">
                                          </td>
                                          <td>
                                             <p>25</p>
                                          </td>
                                          <td class="credits_points">
                                             <span>No</span>
                                             <button class="plus player-toggle" data-event="plus">
                                             <i class="fa fa-plus" aria-hidden="true"></i>
                                             </button>
                                             <button class="minus player-toggle d-none" data-event="minus">
                                             <i class="fa fa-minus" aria-hidden="true"></i>
                                             </button>
                                          </td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                           <div class="tab-pane fade active show" id="st-pane" role="tabpanel" aria-labelledby="st" tabindex="0">
                              <div class="div-tbl">
                                 <table class="table   table-hover table-sm">
                                    <thead class="thead-light text-uppercase">
                                       <tr>
                                          <th scope="col"></th>
                                          <th scope="col">selected by</th>
                                          <th scope="col">Team</th>
                                          <th scope="col">Age</th>
                                          <th scope="col">Injured</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr class="matche-main" data-team-id="15982" data-player-id="381914" data-player-role="F" data-player-name="L. Retkesová" data-team-logo="https://media.api-sports.io/football/teams/15982.png" data-match-id="1210795" data-team-name="testing" data-home-team="15977" data-away-team="15982" data-slug-matchid="896">
                                          <td class="player-dp">
                                          </td>
                                          <td>
                                             <h6>L. Retkesová</h6>
                                          </td>
                                          <td class="team-logo">
                                             <img src="https://media.api-sports.io/football/teams/15982.png" alt="team-logo-2">
                                          </td>
                                          <td>
                                             <p>25</p>
                                          </td>
                                          <td class="credits_points">
                                             <span>No</span>
                                             <button class="plus player-toggle" data-event="plus">
                                             <i class="fa fa-plus" aria-hidden="true"></i>
                                             </button>
                                             <button class="minus player-toggle d-none" data-event="minus">
                                             <i class="fa fa-minus" aria-hidden="true"></i>
                                             </button>
                                          </td>
                                       </tr>
                                       <tr class="matche-main" data-team-id="15982" data-player-id="381910" data-player-role="F" data-player-name="K. Vredíková" data-team-logo="https://media.api-sports.io/football/teams/15982.png" data-match-id="1210795" data-team-name="testing" data-home-team="15977" data-away-team="15982" data-slug-matchid="896">
                                          <td class="player-dp">
                                          </td>
                                          <td>
                                             <h6>K. Vredíková</h6>
                                          </td>
                                          <td class="team-logo">
                                             <img src="https://media.api-sports.io/football/teams/15982.png" alt="team-logo-2">
                                          </td>
                                          <td>
                                             <p>25</p>
                                          </td>
                                          <td class="credits_points">
                                             <span>No</span>
                                             <button class="plus player-toggle" data-event="plus">
                                             <i class="fa fa-plus" aria-hidden="true"></i>
                                             </button>
                                             <button class="minus player-toggle d-none" data-event="minus">
                                             <i class="fa fa-minus" aria-hidden="true"></i>
                                             </button>
                                          </td>
                                       </tr>
                                       <tr class="matche-main" data-team-id="15982" data-player-id="382030" data-player-role="F" data-player-name="Z. Nárožná" data-team-logo="https://media.api-sports.io/football/teams/15982.png" data-match-id="1210795" data-team-name="testing" data-home-team="15977" data-away-team="15982" data-slug-matchid="896">
                                          <td class="player-dp">
                                          </td>
                                          <td>
                                             <h6>Z. Nárožná</h6>
                                          </td>
                                          <td class="team-logo">
                                             <img src="https://media.api-sports.io/football/teams/15982.png" alt="team-logo-2">
                                          </td>
                                          <td>
                                             <p>25</p>
                                          </td>
                                          <td class="credits_points">
                                             <span>No</span>
                                             <button class="plus player-toggle" data-event="plus">
                                             <i class="fa fa-plus" aria-hidden="true"></i>
                                             </button>
                                             <button class="minus player-toggle d-none" data-event="minus">
                                             <i class="fa fa-minus" aria-hidden="true"></i>
                                             </button>
                                          </td>
                                       </tr>
                                       <tr class="matche-main" data-team-id="15982" data-player-id="382039" data-player-role="F" data-player-name="N. Matušicová" data-team-logo="https://media.api-sports.io/football/teams/15982.png" data-match-id="1210795" data-team-name="testing" data-home-team="15977" data-away-team="15982" data-slug-matchid="896">
                                          <td class="player-dp">
                                          </td>
                                          <td>
                                             <h6>N. Matušicová</h6>
                                          </td>
                                          <td class="team-logo">
                                             <img src="https://media.api-sports.io/football/teams/15982.png" alt="team-logo-2">
                                          </td>
                                          <td>
                                             <p>25</p>
                                          </td>
                                          <td class="credits_points">
                                             <span>No</span>
                                             <button class="plus player-toggle" data-event="plus">
                                             <i class="fa fa-plus" aria-hidden="true"></i>
                                             </button>
                                             <button class="minus player-toggle d-none" data-event="minus">
                                             <i class="fa fa-minus" aria-hidden="true"></i>
                                             </button>
                                          </td>
                                       </tr>
                                       <tr class="matche-main" data-team-id="15982" data-player-id="438397" data-player-role="F" data-player-name="T. Kramlíková" data-team-logo="https://media.api-sports.io/football/teams/15982.png" data-match-id="1210795" data-team-name="testing" data-home-team="15977" data-away-team="15982" data-slug-matchid="896">
                                          <td class="player-dp">
                                          </td>
                                          <td>
                                             <h6>T. Kramlíková</h6>
                                          </td>
                                          <td class="team-logo">
                                             <img src="https://media.api-sports.io/football/teams/15982.png" alt="team-logo-2">
                                          </td>
                                          <td>
                                             <p>25</p>
                                          </td>
                                          <td class="credits_points">
                                             <span>No</span>
                                             <button class="plus player-toggle" data-event="plus">
                                             <i class="fa fa-plus" aria-hidden="true"></i>
                                             </button>
                                             <button class="minus player-toggle d-none" data-event="minus">
                                             <i class="fa fa-minus" aria-hidden="true"></i>
                                             </button>
                                          </td>
                                       </tr>
                                       <tr class="matche-main" data-team-id="15982" data-player-id="381913" data-player-role="F" data-player-name="N. Hucovičová" data-team-logo="https://media.api-sports.io/football/teams/15982.png" data-match-id="1210795" data-team-name="testing" data-home-team="15977" data-away-team="15982" data-slug-matchid="896">
                                          <td class="player-dp">
                                          </td>
                                          <td>
                                             <h6>N. Hucovičová</h6>
                                          </td>
                                          <td class="team-logo">
                                             <img src="https://media.api-sports.io/football/teams/15982.png" alt="team-logo-2">
                                          </td>
                                          <td>
                                             <p>25</p>
                                          </td>
                                          <td class="credits_points">
                                             <span>No</span>
                                             <button class="plus player-toggle" data-event="plus">
                                             <i class="fa fa-plus" aria-hidden="true"></i>
                                             </button>
                                             <button class="minus player-toggle d-none" data-event="minus">
                                             <i class="fa fa-minus" aria-hidden="true"></i>
                                             </button>
                                          </td>
                                       </tr>
                                       <tr class="matche-main" data-team-id="15982" data-player-id="382034" data-player-role="F" data-player-name="N. Chlepková" data-team-logo="https://media.api-sports.io/football/teams/15982.png" data-match-id="1210795" data-team-name="testing" data-home-team="15977" data-away-team="15982" data-slug-matchid="896">
                                          <td class="player-dp">
                                          </td>
                                          <td>
                                             <h6>N. Chlepková</h6>
                                          </td>
                                          <td class="team-logo">
                                             <img src="https://media.api-sports.io/football/teams/15982.png" alt="team-logo-2">
                                          </td>
                                          <td>
                                             <p>25</p>
                                          </td>
                                          <td class="credits_points">
                                             <span>No</span>
                                             <button class="plus player-toggle" data-event="plus">
                                             <i class="fa fa-plus" aria-hidden="true"></i>
                                             </button>
                                             <button class="minus player-toggle d-none" data-event="minus">
                                             <i class="fa fa-minus" aria-hidden="true"></i>
                                             </button>
                                          </td>
                                       </tr>
                                       <tr class="matche-main" data-team-id="15982" data-player-id="381915" data-player-role="F" data-player-name="A. Bogorová" data-team-logo="https://media.api-sports.io/football/teams/15982.png" data-match-id="1210795" data-team-name="testing" data-home-team="15977" data-away-team="15982" data-slug-matchid="896">
                                          <td class="player-dp">
                                          </td>
                                          <td>
                                             <h6>A. Bogorová</h6>
                                          </td>
                                          <td class="team-logo">
                                             <img src="https://media.api-sports.io/football/teams/15982.png" alt="team-logo-2">
                                          </td>
                                          <td>
                                             <p>25</p>
                                          </td>
                                          <td class="credits_points">
                                             <span>No</span>
                                             <button class="plus player-toggle" data-event="plus">
                                             <i class="fa fa-plus" aria-hidden="true"></i>
                                             </button>
                                             <button class="minus player-toggle d-none" data-event="minus">
                                             <i class="fa fa-minus" aria-hidden="true"></i>
                                             </button>
                                          </td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="team-btns">
                        <a href="#" class="next-btn">next</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- Component End  -->
      </div>
   </div>
</section>


@endsection

@section('custom-script')

@endsection
