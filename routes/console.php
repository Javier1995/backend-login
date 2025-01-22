<?php
use Illuminate\Support\Facades\Schedule;



Schedule::command('app:send-daily-email')->dailyAt('00:00:00');

//run command : ./vendor/bin/sail php artisan schedule:work