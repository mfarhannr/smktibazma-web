@extends('layouts.app')

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'katalogtalenta'])
    <div class="row mt-4 mx-4">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pc-0 d-flex justify-content-between">
                    <h6 class="mb-0">Katalog Talenta</h6>
                    <a href="/admin-katalogtalenta/create" class="btn bg-gradient-dark btn-sm ">Tambah katalogtalenta</a>
                </div>

                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 px-4">
                                        id
                                    </th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Gambar
                                    </th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Nama
                                    </th>

                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @forelse ($KatalogTalenta as $item)
                                    <tr>
                                        {{-- <td>
                                            <h6 class="mb-0 mx-3 text-sm">{{ $item->judul }}</h6>

                                        </td> --}}
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
                                            <p class="text-sm font-weight-bold mb-0">{{ $item->name }}</p>
                                        </td>


                                        <td class="align-middle text-end">
                                            <div class="d-flex px-3 py-1 justify-content-center align-items-center">
                                                <a href="/admin-organisasi/{{ $item->id }}/resume" class="me-3 btn btn-sm btn-dark">
                                                    Lihat Resume
                                                </a>
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
