@props(['product'])
<li class="bg-white rounded-lg shadow">
    <article>
        <figure>
            <img class="h-48 w-full object-cover object-center" src="{{ Storage::url($product->images->first()->url) }}"
                alt="{{ $product->name }}">
        </figure>
        <div class="py-4 px-6">
            <h1 class="text-lg font-semibold">
                <a href="{{route('products.show', $product)}}">{{ Str::limit($product->name, 20) }}</a>
            </h1>
            <p class="font-bold text-trueGray-700">US$ {{ $product->price }}</p>
        </div>
    </article>
</li>