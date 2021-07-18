<div 
		id="m_ver_menu" 
		class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark " 
		data-menu-vertical="true"
		 data-menu-scrollable="false" data-menu-dropdown-timeout="500"  
		>
                  <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
                     <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="click">
                        <a  href="#" class="m-menu__link ">
                        <i class="m-menu__link-icon flaticon-dashboard"></i>
                        <span class="m-menu__link-title">
                        <span class="m-menu__link-wrap">
                        <span class="m-menu__link-text">
                        Dashboard
                        </span>
                        </span>
                        </span>
                        </a>
                     </li>
               
                     <li class="m-menu__section">
                        <h4 class="m-menu__section-text">
                           Modules
                        </h4>
                        <i class="m-menu__section-icon flaticon-more-v3"></i>
                     </li>
                     <!-- Coustom mega left menu Start -->
                     <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="click">
                        <a  href="#" class="m-menu__link m-menu__toggle">
                        <i class="m-menu__link-icon flaticon-list-1"></i>
                        
                           <span class="m-menu__link-text">
                              Sales
                           </span>
                           <i class="m-menu__ver-arrow la la-angle-right" style="color:#000 !important;font-size:10px !important"></i>
                        </a>
                        <div class="m-menu__submenu rt">
                           <span class="m-menu__arrow"></span>
                           <ul class="mega_menu">
                              <li class="mega_item">
                              <div class="row">
                              <div class="col-sm-4">
                              <ul class="mega_list">
                                    <li class="mega_list_item">
                                       <h2 class="mega_hedline">
                                          <span class="mega_hed_text">Invoice</span>
                                       </h2>
                                    </li>
                                    <li class="mega_list_item"><a href="{{route('invoice.index')}}">Invoices List</a></li>
									         <li class="mega_list_item"><a href="{{route('invoice.create')}}">Add Invoice</a></li>
                                   
									
                                    <li class="mega_list_item"><span class="mg_line"></span></li>
                                 </ul>
                              </div>
                              <div class="col-sm-4">
                              <ul class="mega_list">
                                    <li class="mega_list_item">
                                       <h2 class="mega_hedline">
                                          <span class="mega_hed_text">Quatation</span>
                                       </h2>
                                    </li>
                                    <li class="mega_list_item"><a href="{{route('invoice.index')}}">Add Quatation</a></li>
									         <li class="mega_list_item"><a href="{{route('invoice.create')}}">Quatation List</a></li>
								
                                    <li class="mega_list_item"><span class="mg_line"></span></li>
                                 </ul>
                              </div>
                              <div class="col-sm-4">
                              <ul class="mega_list">
                                    <li class="mega_list_item">
                                       <h2 class="mega_hedline">
                                          <span class="mega_hed_text">Products</span>
                                       </h2>
                                    </li>
                                    <li class="mega_list_item"><a href="{{route('invoice.index')}}">Product List</a></li>
									         <li class="mega_list_item"><a href="{{route('invoice.create')}}">Add New Product</a></li>
                                    <li class="mega_list_item"><a href="{{route('invoice.index')}}">Product Category</a></li>
									         <li class="mega_list_item"><a href="{{route('invoice.create')}}">Product Unit</a></li>
									         <li class="mega_list_item"><a href="{{route('invoice.create')}}">Product Barcode</a></li>
                                    <li class="mega_list_item"><span class="mg_line"></span></li>
                                 </ul>
                              </div>
                              <div class="col-sm-4" style="margin-top:-100px">
                              <ul class="mega_list">
                                    <li class="mega_list_item">
                                       <h2 class="mega_hedline">
                                          <span class="mega_hed_text">Service</span>
                                       </h2>
                                    </li>
                                    <li class="mega_list_item"><a href="{{route('invoice.index')}}">Service List</a></li>
									         <li class="mega_list_item"><a href="{{route('invoice.create')}}">Add Service</a></li>
                           
                                    <li class="mega_list_item"><span class="mg_line"></span></li>
                                 </ul>
                              </div>
                              <div class="col-sm-4" style="margin-top:-100px">
                              <ul class="mega_list">
                                    <li class="mega_list_item">
                                       <h2 class="mega_hedline">
                                          <span class="mega_hed_text">Purchase</span>
                                       </h2>
                                    </li>
                                    <li class="mega_list_item"><a href="{{route('invoice.index')}}">Purchase Orders</a></li>
									         <li class="mega_list_item"><a href="{{route('invoice.create')}}">Create Purchase Order</a></li>
									         <li class="mega_list_item"><a href="{{route('invoice.create')}}"> Purchase Return</a></li>
                                    <li class="mega_list_item"><span class="mg_line"></span></li>
                                 </ul>
                              </div>
                              <div class="col-sm-4">
                              <ul class="mega_list">
                                    <li class="mega_list_item">
                                       <h2 class="mega_hedline">
                                          <span class="mega_hed_text">Stock</span>
                                       </h2>
                                    </li>
                                    <li class="mega_list_item"><a href="{{route('invoice.index')}}">Warehouse List</a></li>
									         <li class="mega_list_item"><a href="{{route('invoice.create')}}">Adjust Stock</a></li>
									         <li class="mega_list_item"><a href="{{route('invoice.create')}}">Stock Transfer</a></li>
                                    <li class="mega_list_item"><span class="mg_line"></span></li>
                                 </ul>
                              </div>
                              <div class="col-sm-4" style="margin-top:-140px">
                              <ul class="mega_list">
                                    <li class="mega_list_item">
                                       <h2 class="mega_hedline">
                                          <span class="mega_hed_text">Reports</span>
                                       </h2>
                                    </li>
                                    <li class="mega_list_item"><a href="{{route('invoice.index')}}">Today Sale Report</a></li>
									         <li class="mega_list_item"><a href="{{route('invoice.create')}}">Monthly Sale Report</a></li>
                                    <li class="mega_list_item"><a href="{{route('invoice.index')}}">Product Wise Sale Report</a></li>
									         <li class="mega_list_item"><a href="{{route('invoice.create')}}">Profile Loss</a></li>
                                    <li class="mega_list_item"><span class="mg_line"></span></li>
                                 </ul>
                              </div>
                              </div>
                                
                                
								 
                              </li>                            
                           </ul>
                        </div>
                     </li>
                     
                     <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="click">
                        <a  href="#" class="m-menu__link m-menu__toggle">
                        <i class="m-menu__link-icon flaticon-graphic-2"></i>
                           <span class="m-menu__link-text">
                             Accounts
                           </span>
                           <i class="m-menu__ver-arrow la la-angle-right" style="color:#000 !important;font-size:10px !important"></i>
                        </a>
                        <div class="m-menu__submenu rt">
                           <span class="m-menu__arrow"></span>
                           <ul class="mega_menu">
                              <li class="mega_item">
                              <div class="row">
                              <div class="col-sm-4">
                              <ul class="mega_list">
                                    <li class="mega_list_item">
                                       <h2 class="mega_hedline">
                                          <span class="mega_hed_text">Bank & Cash Accounts</span>
                                       </h2>
                                    </li>
                                    <li class="mega_list_item"><a href="{{route('invoice.index')}}">Accounts List</a></li>
									         <li class="mega_list_item"><a href="{{route('invoice.create')}}">Add New Account</a></li>
                                   
									
                                    <li class="mega_list_item"><span class="mg_line"></span></li>
                                 </ul>
                              </div>
                              <div class="col-sm-4">
                              <ul class="mega_list">
                                    <li class="mega_list_item">
                                       <h2 class="mega_hedline">
                                          <span class="mega_hed_text">Income</span>
                                       </h2>
                                    </li>
                                    <li class="mega_list_item"><a href="{{route('invoice.index')}}">Income Heads</a></li>
									         <li class="mega_list_item"><a href="{{route('invoice.create')}}">Income List</a></li>
									         <li class="mega_list_item"><a href="{{route('invoice.create')}}">Add New Income</a></li>
								
                                    <li class="mega_list_item"><span class="mg_line"></span></li>
                                 </ul>
                              </div>
                              <div class="col-sm-4">
                              <ul class="mega_list">
                                    <li class="mega_list_item">
                                       <h2 class="mega_hedline">
                                          <span class="mega_hed_text">Expense</span>
                                       </h2>
                                    </li>
                                    <li class="mega_list_item"><a href="{{route('invoice.index')}}">Expense Heads</a></li>
									         <li class="mega_list_item"><a href="{{route('invoice.create')}}">Expense List</a></li>
									         <li class="mega_list_item"><a href="{{route('invoice.create')}}">Add New Expense</a></li>
                                    <li class="mega_list_item"><span class="mg_line"></span></li>
                                 </ul>
                              </div>
                              <div class="col-sm-4" style="margin-top:-">
                              <ul class="mega_list">
                                    <li class="mega_list_item">
                                       <h2 class="mega_hedline">
                                          <span class="mega_hed_text">Payment Method</span>
                                       </h2>
                                    </li>
                                    <li class="mega_list_item"><a href="{{route('invoice.index')}}">Payment Method List</a></li>
									         <li class="mega_list_item"><a href="{{route('invoice.create')}}">Add Payment Method</a></li>
                           
                                    <li class="mega_list_item"><span class="mg_line"></span></li>
                                 </ul>
                              </div>
                              <div class="col-sm-4" style="margin-top:">
                              <ul class="mega_list">
                                    <li class="mega_list_item">
                                       <h2 class="mega_hedline">
                                          <span class="mega_hed_text">Transfer</span>
                                       </h2>
                                    </li>
                                    <li class="mega_list_item"><a href="{{route('invoice.index')}}">Transfer List</a></li>
									         <li class="mega_list_item"><a href="{{route('invoice.create')}}">Add New Transfer</a></li>
                                    <li class="mega_list_item"><span class="mg_line"></span></li>
                                 </ul>
                              </div>
                              <div class="col-sm-4">
                              <ul class="mega_list">
                                    <li class="mega_list_item">
                                       <h2 class="mega_hedline">
                                          <span class="mega_hed_text">Reports</span>
                                       </h2>
                                    </li>
                                    <li class="mega_list_item"><a href="{{route('invoice.index')}}">General Ledger</a></li>
                                    <li class="mega_list_item"><a href="{{route('invoice.index')}}">Profit Loss</a></li>
									         <li class="mega_list_item"><a href="{{route('invoice.create')}}">Balance Sheet</a></li>
									         <li class="mega_list_item"><a href="{{route('invoice.create')}}">Trail Balance</a></li>
                                    <li class="mega_list_item"><span class="mg_line"></span></li>
                                 </ul>
                              </div>
                     
                              </div>
                                
                                
								 
                              </li>                            
                           </ul>
                        </div>
                     </li>

                         <!-- Coustom mega left menu Start -->
                         <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="click">
                        <a  href="#" class="m-menu__link m-menu__toggle">
                        <i class="m-menu__link-icon flaticon-pie-chart"></i>
                           <span class="m-menu__link-text">
                              CRM
                           </span>
                           <i class="m-menu__ver-arrow la la-angle-right" style="color:#000 !important;font-size:10px !important"></i>
                        </a>
                        <div class="m-menu__submenu rt">
                           <span class="m-menu__arrow"></span>
                           <ul class="mega_menu">
                              <li class="mega_item">
                              <div class="row">
                              <div class="col-sm-4">
                              <ul class="mega_list">
                                    <li class="mega_list_item">
                                       <h2 class="mega_hedline">
                                          <span class="mega_hed_text">Customer</span>
                                       </h2>
                                    </li>
                                    <li class="mega_list_item"><a href="{{route('invoice.index')}}">Customer List</a></li>
									         <li class="mega_list_item"><a href="{{route('invoice.create')}}">Add New Customer</a></li>
                                   
									
                                    <li class="mega_list_item"><span class="mg_line"></span></li>
                                 </ul>
                              </div>
                              <div class="col-sm-4">
                              <ul class="mega_list">
                                    <li class="mega_list_item">
                                       <h2 class="mega_hedline">
                                          <span class="mega_hed_text">Supplier</span>
                                       </h2>
                                    </li>
                                    <li class="mega_list_item"><a href="{{route('invoice.index')}}">Supplier List</a></li>
									         <li class="mega_list_item"><a href="{{route('invoice.create')}}">Add New Supplier</a></li>
								
                                    <li class="mega_list_item"><span class="mg_line"></span></li>
                                 </ul>
                              </div>
                              <div class="col-sm-4">
                              <ul class="mega_list">
                                    <li class="mega_list_item">
                                       <h2 class="mega_hedline">
                                          <span class="mega_hed_text">Contact</span>
                                       </h2>
                                    </li>
                                    <li class="mega_list_item"><a href="{{route('invoice.index')}}">Product List</a></li>
									         <li class="mega_list_item"><a href="{{route('invoice.create')}}">Add New Product</a></li>
                                    <li class="mega_list_item"><a href="{{route('invoice.index')}}">Product Category</a></li>
									         <li class="mega_list_item"><a href="{{route('invoice.create')}}">Product Unit</a></li>
									         <li class="mega_list_item"><a href="{{route('invoice.create')}}">Product Barcode</a></li>
                                    <li class="mega_list_item"><span class="mg_line"></span></li>
                                 </ul>
                              </div>
                              <div class="col-sm-4" style="margin-top:-100px">
                              <ul class="mega_list">
                                    <li class="mega_list_item">
                                       <h2 class="mega_hedline">
                                          <span class="mega_hed_text">Service</span>
                                       </h2>
                                    </li>
                                    <li class="mega_list_item"><a href="{{route('invoice.index')}}">Service List</a></li>
									         <li class="mega_list_item"><a href="{{route('invoice.create')}}">Add Service</a></li>
                           
                                    <li class="mega_list_item"><span class="mg_line"></span></li>
                                 </ul>
                              </div>
                              <div class="col-sm-4" style="margin-top:-100px">
                              <ul class="mega_list">
                                    <li class="mega_list_item">
                                       <h2 class="mega_hedline">
                                          <span class="mega_hed_text">Purchase</span>
                                       </h2>
                                    </li>
                                    <li class="mega_list_item"><a href="{{route('invoice.index')}}">Purchase Orders</a></li>
									         <li class="mega_list_item"><a href="{{route('invoice.create')}}">Create Purchase Order</a></li>
									         <li class="mega_list_item"><a href="{{route('invoice.create')}}"> Purchase Return</a></li>
                                    <li class="mega_list_item"><span class="mg_line"></span></li>
                                 </ul>
                              </div>
                              <div class="col-sm-4">
                              <ul class="mega_list">
                                    <li class="mega_list_item">
                                       <h2 class="mega_hedline">
                                          <span class="mega_hed_text">Stock</span>
                                       </h2>
                                    </li>
                                    <li class="mega_list_item"><a href="{{route('invoice.index')}}">Warehouse List</a></li>
									         <li class="mega_list_item"><a href="{{route('invoice.create')}}">Adjust Stock</a></li>
									         <li class="mega_list_item"><a href="{{route('invoice.create')}}">Stock Transfer</a></li>
                                    <li class="mega_list_item"><span class="mg_line"></span></li>
                                 </ul>
                              </div>
                              <div class="col-sm-4" style="margin-top:-140px">
                              <ul class="mega_list">
                                    <li class="mega_list_item">
                                       <h2 class="mega_hedline">
                                          <span class="mega_hed_text">Reports</span>
                                       </h2>
                                    </li>
                                    <li class="mega_list_item"><a href="{{route('invoice.index')}}">Today Sale Report</a></li>
									         <li class="mega_list_item"><a href="{{route('invoice.create')}}">Monthly Sale Report</a></li>
                                    <li class="mega_list_item"><a href="{{route('invoice.index')}}">Product Wise Sale Report</a></li>
									         <li class="mega_list_item"><a href="{{route('invoice.create')}}">Profile Loss</a></li>
                                    <li class="mega_list_item"><span class="mg_line"></span></li>
                                 </ul>
                              </div>
                              </div>
                                
                                
								 
                              </li>                            
                           </ul>
                        </div>
                     </li>
               
             
                    
                       <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="click">
                        <a  href="#" class="m-menu__link m-menu__toggle">
                        <i class="m-menu__link-icon flaticon-users"></i>
                           <span class="m-menu__link-text">
                             HRM
                           </span>
                           <i class="m-menu__ver-arrow la la-angle-right" style="color:#000 !important;font-size:10px !important"></i>
                        </a>
                        <div class="m-menu__submenu sale">
                           <span class="m-menu__arrow"></span>
                           <ul class="mega_menu">
                              <li class="mega_item">
                                 <ul class="mega_list">
                                    <li class="mega_list_item">
                                       <h2 class="mega_hedline">
                                          <span class="mega_hed_text">SMS</span>
                                       </h2>
                                    </li>
                                    <li class="mega_list_item"><a href="">Send SMS</a></li>
                                    <li class="mega_list_item"><a href="">SMS History</a></li>
									 <li class="mega_list_item"><a href="">SMS Template</a></li>
                                    <li class="mega_list_item"><span class="mg_line"></span></li>
                                 </ul>
								
                      <ul class="mega_list">
                                    <li class="mega_list_item">
                                       <h2 class="mega_hedline">
                                          <span class="mega_hed_text">Payment</span>
                                       </h2>
                                    </li>
                                    <li class="mega_list_item"><a href="">Payment Voucher </a></li>
						
           
                                 </ul>
                              </li>
                              <li class="mega_item">
                                 <ul class="mega_list">
                                    <li class="mega_list_item">
                                       <h2 class="mega_hedline">
                                          <span class="mega_hed_text">Managege Type</span>
                                       </h2>
                                    </li>
                                    <li class="mega_list_item"><a href="">Manage Group</a></li>
									 <li class="mega_list_item"><a href="">Manage Category</a></li>
								
           
                                 </ul>
                              </li>
							   <li class="mega_item">
                            <ul class="mega_list">
                                    <li class="mega_list_item">
                                       <h2 class="mega_hedline">
                                          <span class="mega_hed_text">Profiles</span>
                                       </h2>
                                    </li>
                                    <li class="mega_list_item"><a href="">Customer</a></li>
                                    <li class="mega_list_item"><a href="">Supplier</a></li>
									   <li class="mega_list_item"><a href="">Lead/Contact</a></li>
							
           
                                 </ul>
                              </li>
                                 
                           </ul>
                        </div>
                     </li>


                     <li class="m-menu__section">
                        <h4 class="m-menu__section-text">
                           Setting
                        </h4>
                        <i class="m-menu__section-icon flaticon-more-v3"></i>
                     </li>
                     <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="click">
                        <a  href="#" class="m-menu__link ">
                        <i class="m-menu__link-icon flaticon-support"></i>
                        <span class="m-menu__link-text">
                        Help
                        </span>
                        </a>
                     </li>
                     <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="click">
                        <a  href="#" class="m-menu__link m-menu__toggle">
                           <i class="m-menu__link-icon flaticon-settings"></i>
                           <span class="m-menu__link-text">
                              Setting
                           </span>
                         <i class="m-menu__ver-arrow la la-angle-right" style="color:#000 !important;font-size:10px !important"></i>
                        </a>
                        <div class="m-menu__submenu rt">
                           <span class="m-menu__arrow"></span>
                           <ul class="mega_menu">
                              <li class="mega_item">
                                 <ul class="mega_list">
                                    <li class="mega_list_item">
                                       <h2 class="mega_hedline">
                                          <span class="mega_hed_text">Configure</span>
                                       </h2>
                                    </li>
                                    <li class="mega_list_item"><a href="">Employee </a></li>
                                    <li class="mega_list_item"><a href="">User</a></li>
									    <li class="mega_list_item"><a href="">Email Template</a></li>
                                    <li class="mega_list_item"><a href="">SMS Template</a></li>
							
                                    
                                    <li class="mega_list_item"><span class="mg_line"></span></li>
                                 </ul>
                         
                       
                              </li>
                              <li class="mega_item">
                                 <ul class="mega_list">
                                    <li class="mega_list_item">
                                       <h2 class="mega_hedline">
                                          <span class="mega_hed_text">Access Management</span>
                                       </h2>
                                    </li>
                                    <li class="mega_list_item"><a href="">User & Role Management</a></li>
                                    <li class="mega_list_item"><a href="">Role Feature Setup</a></li>
                                    <li class="mega_list_item"><a href="">Balance Request</a></li>
                                    <li class="mega_list_item"><a href="">Subscription</a></li>
											    <li class="mega_list_item"><a href="">User Access</a></li>
                    
                                 </ul>
                              </li>
                              <li class="mega_item">
                                 <ul class="mega_list">
                                    <li class="mega_list_item">
                                       <h2 class="mega_hedline">
                                          <span class="mega_hed_text">Setting</span>
                                       </h2>
                                    </li>
                                    <li class="mega_list_item"><a href="">Country</a></li>
                                    <li class="mega_list_item"><a href="">Currency</a></li>
                                    <li class="mega_list_item"><a href="">Timezone</a></li>
                                    <li class="mega_list_item"><a href="">Company</a></li>
                       
                                 </ul>
                          
                              </li>                            
                           </ul>
                        </div>
                     </li>
                     <!-- Coustom mega left menu End -->
                  </ul>
               </div>