<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex m-10 gap-10 items-center">
                        <h1 class="text-2xl font-bold">Products</h1>
                        <button class="bg-blue-200 rounded-xl p-2 border-2 font-bold">
                            <a href="{{ route('product.create') }}"> + Create a product</a>
                        </button>
                    </div>
                    <div class="flex gap-20 flex-wrap m-10">
                        @foreach ($products as $product)
                            <div class="flex flex-col gap-2 p-2 border-2 rounded-xl">
                                <div class="font-bold text-xl">{{ $product->name }}</div>
                                <div class="text-sm">Price: {{ $product->price }}</div>
                                <hr />
                                <div class="text-xl">{{ $product->detail }}</div>
                                <div class="flex gap-4">
                                    <button class="border-2 px-2 py-1 rounded-xl bg-blue-200">
                                        <a href="{{ route('product.detail', ['product' => $product]) }}">View</a>
                                    </button>
                                    <button class="border-2 px-2 py-1 rounded-xl bg-blue-200">
                                        <a href="{{ route('product.edit', ['product' => $product]) }}">Edit</a>
                                    </button>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>