<?php

namespace App\Livewire\Backend;

use App\Models\Service;
use Livewire\Component;

class ServicesComponent extends Component
{
    public $services, $title, $icon, $editId = null;

    public function mount() {
        $this->services = Service::all();
    }

    public function save()
    {
        $this->validate([
            'title' => 'required|string',
            'icon' => 'required|string',
        ]);

        Service::updateOrCreate(
            ['id' => $this->editId],
            [
                'title' => $this->title,
                'icon' => $this->icon,
                
            ]
        );

        $this->resetForm();
        $this->services = Service::all();
    }

    public function edit($id)
    {
        $service = Service::findOrFail($id);
        $this->editId = $id;
        $this->title = $service->title;
        $this->icon = $service->icon;
       
    }

    public function delete($id)
    {
        Service::find($id)?->delete();
        $this->services = Service::all();
    }

    public function resetForm()
    {
        $this->editId = null;
        $this->title = '';
        $this->icon = '';
       
    }
    public function render()
    {
        return view('livewire.backend.services-component')->layout('layouts.app');
    }
}
