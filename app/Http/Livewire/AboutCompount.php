<?php

namespace App\Http\Livewire;

use App\Models\Team;
use Livewire\Component;

class AboutCompount extends Component
{
    public function render()
    {
        $teams = Team::all();
        return view('livewire.about-compount', ['teams' => $teams])->layout('layouts.user');
    }
}
