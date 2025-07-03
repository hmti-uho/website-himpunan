@extends('layouts.app')

@section('title', 'Lomba UI/UX Design HMTI 2025')

@section('content')

<div class="relative w-full h-64 md:h-80 flex items-center justify-center bg-cover bg-center" style="background-image: url('{{ asset('image/hero.JPG') }}');">
    <div class="absolute inset-0 bg-black/40"></div>
    <div class="relative z-10 text-center text-white px-4">
        <h1 class="text-3xl md:text-4xl font-bold drop-shadow-lg">Lomba UI/UX Design</h1>
        <p class="mt-2 text-white/90">Home / Event / Lomba UI/UX Design HMTI 2025</p>
    </div>
</div>

<div class="min-h-screen bg-gradient-to-br from-primary-light to-white">
    <div class="container mx-auto px-4 py-8">
        <div class="mb-6">
            <a href="{{ route('home.index') }}"  class="inline-flex items-center text-primary-dark hover:text-primary transition-colors duration-300">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                Kembali
            </a>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-start">
            <div class="flex justify-center lg:justify-start">
                <div class="relative">
                    <div class="bg-white p-4 rounded-2xl shadow-2xl transform hover:scale-105 transition-transform duration-300">
                        <div class="bg-gradient-to-br from-red-600 to-red-800 rounded-xl p-6 text-white relative overflow-hidden">
                            <div class="absolute inset-0 opacity-20">
                                <div class="absolute top-0 left-0 w-32 h-32 bg-white rounded-full -translate-x-16 -translate-y-16"></div>
                                <div class="absolute bottom-0 right-0 w-24 h-24 bg-white rounded-full translate-x-12 translate-y-12"></div>
                            </div>
                            
                            <div class="text-center mb-4 relative z-10">
                                <div class="w-16 h-16 bg-yellow-400 rounded-full mx-auto mb-2 flex items-center justify-center">
                                    <span class="text-black font-bold text-xl">H</span>
                                </div>
                            </div>
                            
                            <div class="text-center relative z-10">
                                <h1 class="text-3xl font-bold mb-2">BAZAR</h1>
                                <div class="bg-red-700 px-4 py-1 rounded-full inline-block mb-2">
                                    <span class="text-sm font-semibold">ROAD TO HMTI</span>
                                </div>
                                <p class="text-lg font-semibold">LEADERSHIP CAMP VII</p>
                            </div>
                            
                            <div class="mt-6 relative z-10">
                                <div class="h-32 bg-gradient-to-t from-black/50 to-transparent rounded-lg flex items-end justify-center">
                                    <div class="text-xs text-white/80 p-2">Ilustrasi Peserta</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="space-y-6">
                <div class="text-center lg:text-left">
                    <h1 class="text-4xl lg:text-5xl font-bold text-gray-800 mb-2">
                        Lomba UI/UX Design HMTI 2025
                    </h1>
                </div>

                <div class="bg-white rounded-2xl shadow-xl p-6 space-y-4">
                    <h2 class="text-2xl font-bold text-gray-800 mb-4">Waktu Pelaksanaan:</h2>
                    <div class="space-y-2 text-gray-700">
                        <p><span class="font-semibold">Pendaftaran:</span> 1 Juli - 30 Juni 2025</p>
                        <p><span class="font-semibold">Pengumpulan Karya:</span> 1 - 15 Juli 2025</p>
                        <p><span class="font-semibold">Pengumuman Pemenang:</span> 25 Juli 2025</p>
                    </div>
                    
                    <div class="mt-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Tema:</h3>
                        <p class="text-gray-700 font-medium">Inovasi Desain Antarmuka untuk Aplikasi Edukasi Digital</p>
                    </div>

                    <div class="mt-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Kategori:</h3>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-primary text-white px-4 py-2 rounded-full text-sm font-medium">Mobile App Design</span>
                            <span class="bg-primary text-white px-4 py-2 rounded-full text-sm font-medium">Desktop Web Design</span>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-2xl shadow-xl p-6">
                    <h2 class="text-2xl font-bold text-gray-800 mb-4">Deskripsi Singkat:</h2>
                    <p class="text-gray-700 leading-relaxed mb-6">
                        Lomba UI/UX Design HMTI mengajak mahasiswa untuk berinovasi dalam merancang antarmuka pengguna aplikasi edukasi digital yang intuitif, menarik, dan user-friendly. Karya akan dinilai berdasarkan kreativitas, usability, dan kesesuaian dengan tema.
                    </p>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <h3 class="text-xl font-bold text-gray-800 mb-3">Hadiah:</h3>
                            <div class="space-y-2 text-gray-700">
                                <p><span class="font-semibold">Juara 1:</span> Rp2.500.000 + Sertifikat</p>
                                <p><span class="font-semibold">Juara 2:</span> Rp1.500.000 + Sertifikat</p>
                                <p><span class="font-semibold">Juara 3:</span> Rp1.000.000 + Sertifikat</p>
                                <p class="text-sm">Semua peserta mendapat e-sertifikat</p>
                            </div>
                        </div>

                        <div>
                            <div class="bg-primary rounded-xl p-4 text-white text-center mb-4">
                                <h3 class="font-bold text-lg mb-2">Total Pendaftar dan Deadline</h3>
                                <p class="text-sm mb-2">30 Orang Pendaftar</p>
                                <div class="text-2xl font-bold animate-blink">12 : 12 : 12 : 12</div>
                            </div>
                            
                            <button class="w-full bg-primary hover:bg-primary-dark text-white font-bold py-3 px-6 rounded-xl transition-all duration-300 transform hover:scale-105 btn-glow">
                                Daftar Sekarang
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-16">
            <h2 class="text-3xl font-bold text-gray-800 text-center mb-8">Event</h2>
            
            <div class="relative max-w-6xl mx-auto">
                <div class="overflow-hidden rounded-2xl">
                    <div id="carousel" class="flex transition-transform duration-500 ease-in-out">
                        <div class="min-w-full">
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 p-4">
                                <div class="bg-primary rounded-2xl p-4 text-white card-hover-effect">
                                    <div class="h-48 bg-white/20 rounded-xl mb-4 flex items-center justify-center">
                                        <span class="text-white/80">Event Image</span>
                                    </div>
                                    <h3 class="text-xl font-bold mb-2">HMTI CREATIVEX</h3>
                                    <p class="text-sm opacity-90">Creative and Creative Product Design Contest</p>
                                </div>
                                
                                <div class="bg-primary rounded-2xl p-4 text-white card-hover-effect">
                                    <div class="h-48 bg-white/20 rounded-xl mb-4 flex items-center justify-center">
                                        <span class="text-white/80">Event Image</span>
                                    </div>
                                    <h3 class="text-xl font-bold mb-2">CyberSprint HMTI</h3>
                                    <p class="text-sm opacity-90">Cyber Smart Contest - Prove Your Cyber Security Skills</p>
                                </div>
                                
                                <div class="bg-primary rounded-2xl p-4 text-white card-hover-effect">
                                    <div class="h-48 bg-white/20 rounded-xl mb-4 flex items-center justify-center">
                                        <span class="text-white/80">Event Image</span>
                                    </div>
                                    <h3 class="text-xl font-bold mb-2">HMTI DesignX</h3>
                                    <p class="text-sm opacity-90">Design the Future with Your Ideas</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="flex justify-center mt-6 space-x-2">
                    <button class="w-3 h-3 rounded-full bg-gray-300 hover:bg-primary transition-colors duration-300"></button>
                    <button class="w-3 h-3 rounded-full bg-primary"></button>
                    <button class="w-3 h-3 rounded-full bg-gray-300 hover:bg-primary transition-colors duration-300"></button>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="registrationModal" class="fixed inset-0 bg-black/50 backdrop-blur-sm hidden items-center justify-center z-50">
    <div class="bg-white rounded-2xl p-8 max-w-md w-full mx-4">
        <h3 class="text-2xl font-bold text-gray-800 mb-4">Daftar Lomba</h3>
        <form class="space-y-4">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
                <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                <input type="email" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Universitas</label>
                <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary">
            </div>
            <div class="flex gap-3 mt-6">
                <button type="button" onclick="closeModal()" class="flex-1 px-4 py-2 text-gray-600 border border-gray-300 rounded-lg hover:bg-gray-50">
                    Batal
                </button>
                <button type="submit" class="flex-1 px-4 py-2 bg-primary text-white rounded-lg hover:bg-primary-dark">
                    Daftar
                </button>
            </div>
        </form>
    </div>
</div>

<script>
// Countdown Timer
function updateCountdown() {
    const deadline = new Date('2025-07-30T23:59:59').getTime();
    const now = new Date().getTime();
    const timeLeft = deadline - now;

    const days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
    const hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

    document.querySelector('.animate-blink').textContent = 
        `${days.toString().padStart(2, '0')} : ${hours.toString().padStart(2, '0')} : ${minutes.toString().padStart(2, '0')} : ${seconds.toString().padStart(2, '0')}`;
}

// Update countdown every second
setInterval(updateCountdown, 1000);
updateCountdown();

// Modal functions
function openModal() {
    document.getElementById('registrationModal').classList.remove('hidden');
    document.getElementById('registrationModal').classList.add('flex');
}

function closeModal() {
    document.getElementById('registrationModal').classList.add('hidden');
    document.getElementById('registrationModal').classList.remove('flex');
}

// Add event listener to registration button
document.querySelector('.btn-glow').addEventListener('click', openModal);

// Close modal when clicking outside
document.getElementById('registrationModal').addEventListener('click', function(e) {
    if (e.target === this) {
        closeModal();
    }
});
</script>
@endsection