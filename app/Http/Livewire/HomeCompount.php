<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Profile;
use App\Models\Slider;
use Livewire\Component;

class HomeCompount extends Component
{

    public function render()
    {
        $sliders = Slider::where('status', 1)->get();
        $protfolios = Profile::all();
        $categories = Category::all();
        return view('livewire.home-compount', ['sliders' => $sliders, 'protfolios' => $protfolios, 'categories' => $categories])->layout('layouts.user');
    }
}
