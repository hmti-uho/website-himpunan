<!-- resources/views/welcome.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HMTI UHO - Fakultas Teknik</title>
    <!-- Tailwind CSS -->
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <!-- Navbar -->
    <nav class="bg-white shadow">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <div class="flex-shrink-0 flex items-center">
                        <img src="/image/logo 1.png" alt="HMTI UHO Logo" class="h-12 w-12">
                        <div class="ml-2">
                            <div class="font-bold text-gray-800">HMTI UHO</div>
                            <div class="text-xs text-gray-600">Fakultas Teknik</div>
                        </div>
                    </div>
                </div>
                <div class="flex items-center">
                    <div class="hidden md:ml-6 md:flex md:space-x-8">
                        <a href="#" class="text-gray-900 border-b-2 border-transparent hover:border-orange-500 px-1 pt-1 inline-flex items-center text-sm font-medium">
                            Home
                        </a>
                        <div class="relative">
                            <a href="#" class="text-gray-900 border-b-2 border-transparent hover:border-orange-500 px-1 pt-1 inline-flex items-center text-sm font-medium">
                                Profil
                                <svg class="ml-1 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 011.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                        <a href="#" class="text-gray-900 border-b-2 border-transparent hover:border-orange-500 px-1 pt-1 inline-flex items-center text-sm font-medium">
                            Prestasi
                        </a>
                        <a href="#" class="text-gray-900 border-b-2 border-transparent hover:border-orange-500 px-1 pt-1 inline-flex items-center text-sm font-medium">
                            Course
                        </a>
                        <a href="#" class="text-gray-900 border-b-2 border-transparent hover:border-orange-500 px-1 pt-1 inline-flex items-center text-sm font-medium">
                            Lomba
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="relative">
        <div class="absolute inset-0">
            <img class="w-full h-full object-cover" src="{{ asset('images/fakultas-teknik.jpg') }}" alt="Fakultas Teknik">
            <div class="absolute inset-0 bg-gradient-to-r from-black/70 to-black/20"></div>
        </div>
        <div class="relative max-w-7xl mx-auto py-24 px-4 sm:py-32 sm:px-6 lg:px-8">
            <div class="max-w-3xl">
                <h1 class="text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl">
                    Himpunan Mahasiswa<br>Teknik Informatika
                </h1>
                <p class="mt-6 text-xl text-gray-300">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
                <div class="mt-8">
                    <button class="bg-white text-gray-800 px-6 py-3 rounded-full font-medium flex items-center space-x-2 hover:bg-gray-100 transition">
                        <span>Explore More</span>
                        <span class="bg-yellow-400 rounded-full p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Fakultas Teknik Section -->
    <div class="relative">
        <div class="w-full text-center py-6 bg-white">
            <h2 class="text-5xl font-bold">
                <span class="text-yellow-400">Fakultas</span>
                <span class="text-blue-400">Teknik</span>
            </h2>
        </div>
    </div>
</body>
</html>