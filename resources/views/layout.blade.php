<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'EcoSort - Smart Waste Sorting with AI')</title>

    <!-- CSRF TOKEN (WAJIB UNTUK CHATBOT) -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

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
                        class="text-green-700 hover:text-green-800 transition font-semibold">Home</a>
                    <a href="#about-hero"
                        class="text-green-700 hover:text-green-800 transition font-semibold">About Us</a>
                    <a href="{{ route('explore') }}"
                        class="text-green-700 hover:text-green-800 transition font-semibold">EcoBot</a>
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
            <p>EcoSort AI adalah sistem pintar berbasis kecerdasan buatan yang berfungsi untuk mendeteksi dan mengklasifikasikan jenis sampah: Plastik, Logam, dan Kertas menggunakan kamera.</p>
        </div>

        <!-- Navigasi Cepat -->
        <div>
            <h3 class="text-xl font-bold mb-4">Navigasi Cepat</h3>
            <ul class="space-y-2 text-sm">
                <li><a href="{{ route('home') }}" class="hover:text-gray-100 transition">Home</a></li>
                <li><a href="#baout-hero" class="hover:text-gray-100 transition">About Us</a></li>
                <li><a href="{{ route('explore') }}" class="hover:text-gray-100 transition">EcoBot</a></li>
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
                    <a href="SMK Telkom Sidoarjo">SMK Telkom Sidoarjo</a>
                </div>
                <div class="contact-item">
                    <div class="contact-icon">📱</div>
                    <a href="Inkubasi Project">Inkubasi Project</a>
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
        <p>Dibuat oleh Tim EcoSort-AI.</p>
    </div>
</footer>
</body>

</html>
