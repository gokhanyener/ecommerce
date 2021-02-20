<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <div class="nav-link">
                <div class="profile-image"><img src="/admin/images/faces/face1.jpg" alt="image"/> <span
                        class="online-status online"></span></div>
                <div class="profile-name">
                    <p class="name">Sebastian Brayden</p>
                    <p class="designation">UI/UX Designer</p>
                </div>
                <div class="notification-panel mt-4">
                    <span><i class="mdi mdi-settings"></i></span>
                    <span class="count-wrapper"><i class="mdi mdi-bell"></i><span
                            class="count top-right bg-warning">4</span></span>
                    <span><i class="mdi mdi-email"></i></span>
                </div>
            </div>
        </li>

        <li class="nav-item"><a class="nav-link" href="{{route('admin.dashboard')}}"> <img class="menu-icon"
                                                                               src="/admin/images/menu_icons/01.png"
                                                                               alt="menu icon"> <span
                    class="menu-title">Dashboard</span></a></li>

        <li class="nav-item">
            <a class="nav-link" href="{{route('admin.category')}}"
               aria-controls="page-layouts"> <img class="menu-icon" src="/admin/images/menu_icons/02.png"
                                                  alt="menu icon"> <span
                    class="menu-title">Categories</span></a>

        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{route('admin.product')}}"
               aria-controls="page-layouts"> <img class="menu-icon" src="/admin/images/menu_icons/03.png"
                                                  alt="menu icon"> <span
                    class="menu-title">Products</span></a>

        </li>

    </ul>
</nav>
