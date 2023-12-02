<div class="navbar-right">
    <ul class="navbar-right__menu">
        <!-- ends: .nav-flag-select -->
        <li class="nav-author">
            <div class="dropdown-custom">
                <a href="javascript:;" class="nav-item-toggle">
                    <img src="{{ asset('img/author-nav.jpg') }}" alt="" class="rounded-circle" />
                    <span class="nav-item__title">Danial<i class="las la-angle-down nav-item__arrow"></i></span>
                </a>
                <div class="dropdown-parent-wrapper">
                    <div class="dropdown-wrapper">
                        <div class="nav-author__info">
                            <div class="author-img">
                                <img src="{{ asset('img/author-nav.jpg') }}" alt="" class="rounded-circle" />
                            </div>
                            <div>
                                <h6>Rabbi Islam Rony</h6>
                                <span>UI Designer</span>
                            </div>
                        </div>
                        <div class="nav-author__options">
                            <ul>
                                <li>
                                    <a href="">
                                        <i class="uil uil-user"></i>
                                        Profile</a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="uil uil-setting"></i>
                                        Settings</a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="uil uil-key-skeleton"></i>
                                        Billing</a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="uil uil-users-alt"></i>
                                        Activity</a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="uil uil-bell"></i>
                                        Help</a>
                                </li>
                            </ul>
                            <a href="" class="nav-author__signout">
                                <i class="uil uil-sign-out-alt"></i>
                                Sign Out</a>
                        </div>
                    </div>
                    <!-- ends: .dropdown-wrapper -->
                </div>
            </div>
        </li>
        <!-- ends: .nav-author -->
    </ul>
    <!-- ends: .navbar-right__menu -->
    <div class="navbar-right__mobileAction d-md-none">
        <a href="#" class="btn-search">
            <img src="{{ asset('img/svg/search.svg') }}" alt="search" class="svg feather-search" />
            <img src="{{ asset('img/svg/x.svg') }}" alt="x" class="svg feather-x" />
        </a>
        <a href="#" class="btn-author-action">
            <img class="svg" src="{{ asset('img/svg/more-vertical.svg') }}" alt="more-vertical" />
        </a>
    </div>
</div>
