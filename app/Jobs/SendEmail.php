<?php

namespace App\Jobs;

use Exception;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class SendEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($user, $emailJob)
    {
        $this->emailJob = $emailJob;
        $this->user = $user;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        try{
            Mail::to($this->user->email)->send($this->emailJob);
            if (Mail::failures()) {
                return response()->json(['message'=>'Send Email Failed', 'errors'=>Mail::failures()], 502);
            }
        } catch(Exception $e) {
            return response()->json(['message' => 'Whoops', 'error' => $e->getMessage()], 502);
        }
    }
}
