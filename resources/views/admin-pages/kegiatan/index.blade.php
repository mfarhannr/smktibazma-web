@extends('layouts.app')

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Kegiatan'])
    <div class="row mt-4 mx-4">
        <div class="col-12">

            <div class="card mb-4">
                <div class="card-header pc-0 d-flex mb-0 justify-content-between">
                    <h5 class=" mb-0 text-center">Kegiatan</h5>
                    <a href="/admin-kegiatan/create" class="text-center mb-0 btn bg-gradient-dark btn-sm">Tambah
                        Kegiatan</a>
                </div>

                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                        style="width: 10%">
                                        No
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                        style="width: 25%">
                                        Judul
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                        style="width: 25%">
                                        Gambar
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                        style="width: 25%">
                                        Deskripsi</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                        style="width: 15%">
                                        Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @foreach ($kegiatan as $item)
                                    <tr>
                                        <td>
                                            <h6 class="text-center mb-0 mx-3 text-sm">{{$i}}</h6>

                                        </td>
                                        <td>
                                            <h6 class="text-center mb-0 mx-3 text-sm">{{ $item->judul }}</h6>

                                        </td>
                                        <td>
                                            <div class="text-center">
                                                <img src="{{ asset('img/' . $item->gambar) }}"
                                                    class="border-radius-lg shadow-sm height-100 w-auto" alt="">
                                            </div>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <p class="text-sm font-weight-bold mb-0">{{ $item->deskripsi }}</p>
                                        </td>
                                        <td class="align-middle text-center">
                                            <div class="d-flex justify-content-center align-items-center">
                                                <form action="/admin-kegiatan/{{ $item->id }}/edit" method="PUT"
                                                    class="text-center mx-2">
                                                    @csrf
                                                    <button class="btn btn-xs btn-secondary mb-0 font-weight-bold text-xs">
                                                        <span class="btn-inner--icon"><i
                                                                class="fa-regular fa-pen-to-square"></i></span>
                                                        <span class="btn-inner--text"> Edit</span>
                                                    </button>
                                                </form>
                                                <form action="/admin-kegiatan/{{ $item->id }}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-xs btn-danger mb-0 font-weight-bold text-xs">
                                                        <span class="btn-inner--icon"><i
                                                                class="fas fa-trash-alt"></i></span>
                                                        <span class="btn-inner--text"> Delete</span>
                                                    </button>
                                                </form>
                                                </span>
                                            </div>
                                        </td>
                                    </tr>
                                    @php
                                        $i++;
                                    @endphp
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-12">
                <div class="card">

                    <div class="card-header d-flex justify-content-between">
                        <h5 class="mb-0">Users Management</h5>
                        <a href="https://argon-dashboard-pro-laravel.creative-tim.com/user-management/new"
                            class="btn bg-gradient-dark btn-sm float-end mb-0">Add User</a>
                    </div>

                    <div class="table-responsive">
                        <div
                            class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-height fixed-columns">
                            <div class="dataTable-top">
                                <div class="dataTable-dropdown"><label><select class="dataTable-selector">
                                            <option value="5">5</option>
                                            <option value="10" selected="">10</option>
                                            <option value="15">15</option>
                                            <option value="20">20</option>
                                            <option value="25">25</option>
                                        </select> entries per page</label></div>
                                <div class="dataTable-search"><input class="dataTable-input" placeholder="Search..."
                                        type="text"></div>
                            </div>
                            <div class="dataTable-container" style="height: 415.641px;">
                                <table class="table table-flush dataTable-table" id="datatable-basic">
                                    <thead class="thead-light">
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                                data-sortable="false" style="width: 16.9959%;">
                                                Avatar
                                            </th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                                data-sortable="" style="width: 18.6954%;"><a href="#"
                                                    class="dataTable-sorter">
                                                    Name
                                                </a></th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                                data-sortable="" style="width: 21.4573%;"><a href="#"
                                                    class="dataTable-sorter">
                                                    Email
                                                </a></th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                                data-sortable="" style="width: 11.8971%;"><a href="#"
                                                    class="dataTable-sorter">
                                                    Role
                                                </a></th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 desc"
                                                data-sortable="" style="width: 20.8199%;"><a href="#"
                                                    class="dataTable-sorter">
                                                    Creation Date
                                                </a></th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                                data-sortable="false" style="width: 10.0913%;">
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-sm font-weight-normal">
                                                <span class="my-2 text-xs">
                                                    <img src="http://argon-dashboard-pro-laravel.creative-tim.com/avatars/team-1.jpg"
                                                        alt="bruce" class="border-radius-lg shadow-sm height-100 w-auto">
                                                </span>
                                            </td>
                                            <td class="text-sm font-weight-normal">Admin
                                                Admin</td>
                                            <td class="text-sm font-weight-normal">admin@argon.com</td>
                                            <td class="text-sm font-weight-normal">Admin</td>
                                            <td class="text-sm font-weight-normal">2023-11-16 06:15:02</td>
                                            <td class="text-sm">
                                                <span class="d-flex">
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-sm font-weight-normal">
                                                <span class="my-2 text-xs">
                                                    <img src="http://argon-dashboard-pro-laravel.creative-tim.com/avatars/team-2.jpg"
                                                        alt="bruce" class="border-radius-lg shadow-sm height-100 w-auto">
                                                </span>
                                            </td>
                                            <td class="text-sm font-weight-normal">Creator
                                                Creator</td>
                                            <td class="text-sm font-weight-normal">creator@argon.com</td>
                                            <td class="text-sm font-weight-normal">Creator</td>
                                            <td class="text-sm font-weight-normal">2023-11-16 06:15:02</td>
                                            <td class="text-sm">
                                                <span class="d-flex">
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-sm font-weight-normal">
                                                <span class="my-2 text-xs">
                                                    <img src="http://argon-dashboard-pro-laravel.creative-tim.com/avatars/team-3.jpg"
                                                        alt="bruce" class="border-radius-lg shadow-sm height-100 w-auto">
                                                </span>
                                            </td>
                                            <td class="text-sm font-weight-normal">Member
                                                Member</td>
                                            <td class="text-sm font-weight-normal">member@argon.com</td>
                                            <td class="text-sm font-weight-normal">Member</td>
                                            <td class="text-sm font-weight-normal">2023-11-16 06:15:02</td>
                                            <td class="text-sm">
                                                <span class="d-flex">
                                                </span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="dataTable-bottom">
                                <div class="dataTable-info">Showing 1 to 3 of 3 entries</div>
                                <nav class="dataTable-pagination">
                                    <ul class="dataTable-pagination-list"></ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer pt-3  ">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6 mb-lg-0 mb-4">
                        <div class="copyright text-center text-sm text-muted text-lg-start">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>2023,
                            made with <i class="fa fa-heart" aria-hidden="true"></i> by
                            <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative
                                Tim</a>
                            &amp;
                            <a href="https://www.updivision.com" class="font-weight-bold" target="_blank">UPDIVISION</a>
                            for a better web.
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                            <li class="nav-item">
                                <a href="https://www.updivision.com" class="nav-link text-muted"
                                    target="_blank">UPDIVISION</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com" class="nav-link text-muted"
                                    target="_blank">Creative Tim</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted"
                                    target="_blank">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/blog" class="nav-link text-muted"
                                    target="_blank">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted"
                                    target="_blank">License</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div> --}}
@endsection
