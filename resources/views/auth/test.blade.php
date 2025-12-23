When click Button Read Detail this <div
    class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-700 ease-in-out z-30">
    <button id="read-detail-btn"
        class="px-4 py-2 text-white font-medium rounded-md transition duration-700 ease-in-out">
        Read Detail
    </button>
</div> Show product detail this
{{-- Show more detail product --}}
<section id="more-detail-product"
    class="hidden fixed inset-0 flex items-center justify-center z-50 w-[1363px] h-[1012px] block mx-auto">
    <div
        class="max-w-6xl mx-auto mt-20 p-8 backdrop-blur-md rounded-[25px] shadow-[0_10px_30px_#0F4634] relative border-[#0F4634] bg-[#DCE8D2]">
        <!-- Top-Center Title -->
        <h1 class="absolute top-4 left-1/2 -translate-x-1/2 text-2xl font-bold text-[#0F4634]">
            More Detail
        </h1>

        <!-- Close Button -->
        <button id="close-detail-btn"
            class="absolute top-4 right-4 text-white bg-black/30 rounded-full w-8 h-8 flex items-center justify-center hover:bg-black/50 transition">
            ✕
        </button>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 mt-12">
            <!-- Left: Product Image -->
            <div class="relative flex justify-center">
                <!-- Product Name Overlay -->
                <div
                    class="absolute bottom-4 left-1/2 -translate-x-1/2 text-[#0F4634] px-4 py-2 rounded-lg text-xl font-semibold text-center top-0">
                    Pain Killer Oil
                </div>
                <img src="{{ asset('image/prodcut/1.png') }}" alt="Pain Killer Oil"
                    class="h-[540px] object-cover rounded-xl">
            </div>

            <!-- Right: Product Details -->
            <div class="flex flex-col gap-6">
                <!-- Price + Qty -->
                <div class="flex items-center justify-between">
                    <div class="price">
                        <div class="text-xl font-bold text-[#0F4634]">Price</div>
                        <div class="text-xl font-bold text-[#0F4634] mt-[25px]">12.5$</div>
                    </div>
                    <div class="items-center gap-4 text-lg text-black mr-[150px]">
                        <div class="text-xl font-bold text-[#0F4634] ml-[26px]">Qty</div>
                        <div class="flex gap-2 mt-[25px]">
                            <button class="px-3 py-1 border border-gray-400 rounded-full">-</button>
                            <span>1</span>
                            <button class="px-3 py-1 border border-gray-400 rounded-full">+</button>
                        </div>
                    </div>
                </div>

                <!-- Cart Line Item -->
                <div class="flex text-base text-[#0F4634]">+ <p class="name">Pain Killer Oil </p><span
                        class="count ml-1"> x1</span></div>

                <!-- Buy Now Button -->
                <div>
                    <button
                        class="px-6 py-3 rounded-full bg-gradient-to-b from-[#4FA428] to-[#1E3E0F] text-white font-medium shadow-md hover:opacity-90 transition">
                        Buy Now
                    </button>
                </div>

                <!-- Description -->
                <div>
                    <h3 class="font-bold text-[25px] text-[#0F4634] mb-2">Description</h3>
                    <p class="text-base leading-relaxed text-black/70">
                        Helps relieve joint pain & swelling with its anti-inflammatory properties.
                        <br><br>
                        <span class="font-semibold">How to use:</span> Pour 8–10 drops of the product into
                        your palm and massage gently into the region where the pain is centered.
                        <br><br>
                        <span class="font-semibold">Ingredients:</span> Lemongrass oil, Eucalyptus oil,
                        Menthol, Camphor, Plai, Cinnamon Barks, Chilli.
                    </p>
                </div>
                <!-- How to use -->
                <div>
                    <h3 class="text-[20px] font-bold text-[#0F4634] mb-2">How to use</h3>
                    <p class="text-base leading-relaxed text-black/70">
                        Pour 8-10 drops of the product into your palm and massage <br>
                        gently into (if required) the region where the pain is centered.
                    </p>
                </div>
                <!-- Ingredient Percentages -->
                <div class="text-sm text-black/70">
                    <div class="title">
                        <h3 class="text-[20px] font-bold text-[#0F4634] mb-2">Ingredient</h3>
                    </div>
                    <div class="quality">
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
</section> and user or customer can add qty and then count this too <!-- Cart Line Item -->
<div class="flex text-base text-[#0F4634]">+ <p class="name">Pain Killer Oil </p><span class="count ml-1"> x1</span>
</div>
Example: When user add qty 2 count 2 too.


