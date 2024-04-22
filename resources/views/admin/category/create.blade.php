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
                        <div class="row mb-3" id="item-map">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Item Mapped</label>
                            <div class="col-sm-10">
                              <select id="item-map" multiple="multiple" class="form-select" id="basic-default-name" name="items[]">
                                <option value="Javascript">Javascript</option>
                                <option value="Python">Python</option>
                                <option value="LISP">LISP</option>
                                <option value="C++">C++</option>
                                <option value="jQuery">jQuery</option>
                                <option value="Ruby">Ruby</option>
                            </select>
                            </div>
                        </div>
                        <div class="row mb-3" id="item-map">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Item Mapped with Category</label>
                            <div class="col-sm-10">
                              <select id="item-map" multiple="multiple" class="form-select" id="basic-default-name" name="items[]">
                                <option value="Javascript">Javascript</option>
                                <option value="Python">Python</option>
                                <option value="LISP">LISP</option>
                                <option value="C++">C++</option>
                                <option value="jQuery">jQuery</option>
                                <option value="Ruby">Ruby</option>
                            </select>
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

@section('page-script')
    <script>
        $(document).ready(function() {
            $(function() {
                $('#item-map').multiselect();
            });

            $('#item-map').multiselect({

                // allows HTML content
                enableHTML: false,

                // CSS class of the multiselect button
                buttonClass: 'custom-select',

                // inherits the class of the button from the original select
                inheritClass: false,

                // width of the multiselect button
                buttonWidth: 'auto',

                // container that holds both the button as well as the dropdown
                buttonContainer: '<div class="btn-group" />',

                // places the dropdown on the right side
                dropRight: false,

                // places the dropdown on the top
                dropUp: false,

                // CSS class of the selected option
                selectedClass: 'active',

                // maximum height of the dropdown menu
                // if maximum height is exceeded a scrollbar will be displayed
                maxHeight: false,

                // includes Select All Option
                includeSelectAllOption: false,

                // shows the Select All Option if options are more than ...
                includeSelectAllIfMoreThan: 0,

                // Lable of Select All
                selectAllText: ' Select all',

                // the select all option is added as additional option within the select
                // o distinguish this option from the original options the value used for the select all option can be configured using the selectAllValue option.
                selectAllValue: 'multiselect-all',

                // control the name given to the select all option
                selectAllName: false,

                // if true, the number of selected options will be shown in parantheses when all options are seleted.
                selectAllNumber: true,

                // setting both includeSelectAllOption and enableFiltering to true, the select all option does always select only the visible option
                // with setting selectAllJustVisible to false this behavior is changed such that always all options (irrespective of whether they are visible) are selected
                selectAllJustVisible: true,

                // enables filtering
                enableFiltering: false,

                // determines if is case sensitive when filtering
                enableCaseInsensitiveFiltering: false,

                // enables full value filtering
                enableFullValueFiltering: false,

                // if true, optgroup's will be clickable, allowing to easily select multiple options belonging to the same group
                enableClickableOptGroups: false,

                // enables collapsible OptGroups
                enableCollapsibleOptGroups: false,

                // collapses all OptGroups on init
                collapseOptGroupsByDefault: false,

                // placeholder of filter filed
                filterPlaceholder: 'Search',

                // possible options: 'text', 'value', 'both'
                filterBehavior: 'text',

                // includes clear button inside the filter filed
                includeFilterClearBtn: true,

                // prevents input change event
                preventInputChangeEvent: false,

                // message to display when no option is selected
                nonSelectedText: 'None selected',

                // message to display if more than numberDisplayed options are selected
                nSelectedText: 'selected',

                // message to display if all options are selected
                allSelectedText: 'All selected',

                // determines if too many options would be displayed
                numberDisplayed: 3,

                // disables the multiselect if empty
                disableIfEmpty: false,

                // message to display if the multiselect is disabled
                disabledText: '',

                // the separator for the list of selected items for mouse-over
                delimiterText: ', ',

                // includes Reset Option
                includeResetOption: false,

                // includes Rest Divider
                includeResetDivider: false,

                // lable of Reset  Option
                resetText: 'Reset',

                // indent group options
                indentGroupOptions: true,

                // possible options: 'never', 'always', 'ifPopupIsSmaller', 'ifPopupIsWider'
                widthSynchronizationMode: 'never',

                // text alignment
                buttonTextAlignment: 'center',

                // custom templates
                templates: {
                    button: '<button type="button" class="multiselect dropdown-toggle" data-toggle="dropdown"><span class="multiselect-selected-text"></span></button>',
                    <
                    a href = "https://www.jqueryscript.net/tags.php?/popup/" > popup <
                    /a>Container: '<div class="multiselect-container dropdown-menu"></div > ',
                    filter: '<div class="multiselect-filter"><div class="input-group input-group-sm p-1"><div class="input-group-prepend"><i class="input-group-text fas fa-search"></i></div><input class="form-control multiselect-search" type="text" /></div></div>',
                    filterClearBtn: '<div class="input-group-append"><button class="multiselect-clear-filter input-group-text" type="button"><i class="fas fa-times"></i></button></div>',
                    option: '<button class="multiselect-option dropdown-item"></button>',
                    divider: '<div class="dropdown-divider"></div>',
                    optionGroup: '<button class="multiselect-group dropdown-item"></button>',
                    resetButton: '<div class="multiselect-reset text-center p-2"><button class="btn btn-sm btn-block btn-outline-secondary"></button></div>'
                }

            });
        });
    </script>
@endsection
