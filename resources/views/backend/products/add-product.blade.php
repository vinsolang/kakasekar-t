@extends('backend.admin')
@section('content')

    @section('site-title')
        Admin | Add Product
    @endsection
    @section('page-main-title')
        Add Product
    @endsection

    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="col-xl-12">
                <form action="{{ route('submit.add.product') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        <div class="card-body">

                            {{-- Display session message --}}
                            @if(Session::has('success'))
                                <p class="text-green-600 text-center">{{ Session::get('success') }}</p>
                            @endif
                            @if(Session::has('error'))
                                <p class="text-red-600 text-center">{{ Session::get('error') }}</p>
                            @endif

                            <div class="row">

                                {{-- Product Name --}}
                                <div class="mb-3 col-12">
                                    <label class="form-label text-[#0F4634]">Name English</label>
                                    <input class="form-control" type="text" name="name" value="{{ old('name') }}">
                                    @error('name')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
                                </div>
                                {{-- Product Name --}}
                                <div class="mb-3 col-12">
                                    <label class="form-label text-[#0F4634]">Name Khmer</label>
                                    <input class="form-control" type="text" name="name_km" value="{{ old('name_km') }}">
                                    @error('name_km')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
                                </div>

                                {{-- Price --}}
                                <div class="mb-3 col-12">
                                    <label class="form-label text-[#0F4634]">Price English</label>
                                    <input class="form-control" type="number" step="0.01" min="0" name="price"
                                        value="{{ old('price') }}">
                                    @error('price')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
                                </div>
                                 {{-- Price --}}
                                {{-- <div class="mb-3 col-12">
                                    <label class="form-label text-[#0F4634]">Price Khmer</label>
                                    <input class="form-control" type="number" step="0.01" min="0" name="price_km"
                                        value="{{ old('price_km') }}">
                                    @error('price_km')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
                                </div> --}}
                                {{-- Price 5 --}}
                                {{-- <div class="mb-3 col-12">
                                    <label class="form-label text-[#0F4634]">Price of Qty 2->5</label>
                                    <input class="form-control" type="number" step="0.01" min="0" name="price_5"
                                        value="{{ old('price_5') }}">
                                    @error('price_5')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
                                </div> --}}
                                {{-- Price 60--}}
                                {{-- <div class="mb-3 col-12">
                                    <label class="form-label text-[#0F4634]">Price of Qty 6->60</label>
                                    <input class="form-control" type="number" step="0.01" min="0" name="price_60"
                                        value="{{ old('price_60') }}">
                                    @error('price_60')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
                                </div> --}}
                                {{-- Price 120--}}
                                {{-- <div class="mb-3 col-12">
                                    <label class="form-label text-[#0F4634]">Price of Qty 61-120</label>
                                    <input class="form-control" type="number" step="0.01" min="0" name="price_120"
                                        value="{{ old('price_120') }}">
                                    @error('price_120')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
                                </div> --}}
                                {{-- Price 600--}}
                                {{-- <div class="mb-3 col-12">
                                    <label class="form-label text-[#0F4634]">Price of Qty 121->600</label>
                                    <input class="form-control" type="number" step="0.01" min="0" name="price_600"
                                        value="{{ old('price_600') }}">
                                    @error('price_600')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
                                </div> --}}
                                {{-- Price Infinity--}}
                                {{-- <div class="mb-3 col-12">
                                    <label class="form-label text-[#0F4634]">Price of Qty 600 up</label>
                                    <input class="form-control" type="number" step="0.01" min="0" name="price_infinity"
                                        value="{{ old('price_infinity') }}">
                                    @error('price_infinity')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
                                </div> --}}

                                {{-- Capacity --}}
                                <div class="mb-3 col-12">
                                    <label class="form-label text-[#0F4634]">Capacity</label>
                                    <input class="form-control" type="text" min="1" name="capacity" value="{{ old('capacity') }}">
                                    @error('capacity')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
                                </div>

                                {{-- Description --}}
                                <div class="mb-3 col-12">
                                    <label class="form-label text-[#0F4634]">Description English</label>
                                    <textarea name="description" class="form-control"
                                        rows="5">{{ old('description') }}</textarea>
                                    @error('description')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
                                </div>

                                {{-- Description --}}
                                <div class="mb-3 col-12">
                                    <label class="form-label text-[#0F4634]">Description Khmer</label>
                                    <textarea name="description_km" class="form-control"
                                        rows="5">{{ old('description_km') }}</textarea>
                                    @error('description_km')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
                                </div>

                                {{-- How to Use / Ingredients --}}
                                <div class="mb-3 col-12">
                                    <label class="form-label text-[#0F4634]">How to Use & Ingredients English</label>
                                    <textarea name="how_use" id="content_kh">{{ old('how_use') }}</textarea>
                                    @error('how_use')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
                                </div>
                                 <div class="mb-3 col-12">
                                    <label class="form-label text-[#0F4634]">How to Use & Ingredients Khmer</label>
                                    <textarea name="how_use_km" id="content_kh">{{ old('how_use_km') }}</textarea>
                                    @error('how_use_km')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
                                </div>


                                {{-- Upload Thumbnail & Banner --}}
                                <div class="flex gap-4">

                                    {{-- Thumbnail --}}
                                    <div class="mb-5">
                                        <label class="block mb-2 text-sm font-medium text-[#0F4634]">Product
                                            Thumbnail</label>
                                        <label for="thumbnailFile"
                                            class="flex flex-col items-center justify-center w-[200px] h-[300px] border-2 border-dashed border-[#0F4634]/40 cursor-pointer bg-[#F9FAFB] hover:bg-[#F3F4F6] transition relative overflow-hidden">
                                            <img id="thumbnailPreview"
                                                class="hidden absolute inset-0 m-auto w-[150px] h-[220px] object-contain" />
                                            <div id="thumbnailPlaceholder"
                                                class="flex flex-col items-center justify-center text-center">
                                                <svg class="w-10 h-10 mb-2 text-[#0F4634]" fill="none" stroke="currentColor"
                                                    stroke-width="2" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M3 15a4 4 0 014-4h1m0 0a4 4 0 014-4V3m0 4a4 4 0 014 4h1a4 4 0 014 4v1a4 4 0 01-4 4h-1m-4 0a4 4 0 01-4 4v1a4 4 0 01-4-4H7" />
                                                </svg>
                                                <p class="text-xs text-gray-500">Upload</p>
                                            </div>
                                            <input id="thumbnailFile" type="file" name="image_product" accept="image/*"
                                                class="hidden" />
                                        </label>
                                        @error('image_product')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    {{-- Banner --}}
                                    {{-- <div class="mb-5">
                                        <label class="block mb-2 text-sm font-medium text-[#0F4634]">Product Banner</label>
                                        <label for="bannerFile"
                                            class="flex flex-col items-center justify-center w-[200px] h-[300px] border-2 border-dashed border-[#0F4634]/40 cursor-pointer bg-[#F9FAFB] hover:bg-[#F3F4F6] transition relative overflow-hidden">
                                            <img id="bannerPreview"
                                                class="hidden absolute inset-0 m-auto w-[150px] h-[220px] object-contain" />
                                            <div id="bannerPlaceholder"
                                                class="flex flex-col items-center justify-center text-center">
                                                <svg class="w-10 h-10 mb-2 text-[#0F4634]" fill="none" stroke="currentColor"
                                                    stroke-width="2" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M3 15a4 4 0 014-4h1m0 0a4 4 0 014-4V3m0 4a4 4 0 014 4h1a4 4 0 014 4v1a4 4 0 01-4 4h-1m-4 0a4 4 0 01-4 4v1a4 4 0 01-4-4H7" />
                                                </svg>
                                                <p class="text-xs text-gray-500">Upload</p>
                                            </div>
                                            <input id="bannerFile" type="file" name="banner" accept="image/*"
                                                class="hidden" />
                                        </label>
                                        @error('banner')<p class="text-red-500 text-sm mt-1">{{ $message }}</p>@enderror
                                    </div> --}}
                                </div>

                            </div>

                            {{-- Buttons --}}
                            <div class="flex gap-3">
                                <a href="{{ route('view_product') }}"
                                    class="px-6 py-3 border-2 border-[#0F4634] text-[#0F4634] font-semibold rounded-xl hover:bg-[#0F4634] hover:text-white transition duration-200">
                                    Cancel
                                </a>
                                <input type="submit"
                                    class="px-6 py-3 border-2 border-[#0F4634] text-[#0F4634] font-semibold rounded-xl hover:bg-[#0F4634] hover:text-white transition duration-200"
                                    value="Add Product">
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- CKEditor 5 --}}
    <script src="https://cdn.ckeditor.com/ckeditor5/41.3.1/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#content_kh'), {
                toolbar: [
                    'heading', '|',
                    'bold', 'italic', 'underline', 'strikethrough', '|',
                    'fontFamily', 'fontSize', 'fontColor', 'fontBackgroundColor', '|',
                    'link', 'bulletedList', 'numberedList', 'blockQuote', '|',
                    'insertTable', 'undo', 'redo', 'alignment'
                ],
                table: {
                    contentToolbar: ['tableColumn', 'tableRow', 'mergeTableCells', 'tableProperties', 'tableCellProperties']
                },
                fontSize: { options: [9, 11, 13, 'default', 17, 19, 21] }
            })
            .catch(error => { console.error(error); });
    </script>

    {{-- Image Preview --}}
    <script>
        document.addEventListener("DOMContentLoaded", function () {

            function previewImage(input, previewImg, placeholder) {
                input.addEventListener("change", function () {
                    const file = this.files[0];
                    if (file) {
                        const reader = new FileReader();
                        reader.onload = function (e) {
                            previewImg.src = e.target.result;
                            previewImg.classList.remove("hidden");
                            placeholder.classList.add("hidden");
                        };
                        reader.readAsDataURL(file);
                    } else {
                        previewImg.classList.add("hidden");
                        placeholder.classList.remove("hidden");
                    }
                });
            }

            previewImage(
                document.getElementById("thumbnailFile"),
                document.getElementById("thumbnailPreview"),
                document.getElementById("thumbnailPlaceholder")
            );

            previewImage(
                document.getElementById("bannerFile"),
                document.getElementById("bannerPreview"),
                document.getElementById("bannerPlaceholder")
            );

        });
    </script>

@endsection