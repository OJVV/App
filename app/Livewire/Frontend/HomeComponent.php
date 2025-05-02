<?php

namespace App\Livewire\Frontend;

use App\Models\Service;
use Livewire\Component;
use App\Models\Portfolio;

class HomeComponent extends Component
{
   
    public function render()
    {
        
        $services = Service::all();
        $portfolios = Portfolio::take(5)->get();
        return view('livewire.frontend.home-component', ['services' => $services, 'portfolios' => $portfolios ])->layout('layouts.base');
    }
}
