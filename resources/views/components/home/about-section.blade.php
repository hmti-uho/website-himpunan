{{-- Hapus class py-24 pt-48 yang berlebihan dari <section> --}}
<section id="about">
        <div class="flex flex-col lg:flex-row items-center gap-12">
            {{-- Bagian gambar (kiri) --}}
            <div class="lg:w-1/2">
                <div class="relative">
                    <img src="{{ asset('image/compiler.JPG') }}"
                         alt="HMTI COMPILER"
                         class="rounded-lg shadow-xl w-full h-auto object-cover"
                         loading="lazy">
                    <div class="absolute -bottom-6 -right-6 w-24 h-24 bg-primary rounded-full z-0"></div>
                </div>
            </div>

            {{-- Bagian teks (kanan) --}}
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

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 pt-4">
                        {{-- ... (Konten lainnya tetap sama) ... --}}
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

                    <button class="mt-8 px-6 py-3 bg-primary text-white font-medium rounded-lg hover:bg-primary-light transition duration-300 ease-in-out focus:outline-none focus:ring-2 focus:ring-primary-dark focus:ring-offset-2">
                        Pelajari Lebih Lanjut
                    </button>
                </div>
            </div>
    </div>
</section>