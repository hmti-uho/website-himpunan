<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Himpunan Mahasiswa Teknik Informatika UHO</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-gray-50" x-data="{ 
    mobileMenuOpen: false,
    activeTab: 'about',
    currentSlide: 0,
    achievements: [
        { title: 'Juara 1 Programming Competition', year: '2024', description: 'Kompetisi tingkat regional' },
        { title: 'Best Innovation Award', year: '2023', description: 'Penghargaan inovasi teknologi' },
        { title: 'Outstanding Organization', year: '2023', description: 'Organisasi terbaik fakultas' }
    ],
    courses: [
        { title: 'Web Development', instructor: 'Ahmad Fauzi', duration: '8 minggu', level: 'Beginner' },
        { title: 'Mobile App Development', instructor: 'Sarah Putri', duration: '10 minggu', level: 'Intermediate' },
        { title: 'Data Science', instructor: 'Budi Santoso', duration: '12 minggu', level: 'Advanced' }
    ],
    competitions: [
        { title: 'Hackathon 2024', date: '15-17 Desember 2024', prize: 'Rp 10.000.000', status: 'Upcoming' },
        { title: 'Programming Contest', date: '20 November 2024', prize: 'Rp 5.000.000', status: 'Registration Open' },
        { title: 'UI/UX Design Challenge', date: '10 Desember 2024', prize: 'Rp 3.000.000', status: 'Upcoming' }
    ]
}">
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
                <a href="#" class="text-gray-600 hover:text-primary-dark font-medium transition-colors">Home</a>
                <a href="#" class="text-gray-600 hover:text-primary-dark font-medium transition-colors">Tentang HMTI</a>
                <a href="#" class="text-gray-600 hover:text-primary-dark font-medium transition-colors">Prestasi</a>
                <a href="#" class="text-gray-600 hover:text-primary-dark font-medium transition-colors">Course</a>
                <a href="#" class="text-gray-600 hover:text-primary-dark font-medium transition-colors">Lomba</a>
                <a href="#" class="text-gray-600 hover:text-primary-dark font-medium transition-colors">Berita</a>
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
                <a href="#" class="text-gray-600 hover:text-primary-dark font-medium transition-colors">Home</a>
                <a href="#" class="text-gray-600 hover:text-primary-dark font-medium transition-colors">Tentang HMTI</a>
                <a href="#" class="text-gray-600 hover:text-primary-dark font-medium transition-colors">Prestasi</a>
                <a href="#" class="text-gray-600 hover:text-primary-dark font-medium transition-colors">Course</a>
                <a href="#" class="text-gray-600 hover:text-primary-dark font-medium transition-colors">Lomba</a>
                <a href="#" class="text-gray-600 hover:text-primary-dark font-medium transition-colors">Berita</a>
            </div>
        </div>
    </nav>
</div>
    <main>
        <section 
    x-data="{ 
        showWelcome: false,
        typedText: '',
        fullText: 'Himpunan Mahasiswa Teknik Informatika UHO'
    }"
    x-init="
        showWelcome = true;
        let delay = 75;
        for (let i = 0; i < fullText.length; i++) {
            setTimeout(() => {
                typedText = fullText.substring(0, i + 1);
            }, i * delay);
        }
    "
    class="relative min-h-screen flex items-center justify-center overflow-hidden">
    
    <div class="absolute inset-0">
        <img 
            src="{{ asset('image/hero.JPG') }}" 
            alt="HMTI Background" 
            class="w-full h-full object-cover"
        >
        <div class="absolute inset-0 bg-gradient-to-r from-primary-dark/90 to-black/80"></div>
    </div>

    <div class="relative z-10 container mx-auto px-4 text-center">
        <div 
            x-show="showWelcome"
            x-transition:enter="transition ease-out duration-1000"
            x-transition:enter-start="opacity-0 transform translate-y-12"
            x-transition:enter-end="opacity-100 transform translate-y-0"
            class="space-y-8">
            
            <h1 class="text-4xl md:text-6xl font-bold text-white mb-4">
                <span x-text="typedText" class="inline-block"></span>
                <span class="animate-blink text-primary">|</span>
            </h1>

            <p class="text-xl md:text-2xl text-gray-200 max-w-3xl mx-auto">
                Mewujudkan mahasiswa yang unggul, profesional, dan berintegritas dalam bidang teknologi informasi.
            </p>

            <div class="flex flex-col sm:flex-row gap-4 justify-center mt-8">
                <a href="#about" 
                   class="px-8 py-3 bg-primary text-white rounded-lg font-semibold 
                          hover:bg-primary-dark transition duration-300 ease-in-out
                          transform hover:scale-105">
                    Tentang Kami
                </a>
                <a href="#contact" 
                   class="px-8 py-3 bg-transparent border-2 border-primary text-white 
                          rounded-lg font-semibold hover:bg-primary/20 
                          transition duration-300 ease-in-out
                          transform hover:scale-105">
                    Hubungi Kami
                </a>
            </div>

            <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
                <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                </svg>
            </div>
        </div>
    </div>
