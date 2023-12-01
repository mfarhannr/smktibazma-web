@extends('layouts.app')

@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'Kategori'])
<div id="alert">
    @include('components.alert')
</div>
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <p class="text-uppercase text-sm">+ Kategori</p>
                    <div class="row">
                        <div class="col-md-12">
                            <form action="/admin-kategori-postingan" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Name</label>
                                    <input class="form-control" type="text" name="name" onfocus="focused(this)"
                                        onfocusout="defocused(this)">
                                </div>
                                @error('name')
                                <p class="text-danger text-xs pt-1">{{ $message }}</p>
                                @enderror
                                <button type="submit" class="btn btn-primary btn-sm ms-auto mt-4">Create</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="card mb-4">
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        id</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Kategori</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Make at</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $i = 1;
                                @endphp
                                @foreach ($allCategory as $item)
                                <tr>
                                    <td>
                                        <p class="ps-3 text-xs font-weight-bold mb-0">{{ $i }}.</p>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class="text-secondary text-xs font-weight-bold">{{ $item->name }}</span>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-xs font-weight-bold">{{ $item->updated_at}}</span>
                                    </td>
                                    <td class="align-middle text-center">
                                        <form class="d-inline" onsubmit="return confirm('Sure o delete this category')"
                                            action="{{ url('kategori-postingan/' . $item->id . '/delete') }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-link text-danger text-gradient px-3 mb-0">
                                                <span class="btn-inner--icon"><i class="fas fa-trash-alt"></i></span>
                                                <span class="btn-inner--text"> Delete</span>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @php
                                $i++;
                                @endphp
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection