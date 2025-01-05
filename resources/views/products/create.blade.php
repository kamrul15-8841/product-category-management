@extends('layouts.app')
@section('title', 'Product Create')
@section('content')
    <div class="max-w-4xl mx-auto bg-white p-8 rounded-lg shadow-md">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-700">Add New Product</h1>
            <a href="{{ route('products.index') }}" class="bg-blue-500 text-white px-6 py-2 rounded shadow hover:bg-blue-600 transition duration-300">
                Product List
            </a>
        </div>

        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" class="bg-white p-5 rounded shadow">
            @csrf

            <div class="mb-4">
                <label for="product_name" class="block text-gray-600 font-medium">Product Name</label>
                <input type="text" name="product_name" id="product_name" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ old('product_name') }}" required>
                @error('product_name')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="price" class="block text-gray-600 font-medium">Price</label>
                <input type="number" name="price" id="price" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ old('price') }}" required>
                @error('price')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="image" class="block text-gray-600 font-medium">Product Image</label>
                <input type="file" name="image" id="image" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                @error('image')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="categories" class="block text-gray-600 font-medium">Categories</label>
                <select name="categories[]" id="categories" multiple class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                    @endforeach
                </select>
                @error('categories')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded shadow hover:bg-blue-600 transition duration-300">
                Create Product
            </button>
        </form>
    </div>
@endsection
