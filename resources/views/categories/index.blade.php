@extends('layouts.app')
@section('title', 'Category List')
@section('content')
    <!-- Header Section -->
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-700">Categories</h1>
        <a href="{{ route('categories.create') }}" class="bg-blue-500 text-white px-6 py-2 rounded shadow hover:bg-blue-600 transition duration-300">
            Add Category
        </a>
        </div>

        <!-- Flash Message -->
        @if (Session::has('message'))
            <div class="text-center text-green-600 font-semibold mb-4">
                {{ Session::get('message') }}
            </div>
        @endif
        <div class="max-w-4xl mx-auto bg-white p-8 rounded-lg shadow-md">
        <!-- Categories Table -->
        <div class="overflow-x-auto bg-white rounded-lg shadow">
            <table class="w-full border-collapse bg-white">
                <thead>
                <tr class="bg-gray-100">
                    <th class="text-left px-6 py-3 text-gray-600 font-medium uppercase text-sm border-b">SI</th>
                    <th class="text-left px-6 py-3 text-gray-600 font-medium uppercase text-sm border-b">Name</th>
                    <th class="text-left px-6 py-3 text-gray-600 font-medium uppercase text-sm border-b">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($categories as $category)
                    <tr class="hover:bg-gray-50 transition duration-200">
{{--                        <td class="px-6 py-4 border-b">{{ $category->id }}</td>--}}
                        <td class="px-6 py-4 border-b">{{ $loop->iteration }}</td>
                        <td class="px-6 py-4 border-b">{{ $category->category_name }}</td>
                        <td class="px-6 py-4 border-b flex space-x-4">
                            <a href="{{ route('categories.edit', $category) }}" class="bg-yellow-500 text-white px-4 py-2 rounded shadow hover:bg-yellow-600 transition duration-300">
                                Edit
                            </a>
                            <form action="{{ route('categories.destroy', $category) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this category?');" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded shadow hover:bg-red-600 transition duration-300">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Pagination -->
    <div class="mt-6">
        {{ $categories->links('vendor.pagination.tailwind') }}
    </div>
@endsection
