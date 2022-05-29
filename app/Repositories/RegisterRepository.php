<?php

namespace App\Repositories;

use App\Interfaces\RegisterRepositoryInterface;
use App\Models\Register;

class RegisterRepository implements RegisterRepositoryInterface 
{
    public function register(array $registrationDetails) 
    {
        return (new Register)->create($registrationDetails);
    }

}