@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Portfolio / Update'])
    <div class="container py-8">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="font-weight-bolder mb-0">Edit Portfolio {{$portfolios->id}}</h5>
                        {{-- <p class="mb-0 text-sm">Mandatory informations</p> --}}
                        <div class="row">
                            <div class="col-md-12 mt-2">
                                <form action="{{ route('/portfolio/{{$portfolios->id}}') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method
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
                                        {{-- <div class="col-12 col-sm-6">
                                            <label>Username</label>
                                            <input class="multisteps-form__input form-control" type="text" name="name"
                                                placeholder="" onfocus="focused(this)" onfocusout="defocused(this)">
                                        </div>
                                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                            <label>Role</label>
                                            <input class="multisteps-form__input form-control" type="text"
                                                placeholder=" onfocus="focused(this)" onfocusout="defocused(this)">
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-12 col-sm-6">
                                            <label>Email Address</label>
                                            <input class="multisteps-form__input form-control" type="text"
                                                placeholder="eg. Creative Tim" onfocus="focused(this)"
                                                onfocusout="defocused(this)">
                                        </div>
                                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                            <label>confirm Email Address</label>
                                            <input class="multisteps-form__input form-control" type="email"
                                                placeholder="eg. argon@dashboard.com" onfocus="focused(this)"
                                                onfocusout="defocused(this)">
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-12 col-sm-6">
                                            <label>Password</label>
                                            <input class="multisteps-form__input form-control" type="password"
                                                placeholder="******" onfocus="focused(this)" onfocusout="defocused(this)">
                                        </div>
                                        <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                            <label>Repeat Password</label>
                                            <input class="multisteps-form__input form-control" type="password"
                                                placeholder="******" onfocus="focused(this)" onfocusout="defocused(this)">
                                        </div>
                                    </div> --}}
                                    {{-- <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Username</label>
                                        <input class="form-control" type="text" name="name" onfocus="focused(this)"
                                            onfocusout="defocused(this)">
                                    </div> --}}

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