</section>

        <section id="about" class="py-24 pt-48 bg-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-col lg:flex-row items-center gap-12">
                <div class="lg:w-1/2">
                    <div class="relative">
                        <img  src="{{ asset('image/hero.JPG') }}"  
                              alt="HMTI COMPILER" 
                              class="rounded-lg shadow-xl w-full h-auto object-cover"
                              loading="lazy">
                        <div class="absolute -bottom-6 -right-6 w-24 h-24 bg-primary rounded-full z-0"></div>
                    </div>
                </div>

                <div class="lg:w-1/2">
                    <div class="space-y-6">
                        <div class="inline-block">
                            <span class="px-4 py-2 bg-primary-light text-primary-dark rounded-full text-sm font-medium">
                                Tentang Kami
                            </span>
                        </div>
                        
                        <h2 class="text-4xl font-bold text-gray-900 leading-tight">
                            HMTI COMPILER
                        </h2>
                        
                        <p class="text-gray-600 text-lg">
                            HMTI COMPILER (Himpunan Mahasiswa Teknik Informatika Computer Science Engineering) 
                            merupakan organisasi kemahasiswaan yang bernaung di bawah Program Studi 
                            Teknik Informatika Universitas Halu Oleo.
                        </p>

                        <div class="grid grid-cols-2 gap-6 mt-8">
                            <div class="flex items-center space-x-4">
                                <div class="p-2 bg-primary-light rounded-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary-dark" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold">Organisasi</h4>
                                    <p class="text-sm text-gray-500">Sejak 2010</p>
                                </div>
                            </div>

                            <div class="flex items-center space-x-4">
                                <div class="p-2 bg-primary-light rounded-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary-dark" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold">Anggota Aktif</h4>
                                    <p class="text-sm text-gray-500">500+ Mahasiswa</p>
                                </div>
                            </div>
                        </div>

                        <button class="mt-8 px-6 py-3 bg-primary text-white font-medium rounded-lg 
                                       hover:bg-primary-light transition duration-300 ease-in-out 
                                       focus:outline-none focus:ring-2 focus:ring-primary-dark focus:ring-offset-2">
                            Pelajari Lebih Lanjut
                        </button>
                    </div>
                </div>
            </div>
        </div>
</section>

@php
    // Hardcode data untuk testing
    $divisions = [
        [
            'name' => 'Sosial Dan Hubungan Masyarakat',
            'leader_name' => 'Suci Wulandari',
            'leader_photo' => asset('image/suci-wulandari.png'),
        ],
        [
            'name' => 'Penelitian dan Pengembangan',
            'leader_name' => 'Ahmad Rahman',
            'leader_photo' => asset('image/ahmad-rahman.png'),
        ],
        [
            'name' => 'Media dan Informasi',
            'leader_name' => 'Sari Indah',
            'leader_photo' => asset('image/sari-indah.png'),
        ],
    ];
@endphp

<section class="py-20 ">
    <div class="container mx-auto px-4">
        <div class="flex items-center justify-center mb-16">
            <div class="text-center">
                <div class="flex items-center justify-center mb-6">
                    <div class="w-20 h-20 bg-gradient-to-br from-primary to-primary-dark rounded-full shadow-lg flex items-center justify-center">
                        <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"/>
                        </svg>
                    </div>
                </div>
                <h2 class="text-5xl font-bold text-gray-800 mb-3">Divisi HMTI</h2>
                <p class="text-2xl text-gray-600 font-medium">Periode 2025/2026</p>
                <div class="w-24 h-1 bg-gradient-to-r from-primary to-primary-dark mx-auto mt-4 rounded-full"></div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12 max-w-6xl mx-auto">
            @foreach($divisions as $division)
            {{-- Kartu Divisi --}}
            <div class="division-card bg-white rounded-3xl shadow-xl relative">
                
                {{-- Kontainer Gambar: Diberi rounded-3xl dan overflow-hidden --}}
                <div class="aspect-square relative rounded-3xl overflow-hidden">
                    <div class="w-full h-full relative">
                        <img 
                            src="{{ $division['leader_photo'] }}" 
                            alt="{{ $division['leader_name'] }}" 
                            class="w-full h-full object-cover"
                        />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent"></div>
                        
                        <div class="position-overlay absolute inset-0 flex items-center justify-center opacity-0 hover:opacity-100 transition-opacity duration-300">
                            <div class="text-center text-white px-6">
                                <h2 class="ext-2xl font-black leading-tight uppercase">
                                    KETUA DIVISI
                                </h2>
                                <h2 class="text-2xl font-black leading-tight uppercase">
                                    {!! strtoupper(str_replace(' ', '<br>', $division['name'])) !!}
                                </h2>
                            </div>
                        </div>

                        <div class="absolute top-4 right-4 w-3 h-3 bg-white/40 rounded-full floating-animation"></div>
                        <div class="absolute bottom-6 left-6 w-2 h-2 bg-white/30 rounded-full floating-animation" style="animation-delay: -2s;"></div>
                    </div>
                </div>
                
                {{-- Ditambahkan z-10 agar selalu di atas & bottom-0 untuk posisi --}}
                <div class="absolute bottom-5 left-4 right-4 bg-white rounded-full py-3 px-6 text-center shadow-lg transform translate-y-1/2 z-10">
                    <h4 class="text-sm font-bold text-primary tracking-wider">
                        {{ $division['name'] }}
                    </h4>
                    <p class="text-xl font-medium text-gray-800">
                        {{ $division['leader_name'] }}
                    </p>
                </div>

            </div>
            @endforeach
        </div>
    </div>
