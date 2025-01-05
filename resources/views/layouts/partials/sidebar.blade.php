<aside id="sidebar" class="w-64 bg-gradient-to-b from-blue-500 via-indigo-600 to-purple-700 text-white min-h-screen p-4 shadow-lg transition-all duration-300 ease-in-out">
    <!-- Sidebar Header (optional) -->
    <div class="text-center mb-6">
        <h1 class="text-xl font-bold cursor-pointer" id="toggleSidebar">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-8 h-8 mx-auto">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/>
            </svg>
        </h1>
    </div>

    <!-- Sidebar Navigation -->
    <ul class="space-y-6">
        <!-- Home Link -->
        <li class="text-center group">
            <a href="{{ route('home') }}" class="block py-3 px-2 rounded transition-all duration-300 hover:bg-blue-600 hover:scale-105 ease-in-out">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 mx-auto group-hover:text-white">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7l9-4 9 4v12l-9 4-9-4V7z"/>
                </svg>
                <span class="text-xs mt-2 block">Home</span>
            </a>
        </li>

        <!-- Categories Link -->
        <li class="text-center group">
            <a href="{{ route('categories.index') }}" class="block py-3 px-2 rounded transition-all duration-300 hover:bg-indigo-600 hover:scale-105 ease-in-out">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 mx-auto group-hover:text-white">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l9 4 9-4m0 0v12m0 0l-9 4-9-4"/>
                </svg>
                <span class="text-xs mt-2 block">Categories</span>
            </a>
        </li>

        <!-- Products Link -->
        <li class="text-center group">
            <a href="{{ route('products.index') }}" class="block py-3 px-2 rounded transition-all duration-300 hover:bg-purple-600 hover:scale-105 ease-in-out">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 mx-auto group-hover:text-white">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 9l10-5v12l-10-5M9 9l-10 5v-12l10 5"/>
                </svg>
                <span class="text-xs mt-2 block">Products</span>
            </a>
        </li>
    </ul>
</aside>

<script>
    const sidebar = document.getElementById('sidebar');
    const toggleSidebarButton = document.getElementById('toggleSidebar');

    // Set an initial state for the sidebar to be expanded
    let isSidebarCollapsed = false;

    toggleSidebarButton.addEventListener('click', () => {
        if (isSidebarCollapsed) {
            // Expand the sidebar
            sidebar.classList.remove('w-16');
            sidebar.classList.add('w-64');
            isSidebarCollapsed = false;
        } else {
            // Collapse the sidebar
            sidebar.classList.remove('w-64');
            sidebar.classList.add('w-16');
            isSidebarCollapsed = true;
        }
    });
</script>



