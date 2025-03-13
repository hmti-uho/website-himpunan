<nav id="navbar" class="fixed w-full z-10 transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <div class="flex-shrink-0 flex items-center">
                    <img src="/image/logo 1.png" alt="HMTI UHO Logo" class="h-12 w-12">
                    <div class="ml-2">
                        <div class="font-bold text-white transition-colors duration-300" id="nav-title">HMTI UHO</div>
                        <div class="text-xs text-gray-200 transition-colors duration-300" id="nav-subtitle">Fakultas Teknik</div>
                    </div>
                </div>
            </div>

            <!-- Menu Desktop -->
            <div class="hidden md:flex md:items-center">
                <div class="md:ml-6 md:flex md:space-x-8">
                    <a href="#" class="text-white border-b-2 border-transparent hover:border-orange-500 px-1 pt-1 inline-flex items-center text-sm font-medium transition-colors duration-300 nav-link">
                        Home
                    </a>
                    <div class="relative">
                        <a href="#" class="text-white border-b-2 border-transparent hover:border-orange-500 px-1 pt-1 inline-flex items-center text-sm font-medium transition-colors duration-300 nav-link">
                            Profil
                            <svg class="ml-1 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 011.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                    <a href="#" class="text-white border-b-2 border-transparent hover:border-orange-500 px-1 pt-1 inline-flex items-center text-sm font-medium transition-colors duration-300 nav-link">
                        Prestasi
                    </a>
                    <a href="#" class="text-white border-b-2 border-transparent hover:border-orange-500 px-1 pt-1 inline-flex items-center text-sm font-medium transition-colors duration-300 nav-link">
                        Course
                    </a>
                    <a href="#" class="text-white border-b-2 border-transparent hover:border-orange-500 px-1 pt-1 inline-flex items-center text-sm font-medium transition-colors duration-300 nav-link">
                        Lomba
                    </a>
                </div>
            </div>

            <!-- Tombol Hamburger untuk Mobile -->
            <div class="flex items-center md:hidden">
                <button id="mobile-menu-button" class="text-white hover:text-gray-300 focus:outline-none">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Menu Mobile-->
    <div id="mobile-menu" class="md:hidden hidden ">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <a href="#" class="block text-gray-800 hover:bg-gray-100 px-3 py-2 rounded-md text-base font-medium mobile-nav-link">Home</a>
            <a href="#" class="block text-gray-800 hover:bg-gray-100 px-3 py-2 rounded-md text-base font-medium mobile-nav-link">Profil</a>
            <a href="#" class="block text-gray-800 hover:bg-gray-100 px-3 py-2 rounded-md text-base font-medium mobile-nav-link">Prestasi</a>
            <a href="#" class="block text-gray-800 hover:bg-gray-100 px-3 py-2 rounded-md text-base font-medium mobile-nav-link">Course</a>
            <a href="#" class="block text-gray-800 hover:bg-gray-100 px-3 py-2 rounded-md text-base font-medium mobile-nav-link">Lomba</a>
        </div>
    </div>
</nav>