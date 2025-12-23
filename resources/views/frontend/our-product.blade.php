<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

</html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@lang('messages.our_products')</title>
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
        body {
            font-family: "Kantumruy Pro", sans-serif;
            font-optical-sizing: auto;
        }

        .line-clamp-4-fallback {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
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
                            <li class="mt-[-10px]"><a href="{{ route('product') }}" class="px-4 lg:w-[135px] lg:h-[98px] flex items-center justify-center 
                        rounded-bl-[12px] rounded-tr-[12px] 
                        bg-gradient-to-b from-[#4FA428] to-[#1E3E0F] 
                        text-white font-medium">@lang('messages.our_products')</a></li>
                            <li><a href="{{ route('team') }}"
                                    class="hover:text-[#4FA428]">@lang('messages.our_team')</a></li>
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
                            <li><a href="{{ route('publication') }}"
                                    class="hover:text-[#4FA428]">@lang('messages.our_publication')</a>
                            </li>
                            <li><a href="{{ route('career') }}"
                                    class="hover:text-[#4FA428]">@lang('messages.career')</a></li>
                            <li><a href="{{ route('contact') }}"
                                    class="hover:text-[#4FA428]">@lang('messages.contact_us')</a></li>
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
                    <a href="{{ route('product') }}"
                        class="py-2 hover:text-[#4FA428]">@lang('messages.our_products')</a>
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
                    <a href="{{ route('publication') }}"
                        class="py-2 hover:text-[#4FA428]">@lang('messages.our_publication')</a>
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
        <!-- Our Product -->
        <div class="relative w-full min-h-[500px] md:min-h-[700px] lg:min-h-[900px] flex flex-col justify-center items-center bg-cover bg-center text-white px-4 sm:px-6 lg:px-12 py-16"
            style="background-image: url('{{ asset('image/prodcut.jpg') }}');">

            <!-- Title -->
            <h1 class="text-3xl sm:text-5xl md:text-[80px] lg:text-[100px] font-bold text-center leading-tight">
                @lang('messages.our_products')
            </h1>

            <!-- Divider -->
            <div class="w-[100px] sm:w-[154px] h-[3px] sm:h-[4px] bg-white mt-4"></div>

            <!-- Description -->
            <div class="mt-8 sm:mt-10 max-w-[90%] sm:max-w-2xl md:max-w-3xl lg:max-w-5xl">
                <p
                    class="text-base sm:text-lg md:text-xl lg:text-2xl font-normal text-left leading-relaxed text-pretty">
                    @lang('messages.title_pro1')
                </p>
            </div>

            <!-- Bottom Layer (hidden on small screens) -->
            <div class="lg:flex hidden absolute top-0 left-0 w-full">
                <img src="{{ asset('image/layer-team.png') }}" alt="Layer" class="w-full object-cover">
            </div>
        </div>

        <!-- Description -->
        <section class="py-12 px-4 text-center bg-transparent shadow-none">
            <p
                class="text-[#1E3E0F] text-[15px] line-clamp-5 text-left flex justify-center w-[50%] mx-auto line-clamp-2-fallback">
                @lang('messages.title_pro2')

            </p>
        </section>
        {{-- <section class="py-12 px-4 text-center bg-transparent shadow-none">
            <p class="text-[#1E3E0F] text-[15px] leading-tight">
                The technology and innovation behind the products come from the agricultural by-products of Cambodian
                farmers, carefully sourced and processed before being turned into final products. Local raw materials
                selected for use include kray leaves, betel leaves, chili, lemongrass, oil, rice bran, and coconut oil.
            </p>
        </section> --}}
    </section>
    <!-- Description Cards -->
    <section id="desc-card" class="relative w-full">

        {{-- Product For selling--}}
        <div class="flex justify-center">
            <div
                class="lg:grid lg:grid-cols-3 lg:grid-rows-2 md:grid md:grid-cols-2 md:grid-rows-3 justify-items-center gap-10">
                @foreach ($showProduct as $product)
                    <div class="w-[352px] mt-[35px]">
                        <!-- Product Image Block -->
                        <div class="relative w-full h-[351px] group">
                            <!-- Background vision -->
                            <div class="absolute inset-0 bg-cover bg-center"
                                style="background-image: url('{{ asset('image/vision.png') }}');">
                            </div>

                            <!-- Product image (always visible) -->
                            <div class="absolute inset-0 m-12 bg-contain bg-no-repeat bg-center z-10"
                                style="background-image: url('../../assets/products/thumbnail/{{ $product->image_product }}');">
                            </div>


                            <!-- Hover overlay (product-back.png appears with transparency) -->
                            <div class="absolute inset-0 m-4 bg-cover bg-center opacity-0 group-hover:opacity-50 transition duration-1000 ease-in-out z-20"
                                style="background-image: url('{{ asset('image/product-back.png') }}');">
                            </div>


                            <!-- Read Detail Button -->
                            {{-- <div
                                class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-700 ease-in-out z-30">
                                <button
                                    class="px-4 py-2 text-white font-medium rounded-md transition duration-700 ease-in-out read-detail-btn">
                                    Read Detail
                                </button>
                            </div> --}}
                            <div
                                class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-700 ease-in-out z-30">
                                {{-- <button
                                    class="px-4 py-2 text-white font-medium rounded-md transition duration-700 ease-in-out read-detail-btn"
                                    id="open-detail-btn">
                                    Read Detail
                                </button> --}}
                                {{-- <button
                                    class="px-4 py-2 text-white font-medium rounded-md transition duration-700 ease-in-out read-detail-btn open-detail-btn"
                                    id="open-detail-btn-{{ $product->id }}" data-name="Kaksekar {{ $product->name }}"
                                    data-description="{{ $product->description }}"
                                    data-image-path="../../assets/products/banner/{{ $product->banner }}">
                                    Read Detail
                                </button> --}}
                                {{-- <button
                                    class="px-4 py-2 text-white font-medium rounded-md transition duration-700 ease-in-out read-detail-btn open-detail-btn"
                                    id="open-detail-btn-{{ $product->id }}" data-name="Kaksekar {{ $product->name }}"
                                    data-description="{{ $product->description }}"
                                    data-image-path="../../assets/products/banner/{{ $product->banner }}"
                                    data-price-5="{{ $product->price_5 }}" data-price-60="{{ $product->price_60 }}"
                                    data-price-120="{{ $product->price_120 }}" data-price-600="{{ $product->price_600 }}"
                                    data-price-infinity="{{ $product->price_infinity }}">
                                    Read Detail
                                </button> --}}
                                <button class="open-detail-btn" id="open-detail-btn-{{ $product->id }}"
                                    data-name="Kaksekar {{ $product->name }}" data-description="{{ $product->description }}"
                                    data-image-path="{{ asset('assets/products/thumbnail/' . $product->image_product) }}"
                                    data-price-one="{{ $product->price }}" data-price-five="{{ $product->price_5 }}"
                                    data-price-sixty="{{ $product->price_60 }}"
                                    data-price-onehundredtwenty="{{ $product->price_120 }}"
                                    data-price-sixhundred="{{ $product->price_600 }}"
                                    data-price-infinity="{{ $product->price_infinity }}">

                                </button>
                            </div>
                        </div>

                        <!-- Product Content (under image) -->
                        <div class="flex flex-col items-center text-center mt-6 space-y-4">
                            <h1 class="text-xl font-bold text-[#1E3E0F]">
                                @if(app()->getLocale() == 'km')
                                    {{ $product->name_km ?? $product->name }}
                                @else
                                    {{ $product->name }}
                                @endif
                            </h1>
                            <p class="text-sm text-[#1E3E0F] max-w-[280px] text-left line-clamp-4-fallback">
                                @if(app()->getLocale() == 'km')
                                    {{ $product->description_km ?? $product->description }}
                                @else
                                    {{ $product->description }}
                                @endif
                            </p>
                            {{-- <button
                                class="px-6 py-2 rounded-full font-semibold text-white bg-gradient-to-r from-[#4FA428] to-[#1E3E0F] hover:opacity-90 transition w-[214px] h-[54px]">
                                Buy Now
                            </button> --}}
                            <!-- Buy Now Button -->
                            {{-- <button
                                class="buy-now-btn px-6 py-2 rounded-full font-semibold text-white bg-gradient-to-r from-[#4FA428] to-[#1E3E0F] hover:opacity-90 transition w-[214px] h-[54px]"
                                data-product-name="Kaksekar {{ $product->name }}"
                                data-product-price="{{ $product->price }}">
                                Buy Now
                            </button> --}}

                            {{-- <button
                                class="open-detail-btn px-6 py-2 rounded-full font-semibold text-white bg-gradient-to-r from-[#4FA428] to-[#1E3E0F] hover:opacity-90 transition w-[214px] h-[54px]"
                                id="open-detail-btn-{{ $product->id }}" data-name="Kaksekar {{ $product->name }}"
                                data-description="{{ $product->description }}"
                                data-image-path="{{ asset('assets/products/thumbnail/' . $product->image_product) }}"
                                data-price-five="{{ $product->price_5 }}" data-price-sixty="{{ $product->price_60 }}"
                                data-price-onehundredtwenty="{{ $product->price_120 }}"
                                data-price-sixhundred="{{ $product->price_600 }}"
                                data-price-infinity="{{ $product->price_infinity }}">
                                More Detail
                            </button> --}}
                            {{-- <button
                                class="open-detail-btn px-6 py-2 rounded-full font-semibold text-white bg-gradient-to-r from-[#4FA428] to-[#1E3E0F] hover:opacity-90 transition w-[214px] h-[54px]"
                                id="open-detail-btn-{{ $product->id }}" data-name="Kaksekar {{ $product->name }}"
                                data-description="{{ $product->description }}" data-howtouse="{{ $product->how_use }}"
                                data-image-path="{{ asset('assets/products/thumbnail/' . $product->image_product) }}"
                                data-price="{{ $product->price }}">
                                More Detail
                            </button> --}}
                            <button
                                class="open-detail-btn px-6 py-2 rounded-full font-semibold text-white bg-gradient-to-r from-[#4FA428] to-[#1E3E0F] hover:opacity-90 transition w-[214px] h-[54px]"
                                id="open-detail-btn-{{ $product->id }}" data-name-en="Kaksekar {{ $product->name }}"
                                data-description-en="{{ $product->description }}" data-howtouse-en="{{ $product->how_use }}"
                                data-name-km="{{ $product->name_km }}" data-description-km="{{ $product->description_km }}"
                                data-howtouse-km="{{ $product->how_use_km }}"
                                data-image-path="{{ asset('assets/products/thumbnail/' . $product->image_product) }}"
                                data-price-en="{{ $product->price }}"
                                >
                                @lang('messages.more_detail')
                            </button>
                            {{-- <button
                                class="buy-now-btn px-6 py-2 rounded-full font-semibold text-white bg-gradient-to-r from-[#4FA428] to-[#1E3E0F] hover:opacity-90 transition w-[214px] h-[54px]"
                                data-product-id="{{ $product->id }}" data-product-name="Kaksekar {{ $product->name }}"
                                data-price-five="{{ $product->price_5 }}" data-price-sixty="{{ $product->price_60 }}"
                                data-price-onehundredtwenty="{{ $product->price_120 }}"
                                data-price-sixhundred="{{ $product->price_600 }}"
                                data-price-infinity="{{ $product->price_infinity }}">
                                Buy Now
                            </button> --}}
                            {{-- <button
                                class="buy-now-btn px-6 py-2 rounded-full font-semibold text-white bg-gradient-to-r from-[#4FA428] to-[#1E3E0F] hover:opacity-90 transition w-[214px] h-[54px]"
                                data-product-id="{{ $product->id }}" data-product-name="{{ $product->name }}"
                                data-price="{{ $product->price }}">
                                @lang('messages.buy_now')
                            </button> --}}
                            <button
                                class="buy-now-btn px-6 py-2 rounded-full font-semibold text-white bg-gradient-to-r from-[#4FA428] to-[#1E3E0F] hover:opacity-90 transition w-[214px] h-[54px]"
                                data-product-id="{{ $product->id }}" data-name-en="{{ $product->name }}"
                                data-name-km="{{ $product->name_km ?? $product->name }}" data-price="{{ $product->price }}">
                                @lang('messages.buy_now')
                            </button>
                        </div>
                    </div>
                    <!-- Modal Background -->
                    <div id="buyModal"
                        class="hidden fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center z-50">
                        <div class="bg-white rounded-2xl p-6 w-[400px] shadow-lg relative">
                            <h2 class="text-xl font-bold text-[#1E3E0F] mb-4 text-center"> @lang('messages.info_cus')</h2>

                            <button id="closeModal"
                                class="absolute top-2 right-4 text-gray-500 text-xl hover:text-black">&times;</button>

                            <form id="orderForm" class="space-y-3">

                                <input type="hidden" id="productNameField" value="" />

                                <h1 class="text-xl font-bold text-[#1E3E0F] text-center" id="modalProductNameDisplay"></h1>

                                <input type="text" id="name" placeholder="  @lang('messages.name')" required
                                    class="w-full border rounded-lg p-2" />
                                <input type="tel" id="phone" placeholder="  @lang('messages.phone')" required
                                    class="w-full border rounded-lg p-2" />
                                <input type="text" id="address" placeholder=" @lang('messages.address')" required
                                    class="w-full border rounded-lg p-2" />

                                <div>
                                    <label class="block text-sm font-medium text-gray-700">@lang('messages.price')
                                        (៛)</label>
                                    <input type="number" id="price" value="0" readonly
                                        class="w-full hidden border rounded-lg p-2 bg-gray-100" />
                                    <span id="price-display" class="font-bold">{{ $product->price }}</span>
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-700">
                                        @lang('messages.Quantity')</label>
                                    <input type="number" id="qty" value="1" min="1" class="w-full border rounded-lg p-2" />

                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-700"> @lang('messages.total')
                                        (៛)</label>
                                    <input type="number" id="total" readonly
                                        class="w-full hidden border rounded-lg p-2 bg-gray-100" />
                                    <span id="total-display" class="font-bold text-green-700"></span>
                                </div>

                                <button type="submit"
                                    class="w-full bg-gradient-to-r from-[#4FA428] to-[#1E3E0F] text-white font-semibold py-2 rounded-lg hover:opacity-90">
                                    @lang('messages.checkout')
                                </button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    {{-- Show more detail product --}}
    {{-- <section id="more-detail-product" class="hidden fixed inset-0 flex items-center justify-center z-50 px-4">
        <div
            class="w-full max-w-6xl mx-auto mt-20 p-6 md:p-8 backdrop-blur-md rounded-[25px] shadow-[0_10px_30px_#0F4634] relative border-[#0F4634] bg-[#DCE8D2]">

            <!-- Top-Center Title -->
            <h1 class="absolute top-4 left-1/2 -translate-x-1/2 text-lg md:text-2xl font-bold text-[#0F4634]">
                More Detail
            </h1>

            <!-- Close Button -->
            <button id="close-detail-btn" class="absolute top-4 right-4 w-8 h-8 flex items-center justify-center">
                <svg width="64" height="65" viewBox="0 0 64 65" fill="none" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink">
                    <rect width="64" height="65" fill="url(#pattern0_2029_5)" />
                    <defs>
                        <pattern id="pattern0_2029_5" patternContentUnits="objectBoundingBox" width="1" height="1">
                            <use xlink:href="#image0_2029_5" transform="matrix(0.0104167 0 0 0.0102564 0 0.00769231)" />
                        </pattern>
                        <image id="image0_2029_5" width="96" height="96" preserveAspectRatio="none"
                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAYAAADimHc4AAAACXBIWXMAAAsTAAALEwEAmpwYAAAB60lEQVR4nO2dS27CMBgG/zPlW4Sbwa5d9rKtcgN3USpRGh4Bkv/hGSk7FngmUYJtETMAAAAAAAAAAABIx8HMRqvPeBxrKN7NrJnZZGY7q4vM7Os41g8LJr8Vj6AT+S1KhHP5VSNoRr57hEvyq0XQFfluEQ43vtBphMw35vE4hnvGuumNeTCzzwURdkXP/OZ5olWOoOjyK0dQFvkVIyib/EoRlFV+hQjKLj9zBFWRnzGCqsnPFEFV5WeIoOryI0dQL/IjRlBv8iNFUK/yI0RQ7/I9Iwj5fhGEfL8IQr5fBCHfL4KQ7xdByPeLIOT7RRDy/SII+X57caaFn0X+CldCQ37sCBPy/SJMyPeLMCHfL8KE/NeiBY+ac78TYEP5jQj+8hsR/OU3IvjLb0RYzshUhB96YGItwpaXEuiJWU0iPIleMKVMhAfRC+fzibAQrbCYQoQ70YorWUS4wRbLiAMR5tlyDXcgwl88FtAHIvzguXth6D1ChK0jQ68RIsjvNkIk+d1FiCi/mwiR5ZePkEF+2QiZ5JeLkFF+mQiZ5aePUEF+2giV5KeLUFF+mgiV5aeIwF8X279j83cK7IvLX3IlvJkT++Ly74ngJv9ShGryr0Vwl38eoar8uQhh5P/CS3wAAAAAAAAAAADAwvINaDRgQa6bo/AAAAAASUVORK5CYII=" />
                    </defs>
                </svg>

            </button>

            <!-- Content Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 md:gap-12 mt-12">
                <!-- Left: Product Image -->
                <div class="relative flex justify-center">
                    <div id="detail-name"
                        class="absolute top-0 left-1/2 -translate-x-1/2 text-[#0F4634] px-2 md:px-4 py-1 md:py-2 rounded-lg text-lg md:text-xl font-semibold text-center">
                        Pain Killer Oil
                    </div>
                    <img id="detail-image" src="{{ asset('image/prodcut/7.png') }}" alt="Pain Killer Oil"
                        class="w-full max-w-[400px] h-auto object-cover rounded-xl">
                </div>

                <!-- Right: Product Details -->
                <div class="flex flex-col gap-6">
                    <!-- Price + Qty -->
                    <div class="flex items-center flex-wrap gap-40">
                        <div class="price">
                            <div class="text-base md:text-xl font-bold text-[#0F4634]">Price</div>
                            <div class="text-base md:text-xl font-bold text-[#0F4634] mt-2">12.5$</div>
                        </div>
                        <div class="items-center gap-4 text-black">
                            <div class="text-base md:text-xl font-bold text-[#0F4634]">Qty</div>
                            <div class="flex gap-2 mt-2">
                                <button class="px-3 py-2 hover:bg-gray-200">-</button>
                                <span class="min-w-[20px] text-center">1</span>
                                <button class="px-3 py-2 hover:bg-gray-200">+</button>
                            </div>
                        </div>
                    </div>

                    <!-- Cart Line Item -->
                    <div class="flex text-sm md:text-base text-[#0F4634]">
                        + <p class="name ml-1">Pain Killer Oil </p>
                        <span class="count ml-1"> x1</span>
                    </div>

                    <!-- Buy Now Button -->
                    <div>
                        <button
                            class="px-4 md:px-6 py-2 md:py-3 rounded-full bg-gradient-to-b from-[#4FA428] to-[#1E3E0F] text-white font-medium shadow-md hover:opacity-90 transition w-full sm:w-auto">
                            Buy Now
                        </button>
                    </div>

                    <!-- Description -->
                    <div>
                        <h3 class="font-bold text-lg md:text-2xl text-[#0F4634] mb-2">Description</h3>
                        <p class="text-sm md:text-base leading-relaxed text-black/70">
                            Helps relieve joint pain & swelling with its anti-inflammatory properties
                        </p>
                    </div>

                    <!-- How to use -->
                    <div>
                        <h3 class="text-base md:text-xl font-bold text-[#0F4634] mb-2">How to use</h3>
                        <p class="text-sm md:text-base leading-relaxed text-black/70">
                            Pour 8-10 drops of the product into your palm and massage <br>
                            gently into (if required) the region where the pain is centered.
                        </p>
                    </div>

                    <!-- Ingredient Percentages -->
                    <div class="text-sm md:text-base text-black/70">
                        <div class="title">
                            <h3 class="text-base md:text-xl font-bold text-[#0F4634] mb-2">Ingredient</h3>
                        </div>
                        <div class="quality space-y-1">
                            <p>Lemongrass oil 12.39%</p>
                            <p>Eucalyptus oil 74.35%</p>
                            <p>Mengpol 10.12%</p>
                            <p>Camphor 0.45%</p>
                            <p>Plai 0.45%</p>
                            <p>Cinnamon 0.45%</p>
                            <p>Barks 0.45%</p>
                            <p>Chilli 1.45%</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <section id="more-detail-product"
        class="hidden fixed inset-0 flex items-center justify-center z-50 px-4 py-8 bg-black/50 backdrop-blur-sm">
        <div
            class="w-full max-w-[95%] sm:max-w-[90%] md:max-w-[900px] h-auto max-h-[90vh] mx-auto bg-[#DCE8D2] border border-[#0F4634] rounded-[25px] shadow-[0_10px_30px_#0F4634] p-6 sm:p-8 md:p-10 relative overflow-y-auto">

            <!-- Title -->
            <h1 class="text-[#0F4634] font-bold text-xl sm:text-2xl md:text-3xl text-center"> @lang(key: 'messages.more_detail')</h1>

            <!-- Close Button -->
            <button id="close-detail-btn" class="absolute top-4 right-4 w-8 h-8 flex items-center justify-center">
                <svg width="64" height="65" viewBox="0 0 64 65" fill="none" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink">
                    <rect width="64" height="65" fill="url(#pattern0_2029_5)" />
                    <defs>
                        <pattern id="pattern0_2029_5" patternContentUnits="objectBoundingBox" width="1" height="1">
                            <use xlink:href="#image0_2029_5" transform="matrix(0.0104167 0 0 0.0102564 0 0.00769231)" />
                        </pattern>
                        <image id="image0_2029_5" width="96" height="96" preserveAspectRatio="none"
                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAYAAADimHc4AAAACXBIWXMAAAsTAAALEwEAmpwYAAAB60lEQVR4nO2dS27CMBgG/zPlW4Sbwa5d9rKtcgN3USpRGh4Bkv/hGSk7FngmUYJtETMAAAAAAAAAAABIx8HMRqvPeBxrKN7NrJnZZGY7q4vM7Os41g8LJr8Vj6AT+S1KhHP5VSNoRr57hEvyq0XQFfluEQ43vtBphMw35vE4hnvGuumNeTCzzwURdkXP/OZ5olWOoOjyK0dQFvkVIyib/EoRlFV+hQjKLj9zBFWRnzGCqsnPFEFV5WeIoOryI0dQL/IjRlBv8iNFUK/yI0RQ7/I9Iwj5fhGEfL8IQr5fBCHfL4KQ7xdByPeLIOT7RRDy/SII+X57caaFn0X+CldCQ37sCBPy/SJMyPeLMCHfL8KE/NeiBY+ac78TYEP5jQj+8hsR/OU3IvjLb0RYzshUhB96YGItwpaXEuiJWU0iPIleMKVMhAfRC+fzibAQrbCYQoQ70YorWUS4wRbLiAMR5tlyDXcgwl88FtAHIvzguXth6D1ChK0jQ68RIsjvNkIk+d1FiCi/mwiR5ZePkEF+2QiZ5JeLkFF+mQiZ5aePUEF+2giV5KeLUFF+mgiV5aeIwF8X279j83cK7IvLX3IlvJkT++Ly74ngJv9ShGryr0Vwl38eoar8uQhh5P/CS3wAAAAAAAAAAADAwvINaDRgQa6bo/AAAAAASUVORK5CYII=" />
                    </defs>
                </svg>
            </button>

            <!-- Content -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 md:gap-10 mt-6 md:mt-10">

                <!-- Left: Product Image + Name -->
                <div class="flex flex-col items-center text-center">
                    <h2 id="detail-name"
                        class="mt-4 text-lg sm:text-xl md:text-2xl font-semibold text-[#0F4634] px-2 py-1 rounded-lg">
                    </h2>
                    <img id="detail-image" src="" alt="Product Image"
                        class="w-[250px] h-[450px] max-w-1/2 sm:max-w-1/2 md:max-w-1/2 h-auto object-contain">
                </div>

                <!-- Right: Product Info -->
                <div class="flex flex-col gap-4 sm:gap-6">

                    <!-- Price + Qty -->
                    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 sm:gap-6">
                        <!-- Price -->

                        <div>
                            <p class="text-sm sm:text-base md:text-lg font-bold text-[#0F4634]">@lang(key: 'messages.price')</p>
                            <p id="detail-price-display"
                                class="text-base sm:text-lg md:text-2xl font-medium text-[#0F4634] mt-1">
                                {{ $product->price }}៛
                            </p>
                            {{-- <input type="hidden" id="detail-price-value" value="0.00"> --}}
                        </div>

                        <!-- Qty -->
                        <div>
                            <p class="relative text-sm sm:text-base md:text-lg font-bold text-[#0F4634]">
                                @lang(key: 'messages.Quantity')</p>
                            <div class="flex items-center gap-2 sm:gap-3 mt-2 ml-[-30px]">
                                {{-- <button id="qty-minus"
                                    class="px-2 sm:px-3 py-1 sm:py-2 border rounded-lg transition">-</button> --}}

                                {{-- <input type="number" id="detail-qty" value="2" min="2"
                                    class="w-16 sm:w-20 text-center border rounded-lg focus:outline-none focus:ring-2 focus:ring-[#0F4634]">
                                --}}
                                <p class="relative left-[30px]">x1</p>

                                {{-- <button id="qty-plus"
                                    class="px-2 sm:px-3 py-1 sm:py-2 border rounded-lg transition">+</button> --}}
                            </div>
                        </div>
                    </div>

                    <!-- Total -->
                    {{-- <div class="text-sm sm:text-base md:text-lg text-[#0F4634] font-medium">
                        Total: <span id="detail-total" class="font-bold ml-2">0.00៛
                    </div> --}}

                    <!-- Buy Now -->
                    {{-- <div>
                        <button id="detail-buy-now-btn"
                            class="px-4 sm:px-6 py-2 sm:py-3 rounded-full font-semibold text-white bg-gradient-to-r from-[#4FA428] to-[#1E3E0F] hover:opacity-90 transition w-full sm:w-auto">
                            Buy Now
                        </button>
                    </div> --}}
                    {{-- <button id="detail-buy-now-btn" class="px-4 sm:px-6 py-2 sm:py-3 rounded-full font-semibold text-white 
           bg-gradient-to-r from-[#4FA428] to-[#1E3E0F] hover:opacity-90 transition 
           w-full sm:w-auto w-[214px] h-[54px]">
                        Buy Now
                    </button> --}}
                    {{-- <div>
                        <button id="detail-buy-now-btn"
                            class="px-6 py-2 rounded-full font-semibold text-white bg-gradient-to-r from-[#4FA428] to-[#1E3E0F] hover:opacity-90 transition w-full sm:w-auto w-[214px] h-[54px]">
                            Buy Now
                        </button>
                    </div> --}}
                    <!-- Container for showing price ranges -->
                    {{-- <div class="flex gap-3">
                        <div>
                            <p class="text-sm sm:text-base text-[#0F4634]">2 > 5</p>
                            <p id="detail-price-display" class="text-base text-[#0F4634] mt-1">
                                {{ $product->price_5 }}៛
                            </p>
                            <input type="hidden" id="detail-price-value" value="0.00">
                        </div>
                        <div>
                            <p class="text-sm sm:text-base text-[#0F4634]">6 > 60</p>
                            <p id="detail-price-display" class="text-base text-[#0F4634] mt-1">
                                {{ $product->price_60 }}៛
                            </p>
                            <input type="hidden" id="detail-price-value" value="0.00">
                        </div>
                        <div>
                            <p class="text-sm sm:text-base text-[#0F4634]">61 > 120</p>
                            <p id="detail-price-display" class="text-base text-[#0F4634] mt-1 mr-[-6px]">
                                {{ $product->price_120 }}៛
                            </p>
                            <input type="hidden" id="detail-price-value" value="0.00">
                        </div>
                        <div>
                            <p class="text-sm sm:text-base text-[#0F4634]">121 > 600</p>
                            <p id="detail-price-display" class="text-base text-[#0F4634] mt-1 mr-[-8px]">
                                {{ $product->price_600 }}៛
                            </p>
                            <input type="hidden" id="detail-price-value" value="0.00">
                        </div>
                        <div>
                            <p class="text-sm sm:text-base text-[#0F4634]"> >= 600</p>
                            <p id="detail-price-display" class="text-base text-[#0F4634] mt-1 mr-[-4px]">
                                {{ $product->price_infinity }}៛
                            </p>
                            <input type="hidden" id="detail-price-value" value="0.00">
                        </div>
                    </div> --}}
                    <!-- Container for showing price ranges -->
                    {{-- <div>
                        <h3 class="font-bold text-base sm:text-lg text-[#0F4634]">Range of price</h3>
                        <div id="detail-price-range" class="flex flex-wrap gap-4 text-[#0F4634] mt-3">

                        </div>
                    </div> --}}

                    <!-- Description -->
                    <div>
                        <h3 class="font-bold text-base sm:text-lg text-[#0F4634]">@lang(key: 'messages.description')</h3>
                        <p id="detail-description"
                            class="text-xs sm:text-sm md:text-base leading-relaxed text-black/70">
                        </p>
                    </div>

                    <!-- How to use -->
                    <div class="mt-[-5px] sm:mt-0">
                        <div id="detail-how_use" class="text-xs sm:text-sm md:text-base leading-relaxed text-black/70">
                            {!! $product->how_use !!}
                        </div>
                    </div>

                </div>
                <!-- Checkout Form (hidden by default) -->
                {{-- <div id="checkout-form" class="hidden mt-6 border-t border-[#0F4634] pt-6">
                    <h3 class="font-bold text-lg text-[#0F4634] mb-4">Customer Information</h3>
                    <form action="" method="post" id="orderForm" class="flex flex-col gap-4">
                        @csrf
                        <input type="text" id="cust-name" name="name" placeholder="Full Name"
                            class="p-2 border rounded-lg" required>
                        <input type="tel" id="cust-phone" name="phone" placeholder="Phone Number"
                            class="p-2 border rounded-lg" required>
                        <textarea id="cust-address" name="address" placeholder="Address" class="p-2 border rounded-lg"
                            required></textarea>

                        <!-- Hidden fields (auto-filled) -->
                        <input type="hidden" id="form-product" name="product">
                        <input type="hidden" id="form-qty" name="qty">
                        <input type="hidden" id="form-total" name="total">

                        <button type="submit"
                            class="px-6 py-2 rounded-full font-semibold text-white bg-gradient-to-r from-[#4FA428] to-[#1E3E0F] hover:opacity-90 transition">
                            Checkout
                        </button>
                    </form>

                </div> --}}
            </div>
        </div>
    </section>



    {{-- From Raw Materials to Market --}}
    <section id="why-us" class="bg-[#DCE8D2] w-full overflow-hidden py-16 mt-[60px]">
        <!-- Title + Description -->
        <div class="text-center max-w-3xl mx-auto text-[#1E3E0F] mb-16 px-6 lg:px-12">
            <h1 class="font-bold text-[32px] md:text-[42px]">
                @lang('messages.title_pro3')
            </h1>
            <p class="text-[16px] mt-4 leading-relaxed flex justify-center text-left w-[750px] max-w-[750px]">
                @lang('messages.title_pro4')
            </p>
        </div>

        <!-- Full-Screen Image -->
        <div class="relative w-full">
            <img src="{{ asset('assets/profile/image.png') }}" alt="Process Flow" class="w-full h-auto object-cover">
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
                        <li><a href="{{ route('product') }}" class="hover:underline">@lang('messages.our_products')</a>
                        </li>
                        <li><a href="{{ route('team') }}" class="hover:underline">@lang('messages.our_team')</a></li>
                        <li><a href="{{ route('publication') }}"
                                class="hover:underline">@lang('messages.our_publication')</a></li>
                        <li><a href="{{ route('activities') }}" class="hover:underline">
                                @lang('messages.activities')</a></li>
                        <li><a href="{{ route('career') }}" class="hover:underline">@lang('messages.career')</a></li>
                        <li><a href="{{ route('contact') }}" class="hover:underline">@lang('messages.contact_us')</a>
                        </li>
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
<!-- Font Awesome CDN (for icons) -->
<script src="https://kit.fontawesome.com/yourkitid.js" crossorigin="anonymous"></script>
{{-- linke JavaScript --}}
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


<script>
    document.addEventListener('DOMContentLoaded', () => {

        // ---------- Helpers ----------
        const getAttrNumber = (el, attrName) => {
            const raw = el.getAttribute(attrName);
            if (!raw) return 0;
            // remove commas and whitespace, then parse
            const cleaned = String(raw).replace(/,/g, '').trim();
            const n = parseFloat(cleaned);
            return Number.isFinite(n) ? n : 0;
        };

        // function getTierPrice(qty, tiers) {
        //     // qty is a number
        //     if (qty == 1) return tiers.price;
        //     if (qty >= 2 && qty <= 5) return tiers.price_5;
        //     if (qty >= 6 && qty <= 60) return tiers.price_60;
        //     if (qty >= 61 && qty <= 120) return tiers.price_120;
        //     if (qty >= 121 && qty <= 600) return tiers.price_600;
        //     if (qty > 600) return tiers.price_infinity;
        //     // fallback for qty 1: use the same as the smallest tier (price_5)
        //     return tiers.price_5;
        // }

        // ---------- Shared DOM references ----------
        const buyNowButtons = document.querySelectorAll('.buy-now-btn');
        const buyModal = document.getElementById('buyModal'); // must be unique on page
        const closeModal = document.getElementById('closeModal');

        // Buy modal fields (must be unique IDs)
        const modalProductNameDisplay = document.getElementById('modalProductNameDisplay');
        const productNameField = document.getElementById('productNameField');
        const priceInput = document.getElementById('price'); // numeric input (raw number)
        const qtyInput = document.getElementById('qty');     // numeric input
        const totalInput = document.getElementById('total'); // numeric input

        // Optional: formatted text displays
        const priceDisplay = document.getElementById('price-display'); // <span id="price-display"></span>
        const totalDisplay = document.getElementById('total-display'); // <span id="total-display"></span>

        let priceTiers = { price_5: 0, price_60: 0, price_120: 0, price_600: 0, price_infinity: 0 };

        // Open Buy Modal (from product card)
        buyNowButtons.forEach(btn => {
            btn.addEventListener('click', () => {
                if (!buyModal) return console.warn('buyModal missing from DOM');

                const locale = "{{ app()->getLocale() }}"; // 'en' or 'km'

                // Translate product name
                const nameEn = btn.dataset.nameEn || 'Product';
                const nameKm = btn.dataset.nameKm || nameEn;
                const translatedName = locale === 'km' ? nameKm : nameEn;

                modalProductNameDisplay.textContent = translatedName;
                productNameField.value = translatedName;

                // Price formatting
                const price = Number(btn.dataset.price || 0);
                const formattedPrice = price.toLocaleString('en-US') + '៛';
                priceDisplay.textContent = formattedPrice;
                totalDisplay.textContent = formattedPrice;

                qtyInput.value = 1; // default quantity
                totalInput.value = price;

                buyModal.classList.remove('hidden');
            });
        });

        // close
        if (closeModal) closeModal.addEventListener('click', () => buyModal.classList.add('hidden'));
        if (qtyInput) qtyInput.addEventListener('input', updateBuyModalPrice);

        // function updateBuyModalPrice() {
        //     const qty = Number(qtyInput.value) || 1;
        //     const price = getTierPrice(qty, priceTiers);

        //     // write RAW numeric values to inputs (no commas) — safe for calculations and form submission
        //     priceInput.value = price;                    // raw number
        //     totalInput.value = price * qty;              // raw number

        //     // If you want a formatted visual for users, you can add a small display element (not shown here)
        //     // document.getElementById('price-display').textContent = price.toLocaleString() + '៛';
        // }

        // ---------- Update Modal Prices ----------
        function updateBuyModalPrice() {
            const qty = Number(qtyInput.value) || 1;
            const price = getTierPrice(qty, priceTiers);
            const total = price * qty;

            // Raw values (for backend / form)
            priceInput.value = price;
            totalInput.value = total;

            // Formatted display (for user)
            const formattedPrice = price.toLocaleString();
            const formattedTotal = total.toLocaleString();

            if (priceDisplay) priceDisplay.textContent = formattedPrice + '៛';
            if (totalDisplay) totalDisplay.textContent = formattedTotal + '៛';
        }
        // ---------- Order sending (Buy modal form) ----------
        const orderForm = document.getElementById('orderForm'); // form inside buyModal (unique)
        if (orderForm) {
            orderForm.addEventListener('submit', async (e) => {
                e.preventDefault();

                const payload = {
                    name: document.getElementById('name')?.value || '',
                    phone: document.getElementById('phone')?.value || '',
                    address: document.getElementById('address')?.value || '',
                    product: productNameField?.value || '',
                    price: Number(priceInput?.value || 0),
                    qty: Number(qtyInput?.value || 1),
                    total: Number(totalInput?.value || 0)
                };

                try {
                    const resp = await fetch('{{ route("send.order") }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify(payload)
                    });
                    const result = await resp.json();
                    if (result.status === 'success') {
                        alert(' Order sent successfully!');
                        buyModal.classList.add('hidden');
                        orderForm.reset();
                    } else {
                        alert(' Failed to send order: ' + (result.error || 'Unknown error'));
                    }
                } catch (err) {
                    console.error(err);
                    alert(' Network or server error while sending order');
                }
            });
        }

        // ---------- MORE DETAIL modal logic ----------
        const detailModal = document.getElementById('more-detail-product');
        const closeDetailBtn = document.getElementById('close-detail-btn');
        const readDetailBtns = document.querySelectorAll('.open-detail-btn');

        // detail elements (these are text/display fields)
        const detailName = document.getElementById('detail-name');
        const detailImage = document.getElementById('detail-image');
        const detailDescription = document.getElementById('detail-description');
        const detailPriceDisplay = document.getElementById('detail-price-display'); // text element
        const detailQty = document.getElementById('detail-qty'); // number input
        const detailTotal = document.getElementById('detail-total'); // text element
        const minusBtn = document.getElementById('qty-minus');
        const plusBtn = document.getElementById('qty-plus');
        const detailBuyNowBtn = document.getElementById('detail-buy-now-btn');

        // checkout form inside detail modal
        const checkoutFormWrapper = document.getElementById('checkout-form'); // wrapper div
        const checkoutForm = checkoutFormWrapper ? checkoutFormWrapper.querySelector('form') : null;
        const formProduct = document.getElementById('form-product'); // hidden
        const formQty = document.getElementById('form-qty'); // hidden
        const formTotal = document.getElementById('form-total'); // hidden

        // let detailPriceTiers = { price_5: 0, price_60: 0, price_120: 0, price_600: 0, price_infinity: 0 };

        readDetailBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                if (!detailModal) return console.warn('detail modal not found');

                detailModal.classList.remove('hidden');

                // fill content
                detailName.textContent = btn.getAttribute('data-name') || btn.dataset.name || 'Product';
                detailImage.src = btn.getAttribute('data-image-path') || btn.dataset.imagePath || '';
                detailDescription.textContent = btn.getAttribute('data-description') || btn.dataset.description || '';

                // detailPriceTiers = {
                //     price: getAttrNumber(btn, ' data-price-one'),
                //     price_5: getAttrNumber(btn, 'data-price-five'),
                //     price_60: getAttrNumber(btn, 'data-price-sixty'),
                //     price_120: getAttrNumber(btn, 'data-price-onehundredtwenty'),
                //     price_600: getAttrNumber(btn, 'data-price-sixhundred'),
                //     price_infinity: getAttrNumber(btn, 'data-price-infinity')
                // };

                // default qty in detail view (you used 2)
                detailQty.value = 1;
                updateDetailPrice();

                // hide checkout form initially
                if (checkoutFormWrapper) checkoutFormWrapper.classList.add('hidden');
            });
        });

        if (closeDetailBtn) {
            closeDetailBtn.addEventListener('click', () => {
                if (detailModal) detailModal.classList.add('hidden');
                if (checkoutFormWrapper) checkoutFormWrapper.classList.add('hidden');
            });
        }

        function updateDetailPrice() {
            const qty = Number(detailQty.value) || 1;
            const price = getTierPrice(qty, detailPriceTiers);

            // show formatted values in text elements
            detailPriceDisplay.textContent = price.toLocaleString() + '៛';
            detailTotal.textContent = (price * qty).toLocaleString() + '៛';
        }

        // qty controls
        if (plusBtn) plusBtn.addEventListener('click', () => { detailQty.value = Number(detailQty.value || 2); updateDetailPrice(); });
        if (minusBtn) minusBtn.addEventListener('click', () => {
            const cur = Number(detailQty.value || 2);
            if (cur > 2) { detailQty.value = cur; updateDetailPrice(); }
        });
        if (detailQty) detailQty.addEventListener('input', updateDetailPrice);

        // "Buy Now" inside the detail modal → show the checkout form and fill hidden fields
        if (detailBuyNowBtn) {
            detailBuyNowBtn.addEventListener('click', () => {
                if (!checkoutFormWrapper) return console.warn('checkout form wrapper missing in detail modal');

                // show
                checkoutFormWrapper.classList.remove('hidden');

                // fill hidden form fields with RAW numeric values (no commas)
                const qty = Number(detailQty.value) || 1;
                const price = getTierPrice(qty, detailPriceTiers);
                const total = price * qty;

                if (formProduct) formProduct.value = detailName.textContent;
                if (formQty) formQty.value = qty;
                if (formTotal) formTotal.value = total;
            });
        }

        // If there is a form inside the detail modal, attach submit handler (sends to the same route)
        if (checkoutForm) {
            checkoutForm.addEventListener('submit', async (e) => {
                e.preventDefault();

                // fields inside the detail checkout form
                const name = document.getElementById('cust-name')?.value || '';
                const phone = document.getElementById('cust-phone')?.value || '';
                const address = document.getElementById('cust-address')?.value || '';
                const product = formProduct?.value || detailName?.textContent || '';
                const qty = Number(formQty?.value || detailQty?.value || 2);
                const total = Number(formTotal?.value || (getTierPrice(qty, detailPriceTiers) * qty));

                const payload = { name, phone, address, product, price: total / qty, qty, total };

                try {
                    const resp = await fetch('{{ route("send.order") }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify(payload)
                    });
                    const result = await resp.json();
                    if (result.status === 'success') {
                        alert(' Order sent successfully!');
                        // optionally hide modal & reset form
                        if (detailModal) detailModal.classList.add('hidden');
                        checkoutForm.reset();
                    } else {
                        alert(' Failed to send order: ' + (result.error || 'Unknown error'));
                    }
                } catch (err) {
                    console.error(err);
                    alert(' Network or server error while sending order');
                }
            });
        }

    });


    document.addEventListener('DOMContentLoaded', () => {
        const readDetailBtns = document.querySelectorAll('.open-detail-btn');
        const detailModal = document.getElementById('more-detail-product');
        const detailName = document.getElementById('detail-name');
        const detailImage = document.getElementById('detail-image');
        const detailDescription = document.getElementById('detail-description');
        const priceRangeContainer = document.getElementById('detail-price-range');
        const closeBtn = document.getElementById('close-detail-btn');

        readDetailBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                // Show modal
                detailModal.classList.remove('hidden');

                // Set basic product info
                detailName.textContent = btn.dataset.name;
                detailImage.src = btn.dataset.imagePath;
                detailDescription.textContent = btn.dataset.description;

                // Get prices
                const prices = {
                    price_5: btn.dataset.priceFive,
                    price_60: btn.dataset.priceSixty,
                    price_120: btn.dataset.priceOnehundredtwenty,
                    price_600: btn.dataset.priceSixhundred,
                    price_infinity: btn.dataset.priceInfinity
                };
                // Generate dynamic HTML
                priceRangeContainer.innerHTML = `
                    <div>
                        <p class="text-sm font-medium">2 - 5</p>
                        <p class="text-base font-medium">${Number(prices.price_5).toLocaleString('en-US')}៛</p>
                    </div>
                    <div>
                        <p class="text-sm font-medium">6 - 60</p>
                        <p class="text-base font-medium">${Number(prices.price_60).toLocaleString('en-US')}៛</p>
                    </div>
                    <div>
                        <p class="text-sm font-medium">61 - 120</p>
                        <p class="text-base font-medium">${Number(prices.price_120).toLocaleString('en-US')}៛</p>
                    </div>
                    <div>
                        <p class="text-sm font-medium">121 - 600</p>
                        <p class="text-base font-medium">${Number(prices.price_600).toLocaleString('en-US')}៛</p>
                    </div>
                    <div>
                        <p class="text-sm font-medium">>= 600</p>
                        <p class="text-base font-medium">${Number(prices.price_infinity).toLocaleString('en-US')}៛</p>
                    </div>
                `;
            });
        });

        // Close modal
        closeBtn.addEventListener('click', () => {
            detailModal.classList.add('hidden');
        });
    });


    // Input Quantity
    const qtyInput = document.getElementById('detail-qty');
    const plusBtn = document.getElementById('qty-plus');
    const minusBtn = document.getElementById('qty-minus');

    plusBtn.addEventListener('click', () => {
        qtyInput.value = parseInt(qtyInput.value) + 1;
    });

    minusBtn.addEventListener('click', () => {
        if (parseInt(qtyInput.value) > 1) {
            qtyInput.value = parseInt(qtyInput.value) - 1;
        }
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
<script>
    document.addEventListener("DOMContentLoaded", () => {

        // --- Open Detail Modal ---
        const openButtons = document.querySelectorAll(".open-detail-btn");
        const detailModal = document.getElementById("more-detail-product");

        openButtons.forEach(btn => {
            btn.addEventListener("click", () => {

                // const name = btn.dataset.name;
                // const description = btn.dataset.description;
                const imagePath = btn.dataset.imagePath;
                const price = parseFloat(btn.dataset.price); // convert to number

                // Format with commas: 3,100
                const formattedPrice = price.toLocaleString('en-US');

                // Fill popup content
                // document.getElementById("detail-name").textContent = name;
                // document.getElementById("detail-description").textContent = description;
                document.getElementById("detail-image").src = imagePath;

                // Show price inside popup
                document.getElementById("detail-price-display").textContent = formattedPrice + "៛";

                // Show modal
                detailModal.classList.remove("hidden");
            });
        });

        // --- Close Detail Modal ---
        document.getElementById("close-detail-btn").addEventListener("click", () => {
            detailModal.classList.add("hidden");
        });

    });

</script>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const openButtons = document.querySelectorAll(".open-detail-btn");
        const detailModal = document.getElementById("more-detail-product");

        openButtons.forEach(btn => {
            btn.addEventListener("click", () => {
                const name = btn.dataset.name;
                const description = btn.dataset.description;
                const imagePath = btn.dataset.imagePath;
                const price = parseFloat(btn.dataset.price);
                const howToUse = btn.dataset.howtouse; // <-- get this

                // Fill popup content
                document.getElementById("detail-name").textContent = name;
                document.getElementById("detail-description").textContent = description;
                document.getElementById("detail-image").src = imagePath;

                // Show price with comma
                document.getElementById("detail-price-display").textContent = price.toLocaleString("en-US") + "៛";

                // Show "How to use" content (HTML)
                document.getElementById("detail-how_use").innerHTML = howToUse;

                // Show modal
                detailModal.classList.remove("hidden");
            });
        });

        // Close button
        document.getElementById("close-detail-btn").addEventListener("click", () => {
            detailModal.classList.add("hidden");
        });
    });

