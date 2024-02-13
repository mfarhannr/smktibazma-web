@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Talent / Create'])
    <div class="container py-8">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="font-weight-bolder mb-0">Tambah Siswa</h5>
                        {{-- <p class="mb-0 text-sm">Mandatory informations</p> --}}
                        <div class="row">
                            <div class="col-md-12 mt-2">
                                <form action="/admin-Siswa" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Nama</label>
                                                    <input class="form-control" type="text" name="name"
                                                        onfocus="focused(this)" onfocusout="defocused(this)">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label for="example-text-input"
                                                        class="form-control-label">Bidang</label>
                                                    <input class="form-control" type="text" name="bidang"
                                                        onfocus="focused(this)" onfocusout="defocused(this)">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Foto Profil</label>
                                                    <input class="form-control" type="file" name="gambar"
                                                        onfocus="focused(this)" onfocusout="defocused(this)">
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Username</label>
                                        <input class="form-control" type="text" name="name" onfocus="focused(this)"
                                            onfocusout="defocused(this)">
                                    </div> --}}

                                        <button type="submit" class="btn btn-dark btn-sm ms-auto mt-4hh">Create</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
