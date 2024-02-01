@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Siswa / Update'])
    <div class="container py-8">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="font-weight-bolder mb-0">Edit Siswa {{$Siswa->id}}</h5>
                        {{-- <p class="mb-0 text-sm">Mandatory informations</p> --}}
                        <div class="row">
                            <div class="col-md-12 mt-2">
                                <form action='/admin-Siswa/{{$Siswa->id}}'method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="row mt-3">
                                        {{-- <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Judul</label>
                                            <input class="form-control" type="text" name="judul" value="{{$Siswa->judul}}"
                                                onfocus="focused(this)" onfocusout="defocused(this)">
                                        </div> --}}
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Nama</label>
                                                    <input class="form-control" type="text" name="name" value="{{$Siswa->name}}"
                                                        onfocus="focused(this)" onfocusout="defocused(this)">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Bidang</label>
                                                    <input class="form-control" type="text" name="bidang" value="{{$Siswa->bidang}}"
                                                        onfocus="focused(this)" onfocusout="defocused(this)">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">No Hp</label>
                                                    <input class="form-control" type="number" name="nomor" value="{{$Siswa->nomor}}"
                                                        onfocus="focused(this)" onfocusout="defocused(this)">
                                                </div>
                                            </div>
                                        </div>
                                    <button type="submit" class="btn btn-dark btn-sm ms-auto mt-4hh">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
