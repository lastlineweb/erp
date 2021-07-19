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
            <ul class="nav nav-tabs  m-tabs-line m-tabs-line--2x m-tabs-line--success" role="tablist">
               <li class="nav-item m-tabs__item">
                  <a class="nav-link m-tabs__link active show" data-toggle="tab" href="#m_tabs_6_1" role="tab" aria-selected="true">
                  Units
                  </a>
               </li>
               <li class="nav-item m-tabs__item">
                  <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_tabs_6_2" role="tab" aria-selected="false">
                  Product Category
                  </a>
               </li>
               <li class="nav-item m-tabs__item">
                  <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_tabs_6_3" role="tab" aria-selected="false">
                  Brands
                  </a>
               </li>
            </ul>
            <div class="tab-content">
               <div class="tab-pane active" id="m_tabs_6_1" role="tabpanel">
                  <table class="table m-table m-table--head">
                     <thead>
                        <tr>
                           <th>
                              #
                           </th>
                           <th>
                              Unit Name
                           </th>
                           <div class="pull-right">
                              <div class="btn-group">
                                 <button type="button" class="btn-sm btn btn-warning" data-toggle="modal" data-target="#addrecall">
                                 <i class="la la-plus"></i>
                                 Add Unit
                                 </button>
                              </div>
                              <!-- /.btn-group -->
                           </div>
                           </th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach( $units as $key => $unit)
                        <tr >
                           <th scope="row">
                              {{$key + 1}}
                           </th>
                           <td style="text-align:left;">
                              {{ $unit->unit_name}}
                           </td>
                        </tr>
                        @endforeach
                        </tr>
                     </tbody>
                  </table>
               </div>
               <div class="tab-pane" id="m_tabs_6_2" role="tabpanel">
                  <table class="table m-table m-table--head">
                     <thead>
                        <tr>
                           <th>
                              #
                           </th>
                           <th>
                              Category Name
                           </th>
                           <div class="pull-right">
                              <div class="btn-group">
                                 <button type="button" class="btn-sm btn btn-warning" data-toggle="modal" data-target="#addrecall">
                                 <i class="la la-plus"></i>
                                 Add Category
                                 </button>
                              </div>
                              <!-- /.btn-group -->
                           </div>
                           </th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach( $productcategories as $key => $category)
                        <tr >
                           <th scope="row">
                              {{$key + 1}}
                           </th>
                           <td style="text-align:left;">
                              {{ $category->category_name}}
                           </td>
                        </tr>
                        @endforeach
                        </tr>
                     </tbody>
                  </table>
               </div>
               <div class="tab-pane" id="m_tabs_6_3" role="tabpanel">
                  <table class="table m-table m-table--head">
                     <thead>
                        <tr>
                           <th>
                              #
                           </th>
                           <th>
                              Brand Name
                           </th>
                           <th>
                              Action
                              <div class="pull-right">
                                 <div class="btn-group">
                                    <button type="button" class="btn-sm btn btn-warning" data-toggle="modal" data-target="#addrecall">
                                    <i class="la la-plus"></i>
                                    Add Brand
                                    </button>
                                 </div>
                                 <!-- /.btn-group -->
                              </div>
                           </th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach( $brands as $key => $brand)
                        <tr >
                           <th scope="row">
                              {{$key + 1}}
                           </th>
                           <td style="text-align:left;">
                              {{ $brand->category_name}}
                           </td>
                           <td style="text-align:left;">
                              <span> <a  class="btn btn-suucess btn-sm" href="{{route('unit.delete' ,$brand->id)}}"><i class="fa fa-trash"></i></a></span>
                        </tr>
                        @endforeach
                        </tr>
                     </tbody>
                  </table>
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
<div class="modal fade-scale" id="addrecall" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
         <div class="modal-header bg-appointment">
            <h2 class="modal-title bg-colss" id="successModalLabel">All files for <span class="m-badge m-badge--warning p-1"></span> </h2>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <form action="{{route('unit.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
               <div class="form-group m-form__group row">
                  <label for="example-text-input" class="col-3 col-form-label bg-strong">
                  Unit Name
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
@push('scripts')
<script src="{{asset('metronic/assets/vendors/custom/flot/flot.bundle.js')}}" type="text/javascript"></script>
<script src="{{asset('metronic/assets/demo/default/custom/components/charts/flotcharts.js')}}" type="text/javascript"></script>
@endpush
@endsection