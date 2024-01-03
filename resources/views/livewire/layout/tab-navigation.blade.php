<?php

use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;

new class extends Component
{

}; ?>

<div
    class="
        app-header-menu
        app-header-mobile-drawer
        align-items-stretch
    "

    data-kt-drawer="true"
	data-kt-drawer-name="app-header-menu"
	data-kt-drawer-activate="{default: true, lg: false}"
	data-kt-drawer-overlay="true"
	data-kt-drawer-width="250px"
	data-kt-drawer-direction="end"
	data-kt-drawer-toggle="#kt_app_header_menu_toggle"

    data-kt-swapper="true"
    data-kt-swapper-mode="{default: 'append', lg: 'prepend'}"
    data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}"
>
    <!--begin::Menu-->
    <div
        class="
            menu
            menu-rounded
            menu-column
            menu-lg-row
            my-5
            my-lg-0
            align-items-stretch
            fw-semibold
            px-2 px-lg-0
        "

        id="kt_app_header_menu"
        data-kt-menu="true"
    >
        <!--begin:Menu item-->
        <div  data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"  class="menu-item here show menu-here-bg menu-lg-down-accordion me-0 me-lg-2" >
            <!--begin:Menu link-->
            <span class="menu-link"  >
                <span  class="menu-title" >Dashboards</span>
                <span  class="menu-arrow d-lg-none" ></span>
            </span><!--end:Menu link--><!--begin:Menu sub-->
            <div  class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-0 w-100 w-lg-850px" >
                <!--begin:Dashboards menu-->
                <div class="menu-state-bg menu-extended overflow-hidden overflow-lg-visible" data-kt-menu-dismiss="true">
                    <!--begin:Row-->
                    <div class="row">
                        <!--begin:Col-->
                        <div class="col-lg-8 mb-3 mb-lg-0  py-3 px-3 py-lg-6 px-lg-6">
                            <!--begin:Row-->
                            <div class="row">
                                                                        <!--begin:Col-->
                                    <div class="col-lg-6 mb-3">
                                        <!--begin:Menu item-->
                                        <div class="menu-item p-0 m-0">
                                            <!--begin:Menu link-->
                                            <a href="/../demo1/index.html" class="menu-link ">
                                                <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                                    <i class="ki-duotone ki-element-11 text-primary fs-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>                                </span>

                                                <span class="d-flex flex-column">
                                                    <span class="fs-6 fw-bold text-gray-800">Default</span>
                                                    <span class="fs-7 fw-semibold text-muted">Reports & statistics</span>
                                                </span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                    </div>
                                    <!--end:Col-->
                                                                        <!--begin:Col-->
                                    <div class="col-lg-6 mb-3">
                                        <!--begin:Menu item-->
                                        <div class="menu-item p-0 m-0">
                                            <!--begin:Menu link-->
                                            <a href="/../demo1/dashboards/ecommerce.html" class="menu-link ">
                                                <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                                    <i class="ki-duotone ki-basket text-danger fs-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>                                </span>

                                                <span class="d-flex flex-column">
                                                    <span class="fs-6 fw-bold text-gray-800">eCommerce</span>
                                                    <span class="fs-7 fw-semibold text-muted">Sales reports</span>
                                                </span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                    </div>
                                    <!--end:Col-->
                                                                        <!--begin:Col-->
                                    <div class="col-lg-6 mb-3">
                                        <!--begin:Menu item-->
                                        <div class="menu-item p-0 m-0">
                                            <!--begin:Menu link-->
                                            <a href="/../demo1/dashboards/projects.html" class="menu-link ">
                                                <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                                    <i class="ki-duotone ki-abstract-44 text-info fs-1"><span class="path1"></span><span class="path2"></span></i>                                </span>

                                                <span class="d-flex flex-column">
                                                    <span class="fs-6 fw-bold text-gray-800">Projects</span>
                                                    <span class="fs-7 fw-semibold text-muted">Tasts, graphs & charts</span>
                                                </span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                    </div>
                                    <!--end:Col-->
                                                                        <!--begin:Col-->
                                    <div class="col-lg-6 mb-3">
                                        <!--begin:Menu item-->
                                        <div class="menu-item p-0 m-0">
                                            <!--begin:Menu link-->
                                            <a href="/../demo1/dashboards/online-courses.html" class="menu-link active">
                                                <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                                    <i class="ki-duotone ki-color-swatch text-success fs-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span><span class="path14"></span><span class="path15"></span><span class="path16"></span><span class="path17"></span><span class="path18"></span><span class="path19"></span><span class="path20"></span><span class="path21"></span></i>                                </span>

                                                <span class="d-flex flex-column">
                                                    <span class="fs-6 fw-bold text-gray-800">Online Courses</span>
                                                    <span class="fs-7 fw-semibold text-muted">Student progress</span>
                                                </span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                    </div>
                                    <!--end:Col-->
                                                                        <!--begin:Col-->
                                    <div class="col-lg-6 mb-3">
                                        <!--begin:Menu item-->
                                        <div class="menu-item p-0 m-0">
                                            <!--begin:Menu link-->
                                            <a href="/../demo1/dashboards/marketing.html" class="menu-link ">
                                                <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                                    <i class="ki-duotone ki-chart-simple text-gray-900 fs-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>                                </span>

                                                <span class="d-flex flex-column">
                                                    <span class="fs-6 fw-bold text-gray-800">Marketing</span>
                                                    <span class="fs-7 fw-semibold text-muted">Campaings & conversions</span>
                                                </span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                    </div>
                                    <!--end:Col-->
                                                                        <!--begin:Col-->
                                    <div class="col-lg-6 mb-3">
                                        <!--begin:Menu item-->
                                        <div class="menu-item p-0 m-0">
                                            <!--begin:Menu link-->
                                            <a href="/../demo1/dashboards/bidding.html" class="menu-link ">
                                                <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                                    <i class="ki-duotone ki-switch text-warning fs-1"><span class="path1"></span><span class="path2"></span></i>                                </span>

                                                <span class="d-flex flex-column">
                                                    <span class="fs-6 fw-bold text-gray-800">Bidding</span>
                                                    <span class="fs-7 fw-semibold text-muted">Campaings & conversions</span>
                                                </span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                    </div>
                                    <!--end:Col-->
                                                                        <!--begin:Col-->
                                    <div class="col-lg-6 mb-3">
                                        <!--begin:Menu item-->
                                        <div class="menu-item p-0 m-0">
                                            <!--begin:Menu link-->
                                            <a href="/../demo1/dashboards/pos.html" class="menu-link ">
                                                <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                                    <i class="ki-duotone ki-abstract-42 text-danger fs-1"><span class="path1"></span><span class="path2"></span></i>                                </span>

                                                <span class="d-flex flex-column">
                                                    <span class="fs-6 fw-bold text-gray-800">POS System</span>
                                                    <span class="fs-7 fw-semibold text-muted">Campaings & conversions</span>
                                                </span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                    </div>
                                    <!--end:Col-->
                                                                        <!--begin:Col-->
                                    <div class="col-lg-6 mb-3">
                                        <!--begin:Menu item-->
                                        <div class="menu-item p-0 m-0">
                                            <!--begin:Menu link-->
                                            <a href="/../demo1/dashboards/call-center.html" class="menu-link ">
                                                <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                                    <i class="ki-duotone ki-call text-primary fs-1"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span></i>                                </span>

                                                <span class="d-flex flex-column">
                                                    <span class="fs-6 fw-bold text-gray-800">Call Center</span>
                                                    <span class="fs-7 fw-semibold text-muted">Campaings & conversions</span>
                                                </span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                    </div>
                                    <!--end:Col-->
                                                                                                                                                                                                                                                    </div>
                            <!--end:Row-->

                            <div class="separator separator-dashed mx-5 my-5"></div>

                            <!--begin:Landing-->
                            <div class="d-flex flex-stack flex-wrap flex-lg-nowrap gap-2 mx-5">
                                <div class="d-flex flex-column me-5">
                                    <div class="fs-6 fw-bold text-gray-800">
                                        Landing Page Template
                                    </div>
                                    <div class="fs-7 fw-semibold text-muted">
                                        Onpe page landing template with pricing & others
                                    </div>
                                </div>

                                <a href="/../demo1/landing.html" class="btn btn-sm btn-primary fw-bold">
                                    Explore
                                </a>
                            </div>
                            <!--end:Landing-->
                        </div>
                        <!--end:Col-->

                        <!--begin:Col-->
                        <div class="menu-more bg-light col-lg-4 py-3 px-3 py-lg-6 px-lg-6 rounded-end">
                            <!--begin:Heading-->
                            <h4 class="fs-6 fs-lg-4 text-gray-800 fw-bold mt-3 mb-3 ms-4">More Dashboards</h4>
                            <!--end:Heading-->


                                <!--begin:Menu item-->
                                <div class="menu-item p-0 m-0">
                                    <!--begin:Menu link-->
                                    <a href="/../demo1/dashboards/logistics.html" class="menu-link py-2 ">
                                        <span class="menu-title">
                                            Logistics                        </span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->

                                <!--begin:Menu item-->
                                <div class="menu-item p-0 m-0">
                                    <!--begin:Menu link-->
                                    <a href="/../demo1/dashboards/website-analytics.html" class="menu-link py-2 ">
                                        <span class="menu-title">
                                            Website Analytics                        </span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->

                                <!--begin:Menu item-->
                                <div class="menu-item p-0 m-0">
                                    <!--begin:Menu link-->
                                    <a href="/../demo1/dashboards/finance-performance.html" class="menu-link py-2 ">
                                        <span class="menu-title">
                                            Finance Performance                        </span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->

                                <!--begin:Menu item-->
                                <div class="menu-item p-0 m-0">
                                    <!--begin:Menu link-->
                                    <a href="/../demo1/dashboards/store-analytics.html" class="menu-link py-2 ">
                                        <span class="menu-title">
                                            Store Analytics                        </span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->

                                <!--begin:Menu item-->
                                <div class="menu-item p-0 m-0">
                                    <!--begin:Menu link-->
                                    <a href="/../demo1/dashboards/social.html" class="menu-link py-2 ">
                                        <span class="menu-title">
                                            Social                        </span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->

                                <!--begin:Menu item-->
                                <div class="menu-item p-0 m-0">
                                    <!--begin:Menu link-->
                                    <a href="/../demo1/dashboards/delivery.html" class="menu-link py-2 ">
                                        <span class="menu-title">
                                            Delivery                        </span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->

                                <!--begin:Menu item-->
                                <div class="menu-item p-0 m-0">
                                    <!--begin:Menu link-->
                                    <a href="/../demo1/dashboards/crypto.html" class="menu-link py-2 ">
                                        <span class="menu-title">
                                            Crypto                        </span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->

                                <!--begin:Menu item-->
                                <div class="menu-item p-0 m-0">
                                    <!--begin:Menu link-->
                                    <a href="/../demo1/dashboards/school.html" class="menu-link py-2 ">
                                        <span class="menu-title">
                                            School                        </span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->

                                <!--begin:Menu item-->
                                <div class="menu-item p-0 m-0">
                                    <!--begin:Menu link-->
                                    <a href="/../demo1/dashboards/podcast.html" class="menu-link py-2 ">
                                        <span class="menu-title">
                                            Podcast                        </span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                                    </div>
                        <!--end:Col-->
                    </div>
                    <!--end:Row-->
                </div>
                <!--end:Dashboards menu-->
            </div>
            <!--end:Menu sub-->
        </div>
        <!--end:Menu item-->
        <!--begin:Menu item-->
        <div  data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"  class="menu-item menu-lg-down-accordion me-0 me-lg-2" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-title" >Pages</span><span  class="menu-arrow d-lg-none" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-0" ><!--begin:Pages menu-->
            <div class="menu-active-bg px-4 px-lg-0">
                <!--begin:Tabs nav-->
                <div class="d-flex w-100 overflow-auto">
                    <ul class="nav nav-stretch nav-line-tabs fw-bold fs-6 p-0 p-lg-10 flex-nowrap flex-grow-1">
                                                        <!--begin:Nav item-->
                        <li class="nav-item mx-lg-1">
                            <a class="nav-link py-3 py-lg-6 active text-active-primary" href="#" data-bs-toggle="tab" data-bs-target="#kt_app_header_menu_pages_pages">
                                General
                            </a>
                        </li>
                        <!--end:Nav item-->
                        <!--begin:Nav item-->
                        <li class="nav-item mx-lg-1">
                            <a class="nav-link py-3 py-lg-6  text-active-primary" href="#" data-bs-toggle="tab" data-bs-target="#kt_app_header_menu_pages_account">
                                Account
                            </a>
                        </li>
                        <!--end:Nav item-->
                        <!--begin:Nav item-->
                        <li class="nav-item mx-lg-1">
                            <a class="nav-link py-3 py-lg-6  text-active-primary" href="#" data-bs-toggle="tab" data-bs-target="#kt_app_header_menu_pages_authentication">
                                Authentication
                            </a>
                        </li>
                        <!--end:Nav item-->
                        <!--begin:Nav item-->
                        <li class="nav-item mx-lg-1">
                            <a class="nav-link py-3 py-lg-6  text-active-primary" href="#" data-bs-toggle="tab" data-bs-target="#kt_app_header_menu_pages_utilities">
                                Utilities
                            </a>
                        </li>
                        <!--end:Nav item-->
                         <!--begin:Nav item-->
                        <li class="nav-item mx-lg-1">
                            <a class="nav-link py-3 py-lg-6  text-active-primary" href="#" data-bs-toggle="tab" data-bs-target="#kt_app_header_menu_pages_widgets">
                                Widgets
                            </a>
                        </li>
                        <!--end:Nav item-->
                    </ul>
                </div>
                <!--end:Tabs nav-->

                <!--begin:Tab content-->
    <div class="tab-content py-4 py-lg-8 px-lg-7">
        <!--begin:Tab pane-->
        <div class="tab-pane active w-lg-1000px" id="kt_app_header_menu_pages_pages">
            <!--begin:Row-->
            <div class="row">
                <!--begin:Col-->
                <div class="col-lg-8">
                    <!--begin:Row-->
                    <div class="row">
                        <!--begin:Col-->
                        <div class="col-lg-3 mb-6 mb-lg-0">
                            <!--begin:Menu heading-->
                            <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">User Profile</h4>
                            <!--end:Menu heading-->

                                                <!--begin:Menu item-->
                                <div class="menu-item p-0 m-0">
                                    <!--begin:Menu link-->
                                    <a href="/../demo1/pages/user-profile/overview.html" class="menu-link ">
                                        <span class="menu-title">Overview</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                <div class="menu-item p-0 m-0">
                                    <!--begin:Menu link-->
                                    <a href="/../demo1/pages/user-profile/projects.html" class="menu-link ">
                                        <span class="menu-title">Projects</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                <div class="menu-item p-0 m-0">
                                    <!--begin:Menu link-->
                                    <a href="/../demo1/pages/user-profile/campaigns.html" class="menu-link ">
                                        <span class="menu-title">Campaigns</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                <div class="menu-item p-0 m-0">
                                    <!--begin:Menu link-->
                                    <a href="/../demo1/pages/user-profile/documents.html" class="menu-link ">
                                        <span class="menu-title">Documents</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                <div class="menu-item p-0 m-0">
                                    <!--begin:Menu link-->
                                    <a href="/../demo1/pages/user-profile/followers.html" class="menu-link ">
                                        <span class="menu-title">Followers</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                <div class="menu-item p-0 m-0">
                                    <!--begin:Menu link-->
                                    <a href="/../demo1/pages/user-profile/activity.html" class="menu-link ">
                                        <span class="menu-title">Activity</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                        </div>
                        <!--end:Col-->

                        <!--begin:Col-->
                        <div class="col-lg-3 mb-6 mb-lg-0">
                            <!--begin:Menu section-->
                            <div class="mb-6">
                                <!--begin:Menu heading-->
                                <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Corporate</h4>
                                <!--end:Menu heading-->

                                                        <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                        <!--begin:Menu link-->
                                        <a href="/../demo1/pages/about.html" class="menu-link ">
                                            <span class="menu-title">About</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                        <!--begin:Menu link-->
                                        <a href="/../demo1/pages/team.html" class="menu-link ">
                                            <span class="menu-title">Our Team</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                        <!--begin:Menu link-->
                                        <a href="/../demo1/pages/contact.html" class="menu-link ">
                                            <span class="menu-title">Contact Us</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                        <!--begin:Menu link-->
                                        <a href="/../demo1/pages/licenses.html" class="menu-link ">
                                            <span class="menu-title">Licenses</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                        <!--begin:Menu link-->
                                        <a href="/../demo1/pages/sitemap.html" class="menu-link ">
                                            <span class="menu-title">Sitemap</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                                </div>
                            <!--end:Menu section-->

                            <!--begin:Menu section-->
                            <div class="mb-0">
                                <!--begin:Menu heading-->
                                <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Careers</h4>
                                <!--end:Menu heading-->

                                                        <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                        <!--begin:Menu link-->
                                        <a href="/../demo1/pages/careers/list.html" class="menu-link ">
                                            <span class="menu-title">Careers List</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                        <!--begin:Menu link-->
                                        <a href="/../demo1/pages/careers/apply.html" class="menu-link ">
                                            <span class="menu-title">Careers Apply</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                                </div>
                            <!--end:Menu section-->
                        </div>
                        <!--end:Col-->

                        <!--begin:Col-->
                        <div class="col-lg-3 mb-6 mb-lg-0">
                            <!--begin:Menu section-->
                            <div class="mb-6">
                                <!--begin:Menu heading-->
                                <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">FAQ</h4>
                                <!--end:Menu heading-->

                                                        <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                        <!--begin:Menu link-->
                                        <a href="/../demo1/pages/faq/classic.html" class="menu-link ">
                                            <span class="menu-title">FAQ Classic</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                        <!--begin:Menu link-->
                                        <a href="/../demo1/pages/faq/extended.html" class="menu-link ">
                                            <span class="menu-title">FAQ Extended</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                                </div>
                            <!--end:Menu section-->

                            <!--begin:Menu section-->
                            <div class="mb-6">
                                <!--begin:Menu heading-->
                                <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Blog</h4>
                                <!--end:Menu heading-->

                                                        <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                        <!--begin:Menu link-->
                                        <a href="/../demo1/pages/blog/home.html" class="menu-link ">
                                            <span class="menu-title">Blog Home</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                        <!--begin:Menu link-->
                                        <a href="/../demo1/pages/blog/post.html" class="menu-link ">
                                            <span class="menu-title">Blog Post</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                                </div>
                            <!--end:Menu section-->

                            <!--begin:Menu section-->
                            <div class="mb-0">
                                <!--begin:Menu heading-->
                                <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Pricing</h4>
                                <!--end:Menu heading-->

                                                        <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                        <!--begin:Menu link-->
                                        <a href="/../demo1/pages/pricing.html" class="menu-link ">
                                            <span class="menu-title">Column Pricing</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                        <!--begin:Menu link-->
                                        <a href="/../demo1/pages/pricing/table.html" class="menu-link ">
                                            <span class="menu-title">Table Pricing</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                                </div>
                            <!--end:Menu section-->
                        </div>
                        <!--end:Col-->

                        <!--begin:Col-->
                        <div class="col-lg-3 mb-6 mb-lg-0">
                            <!--begin:Menu section-->
                            <div class="mb-0">
                                <!--begin:Menu heading-->
                                <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Social</h4>
                                <!--end:Menu heading-->

                                                        <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                        <!--begin:Menu link-->
                                        <a href="/../demo1/pages/social/feeds.html" class="menu-link ">
                                            <span class="menu-title">Feeds</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                        <!--begin:Menu link-->
                                        <a href="/../demo1/pages/social/activity.html" class="menu-link ">
                                            <span class="menu-title">Activty</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                        <!--begin:Menu link-->
                                        <a href="/../demo1/pages/social/followers.html" class="menu-link ">
                                            <span class="menu-title">Followers</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                        <!--begin:Menu link-->
                                        <a href="/../demo1/pages/social/settings.html" class="menu-link ">
                                            <span class="menu-title">Settings</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                                </div>
                            <!--end:Menu section-->
                        </div>
                        <!--end:Col-->
                    </div>
                    <!--end:Row-->
                </div>
                <!--end:Col-->

                <!--begin:Col-->
                <div class="col-lg-4">
                    <img src="/assets/media/stock/600x600/img-82.jpg" class="rounded mw-100" alt=""/>
                </div>
                <!--end:Col-->
            </div>
            <!--end:Row-->
        </div>
        <!--end:Tab pane-->

        <!--begin:Tab pane-->
        <div class="tab-pane  w-lg-600px" id="kt_app_header_menu_pages_account">
            <!--begin:Row-->
            <div class="row">
                <!--begin:Col-->
                <div class="col-lg-5 mb-6 mb-lg-0">
                    <!--begin:Row-->
                    <div class="row">
                        <!--begin:Col-->
                        <div class="col-lg-6">
                                                                                    <!--begin:Menu item-->
                                <div class="menu-item p-0 m-0">
                                    <!--begin:Menu link-->
                                    <a href="/../demo1/account/overview.html" class="menu-link ">
                                        <span class="menu-title">Overview</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                <div class="menu-item p-0 m-0">
                                    <!--begin:Menu link-->
                                    <a href="/../demo1/account/settings.html" class="menu-link ">
                                        <span class="menu-title">Settings</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                <div class="menu-item p-0 m-0">
                                    <!--begin:Menu link-->
                                    <a href="/../demo1/account/security.html" class="menu-link ">
                                        <span class="menu-title">Security</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                <div class="menu-item p-0 m-0">
                                    <!--begin:Menu link-->
                                    <a href="/../demo1/account/activity.html" class="menu-link ">
                                        <span class="menu-title">Activity</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                <div class="menu-item p-0 m-0">
                                    <!--begin:Menu link-->
                                    <a href="/../demo1/account/billing.html" class="menu-link ">
                                        <span class="menu-title">Billing</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                                                                                                        </div>
                        <!--end:Col-->

                        <!--begin:Col-->
                        <div class="col-lg-6">
                                                                                                                                                                                        <!--begin:Menu item-->
                                <div class="menu-item p-0 m-0">
                                    <!--begin:Menu link-->
                                    <a href="/../demo1/account/statements.html" class="menu-link ">
                                        <span class="menu-title">Statements</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                <div class="menu-item p-0 m-0">
                                    <!--begin:Menu link-->
                                    <a href="/../demo1/account/referrals.html" class="menu-link ">
                                        <span class="menu-title">Referrals</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                <div class="menu-item p-0 m-0">
                                    <!--begin:Menu link-->
                                    <a href="/../demo1/account/api-keys.html" class="menu-link ">
                                        <span class="menu-title">API Keys</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                <div class="menu-item p-0 m-0">
                                    <!--begin:Menu link-->
                                    <a href="/../demo1/account/logs.html" class="menu-link ">
                                        <span class="menu-title">Logs</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                        </div>
                        <!--end:Col-->
                    </div>
                    <!--end:Row-->
                </div>
                <!--end:Col-->

                <!--begin:Col-->
                <div class="col-lg-7">
                    <img src="/assets/media/stock/900x600/46.jpg" class="rounded mw-100" alt=""/>
                </div>
                <!--end:Col-->
            </div>
            <!--end:Row-->
        </div>
        <!--end:Tab pane-->

        <!--begin:Tab pane-->
        <div class="tab-pane  w-lg-1000px" id="kt_app_header_menu_pages_authentication">
            <!--begin:Row-->
            <div class="row">
                <!--begin:Col-->
                <div class="col-lg-3 mb-6 mb-lg-0">
                    <!--begin:Menu section-->
                    <div class="mb-6">
                        <!--begin:Menu heading-->
                        <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Corporate Layout</h4>
                        <!--end:Menu heading-->

                                        <!--begin:Menu item-->
                            <div class="menu-item p-0 m-0">
                                <!--begin:Menu link-->
                                <a href="/../demo1/authentication/layouts/corporate/sign-in.html" class="menu-link ">
                                    <span class="menu-title">Sign-In</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                                        <!--begin:Menu item-->
                            <div class="menu-item p-0 m-0">
                                <!--begin:Menu link-->
                                <a href="/../demo1/authentication/layouts/corporate/sign-up.html" class="menu-link ">
                                    <span class="menu-title">Sign-Up</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                                        <!--begin:Menu item-->
                            <div class="menu-item p-0 m-0">
                                <!--begin:Menu link-->
                                <a href="/../demo1/authentication/layouts/corporate/two-factor.html" class="menu-link ">
                                    <span class="menu-title">Two-Factor</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                                        <!--begin:Menu item-->
                            <div class="menu-item p-0 m-0">
                                <!--begin:Menu link-->
                                <a href="/../demo1/authentication/layouts/corporate/reset-password.html" class="menu-link ">
                                    <span class="menu-title">Reset Password</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                                        <!--begin:Menu item-->
                            <div class="menu-item p-0 m-0">
                                <!--begin:Menu link-->
                                <a href="/../demo1/authentication/layouts/corporate/new-password.html" class="menu-link ">
                                    <span class="menu-title">New Password</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                                </div>
                    <!--end:Menu section-->

                    <!--begin:Menu section-->
                    <div class="mb-0">
                        <!--begin:Menu heading-->
                        <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Overlay Layout</h4>
                        <!--end:Menu heading-->

                                        <!--begin:Menu item-->
                            <div class="menu-item p-0 m-0">
                                <!--begin:Menu link-->
                                <a href="/../demo1/authentication/layouts/overlay/sign-in.html" class="menu-link ">
                                    <span class="menu-title">Sign-In</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                                        <!--begin:Menu item-->
                            <div class="menu-item p-0 m-0">
                                <!--begin:Menu link-->
                                <a href="/../demo1/authentication/layouts/overlay/sign-up.html" class="menu-link ">
                                    <span class="menu-title">Sign-Up</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                                        <!--begin:Menu item-->
                            <div class="menu-item p-0 m-0">
                                <!--begin:Menu link-->
                                <a href="/../demo1/authentication/layouts/overlay/two-factor.html" class="menu-link ">
                                    <span class="menu-title">Two-Factor</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                                        <!--begin:Menu item-->
                            <div class="menu-item p-0 m-0">
                                <!--begin:Menu link-->
                                <a href="/../demo1/authentication/layouts/overlay/reset-password.html" class="menu-link ">
                                    <span class="menu-title">Reset Password</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                                        <!--begin:Menu item-->
                            <div class="menu-item p-0 m-0">
                                <!--begin:Menu link-->
                                <a href="/../demo1/authentication/layouts/overlay/new-password.html" class="menu-link ">
                                    <span class="menu-title">New Password</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                                </div>
                    <!--end:Menu section-->
                </div>
                <!--end:Col-->

                <!--begin:Col-->
                <div class="col-lg-3 mb-6 mb-lg-0">
                    <!--begin:Menu section-->
                    <div class="mb-6">
                        <!--begin:Menu heading-->
                        <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Creative Layout</h4>
                        <!--end:Menu heading-->

                                        <!--begin:Menu item-->
                            <div class="menu-item p-0 m-0">
                                <!--begin:Menu link-->
                                <a href="/../demo1/authentication/layouts/creative/sign-in.html" class="menu-link ">
                                    <span class="menu-title">Sign-in</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                                        <!--begin:Menu item-->
                            <div class="menu-item p-0 m-0">
                                <!--begin:Menu link-->
                                <a href="/../demo1/authentication/layouts/creative/sign-up.html" class="menu-link ">
                                    <span class="menu-title">Sign-up</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                                        <!--begin:Menu item-->
                            <div class="menu-item p-0 m-0">
                                <!--begin:Menu link-->
                                <a href="/../demo1/authentication/layouts/creative/two-factor.html" class="menu-link ">
                                    <span class="menu-title">Two-Factor</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                                        <!--begin:Menu item-->
                            <div class="menu-item p-0 m-0">
                                <!--begin:Menu link-->
                                <a href="/../demo1/authentication/layouts/creative/reset-password.html" class="menu-link ">
                                    <span class="menu-title">Reset Password</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                                        <!--begin:Menu item-->
                            <div class="menu-item p-0 m-0">
                                <!--begin:Menu link-->
                                <a href="/../demo1/authentication/layouts/creative/new-password.html" class="menu-link ">
                                    <span class="menu-title">New Password</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                                </div>
                    <!--end:Menu section-->

                    <!--begin:Menu section-->
                    <div class="mb-6">
                        <!--begin:Menu heading-->
                        <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Fancy Layout</h4>
                        <!--end:Menu heading-->

                                        <!--begin:Menu item-->
                            <div class="menu-item p-0 m-0">
                                <!--begin:Menu link-->
                                <a href="/../demo1/authentication/layouts/fancy/sign-in.html" class="menu-link ">
                                    <span class="menu-title">Sign-In</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                                        <!--begin:Menu item-->
                            <div class="menu-item p-0 m-0">
                                <!--begin:Menu link-->
                                <a href="/../demo1/authentication/layouts/fancy/sign-up.html" class="menu-link ">
                                    <span class="menu-title">Sign-Up</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                                        <!--begin:Menu item-->
                            <div class="menu-item p-0 m-0">
                                <!--begin:Menu link-->
                                <a href="/../demo1/authentication/layouts/fancy/two-factor.html" class="menu-link ">
                                    <span class="menu-title">Two-Factor</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                                        <!--begin:Menu item-->
                            <div class="menu-item p-0 m-0">
                                <!--begin:Menu link-->
                                <a href="/../demo1/authentication/layouts/fancy/reset-password.html" class="menu-link ">
                                    <span class="menu-title">Reset Password</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                                        <!--begin:Menu item-->
                            <div class="menu-item p-0 m-0">
                                <!--begin:Menu link-->
                                <a href="/../demo1/authentication/layouts/fancy/new-password.html" class="menu-link ">
                                    <span class="menu-title">New Password</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                                </div>
                    <!--end:Menu section-->
                </div>
                <!--end:Col-->

                <!--begin:Col-->
                <div class="col-lg-3 mb-6 mb-lg-0">
                    <!--begin:Menu section-->
                    <div class="mb-0">
                        <!--begin:Menu heading-->
                        <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">General</h4>
                        <!--end:Menu heading-->

                                        <!--begin:Menu item-->
                            <div class="menu-item p-0 m-0">
                                <!--begin:Menu link-->
                                <a href="/../demo1/authentication/extended/multi-steps-sign-up.html" class="menu-link ">
                                    <span class="menu-title">Multi-Steps Sign-Up</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                                        <!--begin:Menu item-->
                            <div class="menu-item p-0 m-0">
                                <!--begin:Menu link-->
                                <a href="/../demo1/authentication/general/welcome.html" class="menu-link ">
                                    <span class="menu-title">Welcome Message</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                                        <!--begin:Menu item-->
                            <div class="menu-item p-0 m-0">
                                <!--begin:Menu link-->
                                <a href="/../demo1/authentication/general/verify-email.html" class="menu-link ">
                                    <span class="menu-title">Verify Email</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                                        <!--begin:Menu item-->
                            <div class="menu-item p-0 m-0">
                                <!--begin:Menu link-->
                                <a href="/../demo1/authentication/general/coming-soon.html" class="menu-link ">
                                    <span class="menu-title">Coming Soon</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                                        <!--begin:Menu item-->
                            <div class="menu-item p-0 m-0">
                                <!--begin:Menu link-->
                                <a href="/../demo1/authentication/general/password-confirmation.html" class="menu-link ">
                                    <span class="menu-title">Password Confirmation</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                                        <!--begin:Menu item-->
                            <div class="menu-item p-0 m-0">
                                <!--begin:Menu link-->
                                <a href="/../demo1/authentication/general/account-deactivated.html" class="menu-link ">
                                    <span class="menu-title">Account Deactivation</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                                        <!--begin:Menu item-->
                            <div class="menu-item p-0 m-0">
                                <!--begin:Menu link-->
                                <a href="/../demo1/authentication/general/error-404.html" class="menu-link ">
                                    <span class="menu-title">Error 404</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                                        <!--begin:Menu item-->
                            <div class="menu-item p-0 m-0">
                                <!--begin:Menu link-->
                                <a href="/../demo1/authentication/general/error-500.html" class="menu-link ">
                                    <span class="menu-title">Error 500</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                                </div>
                    <!--end:Menu section-->
                </div>
                <!--end:Col-->

                <!--begin:Col-->
                <div class="col-lg-3 mb-6 mb-lg-0">
                    <!--begin:Menu section-->
                    <div class="mb-0">
                        <!--begin:Menu heading-->
                        <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Email Templates</h4>
                        <!--end:Menu heading-->

                                        <!--begin:Menu item-->
                            <div class="menu-item p-0 m-0">
                                <!--begin:Menu link-->
                                <a href="/../demo1/authentication/email/welcome-message.html" class="menu-link ">
                                    <span class="menu-title">Welcome Message</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                                        <!--begin:Menu item-->
                            <div class="menu-item p-0 m-0">
                                <!--begin:Menu link-->
                                <a href="/../demo1/authentication/email/reset-password.html" class="menu-link ">
                                    <span class="menu-title">Reset Password</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                                        <!--begin:Menu item-->
                            <div class="menu-item p-0 m-0">
                                <!--begin:Menu link-->
                                <a href="/../demo1/authentication/email/subscription-confirmed.html" class="menu-link ">
                                    <span class="menu-title">Subscription Confirmed</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                                        <!--begin:Menu item-->
                            <div class="menu-item p-0 m-0">
                                <!--begin:Menu link-->
                                <a href="/../demo1/authentication/email/card-declined.html" class="menu-link ">
                                    <span class="menu-title">Credit Card Declined</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                                        <!--begin:Menu item-->
                            <div class="menu-item p-0 m-0">
                                <!--begin:Menu link-->
                                <a href="/../demo1/authentication/email/promo-1.html" class="menu-link ">
                                    <span class="menu-title">Promo 1</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                                        <!--begin:Menu item-->
                            <div class="menu-item p-0 m-0">
                                <!--begin:Menu link-->
                                <a href="/../demo1/authentication/email/promo-2.html" class="menu-link ">
                                    <span class="menu-title">Promo 2</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                                        <!--begin:Menu item-->
                            <div class="menu-item p-0 m-0">
                                <!--begin:Menu link-->
                                <a href="/../demo1/authentication/email/promo-3.html" class="menu-link ">
                                    <span class="menu-title">Promo 3</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                                </div>
                    <!--end:Menu section-->
                </div>
                <!--end:Col-->
            </div>
            <!--end:Row-->
        </div>
        <!--end:Tab pane-->

        <!--begin:Tab pane-->
        <div class="tab-pane  w-lg-1000px" id="kt_app_header_menu_pages_utilities">
            <!--begin:Row-->
            <div class="row">
                <!--begin:Col-->
                <div class="col-lg-7">
                    <!--begin:Row-->
                    <div class="row">
                        <!--begin:Col-->
                        <div class="col-lg-4 mb-6 mb-lg-0">
                            <!--begin:Menu section-->
                            <div class="mb-0">
                                <!--begin:Menu heading-->
                                <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">General Modals</h4>
                                <!--end:Menu heading-->

                                                        <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                        <!--begin:Menu link-->
                                        <a href="/../demo1/utilities/modals/general/invite-friends.html" class="menu-link ">
                                            <span class="menu-title">Invite Friends</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                        <!--begin:Menu link-->
                                        <a href="/../demo1/utilities/modals/general/view-users.html" class="menu-link ">
                                            <span class="menu-title">View Users</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                        <!--begin:Menu link-->
                                        <a href="/../demo1/utilities/modals/general/select-users.html" class="menu-link ">
                                            <span class="menu-title">Select Users</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                        <!--begin:Menu link-->
                                        <a href="/../demo1/utilities/modals/general/upgrade-plan.html" class="menu-link ">
                                            <span class="menu-title">Upgrade Plan</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                        <!--begin:Menu link-->
                                        <a href="/../demo1/utilities/modals/general/share-earn.html" class="menu-link ">
                                            <span class="menu-title">Share & Earn</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                        <!--begin:Menu link-->
                                        <a href="/../demo1/utilities/modals/forms/new-target.html" class="menu-link ">
                                            <span class="menu-title">New Target</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                        <!--begin:Menu link-->
                                        <a href="/../demo1/utilities/modals/forms/new-card.html" class="menu-link ">
                                            <span class="menu-title">New Card</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                        <!--begin:Menu link-->
                                        <a href="/../demo1/utilities/modals/forms/new-address.html" class="menu-link ">
                                            <span class="menu-title">New Address</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                        <!--begin:Menu link-->
                                        <a href="/../demo1/utilities/modals/forms/create-api-key.html" class="menu-link ">
                                            <span class="menu-title">Create API Key</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                        <!--begin:Menu link-->
                                        <a href="/../demo1/utilities/modals/forms/bidding.html" class="menu-link ">
                                            <span class="menu-title">Bidding</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                                </div>
                            <!--end:Menu section-->
                        </div>
                        <!--end:Col-->

                        <!--begin:Col-->
                        <div class="col-lg-4 mb-6 mb-lg-0">
                            <!--begin:Menu section-->
                            <div class="mb-6">
                                <!--begin:Menu heading-->
                                <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Advanced Modals</h4>
                                <!--end:Menu heading-->

                                                        <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                        <!--begin:Menu link-->
                                        <a href="/../demo1/utilities/modals/wizards/create-app.html" class="menu-link ">
                                            <span class="menu-title">Create App</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                        <!--begin:Menu link-->
                                        <a href="/../demo1/utilities/modals/wizards/create-campaign.html" class="menu-link ">
                                            <span class="menu-title">Create Campaign</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                        <!--begin:Menu link-->
                                        <a href="/../demo1/utilities/modals/wizards/create-account.html" class="menu-link ">
                                            <span class="menu-title">Create Business Acc</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                        <!--begin:Menu link-->
                                        <a href="/../demo1/utilities/modals/wizards/create-project.html" class="menu-link ">
                                            <span class="menu-title">Create Project</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                        <!--begin:Menu link-->
                                        <a href="/../demo1/utilities/modals/wizards/top-up-wallet.html" class="menu-link ">
                                            <span class="menu-title">Top Up Wallet</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                        <!--begin:Menu link-->
                                        <a href="/../demo1/utilities/modals/wizards/offer-a-deal.html" class="menu-link ">
                                            <span class="menu-title">Offer a Deal</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                        <!--begin:Menu link-->
                                        <a href="/../demo1/utilities/modals/wizards/two-factor-authentication.html" class="menu-link ">
                                            <span class="menu-title">Two Factor Auth</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                                </div>
                            <!--end:Menu section-->

                            <!--begin:Menu section-->
                            <div class="mb-0">
                                <!--begin:Menu heading-->
                                <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Search</h4>
                                <!--end:Menu heading-->

                                                        <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                        <!--begin:Menu link-->
                                        <a href="/../demo1/utilities/search/horizontal.html" class="menu-link ">
                                            <span class="menu-title">Horizontal</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                        <!--begin:Menu link-->
                                        <a href="/../demo1/utilities/search/vertical.html" class="menu-link ">
                                            <span class="menu-title">Vertical</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                        <!--begin:Menu link-->
                                        <a href="/../demo1/utilities/modals/search/users.html" class="menu-link ">
                                            <span class="menu-title">Users</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                        <!--begin:Menu link-->
                                        <a href="/../demo1/utilities/modals/search/select-location.html" class="menu-link ">
                                            <span class="menu-title">Select Location</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                                </div>
                            <!--end:Menu section-->
                        </div>
                        <!--end:Col-->

                        <!--begin:Col-->
                        <div class="col-lg-4 mb-6 mb-lg-0">
                            <!--begin:Menu section-->
                            <div class="mb-0">
                                <!--begin:Menu heading-->
                                <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Wizards</h4>
                                <!--end:Menu heading-->

                                                        <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                        <!--begin:Menu link-->
                                        <a href="/../demo1/utilities/wizards/horizontal.html" class="menu-link ">
                                            <span class="menu-title">Horizontal</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                        <!--begin:Menu link-->
                                        <a href="/../demo1/utilities/wizards/vertical.html" class="menu-link ">
                                            <span class="menu-title">Vertical</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                        <!--begin:Menu link-->
                                        <a href="/../demo1/utilities/wizards/two-factor-authentication.html" class="menu-link ">
                                            <span class="menu-title">Two Factor Auth</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                        <!--begin:Menu link-->
                                        <a href="/../demo1/utilities/wizards/create-app.html" class="menu-link ">
                                            <span class="menu-title">Create App</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                        <!--begin:Menu link-->
                                        <a href="/../demo1/utilities/wizards/create-campaign.html" class="menu-link ">
                                            <span class="menu-title">Create Campaign</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                        <!--begin:Menu link-->
                                        <a href="/../demo1/utilities/wizards/create-account.html" class="menu-link ">
                                            <span class="menu-title">Create Account</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                        <!--begin:Menu link-->
                                        <a href="/../demo1/utilities/wizards/create-project.html" class="menu-link ">
                                            <span class="menu-title">Create Project</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                        <!--begin:Menu link-->
                                        <a href="/../demo1/utilities/modals/wizards/top-up-wallet.html" class="menu-link ">
                                            <span class="menu-title">Top Up Wallet</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                    <div class="menu-item p-0 m-0">
                                        <!--begin:Menu link-->
                                        <a href="/../demo1/utilities/wizards/offer-a-deal.html" class="menu-link ">
                                            <span class="menu-title">Offer a Deal</span>
                                        </a>
                                        <!--end:Menu link-->
                                    </div>
                                    <!--end:Menu item-->
                                                </div>
                            <!--end:Menu section-->
                        </div>
                        <!--end:Col-->
                    </div>
                    <!--end:Row-->
                </div>
                <!--end:Col-->

                <!--begin:Col-->
                <div class="col-lg-5 pe-lg-5">
                    <img src="/assets/media/stock/600x600/img-84.jpg" class="rounded mw-100" alt=""/>
                </div>
                <!--end:Col-->
            </div>
            <!--end:Row-->
        </div>
        <!--end:Tab pane-->

        <!--begin:Tab pane-->
        <div class="tab-pane  w-lg-500px" id="kt_app_header_menu_pages_widgets">
            <!--begin:Row-->
            <div class="row">
                <!--begin:Col-->
                <div class="col-lg-4 mb-6 mb-lg-0">
                                <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="/../demo1/widgets/lists.html" class="menu-link ">
                                <span class="menu-title">Lists</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="/../demo1/widgets/statistics.html" class="menu-link ">
                                <span class="menu-title">Statistics</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="/../demo1/widgets/charts.html" class="menu-link ">
                                <span class="menu-title">Charts</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="/../demo1/widgets/mixed.html" class="menu-link ">
                                <span class="menu-title">Mixed</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="/../demo1/widgets/tables.html" class="menu-link ">
                                <span class="menu-title">Tables</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="/../demo1/widgets/feeds.html" class="menu-link ">
                                <span class="menu-title">Feeds</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                        </div>
                <!--end:Col-->

                <!--begin:Col-->
                <div class="col-lg-8">
                    <img src="/assets/media/stock/900x600/44.jpg" class="rounded mw-100" alt=""/>
                </div>
                <!--end:Col-->
            </div>
            <!--end:Row-->
        </div>
        <!--end:Tab pane-->
    </div>
    <!--end:Tab content-->
</div>
