@extends('layouts.app')
@section('title', 'Product List')
@section('content')
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-700">Products</h1>
        <a href="{{ route('products.create') }}" class="bg-blue-500 text-white px-6 py-2 rounded shadow hover:bg-blue-600 transition duration-300">
            Add New Product
        </a>
    </div>

    <!-- Flash Message -->
    @if (Session::has('message'))
        <div class="text-center text-green-600 font-semibold mb-4">
            {{ Session::get('message') }}
        </div>
    @endif

    <div class="grid grid-cols-3 gap-6">
        @foreach ($products as $product)
            <div class="bg-white border border-gray-200 rounded-lg shadow hover:shadow-lg transform hover:-translate-y-1 transition duration-300">
                <!-- Card Header -->
                <div class="bg-gray-100 p-4 rounded-t-lg">
                    <h2 class="text-lg font-bold text-gray-700 truncate">{{ $product->product_name }}</h2>
                </div>

                <!-- Card Body -->
                <div class="p-4">
                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->product_name }}" class="w-full h-48 object-cover rounded">
                    <p class="text-gray-600 mt-4">Price: <span class="text-green-500 font-bold">${{ $product->price }}</span></p>
                </div>

                <!-- Card Footer -->
                <div class="flex justify-between items-center p-4 border-t border-gray-200 bg-gray-50 rounded-b-lg">
                    <a href="{{ route('products.show', $product->id) }}" class="bg-blue-500 text-white px-4 py-2 rounded shadow hover:bg-blue-600 transition duration-300">
                        Details
                    </a>
                    <a href="{{ route('products.edit', $product->id) }}" class="bg-yellow-500 text-white px-4 py-2 rounded shadow hover:bg-yellow-600 transition duration-300">
                        Edit
                    </a>
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this product?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded shadow hover:bg-red-600 transition duration-300">
                            Delete
                        </button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Pagination -->
{{--    <div class="mt-6">--}}
{{--        {{ $products->links() }}--}}
{{--    </div>--}}
    <div class="mt-6">
        {{ $products->links('vendor.pagination.tailwind') }}
    </div>

@endsection
