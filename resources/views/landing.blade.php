@extends('layout')

@section('title', 'EcoSort - Smart Waste Sorting with AI')

@section('content')
    <!-- Hero + Waste Categories Section -->
<section class="bg-white max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-28 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
    <!-- Hero Content -->
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

    <!-- Hero Image -->
    <div class="hero-stand">
        <img src="{{ asset('storage/images/logo ecosort 1.png') }}" 
            alt="EcoSort AI Robot" 
            class="hero-img" 
            width="350px">
    </div>


    <!-- Waste Categories -->
    <!-- Waste Categories -->
<div class="col-span-2 mt-20">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 place-items-center">

        <!-- Plastik -->
        <div class="bg-white rounded-xl p-4 shadow-xl hover:shadow-2xl hover:scale-105 hover:border-green-400 border border-transparent transition-all duration-300 flex items-center gap-4 w-full max-w-[350px]">
            <div class="w-20 h-20 rounded-full overflow-hidden shadow-lg">
                <img src="{{ asset('storage/images/plastik.png') }}" alt="Plastik" class="w-full h-full object-cover">
            </div>
            <h3 class="font-semibold text-gray-900 text-lg">Plastik</h3>
        </div>

        <!-- Kertas -->
        <div class="bg-white rounded-xl p-4 shadow-xl hover:shadow-2xl hover:scale-105 hover:border-green-400 border border-transparent transition-all duration-300 flex items-center gap-4 w-full max-w-[350px]">
            <div class="w-20 h-20 rounded-full overflow-hidden shadow-lg">
                <img src="{{ asset('storage/images/kertas.png') }}" alt="Kertas" class="w-full h-full object-cover">
            </div>
            <h3 class="font-semibold text-gray-900 text-lg">Kertas</h3>
        </div>

        <!-- Logam -->
        <div class="bg-white rounded-xl p-4 shadow-xl hover:shadow-2xl hover:scale-105 hover:border-green-400 border border-transparent transition-all duration-300 flex items-center gap-4 w-full max-w-[350px]">
            <div class="w-20 h-20 rounded-full overflow-hidden shadow-lg">
                <img src="{{ asset('storage/images/logam.png') }}" alt="Logam" class="w-full h-full object-cover">
            </div>
            <h3 class="font-semibold text-gray-900 text-lg">Logam</h3>
        </div>

    </div>
</div>

</section>




    <!-- Gallery & About Section with green background -->
    <section id="about-hero" style="background-color: #16a34a; padding: 50px 50px;">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
        
        <!-- Gallery (kiri) -->
        <div>
            <div class="grid grid-cols-2 gap-4">
                <img src="{{ asset('storage/images/1.jpg') }}" class="gallery-card" alt="Gallery 1">
                <img src="{{ asset('storage/images/2.jpg') }}" class="gallery-card" alt="Gallery 2">
                <img src="{{ asset('storage/images/3.jpg') }}" class="gallery-card" alt="Gallery 3">
                <img src="{{ asset('storage/images/4.jpg') }}" class="gallery-card" alt="Gallery 4">
            </div>
        </div>

        <!-- About Us (kanan) -->
        <div class="text-white">
            <h2 class="text-4xl font-bold mb-6">About Us</h2>
            <p class="mb-4 text-lg leading-relaxed">
                EcoSort AI adalah sistem cerdas berbasis kecerdasan buatan yang mampu 
                mendeteksi dan memilah jenis sampah secara otomatis melalui kamera.
            </p>
            <p class="text-lg leading-relaxed">
                Kami hadir untuk membantu menciptakan lingkungan yang lebih bersih,
                efisien, dan berkelanjutan dengan memanfaatkan teknologi AI.
            </p>
        </div>

    </div>
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
                    <img src="{{  asset('storage/images/recycle.png')}}" alt="Recycle" class="w-20 h-20">
                </div>
                <h3 class="font-bold text-gray-900 mb-3">Mengurangi kesulahan dalam pemilihan sampah manual</h3>
                <p class="text-gray-600 text-sm">Otomatisasi proses sortir sampah dengan akurasi tinggi</p>
            </div>

            <!-- Tujuan 2 -->
            <div
                class="bg-white border-l-4 border-green-700 rounded-lg p-6 shadow-sm hover:shadow-md transition text-center">
                <div class="flex justify-center mb-4">
                    <img src="{{  asset('storage/images/awarenes.png')}}" alt="Awareness" class="w-20 h-20">
                </div>
                <h3 class="font-bold text-gray-900 mb-3">Meningkatkan kesadaran masyarakat terhadap isu lingkungan</h3>
                <p class="text-gray-600 text-sm">Edukasi dan engagement untuk masa depan yang lebih hijau</p>
            </div>

            <!-- Tujuan 3 -->
            <div
                class="bg-white border-l-4 border-green-700 rounded-lg p-6 shadow-sm hover:shadow-md transition text-center">
                <div class="flex justify-center mb-4">
                    <img src="{{  asset('storage/images/technology.png')}}" alt="Technology" class="w-20 h-20">
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
        <button class="cta-btn">
            <span>Coba Sekarang!</span>
            <img src="{{ asset('storage/images/kamera.png') }}" alt="Kamera">
        </button>


        </div>
    </section>

