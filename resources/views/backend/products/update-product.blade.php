@extends('backend.admin')

@section('site-title', 'Admin | Edit Product')
@section('page-main-title', 'EDIT PRODUCT')

@section('content')
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">

            <div class="col-xl-12">
                <form action="{{ route('submit.update.product') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="card">

                        @if (Session::has('message'))
                            <p class="text-danger text-center">{{ Session::get('message') }}</p>
                        @endif

                        <div class="card-body">
                            <div class="row">

                                <input type="hidden" name="update_id" value="{{ $row->id }}">

                                <div class="mb-3 col-12">
                                    <label class="form-label text-[#0F4634]">Name English</label>
                                    <input class="form-control" type="text" name="update_name" value="{{ $row->name }}">
                                </div>

                                <div class="mb-3 col-12">
                                    <label class="form-label text-[#0F4634]">Name Khmer</label>
                                    <input class="form-control" type="text" name="update_name_km"
                                        value="{{ $row->name_km }}">
                                </div>

                                <div class="mb-3 col-12">
                                    <label class="form-label text-[#0F4634]">Price English</label>
                                    <input class="form-control" type="number" step="0.01" min="0" name="update_price"
                                        value="{{ $row->price }}">
                                    @error('update_price') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                                </div>

                                <div class="mb-3 col-12">
                                    <label class="form-label text-[#0F4634]">Price Khmer</label>
                                    <input class="form-control" type="number" step="0.01" min="0" name="update_price_km"
                                        value="{{ $row->price_km ?? '' }}">
                                    @error('update_price_km') <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="mb-3 col-12 hidden">
                                    <label class="form-label text-[#0F4634]">Price 5</label>
                                    <input class="form-control" type="number" step="0.01" min="0" name="update_price_5"
                                        value="{{ $row->price_5 ?? '' }}">
                                    @error('update_price_5') <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="mb-3 col-12 hidden">
                                    <label class="form-label text-[#0F4634]">Price 60</label>
                                    <input class="form-control" type="number" step="0.01" min="0" name="update_price_60"
                                        value="{{ $row->price_60 ?? '' }}">
                                    @error('update_price_60') <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="mb-3 col-12 hidden">
                                    <label class="form-label text-[#0F4634]">Price 120</label>
                                    <input class="form-control" type="number" step="0.01" min="0" name="update_price_120"
                                        value="{{ $row->price_120 ?? '' }}">
                                    @error('update_price_120') <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="mb-3 col-12 hidden">
                                    <label class="form-label text-[#0F4634]">Price 600</label>
                                    <input class="form-control" type="number" step="0.01" min="0" name="update_price_600"
                                        value="{{ $row->price_600 ?? '' }}">
                                    @error('update_price_600') <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="mb-3 col-12 hidden">
                                    <label class="form-label text-[#0F4634]">Price Infinity</label>
                                    <input class="form-control" type="number" step="0.01" min="0"
                                        name="update_price_infinity" value="{{ $row->price_infinity ?? '' }}">
                                    @error('update_price_infinity') <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="mb-3 col-12">
                                    <label class="form-label text-[#0F4634]">Capacity</label>
                                    <input class="form-control" type="text" name="update_qty" value="{{ $row->capacity }}">
                                </div>

                                <div class="mb-3 col-12">
                                    <label class="form-label text-[#0F4634]">Description English</label>
                                    <textarea name="update_description" class="form-control"
                                        rows="5">{{ $row->description }}</textarea>
                                </div>

                                <div class="mb-3 col-12">
                                    <label class="form-label text-[#0F4634]">Description Khmer</label>
                                    <textarea name="update_description_km" class="form-control"
                                        rows="5">{{ $row->description_km }}</textarea>
                                </div>

                                <div class="mb-3 col-12">
                                    <label for="how_use_en" class="block text-sm font-medium text-gray-700">How to
                                        use (English)</label>
                                    <textarea name="update_how_use" id="how_use_en" rows="4"
                                        class="mt-1 block w-full p-2 border rounded-md focus:ring-[#401457] focus:border-[#401457] text-[#401457] text-sm">
                                                                    {{ old('content.en') }}
                                                                    {{ $row->how_use }}
                                                                </textarea>


                                    @error('content.en')
                                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="mb-3 col-12">
                                    <label for="how_use_km" class="block text-sm font-medium text-gray-700">How to
                                        use (Khmer)</label>
                                    <textarea name="update_how_use_km" id="how_use_km" rows="4"
                                        class="mt-1 block w-full p-2 border rounded-md focus:ring-[#401457] focus:border-[#401457] text-[#401457] text-sm">
                                                                    {{ old('content.kh') }}
                                                                    {{ $row->how_use_km }}
                                                                </textarea>


                                    @error('content.kh')
                                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-5">
                                    <label class="block mb-2 text-sm font-medium text-[#0F4634]">Product Thumbnail</label>

                                    <label for="thumbnailFile"
                                        class="flex flex-col items-center justify-center w-[200px] h-[300px] border-2 border-dashed border-[#0F4634]/40 cursor-pointer bg-[#F9FAFB] hover:bg-[#F3F4F6] transition relative overflow-hidden">

                                        <img id="thumbnailPreview"
                                            src="{{ asset('assets/products/thumbnail/' . $row->image_product) }}"
                                            class="absolute inset-0 m-auto w-[150px] h-[220px] object-contain">

                                        <div id="thumbnailPlaceholder"
                                            class="flex flex-col items-center justify-center text-center hidden">
                                            <svg class="w-10 h-10 mb-2 text-[#0F4634]" fill="none" stroke="currentColor"
                                                stroke-width="2" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M3 15a4 4 0 014-4h1m0 0a4 4 0 014-4V3m0 4a4 4 0 014 4h1a4 4 0 014 4v1a4 4 0 01-4 4h-1m-4 0a4 4 0 01-4 4v1a4 4 0 01-4-4H7" />
                                            </svg>
                                            <p class="text-xs text-gray-500">Upload</p>
                                        </div>

                                        <input id="thumbnailFile" type="file" name="update_image_product" accept="image/*"
                                            class="hidden">
                                        <input type="hidden" name="old_image_product" value="{{ $row->image_product }}">
                                    </label>

                                    @error('update_image_product')
                                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>

                            </div>

                            <div class="flex gap-3 mt-4">
                                <a href="{{ route('view_product') }}"
                                    class="px-6 py-3 border-2 border-[#0F4634] text-[#0F4634] font-semibold rounded-xl hover:bg-[#0F4634] hover:text-white transition duration-200">
                                    Cancel
                                </a>
                                <button type="submit"
                                    class="px-6 py-3 border-2 border-[#0F4634] text-[#0F4634] font-semibold rounded-xl hover:bg-[#0F4634] hover:text-white transition duration-200">
                                    Edit Product
                                </button>
                            </div>

                        </div>
                    </div>
                </form>

            </div>

        </div>
    </div>
    <script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>

    <script>
        // Thumbnail Preview
        document.getElementById('thumbnailFile').addEventListener('change', function (event) {
            const file = event.target.files[0];
            const preview = document.getElementById('thumbnailPreview');
            const placeholder = document.getElementById('thumbnailPlaceholder');

            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    preview.src = e.target.result;
                    placeholder.classList.add('hidden');
                }
                reader.readAsDataURL(file);
            } else {
                // If no new file, show old image
                preview.src = "{{ asset('assets/products/thumbnail/' . $row->image_product) }}";
                placeholder.classList.add('hidden');
            }
        });

        // Initialize CKEditor on the How to use textareas
        ClassicEditor
            .create(document.querySelector('#how_use_en'))
            .catch(error => {
                console.error(error);
            });

        ClassicEditor
            .create(document.querySelector('#how_use_km'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection