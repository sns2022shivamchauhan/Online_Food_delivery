@extends('layouts/contentNavbarLayout')
@section('title', ' Horizontal Layouts - Forms')


{{-- @section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/apex-charts/apex-charts.css') }}">
@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>
@endsection

@section('page-script')
    <script src="{{ asset('assets/js/dashboards-analytics.js') }}"></script>
@endsection --}}
@section('content')

    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
        <!-- Basic Layout -->

        <form action="route{{ route('items.store') }}" method="POST">
          @csrf
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Add Item</h5> <small class="text-muted float-end">Items</small>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="basic-default-name" name="item_name" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-company">Description </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="basic-default-company"
                                        name="item_description" />
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-company">Price </label>
                                <div class="col-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-text">$</span>
                                        <input type="number" class="form-control"
                                            aria-label="Amount (to the nearest dollar)" />
                                        <span class="input-group-text">.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label text-sm-start">Item Status</label>
                                <div class="col-sm-10">
                                    <div class="form-check mb-2">
                                        <input name="category_status" class="form-check-input" type="radio" value="active"
                                            id="category_status_active" checked>
                                        <label class="form-check-label" for="category_status_active">Active</label>
                                    </div>
                                    <div class="form-check">
                                        <input name="category_status" class="form-check-input" type="radio"
                                            value="inactive" id="category_status_inactive">
                                        <label class="form-check-label" for="category_status_inactive">Inactive</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Taxes
                                </label>
                                <div class="col-sm-10">
                                    <div class="input-group">
                                        <select class="form-select" id="inputGroupSelect02">
                                            <option selected>None Selected...</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                        {{-- <label class="input-group-text" for="inputGroupSelect02">Options</label> --}}
                                    </div>

                                </div>
                            </div>


                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name"> Categories</label>
                                <div class="col-sm-10">
                                    <div class="input-group">
                                        <select class="form-select" id="inputGroupSelect02">
                                            <option selected>None Selected...</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                        {{-- <label class="input-group-text" for="inputGroupSelect02">Options</label> --}}
                                    </div>

                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <div class="col-sm-10">
                                    <button class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </form>

    </div>


@endsection
