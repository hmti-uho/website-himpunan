@php
// DATA DUMMY SESUAI STRUKTUR DATABASE ANDA
// Anggap saja ini data yang Anda dapatkan dari controller: $achievements = Achievement::all();
$achievements = [
    [
        'winner_name' => 'Reksa Leo Saputra',
        'title' => 'Juara 1 Web Design Competition 2024',
        'image' => asset('image/reksa-leo.png'),
        'description' => 'Meraih kemenangan dalam kompetisi desain web tingkat nasional yang diselenggarakan oleh Kemendikbudristek setelah melalui persaingan ketat.',
    ],
    [
        'winner_name' => 'Andi Muhammad',
        'title' => 'Finalis GEMASTIK V Kategori Programming',
        'image' => asset('image/andi-muhammad.png'),
        'description' => 'Berhasil menembus babak final pada ajang talenta mahasiswa paling bergengsi di Indonesia, GEMASTIK V, untuk kategori pemrograman.',
    ],
    [
        'winner_name' => 'Siti Aminah',
        'title' => 'Best Paper International Conference on AI',
        'image' => asset('image/siti-aminah.png'),
        'description' => 'Karya tulis ilmiahnya tentang penerapan AI untuk agrikultur diakui sebagai yang terbaik dalam konferensi internasional di Singapura.',
    ],
    [
        'winner_name' => 'La Ode Budi',
        'title' => 'Juara 2 National UI/UX Challenge',
        'image' => asset('image/laode-budi.png'),
        'description' => 'Mendapatkan posisi kedua dalam tantangan desain antarmuka pengguna yang diikuti oleh ratusan peserta dari seluruh universitas di Indonesia.',
    ],
];
@endphp

<section id="achievements">
    {{-- Judul Section (tetap sama) --}}
    <div class="text-center mb-12 md:mb-16">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-800">
            Prestasi Mahasiswa/Alumni
        </h2>
        <div class="relative inline-block mt-2">
            <h3 class="text-3xl md:text-4xl font-bold text-gray-800">
                Teknik Informatika
            </h3>
            <div class="absolute bottom-0 right-0 w-1/2 h-3 bg-yellow-400/90 transform translate-y-1 z-[-1]"></div>
        </div>
    </div>

    {{-- Grid Kartu Prestasi (Desain Dinamis Baru) --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8">
        @foreach($achievements as $item)
            {{-- LOGIKA BARU UNTUK MEMECAH JUDUL SECARA OTOMATIS --}}
            @php
                $parts = explode(' ', $item['title'], 2);
                $rankOrCategory = $parts[0]; // Mengambil kata pertama sebagai 'tag'
                $eventTitle = $parts[1] ?? ''; // Mengambil sisa string sebagai judul acara
            @endphp

            <a href="#" class="group block relative rounded-2xl overflow-hidden shadow-lg transform hover:-translate-y-2 transition-transform duration-300">
                
                <img src="{{ $item['image'] }}" alt="Foto {{ $item['winner_name'] }}" class="w-full h-96 object-cover transform group-hover:scale-110 transition-transform duration-500 ease-in-out">
                
                <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/60 to-transparent"></div>
                
                <div class="absolute bottom-0 left-0 right-0 p-5 text-white flex flex-col justify-end h-full">
                    <div>
                        {{-- Tag sekarang dinamis dari kata pertama 'title' --}}
                        <span class="inline-block bg-yellow-400 text-gray-900 px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider mb-3">
                            {{ $rankOrCategory }}
                        </span>

                        {{-- Nama Pemenang menjadi judul utama --}}
                        <h3 class="text-2xl font-bold leading-tight">{{ $item['winner_name'] }}</h3>
                        
                        {{-- Sisa dari 'title' menjadi sub-judul --}}
                        <p class="text-yellow-100/90 text-sm mb-2">{{ $eventTitle }}</p>

                        {{-- PENAMBAHAN BARU: Menampilkan deskripsi dengan batasan 2 baris --}}
                        <p class="text-gray-200/80 text-xs font-light line-clamp-2">
                            {{ $item['description'] }}
                        </p>
                    </div>
                </div>
            </a>
        @endforeach
    </div>

    {{-- Tombol Explore More (tetap sama) --}}
    <div class="flex justify-end mt-12">
        <a href="#" class="inline-flex items-center px-8 py-3 bg-primary text-gray-900 font-bold rounded-full shadow-md hover:bg-primary/80 hover:shadow-lg transform hover:scale-105 transition-all duration-300">
            <span>Explore More</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
            </svg>
        </a>
    </div>
</section>