</section>

@php
    // Data dummy untuk testing
    $comingSoonEvent = [
        'title' => 'ROAD TO HMTI LEADERSHIP CAMP VII',
        'description' => 'Persiapkan dirimu untuk menjadi pemimpin masa depan HMTI dalam acara pelatihan kepemimpinan yang intensif dan penuh inspirasi.',
        'image' => asset('image/leadership-camp.jpg'),
        'button_text' => 'Selengkapnya',
        'badge_text' => 'COMING SOON',
        'is_active' => true,
    ];
@endphp

@if($comingSoonEvent && $comingSoonEvent['is_active'])

<section class="py-8 bg-gradient-to-r from-primary to-primary-dark rounded-3xl relative overflow-hidden shadow-2xl">
    {{-- Background Pattern --}}
<div class="absolute inset-0 opacity-10">
    <div class="absolute top-0 right-0 w-64 h-64 bg-white rounded-full -translate-y-32 translate-x-32"></div>
    <div class="absolute bottom-0 left-0 w-48 h-48 bg-white rounded-full translate-y-24 -translate-x-24"></div>
</div>

<div class="container mx-auto px-4 relative z-10">
    <div class="max-w-6xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center p-8 md:p-12 text-white">
            
            {{-- Left Content --}}
            <div>
                <div class="mb-6">
                    <div class="inline-flex items-center px-4 py-2 bg-white/20 backdrop-blur-sm rounded-full text-sm font-semibold tracking-wider uppercase mb-4 text-gray-200">
                        <svg class="w-4 h-4 mr-2 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/>
                        </svg>
                        COMING SOON
                    </div>
                    
                    <h2 class="text-4xl md:text-5xl font-black mb-6 leading-tight">
                        {{ $comingSoonEvent['title'] }}
                    </h2>
                    
                    <div class="w-24 h-1 bg-white/60 mb-6"></div>
                </div>
                
                <p class="text-lg text-white/90 mb-8 leading-relaxed">
                    {{ $comingSoonEvent['description'] }}
                </p>
                
                <button class="inline-flex items-center px-8 py-4 bg-white text-primary-dark font-bold rounded-full hover:bg-primary-light transform hover:scale-105 transition-all duration-300 shadow-lg">
                    Selengkapnya
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </button>
            </div>
            
            {{-- Right Image --}}
            <div class="relative">
                <div class="relative rounded-2xl overflow-hidden shadow-xl transform hover:scale-105 transition-transform duration-500">
                    
                    <div class="absolute top-4 left-4 z-20">
                        <div class="bg-red-600 text-gray-900 px-4 py-2 rounded-lg font-bold text-sm shadow-lg transform -rotate-3">
                            COMING SOON
                        </div>
                    </div>
                    
                    <div class="absolute top-4 right-4 z-20">
                        <div class="bg-black/80 backdrop-blur-sm text-white px-4 py-2 rounded-xl max-w-48 text-xs md:text-sm">
                            <div class="font-bold line-clamp-2">{{ $comingSoonEvent['title'] }}</div>
                        </div>
                    </div>
                    
                    <img 
                        src="{{ $comingSoonEvent['image'] }}" 
                        alt="{{ $comingSoonEvent['title'] }}"
                        class="w-full h-64 md:h-80 object-cover"
                    />
                    
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                </div>
                
                <div class="absolute -top-4 -right-4 w-8 h-8 bg-white/30 rounded-full animate-bounce" style="animation-delay: 0s;"></div>
                <div class="absolute -bottom-4 -left-4 w-6 h-6 bg-white/20 rounded-full animate-bounce" style="animation-delay: 1s;"></div>
            </div>
        </div>
    </div>
</div>
</section>
@endif
    </main>

<footer class="bg-gray-800 text-white py-6">
    <div class="container mx-auto text-center">
        <p class="mb-4">© {{ date('Y') }} Himpunan Mahasiswa Teknik Informatika UHO. All rights reserved.</p>
        <ul class="flex justify-center space-x-4">
            <li><a href="#" class="hover:underline">Privacy Policy</a></li>
            <li><a href="#" class="hover:underline">Terms of Service</a></li>
            <li><a href="#" class="hover:underline">Contact Us</a></li>
        </ul>
    </div>
</footer>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>