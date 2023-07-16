@extends('admin.layout.app')

@section('content')
    @if ($produk)
        @if (Auth::user()->role != 'pelanggan')
            <div class="container-fluid px-4">
                <h1 class="mt-4">Detail Produk</h1>
                <div class="card mb-4">
                    <div class="card-body">
                        <p>Kode: {{ $produk->kode }}</p>
                        <p>Nama Produk: {{ $produk->nama }}</p>
                        <p>Harga Jual: {{ $produk->harga_jual }}</p>
                        <p>Harga Beli: {{ $produk->harga_beli }}</p>
                        <p>Stok: {{ $produk->stok }}</p>
                        <p>Minimal Stok: {{ $produk->min_stok }}</p>
                        <p>Deskripsi: {{ $produk->deskripsi }}</p>
                        <p>Kategori Produk: {{ $produk->kategori_produk->nama }}</p>
                        <p><a href="{{ url('admin/produk/') }}"
                            class="btn btn-success">Kembali</a></p>

                    </div>
                </div>
            </div>
        @else
            @include('admin.access_denied')
        @endif
    @endif
@endsection