</script>
<script>
    document.addEventListener("DOMContentLoaded", () => {

        // BUY NOW BUTTONS
        const buyButtons = document.querySelectorAll(".buy-now-btn");
        const buyModal = document.getElementById("buyModal");

        const productNameField = document.getElementById("productNameField");
        const modalProductNameDisplay = document.getElementById("modalProductNameDisplay");

        const priceInput = document.getElementById("price");
        const priceDisplay = document.getElementById("price-display");

        const qtyInput = document.getElementById("qty");
        const totalInput = document.getElementById("total");
        const totalDisplay = document.getElementById("total-display");

        // Open Buy Now Modal
        buyButtons.forEach(btn => {
            btn.addEventListener('click', () => {
                if (!buyModal) return;

                const locale = "{{ app()->getLocale() }}"; // 'en' or 'km'

                const nameEn = btn.dataset.nameEn || 'Product';
                const nameKm = btn.dataset.nameKm || nameEn;
                const translatedName = locale === 'km' ? nameKm : nameEn;

                modalProductNameDisplay.textContent = translatedName;
                productNameField.value = translatedName;

                // Price formatting
                const price = Number(btn.dataset.price || 0);
                priceInput.value = price; // <-- store numeric price for calculations
                const formattedPrice = price.toLocaleString('en-US') + '៛';
                priceDisplay.textContent = formattedPrice;
                totalDisplay.textContent = formattedPrice;

                qtyInput.value = 1;
                totalInput.value = price;

                buyModal.classList.remove('hidden');
            });
        });


        // Update total when qty changes
        qtyInput.addEventListener("input", () => {
            let price = parseFloat(priceInput.value);
            let qty = parseInt(qtyInput.value);

            if (qty < 1) qty = 1; // enforce minimum
            qtyInput.value = qty;

            const total = price * qty;
            totalInput.value = total;
            totalDisplay.textContent = total.toLocaleString("en-US") + "៛";
        });

    });

