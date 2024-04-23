<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class phoneNull extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'phone:null';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Set phone number to null if 0';

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
        ini_set('memory_limit', '-1');
        Log::warning("Phone Null Command Started");
        User::wherePhone(0)->update([
            'phone' => null
        ]);
        Log::info("Phone Null Command Finished");
    }
}
