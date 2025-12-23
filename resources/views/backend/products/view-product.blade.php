@extends('backend.admin')
@section('content')
    <div class="content-wrapper">
        @section('site-title')
            Admin | List Post
        @endsection
        @section('page-main-title')
            LIST PRODUCT
        @endsection

        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="card">
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Thumbnail</th>
                                <th>Name</th>
                                <th>Sale Price</th>
                                {{-- <th>price 5</th>
                                <th>Price 60</th>
                                <th>Price 120</th>
                                <th>Price 600</th>
                                <th>Price Infinity</th> --}}
                                <th>Capacity</th>
                                <th>Description</th>
                                <th>How to use</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($row as $products)
                                <tr>
                                    <td>
                                        <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                            <img src="../../assets/products/thumbnail/{{ $products->image_product }}" alt="Avatar" class="w-[60px] h-[60px] object-contain">
                                        </ul>
                                    </td>
                                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                        <strong>{{ $products->name }}</strong>
                                    </td>
                                    <td>{{$products->price}}៛</td>
                                    {{-- <td>{{$products->price_5}}៛</td>
                                    <td>{{$products->price_60}}៛</td>
                                    <td>{{$products->price_120}}៛</td>
                                    <td>{{$products->price_600}}៛</td>
                                    <td>{{$products->price_infinity}}៛</td> --}}
                                    <td>{{$products->capacity}}</td>
                                    <td>
                                        <span class="short-text d-none">
                                            {!! nl2br(e(\Illuminate\Support\Str::limit($products->description, 20))) !!}
                                        </span>
                                        <span class="full-text d-none" style="white-space: pre-line;">
                                            {!! nl2br(e($products->description)) !!}
                                        </span>
                                        <a href="javascript:void(0);" class="toggle-text text-primary">Read more</a>
                                    </td>
                                    <td >
                                        <span class="short-text d-none">
                                             {!! $products->how_use !!}
                                        </span>
                                        <span class="full-text d-none" style="white-space: pre-line;">
                                            {!! $products->how_use !!}
                                        </span>
                                        <a href="javascript:void(0);" class="toggle-text text-primary">Read more</a>

                                    </td>
                                    <td>
                                        <div class="dropdown position-static">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="{{ route('edit.product',['id'=>$products->id]) }}"><i
                                                        class="bx bx-edit-alt me-1"></i> Edit</a>
                                                <a href="javascript:void(0);" class="dropdown-item remove-post-key" data-id="{{ $products->id }}"
                                                    data-bs-toggle="modal" data-bs-target="#basicModal">
                                                    <i class="bx bx-trash me-1"></i> Delete
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="mt-3">
                <form action="{{ route('remove.product') }}" method="post">
                    @csrf
                    <div class="modal fade" id="basicModal" tabindex="-1" style="display: none;" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel1">Are you sure to remove this post?</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-footer">
                                    <input type="text" class="remove-val" name="remove_id" id="remove_id">
                                    <button type="submit" class="btn btn-danger">Confirm</button>
                                    <button type="button" class="btn btn-outline-secondary"
                                        data-bs-dismiss="modal">Cancel</button>
                                </div>
                            </div>
                        </div>
                </form>
            </div>

            <hr class="my-5" />
        </div>
        <!-- / Content -->
    </div>
    </div>

@endsection