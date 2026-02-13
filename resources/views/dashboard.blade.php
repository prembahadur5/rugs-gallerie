<x-app-layout>
    <div class="flex min-h-screen bg-gray-100">

        {{-- Sidebar --}}
        <aside class="w-64 bg-white shadow-lg">
            <div class="p-6 border-b">
                <h2 class="text-xl font-bold text-gray-800">
                    Rugs Gallerie
                </h2>
                <p class="text-sm text-gray-500">Admin Panel</p>
            </div>

            <nav class="mt-6">
                <a href="{{ route('dashboard') }}"
                   class="block px-6 py-3 text-gray-700 hover:bg-gray-100 font-medium">
                    🏠 Dashboard
                </a>

                <a href="{{ url('/admin/banners') }}"
                   class="block px-6 py-3 text-gray-700 hover:bg-gray-100">
                    🖼 Banners
                </a>

                <a href="{{ url('/admin/carpets') }}"
                   class="block px-6 py-3 text-gray-700 hover:bg-gray-100">
                    🧵 Carpets
                </a>

                <a href="{{ url('/admin/categories') }}"
                   class="block px-6 py-3 text-gray-700 hover:bg-gray-100">
                    📂 Categories
                </a>
            </nav>
        </aside>

        {{-- Main Content --}}
        <div class="flex-1">

            {{-- Top Bar --}}
            <header class="bg-white shadow px-6 py-4 flex justify-between items-center">
                <h1 class="text-xl font-semibold text-gray-800">
                    Dashboard
                </h1>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="text-sm text-red-600 hover:underline">
                        Logout
                    </button>
                </form>
            </header>

            {{-- Page Content --}}
            <main class="p-6">
                <div class="bg-white rounded-lg shadow p-6">
                    <h3 class="text-lg font-semibold text-gray-800">
                        Welcome 👋
                    </h3>
                    <p class="text-gray-600 mt-2">
                        You are logged in to Rugs Gallerie Admin Panel.
                    </p>
                </div>
            </main>

        </div>
    </div>
</x-app-layout>
