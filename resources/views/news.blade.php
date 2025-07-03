@extends('layouts.app')

@section('content')

    <div class="relative w-full h-56 md:h-72 flex items-center justify-center bg-cover bg-center" style="background-image: url('{{ asset('image/hero.JPG') }}');">
        <div class="absolute inset-0 bg-black/40"></div>
        <div class="relative z-10 text-center">
            <h1 class="text-3xl md:text-4xl font-bold text-white drop-shadow-lg">Informasi</h1>
            <p class="text-white mt-2">Informasi Terbaru</p>
        </div>
    </div>

    <section class="container mx-auto px-4 py-8">
        <!-- Category Tabs -->
        <div class="flex flex-wrap gap-2 mb-8">
            <button class="px-6 py-2 bg-primary text-white rounded-full font-medium transition-colors duration-200">
                Semua
            </button>
            <button class="px-6 py-2 bg-gray-200 text-gray-700 rounded-full font-medium hover:bg-primary-light hover:text-primary-dark transition-colors duration-200">
                Kemahasiswaan
            </button>
            <button class="px-6 py-2 bg-gray-200 text-gray-700 rounded-full font-medium hover:bg-primary-light hover:text-primary-dark transition-colors duration-200">
                Akademik
            </button>
            <button class="px-6 py-2 bg-gray-200 text-gray-700 rounded-full font-medium hover:bg-primary-light hover:text-primary-dark transition-colors duration-200">
                After Event
            </button>
            <button class="px-6 py-2 bg-gray-200 text-gray-700 rounded-full font-medium hover:bg-primary-light hover:text-primary-dark transition-colors duration-200">
                Prestasi
            </button>
            <button class="px-6 py-2 bg-gray-200 text-gray-700 rounded-full font-medium hover:bg-primary-light hover:text-primary-dark transition-colors duration-200">
                Kepanitiaan
            </button>
        </div>

        @php
            $news = [
                [
                    'title' => 'SUPREMASI XVII',
                    'image' => asset('image/penalaran.JPG'),
                    'date' => '14 Apr 2024',
                    'excerpt' => 'Pada tanggal 14 April 2024, Hari Puncak SUPREMASI XVII sukses dilaksanakan dengan penuh semangat dan antusiasme....',
                    'url' => '#',
                    'category' => 'Kemahasiswaan'
                ],
                [
                    'title' => 'DISKUSI AKADEMIS 2024',
                    'image' => asset('image/ristek.JPG'),
                    'date' => '05 Jul 2024',
                    'excerpt' => 'Telah terlaksana kegiatan Diskusi Akademis 2024 pada tanggal 5 Juli 2024. Acara ini merupakan program kerja dari....',
                    'url' => '#',
                    'category' => 'Akademik'
                ],
                [
                    'title' => 'OPTIMUS 2024',
                    'image' => asset('image/keagamaan.JPG'),
                    'date' => '27 Oct 2024',
                    'excerpt' => 'Telah terlaksana hari puncak kegiatan OPTIMUS 2024 pada Minggu, 27 Oktober 2024, yang merupakan bagian dari prog....',
                    'url' => '#',
                    'category' => 'Prestasi'
                ],
            ];
        @endphp

        <!-- News Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($news as $item)
            <div class="bg-white rounded-2xl border border-gray-200 overflow-hidden hover:shadow-lg transition-all duration-300 hover:-translate-y-1">
                <!-- Image -->
                <div class="h-48 w-full overflow-hidden relative">
                    <img src="{{ $item['image'] }}" alt="{{ $item['title'] }}" class="w-full h-full object-cover transition-transform duration-300 hover:scale-105">
                    <!-- Category Badge on Image -->
                    <div class="absolute top-3 left-3">
                        <span class="px-3 py-1 bg-primary text-white text-xs font-medium rounded-full shadow-md">
                            {{ $item['category'] }}
                        </span>
                    </div>
                </div>
                
                <!-- Content -->
                <div class="p-6">
                    <!-- Date -->
                    <div class="flex items-center text-gray-500 text-sm mb-3">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        {{ $item['date'] }}
                    </div>
                    
                    <!-- Title -->
                    <h3 class="text-xl font-bold text-gray-900 mb-3 line-clamp-2">{{ $item['title'] }}</h3>
                    
                    <!-- Excerpt -->
                    <p class="text-gray-600 text-sm leading-relaxed mb-4 line-clamp-3">{{ $item['excerpt'] }}</p>
                    
                    <!-- Read More Button -->
                    <div class="flex justify-end">
                        <a href="{{ $item['url'] }}" class="inline-flex items-center justify-center w-10 h-10 bg-primary-light hover:bg-primary rounded-full text-primary-dark hover:text-white transition-all duration-200 shadow-sm hover:shadow-md">
                            
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <style>
        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        
        .line-clamp-3 {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const tabs = document.querySelectorAll('button');
            
            tabs.forEach(tab => {
                tab.addEventListener('click', function() {
                    // Remove active class from all tabs
                    tabs.forEach(t => {
                        t.classList.remove('bg-primary', 'text-white');
                        t.classList.add('bg-gray-200', 'text-gray-700');
                    });
                    
                    // Add active class to clicked tab
                    this.classList.remove('bg-gray-200', 'text-gray-700');
                    this.classList.add('bg-primary', 'text-white');
                });
            });
        });
    </script>

@endsection