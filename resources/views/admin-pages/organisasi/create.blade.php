@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Portfolio / Create'])
    <div class="container py-8">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="/admin-organisasi" method="POST" enctype="multipart/form-data">
                            @csrf
                            <h5 class="font-weight-bolder mb-0">Add Resume</h5>
                            <div class="row mt-3">
                                <div class="form-group">
                                    <label for="talenta" class="form-control-label">Nama Talenta</label>
                                    <select class="form-select" name="talent_id" id="talenta">
                                        <option selected>-- Pilih talenta yang ingin dibuat resumenya --</option>
                                        @foreach ($talent as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('talent_id')
                                        <p class="text-danger text-xs pt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mt-2">
                                        <h5 class="font-weight-bolder mb-0">Add Organisasi</h5>
                                        <div class="row mt-3">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Nama
                                                    Organisasi</label>
                                                <input class="form-control" type="text" name="nama_organisasi"
                                                    onfocus="focused(this)" onfocusout="defocused(this)">
                                                @error('nama_organisasi')
                                                    <p class="text-danger text-xs pt-1">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Tanggal</label>
                                                <input class="form-control" type="text" name="tanggal_organisasi"
                                                    onfocus="focused(this)" onfocusout="defocused(this)">
                                                @error('tanggal_organisasi')
                                                    <p class="text-danger text-xs pt-1">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Deskripsi</label>
                                                <input class="form-control" type="text" name="deskripsi_organisasi"
                                                    onfocus="focused(this)" onfocusout="defocused(this)">
                                                @error('deskripsi_organisasi')
                                                    <p class="text-danger text-xs pt-1">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mt-2">
                                        <h5 class="font-weight-bolder mb-0">Add Prestasi</h5>
                                        <div class="row mt-3">
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Prestasi</label>
                                                <input class="form-control" type="text" name="nama_prestasi"
                                                    onfocus="focused(this)" onfocusout="defocused(this)">
                                                @error('nama_prestasi')
                                                    <p class="text-danger text-xs pt-1">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Tanggal</label>
                                                <input class="form-control" type="text" name="tanggal_prestasi"
                                                    onfocus="focused(this)" onfocusout="defocused(this)">
                                                @error('tanggal_prestasi')
                                                    <p class="text-danger text-xs pt-1">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Deskripsi</label>
                                                <input class="form-control" type="text" name="deskripsi_prestasi"
                                                    onfocus="focused(this)" onfocusout="defocused(this)">
                                                @error('deskripsi_prestasi')
                                                    <p class="text-danger text-xs pt-1">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mt-2">
                                        <h5 class="font-weight-bolder mb-0">Add Sertifikasi</h5>
                                        <div class="row mt-3">
                                            <div class="form-group">
                                                <label for="example-text-input"
                                                    class="form-control-label">Sertifikasi</label>
                                                <input class="form-control" type="text" name="nama_sertifikasi"
                                                    onfocus="focused(this)" onfocusout="defocused(this)">
                                                @error('nama_sertifikasi')
                                                    <p class="text-danger text-xs pt-1">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Tanggal</label>
                                                <input class="form-control" type="text" name="tanggal_sertifikasi"
                                                    onfocus="focused(this)" onfocusout="defocused(this)">
                                                @error('tanggal_sertifikasi')
                                                    <p class="text-danger text-xs pt-1">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input"
                                                    class="form-control-label">Deskripsi</label>
                                                <input class="form-control" type="text" name="deskripsi_sertifikasi"
                                                    onfocus="focused(this)" onfocusout="defocused(this)">
                                                @error('deskripsi_sertifikasi')
                                                    <p class="text-danger text-xs pt-1">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mt-2">
                                        <h5 class="font-weight-bolder mb-0">Add Pengalaman</h5>
                                        <div class="row mt-3">
                                            <div class="form-group">
                                                <label for="example-text-input"
                                                    class="form-control-label">Pengalaman</label>
                                                <input class="form-control" type="text" name="nama_pengalaman"
                                                    onfocus="focused(this)" onfocusout="defocused(this)">
                                                @error('nama_pengalaman')
                                                    <p class="text-danger text-xs pt-1">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input" class="form-control-label">Tanggal</label>
                                                <input class="form-control" type="text" name="tanggal_pengalaman"
                                                    onfocus="focused(this)" onfocusout="defocused(this)">
                                                @error('tanggal_pengalaman')
                                                    <p class="text-danger text-xs pt-1">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="example-text-input"
                                                    class="form-control-label">Deskripsi</label>
                                                <input class="form-control" type="text" name="deskripsi_pengalaman"
                                                    onfocus="focused(this)" onfocusout="defocused(this)">
                                                @error('deskripsi_pengalaman')
                                                    <p class="text-danger text-xs pt-1">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <button type="submit" class="btn btn-dark btn-sm ms-auto mt-4hh">Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
