@extends('layouts.app')

@section('content')

    <!-- Hero Section with Breadcrumb -->
    <div class="relative w-full h-56 md:h-72 flex items-center justify-center bg-cover bg-center" style="background-image: url('{{ asset('image/hero.JPG') }}');">
        <div class="absolute inset-0 bg-black/40"></div>
        <div class="relative z-10 text-center">
            <h1 class="text-3xl md:text-4xl font-bold text-white drop-shadow-lg">Detail Berita</h1>
            <p class="text-white mt-2">Home / Informasi / Detail Berita</p>
        </div>
    </div>

    <!-- Main Content Section -->
    <div class="w-full bg-gray-50 py-12">
        <div class="container mx-auto px-4">
            
            <!-- Back Button -->
            <div class="mb-8">
                <a href="{{ url()->previous() }}" class="inline-flex items-center text-primary hover:text-primary-dark transition-colors duration-200">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                    Kembali ke Informasi
                </a>
            </div>

            <!-- Featured Image -->
            <div class="relative h-96 md:h-[500px] lg:h-[600px] w-full overflow-hidden rounded-2xl mb-8">
                <img src="{{ asset('image/penalaran.JPG') }}" alt="SUPREMASI XVII" class="w-full h-full object-cover">
                <!-- Category Badge -->
                <div class="absolute top-6 left-6">
                    <span class="px-6 py-3 bg-primary text-white text-sm font-medium rounded-full shadow-lg">
                        Kemahasiswaan
                    </span>
                </div>
            </div>

            <!-- Article Content -->
            <div class="w-full">
                
                <!-- Meta Information -->
                <div class="flex flex-wrap items-center gap-6 text-gray-500 text-sm mb-8">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        14 April 2024
                    </div>
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                        Admin HMTI
                    </div>
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                        </svg>
                        1,234 views
                    </div>
                </div>

                <!-- Title -->
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-8 leading-tight">
                    SUPREMASI XVII: Puncak Kegiatan Kemahasiswaan HMTI UHO
                </h1>

                <!-- Article Body -->
                <div class="prose prose-xl max-w-none">
                    <p class="text-gray-700 leading-relaxed mb-8 text-lg">
                        Pada tanggal 14 April 2024, Hari Puncak SUPREMASI XVII sukses dilaksanakan dengan penuh semangat dan antusiasme dari seluruh civitas akademika Teknik Informatika Universitas Halu Oleo. Acara yang telah menjadi tradisi tahunan ini merupakan puncak dari rangkaian kegiatan kemahasiswaan yang telah dipersiapkan selama berbulan-bulan.
                    </p>

                    <p class="text-gray-700 leading-relaxed mb-8 text-lg">
                        SUPREMASI XVII menghadirkan berbagai kompetisi menarik mulai dari lomba coding, desain grafis, hingga presentasi inovasi teknologi. Kegiatan ini tidak hanya melibatkan mahasiswa Teknik Informatika UHO, tetapi juga mengundang partisipasi dari universitas lain di Sulawesi Tenggara untuk memperkuat jaringan akademik dan profesional.
                    </p>

                    <h2 class="text-3xl font-bold text-gray-900 mb-6 mt-12">Rangkaian Kegiatan</h2>
                    
                    <p class="text-gray-700 leading-relaxed mb-8 text-lg">
                        Acara dibuka dengan sambutan dari Ketua HMTI UHO periode 2023-2024 yang menyampaikan apresiasi kepada seluruh peserta dan panitia yang telah bekerja keras mempersiapkan acara ini. Dilanjutkan dengan keynote speech dari praktisi industri teknologi yang berbagi insight tentang perkembangan teknologi informasi di era digital.
                    </p>

                    <div class="bg-primary-light p-8 rounded-2xl mb-8">
                        <h3 class="text-2xl font-semibold text-primary-dark mb-4">Highlight Acara:</h3>
                        <ul class="space-y-3 text-gray-700 text-lg">
                            <li class="flex items-start">
                                <span class="inline-block w-3 h-3 bg-primary rounded-full mt-2 mr-4 flex-shrink-0"></span>
                                Kompetisi Programming Contest dengan hadiah total 15 juta rupiah
                            </li>
                            <li class="flex items-start">
                                <span class="inline-block w-3 h-3 bg-primary rounded-full mt-2 mr-4 flex-shrink-0"></span>
                                Workshop teknologi terbaru oleh senior engineer dari perusahaan ternama
                            </li>
                            <li class="flex items-start">
                                <span class="inline-block w-3 h-3 bg-primary rounded-full mt-2 mr-4 flex-shrink-0"></span>
                                Pameran project mahasiswa dan startup teknologi
                            </li>
                            <li class="flex items-start">
                                <span class="inline-block w-3 h-3 bg-primary rounded-full mt-2 mr-4 flex-shrink-0"></span>
                                Networking session dengan alumni dan profesional IT
                            </li>
                        </ul>
                    </div>

                    <p class="text-gray-700 leading-relaxed mb-8 text-lg">
                        Antusiasme peserta terlihat dari tingginya partisipasi dalam setiap sesi acara. Para mahasiswa tidak hanya berkompetisi, tetapi juga saling bertukar pengetahuan dan pengalaman, menciptakan atmosfer belajar yang positif dan kolaboratif.
                    </p>

                    <h2 class="text-3xl font-bold text-gray-900 mb-6 mt-12">Dampak dan Manfaat</h2>
                    
                    <p class="text-gray-700 leading-relaxed mb-8 text-lg">
                        SUPREMASI XVII berhasil mencapai tujuannya sebagai wadah pengembangan soft skill dan hard skill mahasiswa Teknik Informatika. Melalui berbagai kompetisi dan workshop, para peserta mendapatkan exposure langsung terhadap tantangan nyata di dunia teknologi informasi.
                    </p>

                    <p class="text-gray-700 leading-relaxed mb-8 text-lg">
                        Kegiatan ini juga memperkuat ikatan antar mahasiswa dan menciptakan networking yang valuable untuk masa depan karir mereka. Banyak peserta yang mendapatkan insight baru tentang industri teknologi dan peluang karir yang tersedia.
                    </p>
                </div>

                <!-- Tags -->
                <div class="mt-12 pt-8 border-t border-gray-300">
                    <h3 class="text-2xl font-semibold text-gray-900 mb-4">Tags:</h3>
                    <div class="flex flex-wrap gap-3">
                        <span class="px-4 py-2 bg-gray-100 text-gray-700 text-base rounded-full">HMTI UHO</span>
                        <span class="px-4 py-2 bg-gray-100 text-gray-700 text-base rounded-full">Kemahasiswaan</span>
                        <span class="px-4 py-2 bg-gray-100 text-gray-700 text-base rounded-full">Teknologi</span>
                        <span class="px-4 py-2 bg-gray-100 text-gray-700 text-base rounded-full">Kompetisi</span>
                        <span class="px-4 py-2 bg-gray-100 text-gray-700 text-base rounded-full">Programming</span>
                    </div>
                </div>

                <!-- Share Buttons -->
                <div class="mt-8 pt-8 border-t border-gray-300">
                    <h3 class="text-2xl font-semibold text-gray-900 mb-4">Bagikan:</h3>
                    <div class="flex gap-4">
                        <a href="#" class="inline-flex items-center justify-center w-12 h-12 bg-blue-500 hover:bg-blue-600 text-white rounded-full transition-colors duration-200">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                            </svg>
                        </a>
                        <a href="#" class="inline-flex items-center justify-center w-12 h-12 bg-blue-600 hover:bg-blue-700 text-white rounded-full transition-colors duration-200">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                        </a>
                        <a href="#" class="inline-flex items-center justify-center w-12 h-12 bg-green-500 hover:bg-green-600 text-white rounded-full transition-colors duration-200">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.890-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Related Articles Section -->
    <div class="w-full bg-white py-16">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">Berita Terkait</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Related Article 1 -->
                <div class="bg-white rounded-xl border border-gray-200 overflow-hidden hover:shadow-lg transition-all duration-300">
                    <div class="h-48 overflow-hidden">
                        <img src="{{ asset('image/ristek.JPG') }}" alt="Related Article" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <span class="inline-block px-4 py-2 bg-primary text-white text-sm font-medium rounded-full mb-3">
                            Akademik
                        </span>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">DISKUSI AKADEMIS 2024</h3>
                        <p class="text-gray-600 text-base mb-4">Telah terlaksana kegiatan Diskusi Akademis 2024 pada tanggal 5 Juli 2024...</p>
                        <a href="#" class="text-primary hover:text-primary-dark font-semibold text-base">Baca Selengkapnya →</a>
                    </div>
                </div>

                <!-- Related Article 2 -->
                <div class="bg-white rounded-xl border border-gray-200 overflow-hidden hover:shadow-lg transition-all duration-300">
                    <div class="h-48 overflow-hidden">
                        <img src="{{ asset('image/keagamaan.JPG') }}" alt="Related Article" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <span class="inline-block px-4 py-2 bg-primary text-white text-sm font-medium rounded-full mb-3">
                            Prestasi
                        </span>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">OPTIMUS 2024</h3>
                        <p class="text-gray-600 text-base mb-4">Telah terlaksana hari puncak kegiatan OPTIMUS 2024 pada Minggu, 27 Oktober 2024...</p>
                        <a href="#" class="text-primary hover:text-primary-dark font-semibold text-base">Baca Selengkapnya →</a>
                    </div>
                </div>

                <!-- Related Article 3 -->
                <div class="bg-white rounded-xl border border-gray-200 overflow-hidden hover:shadow-lg transition-all duration-300">
                    <div class="h-48 overflow-hidden">
                        <img src="{{ asset('image/penalaran.JPG') }}" alt="Related Article" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <span class="inline-block px-4 py-2 bg-primary text-white text-sm font-medium rounded-full mb-3">
                            Kemahasiswaan
                        </span>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">WORKSHOP TEKNOLOGI</h3>
                        <p class="text-gray-600 text-base mb-4">Workshop teknologi terdepan untuk mahasiswa Teknik Informatika...</p>
                        <a href="#" class="text-primary hover:text-primary-dark font-semibold text-base">Baca Selengkapnya →</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection