<aside class="w-1/5 bg-gray-800 text-white min-h-screen p-5">
    <h1 class="text-lg font-bold mb-5">Dashboard</h1>
    <ul>
        <li>
            <a href="{{ route('categories.index') }}" class="block py-2 px-4 hover:bg-gray-700 rounded">
                Categories
            </a>
        </li>
        <li>
            <a href="{{ route('products.index') }}" class="block py-2 px-4 hover:bg-gray-700 rounded">
                Products
            </a>
        </li>
    </ul>
</aside>
