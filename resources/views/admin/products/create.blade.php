<x-admin-layout>
    <style>
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }
    </style>
    <div class="card w-3/4 lg:w-full">
        <div class="card-body">
            <div class="flex flex-row justify-between items-center">
                <h1 class="font-extrabold text-lg">Create a New Product</h1>
                <a href="{{ route('admin.products.index') }}" class="btn-gray text-sm">Back to Products</a>
            </div>

            <form action="{{ route('admin.products.store') }}" method="POST" class="mt-5" enctype="multipart/form-data">
                @csrf
                <div class="flex flex-col">
                    <label for="name" class="text-sm text-gray-600">Name</label>
                    <input type="text" name="name" id="name" class="input-text mt-2 w-full rounded-lg"
                        required autofocus autocomplete="name" value="{{ old('name') }}">
                    @error('name')
                        <span class="text-xs text-red-600">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex flex-col mt-5">
                    <label for="slug" class="text-sm text-gray-600">Slug</label>
                    <input type="text" name="slug" id="slug" class="input-text mt-2 w-full rounded-lg"
                        required value="{{ old('slug') }}">
                    @error('slug')
                        <span class="text-xs text-red-600">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex flex-col mt-5">
                    <label for="category_id" class="text-sm text-gray-600">Category</label>
                    <select name="category_id" id="category_id" class="input-text mt-2 w-full rounded-lg py-2 px-3">
                        @foreach ($categories as $category)
                            @if (old('category_id') == $category->id)
                                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                            @else
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endif
                        @endforeach
                    </select>
                    @error('category_id')
                        <span class="text-xs text-red-600">{{ $message }}</span>
                    @enderror
                </div>

                <div class="grid grid-cols-2 lg:grid-cols-1 gap-5 mt-5">
                    <div class="flex flex-col mt-5">
                        <label for="price" class="text-sm text-gray-600">Price</label>
                        <input type="number" name="price" id="price" class="input-text mt-2 w-full rounded-lg"
                            required value="{{ old('price') }}">
                        @error('price')
                            <span class="text-xs text-red-600">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="flex flex-col mt-5">
                        <label for="quantity" class="text-sm text-gray-600">Quantity</label>
                        <div class="flex flex-row items-center mt-2">
                            <button type="button" class="btn-gray text-xs mr-2" id="minus-btn"
                                onclick="if (this.nextElementSibling.value > 1) this.nextElementSibling.value--;">-</button>
                            <input type="number" name="quantity" id="quantity"
                                class="input-text w-full rounded-lg text-center" value="{{ old('quantity') ?? 1 }}"
                                required>
                            <button type="button" class="btn-gray text-xs ml-2" id="plus-btn"
                                onclick="this.previousElementSibling.value++;">+</button>
                        </div>
                        @error('quantity')
                            <span class="text-xs text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="flex flex-col mt-5">
                    <label for="image" class="text-sm text-gray-600">Image</label>
                    <img class="object-cover rounded-lg img-preview mt-3">
                    <input type="file" name="image" id="image" class="input-text mt-2 w-full rounded-lg"
                        required onchange="previewImage()">
                    @error('image')
                        <span class="text-xs text-red-600">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex flex-col mt-5">
                    <label for="color" class="text-sm text-gray-600">Color</label>
                    <input type="text" name="color" id="color" class="input-text mt-2 w-full rounded-lg"
                        required value="{{ old('color') }}">
                    @error('color')
                        <span class="text-xs text-red-600">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex flex-col mt-5">
                    <label for="description" class="text-sm text-gray-600">Description</label>
                    <textarea name="description" id="description" rows="5" class="input-text mt-2 w-full rounded-lg" required>{{ old('description') }}</textarea>
                    @error('description')
                        <span class="text-xs text-red-600">{{ $message }}</span>
                    @enderror
                </div>

                <button type="submit" class="btn mt-5">Create Product</button>
            </form>
        </div>
    </div>

    <script>
        const slugInput = document.querySelector('#slug');
        const nameInput = document.querySelector('#name');

        nameInput.addEventListener('keyup', function(e) {
            slugInput.value = slugify(nameInput.value);
        });

        function slugify(text) {
            return text.toString().toLowerCase().trim()
                .replace(/\s+/g, '-') // Replace spaces with -
                .replace(/[^\w-]+/g, '') // Remove all non-word chars
                .replace(/--+/g, '-') // Replace multiple - with single -
                .substring(0, 60); // Trim slug to first 60 chars
        }

        function previewImage() {
            const image = document.querySelector('#image');
            const imagePreview = document.querySelector('.card img');

            imagePreview.style.display = 'block';
            imagePreview.style.width = '50%';
            imagePreview.style.height = 'auto';
            imagePreview.src = URL.createObjectURL(image.files[0]);
        }
    </script>
</x-admin-layout>
