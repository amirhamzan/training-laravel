<?php

use App\Mail\SupportRequest;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

$emails = [
    'amirhassan.hamzan@gmail.com',
    'amirhassan@gmail.com',
    'amirhassan@gmail.com',
    'amirhassan@gmail.com',
    'amirhassan@gmail.com',
];

foreach($emails as $email)
{
    Mail::to($email)->send(new SupportRequest(Str::random(255)));
}