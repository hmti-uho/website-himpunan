<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Himpunan Mahasiswa Teknik Informatika UHO</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-gray-50" x-data="{ 
    mobileMenuOpen: false,
    activeTab: 'about',
    currentSlide: 0,
   
    courses: [
        { title: 'Web Development', instructor: 'Ahmad Fauzi', duration: '8 minggu', level: 'Beginner' },
        { title: 'Mobile App Development', instructor: 'Sarah Putri', duration: '10 minggu', level: 'Intermediate' },
        { title: 'Data Science', instructor: 'Budi Santoso', duration: '12 minggu', level: 'Advanced' }
    ],
    competitions: [
        { title: 'Hackathon 2024', date: '15-17 Desember 2024', prize: 'Rp 10.000.000', status: 'Upcoming' },
        { title: 'Programming Contest', date: '20 November 2024', prize: 'Rp 5.000.000', status: 'Registration Open' },
        { title: 'UI/UX Design Challenge', date: '10 Desember 2024', prize: 'Rp 3.000.000', status: 'Upcoming' }
    ]
}">
    @include('layouts.header')

    <main class="min-h-screen bg-gradient-to-br from-primary-light to-white">
        @yield('content')
    </main>

    @include('layouts.footer')

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>