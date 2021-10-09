<?php
include'config.php';
session_start();
if (!isset($_SESSION['admin_name'])) {
    echo '<script> window.location.href = "login.php";</script>';
}

?>
<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="index.php" class="logo logo-dark"> <span class="logo-sm">
                                    <img src="assets/images/logo2.png" alt="ngo-logo" height="24">
                                </span> <span class="logo-lg">
                                    <img src="assets/images/logo2.png" alt="ngo-logo" height="24"> <span class="logo-txt">We For You</span> </span>
                </a>
                <a href="index.php" class="logo logo-light"> <span class="logo-sm">
                                    <img src="assets/images/logo2.png" alt="ngo-logo" height="24">
                                </span> <span class="logo-lg">
                                    <img src="assets/images/logo2.png" alt="ngo-logo" height="24"> <span class="logo-txt">We For You</span> </span>
                </a>
            </div>
            <button type="button" class="btn btn-sm px-3 font-size-16 header-item" id="vertical-menu-btn"> <i class="fa fa-fw fa-bars"></i> </button>
            <!-- App Search-->
            <!-- <form class="app-search d-none d-lg-block">
                <div class="position-relative">
                    <input type="text" class="form-control"  name="search_name" placeholder="Search...">
                    <button class="btn btn-primary" name="search_btn" type="button"><i class="bx bx-search-alt align-middle"></i></button>
                </div>
            </form> -->
        </div>
        <div class="d-flex">
            <div class="dropdown d-inline-block d-lg-none ms-2">
                <button type="button" class="btn header-item" id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i data-feather="search" class="icon-lg"></i> </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-search-dropdown">
                    <form class="p-3">
                        <div class="form-group m-0">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search ..." aria-label="Search Result">
                                <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="dropdown d-none d-sm-inline-block">
                <button type="button" class="btn header-item" id="mode-setting-btn"> <i data-feather="moon" class="icon-lg layout-mode-dark"></i> <i data-feather="sun" class="icon-lg layout-mode-light"></i> </button>
            </div>
            <!-- <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon position-relative" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i data-feather="bell" class="icon-lg"></i> <span class="badge bg-danger rounded-pill">5</span> </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">
                    <div class="p-3">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="m-0"> Notifications </h6> </div>
                            <div class="col-auto"> <a href="#!" class="small text-reset text-decoration-underline"> Unread (3)</a> </div>
                        </div>
                    </div>
                    <div data-simplebar style="max-height: 230px;">
                        <a href="#!" class="text-reset notification-item">
                            <div class="d-flex">
                                <div class="flex-shrink-0 me-3"> <img src="assets/images/users/avatar-3.jpg" class="rounded-circle avatar-sm" alt="user-pic"> </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-1">James Lemire</h6>
                                    <div class="font-size-13 text-muted">
                                        <p class="mb-1">It will seem like simplified English.</p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span>1 hours ago</span></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="#!" class="text-reset notification-item">
                            <div class="d-flex">
                                <div class="flex-shrink-0 avatar-sm me-3"> <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                    <i class="bx bx-cart"></i>
                                                </span> </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-1">Your order is placed</h6>
                                    <div class="font-size-13 text-muted">
                                        <p class="mb-1">If several languages coalesce the grammar</p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span>3 min ago</span></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="#!" class="text-reset notification-item">
                            <div class="d-flex">
                                <div class="flex-shrink-0 avatar-sm me-3"> <span class="avatar-title bg-success rounded-circle font-size-16">
                                                    <i class="bx bx-badge-check"></i>
                                                </span> </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-1">Your item is shipped</h6>
                                    <div class="font-size-13 text-muted">
                                        <p class="mb-1">If several languages coalesce the grammar</p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span>3 min ago</span></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="#!" class="text-reset notification-item">
                            <div class="d-flex">
                                <div class="flex-shrink-0 me-3"> <img src="assets/images/users/avatar-6.jpg" class="rounded-circle avatar-sm" alt="user-pic"> </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-1">Salena Layfield</h6>
                                    <div class="font-size-13 text-muted">
                                        <p class="mb-1">As a skeptical Cambridge friend of mine occidental.</p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span>1 hours ago</span></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="p-2 border-top d-grid">
                        <a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)"> <i class="mdi mdi-arrow-right-circle me-1"></i> <span>View More..</span> </a>
                    </div>
                </div>
            </div> -->
            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item right-bar-toggle me-2"> <i data-feather="settings" class="icon-lg"></i> </button>
            </div>
            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item bg-soft-light border-start border-end" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">  <i data-feather="users"></i> <span class="d-none d-xl-inline-block ms-1 fw-medium"><?php echo $_SESSION['admin_name']; ?></span> <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i> </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- <a class="dropdown-item" href="apps-contacts-profile.html"><i class="mdi mdi-face-profile font-size-16 align-middle me-1"></i> Profile</a> -->
                    <div class="dropdown-divider"></div> 
                    <a class="dropdown-item" href="logout.php"><i class="mdi mdi-logout font-size-16 align-middle me-1"></i> Logout</a> </div>
            </div>
        </div>
    </div>
</header>

<div class="vertical-menu">
    <div data-simplebar class="h-100">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" data-key="t-menu">Menu</li>
                <li>
                    <a href="index.php"> <i data-feather="home"></i> <span data-key="t-dashboard">Dashboard</span> </a>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow"> <i data-feather="box"></i> <span data-key="t-apps">Events</span> </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="event-list.php"> <span data-key="t-calendar">All events</span> </a>
                        </li>
                        <li>
                            <a href="add-event.php"> <span data-key="t-chat">Add Event</span> </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow"> <i data-feather="layout"></i> <span data-key="t-authentication">News</span> </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="news-list.php" data-key="t-login">All News</a></li>
                        <li><a href="add-news.php" data-key="t-register">Add News</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow"> <i data-feather="grid"></i> <span data-key="t-authentication">Image Gallery</span> </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="image-gallery.php" data-key="t-login">All Images</a></li>
                        <li><a href="add-gallery-img.php" data-key="t-register">Add Images</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow"> <i data-feather="video"></i> <span data-key="t-authentication">Video Gallery</span> </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="video-list.php" data-key="t-login">All Videos</a></li>
                        <li><a href="add-video.php" data-key="t-register">Add Video</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow"> <i data-feather="users"></i> <span data-key="t-authentication">Our Team</span> </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="member-list.php" data-key="t-login">All Members</a></li>
                        <li><a href="add-member.php" data-key="t-register">Add New Member</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow"> <i data-feather="file-text"></i> <span data-key="t-pages">Contact Inquiry</span> </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="inquiry-list.php" data-key="t-starter-page">All Inquiries</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow"> <i data-feather="image"></i> <span data-key="t-pages">Banners</span> </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="banner-list.php" data-key="t-starter-page">Banners List</a></li>
                        <li><a href="add-banner.php" data-key="t-maintenance">Add Banners</a></li>
                    </ul>
                </li>
                
            </ul>
            <!--<div class="card sidebar-alert border-0 text-center mx-4 mb-0 mt-5">-->
            <!--    <div class="card-body"> <img src="assets/images/giftbox.png" alt="">-->
            <!--        <div class="mt-4">-->
            <!--            <h5 class="alertcard-title font-size-16">Unlimited Access</h5>-->
            <!--            <p class="font-size-13">Upgrade your plan from a Free trial, to select ‘Business Plan’.</p> <a href="#!" class="btn btn-primary mt-2">Upgrade Now</a> </div>-->
            <!--    </div>-->
            <!--</div>-->
        </div>
        <!-- Sidebar -->
    </div>
</div>
