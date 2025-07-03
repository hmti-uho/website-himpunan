@php
// Anggap $allItems adalah semua data dari database
$allItems = [
    ['title' => 'Compiler', 'image' => asset('image/compiler.JPG')],
    ['title' => 'Ristek', 'image' => asset(path: 'image/ristek.JPG')],
    ['title' => 'Ekraf', 'image' => asset('image/ekraf-kor.JPG')],
    ['title' => 'Ristek', 'image' => asset('image/ristek.JPG')],
    ['title' => 'Keagamaan', 'image' => asset('image/keagamaan.JPG')],
    ['title' => 'Keolahragaan', 'image' => asset('image/keolahragaan.JPG')],
    ['title' => 'Ketua & Wakil', 'image' => asset('image/ketua-wakil.JPG')],
    ['title' => 'Penalaran', 'image' => asset('image/penalaran.JPG')],
];

// Membatasi galeri untuk selalu menampilkan 7 gambar pertama saja
$galleryItems = array_slice($allItems, 0, 7);
@endphp

<section id="gallery">
    {{-- Judul Section --}}
    <div class="text-center mb-12">
        <h2 class="text-4xl md:text-5xl font-bold text-gray-800 tracking-wider">
            GALLERY
        </h2>
        <div class="w-24 h-1 bg-yellow-400 mx-auto mt-4 rounded-full"></div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-6 gap-2">

        @foreach ($galleryItems as $item)
            @php
                // Menggunakan kembali pola 7 gambar yang sesuai dengan foto asli
                $patternIndex = ($loop->iteration - 1) % 7;
                $spanClass = match($patternIndex) {
                    0 => 'md:col-span-3 md:row-span-2',
                    1 => 'md:col-span-2',
                    2 => 'md:row-span-2',
                    3, 4 => '',
                    5 => 'md:col-span-4',
                    6 => 'md:col-span-2',
                };
            @endphp

            <div class="group relative overflow-hidden rounded-xl shadow-lg {{ $spanClass }}">
                
                {{-- object-cover akan 'men-zoom' gambar agar pas dengan kotak tanpa penyok --}}
                <img src="{{ $item['image'] }}" 
                     alt="{{ $item['title'] }}" 
                     class="w-full h-full object-cover transform transition-transform duration-500 ease-in-out group-hover:scale-110">
                
                <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center p-4">
                    <h3 class="text-white text-base font-bold text-center transform scale-90 group-hover:scale-100 transition-transform duration-300">
                        {{ $item['title'] }}
                    </h3>
                </div>
            </div>
        @endforeach
    </div>
</section>