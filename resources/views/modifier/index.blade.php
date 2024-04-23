@extends('layouts/contentNavbarLayout')

@section('title', ' Horizontal Layouts - Forms')

@section('content')

    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
        <div class="row mx-1">
            <div class="col-md-2 d-flex align-items-center justify-content-md-start justify-content-center">
                <div class="dt-action-buttons">
                    <div class="dt-buttons"><button
                            class="dt-button buttons-collection dropdown-toggle btn btn-label-secondary" tabindex="0"
                            aria-controls="DataTables_Table_0" type="button" aria-haspopup="dialog"
                            aria-expanded="false"><span><i class="mdi mdi-export-variant me-1"></i> <span
                                    class="d-none d-sm-inline-block">Export</span></span><span
                                class="dt-down-arrow">▼</span></button> </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="d-flex align-items-center justify-content-md-end justify-content-center">
                    <div class="me-3">
                        <div id="DataTables_Table_0_filter" class="dataTables_filter"><label><input type="search"
                                    class="form-control" placeholder="Search.." aria-controls="DataTables_Table_0"></label>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <table class="datatables-users table dataTable no-footer dtr-column" id="DataTables_Table_0"
            aria-describedby="DataTables_Table_0_info" style="width: 1394px;">
            <thead class="border-top table-light">
                <tr>
                    <th class="control sorting_disabled dtr-hidden" rowspan="1" colspan="1"
                        style="width: 0px; display: none;" aria-label=""></th>
                    <th class="sorting_disabled dt-checkboxes-cell dt-checkboxes-select-all" rowspan="1" colspan="1"
                        style="width: 18px;" data-col="1" aria-label=""><input type="checkbox" class="form-check-input">
                    </th>
                    <th class="sorting sorting_desc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                        colspan="1" style="width: 290px;" aria-label="name: activate to sort column ascending"
                        aria-sort="descending">Name</th>
                        <th class="sorting sorting_desc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                        colspan="1" style="width: 290px;" aria-label="name: activate to sort column ascending"
                        aria-sort="descending">Price</th>

                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                        style="width: 107px;" aria-label="Plan: activate to sort column ascending">Is_active</th>
                    
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                        style="width: 94px;" aria-label="Status: activate to sort column ascending">Action</th>

                </tr>
            </thead>
            <tbody>
              @foreach($modifiers as $modifier)
                <tr class="odd">
                    <td class="  control" tabindex="0" style="display: none;"></td>
                    <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>
                    <td class="sorting_1">
                        <div class="d-flex justify-content-start align-items-center user-name">
                            <div class="avatar-wrapper">
                                <div class="avatar avatar-sm me-3"><img
                                        src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/2.png"
                                        alt="Avatar" class="rounded-circle"></div>
                            </div>
                            <div class="d-flex flex-column"><a
                                    href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/app/user/view/account"
                                    class="text-heading text-truncate"><span class="fw-medium">{{ $modifier->name }}</span></a></div>
                        </div>
                    </td>
                    {{-- <td><span>{{ $modifiers->is_pizza }}</span></td> --}}
                    <td><span class="badge rounded-pill bg-label-success" text-capitalized="">{{ $modifier->price }}</span></td>


                    <td><span class="badge rounded-pill bg-label-success" text-capitalized="">{{ $modifier->is_active }}</span></td>

                    <td>
                        <div class="d-inline-block text-nowrap"><button
                                class="btn btn-sm btn-icon btn-text-secondary rounded-pill btn-icon dropdown-toggle hide-arrow"
                                data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical mdi-20px"></i></button>
                            <div class="dropdown-menu dropdown-menu-end m-0"><a
                                    href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo-1/app/user/view/account"
                                    class="dropdown-item"><i class="mdi mdi-eye-outline me-2"></i><span>View</span></a><a
                                    href="javascript:;" class="dropdown-item"><i
                                        class="mdi mdi-pencil-outline me-2"></i><span>Edit</span></a><a
                                    href="javascript:;" class="dropdown-item delete-record"><i
                                        class="mdi mdi-delete-outline me-2"></i><span>Delete</span></a></div>
                        </div>
                    </td>
                </tr>
          @endforeach
            </tbody>
        </table>
        <div class="row mx-1">
            <div class="col-sm-12 col-md-6">
                <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to
                    10 of 50 entries</div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                    <ul class="pagination">
                        <li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a
                                aria-controls="DataTables_Table_0" aria-disabled="true" role="link"
                                data-dt-idx="previous" tabindex="0" class="page-link">Previous</a></li>
                        <li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0"
                                role="link" aria-current="page" data-dt-idx="0" tabindex="0"
                                class="page-link">1</a></li>
                        <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0"
                                role="link" data-dt-idx="1" tabindex="0" class="page-link">2</a></li>
                        <li class="paginate_button page-item "><a h.
                          ref="#" aria-controls="DataTables_Table_0"
                                role="link" data-dt-idx="2" tabindex="0" class="page-link">3</a></li>
                        <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0"
                                role="link" data-dt-idx="3" tabindex="0" class="page-link">4</a></li>
                        <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0"
                                role="link" data-dt-idx="4" tabindex="0" class="page-link">5</a></li>
                        <li class="paginate_button page-item next" id="DataTables_Table_0_next"><a href="#"
                                aria-controls="DataTables_Table_0" role="link" data-dt-idx="next" tabindex="0"
                                class="page-link">Next</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection
