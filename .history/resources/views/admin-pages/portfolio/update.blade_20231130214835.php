@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Portfolio / Update'])
    <div class="container py-8">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="font-weight-bolder mb-0">Edit Portfolio {{$portfolios->id}}</h5>
                        <div class="row">
                            <div class="col-md-12 mt-2">
                                <form action='/admin-portfolio/{{$portfolios->id}}'method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                    <div class="row mt-3">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Judul</label>
                                            <input class="form-control" type="text" name="judul" value="{{$portfolios->judul}}"
                                                onfocus="focused(this)" onfocusout="defocused(this)">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Gambar</label>
                                            <input class="form-control" type="file" name="gambar" value="{{$portfolios->gambar}}"
                                                onfocus="focused(this)" onfocusout="defocused(this)">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Deskripsi</label>
                                            <input class="form-control" type="text" name="deskripsi" value="{{$portfolios->deskripsi}}"
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
