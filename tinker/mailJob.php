<?php

use App\Jobs\SendMail;
use App\Mail\SupportRequest;

$emails = [
    'amirhassan@amir.com',
    'amirhamzan@amir.com',
];

foreach ($emails as $email) {
    SendMail::dispatch(
        $email,
        new SupportRequest('Send mail from mailJob using mailing queue')
    )->onQueue('mailing');
}

exit;
