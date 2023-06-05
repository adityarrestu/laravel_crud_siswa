@extends('layouts.app')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2> Show Produk</h2>
            </div>
            <div class="float-right">
                <a
                    class="btn btn-secondary"
                    href="{{ route('produk.index') }}"
                >Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Produk:</strong>
                {{ $produk->namaProduk }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kode Produk:</strong>
                {{ $produk->kodeProduk }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Harga Produk:</strong>
                Rp {{ $produk->harga }}
            </div>
        </div>
    </div>
@endsection
