<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        // $schedule->command('inspire')->hourly();
        $schedule->command('backup:run')->dailyAt('00:15')->name('Backup_run')->withoutOverlapping();

        /**
         * * Backup clean daily
         */
        $schedule->command('backup:clean')->dailyAt('00:25')->name('Backup_clean')->withoutOverlapping();

        /**
         * * Set phone number to null
         */
        $schedule->command('phone:null')->everySixHours()->name('security')->withoutOverlapping();
  
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
