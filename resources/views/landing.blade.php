@extends('layout')

@section('title', 'EcoSort - Smart Waste Sorting with AI')

@section('content')
    <!-- Hero Section -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
        <div>
            <h1 class="text-5xl font-bold text-gray-900 mb-4">EcoSort - AI</h1>
            <p class="text-xl text-gray-600 font-semibold mb-4">"Smart Waste Sorting with AI"</p>
            <p class="text-gray-700 leading-relaxed mb-8">
                Sistem AI untuk mendeteksi dan memilah sampah otomatis. Wujudkan pengelolaan sampah yang efisien dan
                berkelanjutan bersama EcoSort AI.
            </p>
            <button class="bg-green-700 text-white px-6 py-3 rounded-full hover:bg-green-800 transition font-semibold">
                Coba Sekarang!
            </button>
        </div>
        <div class="flex justify-center">
            <!-- Robot Character Image -->
            <img src="{{  asset('storage/images/logo ecosort 2.png')}}" alt="EcoSort AI Robot" width="250px">
        </div>
    </section>

    <!-- Waste Categories Section -->
    <section class="bg-gray-50 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <!-- Plastik -->
                <div class="bg-white rounded-lg p-6 shadow-sm hover:shadow-md transition flex items-center gap-4">
                    <img src="{{  asset('storage/images/organik.png')}}" alt="Plastik" class="w-10 h-10">
                    <h3 class="font-semibold text-gray-900">Plastik</h3>
                </div>
                <!-- Kertas -->
                <div class="bg-white rounded-lg p-6 shadow-sm hover:shadow-md transition flex items-center gap-4">
                    <img src="{{  asset('storage/images/organik.png')}}" alt="Kertas" class="w-10 h-10">
                    <h3 class="font-semibold text-gray-900">Kertas</h3>
                </div>
                <!-- Logam -->
                <div class="bg-white rounded-lg p-6 shadow-sm hover:shadow-md transition flex items-center gap-4">
                    <img src="{{  asset('storage/images/organik.png')}}" alt="Logam" class="w-10 h-10">
                    <h3 class="font-semibold text-gray-900">Logam</h3>
                </div>
                <!-- Organik -->
                <div class="bg-white rounded-lg p-6 shadow-sm hover:shadow-md transition flex items-center gap-4">
                    <img src="{{  asset('storage/images/organik.png')}}" alt="Organik" class="w-10 h-10">
                    <h3 class="font-semibold text-gray-900">Organik</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery & About Section with green background -->
    <section style="background-color: #16a34a; padding: 60px 20px;">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <!-- Gallery -->
                <div class="grid grid-cols-2 gap-4">
                    <img src="{{  asset('storage/images/wayang.png')}}" alt="Gallery 1"
                        class="rounded-lg w-full h-40 object-cover">
                    <img src="{{  asset('storage/images/borubudur.png')}}" alt="Gallery 2"
                        class="rounded-lg w-full h-40 object-cover">
                    <img src="{{  asset('storage/images/foods.png')}}" alt="Gallery 3"
                        class="rounded-lg w-full h-40 object-cover">
                    <img src="{{  asset('storage/images/saman.png')}}" alt="Gallery 4"
                        class="rounded-lg w-full h-40 object-cover">
                </div>

                <!-- About Us -->
                <div>
                    <h2 class="text-3xl font-bold text-white mb-6">About Us</h2>
                    <p class="text-white leading-relaxed mb-4">
                        EcoSort AI adalah sistem cerdas berbasis kecerdasan buatan yang mampu mendeteksi dan memilah jenis
                        sampah secara otomatis melalui kamera.
                    </p>
                    <p class="text-white leading-relaxed">
                        Kami hadir untuk membantu menciptakan lingkungan yang lebih bersih, efisien, dan berkelanjutan
                        dengan memanfaatkan teknologi AI.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Tujuan EcoSort Section -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-2">Tujuan <span class="text-green-700">EcoSort</span></h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
            <!-- Tujuan 1 -->
            <div
                class="bg-white border-l-4 border-green-700 rounded-lg p-6 shadow-sm hover:shadow-md transition text-center">
                <div class="flex justify-center mb-4">
                    <img src="/placeholder.svg?height=60&width=60" alt="Recycle" class="w-16 h-16">
                </div>
                <h3 class="font-bold text-gray-900 mb-3">Mengurangi kesulahan dalam pemilihan sampah manual</h3>
                <p class="text-gray-600 text-sm">Otomatisasi proses sortir sampah dengan akurasi tinggi</p>
            </div>

            <!-- Tujuan 2 -->
            <div
                class="bg-white border-l-4 border-green-700 rounded-lg p-6 shadow-sm hover:shadow-md transition text-center">
                <div class="flex justify-center mb-4">
                    <img src="/placeholder.svg?height=60&width=60" alt="Awareness" class="w-16 h-16">
                </div>
                <h3 class="font-bold text-gray-900 mb-3">Meningkatkan kesadaran masyarakat terhadap isu lingkungan</h3>
                <p class="text-gray-600 text-sm">Edukasi dan engagement untuk masa depan yang lebih hijau</p>
            </div>

            <!-- Tujuan 3 -->
            <div
                class="bg-white border-l-4 border-green-700 rounded-lg p-6 shadow-sm hover:shadow-md transition text-center">
                <div class="flex justify-center mb-4">
                    <img src="/placeholder.svg?height=60&width=60" alt="Technology" class="w-16 h-16">
                </div>
                <h3 class="font-bold text-gray-900 mb-3">Mendorong implementasi teknologi AI dalam pengelolaan lingkungan
                </h3>
                <p class="text-gray-600 text-sm">Inovasi teknologi untuk solusi berkelanjutan</p>
            </div>
        </div>

        <!-- Call to Action -->
        <div class="text-center">
            <p class="text-gray-700 mb-4">
                Mulai langkah kecil untuk bumi yang lebih hijau 🌍
            </p>
            <p class="text-gray-600 mb-6">
                Gunakan EcoSort AI dan rasakan kemudahan dalam mengelola sampah dengan teknologi pintar
            </p>
            <button class="bg-green-700 hover:bg-green-800 text-white px-6 py-3 rounded-full font-semibold transition">
                Coba Sekarang! <img src="{{  asset('storage/images/kamera.png')}}">
            </button>
        </div>
    </section>

    <!-- Our Tim Section -->
    <section class="bg-gray-50 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900">Our Tim</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
                <!-- Tim Member 1 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition">
                    <div class="w-full h-48 bg-gradient-to-br from-green-100 to-green-50"></div>
                    <div class="p-4 text-center">
                        <h3 class="font-semibold text-gray-900">Tim Member 1</h3>
                        <p class="text-sm text-gray-600">Posisi</p>
                    </div>
                </div>

                <!-- Tim Member 2 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition">
                    <div class="w-full h-48 bg-gradient-to-br from-green-100 to-green-50"></div>
                    <div class="p-4 text-center">
                        <h3 class="font-semibold text-gray-900">Tim Member 2</h3>
                        <p class="text-sm text-gray-600">Posisi</p>
                    </div>
                </div>

                <!-- Tim Member 3 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition">
                    <div class="w-full h-48 bg-gradient-to-br from-green-100 to-green-50"></div>
                    <div class="p-4 text-center">
                        <h3 class="font-semibold text-gray-900">Tim Member 3</h3>
                        <p class="text-sm text-gray-600">Posisi</p>
                    </div>
                </div>

                <!-- Tim Member 4 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition">
                    <div class="w-full h-48 bg-gradient-to-br from-green-100 to-green-50"></div>
                    <div class="p-4 text-center">
                        <h3 class="font-semibold text-gray-900">Tim Member 4</h3>
                        <p class="text-sm text-gray-600">Posisi</p>
                    </div>
                </div>

                <!-- Tim Member 5 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition">
                    <div class="w-full h-48 bg-gradient-to-br from-green-100 to-green-50"></div>
                    <div class="p-4 text-center">
                        <h3 class="font-semibold text-gray-900">Tim Member 5</h3>
                        <p class="text-sm text-gray-600">Posisi</p>
                    </div>
                </div>

                <!-- Tim Member 6 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md transition">
                    <div class="w-full h-48 bg-gradient-to-br from-green-100 to-green-50"></div>
                    <div class="p-4 text-center">
                        <h3 class="font-semibold text-gray-900">Tim Member 6</h3>
                        <p class="text-sm text-gray-600">Posisi</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection