@extends('layouts.app')

@section('content')

    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
               <h2>Halaman Galeri</h2>
            </div>
            <div class="float-right">
                <a
                    class="btn btn-success"
                    href="{{ route('produk.create') }}"
                >Input Data Produk</a>
            </div>
        </div>
     </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th width="20px" class="text-center">No</th>
            <th>Nama Produk</th>
            <th width="280px"class="text-center">Kode Produk</th>
            <th width="280px"class="text-center">Harga</th>
            <th width="280px"class="text-center">Action</th>
        </tr>

        @foreach ($produk as $prod)
        <tr>
            <td class="text-center">{{ ++$i }}</td>
            <td>{{ $prod->namaProduk }}</td>
            <td>{{ $prod->kodeProduk }}</td>
            <td>Rp {{ $prod->harga }}</td>
            <td class="text-center">
                <form
                    action="{{ route('produk.destroy',$prod->id) }}"
                    method="POST"
                >
                    <a
                        class="btn btn-info btn-sm mx-1 text-white"
                        href="{{ route('produk.show',$prod->id) }}"
                    >Show</a>
                    <a
                        class="btn btn-primary btn-sm"
                        href="{{ route('produk.edit',$prod->id) }}"
                    >Edit</a>

                    @csrf
                    @method('DELETE')
                    <button
                        type="submit"
                        class="btn btn-danger btn-sm"
                        onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"
                    >Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {{ $produk->links() }}
@endsection

