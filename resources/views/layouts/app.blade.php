<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link rel="icon" href="{{ asset('assets/dashboard/mages/logo/favicon-icon.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('assets/dashboard/mages/logo/favicon-icon.png') }}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/dashboard/css/vendors/font-awesome.css') }}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/dashboard/css/vendors/icofont.css') }}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/dashboard/css/vendors/themify.css') }}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/dashboard/css/vendors/flag-icon.css') }}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/dashboard/css/vendors/feather-icon.css') }}">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/dashboard/css/vendors/scrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/dashboard/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/dashboard/css/vendors/date-picker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/dashboard/css/vendors/photoswipe.css') }}">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/dashboard/css/vendors/bootstrap.css') }}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/dashboard/css/style.css') }}">
    <link id="color" rel="stylesheet" href="{{ asset('assets/dashboard/css/color-1.css') }}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/dashboard/css/responsive.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/dashboard/js/icons/font-awesome/all.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/dashboard/js/icons/iconfont/icofont.min.css') }}" />
    @stack('styles')
    @livewireStyles

</head>

<body>
    <!-- Loader starts-->
    <div class="loader-wrapper">
        <div class="loader">
            <div class="loader-bar"></div>
            <div class="loader-bar"></div>
            <div class="loader-bar"></div>
            <div class="loader-bar"></div>
            <div class="loader-bar"></div>
            <div class="loader-ball"></div>
        </div>
    </div>
    <!-- Loader ends-->
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Header Start-->
        <div class="page-header">
            <div class="header-wrapper row m-0">
                <div class="header-logo-wrapper col-auto p-0">
                    <div class="logo-wrapper"><a href="/"><img class="img-fluid" src="{{ asset('assets/dashboard/images/logo/logo.png') }}" alt=""></a></div>
                    <div class="toggle-sidebar">
                        <div class="status_toggle sidebar-toggle d-flex">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g>
                                    <g>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M21.0003 6.6738C21.0003 8.7024 19.3551 10.3476 17.3265 10.3476C15.2979 10.3476 13.6536 8.7024 13.6536 6.6738C13.6536 4.6452 15.2979 3 17.3265 3C19.3551 3 21.0003 4.6452 21.0003 6.6738Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M10.3467 6.6738C10.3467 8.7024 8.7024 10.3476 6.6729 10.3476C4.6452 10.3476 3 8.7024 3 6.6738C3 4.6452 4.6452 3 6.6729 3C8.7024 3 10.3467 4.6452 10.3467 6.6738Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M21.0003 17.2619C21.0003 19.2905 19.3551 20.9348 17.3265 20.9348C15.2979 20.9348 13.6536 19.2905 13.6536 17.2619C13.6536 15.2333 15.2979 13.5881 17.3265 13.5881C19.3551 13.5881 21.0003 15.2333 21.0003 17.2619Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M10.3467 17.2619C10.3467 19.2905 8.7024 20.9348 6.6729 20.9348C4.6452 20.9348 3 19.2905 3 17.2619C3 15.2333 4.6452 13.5881 6.6729 13.5881C8.7024 13.5881 10.3467 15.2333 10.3467 17.2619Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="left-side-header col ps-0 d-none d-md-block">
                    <div class="input-group"><span class="input-group-text" id="basic-addon1">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g>
                                    <g>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.2753 2.71436C16.0029 2.71436 19.8363 6.54674 19.8363 11.2753C19.8363 16.0039 16.0029 19.8363 11.2753 19.8363C6.54674 19.8363 2.71436 16.0039 2.71436 11.2753C2.71436 6.54674 6.54674 2.71436 11.2753 2.71436Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M19.8987 18.4878C20.6778 18.4878 21.3092 19.1202 21.3092 19.8983C21.3092 20.6783 20.6778 21.3097 19.8987 21.3097C19.1197 21.3097 18.4873 20.6783 18.4873 19.8983C18.4873 19.1202 19.1197 18.4878 19.8987 18.4878Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </g>
                                </g>
                            </svg></span>
                        <input class="form-control" type="text" placeholder="Search here.." aria-label="search" aria-describedby="basic-addon1">
                    </div>
                </div>
                <div class="nav-right col-10 col-sm-6 pull-right right-header p-0">
                    <ul class="nav-menus">
                        <li>
                            <div class="mode animated backOutRight">
                                <svg class="lighticon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <g>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M18.1377 13.7902C19.2217 14.8742 16.3477 21.0542 10.6517 21.0542C6.39771 21.0542 2.94971 17.6062 2.94971 13.3532C2.94971 8.05317 8.17871 4.66317 9.67771 6.16217C10.5407 7.02517 9.56871 11.0862 11.1167 12.6352C12.6647 14.1842 17.0537 12.7062 18.1377 13.7902Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </g>
                                    </g>
                                </svg>
                                <svg class="darkicon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17 12C17 14.7614 14.7614 17 12 17C9.23858 17 7 14.7614 7 12C7 9.23858 9.23858 7 12 7C14.7614 7 17 9.23858 17 12Z"></path>
                                    <path d="M18.3117 5.68834L18.4286 5.57143M5.57144 18.4286L5.68832 18.3117M12 3.07394V3M12 21V20.9261M3.07394 12H3M21 12H20.9261M5.68831 5.68834L5.5714 5.57143M18.4286 18.4286L18.3117 18.3117" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </div>
                        </li>
                        <li class="d-md-none resp-serch-input">
                            <div class="resp-serch-box"><i data-feather="search"></i></div>
                            <div class="form-group search-form">
                                <input type="text" placeholder="Search here...">
                            </div>
                        </li>
                        <li class="cart-nav onhover-dropdown">
                            <div class="cart-box">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <g>
                                            <path d="M5.52377 7C9.41427 5.74386 13.9724 5.45573 16 5.5C18.0276 5.54427 18.8831 6.2663 19.5 7.5C20.5 9.5 20.289 14.4881 18.5 16.0871C16.712 17.6861 9.33015 17.8381 6.87015 16.0871C4.27115 14.2361 5.629 9.192 5.544 5.743C5.595 3.813 3.5 3.5 3.5 3.5" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M13 10.5H15.773" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.26399 20.1274C7.56399 20.1274 7.80799 20.3714 7.80799 20.6714C7.80799 20.9724 7.56399 21.2164 7.26399 21.2164C6.96299 21.2164 6.71899 20.9724 6.71899 20.6714C6.71899 20.3714 6.96299 20.1274 7.26399 20.1274Z" fill="#130F26" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17.5954 20.1274C17.8964 20.1274 18.1404 20.3714 18.1404 20.6714C18.1404 20.9724 17.8964 21.2164 17.5954 21.2164C17.2954 21.2164 17.0514 20.9724 17.0514 20.6714C17.0514 20.3714 17.2954 20.1274 17.5954 20.1274Z" fill="#130F26" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </g>
                                    </g>
                                </svg><span class="badge rounded-pill badge-primary">2</span>
                            </div>
                            <div class="cart-dropdown onhover-show-div">
                                <div class="dropdown-title">
                                    <h3>Cart </h3><a class="f-right" href="cart.html"> <i data-feather="shopping-bag"> </i></a>
                                </div>
                                <ul class="custom-scrollbar">
                                    <li>
                                        <div class="media"><img class="img-fluid b-r-5 me-3 img-50" src="{{ asset('assets/dashboard/images/banner-1.jpg') }}" alt="">
                                            <div class="media-body">
                                                <h5> <a href="product.html">Black shirt with jecket</a></h5>
                                                <p class="f-w-700">$500</p>
                                                <div class="cart-quantity"><span class="plus"><i class="fa fa-plus"></i></span>
                                                    <input class="count" type="text" name="qty" value="3"><span class="minus"><i class="fa fa-minus"></i></span>
                                                </div>
                                            </div>
                                            <div class="close-circle"><a href="#"><i class="me-1" data-feather="edit"></i></a><a href="#"><i data-feather="trash-2"></i></a></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media"><img class="img-fluid b-r-5 me-3 img-50" src="{{ asset('assets/dashboard/images/product-4.png') }}" alt="">
                                            <div class="media-body">
                                                <h5> <a href="product.html">Yellow white shirt.</a></h5>
                                                <p class="f-w-700">$500</p>
                                                <div class="cart-quantity"> <span class="plus"><i class="fa fa-plus"></i></span>
                                                    <input class="count" type="text" name="qty" value="3"><span class="minus"><i class="fa fa-minus"></i></span>
                                                </div>
                                            </div>
                                            <div class="close-circle"><a href="#"><i class="me-1" data-feather="edit"></i></a><a href="#"><i data-feather="trash-2"></i></a></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media"><img class="img-fluid b-r-5 me-3 img-50" src="{{ asset('assets/dashboard/images/product-6.jpg') }}" alt="">
                                            <div class="media-body">
                                                <h5> <a href="product.html">Nike Black shoes !</a></h5>
                                                <p class="f-w-700">$500</p>
                                                <div class="cart-quantity"> <span class="plus"><i class="fa fa-plus"></i></span>
                                                    <input class="count" type="text" name="qty" value="3"><span class="minus"><i class="fa fa-minus"></i></span>
                                                </div>
                                            </div>
                                            <div class="close-circle"><a href="#"><i class="me-1" data-feather="edit"></i></a><a href="#"><i data-feather="trash-2"></i></a></div>
                                        </div>
                                    </li>
                                    <li class="order-total">
                                        <h4 class="mb-0 f-w-700">Total : <span>$100.00</span></h4><a class="btn btn-primary view-checkout" href="checkout.html">Checkout</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="onhover-dropdown">
                            <div class="notification-box">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <g>
                                            <path d="M8.54248 9.21777H15.3975" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.9702 2.5C5.58324 2.5 4.50424 3.432 4.50424 10.929C4.50424 19.322 4.34724 21.5 5.94324 21.5C7.53824 21.5 10.1432 17.816 11.9702 17.816C13.7972 17.816 16.4022 21.5 17.9972 21.5C19.5932 21.5 19.4362 19.322 19.4362 10.929C19.4362 3.432 18.3572 2.5 11.9702 2.5Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <div class="onhover-show-div bookmark-flip">
                                <div class="flip-card">
                                    <div class="flip-card-inner">
                                        <div class="front dropdown-title">
                                            <h3 class="mb-2">Bookmark</h3>
                                            <ul class="bookmark-dropdown pb-0">
                                                <li class="p-0">
                                                    <div class="row">
                                                        <div class="col-4 text-center">
                                                            <div class="bookmark-content">
                                                                <div class="bookmark-icon"><i data-feather="file-text"></i></div>
                                                                <h5 class="mt-2"> <a href="base-input.html">Forms</a></h5>
                                                            </div>
                                                        </div>
                                                        <div class="col-4 text-center">
                                                            <div class="bookmark-content">
                                                                <div class="bookmark-icon"><i data-feather="user"></i></div>
                                                                <h5 class="mt-2"> <a href="user-profile.html">Profile</a></h5>
                                                            </div>
                                                        </div>
                                                        <div class="col-4 text-center">
                                                            <div class="bookmark-content">
                                                                <div class="bookmark-icon"><i data-feather="server"></i></div>
                                                                <h5 class="mt-2"> <a href="datatable-basic-init.html">Tables</a></h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="text-center"><a class="flip-btn btn btn-primary" id="flip-btn" href="javascript:void(0)">Add New Bookmark</a></li>
                                            </ul>
                                        </div>
                                        <div class="back dropdown-title">
                                            <ul>
                                                <li>
                                                    <div class="bookmark-dropdown flip-back-content">
                                                        <input type="text" placeholder="search...">
                                                    </div>
                                                </li>
                                                <li><a class="f-w-700 d-block flip-back" id="flip-back" href="javascript:void(0)">Back</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="onhover-dropdown">
                            <div class="notification-box">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <g>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.9961 2.51416C7.56185 2.51416 5.63519 6.5294 5.63519 9.18368C5.63519 11.1675 5.92281 10.5837 4.82471 13.0037C3.48376 16.4523 8.87614 17.8618 11.9961 17.8618C15.1152 17.8618 20.5076 16.4523 19.1676 13.0037C18.0695 10.5837 18.3571 11.1675 18.3571 9.18368C18.3571 6.5294 16.4295 2.51416 11.9961 2.51416Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M14.306 20.5122C13.0117 21.9579 10.9927 21.9751 9.68604 20.5122" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </g>
                                    </g>
                                </svg><span class="badge rounded-pill badge-warning">4 </span>
                            </div>
                            <div class="onhover-show-div notification-dropdown">
                                <div class="dropdown-title">
                                    <h3>Notification</h3><a class="f-right" href="cart.html"> <i data-feather="bell"> </i></a>
                                </div>
                                <ul class="custom-scrollbar">
                                    <li>
                                        <div class="media">
                                            <div class="notification-img bg-light-primary"><img src="{{ asset('assets/dashboard/images/avtar/man.png') }}" alt=""></div>
                                            <div class="media-body">
                                                <h5> <a class="f-14 m-0" href="user-profile.html">Allie Grater</a></h5>
                                                <p>Lorem ipsum dolor sit amet...</p><span>10:20</span>
                                            </div>
                                            <div class="notification-right"><a href="#"><i data-feather="x"></i></a></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <div class="notification-img bg-light-secondary"><img src="{{ asset('assets/dashboard/images/avtar/teacher.png') }}" alt=""></div>
                                            <div class="media-body">
                                                <h5> <a class="f-14 m-0" href="user-profile.html">Olive Yew</a></h5>
                                                <p>Lorem ipsum dolor sit amet...</p><span>09:20</span>
                                            </div>
                                            <div class="notification-right"><a href="#"><i data-feather="x"></i></a></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <div class="notification-img bg-light-info"><img src="{{ asset('assets/dashboard/images/avtar/teenager.png') }}" alt=""></div>
                                            <div class="media-body">
                                                <h5> <a class="f-14 m-0" href="user-profile.html">Peg Legge</a></h5>
                                                <p>Lorem ipsum dolor sit amet...</p><span>07:20</span>
                                            </div>
                                            <div class="notification-right"><a href="#"><i data-feather="x"></i></a></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <div class="notification-img bg-light-success"><img src="{{ asset('assets/dashboard/images/avtar/chinese.png') }}" alt=""></div>
                                            <div class="media-body">
                                                <h5> <a class="f-14 m-0" href="user-profile.html">Teri Dactyl</a></h5>
                                                <p>Lorem ipsum dolor sit amet...</p><span>05:20</span>
                                            </div>
                                            <div class="notification-right"><a href="#"><i data-feather="x"></i></a></div>
                                        </div>
                                    </li>
                                    <li class="p-0"><a class="btn btn-primary" href="#">Check all</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="maximize"><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <g>
                                            <path d="M2.99609 8.71995C3.56609 5.23995 5.28609 3.51995 8.76609 2.94995" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M8.76616 20.99C5.28616 20.41 3.56616 18.7 2.99616 15.22L2.99516 15.224C2.87416 14.504 2.80516 13.694 2.78516 12.804" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M21.2446 12.804C21.2246 13.694 21.1546 14.504 21.0346 15.224L21.0366 15.22C20.4656 18.7 18.7456 20.41 15.2656 20.99" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M15.2661 2.94995C18.7461 3.51995 20.4661 5.23995 21.0361 8.71995" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </g>
                                    </g>
                                </svg></a></li>
                        <li class="profile-nav onhover-dropdown pe-0 py-0 me-0">
                            <div class="media profile-media">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <g>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M9.55851 21.4562C5.88651 21.4562 2.74951 20.9012 2.74951 18.6772C2.74951 16.4532 5.86651 14.4492 9.55851 14.4492C13.2305 14.4492 16.3665 16.4342 16.3665 18.6572C16.3665 20.8802 13.2505 21.4562 9.55851 21.4562Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M9.55849 11.2776C11.9685 11.2776 13.9225 9.32356 13.9225 6.91356C13.9225 4.50356 11.9685 2.54956 9.55849 2.54956C7.14849 2.54956 5.19449 4.50356 5.19449 6.91356C5.18549 9.31556 7.12649 11.2696 9.52749 11.2776H9.55849Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M16.8013 10.0789C18.2043 9.70388 19.2383 8.42488 19.2383 6.90288C19.2393 5.31488 18.1123 3.98888 16.6143 3.68188" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M17.4608 13.6536C19.4488 13.6536 21.1468 15.0016 21.1468 16.2046C21.1468 16.9136 20.5618 17.6416 19.6718 17.8506" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <ul class="profile-dropdown onhover-show-div">
                                <li><a href="{{ route('dashboard') }}"><i data-feather="user"></i><span>{{Auth::user()->username}}</span></a></li>
                                <li><a href="email-application.html"><i data-feather="mail"></i><span>Inbox</span></a></li>
                                <li><a href="{{ route('wallet') }}"><i data-feather="credit-card"></i><span>Wallet</span></a></li>
                                <li><a href="{{ route('transactions') }}"><i data-feather="file-text"></i><span>Transactions</span></a></li>
                                <li><a href="{{ route('donations') }}"><i data-feather="activity"></i><span>Donations</span></a></li>
                                <li><a href="edit-profile.html"><i data-feather="settings"></i><span>Settings</span></a></li>
                                <li><a  href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i data-feather="log-in"> </i><span>Log out</span></a></li>
                                <form method="POST" id="logout-form" action="{{ route('logout') }}">
                                    @csrf
                                </form>
                            </ul>
                        </li>
                    </ul>
                </div>
                <script class="result-template" type="text/x-handlebars-template">
                    <div class="ProfileCard u-cf">
                    <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
                    <div class="ProfileCard-details">
                        <div class="ProfileCard-realName">name</div>
                    </div>
                </div>
            </script>
                <script class="empty-template" type="text/x-handlebars-template"><div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div></script>
            </div>
        </div>
        <!-- Page Header Ends                              -->
        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            <div class="sidebar-wrapper">
                <div>
                    <div class="logo-wrapper"><a href="{{ route('/') }}"><img class="img-fluid for-light" src="{{ asset('assets/dashboard/images/logo/small-logo.png') }}" alt=""><img class="img-fluid for-dark" src="{{ asset('assets/dashboard/images/logo/small-white-logo.png') }}" alt=""></a>
                        <div class="back-btn"><i class="fa fa-angle-left"></i></div>
                    </div>
                    <div class="logo-icon-wrapper"><a href="{{ route('/') }}"><img class="img-fluid" src="{{ asset('assets/dashboard/images/logo-icon.png') }}" alt=""></a></div>
                    <nav class="sidebar-main">
                        <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                        <div id="sidebar-menu">
                            <ul class="sidebar-links" id="simple-bar">
                                <li class="back-btn"><a href="{{ route('/') }}"><img class="img-fluid" src="{{ asset('assets/dashboard/images/logo-icon.png') }}" alt=""></a>
                                    <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"> </i></div>
                                </li>
                                <li class="sidebar-list">
{{--                                    <label class="badge badge-light-primary">2</label>--}}
                                    <a class="sidebar-link sidebar-title" href="{{ route('dashboard') }}">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g>
                                                <g>
                                                    <path d="M9.07861 16.1355H14.8936" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M2.3999 13.713C2.3999 8.082 3.0139 8.475 6.3189 5.41C7.7649 4.246 10.0149 2 11.9579 2C13.8999 2 16.1949 4.235 17.6539 5.41C20.9589 8.475 21.5719 8.082 21.5719 13.713C21.5719 22 19.6129 22 11.9859 22C4.3589 22 2.3999 22 2.3999 13.713Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </g>
                                        </svg><span class="lan-3">Dashboard</span></a>
{{--                                    <ul class="sidebar-submenu">--}}
{{--                                        <li><a class="lan-4" href="{{ route('dashboard') }}">Default</a></li>--}}
{{--                                        <li><a class="lan-5" href="dashboard-02.html">E-commerce</a></li>--}}
{{--                                        <li><a href="crypto-dashboard.html">Crypto</a></li>--}}
{{--                                    </ul>--}}
                                </li>

                                <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="{{ route('wallet') }}">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g>
                                                <g>
                                                    <path d="M7.30566 14.5743H16.8987" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M2.5 7.79836C2.5 5.35646 3.75 3.25932 6.122 2.77265C8.493 2.28503 10.295 2.4536 11.792 3.26122C13.29 4.06884 12.861 5.26122 14.4 6.13646C15.94 7.01265 18.417 5.69646 20.035 7.44217C21.729 9.26979 21.72 12.0755 21.72 13.8641C21.72 20.6603 17.913 21.1993 12.11 21.1993C6.307 21.1993 2.5 20.7288 2.5 13.8641V7.79836Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </g>
                                        </svg>
                                        <span>Wallet</span></a></li>
                                <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="{{ route('wallet') }}">
                                        <i data-feather="airplay"></i>
                                        <span>Wallet</span></a></li>
                                <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="{{ route('donations') }}">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g>
                                                <g>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M2.74976 12.7755C2.74976 5.81947 5.06876 3.50146 12.0238 3.50146C18.9798 3.50146 21.2988 5.81947 21.2988 12.7755C21.2988 19.7315 18.9798 22.0495 12.0238 22.0495C5.06876 22.0495 2.74976 19.7315 2.74976 12.7755Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M3.02515 9.32397H21.0331" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M16.4284 13.261H16.4374" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M12.0289 13.261H12.0379" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M7.62148 13.261H7.63048" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M16.4284 17.113H16.4374" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M12.0289 17.113H12.0379" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M7.62148 17.113H7.63048" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"> </path>
                                                </g>
                                            </g>
                                        </svg><span>Donations</span></a></li>
                                <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="{{ route('transactions') }}">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g>
                                                <g>
                                                    <path d="M7.30566 14.5743H16.8987" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M2.5 7.79836C2.5 5.35646 3.75 3.25932 6.122 2.77265C8.493 2.28503 10.295 2.4536 11.792 3.26122C13.29 4.06884 12.861 5.26122 14.4 6.13646C15.94 7.01265 18.417 5.69646 20.035 7.44217C21.729 9.26979 21.72 12.0755 21.72 13.8641C21.72 20.6603 17.913 21.1993 12.11 21.1993C6.307 21.1993 2.5 20.7288 2.5 13.8641V7.79836Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                            </g>
                                        </svg><span>Transactions</span></a></li>
                            </ul>
                            <div class="sidebar-img-section">
                                <div class="sidebar-img-content"><img class="img-fluid" src="{{ asset('assets/dashboard/images/side-bar.png') }}" alt="">
                                    <h4>Need Help ?</h4><a class="txt" href="https://pixelstrap.freshdesk.com/support/home">Raise ticket at "support@pixelstrap.com"</a><a class="btn btn-secondary" href="https://themeforest.net/user/pixelstrap/portfolio">Buy Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
                    </nav>
                </div>
            </div>
            <!-- Page Sidebar Ends-->
            {{$slot}}
        </div>
    <!-- Container-fluid Ends-->
    </div>
    <!-- footer start-->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 footer-copyright text-center">
                    <p class="mb-0">Copyright 2022 © Zeta theme by pixelstrap </p>
                </div>
            </div>
        </div>
    </footer>
    </div>

    @stack('modals')

    @livewireScripts
    <!-- latest jquery-->
    <script src="{{ asset('assets/dashboard/js/jquery-3.5.1.min.js') }}"></script>
    <!-- Bootstrap js-->
    <script src="{{ asset('assets/dashboard/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <!-- feather icon js-->
    <script src="{{ asset('assets/dashboard/js/icons/feather-icon/feather.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/icons/feather-icon/feather-icon.js') }}"></script>
    <!-- scrollbar js-->
    <script src="{{ asset('assets/dashboard/js/scrollbar/simplebar.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/scrollbar/custom.js') }}"></script>
    <!-- Sidebar jquery-->
    <script src="{{ asset('assets/dashboard/js/config.js') }}"></script>
    <!-- Plugins JS start-->
    <script src="{{ asset('assets/dashboard/js/sidebar-menu.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/chart/knob/knob.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/chart/knob/knob-chart.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/chart/apex-chart/apex-chart.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/chart/apex-chart/stock-prices.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/notify/bootstrap-notify.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/dashboard/default.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/notify/index.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/datepicker/date-picker/datepicker.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/datepicker/date-picker/datepicker.en.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/datepicker/date-picker/datepicker.custom.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/photoswipe/photoswipe.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/photoswipe/photoswipe-ui-default.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/photoswipe/photoswipe.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/typeahead/handlebars.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/typeahead/typeahead.bundle.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/typeahead/typeahead.custom.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/typeahead-search/handlebars.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/typeahead-search/typeahead-custom.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/height-equal.js') }}"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="{{ asset('assets/dashboard/js/script.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/theme-customizer/customizer.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/icons/font-awesome/all.min.js') }}"></script>

    <!-- login js-->
    <!-- Plugin used-->
    @stack('scripts')
</body>

</html>
