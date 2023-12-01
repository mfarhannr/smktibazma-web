@extends('layouts.app')

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Admin Management'])
    <div class="row mt-4 mx-4">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pc-0 d-flex justify-content-between">
                    <h5 class="ps-6 ms-2 mb-0 text-center">Admin Management</h5>
                    <a href="{{ route('admin-management.create') }}"
                        class="mb-0 me-7 px-5 btn bg-gradient-dark btn-sm text-center">Add Admin</a>
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
                                @foreach ($user as $item)
                                    <tr>
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
                                            <form action="/admin-management/{{ $item->id }}" method="POST" class="text-center">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-xs btn-danger mb-0 font-weight-bold text-xs">
                                                    <span class="btn-inner--icon"><i class="fas fa-trash-alt"></i></span>
                                                    <span class="btn-inner--text"> Delete</span>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
