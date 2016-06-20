<?php

namespace App\Jobs;

use App\Jobs\Job;
use Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendReminderEmail extends Job implements ShouldQueue
{
    use InteractsWithQueue, SerializesModels;

        protected $user;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * 執行任務。
     *
     * @param  Mailer  $mailer
     * @return void
     */
    public function handle()
    {


        Mail::send('blog.mail.welcome', [], function ($m)  {


            $m->to('colon.song@gmail.com', 'colon')->subject('Your Reminder!');
        });


    }
}
