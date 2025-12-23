@extends('backend.admin')
@section('content')

    @section('site-title')
        Admin | Add Post
    @endsection
    @section('page-main-title')
        UPDATE PARTNER LOGO
    @endsection

    <!-- Content wrapper -->
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="col-xl-12">
                <!-- File input -->
                <form action="{{ route('update.submitLogo') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        @if (Session::has('message'))
                            <p class="text-danger text-center">{{ Session::get('message') }}</p>
                        @endif
                        <div class="card-body">
                            <input type="hidden" name="update_id" value="{{$row[0]->id}}">
                            <div class="row col-6">
                                <div class="mb-3 col-12">
                                    <label for="formFile" class="form-label text-danger">Name Partner</label>
                                    <input class="form-control" type="text" name="update_name"
                                        value="{{ $row[0]->name }}" />
                                </div>
                            </div>
                            <div class="row col-6">
                                <div class="mb-3 col-12">
                                    <label for="formFile" class="form-label text-danger">Please Choose Logo</label>
                                    <!-- keep old logo filename for backend -->
                                    <input type="hidden" name="old_thumbnail" value="{{ $row[0]->thumbnail }}" />

                                    <!-- new file input -->
                                    <input class="form-control" type="file" name="update_thumbnail" id="update_thumbnail" />
                                </div>
                            </div>

                            <div class="row col-12">
                                <div class="mb-3 col-12 preview">
                                    <label class="form-label text-danger">Partner Logo</label>
                                    <!-- preview old logo (will change to new one when selected) -->
                                    <img id="previewImage" src="{{ asset('assets/logo/' . $row[0]->thumbnail) }}"
                                        alt="Logo Preview" style="max-width:150px; border:1px solid #ccc; padding:4px;">
                                </div>
                            </div>
                            <div class="mb-3">
                                <a href="{{ route('view_logo') }}">
                                    <input type="button"
                                        class="px-6 py-3 border-2 border-[#0F4634] text-[#0F4634] font-semibold rounded-xl hover:bg-[#0F4634] hover:text-white focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition duration-200"
                                        value="Cancel">
                                </a>
                                <input type="submit"
                                    class="px-6 py-3 border-2 border-[#0F4634] text-[#0F4634] font-semibold rounded-xl hover:bg-[#0F4634] hover:text-white focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition duration-200"
                                    value="Update Logo">
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

@endsection