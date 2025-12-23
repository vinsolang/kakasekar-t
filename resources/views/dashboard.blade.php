<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<!-- Contact Us Section -->

 <section id="business" class="relative px-4 py-12 md:px-10 lg:px-20">
        <div class="business">
            <!-- Title -->
            <div class="text-center text-[#1E3E0F] font-bold mb-8">
                <h1 class="text-2xl sm:text-3xl md:text-4xl">Business Registration Documents</h1>
            </div>

            <!-- Certificates -->
            <div class="flex flex-col lg:flex-row lg:flex-nowrap gap-4 lg:gap-6 overflow-x-auto">
                @foreach ($showCertificate as $certi)
                    <div class="flex-shrink-0 w-full lg:w-auto">
                        <img src="../../assets/certifiate/{{ $certi->thumbnail }}" alt="Certificate"
                            class="h-[340px] lg:h-[340px] w-auto object-contain rounded-lg" />
                    </div>
                @endforeach
            </div>
        </div>
    </section>

 
    
     {{-- Block card news --}}
    {{-- <section id="card-news" class="relative py-16 sm:py-20">
        <div class="container mx-auto flex flex-col gap-16 px-4 sm:px-6 lg:px-8">

            <!-- Block 1: Image Left / Text Right -->
            <div class="flex flex-col lg:flex-row items-center gap-8 lg:gap-12">
                <!-- Image with mask -->
                <div class="relative w-full lg:w-1/2 h-[250px] sm:h-[350px] md:h-[450px] lg:h-[600px] xl:h-[717px]">
                    <img src="{{ asset('image/pic-news.jpg') }}" alt="Photo News" class="w-full h-full object-cover"
                        style="
                        -webkit-mask-image: url('{{ asset('image/vision.png') }}');
                        -webkit-mask-repeat: no-repeat;
                        -webkit-mask-position: center;
                        -webkit-mask-size: contain;
                        mask-image: url('{{ asset('image/vision.png') }}');
                        mask-repeat: no-repeat;
                        mask-position: center;
                        mask-size: contain;
                    ">
                </div>

                <!-- Text -->
                <div class="w-full lg:w-1/2 max-w-xl text-center lg:text-left">
                    <p
                        class="text-base sm:text-lg md:text-xl font-medium mb-6 leading-relaxed text-[#000000] text-clamp-4">
                        The Connexion center in Koh Pich, 'Smart Entrepreneurs Village 718',
                        on July 19 and 20, 2025.
                    </p>
                    <div class="text-center lg:text-left">
                        <button class="w-[160px] sm:w-[200px] h-[44px] sm:h-[50px] md:w-[214px] md:h-[54px]
                        bg-gradient-to-r from-[#4FA428] to-[#1E3E0F]
                        text-white font-semibold rounded-full shadow-md transition hover:opacity-90">
                            Read Detail
                        </button>
                    </div>
                </div>
            </div>

            <!-- Block 2: Image Right / Text Left -->
            <div class="flex flex-col lg:flex-row-reverse items-center gap-8 lg:gap-12">
                <div class="relative w-full lg:w-1/2 h-[250px] sm:h-[350px] md:h-[450px] lg:h-[600px] xl:h-[717px]">
                    <img src="{{ asset('image/pic-news.jpg') }}" alt="Photo News" class="w-full h-full object-cover"
                        style="
                        -webkit-mask-image: url('{{ asset('image/vision.png') }}');
                        -webkit-mask-repeat: no-repeat;
                        -webkit-mask-position: center;
                        -webkit-mask-size: contain;
                        mask-image: url('{{ asset('image/vision.png') }}');
                        mask-repeat: no-repeat;
                        mask-position: center;
                        mask-size: contain;
                    ">
                </div>
                <div class="w-full lg:w-1/2 max-w-xl text-center lg:text-left">
                    <p class="text-base sm:text-lg md:text-xl font-medium mb-6 leading-relaxed text-[#000000]">
                        The Connexion center in Koh Pich, 'Smart Entrepreneurs Village 718',
                        on July 19 and 20, 2025.
                    </p>
                    <div class="text-center lg:text-left">
                        <button class="w-[160px] sm:w-[200px] h-[44px] sm:h-[50px] md:w-[214px] md:h-[54px]
                        bg-gradient-to-r from-[#4FA428] to-[#1E3E0F]
                        text-white font-semibold rounded-full shadow-md transition hover:opacity-90">
                            Read Detail
                        </button>
                    </div>
                </div>
            </div>

            <!-- Block 3: Image Left / Text Right -->
            <div class="flex flex-col lg:flex-row items-center gap-8 lg:gap-12">
                <div class="relative w-full lg:w-1/2 h-[250px] sm:h-[350px] md:h-[450px] lg:h-[600px] xl:h-[717px]">
                    <img src="{{ asset('image/pic-news.jpg') }}" alt="Photo News" class="w-full h-full object-cover"
                        style="
                        -webkit-mask-image: url('{{ asset('image/vision.png') }}');
                        -webkit-mask-repeat: no-repeat;
                        -webkit-mask-position: center;
                        -webkit-mask-size: contain;
                        mask-image: url('{{ asset('image/vision.png') }}');
                        mask-repeat: no-repeat;
                        mask-position: center;
                        mask-size: contain;
                    ">
                </div>
                <div class="w-full lg:w-1/2 max-w-xl text-center lg:text-left">
                    <p class="text-base sm:text-lg md:text-xl font-medium mb-6 leading-relaxed text-[#000000]">
                        The Connexion center in Koh Pich, 'Smart Entrepreneurs Village 718',
                        on July 19 and 20, 2025.
                    </p>
                    <div class="text-center lg:text-left">
                        <button class="w-[160px] sm:w-[200px] h-[44px] sm:h-[50px] md:w-[214px] md:h-[54px]
                        bg-gradient-to-r from-[#4FA428] to-[#1E3E0F]
                        text-white font-semibold rounded-full shadow-md transition hover:opacity-90">
                            Read Detail
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </section> --}}
   
 {{-- Read details News Content management system --}}
    <section id="cms-news" class="hidden w-[1373px] h-auto mx-auto">
        <div class="news flex flex-col gap-4 relative">

            {{-- Block new 1 (70% / 30%) --}}
            <div class="news-block-1 w-full h-[492px] flex gap-4">
                <div class="block-1 w-[70%] h-full">
                    <img src="https://placehold.co/960x492" alt="News Image 1"
                        class="w-full h-full object-cover rounded-xl">
                </div>
                <div class="block-2 w-[30%] h-full">
                    <img src="https://placehold.co/412x492" alt="News Image 1B"
                        class="w-full h-full object-cover rounded-xl">
                </div>
            </div>

            {{-- Block new 2 (1 full) --}}
            <div class="news-block-2 w-full h-[492px]">
                <img src="https://placehold.co/1372x492" alt="News Image 2"
                    class="w-full h-full object-cover rounded-xl">
            </div>

            {{-- Block new 3 (50% / 50%) --}}
            <div class="news-block-3 w-full h-[492px] flex gap-4">
                <div class="block-1 w-[50%] h-full">
                    <img src="https://placehold.co/686x492" alt="News Image 3A"
                        class="w-full h-full object-cover rounded-xl">
                </div>
                <div class="block-2 w-[50%] h-full">
                    <img src="https://placehold.co/686x492" alt="News Image 3B"
                        class="w-full h-full object-cover rounded-xl">
                </div>
            </div>

            {{-- Block new 4 (30% / 70%) --}}
            <div class="news-block-4 w-full h-[492px] flex gap-4">
                <div class="block-1 w-[30%] h-full">
                    <img src="https://placehold.co/412x492" alt="News Image 4A"
                        class="w-full h-full object-cover rounded-xl">
                </div>
                <div class="block-2 w-[70%] h-full">
                    <img src="https://placehold.co/960x492" alt="News Image 4B"
                        class="w-full h-full object-cover rounded-xl">
                </div>
            </div>

            {{-- Text Section --}}
            <div class="text-desc mt-5 flex">
                <h2 class="text-[27px] text-[#0F4634] font-bold">Initiative: </h2>
                <p class="text-[27px] text-[#000000] ml-2">
                    Health Fund - A group of professors, students, product brand teams, farmers, pharmacies,
                    and the Khmer citizens have brought charitable aid including food supplies, medicines,
                    health products, educational materials, and other necessities to the frontline troops
                    and displaced citizens in Udor Meanchey province. Thank you to all donors who have
                    contributed to this charitable aid for national cause and the integrity of the territory.
                </p>
            </div>
        </div>
    </section>  
