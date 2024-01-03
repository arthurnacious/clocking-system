<!DOCTYPE html>
<html lang="en" >
   <!--begin::Head-->
   <head>

    <title>{{ config('app.name', 'Laravel') }}</title>
        <meta charset="utf-8"/>
        <meta name="description" content="Authentication"/>
        <meta name="keywords" content=""/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="Metronic - The World's #1 Selling Bootstrap Admin Template - Metronic by KeenThemes" />
        <meta property="og:url" content="https://keenthemes.com/metronic"/>
        <meta property="og:site_name" content="Metronic by Keenthemes" />
        <link rel="canonical" href="https://preview.keenthemes.com/metronic8"/>
        <link rel="shortcut icon" href="/assets/media/logos/favicon.ico"/>
        <!--begin::Fonts(mandatory for all pages)-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700"/>
        <!--end::Fonts-->
        <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
        <link href="/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css"/>
        <link href="/assets/css/style.bundle.css" rel="stylesheet" type="text/css"/>


        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

      <!--end::Global Stylesheets Bundle-->
      <!--begin::Google tag-->
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-37564768-1"></script>
      {{-- <script>
         window.dataLayer = window.dataLayer || [];
         function gtag(){dataLayer.push(arguments);}
         gtag('js', new Date());
         gtag('config', 'UA-37564768-1');
      </script> --}}
      <!--end::Google tag-->
      <script>
         // Frame-busting to prevent site from being loaded within a frame without permission (click-jacking)
         if (window.top != window.self) {
             window.top.location.replace(window.self.location.href);
         }
      </script>
   </head>
   <!--end::Head-->
   <!--begin::Body-->
   <body  id="kt_body"  class="app-blank bgi-size-cover bgi-attachment-fixed bgi-position-center bgi-no-repeat" >
      <!--begin::Theme mode setup on page load-->
      <script>
         var defaultThemeMode = "light";
         var themeMode;

         if ( document.documentElement ) {
         	if ( document.documentElement.hasAttribute("data-bs-theme-mode")) {
         		themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
         	} else {
         		if ( localStorage.getItem("data-bs-theme") !== null ) {
         			themeMode = localStorage.getItem("data-bs-theme");
         		} else {
         			themeMode = defaultThemeMode;
         		}
         	}

         	if (themeMode === "system") {
         		themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
         	}

         	document.documentElement.setAttribute("data-bs-theme", themeMode);
         }
      </script>
      <!--end::Theme mode setup on page load-->
     <!--begin::Root-->
      <div class="d-flex flex-column flex-root" id="kt_app_root">
         <!--begin::Page bg image-->
         <style>
            body {
            background-image: url('/assets/media/auth/bg4.jpg');
            }
            [data-bs-theme="dark"] body {
            background-image: url('/assets/media/auth/bg4-dark.jpg');
            }
         </style>
         <!--end::Page bg image-->
         <!--begin::Authentication - Sign-in -->
         <div class="d-flex flex-column flex-column-fluid flex-lg-row">
            <!--begin::Aside-->
            <div class="d-flex flex-center w-lg-50 pt-15 pt-lg-0 px-10">
               <!--begin::Aside-->
               <div class="d-flex flex-center flex-lg-start flex-column">
                  <!--begin::Logo-->
                  <a href="/../demo1/index.html" class="mb-7">
                  <img alt="Logo" src="/assets/media/logos/custom-3.svg"/>
                  </a>
                  <!--end::Logo-->
                  <!--begin::Title-->
                  <h2 class="text-white fw-normal m-0">
                     Branding tools designed for your business
                  </h2>
                  <!--end::Title-->
               </div>
               <!--begin::Aside-->
            </div>
            <!--begin::Aside-->
            <!--begin::Body-->
            <div class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-end p-12 p-lg-20">
               <!--begin::Card-->
               <div class="bg-body d-flex flex-column align-items-stretch flex-center rounded-4 w-md-600px p-20">

                  {{$slot}}
                  <!--end::Wrapper-->
                  <!--begin::Footer-->
                    <div class="d-flex flex-stack px-lg-10">
                        <!--begin::Languages-->
                        <div class="me-0">
                            <!--begin::Toggle-->
                            <button class="btn btn-flex btn-link btn-color-gray-700 btn-active-color-primary rotate fs-base" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" data-kt-menu-offset="0px, 0px">
                                <img  data-kt-element="current-lang-flag" class="w-20px h-20px rounded me-3" src="/assets/media/flags/united-states.svg" alt=""/>
                                <span data-kt-element="current-lang-name" class="me-1">English</span>
                                <i class="ki-duotone ki-down fs-5 text-muted rotate-180 m-0"></i>
                            </button>
                            <!--end::Toggle-->
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-4 fs-7" data-kt-menu="true" id="kt_auth_lang_menu">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link d-flex px-5" data-kt-lang="English">
                                <span class="symbol symbol-20px me-4">
                                <img data-kt-element="lang-flag" class="rounded-1" src="/assets/media/flags/united-states.svg" alt=""/>
                                </span>
                                <span data-kt-element="lang-name">English</span>
                                </a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link d-flex px-5" data-kt-lang="Spanish">
                                <span class="symbol symbol-20px me-4">
                                <img data-kt-element="lang-flag" class="rounded-1" src="/assets/media/flags/spain.svg" alt=""/>
                                </span>
                                <span data-kt-element="lang-name">Spanish</span>
                                </a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link d-flex px-5" data-kt-lang="German">
                                <span class="symbol symbol-20px me-4">
                                <img data-kt-element="lang-flag" class="rounded-1" src="/assets/media/flags/germany.svg" alt=""/>
                                </span>
                                <span data-kt-element="lang-name">German</span>
                                </a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link d-flex px-5" data-kt-lang="Japanese">
                                <span class="symbol symbol-20px me-4">
                                <img data-kt-element="lang-flag" class="rounded-1" src="/assets/media/flags/japan.svg" alt=""/>
                                </span>
                                <span data-kt-element="lang-name">Japanese</span>
                                </a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link d-flex px-5" data-kt-lang="French">
                                <span class="symbol symbol-20px me-4">
                                <img data-kt-element="lang-flag" class="rounded-1" src="/assets/media/flags/france.svg" alt=""/>
                                </span>
                                <span data-kt-element="lang-name">French</span>
                                </a>
                            </div>
                            <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </div>
                        <!--end::Languages-->
                        <!--begin::Links-->
                        <div class="d-flex fw-semibold text-primary fs-base gap-5">
                            <a href="/../demo1/pages/team.html" target="_blank">Terms</a>
                            <a href="/../demo1/pages/pricing/column.html" target="_blank">Plans</a>
                            <a href="/../demo1/pages/contact.html" target="_blank">Contact Us</a>
                        </div>
                        <!--end::Links-->
                    </div>
                    <!--end::Footer-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Body-->
         </div>
         <!--end::Authentication - Sign-in-->
      </div>
      <!--end::Root-->
      <!--begin::Javascript-->
      <script>
         var hostUrl = "/assets/";
      </script>
      <!--begin::Global Javascript Bundle(mandatory for all pages)-->
      <script src="/assets/plugins/global/plugins.bundle.js"></script>
      <script src="/assets/js/scripts.bundle.js"></script>
      <!--end::Global Javascript Bundle-->
      <!--end::Javascript-->
   </body>
   <!--end::Body-->
</html>
