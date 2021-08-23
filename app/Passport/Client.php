<?php

namespace App\Passport;

use Emadadly\LaravelUuid\Uuids;
use Laravel\Passport\Client as OAuthClient;

class Client extends OAuthClient
{
    use Uuids;
    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    protected $keyType = 'string';


}
