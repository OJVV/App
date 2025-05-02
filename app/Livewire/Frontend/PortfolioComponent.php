<?php

namespace App\Livewire\Frontend;

use Livewire\Component;
use App\Models\Portfolio;
use Livewire\WithPagination;

class PortfolioComponent extends Component
{
    use WithPagination;
    public $perPage = 3;
    
    public function render()
    {
        $portfolios = Portfolio::paginate($this->perPage);
       
        return view('livewire.frontend.portfolio-component',['portfolios' => $portfolios])->layout('layouts.base');
    }
}
