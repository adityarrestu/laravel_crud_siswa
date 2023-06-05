@extends('layouts.app')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Tambah Produk Baru</h2>
            </div>
            <div class="float-right">
                <a
                    class="btn btn-secondary"
                    href="{{ route('produk.index') }}"
                >Kembali</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Input gagal.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('produk.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Produk:</strong>
                    <input
                        type="text"
                        name="namaProduk"
                        class="form-control"
                        placeholder="Nama Produk"
                    >
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Kode Produk:</strong>
                    <input
                        type="text"
                        name="kodeProduk"
                        class="form-control"
                        placeholder="Kode Produk"
                    >
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Harga:</strong>
                    <input
                        type="number"
                        name="harga"
                        class="form-control"
                        placeholder="harga Produk"
                    >
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button
                    type="submit"
                    class="btn btn-primary"
                >Submit</button>
            </div>
        </div>
    </form>
@endsection
