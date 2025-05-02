<div>
    <div>
        <div class="p-6 bg-gray-100 dark:bg-gray-800 rounded-lg shadow-lg">
            <h2 class="text-2xl text-gray-900 dark:text-white">Gestión del Portfolio</h2>
        
            <!-- Formulario para crear o editar -->
            <form wire:submit.prevent="save" class="mt-6" enctype="multipart/form-data">
                <div class="mb-4">
                    <label for="title" class="block text-gray-700 dark:text-gray-200">Título</label>
                    <input type="text" id="title" wire:model="title" class="form-input mt-1 block w-full dark:bg-gray-700 dark:text-white" required>
                </div>
        
                <div class="mb-4">
                    <label for="description" class="block text-gray-700 dark:text-gray-200">Descripción</label>
                    <textarea id="description" wire:model="description" class="form-input mt-1 block w-full dark:bg-gray-700 dark:text-white" required></textarea>
                </div>
        
                <div class="mb-4">
                    <label for="file" class="block text-gray-700 dark:text-gray-200">Subir Imagen o Video</label>
                    <input type="file" wire:model="file" class="form-input mt-1 block w-full dark:bg-gray-700 dark:text-white" required>
                </div>
                <button type="submit"
                class="px-4 py-2 rounded-md font-medium 
                       text-black dark:text-white 
                       bg-blue-500 border border-blue-600 
                       hover:bg-blue-600 hover:border-blue-700 
                       dark:bg-blue-600 dark:border-blue-700 
                       dark:hover:bg-blue-700 dark:hover:border-blue-800 
                       shadow transition duration-200 mt-4">
                {{ $portfolioId ? 'Actualizar' : 'Crear' }} Proyecto
            </button>
            </form>
        
            <!-- Lista de elementos del Portfolio -->
            <!-- Lista de elementos del Portfolio -->
            <h3 class="mt-8 text-lg text-gray-900 dark:text-white">Lista de Proyectos</h3>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-4">
                @foreach($portfolios as $portfolio)
                    <div class="flex flex-col justify-between border p-4 rounded bg-white dark:bg-gray-700 dark:border-gray-600 shadow-md">
                        <div class="flex items-center gap-4 mb-3">
                            @if(in_array(pathinfo($portfolio->file, PATHINFO_EXTENSION), ['jpg', 'jpeg', 'png']))
                                <img src="{{ Storage::url($portfolio->file) }}" class="w-16 h-16 object-contain rounded">
                            @elseif(in_array(pathinfo($portfolio->file, PATHINFO_EXTENSION), ['mp4', 'mov', 'avi']))
                                <video controls class="w-16 h-16 object-contain rounded">
                                    <source src="{{ Storage::url($portfolio->file) }}" type="video/mp4">
                                    Tu navegador no soporta el video.
                                </video>
                            @endif
            
                            <h4 class="text-md font-semibold text-gray-900 dark:text-white">{{ $portfolio->title }}</h4>
                        </div>
            
                        <div class="flex items-center justify-end gap-2">
                            <button wire:click="edit({{ $portfolio->id }})"
                                class="px-3 py-1 rounded-md font-medium
                                       text-black dark:text-white 
                                       bg-blue-500 border border-blue-600 
                                       hover:bg-blue-600 hover:border-blue-700 
                                       dark:bg-blue-600 dark:border-blue-700 
                                       dark:hover:bg-blue-700 dark:hover:border-blue-800
                                       shadow transition duration-200">
                                Editar
                            </button>
                            
                            <button wire:click="delete({{ $portfolio->id }})"
                                class="px-3 py-1 rounded-md font-medium 
                                       border border-red-600 bg-red-600 text-white 
                                       hover:bg-red-700 dark:bg-red-600 dark:hover:bg-red-700 
                                       shadow transition duration-200">
                                Eliminar
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>
            
        </div>
    </div>
    
    
</div>
    
    
    
    
    
    

