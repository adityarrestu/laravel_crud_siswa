@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <div class="col-md-2 col-sm-12">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{url('admin')}}">Halaman Admin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('penjual')}}">Halaman Penjual</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('pembeli')}}">Halaman Pembeli</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('produk.index')}}">Halaman Galeri</a>
                </li>
            </ul>
        </div>

        <div class="col-md-10 col-sm-12">
            @if ($message = Session::get('error'))
                <div class="alert alert-danger">
                    <p>{{ $message }}</p>
                </div>
            @endif

            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Dashboard') }}</div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            {{ __('You are logged in!') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection
