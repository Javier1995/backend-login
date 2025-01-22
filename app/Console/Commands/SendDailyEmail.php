<?php

namespace App\Console\Commands;

use App\Models\User;
use App\Mail\DailyEmail;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendDailyEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-daily-email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send user emails';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $users = User::take(2)->get();
        foreach ($users as $user) {
            Mail::to($user->email)->send(new DailyEmail($user));
        }

        return 0;
    }
}
