<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" flex flex-col  bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're successfully logged in!") }}
                </div>

                <button class="p-4 bg-blue-200 border-2 font-bold text-xl underline"><a href="{{ route('product.index') }}"> Navigate to product page</a></button>
            </div>
        </div>
        <div></div>
    </div>
</x-app-layout>
