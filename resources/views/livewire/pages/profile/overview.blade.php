<x-app-layout>
    <x-slot name="header">
        <div id="kt_app_toolbar_container" class="app-container  container-xxl d-flex flex-stack ">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3 ">
               <!--begin::Title-->
               <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">
                  Account Overview
               </h1>
               <!--end::Title-->
               <!--begin::Breadcrumb-->
               <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                  <!--begin::Item-->
                  <li class="breadcrumb-item text-muted">
                     <a href="{{route('dashboard')}}" class="text-muted text-hover-primary">
                     Home
                    </a>
                  </li>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <li class="breadcrumb-item">
                     <span class="bullet bg-gray-500 w-5px h-2px"></span>
                  </li>
                  <!--end::Item-->
                  <!--begin::Item-->
                  <li class="breadcrumb-item text-muted">
                     Account
                  </li>
                  <!--end::Item-->
               </ul>
               <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
         </div>

    </x-slot>

    <div id="kt_app_content_container" class="app-container  container-xxl ">
        <!--begin::Navbar-->
        <div class="card mb-5 mb-xl-10">
           <div class="card-body pt-9 pb-0">
              <!--begin::Details-->
              <div class="d-flex flex-wrap flex-sm-nowrap">
                 <!--begin: Pic-->
                 <div class="me-7 mb-4">
                    <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                       <img src="{{$user->image}}" alt="{{$user->full_name}}" />
                       <div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-body h-20px w-20px"></div>
                    </div>
                 </div>
                 <!--end::Pic-->
                 <!--begin::Info-->
                 <div class="flex-grow-1">
                    <!--begin::Title-->
                    <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                       <!--begin::User-->
                        <div class="d-flex flex-column">
                          <!--begin::Name-->
                            <div class="d-flex align-items-center mb-2">
                                <a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bold me-1">{{$user->full_name}}</a>
                                <a href="#">
                                    <i class="ki-duotone ki-verify fs-1 text-primary">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </a>
                            </div>
                            <!--end::Name-->
                            <!--begin::Info-->
                            <div class="d-flex flex-wrap fw-semibold fs-6 mb-4 pe-2">
                                @if ($user->roles->count() > 0)
                                    <span class="d-flex align-items-center text-gray-500 text-hover-primary me-5 mb-2">
                                        <i class="ki-duotone ki-profile-circle fs-4 me-1">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                        @foreach ($user->roles as $role)
                                            {{$role->name}}
                                            @if (!$loop->last) , @endif
                                        @endforeach
                                    </span>
                                @endif
                                <a href="#" class="d-flex align-items-center text-gray-500 text-hover-primary me-5 mb-2">
                                    <i class="ki-duotone ki-geolocation fs-4 me-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                    {{$user->address->street_address}},
                                    {{$user->address->city}},
                                    {{$user->address->country->name}}
                                </a>
                                <span class="d-flex align-items-center text-gray-500 text-hover-primary mb-2">
                                    <i class="ki-duotone ki-sms fs-4">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                    {{$user->email}}
                                </span>
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::User-->
                    </div>
                    <!--end::Title-->
                    <!--begin::Stats-->
                    <div class="d-flex flex-wrap flex-stack">
                       <!--begin::Wrapper-->
                       <div class="d-flex flex-column flex-grow-1 pe-8">
                          <!--begin::Stats-->
                          <div class="d-flex flex-wrap">
                             <!--begin::Stat-->
                             <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                <!--begin::Number-->
                                <div class="d-flex align-items-center">
                                   <i class="ki-duotone ki-electronic-clock fs-3 text-success me-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                    <div class="fs-2 fw-bold">{{$user->created_at->diffForHumans()}}</div>
                                </div>
                                <!--end::Number-->
                                <!--begin::Label-->
                                <div class="fw-semibold fs-6 text-gray-500">Active from</div>
                                <!--end::Label-->
                             </div>
                             <!--end::Stat-->
                             <!--begin::Stat-->
                             <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                <!--begin::Number-->
                                <div class="d-flex align-items-center">
                                   <i class="ki-duotone ki-book fs-3 text-success me-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                                   <div class="fs-2 fw-bold" data-kt-countup="true" data-kt-countup-value="{{$user->projects_count}}">0</div>
                                </div>
                                <!--end::Number-->
                                <!--begin::Label-->
                                <div class="fw-semibold fs-6 text-gray-500">Projects</div>
                                <!--end::Label-->
                             </div>
                             <!--end::Stat-->
                          </div>
                          <!--end::Stats-->
                       </div>
                       <!--end::Wrapper-->
                    </div>
                    <!--end::Stats-->
                 </div>
                 <!--end::Info-->
              </div>
              <!--end::Details-->
              <!--begin::Navs-->
              <livewire:profile.options />
              <!--begin::Navs-->
           </div>
        </div>
        <!--end::Navbar-->
        <!--begin::details View-->
        <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
           <!--begin::Card header-->
           <div class="card-header cursor-pointer">
              <!--begin::Card title-->
              <div class="card-title m-0">
                 <h3 class="fw-bold m-0">Profile Details</h3>
              </div>
              <!--end::Card title-->
              <!--begin::Action-->
              <a href="{{route('profile.settings')}}"  class="btn btn-sm btn-primary align-self-center">Edit Profile</a>
              <!--end::Action-->
           </div>
           <!--begin::Card header-->
           <!--begin::Card body-->
           <livewire:profile.overview.profile-details :user="$user" />
           <!--end::Card body-->
        </div>
        <!--end::details View-->

        <!--begin::Row-->
        <div class="row gy-5 g-xl-10">
           <!--begin::Col-->
           <div class="col-xl-4">
              <!--begin::List widget 5-->
              <div class="card card-flush h-xl-100">
                 <!--begin::Header-->
                 <div class="card-header pt-7">
                    <!--begin::Title-->
                    <h3 class="card-title align-items-start flex-column">
                       <span class="card-label fw-bold text-gray-900">Product Delivery</span>
                       <span class="text-gray-500 mt-1 fw-semibold fs-6">1M Products Shipped so far</span>
                    </h3>
                    <!--end::Title-->
                    <!--begin::Toolbar-->
                    <div class="card-toolbar">
                       <a href="/../demo1/apps/ecommerce/sales/details.html" class="btn btn-sm btn-light">Order Details</a>
                    </div>
                    <!--end::Toolbar-->
                 </div>
                 <!--end::Header-->
                 <!--begin::Body-->
                 <div class="card-body">
                    <!--begin::Scroll-->
                    <div class="hover-scroll-overlay-y pe-6 me-n6" style="height: 415px">
                       <!--begin::Item-->
                       <div class="border border-dashed border-gray-300 rounded px-7 py-3 mb-6">
                          <!--begin::Info-->
                          <div class="d-flex flex-stack mb-3">
                             <!--begin::Wrapper-->
                             <div class="me-3">
                                <!--begin::Icon-->
                                <img src="/assets/media/stock/ecommerce/210.png" class="w-50px ms-n1 me-1" alt=""/>
                                <!--end::Icon-->
                                <!--begin::Title-->
                                <a href="/../demo1/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fw-bold">Elephant 1802</a>
                                <!--end::Title-->
                             </div>
                             <!--end::Wrapper-->
                             <!--begin::Action-->
                             <div class="m-0">
                                <!--begin::Menu-->
                                <button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end"
                                   data-kt-menu-trigger="click"
                                   data-kt-menu-placement="bottom-end"
                                   data-kt-menu-overflow="true">
                                <i class="ki-duotone ki-dots-square fs-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                </button>
                                <!--begin::Menu 2-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                                   <!--begin::Menu item-->
                                   <div class="menu-item px-3">
                                      <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick Actions</div>
                                   </div>
                                   <!--end::Menu item-->
                                   <!--begin::Menu separator-->
                                   <div class="separator mb-3 opacity-75"></div>
                                   <!--end::Menu separator-->
                                   <!--begin::Menu item-->
                                   <div class="menu-item px-3">
                                      <a href="#" class="menu-link px-3">
                                      New Ticket
                                      </a>
                                   </div>
                                   <!--end::Menu item-->
                                   <!--begin::Menu item-->
                                   <div class="menu-item px-3">
                                      <a href="#" class="menu-link px-3">
                                      New Customer
                                      </a>
                                   </div>
                                   <!--end::Menu item-->
                                   <!--begin::Menu item-->
                                   <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                      <!--begin::Menu item-->
                                      <a href="#" class="menu-link px-3">
                                      <span class="menu-title">New Group</span>
                                      <span class="menu-arrow"></span>
                                      </a>
                                      <!--end::Menu item-->
                                      <!--begin::Menu sub-->
                                      <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                         <!--begin::Menu item-->
                                         <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">
                                            Admin Group
                                            </a>
                                         </div>
                                         <!--end::Menu item-->
                                         <!--begin::Menu item-->
                                         <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">
                                            Staff Group
                                            </a>
                                         </div>
                                         <!--end::Menu item-->
                                         <!--begin::Menu item-->
                                         <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">
                                            Member Group
                                            </a>
                                         </div>
                                         <!--end::Menu item-->
                                      </div>
                                      <!--end::Menu sub-->
                                   </div>
                                   <!--end::Menu item-->
                                   <!--begin::Menu item-->
                                   <div class="menu-item px-3">
                                      <a href="#" class="menu-link px-3">
                                      New Contact
                                      </a>
                                   </div>
                                   <!--end::Menu item-->
                                   <!--begin::Menu separator-->
                                   <div class="separator mt-3 opacity-75"></div>
                                   <!--end::Menu separator-->
                                   <!--begin::Menu item-->
                                   <div class="menu-item px-3">
                                      <div class="menu-content px-3 py-3">
                                         <a class="btn btn-primary  btn-sm px-4" href="#">
                                         Generate Reports
                                         </a>
                                      </div>
                                   </div>
                                   <!--end::Menu item-->
                                </div>
                                <!--end::Menu 2-->
                                <!--end::Menu-->
                             </div>
                             <!--end::Action-->
                          </div>
                          <!--end::Info-->
                          <!--begin::Customer-->
                          <div class="d-flex flex-stack">
                             <!--begin::Name-->
                             <span class="text-gray-500 fw-bold">To:
                             <a href="/../demo1/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">
                             Jason Bourne                            </a>
                             </span>
                             <!--end::Name-->
                             <!--begin::Label-->
                             <span class="badge badge-light-success">Delivered</span>
                             <!--end::Label-->
                          </div>
                          <!--end::Customer-->
                       </div>
                       <!--end::Item-->
                       <!--begin::Item-->
                       <div class="border border-dashed border-gray-300 rounded px-7 py-3 mb-6">
                          <!--begin::Info-->
                          <div class="d-flex flex-stack mb-3">
                             <!--begin::Wrapper-->
                             <div class="me-3">
                                <!--begin::Icon-->
                                <img src="/assets/media/stock/ecommerce/209.png" class="w-50px ms-n1 me-1" alt=""/>
                                <!--end::Icon-->
                                <!--begin::Title-->
                                <a href="/../demo1/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fw-bold">RiseUP</a>
                                <!--end::Title-->
                             </div>
                             <!--end::Wrapper-->
                             <!--begin::Action-->
                             <div class="m-0">
                                <!--begin::Menu-->
                                <button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end"
                                   data-kt-menu-trigger="click"
                                   data-kt-menu-placement="bottom-end"
                                   data-kt-menu-overflow="true">
                                <i class="ki-duotone ki-dots-square fs-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                </button>
                                <!--begin::Menu 2-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                                   <!--begin::Menu item-->
                                   <div class="menu-item px-3">
                                      <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick Actions</div>
                                   </div>
                                   <!--end::Menu item-->
                                   <!--begin::Menu separator-->
                                   <div class="separator mb-3 opacity-75"></div>
                                   <!--end::Menu separator-->
                                   <!--begin::Menu item-->
                                   <div class="menu-item px-3">
                                      <a href="#" class="menu-link px-3">
                                      New Ticket
                                      </a>
                                   </div>
                                   <!--end::Menu item-->
                                   <!--begin::Menu item-->
                                   <div class="menu-item px-3">
                                      <a href="#" class="menu-link px-3">
                                      New Customer
                                      </a>
                                   </div>
                                   <!--end::Menu item-->
                                   <!--begin::Menu item-->
                                   <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                      <!--begin::Menu item-->
                                      <a href="#" class="menu-link px-3">
                                      <span class="menu-title">New Group</span>
                                      <span class="menu-arrow"></span>
                                      </a>
                                      <!--end::Menu item-->
                                      <!--begin::Menu sub-->
                                      <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                         <!--begin::Menu item-->
                                         <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">
                                            Admin Group
                                            </a>
                                         </div>
                                         <!--end::Menu item-->
                                         <!--begin::Menu item-->
                                         <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">
                                            Staff Group
                                            </a>
                                         </div>
                                         <!--end::Menu item-->
                                         <!--begin::Menu item-->
                                         <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">
                                            Member Group
                                            </a>
                                         </div>
                                         <!--end::Menu item-->
                                      </div>
                                      <!--end::Menu sub-->
                                   </div>
                                   <!--end::Menu item-->
                                   <!--begin::Menu item-->
                                   <div class="menu-item px-3">
                                      <a href="#" class="menu-link px-3">
                                      New Contact
                                      </a>
                                   </div>
                                   <!--end::Menu item-->
                                   <!--begin::Menu separator-->
                                   <div class="separator mt-3 opacity-75"></div>
                                   <!--end::Menu separator-->
                                   <!--begin::Menu item-->
                                   <div class="menu-item px-3">
                                      <div class="menu-content px-3 py-3">
                                         <a class="btn btn-primary  btn-sm px-4" href="#">
                                         Generate Reports
                                         </a>
                                      </div>
                                   </div>
                                   <!--end::Menu item-->
                                </div>
                                <!--end::Menu 2-->
                                <!--end::Menu-->
                             </div>
                             <!--end::Action-->
                          </div>
                          <!--end::Info-->
                          <!--begin::Customer-->
                          <div class="d-flex flex-stack">
                             <!--begin::Name-->
                             <span class="text-gray-500 fw-bold">To:
                             <a href="/../demo1/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">
                             Marie Durant                            </a>
                             </span>
                             <!--end::Name-->
                             <!--begin::Label-->
                             <span class="badge badge-light-primary">Shipping</span>
                             <!--end::Label-->
                          </div>
                          <!--end::Customer-->
                       </div>
                       <!--end::Item-->
                       <!--begin::Item-->
                       <div class="border border-dashed border-gray-300 rounded px-7 py-3 mb-6">
                          <!--begin::Info-->
                          <div class="d-flex flex-stack mb-3">
                             <!--begin::Wrapper-->
                             <div class="me-3">
                                <!--begin::Icon-->
                                <img src="/assets/media/stock/ecommerce/214.png" class="w-50px ms-n1 me-1" alt=""/>
                                <!--end::Icon-->
                                <!--begin::Title-->
                                <a href="/../demo1/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fw-bold">Yellow Stone</a>
                                <!--end::Title-->
                             </div>
                             <!--end::Wrapper-->
                             <!--begin::Action-->
                             <div class="m-0">
                                <!--begin::Menu-->
                                <button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end"
                                   data-kt-menu-trigger="click"
                                   data-kt-menu-placement="bottom-end"
                                   data-kt-menu-overflow="true">
                                <i class="ki-duotone ki-dots-square fs-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                </button>
                                <!--begin::Menu 2-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                                   <!--begin::Menu item-->
                                   <div class="menu-item px-3">
                                      <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick Actions</div>
                                   </div>
                                   <!--end::Menu item-->
                                   <!--begin::Menu separator-->
                                   <div class="separator mb-3 opacity-75"></div>
                                   <!--end::Menu separator-->
                                   <!--begin::Menu item-->
                                   <div class="menu-item px-3">
                                      <a href="#" class="menu-link px-3">
                                      New Ticket
                                      </a>
                                   </div>
                                   <!--end::Menu item-->
                                   <!--begin::Menu item-->
                                   <div class="menu-item px-3">
                                      <a href="#" class="menu-link px-3">
                                      New Customer
                                      </a>
                                   </div>
                                   <!--end::Menu item-->
                                   <!--begin::Menu item-->
                                   <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                      <!--begin::Menu item-->
                                      <a href="#" class="menu-link px-3">
                                      <span class="menu-title">New Group</span>
                                      <span class="menu-arrow"></span>
                                      </a>
                                      <!--end::Menu item-->
                                      <!--begin::Menu sub-->
                                      <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                         <!--begin::Menu item-->
                                         <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">
                                            Admin Group
                                            </a>
                                         </div>
                                         <!--end::Menu item-->
                                         <!--begin::Menu item-->
                                         <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">
                                            Staff Group
                                            </a>
                                         </div>
                                         <!--end::Menu item-->
                                         <!--begin::Menu item-->
                                         <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">
                                            Member Group
                                            </a>
                                         </div>
                                         <!--end::Menu item-->
                                      </div>
                                      <!--end::Menu sub-->
                                   </div>
                                   <!--end::Menu item-->
                                   <!--begin::Menu item-->
                                   <div class="menu-item px-3">
                                      <a href="#" class="menu-link px-3">
                                      New Contact
                                      </a>
                                   </div>
                                   <!--end::Menu item-->
                                   <!--begin::Menu separator-->
                                   <div class="separator mt-3 opacity-75"></div>
                                   <!--end::Menu separator-->
                                   <!--begin::Menu item-->
                                   <div class="menu-item px-3">
                                      <div class="menu-content px-3 py-3">
                                         <a class="btn btn-primary  btn-sm px-4" href="#">
                                         Generate Reports
                                         </a>
                                      </div>
                                   </div>
                                   <!--end::Menu item-->
                                </div>
                                <!--end::Menu 2-->
                                <!--end::Menu-->
                             </div>
                             <!--end::Action-->
                          </div>
                          <!--end::Info-->
                          <!--begin::Customer-->
                          <div class="d-flex flex-stack">
                             <!--begin::Name-->
                             <span class="text-gray-500 fw-bold">To:
                             <a href="/../demo1/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">
                             Dan Wilson                            </a>
                             </span>
                             <!--end::Name-->
                             <!--begin::Label-->
                             <span class="badge badge-light-danger">Confirmed</span>
                             <!--end::Label-->
                          </div>
                          <!--end::Customer-->
                       </div>
                       <!--end::Item-->
                       <!--begin::Item-->
                       <div class="border border-dashed border-gray-300 rounded px-7 py-3 mb-6">
                          <!--begin::Info-->
                          <div class="d-flex flex-stack mb-3">
                             <!--begin::Wrapper-->
                             <div class="me-3">
                                <!--begin::Icon-->
                                <img src="/assets/media/stock/ecommerce/211.png" class="w-50px ms-n1 me-1" alt=""/>
                                <!--end::Icon-->
                                <!--begin::Title-->
                                <a href="/../demo1/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fw-bold">Elephant 1802</a>
                                <!--end::Title-->
                             </div>
                             <!--end::Wrapper-->
                             <!--begin::Action-->
                             <div class="m-0">
                                <!--begin::Menu-->
                                <button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end"
                                   data-kt-menu-trigger="click"
                                   data-kt-menu-placement="bottom-end"
                                   data-kt-menu-overflow="true">
                                <i class="ki-duotone ki-dots-square fs-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                </button>
                                <!--begin::Menu 2-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                                   <!--begin::Menu item-->
                                   <div class="menu-item px-3">
                                      <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick Actions</div>
                                   </div>
                                   <!--end::Menu item-->
                                   <!--begin::Menu separator-->
                                   <div class="separator mb-3 opacity-75"></div>
                                   <!--end::Menu separator-->
                                   <!--begin::Menu item-->
                                   <div class="menu-item px-3">
                                      <a href="#" class="menu-link px-3">
                                      New Ticket
                                      </a>
                                   </div>
                                   <!--end::Menu item-->
                                   <!--begin::Menu item-->
                                   <div class="menu-item px-3">
                                      <a href="#" class="menu-link px-3">
                                      New Customer
                                      </a>
                                   </div>
                                   <!--end::Menu item-->
                                   <!--begin::Menu item-->
                                   <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                      <!--begin::Menu item-->
                                      <a href="#" class="menu-link px-3">
                                      <span class="menu-title">New Group</span>
                                      <span class="menu-arrow"></span>
                                      </a>
                                      <!--end::Menu item-->
                                      <!--begin::Menu sub-->
                                      <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                         <!--begin::Menu item-->
                                         <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">
                                            Admin Group
                                            </a>
                                         </div>
                                         <!--end::Menu item-->
                                         <!--begin::Menu item-->
                                         <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">
                                            Staff Group
                                            </a>
                                         </div>
                                         <!--end::Menu item-->
                                         <!--begin::Menu item-->
                                         <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">
                                            Member Group
                                            </a>
                                         </div>
                                         <!--end::Menu item-->
                                      </div>
                                      <!--end::Menu sub-->
                                   </div>
                                   <!--end::Menu item-->
                                   <!--begin::Menu item-->
                                   <div class="menu-item px-3">
                                      <a href="#" class="menu-link px-3">
                                      New Contact
                                      </a>
                                   </div>
                                   <!--end::Menu item-->
                                   <!--begin::Menu separator-->
                                   <div class="separator mt-3 opacity-75"></div>
                                   <!--end::Menu separator-->
                                   <!--begin::Menu item-->
                                   <div class="menu-item px-3">
                                      <div class="menu-content px-3 py-3">
                                         <a class="btn btn-primary  btn-sm px-4" href="#">
                                         Generate Reports
                                         </a>
                                      </div>
                                   </div>
                                   <!--end::Menu item-->
                                </div>
                                <!--end::Menu 2-->
                                <!--end::Menu-->
                             </div>
                             <!--end::Action-->
                          </div>
                          <!--end::Info-->
                          <!--begin::Customer-->
                          <div class="d-flex flex-stack">
                             <!--begin::Name-->
                             <span class="text-gray-500 fw-bold">To:
                             <a href="/../demo1/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">
                             Lebron Wayde                            </a>
                             </span>
                             <!--end::Name-->
                             <!--begin::Label-->
                             <span class="badge badge-light-success">Delivered</span>
                             <!--end::Label-->
                          </div>
                          <!--end::Customer-->
                       </div>
                       <!--end::Item-->
                       <!--begin::Item-->
                       <div class="border border-dashed border-gray-300 rounded px-7 py-3 mb-6">
                          <!--begin::Info-->
                          <div class="d-flex flex-stack mb-3">
                             <!--begin::Wrapper-->
                             <div class="me-3">
                                <!--begin::Icon-->
                                <img src="/assets/media/stock/ecommerce/215.png" class="w-50px ms-n1 me-1" alt=""/>
                                <!--end::Icon-->
                                <!--begin::Title-->
                                <a href="/../demo1/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fw-bold">RiseUP</a>
                                <!--end::Title-->
                             </div>
                             <!--end::Wrapper-->
                             <!--begin::Action-->
                             <div class="m-0">
                                <!--begin::Menu-->
                                <button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end"
                                   data-kt-menu-trigger="click"
                                   data-kt-menu-placement="bottom-end"
                                   data-kt-menu-overflow="true">
                                <i class="ki-duotone ki-dots-square fs-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                </button>
                                <!--begin::Menu 2-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                                   <!--begin::Menu item-->
                                   <div class="menu-item px-3">
                                      <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick Actions</div>
                                   </div>
                                   <!--end::Menu item-->
                                   <!--begin::Menu separator-->
                                   <div class="separator mb-3 opacity-75"></div>
                                   <!--end::Menu separator-->
                                   <!--begin::Menu item-->
                                   <div class="menu-item px-3">
                                      <a href="#" class="menu-link px-3">
                                      New Ticket
                                      </a>
                                   </div>
                                   <!--end::Menu item-->
                                   <!--begin::Menu item-->
                                   <div class="menu-item px-3">
                                      <a href="#" class="menu-link px-3">
                                      New Customer
                                      </a>
                                   </div>
                                   <!--end::Menu item-->
                                   <!--begin::Menu item-->
                                   <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                      <!--begin::Menu item-->
                                      <a href="#" class="menu-link px-3">
                                      <span class="menu-title">New Group</span>
                                      <span class="menu-arrow"></span>
                                      </a>
                                      <!--end::Menu item-->
                                      <!--begin::Menu sub-->
                                      <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                         <!--begin::Menu item-->
                                         <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">
                                            Admin Group
                                            </a>
                                         </div>
                                         <!--end::Menu item-->
                                         <!--begin::Menu item-->
                                         <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">
                                            Staff Group
                                            </a>
                                         </div>
                                         <!--end::Menu item-->
                                         <!--begin::Menu item-->
                                         <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">
                                            Member Group
                                            </a>
                                         </div>
                                         <!--end::Menu item-->
                                      </div>
                                      <!--end::Menu sub-->
                                   </div>
                                   <!--end::Menu item-->
                                   <!--begin::Menu item-->
                                   <div class="menu-item px-3">
                                      <a href="#" class="menu-link px-3">
                                      New Contact
                                      </a>
                                   </div>
                                   <!--end::Menu item-->
                                   <!--begin::Menu separator-->
                                   <div class="separator mt-3 opacity-75"></div>
                                   <!--end::Menu separator-->
                                   <!--begin::Menu item-->
                                   <div class="menu-item px-3">
                                      <div class="menu-content px-3 py-3">
                                         <a class="btn btn-primary  btn-sm px-4" href="#">
                                         Generate Reports
                                         </a>
                                      </div>
                                   </div>
                                   <!--end::Menu item-->
                                </div>
                                <!--end::Menu 2-->
                                <!--end::Menu-->
                             </div>
                             <!--end::Action-->
                          </div>
                          <!--end::Info-->
                          <!--begin::Customer-->
                          <div class="d-flex flex-stack">
                             <!--begin::Name-->
                             <span class="text-gray-500 fw-bold">To:
                             <a href="/../demo1/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">
                             Ana Simmons                            </a>
                             </span>
                             <!--end::Name-->
                             <!--begin::Label-->
                             <span class="badge badge-light-primary">Shipping</span>
                             <!--end::Label-->
                          </div>
                          <!--end::Customer-->
                       </div>
                       <!--end::Item-->
                       <!--begin::Item-->
                       <div class="border border-dashed border-gray-300 rounded px-7 py-3 ">
                          <!--begin::Info-->
                          <div class="d-flex flex-stack mb-3">
                             <!--begin::Wrapper-->
                             <div class="me-3">
                                <!--begin::Icon-->
                                <img src="/assets/media/stock/ecommerce/192.png" class="w-50px ms-n1 me-1" alt=""/>
                                <!--end::Icon-->
                                <!--begin::Title-->
                                <a href="/../demo1/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fw-bold">Yellow Stone</a>
                                <!--end::Title-->
                             </div>
                             <!--end::Wrapper-->
                             <!--begin::Action-->
                             <div class="m-0">
                                <!--begin::Menu-->
                                <button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end"
                                   data-kt-menu-trigger="click"
                                   data-kt-menu-placement="bottom-end"
                                   data-kt-menu-overflow="true">
                                <i class="ki-duotone ki-dots-square fs-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                </button>
                                <!--begin::Menu 2-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                                   <!--begin::Menu item-->
                                   <div class="menu-item px-3">
                                      <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick Actions</div>
                                   </div>
                                   <!--end::Menu item-->
                                   <!--begin::Menu separator-->
                                   <div class="separator mb-3 opacity-75"></div>
                                   <!--end::Menu separator-->
                                   <!--begin::Menu item-->
                                   <div class="menu-item px-3">
                                      <a href="#" class="menu-link px-3">
                                      New Ticket
                                      </a>
                                   </div>
                                   <!--end::Menu item-->
                                   <!--begin::Menu item-->
                                   <div class="menu-item px-3">
                                      <a href="#" class="menu-link px-3">
                                      New Customer
                                      </a>
                                   </div>
                                   <!--end::Menu item-->
                                   <!--begin::Menu item-->
                                   <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                      <!--begin::Menu item-->
                                      <a href="#" class="menu-link px-3">
                                      <span class="menu-title">New Group</span>
                                      <span class="menu-arrow"></span>
                                      </a>
                                      <!--end::Menu item-->
                                      <!--begin::Menu sub-->
                                      <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                         <!--begin::Menu item-->
                                         <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">
                                            Admin Group
                                            </a>
                                         </div>
                                         <!--end::Menu item-->
                                         <!--begin::Menu item-->
                                         <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">
                                            Staff Group
                                            </a>
                                         </div>
                                         <!--end::Menu item-->
                                         <!--begin::Menu item-->
                                         <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">
                                            Member Group
                                            </a>
                                         </div>
                                         <!--end::Menu item-->
                                      </div>
                                      <!--end::Menu sub-->
                                   </div>
                                   <!--end::Menu item-->
                                   <!--begin::Menu item-->
                                   <div class="menu-item px-3">
                                      <a href="#" class="menu-link px-3">
                                      New Contact
                                      </a>
                                   </div>
                                   <!--end::Menu item-->
                                   <!--begin::Menu separator-->
                                   <div class="separator mt-3 opacity-75"></div>
                                   <!--end::Menu separator-->
                                   <!--begin::Menu item-->
                                   <div class="menu-item px-3">
                                      <div class="menu-content px-3 py-3">
                                         <a class="btn btn-primary  btn-sm px-4" href="#">
                                         Generate Reports
                                         </a>
                                      </div>
                                   </div>
                                   <!--end::Menu item-->
                                </div>
                                <!--end::Menu 2-->
                                <!--end::Menu-->
                             </div>
                             <!--end::Action-->
                          </div>
                          <!--end::Info-->
                          <!--begin::Customer-->
                          <div class="d-flex flex-stack">
                             <!--begin::Name-->
                             <span class="text-gray-500 fw-bold">To:
                             <a href="/../demo1/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">
                             Kevin Leonard                            </a>
                             </span>
                             <!--end::Name-->
                             <!--begin::Label-->
                             <span class="badge badge-light-danger">Confirmed</span>
                             <!--end::Label-->
                          </div>
                          <!--end::Customer-->
                       </div>
                       <!--end::Item-->
                    </div>
                    <!--end::Scroll-->
                 </div>
                 <!--end::Body-->
              </div>
              <!--end::List widget 5-->
           </div>
           <!--end::Col-->
           <!--begin::Col-->
           <div class="col-xl-8">
              <!--begin::Table Widget 5-->
              <div class="card card-flush h-xl-100">
                 <!--begin::Card header-->
                 <div class="card-header pt-7">
                    <!--begin::Title-->
                    <h3 class="card-title align-items-start flex-column">
                       <span class="card-label fw-bold text-gray-900">Project Report</span>
                       <span class="text-gray-500 mt-1 fw-semibold fs-6">Total {{$user->projects_count}} Projects</span>
                    </h3>
                    <!--end::Title-->
                    <!--begin::Actions-->
                    <div class="card-toolbar">
                       <!--begin::Filters-->
                       <div class="d-flex flex-stack flex-wrap gap-4">
                          <!--begin::Destination-->
                          <div class="d-flex align-items-center fw-bold">
                             <!--begin::Label-->
                             <div class="text-muted fs-7 me-2">Cateogry</div>
                             <!--end::Label-->
                             <!--begin::Select-->
                             <select class="form-select form-select-transparent text-gray-900 fs-7 lh-1 fw-bold py-0 ps-3 w-auto" data-control="select2" data-hide-search="true" data-dropdown-css-class="w-150px" data-placeholder="Select an option">
                                <option></option>
                                <option value="Show All" selected>Show All</option>
                                <option value="a">Category A</option>
                                <option value="b">Category B</option>
                             </select>
                             <!--end::Select-->
                          </div>
                          <!--end::Destination-->
                          <!--begin::Status-->
                          <div class="d-flex align-items-center fw-bold">
                             <!--begin::Label-->
                             <div class="text-muted fs-7 me-2">Status</div>
                             <!--end::Label-->
                             <!--begin::Select-->
                             <select class="form-select form-select-transparent text-gray-900 fs-7 lh-1 fw-bold py-0 ps-3 w-auto" data-control="select2" data-hide-search="true" data-dropdown-css-class="w-150px" data-placeholder="Select an option" data-kt-table-widget-5="filter_status">
                                <option></option>
                                <option value="Show All" selected>Show All</option>
                                <option value="In Stock">In Stock</option>
                                <option value="Out of Stock">Out of Stock</option>
                                <option value="Low Stock">Low Stock</option>
                             </select>
                             <!--end::Select-->
                          </div>
                          <!--end::Status-->
                          <!--begin::Search-->
                          {{-- <a href="{{route('user.projects', $user)}}" class="btn btn-light btn-sm">View Projects</a> --}}
                          <!--end::Search-->
                       </div>
                       <!--begin::Filters-->
                    </div>
                    <!--end::Actions-->
                 </div>
                 <!--end::Card header-->
                 <!--begin::Card body-->
                 <div class="card-body">
                    <!--begin::Table-->
                    <table class="table align-middle table-row-dashed fs-6 gy-3" id="kt_table_widget_5_table">
                       <!--begin::Table head-->
                       <thead>
                          <!--begin::Table row-->
                          <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                             <th class="min-w-150px">Name</th>
                             <th class="text-end pe-3 min-w-150px">Date Added</th>
                             <th class="text-end pe-3 min-w-100px">Payout Price</th>
                             <th class="text-end pe-3 min-w-100px">Status</th>
                             <th class="text-end pe-0 min-w-75px">View</th>
                          </tr>
                          <!--end::Table row-->
                       </thead>
                       <!--end::Table head-->
                       <!--begin::Table body-->
                       <tbody class="fw-bold text-gray-600">
                        @foreach ($user->projects as $project)
                            <tr>
                                <!--begin::Product ID-->
                                <td class="text-start">
                                    {{$project->name}}
                                </td>
                                <!--end::Product ID-->
                                <!--begin::Date added-->
                                <td class="text-end">
                                    {{\Carbon\Carbon::parse($project->created_at)->format('Y/m/d')}}
                                </td>
                                <!--end::Date added-->
                                <!--begin::Price-->
                                <td class="text-end">
                                    $ {{$project->payout}}
                                </td>
                                <!--end::Price-->
                                <!--begin::Status-->
                                <td class="text-end">
                                    @if ($project->is_completed)
                                        <span class="badge py-3 px-4 fs-7 badge-light-success">Completed</span>
                                    @elseif($project->due_at >= now())
                                        <span class="badge py-3 px-4 fs-7 badge-light-danger">Overdue</span>
                                    @else
                                        <span class="badge py-3 px-4 fs-7 badge-light-primary">Pending</span>
                                    @endif
                                </td>
                                <!--end::Status-->
                                <!--begin::Qty-->
                                <td class="text-end" data-order="58">
                                    <a href="{{route('projects.show', $project)}}" class="btn btn-sm text-gray-900 fw-bold">view</a>
                                </td>
                                <!--end::Qty-->
                            </tr>
                        @endforeach
                       </tbody>
                       <!--end::Table body-->
                    </table>
                    <!--end::Table-->
                 </div>
                 <!--end::Card body-->
              </div>
              <!--end::Table Widget 5-->
           </div>
           <!--end::Col-->
        </div>
        <!--end::Row-->
     </div>

</x-app-layout>
