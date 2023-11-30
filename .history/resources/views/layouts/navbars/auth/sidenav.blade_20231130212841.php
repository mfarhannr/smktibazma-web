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
                    <a class="nav-link {{ str_contains(request()->url(), 'admin-katalog-talent') == true ? 'active' : '' }}"
                        href="{{ route('page', ['page' => 'admin-katalog-talent']) }}">
                        <div
                            class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-bullet-list-67 text-dark text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Kategori Postingan</span>
                    </a>
                </li>
    </aside>
