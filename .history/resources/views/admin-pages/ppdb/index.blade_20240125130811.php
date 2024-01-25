
@extends('layouts.app' , ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'PPDB'])
    <div class="row mt-4 mx-4">
        <div class="col-12">

            <div class="card mb-4">

                <div class="card-header pc-0 d-flex justify-content-between">
                    <h6 class="mb-0">PPDB</h6>
                    <a href="/admin-ppdb/create" class="btn bg-gradient-dark btn-sm">Add PPDB</a>
                </div>

                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        id
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Gambar
                                    </th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Deskripsi</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $i = 1;
                                 @endphp
                                @forelse ($ppdb as $item)
                                    <tr>
                                        <td>
                                            <p class="text-sm text-center font-weight-bold mb-0">{{ $i }}</p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <div>
                                                <img src="{{ asset('img/' . $item->gambar) }}"
                                                    class="border-radius-lg shadow-sm height-100 w-auto" alt="">
                                            </div>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <p class="text-sm font-weight-bold mb-0">{{ $item->deskripsi }}</p>
                                        </td>
                                        <td class="align-middle text-end">
                                            <div class="d-flex px-3 py-1 justify-content-center align-items-center">
                                                <a href="/admin-ppdb/{{ $item->id }}/edit" class="me-3"
                                                    data-bs-toggle="tooltip" data-bs-original-title="Edit PPDB">
                                                    <i class="fas fa-user-edit text-secondary" aria-hidden="true"></i>
                                                </a>
                                                <form action="/admin-ppdb/{{ $item->id }}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <button
                                                        onclick="confirm('Are you sure you want to remove the ppdb?') || event.stopImmediatePropagation()"
                                                        data-bs-toggle="tooltip" data-bs-original-title="Delete ppdb"
                                                        class="border-0 bg-white" value="Delete">
                                                        <i class="fas fa-trash text-secondary" aria-hidden="true"></i>
                                                    </button>
                                                </form>
                                                </span>
                                            </div>
                                        </td>
                                    </tr>
                                    @php
                                    $i++;
                                @endphp
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
