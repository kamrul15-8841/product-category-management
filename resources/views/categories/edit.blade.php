@extends('layouts.app')
@section('title', 'Category Edit')
@section('content')
    <div class="max-w-4xl mx-auto bg-white p-8 rounded-lg shadow-md">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-700">Edit Category</h1>
            <a href="{{ route('categories.index') }}" class="bg-blue-500 text-white px-6 py-2 rounded shadow hover:bg-blue-600 transition duration-300">
                Category List
            </a>
        </div>
{{--        <h1 class="text-2xl mb-4">Edit Category</h1>--}}
        <form action="{{ route('categories.update', $category->id) }}" method="POST" class="bg-white p-5 rounded shadow">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="category_name" class="block text-gray-700">Category Name</label>
                <input type="text" name="category_name" id="category_name" value="{{ $category->category_name }}" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                @error('category_name')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded shadow hover:bg-blue-600 transition duration-300">Update</button>
        </form>
    </div>
@endsection
