@extends('backend.admin')
@section('content')

    @section('site-title')
        Admin | Add Post
    @endsection
    @section('page-main-title')
        UPDATE CERTIFICATE
    @endsection

    <!-- Content wrapper -->
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="col-xl-12">
                <!-- File input -->
                <form action="{{ route('submit.update.certificate') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        @if (Session::has('message'))
                            <p class="text-danger text-center">{{ Session::get('message') }}</p>
                        @endif
                        <div class="card-body">
                            <div class="row col-6">
                                <input type="hidden" name="update_id" value="{{$row[0]->id}}">
                                <div class="mb-3 col-12">
                                    <label for="formFile" class="form-label text-danger">Please choose your for edit
                                        Certificate</label>
                                    <!-- keep old logo filename for backend -->
                                    <input type="text" name="old_thumbnail" value="{{ $row[0]->thumbnail}}" />

                                    <!-- New image -->
                                    <input class="form-control" type="file" name="update_thumbnail" />
                                </div>
                            </div>
                             <div class="row col-12">
                                <div class="mb-3 col-12 preview">
                                    <label class="form-label text-danger">Your Certifiate</label>
                                    <!-- preview old logo (will change to new one when selected) -->
                                    <img id="previewImage" src="{{ asset('assets/certifiate/' . $row[0]->thumbnail) }}"
                                        alt="Logo Preview" style="max-width:150px; border:1px solid #ccc; padding:4px;">
                                </div>
                            </div>

                            <div class="flex gap-3">
                                <a href="{{ route('view.certi') }}"  class="px-6 py-3 border-2 border-[#0F4634] text-[#0F4634] font-semibold rounded-xl hover:bg-[#0F4634] hover:text-white focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition duration-200">
                                    Cancel
                                </a>
                                <input type="submit"
                                    class="px-6 py-3 border-2 border-[#0F4634] text-[#0F4634] font-semibold rounded-xl hover:bg-[#0F4634] hover:text-white focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition duration-200"
                                    value="Edit Certificate">
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

@endsection