<!-- Our Tim Section -->
<section class="bg-gray-50 min-h-[800px] py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900">Our Team</h2>
            <h3 class="text-3xl font-bold text-gray-900">Pretty Girl XII SIJA 1</h3>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
            <!-- Tim Member 1 - Gabriella -->
            <a href="https://www.instagram.com/gabysetiawan17?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank" rel="noopener noreferrer" 
               class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition transform hover:-translate-y-1 block no-underline">
                <div class="flex flex-col items-center p-6">
                    <img src="{{ asset('storage/images/gabe.jpg') }}" alt="Gabriella Fajar Setiawan"
                        class="w-32 h-32 object-cover rounded-full mb-4 border-4 border-green-200 shadow-md">
                    <h3 class="text-lg font-semibold text-gray-900">Gabriella Fajar Setiawan</h3>
                    <p class="text-sm text-gray-600">Project Leader</p>
                </div>
            </a>

            <!-- Tim Member 2 - Marcelina -->
            <a href="https://www.instagram.com/haycell._?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank" rel="noopener noreferrer" 
               class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition transform hover:-translate-y-1 block no-underline">
                <div class="flex flex-col items-center p-6">
                    <img src="{{ asset('storage/images/ceces.jpg') }}" alt="Marcelina Septya Safira"
                        class="w-32 h-32 object-cover rounded-full mb-4 border-4 border-green-200 shadow-md">
                    <h3 class="text-lg font-semibold text-gray-900">Marcelina Septya Safira</h3>
                    <p class="text-sm text-gray-600">BackEnd Development</p>
                </div>
            </a>

            <!-- Tim Member 3 - Nabila -->
            <a href="https://www.instagram.com/nbilare_?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank" rel="noopener noreferrer" 
               class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition transform hover:-translate-y-1 block no-underline">
                <div class="flex flex-col items-center p-6">
                    <img src="{{ asset('storage/images/kobil.jpg') }}" alt="Nabila Raisa Evelyna"
                        class="w-32 h-32 object-cover rounded-full mb-4 border-4 border-green-200 shadow-md">
                    <h3 class="text-lg font-semibold text-gray-900">Nabila Raisa Evelyna</h3>
                    <p class="text-sm text-gray-600">BackEnd Development</p>
                </div>
            </a>

            <!-- Tim Member 4 - Kayla -->
            <a href="https://www.instagram.com/kaylarrj?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank" rel="noopener noreferrer" 
               class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition transform hover:-translate-y-1 block no-underline">
                <div class="flex flex-col items-center p-6">
                    <img src="{{ asset('storage/images/kayla.jpg') }}" alt="Kayla Reyvani Junaidi"
                        class="w-32 h-32 object-cover rounded-full mb-4 border-4 border-green-200 shadow-md">
                    <h3 class="text-lg font-semibold text-gray-900">Kayla Reyvani Junaidi</h3>
                    <p class="text-sm text-gray-600">FrontEnd Development</p>
                </div>
            </a>

            <!-- Tim Member 5 - Larissa -->
            <a href="https://www.instagram.com/vkdnfflsk_?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank" rel="noopener noreferrer" 
               class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition transform hover:-translate-y-1 block no-underline">
                <div class="flex flex-col items-center p-6">
                    <img src="{{ asset('storage/images/laris.jpg') }}" alt="Larissa Paulina Christmas Hutauruk"
                        class="w-32 h-32 object-cover rounded-full mb-4 border-4 border-green-200 shadow-md">
                    <h3 class="text-lg font-semibold text-gray-900">Larissa Paulina Christmas Hutauruk</h3>
                    <p class="text-sm text-gray-600">FrontEnd Development</p>
                </div>
            </a>

            <!-- Tim Member 6 - Maudina -->
            <a href="https://www.instagram.com/mogiimud_?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank" rel="noopener noreferrer" 
               class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition transform hover:-translate-y-1 block no-underline">
                <div class="flex flex-col items-center p-6">
                    <img src="{{ asset('storage/images/modi.jpg') }}" alt="Maudina Mey Nur Hidayah"
                        class="w-32 h-32 object-cover rounded-full mb-4 border-4 border-green-200 shadow-md">
                    <h3 class="text-lg font-semibold text-gray-900">Maudina Mey Nur Hidayah</h3>
                    <p class="text-sm text-gray-600">UI/UX Designer</p>
                </div>
            </a>
        </div>
    </div>
</section>
@endsection
