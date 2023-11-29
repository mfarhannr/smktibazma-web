@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'User Management / Create'])
{{-- <div class="container-fluid py-4"> --}}
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <p class="text-uppercase text-sm">Form</p>
                    <div class="row">
                        <div class="col-md-12">
                            <form action="{{ route('user-management') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Users</label>
                                    <input class="form-control" type="text" name="name" onfocus="focused(this)"
                                        onfocusout="defocused(this)">
                                </div>
                                <button type="submit" class="btn btn-primary btn-sm ms-auto mt-4">Create</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{-- </div> --}}
@endsection