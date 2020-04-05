<?php

use Laracasts\{AuthController, RegisterUser};

$authController = new AuthController(new RegisterUser);

$authController->register();
