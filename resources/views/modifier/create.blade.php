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
                    <form method="post" action="{{ route('modifier.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
                          <div class="col-sm-10">
                              <input type="text" class="form-control" id="basic-default-name" name="name"
                                  placeholder="John Doe" />
                          </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Price</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="basic-default-name" name="price"
                                placeholder="$" />
                        </div>
                    </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-sort-order">Sort Order</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="basic-default-sort-order" name="sort_order"
                                    >
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label text-sm-start"> Status</label>
                            <div class="col-sm-10">
                                <div class="form-check mb-2">
                                    <input name="is_active" class="form-check-input" type="radio" value="1"
                                        id="is_active_active" >
                                    <label class="form-check-label" for="is_active_active">Active</label>
                                </div>
                                <div class="form-check">
                                    <input name="is_active" class="form-check-input" type="radio" value="0"
                                        id="is_active_inactive">
                                    <label class="form-check-label" for="is_active_inactive">Inactive</label>
                                </div>
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
  
@endsection
