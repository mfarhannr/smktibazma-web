@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Admin Management'])
    <div class="row mt-4 mx-4">
        <div class="col-12">

            <div class="card mb-4">
                <div class="card-header pc-0 d-flex justify-content-between">
                    <h6 class="mb-0 ">Admin Management</h6>
                    <a href="/admin-management/create" class="mb-0 btn bg-primary btn-sm ">Tambah
                        Admin</a>
                </div>

                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                        >
                                        No
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                        >
                                        Username
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                        >
                                        Email
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                        >
                                        Role</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"
                                        >
                                        Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @foreach ($user as $item)
                                    <tr>
                                        <td>
                                            <p class="text-center text-sm font-weight-bold mb-0">{{ $i }}</p>
                                        </td>
                                        <td>
                                            <p class="text-center text-sm font-weight-bold mb-0">{{ $item->username }}</p>
                                        </td>
                                        <td>
                                            <p class="text-center text-sm font-weight-bold mb-0">{{ $item->email }}</p>
                                        </td>
                                        <td>
                                            <p class="text-center text-sm font-weight-bold mb-0">{{ $item->role }}</p>
                                        </td>
                                        <td>
                                            <form action="/admin-management/{{ $item->id }}" method="POST"
                                                class="text-center">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-xs btn-danger mb-0 font-weight-bold text-xs">
                                                    <span class="btn-inner--icon"><i class="fas fa-trash-alt"></i></span>
                                                    <span class="btn-inner--text"> Delete</span>
                                                </button>
                                            </form>
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
    </div>
@endsection
