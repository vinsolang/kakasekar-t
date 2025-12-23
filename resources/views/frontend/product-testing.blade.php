<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Our Product</title>
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
                            <li class="mt-[-10px]"><a href="{{ route('product') }}" class="px-4 lg:w-[130px] lg:h-[98px] flex items-center justify-center 
                        rounded-bl-[12px] rounded-tr-[12px] 
                        bg-gradient-to-b from-[#4FA428] to-[#1E3E0F] 
                        text-white font-medium">Our Products</a></li>
                            <li><a href="{{ route('team') }}" class="hover:text-[#4FA428]">Our Team</a></li>
                            <li><a href="{{ route('news') }}" class="hover:text-[#4FA428]">News</a></li>
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
        <!-- Our Product -->
        <div class="relative w-full min-h-[500px] md:min-h-[700px] lg:min-h-[900px] flex flex-col justify-center items-center bg-cover bg-center text-white px-4 sm:px-6 lg:px-12 py-16"
            style="background-image: url('{{ asset('image/prodcut.jpg') }}');">

            <!-- Title -->
            <h1 class="text-3xl sm:text-5xl md:text-[80px] lg:text-[100px] font-bold text-center leading-tight">
                Our Products
            </h1>

            <!-- Divider -->
            <div class="w-[100px] sm:w-[154px] h-[3px] sm:h-[4px] bg-white mt-4"></div>

            <!-- Description -->
            <div class="mt-8 sm:mt-10 max-w-[90%] sm:max-w-2xl md:max-w-3xl lg:max-w-5xl">
                <p
                    class="text-base sm:text-lg md:text-xl lg:text-2xl font-normal text-center leading-relaxed text-pretty">
                    The company focuses on producing health products based on a scientific approach, incorporating
                    health science, pharmaceuticals, and herbal medicine, through a team of herbal medicine experts from
                    the Faculty of Pharmaceutical Sciences at the Buddhist University, a strategic partner.
                </p>
            </div>

            <!-- Bottom Layer (hidden on small screens) -->
            <div class="lg:flex hidden absolute top-0 left-0 w-full">
                <img src="{{ asset('image/layer-team.png') }}" alt="Layer" class="w-full object-cover">
            </div>
        </div>

        <!-- Description -->
        <section class="py-12 px-4 text-center bg-transparent shadow-none">
            <p class="text-[#1E3E0F] text-[15px] line-clamp-5">
                The technology and innovation behind the products come from the agricultural by-products of <br>
                Cambodian
                farmers, carefully sourced and processed before being turned into final products. Local <br> raw
                materials
                selected for use include kray leaves, betel leaves, chili, lemongrass, oil, rice bran, and <br> coconut
                oil.
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
                                <button
                                    class="px-4 py-2 text-white font-medium rounded-md transition duration-700 ease-in-out read-detail-btn open-detail-btn"
                                    id="open-detail-btn-{{ $product->id }}" data-name="Kaksekar {{ $product->name }}"
                                    data-description="{{ $product->description }}"
                                    data-image-path="../../assets/products/banner/{{ $product->banner }}">
                                    Read Detail
                                </button>
                            </div>
                        </div>

                        <!-- Product Content (under image) -->
                        <div class="flex flex-col items-center text-center mt-6 space-y-4">
                            <h1 class="text-xl font-bold text-[#1E3E0F]">Kaksekar {{$product->name}}</h1>
                            <p class="text-sm text-[#1E3E0F] max-w-[280px]">
                                {{ $product->description }}
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
                            <button
                                class="buy-now-btn px-6 py-2 rounded-full font-semibold text-white bg-gradient-to-r from-[#4FA428] to-[#1E3E0F] hover:opacity-90 transition w-[214px] h-[54px]"
                                data-product-id="{{ $product->id }}" data-product-name="Kaksekar {{ $product->name }}"
                                data-product-base-price="{{ $product->price }}">
                                Buy Now
                            </button>
                        </div>
                    </div>
                    <!-- Modal Background -->
                    <div id="buyModal"
                        class="hidden fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center z-50">
                        <div class="bg-white rounded-2xl p-6 w-[400px] shadow-lg relative">
                            <h2 class="text-xl font-bold text-[#1E3E0F] mb-4 text-center">Customer Information</h2>

                            <button id="closeModal"
                                class="absolute top-2 right-4 text-gray-500 text-xl hover:text-black">&times;</button>

                            <form id="orderForm" class="space-y-3">

                                <input type="hidden" id="productNameField" value="" />

                                <h1 class="text-xl font-bold text-[#1E3E0F] text-center" id="modalProductNameDisplay"></h1>

                                <input type="text" id="name" placeholder="Full Name" required
                                    class="w-full border rounded-lg p-2" />
                                <input type="tel" id="phone" placeholder="Phone Number" required
                                    class="w-full border rounded-lg p-2" />
                                <input type="text" id="address" placeholder="Address" required
                                    class="w-full border rounded-lg p-2" />

                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Price (៛)</label>
                                    <input type="number" id="price" value="0" readonly
                                        class="w-full border rounded-lg p-2 bg-gray-100" />
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Quantity</label>
                                    <input type="number" id="qty" value="1" min="1" class="w-full border rounded-lg p-2" />
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Total (៛)</label>
                                    <input type="number" id="total" readonly
                                        class="w-full border rounded-lg p-2 bg-gray-100" />
                                </div>

                                <button type="submit"
                                    class="w-full bg-gradient-to-r from-[#4FA428] to-[#1E3E0F] text-white font-semibold py-2 rounded-lg hover:opacity-90">
                                    Checkout
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
            <h1 class="text-[#0F4634] font-bold text-xl sm:text-2xl md:text-3xl text-center">More Details</h1>

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
                        class="w-full max-w-[280px] sm:max-w-[350px] md:max-w-[380px] h-auto object-cover rounded-xl">
                </div>

                <!-- Right: Product Info -->
                <div class="flex flex-col gap-4 sm:gap-6">

                    <!-- Price + Qty -->
                    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 sm:gap-6">
                        <!-- Price -->
                        <div>
                            <p class="text-sm sm:text-base md:text-lg font-bold text-[#0F4634]">Price</p>
                            <p id="detail-price-display"
                                class="text-base sm:text-lg md:text-2xl font-medium text-[#0F4634] mt-1">0.00៛
                            </p>
                            <input type="hidden" id="detail-price-value" value="0.00">
                        </div>

                        <!-- Qty -->
                        <div>
                            <p class="text-sm sm:text-base md:text-lg font-bold text-[#0F4634]">Quantity</p>
                            <div class="flex items-center gap-2 sm:gap-3 mt-2 ml-[-30px]">
                                <button id="qty-minus"
                                    class="px-2 sm:px-3 py-1 sm:py-2 border rounded-lg transition">-</button>
                                <input type="number" id="detail-qty" value="1" min="1" readonly
                                    class="w-12 text-center bg-transparent border-none focus:ring-0">
                                <button id="qty-plus"
                                    class="px-2 sm:px-3 py-1 sm:py-2 border rounded-lg transition">+</button>
                            </div>
                        </div>
                    </div>

                    <!-- Total -->
                    <div class="text-sm sm:text-base md:text-lg text-[#0F4634] font-medium">
                        Total: <span id="detail-total" class="font-bold ml-2">0.00$</span>
                    </div>

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
                    <div>
                        <button id="detail-buy-now-btn"
                            class="px-6 py-2 rounded-full font-semibold text-white bg-gradient-to-r from-[#4FA428] to-[#1E3E0F] hover:opacity-90 transition w-full sm:w-auto w-[214px] h-[54px]">
                            Buy Now
                        </button>
                    </div>

                    <!-- Description -->
                    <div>
                        <h3 class="font-bold text-base sm:text-lg md:text-2xl text-[#0F4634]">Description</h3>
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
                <div id="checkout-form" class="hidden mt-6 border-t border-[#0F4634] pt-6">
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

                </div>
            </div>
        </div>
    </section>



    {{-- From Raw Materials to Market --}}
    <section id="why-us" class="bg-[#DCE8D2] w-full overflow-hidden py-16 mt-[60px]">
        <!-- Title + Description -->
        <div class="text-center max-w-3xl mx-auto text-[#1E3E0F] mb-16 px-6 lg:px-12">
            <h1 class="font-bold text-[32px] md:text-[42px]">
                From Raw Materials to Market
            </h1>
            <p class="text-[16px] mt-4 leading-relaxed">
                The enterprise firmly believes in delivering exceptional and value-driven
                solutions that exceed what customers pay for.
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
            class="relative bg-gradient-to-b from-[#4FA428] to-[#1E3E0F] text-white px-8 md:px-16 lg:px-24 py-12 mt-[60px]">
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
                    {{-- <p class="text-xs mt-2">
                        The enterprise was founded on October 8, 2020, and officially registered as a commercial
                        enterprise
                        on January 11, 2021.
                    </p> --}}

                    <!-- Social icons -->
                    <h4 class="mt-6 font-bold">Follow Us</h4>
                    <div class="flex space-x-3 mt-3 gap-5">
                        <a href="https://t.me/Kaksekar_Digital"><img src="{{ asset('image/icon-contact/le-con.png') }}"
                                alt="telegram"
                                class="w-8 h-8 transform transition-transform duration-300 hover:scale-110"></a>
                        <a href="https://www.facebook.com/kaksekarDigital"><img
                                src="{{ asset('image/icon-contact/fb.png') }}" alt="facebook"
                                class="w-8 h-8 transform transition-transform duration-300 hover:scale-110"></a>
                        <a href="https://youtube.com/channel/UC7dMOGFP5ZMsIuHi1pvKjRA?feature=shared"><img
                                src="{{ asset('image/icon-contact/vdo.png') }}" alt="video"
                                class="w-8 h-8 transform transition-transform duration-300 hover:scale-110"></a>
                        <a href="https://www.tiktok.com/@kaksekardigital?_t=ZS-8ythEex1VWk&_r=1"><img
                                src="{{ asset('image/icon-contact/tiktok.png') }}" alt="tiktok"
                                class="w-8 h-8 transform transition-transform duration-300 hover:scale-110"></a>
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
                        <li><a href="{{ route('publication') }}" class="hover:underline">Our Publication</a></li>
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
                    <div
                        class="w-full h-28 rounded-lg overflow-hidden bg-gray-300 transform transition-transform duration-300 hover:scale-110">
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
    const PRICING_RULES = @json($pricingRules);
    PRICING_RULES = {
        1: [  // Product ID = 1
            { maxQty: 5, price: 47500 },
            { maxQty: 60, price: 40000 },
            { maxQty: 120, price: 35000 },
            { maxQty: 600, price: 30000 },
            { maxQty: Infinity, price: 27500 },
        ],
        2: [
            { maxQty: 5, price: 28500 },
            { maxQty: 60, price: 21000 },
            { maxQty: 120, price: 19500 },
            { maxQty: 600, price: 18000 },
            { maxQty: Infinity, price: 16500 },
        ],
        3: [
            { maxQty: 5, price: 17100 },
            { maxQty: 60, price: 13500 },
            { maxQty: 120, price: 11700 },
            { maxQty: 600, price: 10800 },
            { maxQty: Infinity, price: 9900 },
        ],
        4: [
            { maxQty: 5, price: 19000 },
            { maxQty: 60, price: 14000 },
            { maxQty: 120, price: 13000 },
            { maxQty: 600, price: 12000 },
            { maxQty: Infinity, price: 11000 },
        ],
        5: [
            { maxQty: 5, price: 7600 },
            { maxQty: 60, price: 5600 },
            { maxQty: 120, price: 5200 },
            { maxQty: 600, price: 4800 },
            { maxQty: Infinity, price: 4400 },
        ],
        6: [
            { maxQty: 5, price: 7600 },
            { maxQty: 60, price: 5600 },
            { maxQty: 120, price: 5200 },
            { maxQty: 600, price: 4800 },
            { maxQty: Infinity, price: 4400 },
        ],
        7: [
            { maxQty: 5, price: 2800 },
            { maxQty: 60, price: 2400 },
            { maxQty: 120, price: 2100 },
            { maxQty: 600, price: 1800 },
            { maxQty: Infinity, price: 1600 },
        ],
        8: [
            { maxQty: 5, price: 38000 },
            { maxQty: 60, price: 32000 },
            { maxQty: 120, price: 28000 },
            { maxQty: 600, price: 24000 },
            { maxQty: Infinity, price: 22000 },
        ],
    }
    document.addEventListener('DOMContentLoaded', () => {
        // --- 2. Price Lookup Function ---
        function getDynamicPrice(productId, qty, fallbackPrice = 0) {
            qty = parseInt(qty, 10);
            if (!productId || qty < 1 || isNaN(qty)) return fallbackPrice;

            const tiers = PRICING_RULES[productId];
            if (!tiers) return fallbackPrice;

            const tier = tiers.find(t => qty <= t.maxQty);
            return tier ? tier.price : fallbackPrice;
        }

        // --- 3. Modal Elements ---
        const buyModal = document.getElementById('buyModal');
        const closeModalBtn = document.getElementById('closeModal');
        const orderForm = document.getElementById('orderForm');
        const productNameField = document.getElementById('productNameField');
        const modalProductNameDisplay = document.getElementById('modalProductNameDisplay');
        const priceField = document.getElementById('price');
        const qtyField = document.getElementById('qty');
        const totalField = document.getElementById('total');

        let currentProductId = null;
        let basePrice = 0;

        // --- 4. Update Price/Total Dynamically ---
        function updateBuyModalTotal() {
            const qty = parseInt(qtyField.value, 10);
            const price = getDynamicPrice(currentProductId, qty, basePrice);
            const total = price * qty;

            priceField.value = price.toFixed(0);
            totalField.value = total.toFixed(0);
        }

        // --- 5. Open Modal ---
        document.querySelectorAll('.buy-now-btn').forEach(button => {
            button.addEventListener('click', (e) => {
                const productName = e.currentTarget.dataset.productName;
                currentProductId = parseInt(e.currentTarget.dataset.productId);
                basePrice = parseFloat(e.currentTarget.dataset.productBasePrice);

                productNameField.value = productName;
                modalProductNameDisplay.textContent = productName;

                qtyField.value = 2;
                updateBuyModalTotal();

                buyModal.classList.remove('hidden');
            });
        });

        // --- 6. Close Modal ---
        closeModalBtn.addEventListener('click', () => {
            buyModal.classList.add('hidden');
            orderForm.reset();
        });

        // --- 7. Quantity Change ---
        qtyField.addEventListener('input', updateBuyModalTotal);
        qtyField.addEventListener('change', updateBuyModalTotal);

        // --- 8. Telegram Order Submission ---
        orderForm.addEventListener('submit', async (e) => {
            e.preventDefault();

            const productName = productNameField.value;
            const name = document.getElementById('name').value;
            const phone = document.getElementById('phone').value;
            const address = document.getElementById('address').value;
            const price = priceField.value;
            const qty = qtyField.value;
            const total = totalField.value;

            const TOKEN = "7836811007:AAG49APFgXC9GMqg0YszW0GPXQWhDKUHNhg";
            const CHAT_ID = "-4887542691";

            const message = `
📦 *New Order Received*
--------------------------
🧾 *Product:* ${productName}
💰 *Price per unit:* ${price}៛
🔢 *Qty:* ${qty}
💵 *Total:* ${total}៛
--------------------------
👤 *Customer Info*
Name: ${name}
Phone: ${phone}
Address: ${address}
`;

            try {
                const response = await fetch(`https://api.telegram.org/bot${TOKEN}/sendMessage`, {
                    method: "POST",
                    headers: { "Content-Type": "application/json" },
                    body: JSON.stringify({
                        chat_id: CHAT_ID,
                        text: message,
                        parse_mode: "Markdown"
                    })
                });

                if (response.ok) {
                    alert(" Order sent successfully!");
                    buyModal.classList.add("hidden");
                    orderForm.reset();
                } else {
                    const errorData = await response.json();
                    alert(" Telegram Error: " + (errorData.description || 'Unknown error'));
                }
            } catch (error) {
                console.error("Fetch Error:", error);
                alert("⚠️ Network error, please try again.");
            }
        });
    });

</script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const detailModal = document.getElementById("more-detail-product");
        const detailName = document.getElementById("detail-name");
        const detailDescription = document.getElementById("detail-description");
        const detailImage = document.getElementById("detail-image");
        const detailPriceDisplay = document.getElementById("detail-price-display");
        const detailQty = document.getElementById("detail-qty");
        const detailTotal = document.getElementById("detail-total");

        let currentProductId = null;
        let basePrice = 0;

        // Open detail modal
        document.querySelectorAll(".open-detail-btn").forEach(btn => {
            btn.addEventListener("click", function () {
                const name = this.getAttribute("data-name");
                const description = this.getAttribute("data-description");
                const imagePath = this.getAttribute("data-image-path");
                const productId = this.id.replace("open-detail-btn-", "");
                basePrice = parseFloat(this.getAttribute("data-product-base-price"));

                currentProductId = productId;

                detailName.textContent = name;
                detailDescription.textContent = description;
                detailImage.src = imagePath;
                detailModal.classList.remove("hidden");

                updatePriceDisplay();
            });
        });

        // Close detail modal
        document.getElementById("close-detail-btn").addEventListener("click", function () {
            detailModal.classList.add("hidden");
        });

        // Quantity +/-
        document.getElementById("qty-plus").addEventListener("click", () => changeQty(1));
        document.getElementById("qty-minus").addEventListener("click", () => changeQty(-1));

        function changeQty(change) {
            let qty = parseInt(detailQty.value);
            qty = Math.max(1, qty + change);
            detailQty.value = qty;
            updatePriceDisplay();
        }

        // Dynamic price based on quantity
        function getDynamicPrice(productId, qty) {
            const tiers = PRICING_RULES[productId];
            if (!tiers) return basePrice;

            const tier = tiers.find(t => qty <= t.maxQty);
            return tier ? t.price : basePrice;
        }

        function updatePriceDisplay() {
            const qty = parseInt(detailQty.value);
            const price = getDynamicPrice(currentProductId, qty);
            const total = qty * price;

            detailPriceDisplay.textContent = `${price.toLocaleString()}៛`;
            detailTotal.textContent = `${total.toLocaleString()}៛`;
        }
    });
</script>


</html>