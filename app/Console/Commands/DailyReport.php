<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use DB;
use App\User;
use Mail;



class DailyReport extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'daily:report';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send a Daily report to the Admin email';

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
     */
    public function handle()
    {
    $todaysales = \DB::table('sales')->where('created_at', '>=', date('Y-m-d').' 00:00:00')->count();

    

      $user = User::all();

       foreach ($user as $a)

       {



   Mail::raw("This is automatically generated at 9:00am", function($message) use ($a)

   {

       $message->from('atteypascal@gmail.com');

       $message->to($a->email)->subject('send me');

   });

   }



   $this->info('Hourly Update has been send successfully');
}

}
