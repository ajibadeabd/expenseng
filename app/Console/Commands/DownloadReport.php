<?php

namespace App\Console\Commands;

use App\Scrapping;
use Carbon\Carbon;
use Illuminate\Console\Command;

class DownloadReport extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'DailyPaymentReport';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Download excel files from scrapping through website';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     * @throws \Exception
     */
    public function handle()
    {
        $int = random_int(10, 30);
        $date = Carbon::now()->subDays()->format('d-m');
        $link = new Scrapping();
        try {
            $result = $link->openTreasury('2020')->selectDate($date)->download();
            if ($result) {
                echo 'downloaded to the resource folder \n';
            } else {
                echo 'resource was not found';
            }
        } catch (\Exception $e) {
            $this->error('error cccured');
        }

        return 0;
    }
}
