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
                    <form method="post" action="{{ route('mdgroup.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="basic-default-name" name="name"
                                    placeholder="John Doe" />
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


                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label text-sm-start">Is Limit</label>
                          <div class="col-sm-10">
                              <div class="form-check mb-2">
                                  <input name="is_limit" class="form-check-input" type="radio" value="1" id="is_limit_active"  onchange="toggleLimitInput()">
                                  <label class="form-check-label" for="is_limit_active">Yes</label>
                              </div>
                              <div class="form-check">
                                  <input name="is_limit" class="form-check-input" type="radio" value="0" id="is_limit_inactive" onchange="toggleLimitInput()">
                                  <label class="form-check-label" for="is_limit_inactive">No</label>
                              </div>
                          </div>
                          <div class="row mb-3" id="limitInput" style="display: none;">
                            <label class="col-sm-2 col-form-label text-sm-start">Limit</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="limit" max="12" min="0" oninput="checkLimit(this)">
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
        function toggleLimitInput() {
        var isLimitActive = document.getElementById('is_limit_active').checked;
        var limitInput = document.getElementById('limitInput');

        if (isLimitActive) {
            limitInput.style.display = 'block';
        } else {
            limitInput.style.display = 'none';
        }
    }function checkLimit(input) {
        if (input.value > 12) {
            input.value = 12; // Set value to 12 if it exceeds the limit
        }
    }
    </script>
@endsection
