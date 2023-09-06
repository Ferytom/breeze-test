<x-admin-layout>
    <div class="card w-3/4 lg:w-full">

        <div class="card-body">
            <div class="flex flex-row justify-between items-center">
                <h1 class="font-extrabold text-lg">Categories</h1>
                <a href="{{ route('admin.categories.create') }}" class="btn-gray text-sm">Create a New Category</a>
            </div>

            @if (session('success'))
                <div class="alert alert-success mt-5 flex justify-between">
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert"
                        onclick="this.parentElement.remove();">{{ 'x' }}</button>
                </div>
            @endif

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
                                    <a href="{{ route('admin.categories.edit', $category->slug) }}"
                                        class="btn-gray text-xs mr-2">Edit</a>
                                    <form action="/admin/categories/{{ $category->slug }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn-danger text-xs"
                                            onclick="return confirm('Are you sure?')">Delete</button>
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
