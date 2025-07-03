<div x-data="{ isOpen: false }"
     class="fixed top-4 left-1/2 transform -translate-x-1/2 z-50 w-11/12 md:w-4/5 lg:w-3/4">
    <nav class="bg-white/95 backdrop-blur-sm rounded-2xl shadow-lg px-6 py-4">
        <div class="flex items-center justify-between">
            <div class="flex items-center space-x-3">
                <img src="{{ asset('image/logo 1.png') }}" alt="HMTI UHO" class="h-10 w-10">
                <div class="text-gray-800">
                    <h1 class="font-bold text-lg">HMTI UHO</h1>
                    <p class="text-xs text-gray-600">Fakultas Teknik</p>
                </div>
            </div>

            <div class="md:hidden">
                <button @click="isOpen = !isOpen" 
                        class="text-gray-600 hover:text-gray-800 focus:outline-none">
                    <svg class="h-6 w-6" x-show="!isOpen" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                    <svg class="h-6 w-6" x-show="isOpen" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>

            <div class="hidden md:flex items-center space-x-8">
                <a href="Home/" class="text-gray-600 hover:text-primary-dark font-medium transition-colors">Home</a>
                <a href="/tentang-hmti" class="text-gray-600 hover:text-primary-dark font-medium transition-colors">Tentang HMTI</a>
                <a href="/event" class="text-gray-600 hover:text-primary-dark font-medium transition-colors">Event</a>
                <a href="/" class="text-gray-600 hover:text-primary-dark font-medium transition-colors">Course</a>
                <a href="/news" class="text-gray-600 hover:text-primary-dark font-medium transition-colors">Berita</a>
            </div>
        </div>

        <div x-show="isOpen" 
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0 scale-95"
             x-transition:enter-end="opacity-100 scale-100"
             x-transition:leave="transition ease-in duration-150"
             x-transition:leave-start="opacity-100 scale-100"
             x-transition:leave-end="opacity-0 scale-95"
             class="md:hidden mt-4">
            <div class="flex flex-col space-y-3">
                <a href="Home/" class="text-gray-600 hover:text-primary-dark font-medium transition-colors">Home</a>
                <a href="/tentang-hmti" class="text-gray-600 hover:text-primary-dark font-medium transition-colors">Tentang HMTI</a>
                <a href="/event" class="text-gray-600 hover:text-primary-dark font-medium transition-colors">Event</a>
                <a href="/" class="text-gray-600 hover:text-primary-dark font-medium transition-colors">Course</a>
                <a href="/news" class="text-gray-600 hover:text-primary-dark font-medium transition-colors">Berita</a>
            </div>
        </div>
    </nav>
</div>