{{--<aside id="sidebar" class="w-16 bg-gradient-to-b from-blue-500 via-indigo-600 to-purple-700 text-white min-h-screen p-4 shadow-lg transition-all duration-300 ease-in-out">--}}
{{--    <!-- Sidebar Header (optional) -->--}}
{{--    <div class="text-center mb-6">--}}
{{--        <h1 class="text-xl font-bold cursor-pointer" id="toggleSidebar">--}}
{{--            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-8 h-8 mx-auto">--}}
{{--                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/>--}}
{{--            </svg>--}}
{{--        </h1>--}}
{{--    </div>--}}

{{--    <!-- Sidebar Navigation -->--}}
{{--    <ul class="space-y-6">--}}
{{--        <!-- Home Link -->--}}
{{--        <li class="text-center">--}}
{{--            <a href="{{ route('home') }}" class="block py-3 px-2 rounded transition-all duration-300 hover:bg-blue-600 hover:scale-105 ease-in-out">--}}
{{--                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 mx-auto">--}}
{{--                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7l9-4 9 4v12l-9 4-9-4V7z"/>--}}
{{--                </svg>--}}
{{--                <span class="text-xs mt-2 block">Home</span>--}}
{{--            </a>--}}
{{--        </li>--}}

{{--        <!-- Categories Link -->--}}
{{--        <li class="text-center">--}}
{{--            <a href="{{ route('categories.index') }}" class="block py-3 px-2 rounded transition-all duration-300 hover:bg-indigo-600 hover:scale-105 ease-in-out">--}}
{{--                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 mx-auto">--}}
{{--                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l9 4 9-4m0 0v12m0 0l-9 4-9-4"/>--}}
{{--                </svg>--}}
{{--                <span class="text-xs mt-2 block">Categories</span>--}}
{{--            </a>--}}
{{--        </li>--}}

{{--        <!-- Products Link -->--}}
{{--        <li class="text-center">--}}
{{--            <a href="{{ route('products.index') }}" class="block py-3 px-2 rounded transition-all duration-300 hover:bg-purple-600 hover:scale-105 ease-in-out">--}}
{{--                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 mx-auto">--}}
{{--                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 9l10-5v12l-10-5M9 9l-10 5v-12l10 5"/>--}}
{{--                </svg>--}}
{{--                <span class="text-xs mt-2 block">Products</span>--}}
{{--            </a>--}}
{{--        </li>--}}
{{--    </ul>--}}
{{--</aside>--}}

{{--<script>--}}
{{--    const sidebar = document.getElementById('sidebar');--}}
{{--    const toggleSidebarButton = document.getElementById('toggleSidebar');--}}

{{--    // Set an initial state for the sidebar to be collapsed--}}
{{--    let isSidebarCollapsed = true;--}}

{{--    toggleSidebarButton.addEventListener('click', () => {--}}
{{--        if (isSidebarCollapsed) {--}}
{{--            // Expand the sidebar--}}
{{--            sidebar.classList.remove('w-16');--}}
{{--            sidebar.classList.add('w-64');--}}
{{--            isSidebarCollapsed = false;--}}
{{--        } else {--}}
{{--            // Collapse the sidebar--}}
{{--            sidebar.classList.remove('w-64');--}}
{{--            sidebar.classList.add('w-16');--}}
{{--            isSidebarCollapsed = true;--}}
{{--        }--}}
{{--    });--}}
{{--</script>--}}



{{--<aside id="sidebar" class="w-16 bg-gradient-to-b from-blue-500 via-indigo-600 to-purple-700 text-white min-h-screen p-4 shadow-lg transition-all duration-300 ease-in-out transform hover:w-64">--}}
{{--    <!-- Sidebar Header (optional) -->--}}
{{--    <div class="text-center mb-6">--}}
{{--        <h1 class="text-xl font-bold cursor-pointer" id="toggleSidebar">--}}
{{--            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-8 h-8 mx-auto">--}}
{{--                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/>--}}
{{--            </svg>--}}
{{--        </h1>--}}
{{--    </div>--}}

{{--    <!-- Sidebar Navigation -->--}}
{{--    <ul class="space-y-6">--}}
{{--        <!-- Home Link -->--}}
{{--        <li class="text-center">--}}
{{--            <a href="{{ route('home') }}" class="block py-3 px-2 rounded transition-all duration-300 hover:bg-blue-600 hover:scale-105 ease-in-out">--}}
{{--                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 mx-auto">--}}
{{--                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7l9-4 9 4v12l-9 4-9-4V7z"/>--}}
{{--                </svg>--}}
{{--                <span class="text-xs mt-2 block">Home</span>--}}
{{--            </a>--}}
{{--        </li>--}}

{{--        <!-- Categories Link -->--}}
{{--        <li class="text-center">--}}
{{--            <a href="{{ route('categories.index') }}" class="block py-3 px-2 rounded transition-all duration-300 hover:bg-indigo-600 hover:scale-105 ease-in-out">--}}
{{--                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 mx-auto">--}}
{{--                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l9 4 9-4m0 0v12m0 0l-9 4-9-4"/>--}}
{{--                </svg>--}}
{{--                <span class="text-xs mt-2 block">Categories</span>--}}
{{--            </a>--}}
{{--        </li>--}}

{{--        <!-- Products Link -->--}}
{{--        <li class="text-center">--}}
{{--            <a href="{{ route('products.index') }}" class="block py-3 px-2 rounded transition-all duration-300 hover:bg-purple-600 hover:scale-105 ease-in-out">--}}
{{--                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 mx-auto">--}}
{{--                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 9l10-5v12l-10-5M9 9l-10 5v-12l10 5"/>--}}
{{--                </svg>--}}
{{--                <span class="text-xs mt-2 block">Products</span>--}}
{{--            </a>--}}
{{--        </li>--}}
{{--    </ul>--}}
{{--</aside>--}}

{{--<script>--}}
{{--    const sidebar = document.getElementById('sidebar');--}}
{{--    const toggleSidebarButton = document.getElementById('toggleSidebar');--}}

{{--    toggleSidebarButton.addEventListener('click', () => {--}}
{{--        if (sidebar.classList.contains('w-16')) {--}}
{{--            sidebar.classList.remove('w-16');--}}
{{--            sidebar.classList.add('w-64');--}}
{{--        } else {--}}
{{--            sidebar.classList.remove('w-64');--}}
{{--            sidebar.classList.add('w-16');--}}
{{--        }--}}
{{--    });--}}
{{--</script>--}}




{{--<aside class="w-16 bg-gradient-to-b from-blue-500 via-indigo-600 to-purple-700 text-white min-h-screen p-4 shadow-lg transition-all duration-300 ease-in-out transform hover:w-64">--}}
{{--    <!-- Sidebar Header (optional) -->--}}
{{--    <div class="text-center mb-6">--}}
{{--        <h1 class="text-xl font-bold">Dashboard</h1>--}}
{{--    </div>--}}

{{--    <!-- Sidebar Navigation -->--}}
{{--    <ul class="space-y-6">--}}
{{--        <!-- Home Link -->--}}
{{--        <li class="text-center">--}}
{{--            <a href="{{ route('home') }}" class="block py-3 px-2 rounded transition-all duration-300 hover:bg-blue-600 hover:scale-105 ease-in-out">--}}
{{--                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 mx-auto">--}}
{{--                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7l9-4 9 4v12l-9 4-9-4V7z"/>--}}
{{--                </svg>--}}
{{--                <span class="text-xs mt-2 block">Home</span>--}}
{{--            </a>--}}
{{--        </li>--}}

{{--        <!-- Categories Link -->--}}
{{--        <li class="text-center">--}}
{{--            <a href="{{ route('categories.index') }}" class="block py-3 px-2 rounded transition-all duration-300 hover:bg-indigo-600 hover:scale-105 ease-in-out">--}}
{{--                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 mx-auto">--}}
{{--                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l9 4 9-4m0 0v12m0 0l-9 4-9-4"/>--}}
{{--                </svg>--}}
{{--                <span class="text-xs mt-2 block">Categories</span>--}}
{{--            </a>--}}
{{--        </li>--}}

{{--        <!-- Products Link -->--}}
{{--        <li class="text-center">--}}
{{--            <a href="{{ route('products.index') }}" class="block py-3 px-2 rounded transition-all duration-300 hover:bg-purple-600 hover:scale-105 ease-in-out">--}}
{{--                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 mx-auto">--}}
{{--                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 9l10-5v12l-10-5M9 9l-10 5v-12l10 5"/>--}}
{{--                </svg>--}}
{{--                <span class="text-xs mt-2 block">Products</span>--}}
{{--            </a>--}}
{{--        </li>--}}
{{--    </ul>--}}
{{--</aside>--}}




{{--<aside class="w-16 bg-gradient-to-b from-blue-500 via-indigo-600 to-purple-700 text-white min-h-screen p-4 shadow-lg transition-all duration-300 hover:w-64 hover:bg-gradient-to-b hover:from-blue-600 hover:via-indigo-700 hover:to-purple-800 ease-in-out">--}}
{{--    <!-- Sidebar Header (optional) -->--}}
{{--    <div class="text-center mb-8">--}}
{{--        <h1 class="text-lg font-bold mb-2">Dashboard</h1>--}}
{{--    </div>--}}

{{--    <!-- Sidebar Navigation -->--}}
{{--    <ul class="space-y-4">--}}
{{--        <li>--}}
{{--            <a href="{{ route('home') }}" class="block py-2 px-4 rounded transition-all duration-300 hover:bg-blue-600 hover:scale-105 ease-in-out">--}}
{{--                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 mx-auto">--}}
{{--                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7l9-4 9 4v12l-9 4-9-4V7z"/>--}}
{{--                </svg>--}}
{{--                <span class="text-xs mt-2 block text-center">Home</span>--}}
{{--            </a>--}}
{{--        </li>--}}
{{--        <li>--}}
{{--            <a href="{{ route('categories.index') }}" class="block py-2 px-4 rounded transition-all duration-300 hover:bg-indigo-600 hover:scale-105 ease-in-out">--}}
{{--                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 mx-auto">--}}
{{--                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l9 4 9-4m0 0v12m0 0l-9 4-9-4"/>--}}
{{--                </svg>--}}
{{--                <span class="text-xs mt-2 block text-center">Categories</span>--}}
{{--            </a>--}}
{{--        </li>--}}
{{--        <li>--}}
{{--            <a href="{{ route('products.index') }}" class="block py-2 px-4 rounded transition-all duration-300 hover:bg-purple-600 hover:scale-105 ease-in-out">--}}
{{--                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 mx-auto">--}}
{{--                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 9l10-5v12l-10-5M9 9l-10 5v-12l10 5"/>--}}
{{--                </svg>--}}
{{--                <span class="text-xs mt-2 block text-center">Products</span>--}}
{{--            </a>--}}
{{--        </li>--}}
{{--    </ul>--}}
{{--</aside>--}}




{{--<aside class="w-1/5 bg-gray-800 text-white min-h-screen p-5">--}}
{{--    <h1 class="text-lg font-bold mb-5">Dashboard</h1>--}}
{{--    <ul>--}}
{{--        <li>--}}
{{--            <a href="{{ route('home') }}" class="block py-2 px-4 hover:bg-gray-700 rounded">--}}
{{--                Home--}}
{{--            </a>--}}
{{--        </li>--}}
{{--        <li>--}}
{{--            <a href="{{ route('categories.index') }}" class="block py-2 px-4 hover:bg-gray-700 rounded">--}}
{{--                Categories--}}
{{--            </a>--}}
{{--        </li>--}}
{{--        <li>--}}
{{--            <a href="{{ route('products.index') }}" class="block py-2 px-4 hover:bg-gray-700 rounded">--}}
{{--                Products--}}
{{--            </a>--}}
{{--        </li>--}}
{{--    </ul>--}}
{{--</aside>--}}
