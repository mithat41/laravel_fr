<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Enlink - Admin Dashboard Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('theme/admin/assets/images/logo/favicon.png') }}">

    <!-- page css -->

    <!-- Core css -->
    <link href="{{ asset('theme/admin/assets/css/app.min.css') }}" rel="stylesheet">

</head>

<body>
<div class="app">
    <div class="layout">
        <!-- Header START -->
        <div class="header">
            <div class="logo logo-dark">
                <a href="index.html">
                    <img src="{{ asset('theme/admin/assets/images/logo/logo.png') }}" alt="Logo">
                    <img class="logo-fold" src="{{ asset('theme/admin/assets/images/logo/logo-fold.png') }}" alt="Logo">
                </a>
            </div>
            <div class="logo logo-white">
                <a href="index.html">
                    <img src="{{ asset('theme/admin/assets/images/logo/logo-white.png') }}" alt="Logo">
                    <img class="logo-fold" src="{{ asset('theme/admin/assets/images/logo/logo-fold-white.png') }}" alt="Logo">
                </a>
            </div>
            <div class="nav-wrap">
                <ul class="nav-left">
                    <li class="desktop-toggle">
                        <a href="javascript:void(0);">
                            <i class="anticon"></i>
                        </a>
                    </li>
                    <li class="mobile-toggle">
                        <a href="javascript:void(0);">
                            <i class="anticon"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" data-toggle="modal" data-target="#search-drawer">
                            <i class="anticon anticon-search"></i>
                        </a>
                    </li>
                </ul>
                <ul class="nav-right">
                    <li class="dropdown dropdown-animated scale-left">
                        <a href="javascript:void(0);" data-toggle="dropdown">
                            <i class="anticon anticon-bell notification-badge"></i>
                        </a>
                        <div class="dropdown-menu pop-notification">
                            <div class="p-v-15 p-h-25 border-bottom d-flex justify-content-between align-items-center">
                                <p class="text-dark font-weight-semibold m-b-0">
                                    <i class="anticon anticon-bell"></i>
                                    <span class="m-l-10">Notification</span>
                                </p>
                                <a class="btn-sm btn-default btn" href="javascript:void(0);">
                                    <small>View All</small>
                                </a>
                            </div>
                            <div class="relative">
                                <div class="overflow-y-auto relative scrollable" style="max-height: 300px">
                                    <a href="javascript:void(0);" class="dropdown-item d-block p-15 border-bottom">
                                        <div class="d-flex">
                                            <div class="avatar avatar-blue avatar-icon">
                                                <i class="anticon anticon-mail"></i>
                                            </div>
                                            <div class="m-l-15">
                                                <p class="m-b-0 text-dark">You received a new message</p>
                                                <p class="m-b-0"><small>8 min ago</small></p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item d-block p-15 border-bottom">
                                        <div class="d-flex">
                                            <div class="avatar avatar-cyan avatar-icon">
                                                <i class="anticon anticon-user-add"></i>
                                            </div>
                                            <div class="m-l-15">
                                                <p class="m-b-0 text-dark">New user registered</p>
                                                <p class="m-b-0"><small>7 hours ago</small></p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown dropdown-animated scale-left">
                        <div class="pointer" data-toggle="dropdown">
                            <div class="avatar avatar-image  m-h-10 m-r-15">
                                <img src=""  alt="">
                            </div>
                        </div>
                        <div class="p-b-15 p-t-20 dropdown-menu pop-profile">
                            <div class="p-h-20 p-b-15 m-b-10 border-bottom">
                                <div class="d-flex m-r-50">
                                    <div class="avatar avatar-lg avatar-image">
                                        <img src="" alt="">
                                    </div>
                                    <div class="m-l-10">
                                        <p class="m-b-0 text-dark font-weight-semibold">Marshall Nichols</p>
                                        <p class="m-b-0 opacity-07">UI/UX Desinger</p>
                                    </div>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="dropdown-item d-block p-h-15 p-v-10">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <i class="anticon opacity-04 font-size-16 anticon-user"></i>
                                        <span class="m-l-10">Edit Profile</span>
                                    </div>
                                    <i class="anticon font-size-10 anticon-right"></i>
                                </div>
                            </a>
                            <a href="javascript:void(0);" class="dropdown-item d-block p-h-15 p-v-10">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <i class="anticon opacity-04 font-size-16 anticon-lock"></i>
                                        <span class="m-l-10">Account Setting</span>
                                    </div>
                                    <i class="anticon font-size-10 anticon-right"></i>
                                </div>
                            </a>
                            <a href="javascript:void(0);" class="dropdown-item d-block p-h-15 p-v-10">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <i class="anticon opacity-04 font-size-16 anticon-project"></i>
                                        <span class="m-l-10">Projects</span>
                                    </div>
                                    <i class="anticon font-size-10 anticon-right"></i>
                                </div>
                            </a>
                            <a href="javascript:void(0);" class="dropdown-item d-block p-h-15 p-v-10">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <i class="anticon opacity-04 font-size-16 anticon-logout"></i>
                                        <span class="m-l-10">Logout</span>
                                    </div>
                                    <i class="anticon font-size-10 anticon-right"></i>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li>
                        <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">
                            <i class="anticon anticon-appstore"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Header END -->

        <!-- Side Nav START -->
        <div class="side-nav">
            <div class="side-nav-inner">
                <ul class="side-nav-menu scrollable">
                    <li class="nav-item dropdown">
                        <a href="">
                                <span class="icon-holder">
                                    <i class="anticon anticon-dashboard"></i>
                                </span>
                            <span class="title">Single Link</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle" href="javascript:void(0);">
                                <span class="icon-holder">
                                    <i class="anticon anticon-pie-chart"></i>
                                </span>
                            <span class="title">Dropdown</span>
                            <span class="arrow">
                                    <i class="arrow-icon"></i>
                                </span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="">Dropdown 1</a>
                            </li>
                            <li>
                                <a href="">Dropdown 2</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle" href="javascript:void(0);">
                                <span class="icon-holder">
                                    <i class="anticon anticon-file"></i>
                                </span>
                            <span class="title">Multi Level</span>
                            <span class="arrow">
                                    <i class="arrow-icon"></i>
                                </span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="nav-item dropdown">
                                <a href="javascript:void(0);">
                                    <span>Level 1</span>
                                    <span class="arrow">
                                            <i class="arrow-icon"></i>
                                        </span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="">Level 2.1</a>
                                    </li>
                                    <li>
                                        <a href="">Level 2.2</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Side Nav END -->

        <!-- Page Container START -->
        <div class="page-container">

            <!-- Content Wrapper START -->
            <div class="main-content">
                <div class="page-header">
                    <h2 class="header-title">Başlık</h2>
                    <div class="header-sub-title">
                        <nav class="breadcrumb breadcrumb-dash">
                            <a href="{{ route('admin') }}" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Anasayfa</a>
{{--                            <a class="breadcrumb-item" href="#">Breadcrumb 1</a>--}}
{{--                            <span class="breadcrumb-item active">Breadcrumb 2</span>--}}
                        </nav>
                    </div>
                </div>
                <!-- Content goes Here -->
            </div>
            <!-- Content Wrapper END -->

            <!-- Footer START -->
            <footer class="footer">
                <div class="footer-content">
                    <p class="m-b-0">Copyright © 2019 Theme_Nate. All rights reserved.</p>
                    <span>
                            <a href="" class="text-gray m-r-15">Term &amp; Conditions</a>
                            <a href="" class="text-gray">Privacy &amp; Policy</a>
                        </span>
                </div>
            </footer>
            <!-- Footer END -->

        </div>
        <!-- Page Container END -->

        <!-- Search Start-->
        <div class="modal modal-left fade search" id="search-drawer">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header justify-content-between align-items-center">
                        <h5 class="modal-title">Search</h5>
                        <button type="button" class="close" data-dismiss="modal">
                            <i class="anticon anticon-close"></i>
                        </button>
                    </div>
                    <div class="modal-body scrollable">
                        <div class="input-affix">
                            <i class="prefix-icon anticon anticon-search"></i>
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <!-- Content goes Here -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Search End-->

        <!-- Quick View START -->
        <div class="modal modal-right fade quick-view" id="quick-view">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header justify-content-between align-items-center">
                        <h5 class="modal-title">Quick View</h5>
                    </div>
                    <div class="modal-body scrollable">
                        <!-- Content goes Here -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Quick View END -->
    </div>
</div>


<!-- Core Vendors JS -->
<script src="{{ asset('theme/admin/assets/js/vendors.min.js') }}"></script>

<!-- page js -->

<!-- Core JS -->
<script src="{{ asset('theme/admin/assets/js/app.min.js') }}"></script>

</body>

</html>
