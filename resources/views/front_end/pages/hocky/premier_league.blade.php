@extends('front_end.layout.main')
@section('content')

<section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb mb-2">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="{{route('home')}}">Home</a></li>
          <li class="list-inline-item text-white h3 font-secondary nasted">Premier League</li>
        </ul>
      </div>
    </div>
  </div>
</section>



<section class="premier_bg leagues">
  <div class="container">
     <div class="leagure_container">
        <div class="flex flex-col items-center justify-center w-screen min-h-screen bg-gray-900 py-10">
           <!-- Component Start -->
           <h1 class="font-medium">2023-24 Season</h1>
           <div class="flex flex-col mt-6">
              <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                 <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="leagues-table">
                     <div class="div-tbl">
                         <table class="table table-light table-striped table-hover table-sm">
                            <thead class="thead-light text-uppercase">
                               <tr>
                                  <th scope="col"></th>
                                  <th scope="col">League</th>
                                  <th scope="col">Type</th>
                                  <th scope="col">Start Date</th>
                                  <th scope="col">End Date</th>
                               </tr>
                            </thead>
                            <tbody>
                               <tr>
                                  <td class="league-logo">
                                     <img src="images/league-logo.png" alt="league-logo">
                                     <a href="matches"></a>
                                  </td>
                                  <td>
                                     <h6>Major League Soccer</h6>
                                  </td>
                                  <td>
                                     <p>Cup</p>
                                  </td>
                                  <td>
                                     <p>7-7-2024</p>
                                  </td>
                                  <td>
                                    <p>11-8-2024</p>
                                  </td>
                               </tr>
                               <tr>
                                 <td class="league-logo">
                                    <img src="images/league-logo-2.png" alt="league-logo-2">
                                    <a href="matches"></a>
                                 </td>
                                 <td>
                                    <h6>National Capital Soccer League</h6>
                                 </td>
                                 <td>
                                     <p>Cup</p>
                                  </td>
                                 <td>
                                    <p>12-4-2024</p>
                                 </td>
                                 <td>
                                   <p>8-5-2024</p>
                                 </td>
                              </tr>
                              <tr>
                                 <td class="league-logo">
                                    <img src="images/league-logo.png" alt="league-logo">
                                    <a href="matches"></a>
                                 </td>
                                 <td>
                                    <h6>Major League Soccer</h6>
                                 </td>
                                 <td>
                                    <p>Cup</p>
                                 </td>
                                 <td>
                                    <p>7-7-2024</p>
                                 </td>
                                 <td>
                                   <p>11-8-2024</p>
                                 </td>
                              </tr>
                              <tr>
                                <td class="league-logo">
                                   <img src="images/league-logo-2.png" alt="league-logo-2">
                                   <a href="matches"></a>
                                </td>
                                <td>
                                   <h6>National Capital Soccer League</h6>
                                </td>
                                <td>
                                    <p>Cup</p>
                                 </td>
                                <td>
                                   <p>12-4-2024</p>
                                </td>
                                <td>
                                  <p>8-5-2024</p>
                                </td>
                             </tr>
                             <tr>
                                 <td class="league-logo">
                                    <img src="images/league-logo.png" alt="league-logo">
                                    <a href="matches"></a>
                                 </td>
                                 <td>
                                    <h6>Major League Soccer</h6>
                                 </td>
                                 <td>
                                    <p>Cup</p>
                                 </td>
                                 <td>
                                    <p>7-7-2024</p>
                                 </td>
                                 <td>
                                   <p>11-8-2024</p>
                                 </td>
                              </tr>
                              <tr>
                                <td class="league-logo">
                                   <img src="images/league-logo-2.png" alt="league-logo-2">
                                   <a href="matches"></a>
                                </td>
                                <td>
                                   <h6>National Capital Soccer League</h6>
                                </td>
                                <td>
                                    <p>Cup</p>
                                 </td>
                                <td>
                                   <p>12-4-2024</p>
                                </td>
                                <td>
                                  <p>8-5-2024</p>
                                </td>
                             </tr>
                             <tr>
                                 <td class="league-logo">
                                    <img src="images/league-logo.png" alt="league-logo">
                                    <a href="matches"></a>
                                 </td>
                                 <td>
                                    <h6>Major League Soccer</h6>
                                 </td>
                                 <td>
                                    <p>Cup</p>
                                 </td>
                                 <td>
                                    <p>7-7-2024</p>
                                 </td>
                                 <td>
                                   <p>11-8-2024</p>
                                 </td>
                              </tr>
                              <tr>
                                <td class="league-logo">
                                   <img src="images/league-logo-2.png" alt="league-logo-2">
                                   <a href="matches"></a>
                                </td>
                                <td>
                                   <h6>National Capital Soccer League</h6>
                                </td>
                                <td>
                                    <p>Cup</p>
                                 </td>
                                <td>
                                   <p>12-4-2024</p>
                                </td>
                                <td>
                                  <p>8-5-2024</p>
                                </td>
                             </tr>
                             <tr>
                                 <td class="league-logo">
                                    <img src="images/league-logo.png" alt="league-logo">
                                    <a href="matches"></a>
                                 </td>
                                 <td>
                                    <h6>Major League Soccer</h6>
                                 </td>
                                 <td>
                                    <p>Cup</p>
                                 </td>
                                 <td>
                                    <p>7-7-2024</p>
                                 </td>
                                 <td>
                                   <p>11-8-2024</p>
                                 </td>
                              </tr>
                              <tr>
                                <td class="league-logo">
                                   <img src="images/league-logo-2.png" alt="league-logo-2">
                                   <a href="matches"></a>
                                </td>
                                <td>
                                   <h6>National Capital Soccer League</h6>
                                </td>
                                <td>
                                    <p>Cup</p>
                                 </td>
                                <td>
                                   <p>12-4-2024</p>
                                </td>
                                <td>
                                  <p>8-5-2024</p>
                                </td>
                             </tr>
                             <tr>
                                 <td class="league-logo">
                                    <img src="images/league-logo.png" alt="league-logo">
                                    <a href="matches"></a>
                                 </td>
                                 <td>
                                    <h6>Major League Soccer</h6>
                                 </td>
                                 <td>
                                    <p>Cup</p>
                                 </td>
                                 <td>
                                    <p>7-7-2024</p>
                                 </td>
                                 <td>
                                   <p>11-8-2024</p>
                                 </td>
                              </tr>
                              <tr>
                                <td class="league-logo">
                                   <img src="images/league-logo-2.png" alt="league-logo-2">
                                   <a href="matches"></a>
                                </td>
                                <td>
                                   <h6>National Capital Soccer League</h6>
                                </td>
                                <td>
                                    <p>Cup</p>
                                 </td>
                                <td>
                                   <p>12-4-2024</p>
                                </td>
                                <td>
                                  <p>8-5-2024</p>
                                </td>
                             </tr>
                             <tr>
                                 <td class="league-logo">
                                    <img src="images/league-logo.png" alt="league-logo">
                                    <a href="matches"></a>
                                 </td>
                                 <td>
                                    <h6>Major League Soccer</h6>
                                 </td>
                                 <td>
                                    <p>Cup</p>
                                 </td>
                                 <td>
                                    <p>7-7-2024</p>
                                 </td>
                                 <td>
                                   <p>11-8-2024</p>
                                 </td>
                              </tr>
                              <tr>
                                <td class="league-logo">
                                   <img src="images/league-logo-2.png" alt="league-logo-2">
                                   <a href="matches"></a>
                                </td>
                                <td>
                                   <h6>National Capital Soccer League</h6>
                                </td>
                                <td>
                                    <p>Cup</p>
                                 </td>
                                <td>
                                   <p>12-4-2024</p>
                                </td>
                                <td>
                                  <p>8-5-2024</p>
                                </td>
                             </tr>
                            </tbody> 
                         </table>
                      </div>
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
