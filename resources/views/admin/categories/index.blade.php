<x-admin-layout>
    <div class="card w-3/4 lg:w-full">

        <div class="card-body">
            <div class="flex flex-row justify-between items-center">
                <h1 class="font-extrabold text-lg">Categories</h1>
                <a href="{{ route('admin.categories.create') }}" class="btn-gray text-sm">Create a New Category</a>
            </div>

            <table class="table-auto w-full mt-5 text-right">

                <thead>
                    <tr>
                        <td class="py-4 font-extrabold text-sm text-left">Name</td>
                        <td class="py-4 font-extrabold text-sm">Slug</td>
                        <td class="py-4 font-extrabold text-sm">Action</td>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td class="py-4 text-sm text-gray-600 flex flex-row items-center text-left">
                                <div class="w-8 h-8 overflow-hidden mr-3">
                                    <img src="{{ asset('assets/img/sneakers.svg') }}" class="object-cover">
                                </div>
                                {{ $category->name }}
                            </td>
                            <td class="py-4 text-xs text-gray-600">{{ $category->slug }}</td>
                            <td class="py-4 text-xs text-gray-600">
                                <div class="flex flex-row justify-end">
                                    <a href="{{ route('admin.categories.edit', $category->id) }}"
                                        class="btn-gray text-xs mr-2">Edit</a>
                                    <form action="{{ route('admin.categories.destroy', $category->id) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn-red text-xs">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>

        </div>
    </div>
</x-admin-layout>
