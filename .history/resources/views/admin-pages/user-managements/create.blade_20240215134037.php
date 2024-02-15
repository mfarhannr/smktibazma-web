@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Admin Management / Create'])
    <div id="alert">
        @include('components.alert')
    </div>
    <div class="container py-8">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="font-weight-bolder mb-0">Add Admin</h5>
                        <div class="row">
                            <div class="col-md-12 mt-2">
                                <form action="/admin-management" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row mt-3">

                                        <div class="form-group col-12 col-sm-6">
                                            <label for="example-text-input" class="form-control-label">Username</label>
                                            <input class="form-control" type="text" name="username"
                                                onfocus="focused(this)" onfocusout="defocused(this)">
                                            @error('username')
                                                <p class="text-danger text-xs pt-1">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="form-group col-12 col-sm-6 mt-3 mt-sm-0">
                                            <label for="example-text-input" class="form-control-label">Email</label>
                                            <input class="form-control" type="email" name="email"
                                                onfocus="focused(this)" onfocusout="defocused(this)">
                                            @error('email')
                                                <p class="text-danger text-xs pt-1">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="form-group col-12 col-sm-6">
                                            <label for="example-text-input" class="form-control-label">Password</label>
                                            <input class="form-control" type="password" name="password"
                                                onfocus="focused(this)" onfocusout="defocused(this)">
                                            @error('password')
                                                <p class="text-danger text-xs pt-1">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group col-12 col-sm-6 mt-3 mt-sm-0">
                                            <label for="example-text-input" class="form-control-label">Role</label>
                                            <input class="form-control" type="text" name="role"
                                                onfocus="focused(this)" onfocusout="defocused(this)">
                                            @error('role')
                                                <p class="text-danger text-xs pt-1">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <select class="form-control" name="choices-button" id="choices-button" placeholder="Departure">
  <option value="Choice 1" selected="">Brazil</option>
  <option value="Choice 2">Bucharest</option>
  <option value="Choice 3">London</option>
  <option value="Choice 4">USA</option>
</select>
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
