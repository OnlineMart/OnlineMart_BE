<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class DeleteOtpExpired extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:delete-otp';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $users = User::whereNotNull('otp_send_at')->get();

        foreach ($users as $user) {
            $otpSendAt = $user->otp_send_at;
            $now = now();
            $diff = $now->diffInMinutes($otpSendAt);
            if ($diff >= 5) {
                $user->otp_send_at = null;
                $user->otp = null;
                $user->save();
            }
        }
    }
}
