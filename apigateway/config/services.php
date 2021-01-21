<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */
    
    'payroll1' => [
        'base_uri' => env('PAYROLL1_SERVICE_BASE_URL'), 
        'secret' => env('PAYROLL1_SERVICE_SECRET'),  
],

    'payroll2' => [
        'base_uri' => env('PAYROLL2_SERVICE_BASE_URL'),
        'secret' => env('PAYROLL2_SERVICE_SECRET'),
    ],  

];
