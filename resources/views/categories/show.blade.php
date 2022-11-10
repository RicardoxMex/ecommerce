<x-app-layout>
    <div class="container py-8">
        <figure class="mb-4">
            <img class="w-full h-80 object-cover object-center mb-4" src="{{Storage::url($category->image)}}" alt="">
            <livewire:category-filter :category="$category"/>
        </figure>
    </div>
    
</x-app-layout>