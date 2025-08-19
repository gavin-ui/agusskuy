<nav class="bg-white shadow-md">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <a href="{{ url('/') }}" class="flex items-center text-2xl font-bold text-blue-600">
                    <svg class="h-8 w-8 mr-2 text-blue-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
                    </svg>
                    BrandName
                </a>
                <div class="hidden sm:-my-px sm:ml-10 sm:flex space-x-8">
                    <a href="{{ url('/') }}" class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium">Home</a>
                    <a href="{{ url('/about') }}" class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium">About</a>
                    <a href="{{ url('/services') }}" class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium">Services</a>
                    <a href="{{ url('/contact') }}" class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-sm font-medium">Contact</a>
                </div>
            </div>
            <div class="flex items-center">
                <a href="#" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition mr-2">Login</a>
                <a href="#" class="bg-gray-200 text-blue-600 px-4 py-2 rounded hover:bg-gray-300 transition">Register</a>
            </div>
            <div class="-mr-2 flex items-center sm:hidden">
                <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-blue-600 hover:bg-gray-100 focus:outline-none focus:bg-gray-100" aria-controls="mobile-menu" aria-expanded="false" onclick="document.getElementById('mobile-menu').classList.toggle('hidden')">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <div class="sm:hidden hidden" id="mobile-menu">
        <div class="pt-2 pb-3 space-y-1">
            <a href="{{ url('/') }}" class="block pl-3 pr-4 py-2 border-l-4 border-blue-600 text-base font-medium text-blue-700 bg-blue-50">Home</a>
            <a href="{{ url('/about') }}" class="block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-700 hover:bg-blue-50 hover:border-blue-600">About</a>
            <a href="{{ url('/services') }}" class="block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-700 hover:bg-blue-50 hover:border-blue-600">Services</a>
            <a href="{{ url('/contact') }}" class="block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-700 hover:bg-blue-50 hover:border-blue-600">Contact</a>
            <a href="#" class="block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-blue-600 hover:bg-blue-50 hover:border-blue-600">Login</a>
            <a href="#" class="block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-blue-600 hover:bg-blue-50 hover:border-blue-600">Register</a>
        </div>
    </div>