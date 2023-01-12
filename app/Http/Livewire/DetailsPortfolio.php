<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Profile;
use Livewire\Component;

class DetailsPortfolio extends Component
{
    public $slug;

    public function mount($slug)
    {
        $this->slug = $slug;
    }

    public function render()
    {
        $portfolios = Profile::where('slug',$this->slug)->first();
        $categories = Category::all();
        return view('livewire.details-portfolio',['portfolios'=>$portfolios,'categories'=>$categories])->layout('layouts.user');
    }
}
