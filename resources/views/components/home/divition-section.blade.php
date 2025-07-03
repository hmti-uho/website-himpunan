<section>
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
        @forelse($divisions as $division)
            @php
                $leader = $division->members->first();
            @endphp
            {{-- Kartu Divisi --}}
            <div class="division-card bg-white rounded-3xl shadow-xl relative">
                
                {{-- Kontainer Gambar: Diberi rounded-3xl dan overflow-hidden --}}
                <div class="aspect-square relative rounded-3xl overflow-hidden">
                    <div class="w-full h-full relative">
                        @if($leader && $leader->photo)
                            <img 
                                src="{{ asset('storage/' . $leader->photo) }}" 
                                alt="{{ $leader->name }}" 
                                class="w-full h-full object-cover"
                            />
                        @else
                            {{-- Placeholder image jika tidak ada foto --}}
                            <div class="w-full h-full bg-gradient-to-br from-gray-300 to-gray-400 flex items-center justify-center">
                                <svg class="w-16 h-16 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        @endif
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent"></div>
                        
                        <div class="position-overlay absolute inset-0 flex items-center justify-center opacity-0 hover:opacity-100 transition-opacity duration-300">
                            <div class="text-center text-white px-6">
                                <h2 class="text-2xl font-black leading-tight uppercase">
                                    KETUA DIVISI
                                </h2>
                                <h2 class="text-2xl font-black leading-tight uppercase">
                                    {!! strtoupper(str_replace(' ', '<br>', $division->name)) !!}
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
                        {{ $division->name }}
                    </h4>
                    <p class="text-xl font-medium text-gray-800">
                        {{ $leader ? $leader->name : 'Belum ditentukan' }}
                    </p>
                </div>

            </div>
        @empty
            {{-- Tampilan jika tidak ada divisi --}}
            <div class="col-span-full text-center py-12">
                <div class="bg-white rounded-3xl shadow-xl p-8">
                    <svg class="w-16 h-16 text-gray-400 mx-auto mb-4" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                    </svg>
                    <h3 class="text-lg font-medium text-gray-900 mb-2">Belum ada divisi</h3>
                    <p class="text-gray-500">Data divisi akan ditampilkan di sini setelah ditambahkan melalui admin panel.</p>
                </div>
            </div>
        @endforelse
    </div>
</section>