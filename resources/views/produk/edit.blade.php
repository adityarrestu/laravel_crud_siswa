@extends('layouts.app')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
               <h2>Edit Data Produk</h2>
            </div>

            <div class="float-right">
                <a
                    class="btn btn-secondary"
                    href="{{ route('produk.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form
        action="{{ route('produk.update',$produk->id) }}"
        method="POST"
    >

        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Produk:</strong>
                    <input
                        type="text"
                        name="namaProduk"
                        class="form-control"
                        placeholder="Nama Produk"
                        value="{{ $produk->namaProduk }}"
                    >
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Kode Produk:</strong>
                    <input
                        type="text"
                        name="kodeProduk"
                        value="{{ $produk->kodeProduk }}"
                        class="form-control"
                        placeholder="Kode Produk"
                    >
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Harga Produk:</strong>
                    <input
                        type="number"
                        name="harga"
                        value="{{ $produk->harga }}"
                        class="form-control"
                        placeholder="Harga Produk"
                    >
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button
                    type="submit"
                    class="btn btn-primary"
                >Update</button>
            </div>
        </div>
    </form>
@endsection
