@extends('layouts.app')
@section('content')
    <div class="m-grid__item m-grid__item--fluid m-wrapper">
        <!-- BEGIN: Subheader -->
        <div class="m-subheader ">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="m-subheader__title m-subheader__title--separator">
                        Product Settings
                    </h3>
                    <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                        <li class="m-nav__item m-nav__item--home">
                            <a href="#" class="m-nav__link m-nav__link--icon">
                                <i class="m-nav__link-icon la la-home"></i>
                            </a>
                        </li>
                        <li class="m-nav__separator">
                            -
                        </li>
                        <li class="m-nav__item">
                            <a href="" class="m-nav__link">
                  <span class="m-nav__link-text">
                  Sales
                  </span>
                            </a>
                        </li>
                        <li class="m-nav__separator">
                            -
                        </li>
                        <li class="m-nav__item">
                            <a href="" class="m-nav__link">
                  <span class="m-nav__link-text">
                  Product
                  </span>
                            </a>
                        </li>
                        <li class="m-nav__separator">
                            -
                        </li>
                        <li class="m-nav__item">
                            <a href="" class="m-nav__link">
                  <span class="m-nav__link-text">
                  Product Settings
                  </span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div>
                    <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" data-dropdown-toggle="hover" aria-expanded="true">
                        <a href="#" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--outline-2x m-btn--air m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
                            <i class="la la-plus m--hide"></i>
                            <i class="la la-ellipsis-h"></i>
                        </a>
                        <div class="m-dropdown__wrapper">
                            <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                            <div class="m-dropdown__inner">
                                <div class="m-dropdown__body">
                                    <div class="m-dropdown__content">
                                        <ul class="m-nav">
                                            <li class="m-nav__section m-nav__section--first m--hide">
                                 <span class="m-nav__section-text">
                                 Quick Actions
                                 </span>
                                            </li>
                                            <li class="m-nav__item">
                                                <a href="" class="m-nav__link">
                                                    <i class="m-nav__link-icon flaticon-share"></i>
                                                    <span class="m-nav__link-text">
                                 Activity
                                 </span>
                                                </a>
                                            </li>
                                            <li class="m-nav__item">
                                                <a href="" class="m-nav__link">
                                                    <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                    <span class="m-nav__link-text">
                                 Messages
                                 </span>
                                                </a>
                                            </li>
                                            <li class="m-nav__item">
                                                <a href="" class="m-nav__link">
                                                    <i class="m-nav__link-icon flaticon-info"></i>
                                                    <span class="m-nav__link-text">
                                 FAQ
                                 </span>
                                                </a>
                                            </li>
                                            <li class="m-nav__item">
                                                <a href="" class="m-nav__link">
                                                    <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                    <span class="m-nav__link-text">
                                 Support
                                 </span>
                                                </a>
                                            </li>
                                            <li class="m-nav__separator m-nav__separator--fit"></li>
                                            <li class="m-nav__item">
                                                <a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">
                                                    Submit
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Subheader -->
        <div class="m-content">
            <div class="m-portlet">
                <div class="m-portlet__body">
                    <div class="row m-row--no-padding m-row--col-separator-xl">
                        <div class="col-xl-4">
                            <div class="mailbox-controls">
                                <div class="btn-group">
                                    <button type="submit" class="btn btn-sm btn-default unit_edit" name="action" id="unit_edit"><i class="la la-edit"></i> Edit</button>
                                </div>

                                <div class="btn-group">
                                    <button type="submit" class="btn btn-sm btn-default unit_delete" name="action" id="unit_delete"><i class="la la-archive"></i> Archive</button>
                                </div>
                                <div class="pull-right mr-5">
                                    <div class="btn-group">
                                        <button type="button" class="btn-sm btn btn-warning" data-toggle="modal" data-target="#addrecall">
                                            <i class="la la-plus"></i>
                                            Add Unit
                                        </button>
                                    </div>
                                    <!-- /.btn-group -->
                                </div>
                                <!-- /.pull-right -->
                            </div>
                            <!--begin:: Widgets/Stats2-1 -->
                            <div class="m-widget1">
                                <div class="m-widget1__item">
                                    <div class="row m-row--no-padding align-items-center">
                                        <table class="table table-bordered m-table">
                                            <thead class="sbtable table">
                                            <tr>

                                                <th>
                                                    Unit Name
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach( $units as $key => $unit)
                                                <tr >
                                                    <th scope="row">
                                                        <label class="m-checkbox m-checkbox--square" style="width: 246px;">
                                                            <input type="checkbox" id="unit_id" name="action_id" value="{{ $unit->id}}">
                                                            <span></span>
                                                            {{ $unit->unit_name}} </label>
                                                    </th>

                                                </tr>
                                                @endforeach
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!--end:: Widgets/Stats2-1 -->
                        </div>
                        <div class="col-xl-4">
                            <div class="mailbox-controls">
                                <div class="btn-group">
                                    <button type="submit" class="btn btn-sm btn-default catedit" id="catedit" name="action" value="edit"><i class="la la-edit"></i> Edit</button>
                                </div>

                                <div class="btn-group">
                                    <button type="submit" class="btn btn-sm btn-default category_delete" name="action" id="category_delete"><i class="la la-archive"></i> Archive</button>
                                </div>


                                <div class="pull-right mr-5">
                                    <div class="btn-group">
                                    <button type="button" class="btn-sm btn btn-warning" data-toggle="modal" data-target="#addcat">
                                            <i class="la la-plus"></i>
                                            Add Category
                                        </button>
                                    </div>
                                    <!-- /.btn-group -->
                                </div>
                                <!-- /.pull-right -->
                            </div>
                            <!--begin:: Widgets/Stats2-1 -->
                            <div class="m-widget1">
                                <div class="m-widget1__item">
                                    <div class="row m-row--no-padding align-items-center">
                                        <table class="table table-bordered m-table">
                                            <thead class="sbtable table">
                                            <tr>

                                                <th>
                                                    Category Name
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach( $productcategories as $key => $category)
                                                <tr >
                                                    <th scope="row">
                                                        <label class="m-checkbox m-checkbox--square" style="width: 246px;">
                                                            <input type="checkbox" id="category_id" name="action_id" value="{{ $category->id}}">
                                                            <span></span>
                                                            {{ $category->category_name}} </label>
                                                    </th>

                                                </tr>
                                                @endforeach
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!--end:: Widgets/Stats2-1 -->
                        </div>
                        <div class="col-xl-4">
                            <div class="mailbox-controls">
                                <div class="btn-group">
                                    <button type="submit" class="btn btn-sm btn-default" name="action" value="edit"><i class="la la-edit"></i> Edit</button>
                                </div>

                                <div class="btn-group">
                                    <button type="submit" class="btn btn-sm btn-default" name="action" value="delete"><i class="la la-archive"></i> Archive</button>
                                </div>


                                <div class="pull-right mr-5">
                                    <div class="btn-group">
                                        <a href="https://ehr.lastlineweb.com/admin/patients/create" class="btn-sm btn btn-warning">
                                            <i class="la la-plus"></i>
                                            Add Brand
                                        </a>
                                    </div>
                                    <!-- /.btn-group -->
                                </div>
                                <!-- /.pull-right -->
                            </div>
                            <!--begin:: Widgets/Stats2-1 -->
                            <div class="m-widget1">
                                <div class="m-widget1__item">
                                    <div class="row m-row--no-padding align-items-center">
                                        <table class="table table-bordered m-table">
                                            <thead class="sbtable table">
                                            <tr>

                                                <th>
                                                    Brand Name
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach( $brands as $key => $brand)
                                                <tr >
                                                    <th scope="row">
                                                        <label class="m-checkbox m-checkbox--square" style="width: 246px;">
                                                            <input type="checkbox" name="action_id" value="1">
                                                            <span></span>
                                                            {{ $brand->band_name}}</label>
                                                    </th>
                                                </tr>
                                                @endforeach
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!--end:: Widgets/Stats2-1 -->
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Portlet-->
        </div>
    </div>
    </div>
    </div>
    </div>


    <!-- Unit Add -->
    <!-- add Files -->
    <div class="modal" id="addrecall" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-appointment">
                    <h2 class="modal-title bg-colss" id="successModalLabel">Add New Unit  </h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('units.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-3 col-form-label bg-strong">
                                <strong> Unit Name</strong>
                            </label>
                            <div class="col-8 floatright">
                                <input type="text" class="form-control" id="" name="unit_name">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-warning btn-sm">Add Unit</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Unit add end -->

    <!-- Edit Unit Data -->
    <div class="modal" id="editUnits" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-appointment">
                    <h2 class="modal-title bg-colss" id="successModalLabel">Edit Unit  </h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('units.update')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <p id="saveform_success"></p>
                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-3 col-form-label bg-strong">
                                <strong> Unit Name</strong>
                            </label>
                            <div class="col-8 floatright">
                                <input type="hidden" class="form-control" id="un_id" name="id">
                                <input type="text" class="form-control" id="unit_name" name="unit_name">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success btn-sm">Update Unit</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Unit Stduent Data -->

    <!-- Delete Unit Data -->
    <div class="modal" id="deleteUnits" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-appointment">
                    <h2 class="modal-title bg-colss" id="successModalLabel">Delete Unit  </h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('units.delete')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <p id="saveform_success"></p>
                        <input type="hidden" class="form-control" id="id" name="id">
                        <p>Are You Sure Delete This item! </p>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger btn-sm">Yes, Confirm</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <!-- End Delete Stduent Data -->


        <!-- ADD CATEGORY-->

    <div class="modal" id="addcat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-appointment">
                    <h2 class="modal-title bg-colss" id="successModalLabel">Add New Category  </h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('category.store')}}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-3 col-form-label bg-strong">
                                <strong> Category Name</strong>
                            </label>
                            <div class="col-8 floatright">
                                <input type="text" class="form-control" id="" name="category_name">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-warning btn-sm">Add Unit</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- ADD CATEGORY ENDS -->

            <!-- EDIT CATEGORY-->

            <div class="modal" id="editcat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-appointment">
                    <h2 class="modal-title bg-colss" id="successModalLabel">Add New Category  </h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('category.update')}}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group m-form__group row">
                            <label for="example-text-input" class="col-3 col-form-label bg-strong">
                                <strong> Category Name</strong>
                            </label>
                            <div class="col-8 floatright">

                            <input type="hidden" class="form-control" id="cat_id" name="id">
                                <input type="text" class="form-control" id="cat_nam" name="category_name">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-warning btn-sm">Add Unit</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- EDIT CATEGORY ENDS -->

        <!-- DELETE CATEGORY STARTS -->
        <div class="modal" id="deleteCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-appointment">
                    <h2 class="modal-title bg-colss" id="successModalLabel">Delete Product Category </h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('category.delete')}}" method="post">
                    @csrf
                    <div class="modal-body">
                        <p id="saveform_success"></p>
                        <input type="hidden" class="form-control" id="id" name="id">
                        <p>Are You Sure Delete This item! </p>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger btn-sm">Yes, Confirm</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <!-- DELETE CATEGORY ENDS -->


    @push('scripts')
        <script src="{{asset('metronic/assets/vendors/custom/flot/flot.bundle.js')}}" type="text/javascript"></script>
        <script src="{{asset('metronic/assets/demo/default/custom/components/charts/flotcharts.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/sales/products/product-settings/units/unit.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/sales/products/product-settings/categories/category.js')}}" type="text/javascript"></script>
    @endpush
@endsection
