<div>
    <div class="bg-white rounded-lg shadow-lg mb-6">
        <div class="px-6 py-2 flex justify-between items-center">
            <h1 class="font-semibold text-gray-700 uppercase">{{ $category->name }}</h1>
            <div class="grid grid-cols-2 border border-gray-200 divide-x divide-gray-200 text-gray-500">
                <i class="fas fa-border-all p-3 cursor-pointer {{ $view == 'grid' ? 'text-orange-500' : '' }}"
                    wire:click="$set('view', 'grid')"></i>
                <i class="fas fa-th-list p-3 cursor-pointer {{ $view == 'list' ? 'text-orange-500' : '' }}"
                    wire:click="$set('view', 'list')"></i>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-1  lg:grid-cols-5 sm:grid-cols-2 md:grid-cols-3 gap-6">
        <div>
            <aside class="divide-y divide-gray-200">
                <h2 class="font-semibold text-center mb-2">Subcategorias</h2>
                <ul class="divide-y divide-gray-200">
                    @foreach ($category->subcategories as $subcategory)
                        <li class="py-2 text-sm">
                            <a class="cursor-pointer hover:text-orange-500 capitalize {{ $subcategory->name == $subcategoria ? 'text-orange-500 font-semibold' : '' }}"
                                wire:click="$set('subcategoria', '{{ $subcategory->name }}')">
                                {{ $subcategory->name }}
                            </a>
                        </li>
                    @endforeach
                </ul>

                <h2 class="font-semibold text-center mb-2 mt-4">Marcas</h2>
                <ul class="divide-y divide-gray-200">
                    @foreach ($category->brands as $brand)
                        <li class="py-2 text-sm">
                            <a class="cursor-pointer hover:text-orange-500 capitalize {{ $brand->name == $marca ? 'text-orange-500 font-semibold' : '' }}"
                                wire:click="$set('marca', '{{ $brand->name }}')">
                                {{ $brand->name }}
                            </a>
                        </li>
                    @endforeach
                </ul>

                <x-jet-button class="mt-4" wire:click='limpiar()'>
                    Eliminar Filtros
                </x-jet-button>
            </aside>
        </div>
        <div class="md:col-span-2 lg:col-span-4">
            @if ($view == 'grid')
                <ul class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    @foreach ($products as $product)
                        <x-product :product="$product" />
                    @endforeach
                </ul>
            @else
            <ul class="">
                @foreach ($products as $product)
                    <x-product-list :product="$product" />
                @endforeach
            </ul>
            @endif

            <div class="mt-4">
                {{ $products->links() }}
            </div>
        </div>
    </div>
</div>
