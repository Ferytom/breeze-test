<x-admin-layout>
    <div class="card w-3/4 lg:w-full">
        <div class="card-body">
            <div class="flex flex-row justify-between items-center">
                <h1 class="font-extrabold text-lg">Create a New Category</h1>
                <a href="{{ route('admin.categories.index') }}" class="btn-gray text-sm">Back to Categories</a>
            </div>

            <form action="{{ route('admin.categories.store') }}" method="POST" class="mt-5">
                @csrf
                <div class="flex flex-col">
                    <label for="name" class="text-sm text-gray-600">Name</label>
                    <input type="text" name="name" id="name" class="input-text mt-2 w-full">
                    @error('name')
                        <span class="text-xs text-red-600">{{ $message }}</span>
                    @enderror
                </div>

                <div class="relative">
                    <input type="text" id="floating_outlined"
                        class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " />
                    <label for="floating_outlined"
                        class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">Floating
                        outlined</label>
                </div>

                <div class="flex flex-col mt-5">
                    <label for="slug" class="text-sm text-gray-600">Slug</label>
                    <input type="text" name="slug" id="slug" class="input-text mt-2 w-full">
                    @error('slug')
                        <span class="text-xs text-red-600">{{ $message }}</span>
                    @enderror
                </div>

                <button type="submit" class="btn mt-5">Create Category</button>
            </form>
        </div>
    </div>
</x-admin-layout>
