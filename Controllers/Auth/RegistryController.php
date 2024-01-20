<?php

namespace app\Controllers\Auth;

use app\Controllers\BaseController;
use app\Models\User;

class RegistryController extends BaseController
{
    public function showRegistryForm(): string
    {
        return '';
    }

    public function registration(): User
    {
        return new User();
    }
}