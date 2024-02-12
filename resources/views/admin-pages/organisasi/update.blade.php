@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'organisasi / Update'])
    <div class="container py-8">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="font-weight-bolder mb-0">Edit Organisasi {{$organisasi->id}}</h5>
                        <div class="row">
                            <div class="col-md-12 mt-2">
                                <form action='/admin-organisasi/{{$organisasi->id}}'method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                    <div class="row mt-3">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">nama</label>
                                            <input class="form-control" type="text" name="nama" value="{{$organisasi->nama}}"
                                                onfocus="focused(this)" onfocusout="defocused(this)">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Tanggal</label>
                                            <input class="form-control" type="text" name="tanggal" value="{{$organisasi->tanggal}}"
                                                onfocus="focused(this)" onfocusout="defocused(this)">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Deskripsi</label>
                                            <input class="form-control" type="text" name="deskripsi" value="{{$organisasi->deskripsi}}"
                                                onfocus="focused(this)" onfocusout="defocused(this)">
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