</script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const detailModal = document.getElementById('more-detail-product');
        const closeDetailBtn = document.getElementById('close-detail-btn');

        const detailName = document.getElementById('detail-name');
        const detailImage = document.getElementById('detail-image');
        const detailDescription = document.getElementById('detail-description');
        const detailHowUse = document.getElementById('detail-how_use');
        const detailPrice = document.getElementById('detail-price-display');

        // Helper to format numbers with commas
        function formatPrice(price) {
            if (!price) return '0';
            return Number(price).toLocaleString('en-US'); // adds commas
        }

        // Open modal
        document.querySelectorAll('.open-detail-btn').forEach(btn => {
            btn.addEventListener('click', () => {
                const locale = "{{ app()->getLocale() }}"; // en or km

                // Name
                detailName.textContent = locale === 'km' ? (btn.dataset.nameKm || btn.dataset.nameEn) : btn.dataset.nameEn;

                // Description
                detailDescription.textContent = locale === 'km' ? (btn.dataset.descriptionKm || btn.dataset.descriptionEn) : btn.dataset.descriptionEn;

                // How to use
                detailHowUse.innerHTML = locale === 'km' ? (btn.dataset.howtouseKm || btn.dataset.howtouseEn) : btn.dataset.howtouseEn;

                // Image
                detailImage.src = btn.dataset.imagePath;

                // Price
                let price = locale === 'km' ? (btn.dataset.priceKm || btn.dataset.priceEn) : btn.dataset.priceEn;
                detailPrice.textContent = formatPrice(price) + '៛';

                // Show modal
                detailModal.classList.remove('hidden');
            });
        });

        // Close modal
        closeDetailBtn.addEventListener('click', () => {
            detailModal.classList.add('hidden');
        });

        // Close modal on clicking outside
        detailModal.addEventListener('click', e => {
            if (e.target === detailModal) {
                detailModal.classList.add('hidden');
            }
        });
    });
</script>

</html>