<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HMTI UHO - Fakultas Teknik</title>
    
    <!-- Alpine.js -->
    <script defer src="https://unpkg.com/@alpinejs/intersect@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>    
    <!-- Tailwind CSS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">
    
    <!-- Navbar -->
    @include('navbar')
    
    <main>
        <!-- Hero Section -->
        <section class="hero-section relative h-screen bg-fixed bg-cover bg-center bg-hero">
            <div class="absolute inset-0 bg-gradient-to-r from-black/70 to-black/20"></div>
            <div class="relative flex items-center h-full max-w-7xl mx-auto px-6 lg:px-8">
                <div class="max-w-3xl text-white animate-fade-in-up">
                    <h1 class="text-4xl font-extrabold tracking-tight sm:text-5xl lg:text-6xl">
                        Himpunan Mahasiswa<br>Teknik Informatika
                    </h1>
                    <p class="mt-6 text-xl text-gray-300">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
                    </p>
                    <div class="mt-8 space-x-4">
                        <a href="#section-about">
                            <button class="bg-white text-gray-800 px-6 py-3 rounded-full font-medium flex items-center space-x-2 hover:bg-yellow-500 hover:text-white transition-transform duration-300 hover:scale-105">
                                <span>Explore More</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section class="section-about py-16 bg-white" x-data="{ shown: false }" x-intersect="shown = true">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                    <!-- Left Content -->
                    <div class="space-y-6 opacity-0" :class="shown ? 'animate-slide-in-left' : ''">
                        <h2 class="text-3xl font-bold">Tentang HMTI COMPILER</h2>
                        <div class="flex items-center gap-2">
                            <div class="bg-yellow-400 rounded-full px-3 py-1 text-white font-semibold">
                                10
                            </div>
                            <div class="flex items-center bg-yellow-400 rounded-full px-3 py-1 text-white">
                                <span>Departemen</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                        <p class="text-gray-600">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                        <p class="text-gray-600">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore...
                        </p>
                        <div class="flex">
                            <a href="#" class="bg-yellow-400 text-white rounded-full px-5 py-2 flex items-center group transition duration-300 hover:bg-yellow-500 transform hover:scale-105">
                                <span>Baca Lebih</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1 transform transition duration-300 group-hover:translate-x-1" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Right Content (Carousel) -->
                    <div class="relative opacity-0" :class="shown ? 'animate-slide-in-right' : ''">
                        <div x-data="{ currentSlide: 0, slides: ['bg-blue-200', 'bg-green-200', 'bg-red-200'] }" class="bg-gray-200 rounded-lg h-96 w-full overflow-hidden">
                            <!-- Slides -->
                            <template x-for="(slide, index) in slides" :key="index">
                                <div x-show="currentSlide === index" class="h-full w-full flex items-center justify-center transition duration-500 ease-in-out" :class="slide">
                                    <div class="text-2xl font-bold">Slide <span x-text="index + 1"></span></div>
                                </div>
                            </template>

                            <!-- Controls -->
                            <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2">
                                <template x-for="(slide, index) in slides" :key="index">
                                    <button @click="currentSlide = index" :class="{'bg-yellow-400': currentSlide === index, 'bg-gray-300': currentSlide !== index}" class="w-3 h-3 rounded-full focus:outline-none transition duration-300"></button>
                                </template>
                            </div>

                            <!-- Arrow controls -->
                            <button @click="currentSlide = (currentSlide - 1 + slides.length) % slides.length" class="absolute left-2 top-1/2 transform -translate-y-1/2 bg-white/50 rounded-full p-2 hover:bg-white/80 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                                </svg>
                            </button>
                            <button @click="currentSlide = (currentSlide + 1) % slides.length" class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-white/50 rounded-full p-2 hover:bg-white/80 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="event-section" class="py-20 bg-gradient-to-b from-stone-50 to-stone-100 ">
            <div class="container mx-auto px-4">
                <div class="max-w-6xl mx-auto relative">
                    <!-- Decorative elements -->
                    <div class="w-20 h-0.5 bg-stone-800 mb-8"></div>
                    
                    <!-- Main Content Grid -->
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
                        <!-- Left Content -->
                        <div class="space-y-12">
                            <h1 class="text-4xl md:text-6xl font-bold text-stone-800 tracking-tight">
                              Event Comming Soon
                            </h1>
                            
                            <!-- Event Features -->
                            <div class="grid grid-cols-2 gap-6">
                                <div class="p-6 bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow">
                                    <svg class="w-12 h-12 mb-4 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                    </svg>
                                    <h3 class="text-xl font-bold mb-2">Workshop Intensif</h3>
                                    <p class="text-gray-600">Belajar langsung dari praktisi industri teknologi terkemuka</p>
                                </div>
                                
                                <div class="p-6 bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow">
                                    <svg class="w-12 h-12 mb-4 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                                    </svg>
                                    <h3 class="text-xl font-bold mb-2">Networking Session</h3>
                                    <p class="text-gray-600">Bertemu dengan profesional dan komunitas teknologi</p>
                                </div>
                                
                                <div class="p-6 bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow">
                                    <svg class="w-12 h-12 mb-4 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"/>
                                    </svg>
                                    <h3 class="text-xl font-bold mb-2">Kompetisi IT</h3>
                                    <p class="text-gray-600">Total hadiah puluhan juta rupiah untuk pemenang</p>
                                </div>
                                
                                <div class="p-6 bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow">
                                    <svg class="w-12 h-12 mb-4 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                                    </svg>
                                    <h3 class="text-xl font-bold mb-2">Live Demo</h3>
                                    <p class="text-gray-600">Presentasi teknologi terkini dari peserta kompetisi</p>
                                </div>
                            </div>
                        </div>

                        <!-- Right Content (Tetap sama) -->
                        <div class="relative h-80 md:h-96" x-data="{
    frames: [
        { 
            image: '/image/hero.jpg', 
            alt: 'Workshop Intensif',
            offset: ''
        },
        { 
            image: '/image/testing1.jpg',
            alt: 'Kompetisi IT',
            offset: 'top-20 right-20'
        }
    ]
}">
    <template x-for="(frame, index) in frames" :key="index">
        <div class="absolute top-0 right-0 w-56 md:w-64 h-56 md:h-64 border border-stone-300 rounded-md overflow-hidden shadow-lg bg-white transition transform hover:scale-105 duration-500 z-10" 
             :class="frame.offset">
            <img :src="frame.image" 
                 :alt="frame.alt" 
                 class="w-full h-full object-cover opacity-95 hover:opacity-100 transition">
            <div class="absolute inset-0 bg-gradient-to-b from-transparent to-stone-900/30"></div>
        </div>
    </template>
    
    <div class="absolute -bottom-4 left-4 md:left-12 w-16 h-16 md:w-20 md:h-20 border border-stone-800 rounded-md bg-transparent"></div>
</div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
</html>