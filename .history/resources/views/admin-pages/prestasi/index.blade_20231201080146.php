@extends('layouts.app')

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Prestasi'])
    <div class="row mt-4 mx-4">
        <div class="col-12">

            <div class="card mb-4">
                <div class="card-header pc-0 d-flex mb-0 justify-content-between">
                    <h5 class=" ps-8 mb-0 text-center">Prestasi</h5>
                    <a href="admin-prestasi/create" class=" me-7 text-center mb-0 btn bg-gradient-dark btn-sm">Add
                        Prestasi</a>
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
                                @forelse ($prestasi as $item)
                                    <tr>
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
                                                <form action="/admin-prestasi/{{ $item->id }}/edit" method="PUT"
                                                    class="text-center mx-2">
                                                    @csrf
                                                    <button class="btn btn-xs btn-secondary mb-0 font-weight-bold text-xs">
                                                        <span class="btn-inner--icon"><i
                                                                class="fa-regular fa-pen-to-square"></i></span>
                                                        <span class="btn-inner--text"> Edit</span>
                                                    </button>
                                                </form>
                                                <form action="/admin-prestasi/{{ $item->id }}" method="POST">
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
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
