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
           <h1 class="font-medium">{{date('Y')}} Season</h1>

            @if(Session::has('success'))
            <span class="alert alert-success text-center" style="width:100%;">{{ Session::get('success') }}</span>
            @elseif(Session::has('error'))
            <span class="alert alert-danger text-center" style="width:100%;">{{ Session::get('error') }}</span>
         
            @endif

           <div class="flex flex-col mt-6">
              <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                 <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="leagues-table">
                     <div class="div-tbl">
                         <table class="table table-light table-striped table-hover table-sm" id="myTable">
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
                              @foreach ($leagues as $key => $league)
                               <tr>
                                  <td class="league-logo">
                                     <img src="{{ $league->logo }}" alt="league-logo">
                                     <a href="{{ route('leagueMatches',['leagueId'=>$league->id]) }}"></a>
                                  </td>
                                  <td>
                                     <h6>{{ $league->name }}</h6>
                                     <a href="{{ route('leagueMatches',['leagueId'=>$league->id]) }}"></a>
                                  </td>
                                  <td>
                                     <p>{{ $league->type }}</p>
                                     <a href="{{ route('leagueMatches',['leagueId'=>$league->id]) }}"></a>
                                  </td>
                                  <td>
                                     <p>{{ $league->start_date }}</p>
                                     <a href="{{ route('leagueMatches',['leagueId'=>$league->id]) }}"></a>
                                  </td>
                                  <td>
                                    <p>{{ $league->end_date }}</p>
                                    <a href="{{ route('leagueMatches',['leagueId'=>$league->id]) }}"></a>
                                  </td>
                               </tr>
                              @endforeach    
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

@section('custom-script')
<script>
  let table = new DataTable('#myTable');
</script>
@endsection
