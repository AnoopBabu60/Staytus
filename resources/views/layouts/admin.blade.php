<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<link rel="icon" href="{{ asset('admin/media/logos/favicon.ico') }}" type="image/ico" />
		<title>@yield('title')</title>
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Vendors Styles(used by this page)-->
		<link href="{{ asset('admin/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('admin/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('admin/plugins/custom/prismjs/prismjs.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('admin/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
		<!-- <link href="{{ asset('admin/css/themes/layout/header/base/light.css') }}" rel="stylesheet" type="text/css" /> -->
		<!-- <link href="{{ asset('admin/css/themes/layout/header/menu/light.css') }}" rel="stylesheet" type="text/css" /> -->
		<!-- <link href="{{ asset('admin/css/themes/layout/brand/dark.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('admin/css/themes/layout/aside/dark.css') }}" rel="stylesheet" type="text/css" /> -->



        <style>

        </style>
    </head>

   



    <body id="kt_body" class="header-mobile-fixed subheader-enabled aside-enabled aside-fixed aside-secondary-enabled page-loading kt-primary--minimize aside-minimize">


        <!--begin::Main-->
        <!--begin::Header Mobile-->
        <div id="kt_header_mobile" class="header-mobile">
            <!--begin::Logo-->
            <a href="index.html">
                <img alt="Logo" src="assets/media/logos/logo-letter-2.png" class="logo-default max-h-30px" />
            </a>
            <!--end::Logo-->
            <!--begin::Toolbar-->
            <div class="d-flex align-items-center">
                <button class="btn p-0 burger-icon burger-icon-left" id="kt_aside_mobile_toggle">
                    <span></span>
                </button>
            </div>
            <!--end::Toolbar-->
        </div>
        <!--end::Header Mobile-->
        <div class="d-flex flex-column flex-root">
            <!--begin::Page-->
            <div class="d-flex flex-row flex-column-fluid page">
                <!--begin::Aside-->
                <div class="aside aside-left d-flex aside-fixed" id="kt_aside">


                    <!--begin::Primary-->
                    <div class="aside-primary d-flex flex-column align-items-center flex-row-auto">
                        <!--begin::Brand-->
                        <div class="aside-brand d-flex flex-column align-items-center flex-column-auto py-5 py-lg-12">
                            <!--begin::Logo-->
                            <!-- <a href="index.html">
                                <img alt="Logo" src="assets/media/logos/logo-letter-2.png" class="max-h-30px" />
                            </a> -->
                            <!--end::Logo-->
                        </div>
                        <!--end::Brand-->
                        <!--begin::Nav Wrapper-->
                        <div class="aside-nav d-flex flex-column align-items-center flex-column-fluid py-5 scroll scroll-pull">
                            <!--begin::Nav-->
                            <ul class="nav flex-column" role="tablist">
                                <!--begin::Item-->
                                <li class="nav-item mb-3" data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window" title="Menu Item Category">
                                    <a href="{{ url('/menu-item-category') }}" class="nav-link btn btn-icon btn-clean btn-lg"  role="tab">
                                        <span class="svg-icon svg-icon-xl">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24" />
                                                    <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
                                                    <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </a>
                                </li>
                             
                                <li class="nav-item mb-3" data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window" title="Menu Items">
                                    <a href="{{ url('/menu-item') }}" class="nav-link btn btn-icon btn-clean btn-lg"  role="tab">
                                        <span class="svg-icon svg-icon-xl">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24" />
                                                    <rect fill="#000000" opacity="0.3" x="13" y="4" width="3" height="16" rx="1.5" />
                                                    <rect fill="#000000" x="8" y="9" width="3" height="11" rx="1.5" />
                                                    <rect fill="#000000" x="18" y="11" width="3" height="9" rx="1.5" />
                                                    <rect fill="#000000" x="3" y="13" width="3" height="7" rx="1.5" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </a>
                                </li>
                             
                                <li class="nav-item mb-3" data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window" title="Menu">
                                    <a href="{{ url('/menu') }}" class="nav-link btn btn-icon btn-clean btn-lg"  role="tab">
                                        <span class="svg-icon svg-icon-xl">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24" />
                                                    <path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="#000000" />
                                                    <rect fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)" x="16.3255682" y="2.94551858" width="3" height="18" rx="1" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </a>
                                </li>
                              
                            </ul>
                            <!--end::Nav-->
                        </div>
                        <!--end::Nav Wrapper-->
                        <!--begin::Footer-->
                        <div class="aside-footer d-flex flex-column align-items-center flex-column-auto py-4 py-lg-10">
                            <!--begin::Aside Toggle-->
                            <!-- <span class="aside-toggle btn btn-icon btn-primary btn-hover-primary shadow-sm" id="kt_aside_toggle" data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window" title="Toggle Aside">
                                <i class="ki ki-bold-arrow-back icon-sm"></i>
                            </span> -->
                            <!--end::Aside Toggle-->
                            <!--begin::Quick Actions-->
                          
                            <!--end::Quick Actions-->
                            <!--begin::Quick Panel-->
                          
                            <!--end::Quick Panel-->
                            <!--begin::User-->
                            <a href="#" class="btn btn-icon btn-clean btn-lg w-40px h-40px" id="kt_quick_user_toggle" data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window" title="User Profile">
                                <span class="symbol symbol-30 symbol-lg-40">
                                    <span class="svg-icon svg-icon-xl">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span>
                                    <!--<span class="symbol-label font-size-h5 font-weight-bold">S</span>-->
                                </span>
                            </a>
                            <!--end::User-->
                        </div>
                        <!--end::Footer-->
                    </div>
                    <!--end::Primary-->
                    <!--begin::Secondary-->
                   
                    <!--end::Secondary-->
                </div>
                <!--end::Aside-->
                <!--begin::Wrapper-->
                <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                        <div class="subheader py-3 py-lg-8 subheader-transparent" id="kt_subheader">
                            <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                                <div class="d-flex align-items-center flex-wrap mr-1">

                                    <div class="d-flex align-items-baseline flex-wrap mr-5">
                                        <!--begin::Page Title-->
                                        <h2 class="subheader-title text-dark font-weight-bold my-1 mr-3">@yield('title')</h2>
                                        <!--end::Page Title-->
                                        <!--begin::Breadcrumb-->
                                        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold my-2 p-0">
                                           <!--  <li class="breadcrumb-item">
                                                <a href="" class="text-muted">KTDatatable</a>
                                            </li>
                                            <li class="breadcrumb-item">
                                                <a href="" class="text-muted">Base</a>
                                            </li>
                                            <li class="breadcrumb-item">
                                                <a href="" class="text-muted">HTML Table</a>
                                            </li> -->
                                        </ul>
                                        <!--end::Breadcrumb-->
                                    </div>


                                    
                                </div>    
                            </div>
                        </div>

                        @yield('content')
                        
                    </div>
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Page-->
        </div>
        <!--end::Main-->
        <!--begin::Quick Actions Panel-->
       
        <!--end::Quick Actions Panel-->
        <!-- begin::User Panel-->
        <div id="kt_quick_user" class="offcanvas offcanvas-left p-10">
            <!--begin::Header-->
            <div class="offcanvas-header d-flex align-items-center justify-content-between pb-5">
                <h3 class="font-weight-bold m-0">User Profile
                <small class="text-muted font-size-sm ml-2">0 messages</small></h3>
                <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_user_close">
                    <i class="ki ki-close icon-xs text-muted"></i>
                </a>
            </div>
            <!--end::Header-->
            <!--begin::Content-->
            <div class="offcanvas-content pr-5 mr-n5">
                <!--begin::Header-->
                <div class="d-flex align-items-center mt-5">
                    <div class="symbol symbol-100 mr-5">
                        <div class="symbol-label" style="background-image:url('assets/media/users/300_21.jpg')"></div>
                        <i class="symbol-badge bg-success"></i>
                    </div>
                    <div class="d-flex flex-column">
                        <a href="#" class="font-weight-bold font-size-h5 text-dark-75 text-hover-primary">Admin</a>
                        <div class="text-muted mt-1">Administrtaor</div>
                        <div class="navi mt-2">
                            <a href="#" class="navi-item">
                                <span class="navi-link p-0 pb-2">
                                    <span class="navi-icon mr-1">
                                        <span class="svg-icon svg-icon-lg svg-icon-primary">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-notification.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24" />
                                                    <path d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z" fill="#000000" />
                                                    <circle fill="#000000" opacity="0.3" cx="19.5" cy="17.5" r="2.5" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </span>
                                    <span class="navi-text text-muted text-hover-primary">admin@staytus.com</span>
                                </span>
                            </a>
                            <a href="{{ route('logout') }}" class="btn btn-sm btn-light-primary font-weight-bolder py-2 px-5">Sign Out</a>
                        </div>
                    </div>
                </div>
                <!--end::Header-->
                <!--begin::Separator-->
                <div class="separator separator-dashed mt-8 mb-5"></div>
                <!--end::Separator-->
                <!--begin::Nav-->
               
                <!--end::Nav-->
                <!--begin::Separator-->
                <div class="separator separator-dashed my-7"></div>
                <!--end::Separator-->
                <!--begin::Notifications-->
                
                <!--end::Notifications-->
            </div>
            <!--end::Content-->
        </div>
        <!-- end::User Panel-->
        <!--begin::Quick Panel-->
        
        <!--end::Quick Panel-->
        <!--begin::Chat Panel-->
        <div class="modal modal-sticky modal-sticky-bottom-right" id="kt_chat_modal" role="dialog" data-backdrop="false">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <!--begin::Card-->
                    <div class="card card-custom">
                        <!--begin::Header-->
                       
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body">
                            <!--begin::Scroll-->
                            <div class="scroll scroll-pull" data-height="375" data-mobile-height="300">
                                <!--begin::Messages-->
                                <div class="messages">
                                    <!--begin::Message In-->
                                    <div class="d-flex flex-column mb-5 align-items-start">
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-circle symbol-40 mr-3">
                                                <img alt="Pic" src="assets/media/users/300_12.jpg" />
                                            </div>
                                            <div>
                                                <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt Pears</a>
                                                <span class="text-muted font-size-sm">2 Hours</span>
                                            </div>
                                        </div>
                                        <div class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">How likely are you to recommend our company to your friends and family?</div>
                                    </div>
                                    <!--end::Message In-->
                                    <!--begin::Message Out-->
                                    <div class="d-flex flex-column mb-5 align-items-end">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <span class="text-muted font-size-sm">3 minutes</span>
                                                <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
                                            </div>
                                            <div class="symbol symbol-circle symbol-40 ml-3">
                                                <img alt="Pic" src="assets/media/users/300_21.jpg" />
                                            </div>
                                        </div>
                                        <div class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">Hey there, we’re just writing to let you know that you’ve been subscribed to a repository on GitHub.</div>
                                    </div>
                                    <!--end::Message Out-->
                                    <!--begin::Message In-->
                                    <div class="d-flex flex-column mb-5 align-items-start">
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-circle symbol-40 mr-3">
                                                <img alt="Pic" src="assets/media/users/300_21.jpg" />
                                            </div>
                                            <div>
                                                <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt Pears</a>
                                                <span class="text-muted font-size-sm">40 seconds</span>
                                            </div>
                                        </div>
                                        <div class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">Ok, Understood!</div>
                                    </div>
                                    <!--end::Message In-->
                                    <!--begin::Message Out-->
                                    <div class="d-flex flex-column mb-5 align-items-end">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <span class="text-muted font-size-sm">Just now</span>
                                                <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
                                            </div>
                                            <div class="symbol symbol-circle symbol-40 ml-3">
                                                <img alt="Pic" src="assets/media/users/300_21.jpg" />
                                            </div>
                                        </div>
                                        <div class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">You’ll receive notifications for all issues, pull requests!</div>
                                    </div>
                                    <!--end::Message Out-->
                                    <!--begin::Message In-->
                                    <div class="d-flex flex-column mb-5 align-items-start">
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-circle symbol-40 mr-3">
                                                <img alt="Pic" src="assets/media/users/300_12.jpg" />
                                            </div>
                                            <div>
                                                <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt Pears</a>
                                                <span class="text-muted font-size-sm">40 seconds</span>
                                            </div>
                                        </div>
                                        <div class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">You can unwatch this repository immediately by clicking here:
                                        <a href="#">https://github.com</a></div>
                                    </div>
                                    <!--end::Message In-->
                                    <!--begin::Message Out-->
                                    <div class="d-flex flex-column mb-5 align-items-end">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <span class="text-muted font-size-sm">Just now</span>
                                                <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
                                            </div>
                                            <div class="symbol symbol-circle symbol-40 ml-3">
                                                <img alt="Pic" src="assets/media/users/300_21.jpg" />
                                            </div>
                                        </div>
                                        <div class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">Discover what students who viewed Learn Figma - UI/UX Design. Essential Training also viewed</div>
                                    </div>
                                    <!--end::Message Out-->
                                    <!--begin::Message In-->
                                    <div class="d-flex flex-column mb-5 align-items-start">
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-circle symbol-40 mr-3">
                                                <img alt="Pic" src="assets/media/users/300_12.jpg" />
                                            </div>
                                            <div>
                                                <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt Pears</a>
                                                <span class="text-muted font-size-sm">40 seconds</span>
                                            </div>
                                        </div>
                                        <div class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">Most purchased Business courses during this sale!</div>
                                    </div>
                                    <!--end::Message In-->
                                    <!--begin::Message Out-->
                                    <div class="d-flex flex-column mb-5 align-items-end">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <span class="text-muted font-size-sm">Just now</span>
                                                <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
                                            </div>
                                            <div class="symbol symbol-circle symbol-40 ml-3">
                                                <img alt="Pic" src="assets/media/users/300_21.jpg" />
                                            </div>
                                        </div>
                                        <div class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">Company BBQ to celebrate the last quater achievements and goals. Food and drinks provided</div>
                                    </div>
                                    <!--end::Message Out-->
                                </div>
                                <!--end::Messages-->
                            </div>
                            <!--end::Scroll-->
                        </div>
                        <!--end::Body-->
                        <!--begin::Footer-->
                        <div class="card-footer align-items-center">
                            <!--begin::Compose-->
                            <textarea class="form-control border-0 p-0" rows="2" placeholder="Type a message"></textarea>
                            <div class="d-flex align-items-center justify-content-between mt-5">
                                <div class="mr-3">
                                    <a href="#" class="btn btn-clean btn-icon btn-md mr-1">
                                        <i class="flaticon2-photograph icon-lg"></i>
                                    </a>
                                    <a href="#" class="btn btn-clean btn-icon btn-md">
                                        <i class="flaticon2-photo-camera icon-lg"></i>
                                    </a>
                                </div>
                                <div>
                                    <button type="button" class="btn btn-primary btn-md text-uppercase font-weight-bold chat-send py-2 px-6">Send</button>
                                </div>
                            </div>
                            <!--begin::Compose-->
                        </div>
                        <!--end::Footer-->
                    </div>
                    <!--end::Card-->
                </div>
            </div>
        </div>
        <!--end::Chat Panel-->
        <!--begin::Scrolltop-->
        <div id="kt_scrolltop" class="scrolltop">
            <span class="svg-icon">
                <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Up-2.svg-->
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <polygon points="0 0 24 0 24 24 0 24" />
                        <rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1" />
                        <path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero" />
                    </g>
                </svg>
                <!--end::Svg Icon-->
            </span>
        </div>
        <!--end::Scrolltop-->
        <!--begin::Sticky Toolbar-->
        
        <!--end::Sticky Toolbar-->
        <!--begin::Demo Panel-->
        <div id="kt_demo_panel" class="offcanvas offcanvas-right p-10">
            <!--begin::Header-->
            <div class="offcanvas-header d-flex align-items-center justify-content-between pb-7">
                <h4 class="font-weight-bold m-0">Select A Demo</h4>
                <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_demo_panel_close">
                    <i class="ki ki-close icon-xs text-muted"></i>
                </a>
            </div>
            <!--end::Header-->
            <!--begin::Content-->
            <div class="offcanvas-content">
                <!--begin::Wrapper-->
                <div class="offcanvas-wrapper mb-5 scroll-pull">
                    <h5 class="font-weight-bold mb-4 text-center">Demo 1</h5>
                    <div class="overlay rounded-lg mb-8 offcanvas-demo">
                        <div class="overlay-wrapper rounded-lg">
                            <img src="assets/media/demos/demo1.png" alt="" class="w-100" />
                        </div>
                        <div class="overlay-layer">
                            <a href="../theme/html/demo1/dist" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">Default</a>
                            <a href="https://preview.keenthemes.com/metronic/demo1/rtl/index.html" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">RTL Version</a>
                        </div>
                    </div>
                    <h5 class="font-weight-bold mb-4 text-center">Demo 2</h5>
                    <div class="overlay rounded-lg mb-8 offcanvas-demo">
                        <div class="overlay-wrapper rounded-lg">
                            <img src="assets/media/demos/demo2.png" alt="" class="w-100" />
                        </div>
                        <div class="overlay-layer">
                            <a href="../theme/html/demo2/dist" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">Default</a>
                            <a href="https://preview.keenthemes.com/metronic/demo2/rtl/index.html" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">RTL Version</a>
                        </div>
                    </div>
                    <h5 class="font-weight-bold mb-4 text-center">Demo 3</h5>
                    <div class="overlay rounded-lg mb-8 offcanvas-demo offcanvas-demo-active">
                        <div class="overlay-wrapper rounded-lg">
                            <img src="assets/media/demos/demo3.png" alt="" class="w-100" />
                        </div>
                        <div class="overlay-layer">
                            <a href="../theme/html/demo3/dist" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">Default</a>
                            <a href="https://preview.keenthemes.com/metronic/demo3/rtl/index.html" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">RTL Version</a>
                        </div>
                    </div>
                    <h5 class="font-weight-bold mb-4 text-center">Demo 4</h5>
                    <div class="overlay rounded-lg mb-8 offcanvas-demo">
                        <div class="overlay-wrapper rounded-lg">
                            <img src="assets/media/demos/demo4.png" alt="" class="w-100" />
                        </div>
                        <div class="overlay-layer">
                            <a href="../theme/html/demo4/dist" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">Default</a>
                            <a href="https://preview.keenthemes.com/metronic/demo4/rtl/index.html" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">RTL Version</a>
                        </div>
                    </div>
                    <h5 class="font-weight-bold mb-4 text-center">Demo 5</h5>
                    <div class="overlay rounded-lg mb-8 offcanvas-demo">
                        <div class="overlay-wrapper rounded-lg">
                            <img src="assets/media/demos/demo5.png" alt="" class="w-100" />
                        </div>
                        <div class="overlay-layer">
                            <a href="../theme/html/demo5/dist" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">Default</a>
                            <a href="https://preview.keenthemes.com/metronic/demo5/rtl/index.html" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">RTL Version</a>
                        </div>
                    </div>
                    <h5 class="font-weight-bold mb-4 text-center">Demo 6</h5>
                    <div class="overlay rounded-lg mb-8 offcanvas-demo">
                        <div class="overlay-wrapper rounded-lg">
                            <img src="assets/media/demos/demo6.png" alt="" class="w-100" />
                        </div>
                        <div class="overlay-layer">
                            <a href="../theme/html/demo6/dist" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">Default</a>
                            <a href="https://preview.keenthemes.com/metronic/demo6/rtl/index.html" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">RTL Version</a>
                        </div>
                    </div>
                    <h5 class="font-weight-bold mb-4 text-center">Demo 7</h5>
                    <div class="overlay rounded-lg mb-8 offcanvas-demo">
                        <div class="overlay-wrapper rounded-lg">
                            <img src="assets/media/demos/demo7.png" alt="" class="w-100" />
                        </div>
                        <div class="overlay-layer">
                            <a href="../theme/html/demo7/dist" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">Default</a>
                            <a href="https://preview.keenthemes.com/metronic/demo7/rtl/index.html" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">RTL Version</a>
                        </div>
                    </div>
                    <h5 class="font-weight-bold mb-4 text-center">Demo 8</h5>
                    <div class="overlay rounded-lg mb-8 offcanvas-demo">
                        <div class="overlay-wrapper rounded-lg">
                            <img src="assets/media/demos/demo8.png" alt="" class="w-100" />
                        </div>
                        <div class="overlay-layer">
                            <a href="../theme/html/demo8/dist" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">Default</a>
                            <a href="https://preview.keenthemes.com/metronic/demo8/rtl/index.html" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">RTL Version</a>
                        </div>
                    </div>
                    <h5 class="font-weight-bold mb-4 text-center">Demo 9</h5>
                    <div class="overlay rounded-lg mb-8 offcanvas-demo">
                        <div class="overlay-wrapper rounded-lg">
                            <img src="assets/media/demos/demo9.png" alt="" class="w-100" />
                        </div>
                        <div class="overlay-layer">
                            <a href="../theme/html/demo9/dist" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">Default</a>
                            <a href="https://preview.keenthemes.com/metronic/demo9/rtl/index.html" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">RTL Version</a>
                        </div>
                    </div>
                    <h5 class="font-weight-bold mb-4 text-center">Demo 10</h5>
                    <div class="overlay rounded-lg mb-8 offcanvas-demo">
                        <div class="overlay-wrapper rounded-lg">
                            <img src="assets/media/demos/demo10.png" alt="" class="w-100" />
                        </div>
                        <div class="overlay-layer">
                            <a href="../theme/html/demo10/dist" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">Default</a>
                            <a href="https://preview.keenthemes.com/metronic/demo10/rtl/index.html" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">RTL Version</a>
                        </div>
                    </div>
                    <h5 class="font-weight-bold mb-4 text-center">Demo 11</h5>
                    <div class="overlay rounded-lg mb-8 offcanvas-demo">
                        <div class="overlay-wrapper rounded-lg">
                            <img src="assets/media/demos/demo11.png" alt="" class="w-100" />
                        </div>
                        <div class="overlay-layer">
                            <a href="../theme/html/demo11/dist" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">Default</a>
                            <a href="https://preview.keenthemes.com/metronic/demo11/rtl/index.html" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">RTL Version</a>
                        </div>
                    </div>
                    <h5 class="font-weight-bold mb-4 text-center">Demo 12</h5>
                    <div class="overlay rounded-lg mb-8 offcanvas-demo">
                        <div class="overlay-wrapper rounded-lg">
                            <img src="assets/media/demos/demo12.png" alt="" class="w-100" />
                        </div>
                        <div class="overlay-layer">
                            <a href="../theme/html/demo12/dist" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">Default</a>
                            <a href="https://preview.keenthemes.com/metronic/demo12/rtl/index.html" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">RTL Version</a>
                        </div>
                    </div>
                    <h5 class="font-weight-bold mb-4 text-center">Demo 13</h5>
                    <div class="overlay rounded-lg mb-8 offcanvas-demo">
                        <div class="overlay-wrapper rounded-lg">
                            <img src="assets/media/demos/demo13.png" alt="" class="w-100" />
                        </div>
                        <div class="overlay-layer">
                            <a href="../theme/html/demo13/dist" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">Default</a>
                            <a href="https://preview.keenthemes.com/metronic/demo13/rtl/index.html" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow" target="_blank">RTL Version</a>
                        </div>
                    </div>
                    <h5 class="font-weight-bold mb-4 text-center">Demo 14</h5>
                    <div class="overlay rounded-lg mb-8 offcanvas-demo">
                        <div class="overlay-wrapper rounded-lg">
                            <img src="assets/media/demos/demo14.png" alt="" class="w-100" />
                        </div>
                        <div class="overlay-layer">
                            <a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
                        </div>
                    </div>
                    <h5 class="font-weight-bold mb-4 text-center">Demo 15</h5>
                    <div class="overlay rounded-lg mb-8 offcanvas-demo">
                        <div class="overlay-wrapper rounded-lg">
                            <img src="assets/media/demos/demo15.png" alt="" class="w-100" />
                        </div>
                        <div class="overlay-layer">
                            <a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
                        </div>
                    </div>
                    <h5 class="font-weight-bold mb-4 text-center">Demo 16</h5>
                    <div class="overlay rounded-lg mb-8 offcanvas-demo">
                        <div class="overlay-wrapper rounded-lg">
                            <img src="assets/media/demos/demo16.png" alt="" class="w-100" />
                        </div>
                        <div class="overlay-layer">
                            <a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
                        </div>
                    </div>
                    <h5 class="font-weight-bold mb-4 text-center">Demo 17</h5>
                    <div class="overlay rounded-lg mb-8 offcanvas-demo">
                        <div class="overlay-wrapper rounded-lg">
                            <img src="assets/media/demos/demo17.png" alt="" class="w-100" />
                        </div>
                        <div class="overlay-layer">
                            <a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
                        </div>
                    </div>
                    <h5 class="font-weight-bold mb-4 text-center">Demo 18</h5>
                    <div class="overlay rounded-lg mb-8 offcanvas-demo">
                        <div class="overlay-wrapper rounded-lg">
                            <img src="assets/media/demos/demo18.png" alt="" class="w-100" />
                        </div>
                        <div class="overlay-layer">
                            <a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
                        </div>
                    </div>
                    <h5 class="font-weight-bold mb-4 text-center">Demo 19</h5>
                    <div class="overlay rounded-lg mb-8 offcanvas-demo">
                        <div class="overlay-wrapper rounded-lg">
                            <img src="assets/media/demos/demo19.png" alt="" class="w-100" />
                        </div>
                        <div class="overlay-layer">
                            <a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
                        </div>
                    </div>
                    <h5 class="font-weight-bold mb-4 text-center">Demo 20</h5>
                    <div class="overlay rounded-lg mb-8 offcanvas-demo">
                        <div class="overlay-wrapper rounded-lg">
                            <img src="assets/media/demos/demo20.png" alt="" class="w-100" />
                        </div>
                        <div class="overlay-layer">
                            <a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
                        </div>
                    </div>
                    <h5 class="font-weight-bold mb-4 text-center">Demo 21</h5>
                    <div class="overlay rounded-lg mb-8 offcanvas-demo">
                        <div class="overlay-wrapper rounded-lg">
                            <img src="assets/media/demos/demo21.png" alt="" class="w-100" />
                        </div>
                        <div class="overlay-layer">
                            <a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
                        </div>
                    </div>
                    <h5 class="font-weight-bold mb-4 text-center">Demo 22</h5>
                    <div class="overlay rounded-lg mb-8 offcanvas-demo">
                        <div class="overlay-wrapper rounded-lg">
                            <img src="assets/media/demos/demo22.png" alt="" class="w-100" />
                        </div>
                        <div class="overlay-layer">
                            <a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
                        </div>
                    </div>
                    <h5 class="font-weight-bold mb-4 text-center">Demo 23</h5>
                    <div class="overlay rounded-lg mb-8 offcanvas-demo">
                        <div class="overlay-wrapper rounded-lg">
                            <img src="assets/media/demos/demo23.png" alt="" class="w-100" />
                        </div>
                        <div class="overlay-layer">
                            <a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
                        </div>
                    </div>
                    <h5 class="font-weight-bold mb-4 text-center">Demo 24</h5>
                    <div class="overlay rounded-lg mb-8 offcanvas-demo">
                        <div class="overlay-wrapper rounded-lg">
                            <img src="assets/media/demos/demo24.png" alt="" class="w-100" />
                        </div>
                        <div class="overlay-layer">
                            <a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
                        </div>
                    </div>
                    <h5 class="font-weight-bold mb-4 text-center">Demo 25</h5>
                    <div class="overlay rounded-lg mb-8 offcanvas-demo">
                        <div class="overlay-wrapper rounded-lg">
                            <img src="assets/media/demos/demo25.png" alt="" class="w-100" />
                        </div>
                        <div class="overlay-layer">
                            <a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
                        </div>
                    </div>
                    <h5 class="font-weight-bold mb-4 text-center">Demo 26</h5>
                    <div class="overlay rounded-lg mb-8 offcanvas-demo">
                        <div class="overlay-wrapper rounded-lg">
                            <img src="assets/media/demos/demo26.png" alt="" class="w-100" />
                        </div>
                        <div class="overlay-layer">
                            <a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
                        </div>
                    </div>
                    <h5 class="font-weight-bold mb-4 text-center">Demo 27</h5>
                    <div class="overlay rounded-lg mb-8 offcanvas-demo">
                        <div class="overlay-wrapper rounded-lg">
                            <img src="assets/media/demos/demo27.png" alt="" class="w-100" />
                        </div>
                        <div class="overlay-layer">
                            <a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
                        </div>
                    </div>
                    <h5 class="font-weight-bold mb-4 text-center">Demo 28</h5>
                    <div class="overlay rounded-lg mb-8 offcanvas-demo">
                        <div class="overlay-wrapper rounded-lg">
                            <img src="assets/media/demos/demo28.png" alt="" class="w-100" />
                        </div>
                        <div class="overlay-layer">
                            <a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
                        </div>
                    </div>
                    <h5 class="font-weight-bold mb-4 text-center">Demo 29</h5>
                    <div class="overlay rounded-lg mb-8 offcanvas-demo">
                        <div class="overlay-wrapper rounded-lg">
                            <img src="assets/media/demos/demo29.png" alt="" class="w-100" />
                        </div>
                        <div class="overlay-layer">
                            <a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
                        </div>
                    </div>
                    <h5 class="font-weight-bold mb-4 text-center">Demo 30</h5>
                    <div class="overlay rounded-lg mb-8 offcanvas-demo">
                        <div class="overlay-wrapper rounded-lg">
                            <img src="assets/media/demos/demo30.png" alt="" class="w-100" />
                        </div>
                        <div class="overlay-layer">
                            <a href="#" class="btn btn-white btn-text-primary btn-hover-primary font-weight-boldest text-center min-w-75px shadow disabled opacity-90">Coming soon</a>
                        </div>
                    </div>
                </div>
                <!--end::Wrapper-->
                <!--begin::Purchase-->
                <div class="offcanvas-footer">
                    <a href="https://1.envato.market/EA4JP" target="_blank" class="btn btn-block btn-danger btn-shadow font-weight-bolder text-uppercase">Buy Metronic Now!</a>
                </div>
                <!--end::Purchase-->
            </div>
            <!--end::Content-->
        </div>
    

        <script type="text/javascript">
    
        </script>

        <script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#1BC5BD", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#6993FF", "warning": "#FFA800", "danger": "#F64E60", "light": "#F3F6F9", "dark": "#212121" }, "light": { "white": "#ffffff", "primary": "#1BC5BD", "secondary": "#ECF0F3", "success": "#C9F7F5", "info": "#E1E9FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#212121", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#ECF0F3", "gray-300": "#E5EAEE", "gray-400": "#D6D6E0", "gray-500": "#B5B5C3", "gray-600": "#80808F", "gray-700": "#464E5F", "gray-800": "#1B283F", "gray-900": "#212121" } }, "font-family": "Poppins" };</script>
     
        <script src="{{ asset('admin/plugins/global/plugins.bundle.js') }}"></script>
        <script src="{{ asset('admin/plugins/custom/prismjs/prismjs.bundle.js') }}"></script>
        <script src="{{ asset('admin/js/scripts.bundle.js') }}"></script>

        <script src="{{ asset('admin/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
        <script src="{{ asset('admin/plugins/custom/gmaps/gmaps.js') }}"></script>

        <script src="{{ asset('admin/js/pages/widgets.js') }}"></script>



        
        <script src="{{ asset('admin/js/pages/crud/ktdatatable/base/html-table.js') }}"></script>




        

        <!-- <script src="{{ asset('public/admin/js/app.js') }}"></script> -->
       


    </body>





</html>
