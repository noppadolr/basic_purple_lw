<div class="app-menu">  

    <!-- Brand Logo -->
    <div class="logo-box">
        <!-- Brand Logo Light -->
        <a href="index.html" class="logo-light">
            <img src="{{ asset('admin/assets/images/logo-light.png') }}" alt="logo" class="logo-lg">
            <img src="{{ asset('admin/assets/images/logo-sm.png') }}" alt="small logo" class="logo-sm">
        </a>

        <!-- Brand Logo Dark -->
        <a href="index.html" class="logo-dark">
            <img src="{{ asset('admin/assets/images/logo-dark.png') }}" alt="dark logo" class="logo-lg">
            <img src="{{ asset('admin/assets/images/logo-sm.png') }}" alt="small logo" class="logo-sm">
        </a>
    </div>

    <!-- menu-left -->
    <div class="scrollbar">

        <!-- User box -->
        <div class="user-box text-center">
            <img src="{{ asset('admin/assets/images/users/user-1.jpg') }}" alt="user-img" title="Mat Helme" class="rounded-circle avatar-md">
            <div class="dropdown">
                <a href="javascript: void(0);" class="dropdown-toggle h5 mb-1 d-block" data-bs-toggle="dropdown">Geneva Kennedy</a>
                <div class="dropdown-menu user-pro-dropdown">

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-user me-1"></i>
                        <span>My Account</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-settings me-1"></i>
                        <span>Settings</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-lock me-1"></i>
                        <span>Lock Screen</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-log-out me-1"></i>
                        <span>Logout</span>
                    </a>

                </div>
            </div>
            <p class="text-muted mb-0">Admin Head</p>
        </div>

        <!--- Menu -->
        <ul class="menu">

            <li class="menu-title">Navigation</li>

            {{-- <li class="menu-item">
                <a href="#menuDashboards" data-bs-toggle="collapse" class="menu-link">
                    <span class="menu-icon"><i data-feather="airplay"></i></span>
                    <span class="menu-text"> Dashboards </span>
                    <span class="badge bg-success rounded-pill ms-auto">4</span>
                </a>
                <div class="collapse" id="menuDashboards">
                    <ul class="sub-menu">
                        <li class="menu-item">
                            <a href="index.html" class="menu-link">
                                <span class="menu-text">Dashboard 1</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="dashboard-2.html" class="menu-link">
                                <span class="menu-text">Dashboard 2</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="dashboard-3.html" class="menu-link">
                                <span class="menu-text">Dashboard 3</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="dashboard-4.html" class="menu-link">
                                <span class="menu-text">Dashboard 4</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li> --}}

            <li class="menu-item">
                <a href="{{ route('admin.dashboard') }}" class="menu-link">
                    <span class="menu-icon"><i data-feather="airplay"></i></span>
                    <span class="menu-text"> Dashboard </span>
                </a>
            </li>

            <li class="menu-title">Apps</li>

            <li class="menu-item">
                <a href="#menuEcommerce" data-bs-toggle="collapse" class="menu-link">
                    <span class="menu-icon"><i data-feather="shopping-cart"></i></span>
                    <span class="menu-text"> Ecommerce </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="menuEcommerce">
                    <ul class="sub-menu">
                        <li class="menu-item">
                            <a href="ecommerce-dashboard.html" class="menu-link">
                                <span class="menu-text">Dashboard</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="ecommerce-products.html" class="menu-link">
                                <span class="menu-text">Products</span>
                            </a>
                        </li>

                    </ul>
                </div>
            </li>

            <li class="menu-item">
                <a href="#menuSupplier" data-bs-toggle="collapse" class="menu-link">
                    <span class="menu-icon"><i data-feather="fas fa-address-card"></i></span>
                    <span class="menu-text"> Manage Supplier </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="menuSupplier">
                    <ul class="sub-menu">
                        <li class="menu-item">
                            <a href="#" class="menu-link">
                                <span class="menu-text">Supplier All</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="ecommerce-products.html" class="menu-link">
                                <span class="menu-text">Products</span>
                            </a>
                        </li>

                    </ul>
                </div>
            </li>

            <li class="menu-title">Custom</li>

            <li class="menu-item">
                <a href="#menuAuth" data-bs-toggle="collapse" class="menu-link">
                    <span class="menu-icon"><i data-feather="file-text"></i></span>
                    <span class="menu-text"> Auth Pages </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse collapse-md" id="menuAuth">
                    <ul class="sub-menu">
                        <li class="menu-item">
                            <a href="auth-login.html" class="menu-link">
                                <span class="menu-text">Log In</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="auth-login-2.html" class="menu-link">
                                <span class="menu-text">Log In 2</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="auth-register.html" class="menu-link">
                                <span class="menu-text">Register</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="auth-register-2.html" class="menu-link">
                                <span class="menu-text">Register 2</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="auth-signin-signup.html" class="menu-link">
                                <span class="menu-text">Signin - Signup</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="auth-signin-signup-2.html" class="menu-link">
                                <span class="menu-text">Signin - Signup 2</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="auth-recoverpw.html" class="menu-link">
                                <span class="menu-text">Recover Password</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="auth-recoverpw-2.html" class="menu-link">
                                <span class="menu-text">Recover Password 2</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="auth-lock-screen.html" class="menu-link">
                                <span class="menu-text">Lock Screen</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="auth-lock-screen-2.html" class="menu-link">
                                <span class="menu-text">Lock Screen 2</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="auth-logout.html" class="menu-link">
                                <span class="menu-text">Logout</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="auth-logout-2.html" class="menu-link">
                                <span class="menu-text">Logout 2</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="auth-confirm-mail.html" class="menu-link">
                                <span class="menu-text">Confirm Mail</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="auth-confirm-mail-2.html" class="menu-link">
                                <span class="menu-text">Confirm Mail 2</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>



            <li class="menu-title">Components</li>

            <li class="menu-item">
                <a href="#menuExtendedui" data-bs-toggle="collapse" class="menu-link">
                    <span class="menu-icon"><i data-feather="layers"></i></span>
                    <span class="menu-text"> Extended UI </span>
                    <span class="badge bg-info ms-auto">Hot</span>
                </a>
                <div class="collapse" id="menuExtendedui">
                    <ul class="sub-menu">
                        <li class="menu-item">
                            <a href="extended-nestable.html" class="menu-link">
                                <span class="menu-text">Nestable List</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="extended-range-slider.html" class="menu-link">
                                <span class="menu-text">Range Slider</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="extended-dragula.html" class="menu-link">
                                <span class="menu-text">Dragula</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="extended-animation.html" class="menu-link">
                                <span class="menu-text">Animation</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="extended-sweet-alert.html" class="menu-link">
                                <span class="menu-text">Sweet Alert</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="extended-tour.html" class="menu-link">
                                <span class="menu-text">Tour Page</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="extended-scrollspy.html" class="menu-link">
                                <span class="menu-text">Scrollspy</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="extended-loading-buttons.html" class="menu-link">
                                <span class="menu-text">Loading Buttons</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>


        </ul>
        <!--- End Menu -->
        <div class="clearfix"></div>
    </div>
</div>