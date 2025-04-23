<?php

namespace App\Data;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\Attributes\Validation\Date;
use Carbon\Carbon;


class UserData extends Data
{
    
    public string $name;
    
    public string $email;
    #[Date]
    public ?Carbon $email_verified_at;
    
    public string $password;
    
    public ?string $remember_token;

}
