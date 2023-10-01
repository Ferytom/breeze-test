<x-admin-layout>
    <div class="card">
        <div class="card-body">
            <div class="flex flex-row justify-between items-center">
                <h1 class="font-extrabold text-lg">{{ $product->name }}</h1>
                <a href="{{ route('admin.products.index') }}" class="btn-gray text-sm">Back to Products</a>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2">
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"
                    class="w-full h-64 object-cover rounded-lg mt-5">

            </div>
        </div>
    </div>
</x-admin-layout>
