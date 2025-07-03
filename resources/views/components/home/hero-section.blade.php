<section 
    x-data="{ 
        showWelcome: false,
        typedText: '',
        fullText: 'Himpunan Mahasiswa Teknik Informatika UHO'
    }"
    x-init="
        showWelcome = true;
        let delay = 75;
        for (let i = 0; i < fullText.length; i++) {
            setTimeout(() => {
                typedText = fullText.substring(0, i + 1);
            }, i * delay);
        }
    "
    class="relative min-h-screen flex items-center justify-center overflow-hidden">
    
    <div class="absolute inset-0">
        <img 
            src="{{ asset('image/hero.JPG') }}" 
            alt="HMTI Background" 
            class="w-full h-full object-cover"
        >
        <div class="absolute inset-0 bg-gradient-to-r from-primary-dark/90 to-black/80"></div>
    </div>

    <div class="relative z-10 container mx-auto px-4 text-center">
        <div 
            x-show="showWelcome"
            x-transition:enter="transition ease-out duration-1000"
            x-transition:enter-start="opacity-0 transform translate-y-12"
            x-transition:enter-end="opacity-100 transform translate-y-0"
            class="space-y-8">
            
            <h1 class="text-4xl md:text-6xl font-bold text-white mb-4">
                <span x-text="typedText" class="inline-block"></span>
                <span class="animate-blink text-primary">|</span>
            </h1>

            <p class="text-xl md:text-2xl text-gray-200 max-w-3xl mx-auto">
                Mewujudkan mahasiswa yang unggul, profesional, dan berintegritas dalam bidang teknologi informasi.
            </p>

            <div class="flex flex-col sm:flex-row gap-4 justify-center mt-8">
                <a href="#about" 
                   class="px-8 py-3 bg-primary text-white rounded-lg font-semibold 
                          hover:bg-primary-dark transition duration-300 ease-in-out
                          transform hover:scale-105">
                    Tentang Kami
                </a>
                <a href="#contact" 
                   class="px-8 py-3 bg-transparent border-2 border-primary text-white 
                          rounded-lg font-semibold hover:bg-primary/20 
                          transition duration-300 ease-in-out
                          transform hover:scale-105">
                    Hubungi Kami
                </a>
            </div>

            <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
                <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                </svg>
            </div>
        </div>
    </div>
</section>