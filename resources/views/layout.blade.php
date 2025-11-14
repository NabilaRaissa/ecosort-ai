<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'EcoSort - Smart Waste Sorting with AI')</title>

    <!-- Google Fonts: Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Tailwind (Vite Build) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
</head>

<body class="bg-white">
    <!-- Navigation Header -->
    <nav class="navbar"> 
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex items-center space-x-3">
                    <h1 class="text-green-700 text-xl font-extrabold tracking-wide">EcoSort</h1>
                </div>

                <!-- Navigation Menu -->
                <div class="hidden md:flex space-x-8">
                    <a href="{{ route('home') }}"
                        class="text-green-700 hover:text-green-800 transition font-semibold">Beranda</a>
                    <a href="{{ route('about') }}"
                        class="text-green-700 hover:text-green-800 transition font-semibold">About Us</a>
                    <a href="{{ route('explore') }}"
                        class="text-green-700 hover:text-green-800 transition font-semibold">Explore</a>
                </div>

                <!-- CTA Button -->
                <button
                    class="bg-green-700 text-white px-6 py-2 rounded-full hover:bg-green-800 transition font-bold shadow-md">
                    Coba Sekarang!
                </button>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    @yield('content')

<footer class="relative bg-green-700 text-white">
    <div class="footer-grid container mx-auto px-6 py-12 grid md:grid-cols-3 gap-7">
        <!-- Tentang -->
        <div>
            <h3 class="text-xl font-bold mb-4">Tentang EcoSort</h3>
            <p>EcoSort AI adalah sistem pintar untuk mendeteksi dan memilah sampah secara otomatis...</p>
        </div>

        <!-- Navigasi Cepat -->
        <div>
            <h3 class="text-xl font-bold mb-4">Navigasi Cepat</h3>
            <ul class="space-y-2 text-sm">
                <li><a href="{{ route('home') }}" class="hover:text-gray-100 transition">Beranda</a></li>
                <li><a href="{{ route('about') }}" class="hover:text-gray-100 transition">About Us</a></li>
                <li><a href="{{ route('explore') }}" class="hover:text-gray-100 transition">Explore</a></li>
            </ul>
        </div>

        <!-- Kontak & Sosial Media -->
        <div>
            <h3 class="text-xl font-bold mb-4">Kontak & Sosial Media</h3>
            <div class="space-y-4">
                <div class="contact-item">
                    <div class="contact-icon">📍</div>
                    <span>Sidoarjo, Indonesia</span>
                </div>
                <div class="contact-item">
                    <div class="contact-icon">📧</div>
                    <a href="mailto:ecosort.ai@gmail.com">ecosort.ai@gmail.com</a>
                </div>
                <div class="contact-item">
                    <div class="contact-icon">📱</div>
                    <a href="tel:+628123456789">+62 812-3456-7890</a>
                </div>
            </div>
        </div>
    </div> <!-- tutup footer-grid -->

    <!-- Robot Character -->
    <div class="robot-stand">
        <img src="{{ asset('storage/images/logo ecosort.png') }}" alt="EcoSort Robot" class="robot-img" width="500px">
    </div>

    <!-- Copyright -->
    <div class=" pt-20 mt-100 text-white text-sm copyright">
        <p>&copy; 2025 EcoSort AI. All rights reserved.</p>
        <p>Dibuat oleh Tim EcoSort.</p>
    </div>
</footer>
</body>

</html>
