<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

Route::get('/send-email', function () {
    Mail::to('youremail@gmail.com')->send(new TestMail());
    return "Email Sent Successfully!";
});
