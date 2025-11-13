<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'EcoSort - Smart Waste Sorting with AI')</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Link all CSS files -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
    <!-- End CSS files -->
</head>

<body class="bg-white">
    <!-- Navigation Header -->
    <nav class="bg-white shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <h1 class="{{  asset('storage/images/logo ecosort 1.png')}}">EcoSort</h1>
                </div>

                <!-- Navigation Menu -->
                <div class="hidden md:flex space-x-8">
                    <a href="{{ route('home') }}"
                        class="text-gray-700 hover:text-green-700 font-medium transition">Beranda</a>
                    <a href="{{ route('about') }}"
                        class="text-gray-700 hover:text-green-700 font-medium transition">About Us</a>
                    <a href="{{ route('explore') }}"
                        class="text-gray-700 hover:text-green-700 font-medium transition">Explore</a>
                </div>

                <!-- CTA Button -->
                <button
                    class="bg-green-700 text-white px-6 py-2 rounded-full hover:bg-green-800 transition font-semibold">
                    Coba Sekarang!
                </button>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    @yield('content')

    <!-- Footer -->
    <!-- Replaced simple footer with comprehensive footer with 3 columns -->
    <footer style="background-color: #16a34a; padding: 60px 20px; position: relative;">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mb-12">
                <!-- Tentang EcoSort -->
                <div>
                    <h3 class="text-xl font-bold text-white mb-4">Tentang EcoSort</h3>
                    <p class="text-white text-sm leading-relaxed">
                        EcoSort AI adalah sistem pintar untuk mendeteksi dan memilah sampah secara otomatis. Bersama
                        EcoSort, wujudkan pengelolaan sampah yang efisien dan berkelanjutan.
                    </p>
                </div>

                <!-- Navigasi Cepat -->
                <div>
                    <h3 class="text-xl font-bold text-white mb-4">Navigasi Cepat</h3>
                    <ul class="space-y-2 text-white text-sm">
                        <li><a href="{{ route('home') }}" class="hover:text-gray-100 transition">Beranda</a></li>
                        <li><a href="{{ route('about') }}" class="hover:text-gray-100 transition">About Us</a></li>
                        <li><a href="{{ route('explore') }}" class="hover:text-gray-100 transition">Explore</a></li>
                    </ul>
                </div>

                <!-- Kontak & Sosial Media -->
                <div>
                    <h3 class="text-xl font-bold text-white mb-4">Kontak & Sosial Media</h3>
                    <div class="space-y-2 text-white text-sm">
                        <p>Sidoarjo, Indonesia</p>
                        <p>📧 <a href="mailto:ecosort.ai@gmail.com"
                                class="hover:text-gray-100 transition">ecosort.ai@gmail.com</a></p>
                        <p>📱 <a href="tel:+628123456789" class="hover:text-gray-100 transition">+62 812-3456-7890</a>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Robot Character - Bottom Right -->
            <div class="absolute bottom-0 right-4 md:right-20">
                <img src="{{  asset('storage/images/logo ecosort.png')}}" alt="EcoSort Robot" width="250px">
            </div>

            <!-- Copyright -->
            <div class="border-t border-green-600 pt-8 mt-8 text-center text-white text-sm">
                <p>&copy; 2025 EcoSort AI. All rights reserved.</p>
                <p>Dibuat dengan Tim EcoSort.</p>
            </div>
        </div>
    </footer>
</body>

</html>