<footer class="bg-amber-500 text-gray-800">
    <div class="container mx-auto px-6 py-12">
        {{-- Bagian Atas: Info Utama --}}
        <div class="grid grid-cols-1 md:grid-cols-12 gap-8">
            
            {{-- Kolom 1: Logo dan Nama --}}
            <div class="md:col-span-12 lg:col-span-5 flex items-center space-x-4">
                <img src="{{ asset('image/logo 1.png') }}" alt="Logo HMTI" class="h-24 w-24 flex-shrink-0">
                <div>
                    <p class="font-semibold">Himpunan Mahasiswa</p>
                    <p class="text-2xl font-bold leading-tight">Teknik Informatika</p>
                    <p class="font-semibold">Fakultas Teknik</p>
                    <p class="font-bold text-lg">UNIVERSITAS HALU OLEO</p>
                </div>
            </div>

            {{-- Spacer untuk HP, tidak terlihat di desktop --}}
            <div class="lg:hidden col-span-12">
                <hr class="border-amber-600/50">
            </div>

            {{-- Kolom 2: Alamat --}}
            <div class="md:col-span-6 lg:col-span-4">
                <h4 class="text-xl font-bold mb-2">Alamat</h4>
                <p class="leading-relaxed">
                    Jl. H.E.A. Mokodompit, Gedung <br>
                    Fakultas Teknik UHO Lt. 3, <br>
                    Kendari 93231.
                </p>
            </div>

            {{-- Kolom 3: Kontak --}}
            <div class="md:col-span-6 lg:col-span-3">
                <h4 class="text-xl font-bold mb-2">Kontak</h4>
                <p>htmiofficial@gmail.com</p>
                <p>(0111) 11111111</p>
            </div>
        </div>

        {{-- Bagian Tengah: Ikon Media Sosial --}}
        <div class="mt-12 flex justify-center">
            <div class="flex space-x-4">
                {{-- Facebook --}}
                <a href="#" target="_blank" class="flex items-center justify-center h-10 w-10 bg-white rounded-full shadow-md transition-transform hover:scale-110">
                    <svg class="h-6 w-6 text-blue-600" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v2.385z"/>
                    </svg>
                </a>
                {{-- Instagram --}}
                <a href="#" target="_blank" class="flex items-center justify-center h-10 w-10 bg-white rounded-full shadow-md transition-transform hover:scale-110">
                    <svg class="h-6 w-6 text-pink-600" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.689-.073-4.948-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.162 6.162 6.162 6.162-2.759 6.162-6.162-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4s1.791-4 4-4 4 1.79 4 4-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44 1.441-.645 1.441-1.44-.645-1.44-1.441-1.44z"/>
                    </svg>
                </a>
                {{-- WhatsApp --}}
                <a href="#" target="_blank" class="flex items-center justify-center h-10 w-10 bg-white rounded-full shadow-md transition-transform hover:scale-110">
                    <svg class="h-6 w-6 text-green-500" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.894 11.892-1.99 0-3.903-.52-5.586-1.457l-6.354 1.654zm.826-1.714l4.986-1.304-3.484-3.483-1.502 4.787zm4.364-5.093l3.484 3.483 5.42-1.411c1.396-.996 2.451-2.433 3.006-4.049-2.043-2.043-4.939-3.232-8.02-3.232-4.948 0-8.971 4.022-8.972 8.97v.003c0 1.579.418 3.123 1.157 4.484l1.502-4.787z"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
    
    {{-- Bagian Bawah: Copyright --}}
    <div class="bg-amber-600">
        <div class="container mx-auto px-6 py-4">
            {{-- Menggunakan format © TAHUN NAMA, karena ini adalah praktik standar --}}
            <p class="text-center text-sm text-amber-100">
                © {{ date('Y') }} HMTI UHO
            </p>
        </div>
    </div>
</footer>