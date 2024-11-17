<div class="grid gap-4 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4"">
    <div class="bg-white rounded-lg shadow-md p-6">
        <p class="text-gray-600 mt-2">Component 1</p>
    </div>

    <div class="bg-white rounded-lg shadow-md p-6">
        <p class="text-gray-600 mt-2">Component 2</p>
    </div>

    <div class="bg-white rounded-lg shadow-md p-6">
        <p class="text-gray-600 mt-2">Component 3</p>
    </div>

    <div class="bg-white rounded-lg shadow-md p-6">
        <p class="text-gray-600 mt-2">Component 4</p>
    </div>
    

    <h1>{{ $count }}</h1>

    <button wire:click="increment">+</button>

    <button wire:click="decrement">-</button>
</div>
