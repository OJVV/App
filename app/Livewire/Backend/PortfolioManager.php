<?php

namespace App\Livewire\Backend;

use Livewire\Component;
use App\Models\Portfolio;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class PortfolioManager extends Component
{
    use WithFileUploads;

    // Método que se llama cuando se guarda el proyecto
    public $title, $description, $file, $portfolioId;
    public $portfolios; // Para almacenar la lista de portfolios

    // Inicializar los portfolios
    public function mount()
    {
        $this->portfolios = Portfolio::all();
    }

    // Guardar o actualizar un proyecto
    public function save()
    {
        $this->validate([
            'title' => 'required',
            'description' => 'required',
            'file' => 'required|mimes:jpeg,png,jpg,gif,mp4,mov,avi|max:20480', // Validar imagen o video
        ]);

        // Si estamos editando, buscamos el proyecto
        $portfolio = $this->portfolioId ? Portfolio::find($this->portfolioId) : new Portfolio();

        // Guardar el archivo
        $filePath = $this->file->store('portfolios', 'public');

        // Guardar el proyecto
        $portfolio->title = $this->title;
        $portfolio->description = $this->description;
        $portfolio->file = $filePath;
        $portfolio->save();

        // Limpiar los campos
        $this->reset();

        // Recargar la lista de portfolios
        $this->portfolios = Portfolio::all();
    }

    // Editar un proyecto
    public function edit($id)
    {
        $portfolio = Portfolio::find($id);

        $this->portfolioId = $portfolio->id;
        $this->title = $portfolio->title;
        $this->description = $portfolio->description;
        // No es necesario cargar el archivo porque será reemplazado al subir uno nuevo
    }

    // Eliminar un proyecto
    public function delete($id)
    {
        $portfolio = Portfolio::find($id);
        if ($portfolio) {
            // Eliminar el archivo del almacenamiento
            Storage::delete('public/' . $portfolio->file);
            // Eliminar el registro de la base de datos
            $portfolio->delete();
        }

        // Recargar la lista de portfolios
        $this->portfolios = Portfolio::all();
    }

    // Método que se ejecuta cuando se renderiza el componente

    public function render()
    {
        
        return view('livewire.backend.portfolio-manager')->layout('layouts.app');
    }
}
