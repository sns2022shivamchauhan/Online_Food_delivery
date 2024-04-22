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
                    <form method="post" action="{{ route('categories.store') }}">
                        @csrf
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="basic-default-name" name="name"
                                    placeholder="John Doe" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label text-sm-start">Is Pizza</label>
                            <div class="col-sm-10">
                                <div class="form-check mb-2">
                                    <input name="is_pizza" class="form-check-input" type="radio" value="active"
                                        id="is_pizza_active" checked>
                                    <label class="form-check-label" for="is_pizza_active">Active</label>
                                </div>
                                <div class="form-check">
                                    <input name="is_pizza" class="form-check-input" type="radio" value="inactive"
                                        id="is_pizza_inactive">
                                    <label class="form-check-label" for="is_pizza_inactive">Inactive</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label text-sm-start">Category Status</label>
                            <div class="col-sm-10">
                                <div class="form-check mb-2">
                                    <input name="category_status" class="form-check-input" type="radio" value="active"
                                        id="category_status_active" checked>
                                    <label class="form-check-label" for="category_status_active">Active</label>
                                </div>
                                <div class="form-check">
                                    <input name="category_status" class="form-check-input" type="radio" value="inactive"
                                        id="category_status_inactive">
                                    <label class="form-check-label" for="category_status_inactive">Inactive</label>
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
