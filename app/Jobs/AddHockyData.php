<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Services\ApiHockyService;
use App\Models\PlayerStatistic;
use App\Models\StaticsLogs;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Models\League;


class AddHockyData implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(ApiHockyService $apiHockyService)
    {
        // dd('testing');
       $all_leagues = $apiHockyService->addHockyData();
       
    //    if(isset($all_leagues['response']) && !empty($all_leagues['response'])){
    //       $apiHockyService->addFootballData($all_leagues['response']);
    //    }
    }
}
