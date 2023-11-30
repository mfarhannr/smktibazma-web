    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/8cf86726f0.js" crossorigin="anonymous"></script>

    <aside
        class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
        id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
                aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href="{{ route('dashboard') }}">
                <img src="{{ asset('./img/logo-ct.png') }}" class="navbar-img h-100" alt="logo-ct">
                <span class="ms-1 font-weight-bold">Bazma Web</span>
            </a>
        </div>
        <hr class="horizontal dark mt-0">
        <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'dashboard' ? 'active' : '' }}"
                        href="{{ route('dashboard') }}">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-shop text-dark text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ str_contains(request()->url(), 'admin-management') == true ? 'active' : '' }}"
                        href=
                    "{{ route('page', ['page' => 'admin-management']) }}">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-circle-08 text-dark text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Admin Management</span>
                    </a>
                </li>
                
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#kesiswaan" class="nav-link " aria-controls="kesiswaan"
                        role="button" aria-expanded="true">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-badge text-dark text-sm opacity-10"
                                aria-hidden="true"></i>
                        </div>
                        <span class="nav-link-text ms-1">Kesiswaan</span>
                    </a>
                    <div class="collapse show " id="kesiswaan" style="">
                        <ul class="nav ms-4">
                            <li class="nav-item ">
                                <a class="nav-link {{ str_contains(request()->url(), 'admin-kegiatan') == true ? 'active' : '' }} "
                                    href="{{ route('page', ['page' => 'admin-kegiatan']) }}">
                                    <span class="sidenav-normal ps-2">Kegiatan </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link {{ str_contains(request()->url(), 'admin-prestasi') == true ? 'active' : '' }} "
                                    href="{{ route('page', ['page' => 'admin-prestasi']) }}">
                                    <span class="sidenav-normal ps-2">Prestasi</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#postingan" class="nav-link " aria-controls="postingan"
                        role="button" aria-expanded="true">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-folder-17 text-dark text-sm opacity-10"
                                aria-hidden="true"></i>
                        </div>
                        <span class="nav-link-text ms-1">Postingan</span>
                    </a>
                    <div class="collapse show " id="postingan" style="">
                        <ul class="nav ms-4">
                            <li class="nav-item ">
                                <a class="nav-link {{ str_contains(request()->url(), 'admin-kategori-postingan') == true ? 'active' : '' }} "
                                    href="{{ route('page', ['page' => 'admin-kategori-postingan']) }}">
                                    <span class="sidenav-normal ps-2">Kategori Postingan </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link {{ str_contains(request()->url(), 'admin-postingan') == true ? 'active' : '' }} "
                                    href="{{ route('page', ['page' => 'admin-postingan']) }}">
                                    <span class="sidenav-normal ps-2">Postingan</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ str_contains(request()->url(), 'kategori-postingan') == true ? 'active' : '' }}"
                        href="{{ route('page', ['page' => 'kategori-postingan']) }}">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-bullet-list-67 text-dark text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Kategori Postingan</span>
                    </a>
                </li>
                {{-- <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Pages</h6>
            </li> --}}

                <li class="nav-item">
                    <a class="nav-link {{ str_contains(request()->url(), 'tables') == true ? 'active' : '' }}"
                        href=
                    "{{ route('page', ['page' => 'tables']) }}">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-calendar-grid-58 text-dark text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Postingan</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ str_contains(request()->url(), 'katalogtalenta') == true ? 'active' : '' }}"
                        href=
                    "{{ route('page', ['page' => 'billing']) }}">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-credit-card text-dark text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Katalog Talent</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'virtual-reality' ? 'active' : '' }}" href=#
                        {{-- "{{ route('virtual-reality') }}" --}}>
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-app text-dark text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">PPDB</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'rtl' ? 'active' : '' }}" href=#
                        {{-- "{{ route('rtl') }}" --}}>
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-world-2 text-dark text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Galeri</span>
                    </a>
                </li>
                {{-- <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'profile-static' ? 'active' : '' }}"
                    href="{{ route('profile-static') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Profile</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{ route('sign-in-static') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-single-copy-04 text-warning text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Sign In</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{ route('sign-up-static') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-collection text-info text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Sign Up</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="sidenav-footer mx-3 ">
        <div class="card card-plain shadow-none" id="sidenavCard">
            <img class="w-50 mx-auto" src="/img/illustrations/icon-documentation-warning.svg"
                alt="sidebar_illustration">
            <div class="card-body text-center p-3 w-100 pt-0">
                <div class="docs-info">
                    <h6 class="mb-0">Need help?</h6>
                    <p class="text-xs font-weight-bold mb-0">Please check our docs</p>
                </div>
            </div>
        </div>
        <a href="/docs/bootstrap/overview/argon-dashboard/index.html" target="_blank"
            class="btn btn-dark btn-sm w-100 mb-3">Documentation</a>
        <a class="btn btn-primary btn-sm mb-0 w-100"
            href="https://www.creative-tim.com/product/argon-dashboard-pro-laravel" target="_blank"
            type="button">Upgrade to PRO</a>
    </div> --}}
    </aside>