/====================================================================
 {{-- Product For salling col 1--}}
        <div class="flex justify-center">
            <div class="grid grid-cols-3 grid-rows-2 justify-items-center gap-10">
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
                                <button
                                    class="px-4 py-2 text-white font-medium rounded-md transition duration-700 ease-in-out read-detail-btn"
                                    id="open-detail-btn">
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
                            <button id="buyNowBtn"
                                class="px-6 py-2 rounded-full font-semibold text-white bg-gradient-to-r from-[#4FA428] to-[#1E3E0F] hover:opacity-90 transition w-[214px] h-[54px]">
                                Buy Now
                            </button>
                        </div>
                    </div>
                    <!-- Modal Background -->
                    <div id="buyModal"
                        class="hidden fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center z-50">
                        <div class="bg-white rounded-2xl p-6 w-[400px] shadow-lg relative">
                            <h2 class="text-xl font-bold text-[#1E3E0F] mb-4 text-center">Customer Information</h2>

                            <!-- Close -->
                            <button id="closeModal"
                                class="absolute top-2 right-4 text-gray-500 text-xl hover:text-black">&times;</button>

                            <form id="orderForm" class="space-y-3">
                                <input type="text" id="name" placeholder="Full Name" required
                                    class="w-full border rounded-lg p-2" />
                                <input type="tel" id="phone" placeholder="Phone Number" required
                                    class="w-full border rounded-lg p-2" />
                                <input type="text" id="address" placeholder="Address" required
                                    class="w-full border rounded-lg p-2" />

                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Price ($)</label>
                                    <input type="number" id="price" value="10" readonly
                                        class="w-full border rounded-lg p-2 bg-gray-100" />
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Quantity</label>
                                    <input type="number" id="qty" value="1" min="1" class="w-full border rounded-lg p-2" />
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-700">Total ($)</label>
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


         {{-- From Raw Materials to Market --}}
    <section id="why-us" class="bg-[#DCE8D2] w-full overflow-hidden mt-[60px]">
        <!-- Block 1: Title + Description -->
        <div class="text-center max-w-3xl mx-auto text-[#1E3E0F] mb-20 mt-[30px]">
            <h1 class="font-bold text-[35px] md:text-[42px]">From Raw Materials to Market</h1>
            <p class="text-[16px] mt-3 leading-relaxed">
                The enterprise firmly believes in delivering exceptional and value-driven
                solutions that exceed what customers pay for.
            </p>
        </div>

        <!-- Block 2: Line + Profiles -->
        <div class="relative w-full md">
            <!-- Green Line -->
            <img src="{{ asset('image/line.png') }}" alt="Process Line" class="w-full">

            <!-- Profile Row 1 -->
            <div class="absolute inset-x-0 top-[50px] left-[320px] flex justify-center gap-10">
                <img src="{{ asset('image/business/1.jpg') }}" alt="Profile 1"
                    class="w-[250px] h-[250px] rounded-full border-4 border-[#4FA428] object-cover shadow-lg">
                <img src="{{ asset('image/business/2.jpg') }}" alt="Profile 2"
                    class="w-[250px] h-[250px] rounded-full border-4 border-[#4FA428] object-cover shadow-lg">
                <img src="{{ asset('image/business/3.png') }}" alt="Profile 3"
                    class="w-[250px] h-[250px] rounded-full border-4 border-[#4FA428] object-cover shadow-lg">
            </div>

            <!-- Profile Row 2 -->
            <div class="absolute inset-x-0 top-[420px] right-[150px] flex justify-center gap-10">
                <img src="{{ asset('image/business/4.jpg') }}" alt="Profile 4"
                    class="w-[250px] h-[250px] rounded-full border-4 border-[#4FA428] object-cover shadow-lg">
                <img src="{{ asset('image/business/5.jpg') }}" alt="Profile 5"
                    class="w-[250px] h-[250px] rounded-full border-4 border-[#4FA428] object-cover shadow-lg">
                <img src="{{ asset('image/business/6.png') }}" alt="Profile 6"
                    class="w-[250px] h-[250px] rounded-full border-4 border-[#4FA428] object-cover shadow-lg">
            </div>
        </div>
    </section>



       <section id="more-detail-product" class="hidden fixed inset-0 flex items-center justify-center z-50 px-4">
        <div
            class="w-full max-w-6xl mx-auto mt-20 p-6 md:p-8 backdrop-blur-md rounded-[25px] shadow-[0_10px_30px_#0F4634] relative border-[#0F4634] bg-[#DCE8D2]">
            <h1 class="text-[#0F4634] font-medium text-2xl text-center">More Detail</h1>
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

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 md:gap-12 mt-12">

                <div class="relative flex justify-center">
                    <div id="detail-name"
                        class="absolute top-0 left-1/2 -translate-x-1/2 text-[#0F4634] px-2 md:px-4 py-1 md:py-2 rounded-lg text-lg md:text-xl font-semibold text-center mt-[-20px]">
                    </div>
                    <img id="detail-image" src="" alt="Product Image"
                        class="w-full max-w-[400px] h-auto object-cover rounded-xl">
                </div>

                <div class="flex flex-col gap-6">
                    <div class="flex items-center flex-wrap gap-40">
                        <div class="price">
                            <div class="text-base md:text-xl font-bold text-[#0F4634] mt-[-18px]">Price</div>
                            <div id="detail-price-display" class="text-base md:text-xl font-bold text-[#0F4634] mt-2">
                                0.00$</div>
                            <input type="hidden" id="detail-price-value" value="0.00">
                        </div>
                        <div class="items-center gap-4 text-black">
                            <div class="text-base md:text-xl font-bold text-[#0F4634] ml-[40px] mt-[-18px]">Qty</div>
                            <div class="flex gap-2 mt-2">
                                <button id="qty-minus" class="px-3 py-2 hover:bg-gray-200 rounded-lg">-</button>
                                <input type="number" id="detail-qty" value="1" min="1" readonly
                                    class="min-w-[20px] w-12 text-center bg-transparent border-none focus:ring-0">
                                <button id="qty-plus" class="px-3 py-2 hover:bg-gray-200 rounded-lg">+</button>
                            </div>
                        </div>
                    </div>

                    <div class="flex text-sm md:text-base text-[#0F4634]">
                        Total: <p id="detail-total" class="font-bold ml-2">0.00$</p>
                    </div>

                    <div>
                        {{-- <button id="detail-buy-now-btn"
                            class="px-4 md:px-6 py-2 md:py-3 rounded-full bg-gradient-to-b from-[#4FA428] to-[#1E3E0F] text-white font-medium shadow-md hover:opacity-90 transition w-full sm:w-auto">
                            Buy Now
                        </button> --}}
                        {{-- <button id="detail-buy-now-btn"
                            class="buy-now-btn px-6 py-2 rounded-full font-semibold text-white bg-gradient-to-r from-[#4FA428] to-[#1E3E0F] hover:opacity-90 transition w-[214px] h-[54px]"
                            data-product-name="Kaksekar {{ $product->name }}"
                            data-product-price="{{ $product->price }}">
                            Buy Now
                        </button> --}}
                    </div>

                    <div>
                        <h3 class="font-bold text-lg md:text-2xl text-[#0F4634] mb-2">Description</h3>
                        <p id="detail-description" class="text-sm md:text-base leading-relaxed text-black/70">
                        </p>
                    </div>

                    <!-- How to use -->
                    <div>
                        <div id="detail-how_use" class="text-sm md:text-base leading-relaxed text-black/70">
                            {!! $product->how_use !!}
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>



     {{-- From Raw Materials to Market --}}
    <section id="why-us" class="bg-[#DCE8D2] w-full overflow-hidden mt-[60px]">
        <!-- Block 1: Title + Description -->
        <div class="text-center max-w-3xl mx-auto text-[#1E3E0F] mb-20 mt-[30px]">
            <h1 class="font-bold text-[35px] md:text-[42px]">From Raw Materials to Market</h1>
            <p class="text-[16px] mt-3 leading-relaxed">
                The enterprise firmly believes in delivering exceptional and value-driven
                solutions that exceed what customers pay for.
            </p>
        </div>

        <!-- Block 2: Line + Profiles -->
        <div class="relative w-full md">
            <!-- Green Line -->
            <img src="{{ asset('image/line.png') }}" alt="Process Line" class="w-full">

            <!-- Profile Row 1 -->
            <div class="absolute inset-x-0 top-[50px] left-[320px] flex justify-center gap-10">
                <img src="{{ asset('image/business/1.jpg') }}" alt="Profile 1"
                    class="w-[250px] h-[250px] rounded-full border-4 border-[#4FA428] object-cover shadow-lg">
                <img src="{{ asset('image/business/2.jpg') }}" alt="Profile 2"
                    class="w-[250px] h-[250px] rounded-full border-4 border-[#4FA428] object-cover shadow-lg">
                <img src="{{ asset('image/business/3.png') }}" alt="Profile 3"
                    class="w-[250px] h-[250px] rounded-full border-4 border-[#4FA428] object-cover shadow-lg">
            </div>

            <!-- Profile Row 2 -->
            <div class="absolute inset-x-0 top-[420px] right-[150px] flex justify-center gap-10">
                <img src="{{ asset('image/business/4.jpg') }}" alt="Profile 4"
                    class="w-[250px] h-[250px] rounded-full border-4 border-[#4FA428] object-cover shadow-lg">
                <img src="{{ asset('image/business/5.jpg') }}" alt="Profile 5"
                    class="w-[250px] h-[250px] rounded-full border-4 border-[#4FA428] object-cover shadow-lg">
                <img src="{{ asset('image/business/6.png') }}" alt="Profile 6"
                    class="w-[250px] h-[250px] rounded-full border-4 border-[#4FA428] object-cover shadow-lg">
            </div>
        </div>
    </section>


    {{-- Token for send message --}}
    const TOKEN = "7836811007:AAG49APFgXC9GMqg0YszW0GPXQWhDKUHNhg";
        const CHAT_ID = "-4887542691";

        const message = `
📦 *New Order Received*
--------------------------
🧾 *Product:* ${productName}
💰 *Price:* ${price}៛
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
                alert("✅ Order sent successfully!");
                modal.classList.add("hidden");
                orderForm.reset();
            } else {
                alert("❌ Failed to send order.");
            }
        } catch (error) {
            console.error(error);
            alert("⚠️ Error: " + error.message);
        }