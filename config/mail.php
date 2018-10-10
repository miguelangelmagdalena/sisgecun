<?php

return array(
    "driver" => env('MAIL_DRIVER'),
    "host" => env('MAIL_HOST'),
    "port" => env('MAIL_PORT'),
    "from" => array(
        "address" => env('MAIL_ADDRESS'),
        "name" => env('MAIL_NAME')
    ),
    "username" => env('MAIL_USERNAME'),
    "password" => env('MAIL_PASSWORD'),
    "sendmail" => "/usr/sbin/sendmail -bs",
    "pretend" => false
  );