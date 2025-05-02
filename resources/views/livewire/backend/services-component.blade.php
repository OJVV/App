<div>
    <div class="max-w-7xl mx-auto p-6">
        <div class="bg-white dark:bg-gray-800 shadow-xl rounded-xl p-6 mb-6">
            <h2 class="text-2xl font-semibold text-gray-800 dark:text-gray-100 mb-4">Agregar Servicio</h2>
    
            <form wire:submit.prevent="save" class="space-y-4">
                <input type="text" wire:model="title" placeholder="Título del servicio"
                    class="w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-white rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" />
    
                <select wire:model="icon"
                    class="w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-white rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    <option value="">Selecciona un ícono</option>
                    <option value="fas fa-guitar">🎸 Guitarra</option>
                    <option value="fas fa-music">🎹 Piano</option>
                    <option value="fas fa-drum">🥁 Batería</option>
                    <option value="fas fa-microphone-alt">🎤 Canto</option>         
                    <option value="fas fa-bell">🔔 Campana</option>
                </select>
    
                <button type="submit"
                class="w-full px-4 py-2 rounded-md font-semibold 
                       border border-gray-400 bg-gray-200 text-black 
                       hover:bg-gray-300 dark:bg-gray-200 dark:hover:bg-gray-300 
                       shadow transition duration-200">
                {{ $editId ? 'Actualizar' : 'Guardar Servicio' }}
            </button>
            </form>
        </div>
    
        <div class="bg-white dark:bg-gray-800 shadow-xl rounded-xl p-6">
            <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-100 mb-4">Lista de Servicios</h2>
        
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-4">
                @foreach($services as $service)
                    <div class="flex items-center justify-between border border-gray-300 dark:border-gray-700 rounded-lg p-4 bg-gray-50 dark:bg-gray-900 shadow-md">
                        <div class="flex items-center gap-3">
                            <i class="{{ $service->icon }} text-3xl text-blue-500 dark:text-blue-400"></i>
                            <h3 class="text-lg font-bold text-gray-800 dark:text-white">{{ $service->title }}</h3>
                        </div>
                        
                        <div class="flex items-center gap-3">
                            <button wire:click="edit({{ $service->id }})"
                                class="px-3 py-1 rounded-md font-medium
                                text-black dark:text-white 
                                bg-blue-500 border border-blue-600 
                                hover:bg-blue-600 hover:border-blue-700 
                                dark:bg-blue-600 dark:border-blue-700 
                                dark:hover:bg-blue-700 dark:hover:border-blue-800
                                shadow transition duration-200 mr-2">
                                Editar
                            </button>
                            
                            <button wire:click="delete({{ $service->id }})"
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