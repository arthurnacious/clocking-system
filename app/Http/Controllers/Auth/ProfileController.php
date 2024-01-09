<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
   public function overview(): View
   {
    $user = Auth()->user()
                ->load(['address', 'address.country', 'profile', 'roles', 'projects' => function (Builder $query) {
                     $query->limit(8);
                    }
                ])
                ->loadCount('projects');

    return view('livewire.pages.profile.overview', ['user' => $user]);
   }
}
