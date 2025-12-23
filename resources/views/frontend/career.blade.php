<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"></html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@lang('messages.career')</title>
    {{-- Link Icon --}}
    <link rel="icon" href="{{ asset('image/logo.png') }}">
    <!-- Link CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Tailwind CSS CDN for styling -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Custom CSS for fine-tuning and specific layout not easily done in Tailwind -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kantumruy+Pro:ital,wght@0,100..700;1,100..700&display=swap"
        rel="stylesheet">
    <style>
        body{
            font-family: "Kantumruy Pro", sans-serif;
            font-optical-sizing: auto;
        }
    </style>

</head>

<body class="overflow-x-hidden">
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
                <div class="flex items-center space-x-2">
                    <img src="{{ asset('image/time.png') }}" alt="" class="w-[12px] h-[12px] brightness-0 invert">
                     <p class="text-white">@lang('messages.mon') - @lang('messages.fri') @lang('messages.mor') -
                        @lang('messages.ever')
                    </p>
                </div>
                <!-- Email -->
                <div class="flex items-center space-x-2">
                    <img src="{{ asset('image/gmail.png') }}" alt="" class="w-[12px] h-[12px] brightness-0 invert">
                    <p class="text-white">kkaksakor@gmail.com</p>
                </div>
                <!-- Phone -->
                <div class="flex items-center space-x-2">
                    <img src="{{ asset('image/phone.png') }}" alt="" class="w-[12px] h-[12px] brightness-0 invert">
                    <p class="text-white">010 304 839</p>
                </div>
                {{--Drop Switch Language --}}
                <div>
                    @component('components.translator')
                    @endcomponent
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
                    <nav class="hidden lg:flex text-[#1E3E0F] font-medium items-center">
                        <ul class="flex flex-wrap justify-center gap-4 space-x-4 lg:gap-4 xl:gap-6 text-[15px] lg:text-[16px] items-center">
                            <li>
                                <a href="{{ route('home') }}" class="hover:text-[#4FA428] ">@lang('messages.home')</a>
                            </li>
                            <li><a href="{{ route('about') }}" class="hover:text-[#4FA428]">@lang('messages.about_Us')
                                    </a></li>
                            <li><a href="{{ route('product') }}" class="hover:text-[#4FA428]">@lang('messages.our_products')</a></li>
                            <li><a href="{{ route('team') }}" class="hover:text-[#4FA428]">@lang('messages.our_team')</a></li>
                            <li class="relative group">
                                <a href="{{ route('activities') }}">
                                    <button class="hover:text-[#4FA428] flex items-center focus:outline-none">
                                        @lang('messages.activities')
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="w-4 h-4 ml-1 transition-transform duration-200 group-hover:rotate-180"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 9l-7 7-7-7" />
                                        </svg>
                                    </button>
                                </a>

                                <!-- Dropdown Menu -->
                                <ul class="absolute left-0 invisible group-hover:visible opacity-0 group-hover:opacity-100 transition-all duration-200 bg-white shadow-md rounded-md mt-2 w-[110px] z-50"
                                    onmouseenter="this.classList.add('visible','opacity-100')"
                                    onmouseleave="this.classList.remove('visible','opacity-100')">
                                    <li>
                                        <a href="{{ route('event') }}"
                                            class="block px-4 py-2 text-gray-700 hover:bg-gradient-to-b from-[#4FA428] to-[#1E3E0F] hover:text-white rounded-t-md">
                                            @lang('messages.event')
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('news') }}"
                                            class="block px-4 py-2 text-gray-700 hover:bg-gradient-to-b from-[#4FA428] to-[#1E3E0F] hover:text-white rounded-b-md">
                                            @lang('messages.news')
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="{{ route('publication') }}" class="hover:text-[#4FA428]">@lang('messages.our_publication')</a>
                            </li>
                            <li class="mt-[-10px]"><a href="{{ route('career') }}" class="px-4 lg:w-[120px] lg:h-[98px] flex items-center justify-center 
                        rounded-bl-[12px] rounded-tr-[12px] 
                        bg-gradient-to-b from-[#4FA428] to-[#1E3E0F] 
                        text-white font-medium">@lang('messages.career')</a></li>
                            <li><a href="{{ route('contact') }}" class="hover:text-[#4FA428]">@lang('messages.contact_us')</a></li>
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

                <!-- Mobile Top Row -->
                <div class="flex lg:hidden items-center justify-between px-3">

                    <!-- Menu Button -->
                    <button id="menuButton" class="relative z-[1000] w-10 h-10 flex items-center justify-center">
                        <img id="menuIcon" src="{{ asset('image/icon/button-mobail.png') }}" class="w-6 h-6">
                        <img id="closeIcon" src="{{ asset('image/icon/close.png') }}" class="w-6 h-6 hidden">
                    </button>

                    <!-- Language Dropdown -->
                     @component('components.lang_mobile')
                    @endcomponent
                </div>
            </div>


            <!-- Mobile Dropdown Menu -->
             <nav id="mobileMenu" class="fixed top-0 right-0 w-72 h-full text-[#1E3E0F] text-base font-medium shadow-lg 
    transform translate-x-full transition-transform duration-300 ease-in-out lg:hidden z-50 flex flex-col 
    shadow-md bg-white overflow-y-auto mt-[70px]">

                <!-- Menu Links -->
                <div class="flex flex-col px-6 space-y-2">
                    <a href="{{ route('home') }}" class="py-2 hover:text-[#4FA428]">@lang('messages.home')</a>
                    <a href="{{ route('about') }}" class="py-2 hover:text-[#4FA428]">@lang('messages.about_Us')</a>
                    <a href="{{ route('product') }}" class="py-2 hover:text-[#4FA428]">@lang('messages.our_products')</a>
                    <a href="{{ route('team') }}" class="py-2 hover:text-[#4FA428]">@lang('messages.our_team')</a>
                    {{-- <a href="{{ route('news') }}" class="py-2 hover:text-[#4FA428]">Activities</a> --}}
                    <!-- Activities with Dropdown -->
                    <div class="">
                        <button id="activitiesBtn"
                            class="w-full flex justify-between items-center py-2 hover:text-[#4FA428] focus:outline-none">
                            <a href="{{ route('activities') }}"><span>@lang('messages.activities')</span></a>
                            <svg id="activitiesIcon" xmlns="http://www.w3.org/2000/svg"
                                class="w-4 h-4 transition-transform duration-200" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>

                        <div id="activitiesDropdown" class="hidden flex flex-col pl-4 space-y-2">
                            <a href="{{ route('event') }}" class="py-1 hover:text-[#4FA428]">@lang('messages.event')</a>
                            <a href="{{ route('news') }}" class="py-1 hover:text-[#4FA428]">@lang('messages.news')</a>
                        </div>
                    </div>
                    <a href="{{ route('publication') }}" class="py-2 hover:text-[#4FA428]">@lang('messages.our_publication')</a>
                    <a href="{{ route('career') }}" class="py-2 hover:text-[#4FA428]">@lang('messages.career')</a>
                    <a href="{{ route('contact') }}" class="py-2 hover:text-[#4FA428]">@lang('messages.contact_us')</a>

                    <!-- Time -->
                    <div class="flex items-center gap-2">
                        <img src="{{ asset('image/time.png') }}" alt="" class="w-[12px] h-[12px]">
                         <p class="text-black">@lang('messages.mon') - @lang('messages.fri') @lang('messages.mor') -
                        @lang('messages.ever')
                    </p>
                    </div>
                    <!-- Email -->
                    <div class="flex items-center gap-2">
                        <img src="{{ asset('image/gmail.png') }}" alt="" class="w-[12px] h-[12px]">
                        <p class="text-black">kkaksakor@gmail.com</p>
                    </div>
                    <!-- Phone -->
                    <div class="flex items-center gap-2">
                        <img src="{{ asset('image/phone.png') }}" alt="" class="w-[12px] h-[12px]">
                        <p class="text-black">010 304 839</p>
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
        <div class="relative w-full min-h-[500px] sm:min-h-[600px] md:min-h-[800px] lg:min-h-[1000px] 
            flex flex-col justify-center items-center bg-cover bg-center text-white px-4 sm:px-6"
            style="background-image: url('{{ asset('image/career.jpg') }}');">

            <!-- Title -->
            <h1 class="text-3xl sm:text-5xl md:text-6xl lg:text-[100px] font-bold text-center">
                @lang('messages.career')
            </h1>

            <!-- Divider -->
            <div class="w-[100px] sm:w-[130px] lg:w-[154px] h-[3px] sm:h-[4px] bg-white mt-4"></div>

            <!-- Description -->
            <div class="mt-8 sm:mt-10 max-w-[95%] sm:max-w-2xl md:max-w-3xl lg:max-w-4xl">
                <p
                    class="text-base sm:text-lg md:text-xl lg:text-2xl font-normal text-left leading-relaxed text-pretty">
                   @lang('messages.title_career')
                </p>
            </div>

            <!-- Bottom Layer -->
            <div class="lg:flex hidden absolute top-0 left-0 w-full">
                <img src="{{ asset('image/layer-team.png') }}" alt="Layer" class="w-full object-cover">
            </div>
        </div>

    </section>
    {{-- Start your career with us today --}}

    <!-- Career Content Section -->
    <section id="career"
        class="flex flex-col lg:flex-row items-center justify-center gap-10 px-6 py-16 lg:px-24 lg:py-[100px]">
        <!-- Left Box: Green background -->
        <div class="relative w-full max-w-[491px] h-[auto] aspect-[1/1] flex flex-col justify-center bg-no-repeat bg-contain bg-center text-white px-6 md:px-10"
            style="background-image: url('{{ asset('image/back-career.png') }}');">

            <!-- Main Text -->
            <div class="mt-[-80px] md:mt-[-100px] lg:mt-[-120px] ml-4 md:ml-10">
                <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold leading-snug">
                    @lang('messages.title1')
                </h1>
                {{-- <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold mt-6 md:mt-10">@lang('messages.title2')</h1> --}}
            </div>

            <!-- Gmail Section -->
            <div
                class="absolute bottom-20 lg:bottom-20 sm:bottom-10 left-1/2 -translate-x-1/2 flex items-center gap-4 bg-white w-[90%] max-w-[400px] h-[45px] rounded-full px-4">
                <img src="{{ asset('image/icon-gmail.png') }}" alt="Gmail Icon" class="w-[24px] h-[24px]">
                <p class="text-[#4FA428] text-sm sm:text-base md:text-lg underline truncate">
                    cambo.agribusiness@gmail.com
                </p>
            </div>
        </div>

        <!-- Right Box: Image with Text -->
        <div class="relative w-full max-w-[641px] h-[500px] bg-no-repeat bg-cover"
            style="background-image: url('{{ asset('image/career-pic.png') }}');">

            <!-- Overlay -->
            <div class="absolute inset-0 bg-black/40"></div>

            <!-- Text Content -->
            <div class="absolute inset-0 flex flex-col justify-center px-6 md:px-10 text-white">
                <h1 class="text-xl sm:text-2xl font-bold mb-4">@lang('messages.title3')</h1>
                <ul class="list-disc list-inside space-y-3 text-sm sm:text-base leading-relaxed">
                    <li>@lang('messages.title4')</li>
                    <li>@lang('messages.title5')</li>
                    <li>@lang('messages.title6')</li>
                </ul>
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
             <p class="text-2xl font-semibold leading-relaxed"> @lang('messages.innovation_from_nature') <br>
                @lang('messages.heathy')</p>  <!-- White Line Bottom -->
            <div class="w-[50px] h-[4px] bg-[#FFFFFF] mx-auto mt-10"></div>
        </div>
    </section>

    {{-- Section Footer --}}
    <section class="contents">
        <footer
            class="relative bg-gradient-to-b from-[#4FA428] to-[#1E3E0F] text-white px-6 sm:px-10 md:px-16 lg:px-24 py-12">
            <!-- Grid Layout -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-10 mt-6">

                <!-- Column 1: Logo -->
                <div class="flex justify-center lg:justify-start">
                    <img src="{{ asset('image/logo_footer.png') }}" alt="Logo"
                        class="w-[100px] sm:w-[110px] md:w-[115px] h-auto object-contain">
                </div>

                <!-- Column 2: About -->
                <div>
                    <p class="text-sm sm:text-base font-semibold leading-relaxed max-w-[350px] mx-auto lg:mx-0">
                       @lang('messages.title_footer1')
                    </p>

                    <!-- Social Icons -->
                    <h4 class="mt-6 font-bold text-center lg:text-left">@lang('messages.follow_us')</h4>
                    <div class="flex justify-center lg:justify-start flex-wrap gap-5 mt-3">
                        <a href="https://t.me/Kaksekar_Digital">
                            <img src="{{ asset('image/icon-contact/le-con.png') }}" alt="Telegram"
                                class="w-8 h-8 transform transition-transform duration-300 hover:scale-110">
                        </a>
                        <a href="https://www.facebook.com/kaksekarDigital">
                            <img src="{{ asset('image/icon-contact/fb.png') }}" alt="Facebook"
                                class="w-8 h-8 transform transition-transform duration-300 hover:scale-110">
                        </a>
                        <a href="https://youtube.com/channel/UC7dMOGFP5ZMsIuHi1pvKjRA?feature=shared">
                            <img src="{{ asset('image/icon-contact/vdo.png') }}" alt="YouTube"
                                class="w-8 h-8 transform transition-transform duration-300 hover:scale-110">
                        </a>
                        <a href="https://www.tiktok.com/@kaksekardigital?_t=ZS-8ythEex1VWk&_r=1">
                            <img src="{{ asset('image/icon-contact/tiktok.png') }}" alt="TikTok"
                                class="w-8 h-8 transform transition-transform duration-300 hover:scale-110">
                        </a>
                    </div>
                </div>

                <!-- Column 3: Information -->
                <div class="text-center sm:text-left">
                    <h4 class="font-bold mb-4">@lang('messages.info')</h4>
                    <ul class="space-y-2 text-sm sm:text-base">
                        <li><a href="{{ route('home') }}" class="hover:underline">@lang('messages.home')</a></li>
                        <li><a href="{{ route('about') }}" class="hover:underline">@lang('messages.about_Us')</a></li>
                        <li><a href="{{ route('product') }}" class="hover:underline">@lang('messages.our_products')</a></li>
                        <li><a href="{{ route('team') }}" class="hover:underline">@lang('messages.our_team')</a></li>
                        <li><a href="{{ route('publication') }}" class="hover:underline">@lang('messages.our_publication')</a></li>
                        <li><a href="{{ route('activities') }}" class="hover:underline"> @lang('messages.activities')</a></li>
                        <li><a href="{{ route('career') }}" class="hover:underline">@lang('messages.career')</a></li>
                        <li><a href="{{ route('contact') }}" class="hover:underline">@lang('messages.contact_us')</a></li>
                    </ul>
                </div>

                <!-- Column 4: Contact -->
                <div class="text-center sm:text-left">
                    <h4 class="font-bold mb-4">@lang('messages.title_srun')</h4>
                    <div class="space-y-4 text-white">
                        <!-- Location -->
                        <div class="flex items-start gap-1">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg" class="text-white flex-shrink-0 mt-1">
                                <path
                                    d="M12 21s7-4.5 7-10.125C19 6.06 15.866 3 12 3S5 6.06 5 10.875C5 16.5 12 21 12 21Z"
                                    stroke="currentColor" stroke-width="1.5" fill="none" stroke-linejoin="round" />
                                <circle cx="12" cy="10.5" r="2.25" fill="currentColor" />
                            </svg>
                            <p class="text-sm md:text-base leading-relaxed">
                               @lang('messages.locat')
                            </p>
                        </div>

                        <!-- Phone -->
                        <div class="flex items-center gap-1">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg" class="text-white flex-shrink-0">
                                <path
                                    d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24 11.36 11.36 0 003.58.57 1 1 0 011 1v3.6a1 1 0 01-1 1A16 16 0 014 5a1 1 0 011-1h3.6a1 1 0 011 1 11.36 11.36 0 00.57 3.58 1 1 0 01-.24 1.02l-2.31 2.19z"
                                    stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                            <p class="font-semibold text-sm">010 30 48 39</p>
                        </div>

                        <!-- Email 1 -->
                        <div class="flex items-center gap-1">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg" class="text-white flex-shrink-0">
                                <path d="M4 4h16v16H4V4z" stroke="currentColor" stroke-width="1.5" fill="none" />
                                <path d="M4 4l8 8 8-8" stroke="currentColor" stroke-width="1.5" fill="none" />
                            </svg>
                            <p class="underline text-sm">cambo.agribusiness@gmail.com</p>
                        </div>

                        <!-- Email 2 -->
                        <div class="flex items-center gap-1">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg" class="text-white flex-shrink-0">
                                <path d="M4 4h16v16H4V4z" stroke="currentColor" stroke-width="1.5" fill="none" />
                                <path d="M4 4l8 8 8-8" stroke="currentColor" stroke-width="1.5" fill="none" />
                            </svg>
                            <p class="underline text-sm">kkaksakor@gmail.com</p>
                        </div>
                    </div>
                </div>

                <!-- Column 5: Visit Us + Map -->
                <div class="text-center sm:text-left">
                    <h4 class="font-bold mb-4">@lang('messages.visit')</h4>
                    {{-- <p class="text-sm"><strong>Working Time:</strong> 6:30 - 9:00am</p>
                    <p class="text-sm mb-4"><strong>Day:</strong> Everyday</p> --}}
                    <h4 class="font-bold mb-2">@lang('messages.map')</h4>
                    <div class="mt-4 flex justify-center lg:justify-start">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.0166188852565!2d104.8219541!3d11.5229249!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3109516dc7e48a73%3A0x7c246789a38e02d4!2s11%C2%B031&#39;22.5%22N%20104%C2%B049&#39;28.3%22E!5e0!3m2!1sen!2skh!4v1729090208356!5m2!1sen!2skh"
                            width="100%" height="200" style="border:0; 
                                border-radius: 0.5rem;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                            class="transition-transform duration-300 hover:scale-105">
                        </iframe>
                    </div>
                </div>
            </div>

            <!-- Bottom Copyright -->
            <div class="mt-[50px] text-center text-sm sm:text-base font-bold">
                @lang('messages.reser') <span id="year"></span>
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
<!-- JS for dropdown toggle -->
<script>
    const btn = document.getElementById('activitiesBtn');
    const dropdown = document.getElementById('activitiesDropdown');
    const icon = document.getElementById('activitiesIcon');

    btn.addEventListener('click', () => {
        dropdown.classList.toggle('hidden');
        icon.classList.toggle('rotate-180');
    });
</script>