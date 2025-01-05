@extends('layouts.app')
@section('title', 'Product Details')
@section('content')
    <div class="max-w-4xl mx-auto bg-white p-8 rounded-lg shadow-md">
        <div class="mb-6">
            <h1 class="text-3xl font-bold text-gray-700">{{ $product->product_name }}</h1>
            <p class="text-gray-600 text-lg">Price: <span class="text-green-500 font-bold">${{ $product->price }}</span></p>
        </div>

        <div class="mb-6">
            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->product_name }}" class="w-full h-64 object-cover rounded">
        </div>

        <div class="mb-6">
            <h2 class="text-xl font-bold text-gray-700">Categories</h2>
            <ul class="list-disc pl-5 text-gray-600">
                @foreach ($product->categories as $category)
                    <li>{{ $category->category_name }}</li>
                @endforeach
            </ul>
        </div>

        <a href="{{ route('products.index') }}" class="bg-blue-500 text-white px-6 py-2 rounded shadow hover:bg-blue-600 transition duration-300">
            Back to Products
        </a>
    </div>
@endsection



{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--    <div class="bg-white p-6 rounded shadow">--}}
{{--        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->product_name }}" class="w-full h-64 object-cover rounded mb-4">--}}
{{--        <h1 class="text-3xl font-bold">{{ $product->product_name }}</h1>--}}
{{--        <p class="text-gray-500 text-lg mt-2">Price: ${{ $product->price }}</p>--}}
{{--        <h2 class="text-xl font-semibold mt-4">Categories:</h2>--}}
{{--        <ul class="list-disc list-inside">--}}
{{--            @foreach ($product->categories as $category)--}}
{{--                <li>{{ $category->category_name }}</li>--}}
{{--            @endforeach--}}
{{--        </ul>--}}
{{--    </div>--}}
{{--@endsection--}}
