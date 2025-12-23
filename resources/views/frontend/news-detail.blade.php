<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News</title>
    {{-- Link Icon --}}
    <link rel="icon" href="{{ asset('image/logo.png') }}">
    <!-- Link CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Tailwind CSS CDN for styling -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Custom CSS for fine-tuning and specific layout not easily done in Tailwind -->

</head>

<body>
    <section id="team-page" class="relative w-full bg-[#FFFFFF]" style="background: #FFFFFF;">
        <!-- Header Wrapper -->
        <header class="absolute top-0 left-0 w-full z-50">
            <!-- Top Info Bar -->
            <div class="lg:flex hidden flex-col-3 lg:flex-row justify-end lg:space-x-6 items-center px-4 lg:px-8 h-auto lg:h-[54px] 
        text-[#1E3E0F] text-xs sm:text-sm lg:mt-2 lg:mr-[150px] space-y-2 lg:space-y-0 gap-2">
                {{-- Hiden --}}
                <div class="flex items-center space-x-2 hidden">
                    <img src="{{ asset('image/time.png') }}" alt="" class="w-4 h-4">
                    <p>Monday - Friday 8am - 5pm</p>
                </div>
                <!-- Time -->
                <div class="flex items-center space-x-2">
                    <img src="{{ asset('image/time.png') }}" alt="" class="w-[12px] h-[12px] brightness-0 invert">
                    <p class="text-white">Monday - Friday 8am - 5pm</p>
                </div>
                <!-- Email -->
                <div class="flex items-center space-x-2">
                    <img src="{{ asset('image/gmail.png') }}" alt="" class="w-[12px] h-[12px] brightness-0 invert">
                    <p class="text-white">Sam.sovannarith.ra@gmail.com</p>
                </div>
                <!-- Phone -->
                <div class="flex items-center space-x-2">
                    <img src="{{ asset('image/phone.png') }}" alt="" class="w-[12px] h-[12px] brightness-0 invert">
                    <p class="text-white">016/017 43 02 02</p>
                </div>
                {{-- Social icon --}}
                <div class="xl:hidden lg:flex gap-4">
                    <a href="https://t.me/Kaksekar_Digital">
                        <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10.5 21C16.299 21 21 16.299 21 10.5C21 4.70101 16.299 0 10.5 0C4.70101 0 0 4.70101 0 10.5C0 16.299 4.70101 21 10.5 21Z"
                                fill="#FFFFFF" />
                            <path
                                d="M4.80498 10.2726L14.9287 6.36918C15.3986 6.19943 15.809 6.48381 15.6567 7.19431L15.6576 7.19343L13.9338 15.3143C13.8061 15.8901 13.464 16.0301 12.9853 15.7588L10.3603 13.8242L9.09422 15.0439C8.95422 15.1839 8.8361 15.3021 8.56485 15.3021L8.75122 12.6307L13.6162 8.23556C13.828 8.04918 13.569 7.94418 13.2898 8.12968L7.27773 11.9149L4.68598 11.1064C4.12335 10.9279 4.1111 10.5438 4.80498 10.2726Z"
                                fill="#1E3E0F" />
                        </svg>
                    </a>
                    <a href="https://www.facebook.com/kaksekarDigital">
                        <svg width="22" height="21" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10.6367 0C4.84704 0 0.136719 4.71032 0.136719 10.5C0.136719 16.2893 4.84704 21 10.6367 21C16.426 21 21.1367 16.2893 21.1367 10.5C21.1367 4.71032 16.4268 0 10.6367 0ZM13.248 10.8697H11.5397V16.9583H9.00839C9.00839 16.9583 9.00839 13.6315 9.00839 10.8697H7.80511V8.71772H9.00839V7.32581C9.00839 6.32893 9.48208 4.77123 11.563 4.77123L13.4387 4.77842V6.86734C13.4387 6.86734 12.2989 6.86734 12.0773 6.86734C11.8556 6.86734 11.5405 6.97815 11.5405 7.45354V8.71814H13.4692L13.248 10.8697Z"
                                fill="#FFFFFF" />
                        </svg>

                    </a>
                    <a href="https://www.youtube.com/channel/UC7dMOGFP5ZMsIuHi1pvKjRA">
                        <svg width="22" height="21" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M21.7244 10.4379C21.7244 4.6732 17.0512 0 11.2865 0C5.52183 0 0.848633 4.6732 0.848633 10.4379C0.848633 16.2026 5.52183 20.8758 11.2865 20.8758C17.0512 20.8758 21.7244 16.2026 21.7244 10.4379Z"
                                fill="#D7EDF1" />
                            <path
                                d="M16.0752 9.50637C16.7419 9.89127 16.7419 10.8535 16.0752 11.2384L9.73999 14.896C9.07333 15.2809 8.23999 14.7998 8.23999 14.03L8.23999 6.71476C8.23999 5.94496 9.07333 5.46384 9.73999 5.84874L16.0752 9.50637Z"
                                fill="#1E3E0F" />
                        </svg>

                    </a>
                    <a href="https://www.tiktok.com/@kaksekardigital?_t=ZS-8ythEex1VWk&_r=1">
                        <svg width="22" height="21" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10.959 0C5.16089 0 0.458984 4.70191 0.458984 10.5C0.458984 16.2981 5.16089 21 10.959 21C16.7571 21 21.459 16.2981 21.459 10.5C21.459 4.70191 16.7571 0 10.959 0ZM16.2266 8.03385V9.45558C15.5562 9.45582 14.9049 9.32445 14.2905 9.06527C13.8955 8.8985 13.5275 8.68362 13.1909 8.42395L13.2009 12.8C13.1967 13.7854 12.8069 14.7113 12.1013 15.4087C11.5271 15.9763 10.7994 16.3373 10.0108 16.4542C9.82548 16.4816 9.63689 16.4957 9.44616 16.4957C8.60194 16.4957 7.80045 16.2222 7.14482 15.7176C7.02144 15.6226 6.90344 15.5196 6.7911 15.4087C6.0264 14.6529 5.63208 13.6285 5.69848 12.5509C5.74914 11.7307 6.07755 10.9484 6.62503 10.3352C7.34936 9.52387 8.3627 9.07352 9.44616 9.07352C9.63689 9.07352 9.82548 9.08783 10.0108 9.11527V9.64093V11.1032C9.83507 11.0453 9.64743 11.0134 9.45203 11.0134C8.46216 11.0134 7.66133 11.821 7.67613 12.8116C7.68553 13.4454 8.03174 13.9995 8.54238 14.3049C8.78237 14.4484 9.05844 14.5373 9.35306 14.5535C9.58389 14.5662 9.80554 14.534 10.0108 14.4663C10.718 14.2326 11.2282 13.5683 11.2282 12.7849L11.2305 9.85441V4.50434H13.1885C13.1904 4.69834 13.21 4.88763 13.2466 5.07105C13.3944 5.81347 13.8129 6.45758 14.3953 6.8967C14.9032 7.27974 15.5355 7.5068 16.221 7.5068C16.2214 7.5068 16.2271 7.5068 16.2266 7.50635V8.03385H16.2266Z"
                                fill="#FFFFFF" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Navigation -->
            <div class="flex items-center justify-between lg:justify-center px-4 lg:px-8 h-[70px] lg:h-[98px] 
    shadow-md rounded-md"
                style="background: radial-gradient(50% 133.17% at 50% 50%, #FFFFFF 33.72%, rgba(255, 255, 255, 0.3) 100%);">

                <!-- Logo + Navbar in one row (Left) -->
                <div class="flex items-center xl:space-x-10 space-x-2">
                    <!-- Logo -->
                    <div class="flex items-center">
                        <img src="{{ asset('image/logo.png') }}" alt="Logo"
                            class="w-[56px] h-[56px] lg:w-[76px] lg:h-[76px]">
                    </div>

                    <!-- Navbar (Desktop) -->
                    <nav class="hidden lg:flex text-[#1E3E0F] font-normal items-center">
                        <ul class="flex space-x-6 font-[15px] lg:font-[17px] items-center gap-3 xl:gap-6">
                            <li>
                                <a href="{{ route('home') }}" class="hover:text-[#4FA428] ">Home</a>
                            </li>
                            <li><a href="{{ route('about') }}" class="hover:text-[#4FA428]">About
                                    Us</a></li>
                            <li><a href="{{ route('product') }}" class="hover:text-[#4FA428]">Our Products</a></li>
                            <li><a href="{{ route('team') }}" class="hover:text-[#4FA428]">Our Team</a></li>
                            <li class="mt-[-10px]"><a href="{{ route('news') }}" class="px-4 lg:w-[106px] lg:h-[98px] flex items-center justify-center 
                        rounded-bl-[12px] rounded-tr-[12px] 
                        bg-gradient-to-b from-[#4FA428] to-[#1E3E0F] 
                        text-white font-medium">News</a></li>
                            <li><a href="{{ route('publication') }}" class="hover:text-[#4FA428]">Our Publication</a>
                            </li>
                            <li><a href="{{ route('career') }}" class="hover:text-[#4FA428]">Career</a></li>
                            <li><a href="{{ route('contact') }}" class="hover:text-[#4FA428]">Contact Us</a></li>
                            <!-- Social -->
                            <li class="xl:flex lg:hidden gap-4 ">
                                <a href="https://t.me/Kaksekar_Digital"><img src="{{ asset('image/telagram.png') }}"
                                        alt="" class="w-5 h-5 rounded-full" /></a>
                                <a href="https://www.facebook.com/kaksekarDigital"><img
                                        src="{{ asset('image/fb.png') }}" alt="" class="w-5 h-5 rounded-full" /></a>
                                <a href="https://www.youtube.com/channel/UC7dMOGFP5ZMsIuHi1pvKjRA"><img
                                        src="{{ asset('image/vdo.png') }}" alt="" class="w-5 h-5 rounded-full" /></a>
                                <a href="https://www.tiktok.com/@kaksekardigital?_t=ZS-8ythEex1VWk&_r=1"><img
                                        src="{{ asset('image/tiktok.png') }}" alt="" class="w-5 h-5 rounded-full" /></a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <!-- Mobile Menu Button -->
                <div class="block lg:hidden">
                    <button id="menuButton"
                        class="text-[#1E3E0F] text-3xl focus:outline-none w-[50px] h-[50px] flex items-center justify-center">
                        <!-- Menu Icon -->
                        <img id="menuIcon" src="{{ asset('image/icon/button-mobail.png') }}" alt="menu"
                            class="w-[25px] h-[25px]">
                        <!-- Close Icon (hidden by default) -->
                        <img id="closeIcon" src="{{ asset('image/icon/close.png') }}" alt="close"
                            class="w-[25px] h-[25px] hidden">
                    </button>
                </div>
            </div>


            <!-- Mobile Dropdown Menu -->
            <nav id="mobileMenu" class="fixed top-0 right-0 w-72 h-full text-[#1E3E0F] text-base font-medium shadow-lg 
    transform translate-x-full transition-transform duration-300 ease-in-out lg:hidden z-50 flex flex-col 
    shadow-md bg-white overflow-y-auto mt-[70px]">

                <!-- Menu Links -->
                <div class="flex flex-col px-6 space-y-4 mt-[10px]">
                    <a href="{{ route('home') }}" class="py-2 hover:text-[#4FA428]">Home</a>
                    <a href="{{ route('about') }}" class="py-2 hover:text-[#4FA428]">About Us</a>
                    <a href="{{ route('product') }}" class="py-2 hover:text-[#4FA428]">Our Products</a>
                    <a href="{{ route('team') }}" class="py-2 hover:text-[#4FA428]">Our Team</a>
                    <a href="{{ route('news') }}" class="py-2 hover:text-[#4FA428]">News</a>
                    <a href="{{ route('publication') }}" class="py-2 hover:text-[#4FA428]">Our Publication</a>
                    <a href="{{ route('career') }}" class="py-2 hover:text-[#4FA428]">Career</a>
                    <a href="{{ route('contact') }}" class="py-2 hover:text-[#4FA428]">Contact Us</a>

                    <!-- Time -->
                    <div class="flex items-center gap-2 pt-10">
                        <img src="{{ asset('image/time.png') }}" alt="" class="w-[12px] h-[12px]">
                        <p class="text-black">Monday - Friday 8am - 5pm</p>
                    </div>
                    <!-- Email -->
                    <div class="flex items-center gap-2">
                        <img src="{{ asset('image/gmail.png') }}" alt="" class="w-[12px] h-[12px]">
                        <p class="text-black">Sam.sovannarith.ra@gmail.com</p>
                    </div>
                    <!-- Phone -->
                    <div class="flex items-center gap-2">
                        <img src="{{ asset('image/phone.png') }}" alt="" class="w-[12px] h-[12px]">
                        <p class="text-black">016/017 43 02 02</p>
                    </div>
                    <div class="flex gap-4">
                        <a href="https://t.me/Kaksekar_Digital"><img src="{{ asset('image/telagram.png') }}" alt=""
                                class="w-5 h-5 rounded-full" /></a>
                        <a href="https://www.facebook.com/kaksekarDigital"><img src="{{ asset('image/fb.png') }}" alt=""
                                class="w-5 h-5 rounded-full" /></a>
                        <a href="https://www.youtube.com/channel/UC7dMOGFP5ZMsIuHi1pvKjRA"><img
                                src="{{ asset('image/vdo.png') }}" alt="" class="w-5 h-5 rounded-full" /></a>
                        <a href="https://www.tiktok.com/@kaksekardigital?_t=ZS-8ythEex1VWk&_r=1"><img
                                src="{{ asset('image/tiktok.png') }}" alt="" class="w-5 h-5 rounded-full" /></a>
                    </div>
                </div>
            </nav>


        </header>
        <!-- Hero Section -->
        <div class="relative w-full min-h-[600px] md:min-h-[800px] lg:min-h-[1000px] flex flex-col justify-center items-center bg-cover bg-center text-white"
            style="background-image: url('{{ asset('image/news.jpg') }}');">

            <!-- Title -->
            <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-[100px] font-bold text-center px-4">
                Activities
            </h1>
            <div class="w-20 sm:w-28 md:w-36 lg:w-[154px] h-1 sm:h-1.5 md:h-2 bg-white mt-4"></div>

            <!-- Description -->
            <div class="mt-8 sm:mt-10 md:mt-12 w-11/12 sm:w-4/5 md:w-[700px] lg:w-[900px] text-center px-4">
                <p class="text-base sm:text-lg md:text-xl lg:text-[20px] font-normal text-pretty">
                    Our enterprise is supported by a dedicated team of founders, technical staff, and experts with
                    extensive experience and knowledge in the fields of healthcare, pharmaceutical science, agriculture,
                    and business management.
                </p>
            </div>

            <!-- Bottom Layer -->
            <div class="lg:flex hidden absolute top-0 left-0 w-full">
                <img src="{{ asset('image/layer-team.png') }}" alt="Layer" class="w-full h-auto object-cover">
            </div>
        </div>

        <!-- Additional Description -->
        <section class="py-8 px-4 text-center bg-transparent">
            <p class="text-[#1E3E0F] text-sm sm:text-base md:text-base lg:text-base line-clamp-2 max-w-2xl mx-auto">
                We work together in unity and with a shared vision to drive the future of the agricultural sector toward
                sustainability and transparency.
            </p>
        </section>

    </section>
    {{-- Read details News Content management system --}}
    <section id="cms-news" class="w-full max-w-[1373px] mx-auto py-10">
        <div class="news flex flex-col gap-6">



            @foreach ($news as $showNews)
            @php
            $images = json_decode($showNews->images); // convert JSON string to array
            @endphp
            <div class="grid grid-cols-2 gap-4 mb-6">
                @foreach($images as $img)
                <div class="min-w-[150px] h-[250px]">
                    <img src="{{ asset($img) }}" alt="" class="w-full h-full object-cover rounded-xl">
                </div>
                @endforeach
            </div>
            @endforeach

            {{-- @forelse ($news as $index => $experince)
                @php
                    $images = json_decode($experince->images);
                @endphp
                @foreach ($images as $img)
                    <div class="swiper-slide w-full h-full">
                        <img src="{{ asset($img) }}" loading="lazy" alt=""
                            class="w-full h-[300px] object-cover cursor-pointer">
                    </div>
                @endforeach
            @empty
                <div class="md:col-span-12 text-center py-10">
                    <p>No projects found</p>
                </div>
            @endforelse --}}

            {{-- Loop 6 images per block, multiple blocks if >6 --}}
            {{-- @for($i = 0; $i < $imageCount; $i +=6) @php $blockImages=$news->images->slice($i, 6); @endphp

                <div class="grid grid-cols-2 gap-4 mb-6">
                    @foreach($blockImages as $img)
                    <div class="min-w-[150px] h-[250px]">
                        <img src="{{ asset($img->image) }}" alt="{{ $news->title }}"
                            class="w-full h-full object-cover rounded-xl">
                    </div>
                    @endforeach
                </div>
                @endfor --}}

                {{-- Text Description --}}
                <div class="text-desc mt-5">
                    <p class="text-[20px] text-[#000000] leading-relaxed">
                        <span class="font-bold text-[#1E3E0F]">Initiative:</span> {{ $news->description }}
                    </p>
                </div>

        </div>
    </section>

    {{-- Innovation Nature --}}
    <section id="innovation-nature"
        class="w-full h-[553px] bg-[url('{{ asset('image/innovation.png') }}')] bg-cover bg-center flex items-center justify-center text-white relative">
        <!-- Overlay -->
        <div
            class="absolute inset-0 bg-[url('{{ asset('image/back_innovation.png') }}')] bg-cover bg-center opacity-80">
        </div> <!-- Text content -->
        <div class="relative z-10 text-center max-w-2xl"> <!-- White Line Top -->
            <div class="w-[50px] h-[4px] bg-[#FFFFFF] mx-auto mb-10"></div>
            <p class="text-2xl font-semibold leading-relaxed"> Innovation from Nature <br> For a Healthier and
                Sustainable Life. </p> <!-- White Line Bottom -->
            <div class="w-[50px] h-[4px] bg-[#FFFFFF] mx-auto mt-10"></div>
        </div>
    </section>

    {{-- Section Footer --}}
    <section class="contents">
        <footer class="relative bg-gradient-to-b from-[#4FA428] to-[#1E3E0F] text-white px-8 md:px-16 lg:px-24 py-12">
            <div class="grid grid-cols-1 md:grid-cols-5 gap-10 mt-[50px]">

                <!-- Column 1: Logo -->
                <div class="flex justify-center md:justify-start ml-[60px]">
                    <img src="{{ asset('image/logo_footer.png') }}" alt="Logo"
                        class="w-[115px] h-[116px] object-contain">
                </div>

                <!-- Column 2: About -->
                <div class="mr-60px">
                    <p class="text-sm w-[310px] font-semibold leading-relaxed">
                        SRUN CHHLAT CAMBO AGRIBUSINESS (S.C.C.A) was established with the vision to create natural
                        health
                        products that enhance the well-being of Cambodian people while supporting the livelihoods of
                        local
                        farmers.
                    </p>
                    <p class="text-xs mt-2">
                        The enterprise was founded on October 8, 2020, and officially registered as a commercial
                        enterprise
                        on January 11, 2021.
                    </p>

                    <!-- Social icons -->
                    <h4 class="mt-6 font-bold">Follow Us</h4>
                    <div class="flex space-x-3 mt-3 gap-5">
                        <a href="https://t.me/Kaksekar_Digital"><img src="{{ asset('image/icon-contact/le-con.png') }}"
                                alt="telegram" class="w-8 h-8"></a>
                        <a href="https://www.facebook.com/kaksekarDigital"><img
                                src="{{ asset('image/icon-contact/fb.png') }}" alt="facebook" class="w-8 h-8"></a>
                        <a href="https://youtube.com/channel/UC7dMOGFP5ZMsIuHi1pvKjRA?feature=shared"><img
                                src="{{ asset('image/icon-contact/vdo.png') }}" alt="video" class="w-8 h-8"></a>
                        <a href="https://www.tiktok.com/@kaksekardigital?_t=ZS-8ythEex1VWk&_r=1"><img
                                src="{{ asset('image/icon-contact/tiktok.png') }}" alt="tiktok" class="w-8 h-8"></a>
                    </div>
                </div>

                <!-- Column 3: Information -->
                <div class=" ml-[80px]">
                    <h4 class="font-bold mb-4">Information</h4>
                    <ul class="space-y-2">
                        <li><a href="{{ route('home') }}" class="hover:underline">Home</a></li>
                        <li><a href="{{ route('about') }}" class="hover:underline">About Us</a></li>
                        <li><a href="{{ route('product') }}" class="hover:underline">Our Products</a></li>
                        <li><a href="{{ route('team') }}" class="hover:underline">Our Team</a></li>
                        <li><a href="{{ route('news') }}" class="hover:underline">Activities</a></li>
                        <li><a href="{{ route('contact') }}" class="hover:underline">Contact Us</a></li>
                    </ul>
                </div>

                <!-- Column 4: Contact -->
                <div>
                    <h4 class="font-bold mb-4">SRUN CHHLAT CAMBO AGRIBUSINESS</h4>
                    <p class="text-sm leading-relaxed">
                        Prey Pring Khang Tboung 1 Village, <br>
                        Chaom Chao 2 Sangkat, Pou Senchey District, <br>
                        Phnom Penh, Cambodia
                    </p>
                    <p class="mt-2">010 30 48 39</p>
                    <p class="mt-2"><a href="mailto:cambo.agribusiness@gmail.com"
                            class="hover:underline">cambo.agribusiness@gmail.com</a></p>
                    <p><a href="mailto:kkaksakor@gmail.com" class="hover:underline">kkaksakor@gmail.com</a></p>
                </div>

                <!-- Column 5: Visit Us + Map -->
                <div>
                    <h4 class="font-bold mb-4">Visit Us</h4>
                    <p class="text-sm"><strong>Working Time:</strong> 6:30 - 9:00am</p>
                    <p class="text-sm mb-4"><strong>Day:</strong> Everyday</p>
                    <h4 class="font-bold mb-2">Map</h4>
                    <div class="w-full h-28 rounded-lg overflow-hidden bg-gray-300">
                        <a href="https://maps.app.goo.gl/ospz4Egi3MPaZgL37?g_st=com.google.maps.preview.copy">
                            <img src="{{ asset('image/map.png') }}" alt="Map" class="w-full h-full object-cover">
                        </a>
                    </div>
                </div>
            </div>

            <!-- Bottom Copyright -->
            <div class="py-2 px-4 text-center text-sm font-bold text-white relative top-10">
                All rights reserved <span id="year"></span>
            </div>
        </footer>
    </section>
    <section class="contents">
        <div class="back-under relative left-1/2 -translate-x-1/2 w-full h-[78px] inset-0 -z-10">
            <img src="{{ asset('image/back-bt-footer.png') }}" alt="" class="w-full object-cover mt-[-40px]" />
        </div>
    </section>
</body>

</html>
<!-- Font Awesome CDN (for icons) -->
<script src="https://kit.fontawesome.com/yourkitid.js" crossorigin="anonymous"></script>
<script src="{{ asset('js/script.js') }}"></script>
<script>
    document.getElementById("year").textContent = new Date().getFullYear();

    // Responsive
    document.addEventListener("DOMContentLoaded", function () {
        const menuButton = document.getElementById('menuButton');
        const mobileMenu = document.getElementById('mobileMenu');
        const menuIcon = document.getElementById('menuIcon');
        const closeIcon = document.getElementById('closeIcon');

        menuButton.addEventListener('click', () => {
            // Slide menu
            mobileMenu.classList.toggle('translate-x-full');
            mobileMenu.classList.toggle('translate-x-0');

            // Swap icons
            menuIcon.classList.toggle('hidden');
            closeIcon.classList.toggle('hidden');
            // Prevent body scroll when menu open
            if (mobileMenu.classList.contains('translate-x-0')) {
                document.body.style.overflow = 'hidden';
            } else {
                document.body.style.overflow = '';
            }
        });
    });
</script>