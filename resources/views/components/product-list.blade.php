@props(['product'])
<li class="bg-white rounded-lg shadow mb-4">
    <article class="flex">
        <figure>
            <img class="h-48 w-56 object-cover object-center" src="{{Storage::url($product->images->first()->url)}}" alt="{{$product->name}}">
        </figure>
        <div class="flex-1 py-4 px-6 flex  flex-col ">
            <div class="flex justify-between">
                <div>
                    <h1 class="text-lg font-semibold text-gray-700">{{$product->name}}</h1>
                    <p class="font-bold text-gray-700">$USD {{$product->price}}</p>
                </div>
                <div class="flex items-center">
                    <ul class="flex text-sm mr-4">
                        <li>⭐</li>
                        <li>⭐</li>
                        <li>⭐</li>
                        <li>⭐</li>
                        <li>⭐</li>
                    </ul>
                    <span class="text-gray-700 text-sm">(24)</span>
                </div>
            </div>
            <div class="mt-auto mb-6">
                <x-danger-enlace url="{{route('products.show', $product)}}" >
                    Mas informacion
                </x-danger-enlace>
            </div>
        </div>
    </article>
</li>