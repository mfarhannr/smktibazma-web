@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Portfolio / Create'])
    <div class="container py-8">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="font-weight-bolder mb-0">Add Portfolio</h5>
                        <div class="row">
                            <div class="col-md-12 mt-2">
                                <form action="/admin-portfolio" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row mt-3">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Judul</label>
                                            <input class="form-control" type="text" name="judul"
                                                onfocus="focused(this)" onfocusout="defocused(this)">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Gambar</label>
                                            <input class="form-control" type="file" name="gambar"
                                                onfocus="focused(this)" onfocusout="defocused(this)">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Deskripsi</label>
                                            <input class="form-control" type="text" name="deskripsi"
                                                onfocus="focused(this)" onfocusout="defocused(this)">
                                        </div>
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
