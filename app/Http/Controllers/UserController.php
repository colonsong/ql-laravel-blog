<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Jobs\SendReminderEmail;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * 寄送提醒的 e-mail 給指定使用者。
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function sendReminderEmail()
    {
        echo 'sending';
        $job = (new SendReminderEmail())->onQueue('emails');
        $this->dispatch($job);
    }
}