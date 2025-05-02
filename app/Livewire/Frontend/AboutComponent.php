<?php

namespace App\Livewire\Frontend;

use App\Models\Service;
use Livewire\Component;

class AboutComponent extends Component
{
    public function render()
    {
        $services = Service::all();
        return view('livewire.frontend.about-component', ['services' => $services,])->layout('layouts.base');
    }
}
