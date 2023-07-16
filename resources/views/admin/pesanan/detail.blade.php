@extends('admin.layout.app')

@section('content')
    @if ($pesanan)
            <div class="container-fluid px-4">
                <h1 class="mt-4">Detail Pesanan</h1>
                <div class="card mb-4">
                    <div class="card-body">
                        <p>Tanggal: {{ $pesanan->tanggal }}</p>
                        <p>Nama Pemesan: {{ $pesanan->nama_pemesan }}</p>
                        <p>Alamat Pemesan: {{ $pesanan->alamat_pemesan }}</p>
                        <p>No HP: {{ $pesanan->no_hp }}</p>
                        <p>Email: {{ $pesanan->email }}</p>
                        <p>Jumlah Pesanan: {{ $pesanan->jumlah_pesanan }}</p>
                        <p>Deskripsi: {{ $pesanan->deskripsi }}</p>
                        <p>Produk: {{ $pesanan->produk->nama }}</p>
                        <p><a href="{{ url('admin/pesanan/') }}"
                            class="btn btn-success">Kembali</a></p>

                    </div>
                </div>
            </div>
        @else
            @include('admin.access_denied')
    @endif
@endsection
