<?php

namespace App\Http\Livewire;

use App\Models\Testimon;
use Livewire\Component;

class TestimonialsCompount extends Component
{
    public function render()
    {
        $Testimonials = Testimon::all();
        return view('livewire.testimonials-compount',['Testimonials'=>$Testimonials])->layout('layouts.user');
    }
}
