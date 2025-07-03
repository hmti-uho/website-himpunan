@php
// Menggunakan library Carbon untuk format tanggal yang indah
use Carbon\Carbon;
@endphp

<section id="news">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-3xl font-bold text-gray-800">
            Berita Terbaru
        </h2>
        <a href="/news" class="text-sm font-semibold text-black hover:text-primary transition-colors duration-300 flex items-center">
            <span>Selengkapnya</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
            </svg>
        </a>
    </div>

    {{-- Garis Pemisah --}}
    <hr class="mb-8 border-gray-200">

    {{-- Daftar Kartu Berita --}}
    <div class="space-y-8">
        @forelse ($latestNews as $newsItem)
            {{-- Kartu Artikel Individual --}}
            <div class="grid grid-cols-1 md:grid-cols-12 gap-6 items-start bg-white p-5 rounded-2xl shadow-md hover:shadow-lg transition-shadow duration-300">
                
                {{-- Kolom Gambar --}}
                <div class="md:col-span-4 lg:col-span-3">
                    <a href="/news/{{ $newsItem->id }}">
                        @if($newsItem->image)
                            <img src="{{ asset('storage/' . $newsItem->image) }}" 
                                 alt="{{ $newsItem->title }}" 
                                 class="rounded-lg w-full h-full object-cover aspect-[4/3]">
                        @else
                            {{-- Placeholder image jika tidak ada foto --}}
                            <div class="rounded-lg w-full h-full bg-gradient-to-br from-gray-300 to-gray-400 flex items-center justify-center aspect-[4/3]">
                                <svg class="w-12 h-12 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        @endif
                    </a>
                </div>

                <div class="md:col-span-8 lg:col-span-9">
                    <h3 class="text-xl font-bold text-gray-900 mb-3 transition-colors hover:text-primary">
                        <a href="/news/{{ $newsItem->id }}">{{ $newsItem->title }}</a>
                    </h3>

                    <div class="flex items-center text-xs text-gray-500 mb-4 space-x-4">
                        <span class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <span>{{ $newsItem->formatted_date }}</span>
                        </span>
                        <span class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                            <span>Admin HMTI</span>
                        </span>
                    </div>

                    {{-- Kutipan (Excerpt) --}}
                    <p class="text-gray-600 text-sm leading-relaxed">
                        {{ $newsItem->excerpt }}
                        <a href="/news/{{ $newsItem->id }}" class="text-blue-600 font-semibold hover:underline">Selengkapnya</a>
                    </p>
                </div>

            </div>
        @empty
            {{-- Tampilan jika tidak ada berita --}}
            <div class="text-center py-12">
                <div class="bg-white rounded-2xl shadow-md p-8">
                    <svg class="w-16 h-16 text-gray-400 mx-auto mb-4" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd" />
                    </svg>
                    <h3 class="text-lg font-medium text-gray-900 mb-2">Belum ada berita</h3>
                    <p class="text-gray-500">Berita terbaru akan ditampilkan di sini setelah ditambahkan melalui admin panel.</p>
                </div>
            </div>
        @endforelse
    </div>
</section>