@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'KatalogTalenta / Update'])
    <div class="container py-8">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="font-weight-bolder mb-0">Edit KatalogTalenta {{$KatalogTalenta->id}}</h5>
                        {{-- <p class="mb-0 text-sm">Mandatory informations</p> --}}
                        <div class="row">
                            <div class="col-md-12 mt-2">
                                <form action='/admin-talogtalenta/{{$KatalogTalenta->id}}'method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="row mt-3">
                                        {{-- <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Judul</label>
                                            <input class="form-control" type="text" name="judul" value="{{$KatalogTalenta->judul}}"
                                                onfocus="focused(this)" onfocusout="defocused(this)">
                                        </div> --}}
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Nama</label>
                                                    <input class="form-control" type="text" name="name" value="{{$KatalogTalenta->name}}"
                                                        onfocus="focused(this)" onfocusout="defocused(this)">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Bidang</label>
                                                    <input class="form-control" type="text" name="bidang" value="{{$KatalogTalenta->bidang}}"
                                                        onfocus="focused(this)" onfocusout="defocused(this)">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">No Hp</label>
                                                    <input class="form-control" type="number" name="nomor" value="{{$KatalogTalenta->nomor}}"
                                                        onfocus="focused(this)" onfocusout="defocused(this)">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col lg 3">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Instagram</label>
                                                    <input class="form-control" type="text" name="instagram" value="{{$KatalogTalenta->instagram}}"
                                                        onfocus="focused(this)" onfocusout="defocused(this)">
                                                </div>
                                            </div>
                                            <div class="col lg 3">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Linkedin</label>
                                                    <input class="form-control" type="text" name="linkedin" value="{{$KatalogTalenta->linkedin}}"
                                                        onfocus="focused(this)" onfocusout="defocused(this)">
                                                </div>
                                            </div>
                                            <div class="col lg 3">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Github</label>
                                                    <input class="form-control" type="text" name="github" value="{{$KatalogTalenta->github}}"
                                                        onfocus="focused(this)" onfocusout="defocused(this)">
                                                </div>
                                            </div>
                                            <div class="col lg 3">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Gmail</label>
                                                    <input class="form-control" type="text" name="email" value="{{$KatalogTalenta->email}}"
                                                        onfocus="focused(this)" onfocusout="defocused(this)">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Gambar</label>
                                                    <input class="form-control" type="file" name="gambar" value="{{$KatalogTalenta->gambar}}"
                                                        onfocus="focused(this)" onfocusout="defocused(this)">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="form-control-label">Deskripsi</label>
                                                   <textarea class="form-control" id="editor" type="text" name="deskripsi" onfocus="focused(this) onfocusout="defocused(this)"></textarea>
                                                 </div>
                                            </div>
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
