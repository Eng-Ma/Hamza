<div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
<div class="sticky">
    <aside class="app-sidebar sidebar-scroll">
        <div class="main-sidebar-header active">
            <a class="desktop-logo logo-light active" href="{{route('web.index')}}"><img
                    src="{{ asset('adminassets/assets/img/brand/Luma.jpg') }}" class="main-logo" alt="logo"></a>
            <a class="desktop-logo logo-dark active" href=""><img
                    src="{{ asset('adminassets/assets/img/brand/Luma.jpg') }}" class="main-logo"
                    alt="logo"></a>
            <a class="logo-icon mobile-logo icon-light active" href="{{route('web.index')}}"><img
                    src="{{ asset('adminassets/assets/img/brand/Luma.jpg') }}" alt="logo"></a>
            <a class="logo-icon mobile-logo icon-dark active" href="Luma.jpg"><img
                    src="{{ asset('adminassets/assets/img/brand/Luma.jpg') }}" alt="logo"></a>
        </div>
        <div class="main-sidemenu">
            <div class="app-sidebar__user clearfix">
                <div class="dropdown user-pro-body">
                    <div class="main-img-user avatar-xl">
                        <img alt="user-img" src="{{ asset('adminassets/assets/img/users/6.jpg') }}"><span
                            class="avatar-status profile-status bg-green"></span>
                    </div>
                    <div class="user-info">
                        <h4 class="fw-semibold mt-3 mb-0">{{ auth()->user()->name }}</h4>
                        <span class="mb-0 text-muted">{{ auth()->user()->email }}</span>
                    </div>
                </div>
            </div>
            <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                    width="24" height="24" viewBox="0 0 24 24">
                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                </svg></div>
            <ul class="side-menu">
                <li class="side-item side-item-category">Main</li>
                <li class="slide">
                    <a class="side-menu__item" href="{{ route('admin.dashboard.index') }}"><svg
                            xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                            <path d="M0 0h24v24H0V0z" fill="none" />
                            <path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3" />
                            <path
                                d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z" />
                        </svg><span class="side-menu__label">Dashboard</span><span
                            class="badge bg-success text-light bg-side-text">1</span></a>
                </li>
                <li class="slide {{ request()->routeIs('admin.categories.*') ? 'is-expanded' : '' }}">
                    <a class="side-menu__item {{ request()->routeIs('admin.categories.*') ? 'active' : '' }}"
                        data-bs-toggle="slide" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                            <path d="M0 0h24v24H0V0z" fill="none" />
                            <path d="M12 4c-4.42 0-8 3.58-8 8s3.58 8
                   8 8 8-3.58 8-8-3.58-8-8-8zm3.5
                   4c.83 0 1.5.67 1.5
                   1.5s-.67 1.5-1.5
                   1.5-1.5-.67-1.5-1.5.67-1.5
                   1.5-1.5zm-7 0c.83 0 1.5.67
                   1.5 1.5S9.33 11 8.5 11
                   7 10.33 7 9.5 7.67 8
                   8.5 8zm3.5 9.5c-2.33 0-4.32-1.45-5.12-3.5h1.67
                   c.7 1.19 1.97 2 3.45 2s2.76-.81
                   3.45-2h1.67c-.8 2.05-2.79
                   3.5-5.12 3.5z" opacity=".3" />
                            <circle cx="15.5" cy="9.5" r="1.5" />
                            <circle cx="8.5" cy="9.5" r="1.5" />
                            <path d="M12 16c-1.48 0-2.75-.81-3.45-2H6.88
                   c.8 2.05 2.79 3.5 5.12 3.5s4.32-1.45
                   5.12-3.5h-1.67c-.69 1.19-1.97
                   2-3.45 2zm-.01-14C6.47 2 2 6.48
                   2 12s4.47 10 9.99 10C17.52 22
                   22 17.52 22 12S17.52 2 11.99
                   2zM12 20c-4.42 0-8-3.58-8-8s3.58-8
                   8-8 8 3.58 8 8-3.58 8-8 8z" />
                        </svg>
                        <span class="side-menu__label">Categories</span>
                        <i class="angle fe fe-chevron-down"></i>
                    </a>
                    <ul class="slide-menu">
                        <li>
                            <a class="slide-item {{ request()->routeIs('admin.categories.index') ? 'active' : '' }}"
                                href="{{ route('admin.categories.index') }}">
                                All Categories
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="slide {{ request()->routeIs('admin.products.*') ? 'is-expanded' : '' }}">
                    <a class="side-menu__item {{ request()->routeIs('admin.products.*') ? 'active' : '' }}"
                        data-bs-toggle="slide" href="javascript:void(0);">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                            <path d="M0 0h24v24H0V0z" fill="none" />
                            <path d="M21 16V8c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2v8c0
                     1.1.9 2 2 2h14c1.1 0 2-.9 2-2zm-2 0H5V8h14v8zM7
                     10h10v2H7v-2z" />
                        </svg>
                        <span class="side-menu__label">Products</span>
                        <i class="angle fe fe-chevron-down"></i>
                    </a>
                    <ul class="slide-menu">
                        <li class="side-menu__label1"><a href="javascript:void(0);">Management</a></li>
                        <li><a class="slide-item {{ request()->routeIs('admin.products.index') ? 'active' : '' }}"
                                href="{{ route('admin.products.index') }}">All Products</a></li>

                    </ul>
                </li>
                <li class="slide {{ request()->routeIs('admin.orders.*') ? 'is-expanded' : '' }}">
                    <a class="side-menu__item {{ request()->routeIs('admin.orders.*') ? 'active' : '' }}"
                        data-bs-toggle="slide" href="javascript:void(0);">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                            <path d="M0 0h24v24H0V0z" fill="none" />
                            <path d="M3 4v16h18V4H3zm16 14H5V6h14v12zm-8-2h6v-2h-6v2zm0-4h6v-2h-6v2zm-4
                     4h2v-2H7v2zm0-4h2v-2H7v2z" />
                        </svg>
                        <span class="side-menu__label">Orders</span>
                        <i class="angle fe fe-chevron-down"></i>
                    </a>
                    <ul class="slide-menu">
                        <li class="side-menu__label1"><a href="javascript:void(0);">Management</a></li>
                        <li><a class="slide-item {{ request()->routeIs('admin.orders.index') ? 'active' : '' }}"
                                href="{{ route('admin.orders.index') }}">All Orders</a></li>

                    </ul>
                </li>
                <li class="slide {{ request()->routeIs('admin.abouts.*') ? 'is-expanded' : '' }}">
                    <a class="side-menu__item {{ request()->routeIs('admin.abouts.*') ? 'active' : '' }}"
                        data-bs-toggle="slide" href="javascript:void(0);">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                            <path d="M0 0h24v24H0V0z" fill="none" />
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10
                     10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8
                     8-8 8 3.59 8 8-3.59 8-8 8zm-1-13h2v2h-2zm0 4h2v6h-2z" />
                        </svg>
                        <span class="side-menu__label">Abouts</span>
                        <i class="angle fe fe-chevron-down"></i>
                    </a>
                    <ul class="slide-menu">
                        <li class="side-menu__label1"><a href="javascript:void(0);">Charts</a></li>
                        <li><a class="slide-item {{ request()->routeIs('admin.abouts.index') ? 'active' : '' }}"
                                href="{{ route('admin.abouts.index') }}">All Abouts</a></li>

                    </ul>
                </li>
                <li class="slide {{ request()->routeIs('admin.articles.*') ? 'is-expanded' : '' }}">
                    <a class="side-menu__item {{ request()->routeIs('admin.articles.*') ? 'active' : '' }}"
                        data-bs-toggle="slide" href="javascript:void(0);">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                            <path d="M0 0h24v24H0V0z" fill="none" />
                            <path d="M4 4h16v16H4V4zm14 14V6H6v12h12zm-10-8h8v2H8v-2zm0 4h8v2H8v-2zm0-8h8v2H8V4z" />
                        </svg>
                        <span class="side-menu__label">Articles</span>
                        <i class="angle fe fe-chevron-down"></i>
                    </a>
                    <ul class="slide-menu">
                        <li class="side-menu__label1"><a href="javascript:void(0);">Management</a></li>
                        <li><a class="slide-item {{ request()->routeIs('admin.articles.index') ? 'active' : '' }}"
                                href="{{ route('admin.articles.index') }}">All Articles</a></li>

                    </ul>
                </li>
                <li class="slide {{ request()->routeIs('admin.angeles.*') ? 'is-expanded' : '' }}">
                    <a class="side-menu__item {{ request()->routeIs('admin.angeles.*') ? 'active' : '' }}"
                        data-bs-toggle="slide" href="javascript:void(0);">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                            <path d="M0 0h24v24H0V0z" fill="none" />
                            <path d="M12 2c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2
                     .9-2 2-2zm-6 9c1.5 0 3-2 6-2s4.5 2 6 2c1 0 2 .9
                     2 2v4c0 1.1-.9 2-2 2-1.5 0-3-2-6-2s-4.5 2-6 2c-1
                     0-2-.9-2-2v-4c0-1.1.9-2 2-2z" />
                        </svg>
                        <span class="side-menu__label">Angeles</span>
                        <i class="angle fe fe-chevron-down"></i>
                    </a>
                    <ul class="slide-menu">
                        <li class="side-menu__label1"><a href="javascript:void(0);">Management</a></li>
                        <li><a class="slide-item {{ request()->routeIs('admin.angeles.index') ? 'active' : '' }}"
                                href="{{ route('admin.angeles.index') }}">All Angeles</a></li>

                    </ul>
                </li>
                <li class="slide {{ request()->routeIs('admin.faqs.*') ? 'is-expanded' : '' }}">
                    <a class="side-menu__item {{ request()->routeIs('admin.faqs.*') ? 'active' : '' }}"
                        data-bs-toggle="slide" href="javascript:void(0);">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                            <path d="M0 0h24v24H0V0z" fill="none" />
                            <path d="M12 2C6.48 2 2 6.48 2 12c0 4.41 2.69 8.15
                     6.5 9.5V22l3.5-2h.5c5.52 0 10-4.48 10-10S17.52 2
                     12 2zm1 15h-2v-2h2v2zm1.07-7.75l-.9.92C12.45
                     10.9 12 11.5 12 13h-2v-.5c0-1 .45-1.5 1.17-2.22l1.24-1.26c.37-.36.59-.86.59-1.41
                     0-1.1-.9-2-2-2s-2 .9-2 2H8c0-2.21 1.79-4 4-4s4 1.79 4 4c0 .88-.36 1.68-.93 2.25z" />
                        </svg>
                        <span class="side-menu__label">FAQs</span>
                        <i class="angle fe fe-chevron-down"></i>
                    </a>
                    <ul class="slide-menu">
                        <li class="side-menu__label1"><a href="javascript:void(0);">Management</a></li>
                        <li><a class="slide-item {{ request()->routeIs('admin.faqs.index') ? 'active' : '' }}"
                                href="{{ route('admin.faqs.index') }}">All FAQs</a></li>

                    </ul>
                </li>
                <li class="slide {{ request()->routeIs('admin.users.*') ? 'is-expanded' : '' }}">
                    <a class="side-menu__item {{ request()->routeIs('admin.users.*') ? 'active' : '' }}"
                        data-bs-toggle="slide" href="javascript:void(0);">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                            <path d="M0 0h24v24H0V0z" fill="none" />
                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4
                     1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8
                     4v2h16v-2c0-2.66-5.33-4-8-4z" />
                        </svg>
                        <span class="side-menu__label">Users</span>
                        <i class="angle fe fe-chevron-down"></i>
                    </a>
                    <ul class="slide-menu">
                        <li class="side-menu__label1"><a href="javascript:void(0);">Management</a></li>
                        <li><a class="slide-item {{ request()->routeIs('admin.users.index') ? 'active' : '' }}"
                                href="{{ route('admin.users.index') }}">All Users</a></li>

                    </ul>
                </li>
                <li class="slide {{ request()->routeIs('admin.contacts.*') ? 'is-expanded' : '' }}">
                    <a class="side-menu__item {{ request()->routeIs('admin.contacts.*') ? 'active' : '' }}"
                        data-bs-toggle="slide" href="javascript:void(0);">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                            <path d="M0 0h24v24H0V0z" fill="none" />
                            <path d="M21 4H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2
                     2h18c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0
                     14H3V6h18v12zm-9-9c1.1 0 2 .9 2 2s-.9 2-2
                     2-2-.9-2-2 .9-2 2-2zm0 4c2.67 0 8 1.34 8
                     4v1H4v-1c0-2.66 5.33-4 8-4z" />
                        </svg>
                        <span class="side-menu__label">Contacts</span>
                        <i class="angle fe fe-chevron-down"></i>
                    </a>
                    <ul class="slide-menu">
                        <li class="side-menu__label1"><a href="javascript:void(0);">Management</a></li>
                        <li><a class="slide-item {{ request()->routeIs('admin.contacts.index') ? 'active' : '' }}"
                                href="{{ route('admin.contacts.index') }}">All Contacts</a></li>

                    </ul>
                </li>

                <li class="slide {{ request()->routeIs('admin.settings.*') ? 'is-expanded' : '' }}">
                    <a class="side-menu__item {{ request()->routeIs('admin.settings.*') ? 'active' : '' }}"
                        data-bs-toggle="slide" href="javascript:void(0);">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                            <path d="M0 0h24v24H0V0z" fill="none" />
                            <path d="M19.43 12.98c.04-.32.07-.66.07-1s-.03-.68-.07-1l2.11-1.65a.5.5
                     0 0 0 .11-.64l-2-3.46a.5.5 0 0 0-.61-.22l-2.49 1a7.007 7.007
                     0 0 0-1.73-1l-.38-2.65A.5.5 0 0 0 13 2h-2c-.25 0-.46.18-.49.42l-.38
                     2.65c-.63.25-1.21.58-1.73 1l-2.49-1a.5.5 0 0 0-.61.22l-2
                     3.46c-.14.24-.09.55.11.64L4.57 11c-.04.32-.07.66-.07 1s.03.68.07
                     1l-2.11 1.65a.5.5 0 0 0-.11.64l2 3.46c.14.24.42.34.61.22l2.49-1c.52.42
                     1.1.76 1.73 1l.38 2.65c.03.24.24.42.49.42h2c.25 0 .46-.18.49-.42l.38-2.65c.63-.25
                     1.21-.58 1.73-1l2.49 1c.19.12.47.02.61-.22l2-3.46a.5.5 0 0 0-.11-.64l-2.11-1.65zM12
                     15.5c-1.93 0-3.5-1.57-3.5-3.5s1.57-3.5 3.5-3.5 3.5 1.57 3.5 3.5-1.57 3.5-3.5 3.5z" />
                        </svg>
                        <span class="side-menu__label">Settings</span>
                        <i class="angle fe fe-chevron-down"></i>
                    </a>
                    <ul class="slide-menu">
                        <li class="side-menu__label1"><a href="javascript:void(0);">Management</a></li>
                        <li><a class="slide-item {{ request()->routeIs('admin.settings.index') ? 'active' : '' }}"
                                href="{{ route('admin.settings.index') }}">General Settings</a></li>

                    </ul>
                </li>

            </ul>
            <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                    width="24" height="24" viewBox="0 0 24 24">
                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                </svg></div>
        </div>
    </aside>
</div>
