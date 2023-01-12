<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Profile;
use Livewire\Component;

class PortfolioCompount extends Component
{
    public function render()
    {
        $protfolios = Profile::all();
        $categories = Category::all();
        return view('livewire.portfolio-compount', ['protfolios' => $protfolios, 'categories' => $categories])->layout('layouts.user');
    }
}
