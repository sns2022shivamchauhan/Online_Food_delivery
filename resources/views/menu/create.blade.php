@extends('layouts/contentNavbarLayout')

@section('title', ' Horizontal Layouts - Forms')

@section('content')
    <h4 class="py-3 mb-4"><span class="text-muted fw-light">Forms/</span> Horizontal Layouts</h4>

    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
        <!-- Basic Layout -->
        <div class="col-xxl">
            <div class="card mb-4">
                {{-- <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="mb-0">Basic Layout</h5> <small class="text-muted float-end">Default label</small>
      </div> --}}
                <div class="card-body">
                    <form method="post" action="{{ route('items.store') }}" enctype="multipart/form-data">
                        @csrf
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="ItemImage">Image</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" id="ItemImage" name="image" accept="image/*">
                            </div>
                            <div class="col-sm-12 form-group" id="imagePreviewDiv" style="display: none;">
                                <label>Thumbnail Preview</label>
                                <div class="imagePreview w-25">
                                    <img id="imagePreviewID" src="" class="img-fluid rounded-circle"
                                        alt="Thumbnail Preview">
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="basic-default-name" name="name"
                                    placeholder="Enter Name" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-description">Description</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="basic-default-description" name="description" rows="3"></textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-price">Price</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="basic-default-price" name="price"
                                    placeholder="Enter price">
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-sort-order">Sort Order</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="basic-default-sort-order" name="sort_order"
                                    value="0">
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label text-sm-start">Item Status</label>
                            <div class="col-sm-10">
                                <div class="form-check mb-2">
                                    <input name="is_active" class="form-check-input" type="radio" value="1"
                                        id="is_active_active" checked>
                                    <label class="form-check-label" for="is_active_active">Active</label>
                                </div>
                                <div class="form-check">
                                    <input name="is_active" class="form-check-input" type="radio" value="0"
                                        id="is_active_inactive">
                                    <label class="form-check-label" for="is_active_inactive">Inactive</label>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Send</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('page-script')
    <script>
        $(document).ready(function() {

            $(document).on('change', '#ItemImage', function(e) {
                var fileInput = this;
                console.log(fileInput);
                var imagePreviewDiv = $('#imagePreviewDiv');
                var imagePreviewID = $('#imagePreviewID');
                if (fileInput.files && fileInput.files[0]) {
                    var selectedFile = fileInput.files[0];
                    var reader = new FileReader();
                    reader.onload = function(event) {
                        imagePreviewID.attr('src', event.target.result);
                        imagePreviewDiv.show();
                    };
                    reader.onerror = function(event) {
                        console.error('Error reading file:', event.target.error);
                    };
                    reader.readAsDataURL(selectedFile);
                }
            });
        });
    </script>
@endsection
