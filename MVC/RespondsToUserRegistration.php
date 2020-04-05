<?php

namespace Laracasts;

interface RespondsToUserRegistration
{
    public function userRegisteredSuccessfully();

    public function userRegisteredFailed();
}
