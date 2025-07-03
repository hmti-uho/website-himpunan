@extends('layouts.app')

@section('content')

    <div class="relative w-full h-64 md:h-80 flex items-center justify-center bg-cover bg-center" style="background-image: url('{{ asset('image/hero.JPG') }}');">
        <div class="absolute inset-0 bg-black/40"></div>
        <div class="relative z-10 text-center">
            <h1 class="text-3xl md:text-4xl font-bold text-white drop-shadow-lg">Tentang HMTI</h1>
            <p class="text-white mt-2">Home / Tentang HMTI</p>
        </div>
    </div>

    {{-- Profil Section --}}
    <section class="container mx-auto px-4 py-12 min-h-screen bg-gradient-to-br from-primary-light to-white">
        <div class="flex flex-col md:flex-row items-start justify-center gap-8">
            <div class="flex-1">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-8">Himpunan Mahasiswa<br>Teknik Informatika</h2>
                
                {{-- Sejarah HMTI UHO Card --}}
                <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 p-6 mb-6 border border-gray-100 hover:border-primary/20">
                    <div class="flex items-center mb-4">
                        <div class="w-10 h-10 bg-primary rounded-full flex items-center justify-center mr-3 shadow-md">
                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <span class="font-bold text-xl text-gray-800">Sejarah HMTI UHO</span>
                    </div>
                    <div class="text-gray-600 text-sm leading-relaxed space-y-4">
                        <p>
                            Himpunan Mahasiswa Teknik Informatika (HMTI) UHO adalah organisasi mahasiswa yang bernaung di bawah Program Studi Teknik Informatika Fakultas Teknik Universitas Halu Oleo. HMTI berperan sebagai wadah pengembangan minat, bakat, dan keilmuan mahasiswa Teknik Informatika.
                        </p>
                        <p>
                            Sejak didirikan, HMTI UHO telah menjadi motor penggerak dalam memajukan bidang teknologi informasi di lingkungan kampus. Organisasi ini terus berkembang dan beradaptasi dengan perkembangan teknologi terkini untuk menghasilkan lulusan yang kompeten dan siap bersaing di dunia kerja.
                        </p>
                    </div>
                </div>

                {{-- Kabinet COMPILER Card --}}
                <div class="bg-gradient-to-br from-primary to-primary-dark rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 p-6 mb-6 relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full -translate-y-16 translate-x-16"></div>
                    <div class="absolute bottom-0 left-0 w-24 h-24 bg-white/5 rounded-full translate-y-12 -translate-x-12"></div>
                    <div class="relative z-10">
                        <div class="flex items-center mb-4">
                            <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center mr-3 shadow-md">
                                <svg class="w-5 h-5 text-primary" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <span class="font-bold text-xl text-white">Kabinet COMPILER</span>
                        </div>
                        <div class="text-white/90 text-sm leading-relaxed space-y-4">
                            <p>
                                Kabinet COMPILER adalah kepengurusan HMTI UHO periode 2025/2026 yang berkomitmen untuk meningkatkan kualitas, solidaritas, dan prestasi mahasiswa Teknik Informatika melalui berbagai program kerja inovatif dan kolaboratif.
                            </p>
                            <p>
                                Dengan semangat "Compile Your Dreams", kabinet ini fokus pada pengembangan soft skill, hard skill, dan networking mahasiswa untuk menghadapi tantangan industri teknologi yang terus berkembang pesat.
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Visi Misi Buttons --}}
                <div class="flex gap-4">
                    <button class="group flex-1 bg-gradient-to-r from-primary to-primary-dark hover:from-primary-dark hover:to-primary text-white font-semibold py-4 px-4 rounded-xl flex items-center justify-between transition-all duration-300 hover:shadow-lg hover:-translate-y-1 relative overflow-hidden">
                        <div class="absolute inset-0 bg-white/10 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        <div class="flex items-center relative z-10">
                            <div class="w-8 h-8 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center mr-3 group-hover:bg-white/30 transition-all duration-300">
                                <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                                    <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <span>Visi</span>
                        </div>
                        <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform duration-300 relative z-10" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <button class="group flex-1 bg-gradient-to-r from-primary to-primary-dark hover:from-primary-dark hover:to-primary text-white font-semibold py-4 px-4 rounded-xl flex items-center justify-between transition-all duration-300 hover:shadow-lg hover:-translate-y-1 relative overflow-hidden">
                        <div class="absolute inset-0 bg-white/10 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        <div class="flex items-center relative z-10">
                            <div class="w-8 h-8 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center mr-3 group-hover:bg-white/30 transition-all duration-300">
                                <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <span>Misi</span>
                        </div>
                        <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform duration-300 relative z-10" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                </div>
            </div>
            
            {{-- Logo Section --}}
            <div class="flex-1 flex justify-center md:justify-end">
                <div class="relative floating-animation">
                    <div class="absolute inset-0 bg-primary/20 rounded-full blur-2xl"></div>
                    <img src="{{ asset('image/logo 1.png') }}" alt="Logo HMTI" class="relative w-80 h-80 object-contain drop-shadow-2xl">
                </div>
            </div>
        </div>
    </section>

    {{-- Divisi Section --}}
    <section class="bg-gray-100 py-16">
        <div class="container mx-auto px-4">
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
                                        [
                        'name' => 'Media dan Informasi',
                        'leader_name' => 'Sari Indah',
                        'leader_photo' => asset('image/sari-indah.png'),
                    ],
                ];
            @endphp
            
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
                                    <h2 class="text-2xl font-black leading-tight uppercase">
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

@endsection