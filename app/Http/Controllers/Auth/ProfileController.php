<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
   public function overview(): View
   {
    $user = Auth()->user()->load('roles');

    return view('livewire.pages.profile.overview', ['user' => $user]);
   }
}
