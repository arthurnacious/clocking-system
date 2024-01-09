<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserProjectController extends Controller
{
    public function __invoke(User $user)
    {
        return 'User Projects';
    }
}
