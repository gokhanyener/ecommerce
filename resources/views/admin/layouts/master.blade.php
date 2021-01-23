<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.urbanui.com/radiant/jquery/pages/layout/sidebar-fixed.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 Sep 2018 08:31:23 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Radiant Admin Premium Bootstrap Admin Dashboard Template</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="/admin/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/admin/vendors/iconfonts/puse-icons-feather/feather.css">
    <link rel="stylesheet" href="/admin/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="/admin/vendors/css/vendor.bundle.addons.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="/admin/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="/admin/images/favicon.png" />
</head>
<body class="sidebar-fixed">
<div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
            <a class="navbar-brand brand-logo" href="../../index.html"></a>
            <a class="navbar-brand brand-logo-mini" href="../../index.html"></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
                <li class="nav-item">
                    <a href="#" class="nav-link">Schedule <span class="badge badge-primary ml-1">New</span></a>
                </li>
                <li class="nav-item active">
                    <a href="#" class="nav-link"><i class="mdi mdi-elevation-rise"></i>Reports</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link"><i class="mdi mdi-bookmark-plus-outline"></i>Score</a>
                </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item dropdown">
                    <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                        <i class="mdi mdi-message-text-outline"></i>
                        <span class="count bg-warning">2</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                        <div class="dropdown-item py-3">
                            <p class="mb-0 font-weight-medium float-left">You have 7 unread mails
                            </p>
                            <span class="badge badge-inverse-info badge-pill float-right">View all</span>
                        </div>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <img src="/admin/images/faces/face4.jpg" alt="image" class="profile-pic">
                            </div>
                            <div class="preview-item-content flex-grow">
                                <h6 class="preview-subject ellipsis font-weight-normal text-dark mb-1">David Grey
                                    <span class="float-right font-weight-light small-text text-gray">1 Minutes ago</span>
                                </h6>
                                <p class="font-weight-light small-text mb-0">
                                    The meeting is cancelled
                                </p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <img src="/admin/images/faces/face2.jpg" alt="image" class="profile-pic">
                            </div>
                            <div class="preview-item-content flex-grow">
                                <h6 class="preview-subject ellipsis font-weight-normal text-dark mb-1">Tim Cook
                                    <span class="float-right font-weight-light small-text text-gray">15 Minutes ago</span>
                                </h6>
                                <p class="font-weight-light small-text mb-0">
                                    New product launch
                                </p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <img src="/admin/images/faces/face3.jpg" alt="image" class="profile-pic">
                            </div>
                            <div class="preview-item-content flex-grow">
                                <h6 class="preview-subject ellipsis font-weight-normal text-dark mb-1"> Johnson
                                    <span class="float-right font-weight-light small-text text-gray">18 Minutes ago</span>
                                </h6>
                                <p class="font-weight-light small-text mb-0">
                                    Upcoming board meeting
                                </p>
                            </div>
                        </a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                        <i class="mdi mdi-bell-outline"></i>
                        <span class="count bg-success">4</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                        <a class="dropdown-item py-3">
                            <p class="mb-0 font-weight-medium float-left">You have 4 new notifications
                            </p>
                            <span class="badge badge-pill badge-inverse-info float-right">View all</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-inverse-success">
                                    <i class="mdi mdi-alert-circle-outline mx-0"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <h6 class="preview-subject font-weight-normal text-dark mb-1">Application Error</h6>
                                <p class="font-weight-light small-text mb-0">
                                    Just now
                                </p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-inverse-warning">
                                    <i class="mdi mdi-comment-text-outline mx-0"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <h6 class="preview-subject font-weight-normal text-dark mb-1">Settings</h6>
                                <p class="font-weight-light small-text mb-0">
                                    Private message
                                </p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <div class="preview-icon bg-inverse-info">
                                    <i class="mdi mdi-email-outline mx-0"></i>
                                </div>
                            </div>
                            <div class="preview-item-content">
                                <h6 class="preview-subject font-weight-normal text-dark mb-1">New user registration</h6>
                                <p class="font-weight-light small-text mb-0">
                                    2 days ago
                                </p>
                            </div>
                        </a>
                    </div>
                </li>
                <li class="nav-item d-none d-lg-block color-setting">
                    <a class="nav-link" href="#">
                        <i class="mdi mdi-tune"></i>
                    </a>
                </li>
                <li class="nav-item dropdown d-none d-xl-inline-block">
                    <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                        <span class="mr-3">Hello, Sebastian !</span><img class="img-xs rounded-circle" src="/admin/images/faces/face1.jpg" alt="Profile image">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                        <a class="dropdown-item p-0">
                            <div class="d-flex border-bottom">
                                <div class="py-3 px-4 d-flex align-items-center justify-content-center"><i class="mdi mdi-bookmark-plus-outline mr-0 text-gray"></i></div>
                                <div class="py-3 px-4 d-flex align-items-center justify-content-center border-left border-right"><i class="mdi mdi-account-outline mr-0 text-gray"></i></div>
                                <div class="py-3 px-4 d-flex align-items-center justify-content-center"><i class="mdi mdi-alarm-check mr-0 text-gray"></i></div>
                            </div>
                        </a>
                        <a class="dropdown-item mt-2">
                            Manage Accounts
                        </a>
                        <a class="dropdown-item">
                            Change Password
                        </a>
                        <a class="dropdown-item">
                            Check Inbox
                        </a>
                        <a class="dropdown-item">
                            Sign Out
                        </a>
                    </div>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                <span class="icon-menu"></span>
            </button>
        </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_settings-panel.html -->
        <div class="theme-setting-wrapper">
            <div id="theme-settings" class="settings-panel">
                <i class="settings-close mdi mdi-close"></i>
                <div class="d-flex align-items-center justify-content-between border-bottom">
                    <p class="settings-heading font-weight-bold border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Template Skins</p>
                </div>
                <div class="sidebar-bg-options selected" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
                <div class="sidebar-bg-options" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
                <p class="settings-heading font-weight-bold mt-2">Header Skins</p>
                <div class="color-tiles mx-0 px-4">
                    <div class="tiles primary"></div>
                    <div class="tiles success"></div>
                    <div class="tiles warning"></div>
                    <div class="tiles danger"></div>
                    <div class="tiles pink"></div>
                    <div class="tiles info"></div>
                    <div class="tiles dark"></div>
                    <div class="tiles default"></div>
                </div>
            </div>
        </div>
        <div id="right-sidebar" class="settings-panel">
            <i class="settings-close mdi mdi-close"></i>
            <div class="d-flex align-items-center justify-content-between border-bottom">
                <p class="settings-heading font-weight-bold border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
            </div>
            <ul class="chat-list">
                <li class="list active">
                    <div class="profile"><img src="/admin/images/faces/face1.jpg" alt="image"><span class="online"></span></div>
                    <div class="info">
                        <p>Thomas Douglas</p>
                        <p>Available</p>
                    </div>
                    <small class="text-muted my-auto">19 min</small>
                </li>
                <li class="list">
                    <div class="profile"><img src="/admin/images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
                    <div class="info">
                        <div class="wrapper d-flex">
                            <p>Catherine</p>
                        </div>
                        <p>Away</p>
                    </div>
                    <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                    <small class="text-muted my-auto">23 min</small>
                </li>
                <li class="list">
                    <div class="profile"><img src="/admin/images/faces/face3.jpg" alt="image"><span class="online"></span></div>
                    <div class="info">
                        <p>Daniel Russell</p>
                        <p>Available</p>
                    </div>
                    <small class="text-muted my-auto">14 min</small>
                </li>
                <li class="list">
                    <div class="profile"><img src="/admin/images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
                    <div class="info">
                        <p>James Richardson</p>
                        <p>Away</p>
                    </div>
                    <small class="text-muted my-auto">2 min</small>
                </li>
                <li class="list">
                    <div class="profile"><img src="/admin/images/faces/face5.jpg" alt="image"><span class="online"></span></div>
                    <div class="info">
                        <p>Madeline Kennedy</p>
                        <p>Available</p>
                    </div>
                    <small class="text-muted my-auto">5 min</small>
                </li>
                <li class="list">
                    <div class="profile"><img src="/admin/images/faces/face6.jpg" alt="image"><span class="online"></span></div>
                    <div class="info">
                        <p>Sarah Graves</p>
                        <p>Available</p>
                    </div>
                    <small class="text-muted my-auto">47 min</small>
                </li>
            </ul>
        </div>
        <!-- partial -->
        <!-- partial:../../partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item nav-profile">
                    <div class="nav-link">
                        <div class="profile-image"> <img src="/admin/images/faces/face1.jpg" alt="image"/> <span class="online-status online"></span> </div>
                        <div class="profile-name">
                            <p class="name">Sebastian Brayden</p>
                            <p class="designation">UI/UX Designer</p>
                        </div>
                        <div class="notification-panel mt-4">
                            <span><i class="mdi mdi-settings"></i></span>
                            <span class="count-wrapper"><i class="mdi mdi-bell"></i><span class="count top-right bg-warning">4</span></span>
                            <span><i class="mdi mdi-email"></i></span>
                        </div>
                    </div>
                </li>
                <li class="nav-item"> <a class="nav-link" href="../../index.html"> <img class="menu-icon" src="/admin/images/menu_icons/01.png" alt="menu icon"> <span class="menu-title">Dashboard</span></a> </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#page-layouts" aria-expanded="false" aria-controls="page-layouts"> <img class="menu-icon" src="/admin/images/menu_icons/02.png" alt="menu icon"> <span class="menu-title">Page Layouts</span><i class="menu-arrow"></i></a>
                    <div class="collapse" id="page-layouts">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="boxed-layout.html">Boxed</a></li>
                            <li class="nav-item"> <a class="nav-link" href="rtl-layout.html">RTL</a></li>
                            <li class="nav-item"> <a class="nav-link" href="horizontal-menu.html">Horizontal Menu</a></li>
                            <li class="nav-item"> <a class="nav-link" href="horizontal-menu-2.html">Horizontal Menu 2</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#apps-dropdown" aria-expanded="false" aria-controls="apps-dropdown"> <img class="menu-icon" src="/admin/images/menu_icons/09.png" alt="menu icon"> <span class="menu-title">Apps</span><i class="menu-arrow"></i></a>
                    <div class="collapse" id="apps-dropdown">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="../apps/email.html">E-mail</a> </li>
                            <li class="nav-item"> <a class="nav-link" href="../apps/calendar.html">Calendar</a> </li>
                            <li class="nav-item"> <a class="nav-link" href="../apps/todo.html">Todo List</a> </li>
                            <li class="nav-item"> <a class="nav-link" href="../apps/gallery.html">Gallery</a> </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item"> <a class="nav-link" href="../widgets.html"> <img class="menu-icon" src="/admin/images/menu_icons/08.png" alt="menu icon"> <span class="menu-title">Widgets</span> </a> </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#sidebar-layouts" aria-expanded="false" aria-controls="sidebar-layouts"> <img class="menu-icon" src="/admin/images/menu_icons/04.png" alt="menu icon"> <span class="menu-title">Sidebar Layouts</span><i class="menu-arrow"></i></a>
                    <div class="collapse" id="sidebar-layouts">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="compact-menu.html">Compact menu</a></li>
                            <li class="nav-item"> <a class="nav-link" href="sidebar-collapsed.html">Icon menu</a></li>
                            <li class="nav-item"> <a class="nav-link" href="sidebar-hidden.html">Sidebar Hidden</a></li>
                            <li class="nav-item"> <a class="nav-link" href="sidebar-hidden-overlay.html">Sidebar Overlay</a></li>
                            <li class="nav-item"> <a class="nav-link" href="sidebar-fixed.html">Sidebar Fixed</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic"> <img class="menu-icon" src="/admin/images/menu_icons/17.png" alt="menu icon"> <span class="menu-title">Basic UI Elements</span><i class="menu-arrow"></i></a>
                    <div class="collapse" id="ui-basic">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="../ui-features/accordions.html">Accordions</a></li>
                            <li class="nav-item"> <a class="nav-link" href="../ui-features/buttons.html">Buttons</a></li>
                            <li class="nav-item"> <a class="nav-link" href="../ui-features/badges.html">Badges</a></li>
                            <li class="nav-item"> <a class="nav-link" href="../ui-features/breadcrumbs.html">Breadcrumbs</a></li>
                            <li class="nav-item"> <a class="nav-link" href="../ui-features/dropdowns.html">Dropdowns</a></li>
                            <li class="nav-item"> <a class="nav-link" href="../ui-features/modals.html">Modals</a></li>
                            <li class="nav-item"> <a class="nav-link" href="../ui-features/progress.html">Progress bar</a></li>
                            <li class="nav-item"> <a class="nav-link" href="../ui-features/pagination.html">Pagination</a></li>
                            <li class="nav-item"> <a class="nav-link" href="../ui-features/tabs.html">Tabs</a></li>
                            <li class="nav-item"> <a class="nav-link" href="../ui-features/typography.html">Typography</a></li>
                            <li class="nav-item"> <a class="nav-link" href="../ui-features/tooltips.html">Tooltips</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#ui-advanced" aria-expanded="false" aria-controls="ui-advanced"> <img class="menu-icon" src="/admin/images/menu_icons/07.png" alt="menu icon"> <span class="menu-title">Advanced Elements</span><i class="menu-arrow"></i></a>
                    <div class="collapse" id="ui-advanced">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="../ui-features/dragula.html">Dragula</a></li>
                            <li class="nav-item"> <a class="nav-link" href="../ui-features/clipboard.html">Clipboard</a></li>
                            <li class="nav-item"> <a class="nav-link" href="../ui-features/context-menu.html">Context menu</a></li>
                            <li class="nav-item"> <a class="nav-link" href="../ui-features/slider.html">Sliders</a></li>
                            <li class="nav-item"> <a class="nav-link" href="../ui-features/carousel.html">Carousel</a></li>
                            <li class="nav-item"> <a class="nav-link" href="../ui-features/colcade.html">Colcade</a></li>
                            <li class="nav-item"> <a class="nav-link" href="../ui-features/loaders.html">Loaders</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements"> <img class="menu-icon" src="/admin/images/menu_icons/19.png" alt="menu icon"> <span class="menu-title">Form elements</span><i class="menu-arrow"></i></a>
                    <div class="collapse" id="form-elements">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"><a class="nav-link" href="../forms/basic_elements.html">Basic Elements</a></li>
                            <li class="nav-item"><a class="nav-link" href="../forms/advanced_elements.html">Advanced Elements</a></li>
                            <li class="nav-item"><a class="nav-link" href="../forms/validation.html">Validation</a></li>
                            <li class="nav-item"><a class="nav-link" href="../forms/wizard.html">Wizard</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#editors" aria-expanded="false" aria-controls="editors"> <img class="menu-icon" src="/admin/images/menu_icons/18.png" alt="menu icon"> <span class="menu-title">Editors</span><i class="menu-arrow"></i></a>
                    <div class="collapse" id="editors">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"><a class="nav-link" href="../forms/text_editor.html">Text editors</a></li>
                            <li class="nav-item"><a class="nav-link" href="../forms/code_editor.html">Code editors</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts"> <img class="menu-icon" src="/admin/images/menu_icons/03.png" alt="menu icon"> <span class="menu-title">Charts</span><i class="menu-arrow"></i></a>
                    <div class="collapse" id="charts">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="../charts/chartjs.html">ChartJs</a></li>
                            <li class="nav-item"> <a class="nav-link" href="../charts/morris.html">Morris</a></li>
                            <li class="nav-item"> <a class="nav-link" href="../charts/flot-chart.html">Flot</a></li>
                            <li class="nav-item"> <a class="nav-link" href="../charts/google-charts.html">Google charts</a></li>
                            <li class="nav-item"> <a class="nav-link" href="../charts/sparkline.html">Sparkline js</a></li>
                            <li class="nav-item"> <a class="nav-link" href="../charts/c3.html">C3 charts</a></li>
                            <li class="nav-item"> <a class="nav-link" href="../charts/chartist.html">Chartists</a></li>
                            <li class="nav-item"> <a class="nav-link" href="../charts/justGage.html">JustGage</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables"> <img class="menu-icon" src="/admin/images/menu_icons/06.png" alt="menu icon"> <span class="menu-title">Tables</span><i class="menu-arrow"></i></a>
                    <div class="collapse" id="tables">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="../tables/basic-table.html">Basic table</a></li>
                            <li class="nav-item"> <a class="nav-link" href="../tables/data-table.html">Data table</a></li>
                            <li class="nav-item"> <a class="nav-link" href="../tables/js-grid.html">Js-grid</a></li>
                            <li class="nav-item"> <a class="nav-link" href="../tables/sortable-table.html">Sortable table</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item"> <a class="nav-link" href="../ui-features/popups.html"> <img class="menu-icon" src="/admin/images/menu_icons/20.png" alt="menu icon"> <span class="menu-title">Popups</span> </a> </li>
                <li class="nav-item"> <a class="nav-link" href="../ui-features/notifications.html"> <img class="menu-icon" src="/admin/images/menu_icons/13.png" alt="menu icon"> <span class="menu-title">Notifications</span> </a> </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons"> <img class="menu-icon" src="/admin/images/menu_icons/10.png" alt="menu icon"> <span class="menu-title">Icons</span><i class="menu-arrow"></i></a>
                    <div class="collapse" id="icons">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="../icons/flag-icons.html">Flag icons</a></li>
                            <li class="nav-item"> <a class="nav-link" href="../icons/font-awesome.html">Font Awesome</a></li>
                            <li class="nav-item"> <a class="nav-link" href="../icons/simple-line-icon.html">Simple line icons</a></li>
                            <li class="nav-item"> <a class="nav-link" href="../icons/themify.html">Themify icons</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#maps" aria-expanded="false" aria-controls="maps"> <img class="menu-icon" src="/admin/images/menu_icons/12.png" alt="menu icon"> <span class="menu-title">Maps</span><i class="menu-arrow"></i></a>
                    <div class="collapse" id="maps">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="../maps/mapeal.html">Mapeal</a></li>
                            <li class="nav-item"> <a class="nav-link" href="../maps/vector-map.html">Vector Map</a></li>
                            <li class="nav-item"> <a class="nav-link" href="../maps/google-maps.html">Google Map</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth"> <img class="menu-icon" src="/admin/images/menu_icons/01.png" alt="menu icon"> <span class="menu-title">User Pages</span><i class="menu-arrow"></i></a>
                    <div class="collapse" id="auth">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="../samples/login.html"> Login </a></li>
                            <li class="nav-item"> <a class="nav-link" href="../samples/login-2.html"> Login 2 </a></li>
                            <li class="nav-item"> <a class="nav-link" href="../samples/register.html"> Register </a></li>
                            <li class="nav-item"> <a class="nav-link" href="../samples/register-2.html"> Register 2 </a></li>
                            <li class="nav-item"> <a class="nav-link" href="../samples/lock-screen.html"> Lockscreen </a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#error" aria-expanded="false" aria-controls="error"> <img class="menu-icon" src="/admin/images/menu_icons/16.png" alt="menu icon"> <span class="menu-title">Error pages</span><i class="menu-arrow"></i></a>
                    <div class="collapse" id="error">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="../samples/error-404.html"> 404 </a></li>
                            <li class="nav-item"> <a class="nav-link" href="../samples/error-500.html"> 500 </a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages"> <img class="menu-icon" src="/admin/images/menu_icons/15.png" alt="menu icon"> <span class="menu-title">General Pages</span><i class="menu-arrow"></i></a>
                    <div class="collapse" id="general-pages">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="../samples/blank-page.html"> Blank Page </a></li>
                            <li class="nav-item"> <a class="nav-link" href="../samples/landing-page.html"> Landing Page </a></li>
                            <li class="nav-item"> <a class="nav-link" href="../samples/profile.html"> Profile </a></li>
                            <li class="nav-item"> <a class="nav-link" href="../samples/faq.html"> FAQ </a></li>
                            <li class="nav-item"> <a class="nav-link" href="../samples/faq-2.html"> FAQ 2 </a></li>
                            <li class="nav-item"> <a class="nav-link" href="../samples/news-grid.html"> News grid </a></li>
                            <li class="nav-item"> <a class="nav-link" href="../samples/timeline.html"> Timeline </a></li>
                            <li class="nav-item"> <a class="nav-link" href="../samples/search-results.html"> Search Results </a></li>
                            <li class="nav-item"> <a class="nav-link" href="../samples/portfolio.html"> Portfolio </a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#e-commerce" aria-expanded="false" aria-controls="e-commerce"> <img class="menu-icon" src="/admin/images/menu_icons/14.png" alt="menu icon"> <span class="menu-title">E-commerce</span><i class="menu-arrow"></i></a>
                    <div class="collapse" id="e-commerce">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="../samples/invoice.html"> Invoice </a></li>
                            <li class="nav-item"> <a class="nav-link" href="../samples/pricing-table.html"> Pricing Table </a></li>
                            <li class="nav-item"> <a class="nav-link" href="../samples/orders.html"> Orders </a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item"> <a class="nav-link" href="../documentation.html"> <img class="menu-icon" src="/admin/images/menu_icons/05.png" alt="menu icon"> <span class="menu-title">Documentation</span> </a> </li>
                <li class="nav-item">
                    <div class="sidebar-sticker">
                        <div class="d-flex align-items-center text-primary">
                            <h6 class="mb-1">Need Help</h6><i class="mdi ml-2 mdi-bell-ring-outline"></i>
                        </div>
                        <a class="d-block text-gray my-2" href="#">hello@website.com</a>
                        <a class="d-block" href="#">Visit FAQ</a>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                        <div class="card card-statistics">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-center">
                                    <div class="highlight-icon bg-light mr-3">
                                        <i class="mdi mdi-cube text-success icon-lg"></i>
                                    </div>
                                    <div class="wrapper">
                                        <p class="card-text mb-0">Revenue</p>
                                        <div class="fluid-container">
                                            <h3 class="card-title mb-0">$65,650</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                        <div class="card card-statistics">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-center">
                                    <div class="highlight-icon bg-light mr-3">
                                        <i class="mdi mdi-briefcase-check text-primary icon-lg"></i>
                                    </div>
                                    <div class="wrapper">
                                        <p class="card-text mb-0">Orders</p>
                                        <div class="fluid-container">
                                            <h3 class="card-title mb-0">$45,650</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                        <div class="card card-statistics">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-center">
                                    <div class="highlight-icon bg-light mr-3">
                                        <i class="mdi mdi-account-multiple text-danger icon-lg"></i>
                                    </div>
                                    <div class="wrapper">
                                        <p class="card-text mb-0">Returns</p>
                                        <div class="fluid-container">
                                            <h3 class="card-title mb-0">$12,357</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
                        <div class="card card-statistics">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-center">
                                    <div class="highlight-icon bg-light mr-3">
                                        <i class="mdi mdi-airballoon text-info icon-lg"></i>
                                    </div>
                                    <div class="wrapper">
                                        <p class="card-text mb-0">Sales</p>
                                        <div class="fluid-container">
                                            <h3 class="card-title mb-0">$45,650</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Latest Comments</h5>
                                <div class="d-flex align-items-start pb-3 pt-1 mb-4 border-bottom">
                                    <img src="/admin/images/brand-logo/4.png" alt="brand logo">
                                    <div class="wrapper w-100 pl-3">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <span class="badge badge-danger badge-lg mb-2">ADMIN-APPLE</span>
                                            <span class="text-gray text-small">13:17 PM</span>
                                        </div>
                                        <p>A new rating has been received</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-start pb-3 pt-1 mb-4 border-bottom">
                                    <img src="/admin/images/brand-logo/3.png" alt="brand logo">
                                    <div class="wrapper w-100 pl-3">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <span class="badge badge-warning badge-lg mb-2">ADMIN-AIRBNB</span>
                                            <span class="text-gray text-small">09:29 PM</span>
                                        </div>
                                        <p>Verify your email address !</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-start pb-3 pt-1 mb-4 border-bottom">
                                    <img src="/admin/images/brand-logo/1.png" alt="brand logo">
                                    <div class="wrapper w-100 pl-3">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <span class="badge badge-success badge-lg mb-2">ADMIN-AMAZON</span>
                                            <span class="text-gray text-small">03:43 AM</span>
                                        </div>
                                        <p>Support of theme</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-start pt-1">
                                    <img src="/admin/images/brand-logo/2.png" alt="brand logo">
                                    <div class="wrapper w-100 pl-3">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <span class="badge badge-info badge-lg mb-2">ADMIN-FACEBOOK</span>
                                            <span class="text-gray text-small">10:14 AM</span>
                                        </div>
                                        <p>New submission on website</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Top Selling Products</h5>
                                <div class="row border-bottom pb-3 mb-3">
                                    <div class="col-12 py-4 my-3">
                                        <canvas id="DashboardBarChart-1" style="height:100px"></canvas>
                                    </div>
                                    <div class="col-12 mt-3">
                                        <div class="d-flex align-items-end">
                                            <h1 class="display-4 font-weight-semibold mb-0">8935</h1>
                                            <h5 class="ml-3 mb-2">Sales Per Day</h5>
                                        </div>
                                        <p class="mt-0 mb-2">Some quick example text to build</p>
                                        <div class="d-flex align-items-center">
                                            <div class="progress progress-md w-100 mr-3">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 38%" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <p class="mb-0">38%</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="d-flex align-items-end">
                                            <h1 class="display-4 font-weight-semibold mb-0">6843</h1>
                                            <h5 class="ml-3 mb-2">Orders Per Day</h5>
                                        </div>
                                        <p class="mt-0 mb-2">Proin eget tortor risus.</p>
                                        <div class="d-flex align-items-center">
                                            <div class="progress progress-md w-100 mr-3">
                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 64%" aria-valuenow="64" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <p class="mb-0">64%</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Total Revenue</h5>
                                <div class="w-75 mx-auto">
                                    <div class="d-flex justify-content-between text-center mb-2">
                                        <div class="wrapper">
                                            <h4>6,256</h4>
                                            <small class="text-muted">Totel sales</small>
                                        </div>
                                        <div class="wrapper">
                                            <h4>8569</h4>
                                            <small class="text-muted">Open Compaign</small>
                                        </div>
                                    </div>
                                </div>
                                <div id="morris-line-example" style="height:250px;"></div>
                                <div class="w-75 mx-auto">
                                    <div class="d-flex justify-content-between text-center mt-5">
                                        <div class="wrapper">
                                            <h4>5136</h4>
                                            <small class="text-muted">Online Sales</small>
                                        </div>
                                        <div class="wrapper">
                                            <h4>4596</h4>
                                            <small class="text-muted">Store Sales</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mb-4">Order Status</h5>
                                <div class="row mb-5">
                                    <div class="col-md-3 col-sm-6 col-6">
                                        <div class="d-flex">
                                            <h2 class="mb-0">5675</h2>
                                            <i class="mdi mdi-arrow-up h2 mb-0 text-success"></i>
                                        </div>
                                        <p>Daily Order</p>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-6">
                                        <div class="d-flex">
                                            <h2 class="mb-0">7841</h2>
                                            <i class="mdi mdi-arrow-up h2 mb-0 text-success"></i>
                                        </div>
                                        <p>Tasks Completed</p>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-6">
                                        <div class="d-flex">
                                            <h2 class="mb-0">6521</h2>
                                            <i class="mdi mdi-arrow-down h2 mb-0 text-danger"></i>
                                        </div>
                                        <p>Monthly Sales</p>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-6">
                                        <div class="d-flex">
                                            <h2 class="mb-0">8954</h2>
                                            <i class="mdi mdi-arrow-up h2 mb-0 text-success"></i>
                                        </div>
                                        <p>Total Revenue</p>
                                    </div>
                                </div>
                                <canvas id="dashoard-area-chart" height="70"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    <h5 class="card-title mb-0">New Accounts</h5>
                                    <small class="text-gray d-none d-sm-block">Last activity was 2 days ago</small>
                                </div>
                                <div class="new-accounts">
                                    <ul class="chats">
                                        <li class="chat-persons">
                                            <a href="#">
                                                <span class="pro-pic"><img src="/admin/images/faces/face1.jpg" alt="profile image"></span>
                                                <div class="user">
                                                    <p class="u-name">David</p>
                                                    <p class="u-designation">Python Developer</p>
                                                </div>
                                                <p class="joined-date">30 Mins ago</p>
                                            </a>
                                        </li>
                                        <!-- list person -->
                                        <li class="chat-persons">
                                            <a href="#">
                                                <span class="pro-pic"><img src="/admin/images/faces/face2.jpg" alt="profile image"></span>
                                                <div class="user">
                                                    <p class="u-name">Stella Johnson</p>
                                                    <p class="u-designation">SEO Expert</p>
                                                </div>
                                                <p class="joined-date">2 Days ago</p>
                                            </a>
                                        </li>
                                        <!-- list person -->
                                        <li class="chat-persons">
                                            <a href="#">
                                                <span class="pro-pic"><img src="/admin/images/faces/face23.jpg" alt="profile image"></span>
                                                <div class="user">
                                                    <p class="u-name">Marina Michel</p>
                                                    <p class="u-designation">Business Development</p>
                                                </div>
                                                <p class="joined-date">4 Days ago</p>
                                            </a>
                                        </li>
                                        <!-- list person -->
                                        <li class="chat-persons">
                                            <a href="#">
                                                <span class="pro-pic"><img src="/admin/images/faces/face4.jpg" alt="profile image"></span>
                                                <div class="user">
                                                    <p class="u-name">Edward Fletcher</p>
                                                    <p class="u-designation">UI/UX Designer</p>
                                                </div>
                                                <p class="joined-date">5 Days ago</p>
                                            </a>
                                        </li>
                                        <!-- list person -->
                                        <li class="chat-persons">
                                            <a href="#">
                                                <span class="pro-pic"><img src="/admin/images/faces/face14.jpg" alt="profile image"></span>
                                                <div class="user">
                                                    <p class="u-name">Allen Donald</p>
                                                    <p class="u-designation">UI/UX Designer</p>
                                                </div>
                                                <p class="joined-date">5 Days ago</p>
                                            </a>
                                        </li>
                                        <!-- list person -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <h5 class="card-title mb-0">To-do list</h5>
                                    <button type="button" class="btn btn-sm btn-success ml-auto"><i class="mdi mdi-plus"></i>Create New</button>
                                </div>
                                <div class="todo-list-container">
                                    <div class="list-wrapper">
                                        <ul class="todo-list">
                                            <li class="list">
                                                <div class="form-check form-check-flat todo-form-check w-100">
                                                    <div class="form-check-label">
                                                        <input type="checkbox" class="form-check-input">
                                                        <i class="input-helper"></i>
                                                        <div class="d-flex">
                                                            <div class="wrapper todo-content">
                                                                <h6 class="mb-1 ellipsis">Anyways i would like just do it</h6>
                                                                <p class="text-gray mb-0 ellipsor">15:00 PM Mon, 14 Jan 2018</p>
                                                                <span class="text-success ellipsor">#Photoshop</span>
                                                            </div>
                                                            <div class="action-wrapper wrapper ml-auto d-flex align-items-center">
                                                                <i class="btn-close mdi mdi-close-circle-outline text-danger icon-md"></i>
                                                                <i class="btn-action mdi mdi-dots-vertical text-muted icon-md"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list">
                                                <div class="form-check form-check-flat todo-form-check w-100">
                                                    <div class="form-check-label">
                                                        <input type="checkbox" class="form-check-input" checked>
                                                        <i class="input-helper"></i>
                                                        <div class="d-flex">
                                                            <div class="wrapper todo-content">
                                                                <h6 class="mb-1 ellipsis">Make an appointment with Doctor</h6>
                                                                <p class="text-gray mb-0 ellipsor">10:00 PM Sat, 10 Jan 2018</p>
                                                                <span class="text-success ellipsor">#Bootstrap</span>
                                                            </div>
                                                            <div class="action-wrapper wrapper ml-auto d-flex align-items-center">
                                                                <i class="btn-close mdi mdi-close-circle-outline text-danger icon-md"></i>
                                                                <i class="btn-action mdi mdi-dots-vertical text-muted icon-md"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list">
                                                <div class="form-check form-check-flat todo-form-check w-100">
                                                    <div class="form-check-label">
                                                        <input type="checkbox" class="form-check-input">
                                                        <i class="input-helper"></i>
                                                        <div class="d-flex">
                                                            <div class="wrapper todo-content">
                                                                <h6 class="mb-1 ellipsis">Visit our boys in Battle Exhibition</h6>
                                                                <p class="text-gray mb-0 ellipsor">06:46 PM Mon, 02 Jan 2018</p>
                                                                <span class="text-success ellipsor">#Bootstrap&nbsp;&nbsp;#CSS</span>
                                                            </div>
                                                            <div class="action-wrapper wrapper ml-auto d-flex align-items-center">
                                                                <i class="btn-close mdi mdi-close-circle-outline text-danger icon-md"></i>
                                                                <i class="btn-action mdi mdi-dots-vertical text-muted icon-md"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list">
                                                <div class="form-check form-check-flat todo-form-check w-100">
                                                    <div class="form-check-label">
                                                        <input type="checkbox" class="form-check-input">
                                                        <i class="input-helper"></i>
                                                        <div class="d-flex">
                                                            <div class="wrapper todo-content">
                                                                <h6 class="mb-1 ellipsis">Please Checkout The Attachment</h6>
                                                                <p class="text-gray mb-0 ellipsor">03:00 PM Sat, 13 Jan 2018</p>
                                                                <span class="text-danger ellipsor">#HTML</span>
                                                            </div>
                                                            <div class="action-wrapper wrapper ml-auto d-flex align-items-center">
                                                                <i class="btn-close mdi mdi-close-circle-outline text-danger icon-md"></i>
                                                                <i class="btn-action mdi mdi-dots-vertical text-muted icon-md"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Payment Method</h5>
                                <div class="table-responsive">
                                    <table class="table center-aligned-table">
                                        <thead>
                                        <tr>
                                            <th class="border-bottom-0">ID</th>
                                            <th class="border-bottom-0">Assignee</th>
                                            <th class="border-bottom-0">Task Details</th>
                                            <th class="border-bottom-0">Payment Method</th>
                                            <th class="border-bottom-0">Payment Status</th>
                                            <th class="border-bottom-0">Amount</th>
                                            <th class="border-bottom-0">Tracking Number</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>#320</td>
                                            <td>Mark C.Diaz</td>
                                            <td>Support of thteme</td>
                                            <td>Credit card</td>
                                            <td><label class="badge badge-success">Approved</label></td>
                                            <td>$12,245</td>
                                            <td>JPBBN435893458</td>
                                        </tr>
                                        <tr>
                                            <td>#321</td>
                                            <td>Jose D</td>
                                            <td>Verify your email address !</td>
                                            <td>Internet banking</td>
                                            <td><label class="badge badge-warning">Pending</label></td>
                                            <td>$12,245</td>
                                            <td>BDYBN435893325</td>
                                        </tr>
                                        <tr>
                                            <td>#322</td>
                                            <td>Philips T</td>
                                            <td>Item support message send</td>
                                            <td>Credit card</td>
                                            <td><label class="badge badge-success">Approved</label></td>
                                            <td>$12,245</td>
                                            <td>JSNTN435884258</td>
                                        </tr>
                                        <tr>
                                            <td>#323</td>
                                            <td>Luke Pixel</td>
                                            <td>New submission on website</td>
                                            <td>Cash on delivery</td>
                                            <td><label class="badge badge-danger">Rejected</label></td>
                                            <td>$12,245</td>
                                            <td>JPABT435893678</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="d-flex align-items-center mt-4">
                                    <p class="mb-0 d-none d-md-block text-dark">Showing 1 to 20 of 20 entries</p>
                                    <ul class="pagination mb-0 ml-auto">
                                        <li class="page-item"><a class="page-link" href="#"><i class="mdi mdi-chevron-left"></i></a></li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                                        <li class="page-item"><a class="page-link" href="#"><i class="mdi mdi-chevron-right"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">The Current Chart</h5>
                                <canvas id="current-chart" height="100"></canvas>
                            </div>
                            <div class="border-top py-4 px-4">
                                <p class="mb-0 text-gray">Projects Status</p>
                                <div class="d-flex align-items-end">
                                    <h2 class="mb-0 display-2 font-weight-semibold text-success">76,533</h2>
                                    <p class="mb-2 ml-1 text-success">PCS</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Updates</h5>
                                <ul class="bullet-line-list">
                                    <li>
                                        <h6>User confirmation</h6>
                                        <p class="mb-0">Donec rutrum congue leo eget malesuada.</p>
                                        <p class="text-muted">
                                            <i class="mdi mdi-clock"></i>
                                            7 months ago.
                                        </p>
                                    </li>
                                    <li>
                                        <h6>Continuous evaluation</h6>
                                        <p class="mb-0">Vivamus suscipit tortor eget felis porttitor volutpat.</p>
                                        <p class="text-muted">
                                            <i class="mdi mdi-clock"></i>
                                            7 months ago.
                                        </p>
                                    </li>
                                    <li>
                                        <h6>Promotion</h6>
                                        <p class="mb-0">Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>
                                        <p class="text-muted">
                                            <i class="mdi mdi-clock"></i>
                                            7 months ago.
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title mb-4">Manage Tickets</h5>
                                <div class="fluid-container">
                                    <div class="row ticket-card mt-3 pb-2 border-bottom pb-3 mb-3">
                                        <div class="col-md-1">
                                            <img class="img-sm rounded-circle mb-4 mb-md-0" src="/admin/images/faces/face1.jpg" alt="profile image">
                                        </div>
                                        <div class="ticket-details col-md-9">
                                            <div class="d-flex">
                                                <p class="text-dark font-weight-bold mr-2 mb-0 no-wrap">James :</p>
                                                <p class="font-weight-medium mr-1 mb-0">[#23047]</p>
                                                <p class="font-weight-semibold mb-0 ellipsis">Donec rutrum congue leo eget malesuada.</p>
                                            </div>
                                            <p class="text-small text-gray mb-2">Donec rutrum congue leo eget malesuada. Quisque velit nisi, pretium ut lacinia in, elementum id enim vivamus.</p>
                                            <div class="row text-gray d-md-flex d-none">
                                                <div class="col-4 d-flex">
                                                    <p class="mb-0 mr-2 text-muted text-muted">Last responded :</p>
                                                    <p class="Last-responded mr-2 mb-0 text-muted text-muted">3 hours ago</p>
                                                </div>
                                                <div class="col-4 d-flex">
                                                    <p class="mb-0 mr-2 text-muted text-muted">Due in :</p>
                                                    <p class="Last-responded mr-2 mb-0 text-muted text-muted">2 Days</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ticket-actions col-md-2">
                                            <div class="btn-group dropdown">
                                                <button type="button" class="btn btn-success dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Manage
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#"><i class="fa fa-reply fa-fw"></i>Quick reply</a>
                                                    <a class="dropdown-item" href="#"><i class="fa fa-history fa-fw"></i>Another action</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#"><i class="fa fa-check text-success fa-fw"></i>Resolve Issue</a>
                                                    <a class="dropdown-item" href="#"><i class="fa fa-times text-danger fa-fw"></i>Close Issue</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row ticket-card mt-3 pb-2 border-bottom pb-3 mb-3">
                                        <div class="col-md-1">
                                            <img class="img-sm rounded-circle mb-4 mb-md-0" src="/admin/images/faces/face2.jpg" alt="profile image">
                                        </div>
                                        <div class="ticket-details col-md-9">
                                            <div class="d-flex">
                                                <p class="text-dark font-weight-bold mr-2 mb-0 no-wrap">Stella :</p>
                                                <p class="font-weight-medium mr-1 mb-0">[#23135]</p>
                                                <p class="font-weight-semibold mb-0 ellipsis">Curabitur aliquet quam id dui posuere blandit.</p>
                                            </div>
                                            <p class="text-small text-gray mb-2">Pellentesque in ipsum id orci porta dapibus. Sed porttitor lectus nibh. Curabitur non nulla sit amet nisl.</p>
                                            <div class="row text-gray d-md-flex d-none">
                                                <div class="col-4 d-flex">
                                                    <p class="mb-0 mr-2 text-muted">Last responded :</p>
                                                    <p class="Last-responded mr-2 mb-0 text-muted">3 hours ago</p>
                                                </div>
                                                <div class="col-4 d-flex">
                                                    <p class="mb-0 mr-2 text-muted">Due in :</p>
                                                    <p class="Last-responded mr-2 mb-0 text-muted">2 Days</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ticket-actions col-md-2">
                                            <div class="btn-group dropdown">
                                                <button type="button" class="btn btn-success dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Manage
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#"><i class="fa fa-reply fa-fw"></i>Quick reply</a>
                                                    <a class="dropdown-item" href="#"><i class="fa fa-history fa-fw"></i>Another action</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#"><i class="fa fa-check text-success fa-fw"></i>Resolve Issue</a>
                                                    <a class="dropdown-item" href="#"><i class="fa fa-times text-danger fa-fw"></i>Close Issue</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row ticket-card mt-3">
                                        <div class="col-md-1">
                                            <img class="img-sm rounded-circle mb-4 mb-md-0" src="/admin/images/faces/face3.jpg" alt="profile image">
                                        </div>
                                        <div class="ticket-details col-md-9">
                                            <div class="d-flex">
                                                <p class="text-dark font-weight-bold mr-2 mb-0 no-wrap">John Doe :</p>
                                                <p class="font-weight-medium mr-1 mb-0">[#23246]</p>
                                                <p class="font-weight-semibold mb-0 ellipsis">Mauris blandit aliquet elit, eget tincidunt nibh pulvinar.</p>
                                            </div>
                                            <p class="text-small text-gray mb-2">Nulla quis lorem ut libero malesuada feugiat. Proin eget tortor risus. Lorem ipsum dolor sit amet.</p>
                                            <div class="row text-gray d-md-flex d-none">
                                                <div class="col-4 d-flex">
                                                    <p class="mb-0 mr-2 text-muted">Last responded :</p>
                                                    <p class="Last-responded mr-2 mb-0 text-muted">3 hours ago</p>
                                                </div>
                                                <div class="col-4 d-flex">
                                                    <p class="mb-0 mr-2 text-muted">Due in :</p>
                                                    <p class="Last-responded mr-2 mb-0 text-muted">2 Days</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ticket-actions col-md-2">
                                            <div class="btn-group dropdown">
                                                <button type="button" class="btn btn-success dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Manage
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#"><i class="fa fa-reply fa-fw"></i>Quick reply</a>
                                                    <a class="dropdown-item" href="#"><i class="fa fa-history fa-fw"></i>Another action</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#"><i class="fa fa-check text-success fa-fw"></i>Resolve Issue</a>
                                                    <a class="dropdown-item" href="#"><i class="fa fa-times text-danger fa-fw"></i>Close Issue</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:../../partials/_footer.html -->
            <footer class="footer">
                <div class="container-fluid clearfix">
                    <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018 <a href="http://www.urbanui.com/" target="_blank">Urbanui</a>. All rights reserved.</span>
                    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
                </div>
            </footer>
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

<!-- plugins:js -->
<script src="/admin/vendors/js/vendor.bundle.base.js"></script>
<script src="/admin/vendors/js/vendor.bundle.addons.js"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="/admin/js/off-canvas.js"></script>
<script src="/admin/js/hoverable-collapse.js"></script>
<script src="/admin/js/misc.js"></script>
<script src="/admin/js/settings.js"></script>
<script src="/admin/js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="/admin/js/dashboard.js"></script>
<!-- End custom js for this page-->
</body>


<!-- Mirrored from www.urbanui.com/radiant/jquery/pages/layout/sidebar-fixed.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 Sep 2018 08:31:23 GMT -->
</html>
