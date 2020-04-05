<?php

namespace Laracasts;

class AuthController
{
    public function register(RegisterUser $registration)
    {
        $registration->execute([]);
    }
}
