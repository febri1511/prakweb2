<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use App\Models\Produk;
use App\Models\KategoriProduk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pesanan = new Pesanan();
        return view('admin.pesanan.pesanan', ['pesanan' => $pesanan->getAllData()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $produk = Produk::all();

        //menampilkan seluruh
        $pesanan = Pesanan::all();
        return view('admin.pesanan.create', compact('produk','pesanan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //buat class baru dengan nama table yang mau kita tambahkan datanya (produk)
        //ambil data yang di inputkan user dengan parameter request,
        //lalu masukkan ke dalam kolom table (produk)
        //lalu kembalikan ke tampilan produk ketika setelah user mengklik button simpan
        $pesanan = new Pesanan();
        $pesanan->tanggal = $request->tanggal;
        $pesanan->nama_pemesan = $request->nama_pemesan;
        $pesanan->alamat_pemesan = $request->alamat_pemesan;
        $pesanan->no_hp = $request->no_hp;
        $pesanan->email = $request->email;
        $pesanan->jumlah_pesanan = $request->jumlah_pesanan;
        $pesanan->deskripsi = $request->deskripsi;
        $pesanan->produk_id = $request->produk_id;
        $pesanan->save();
        return redirect('admin/pesanan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $pesanan = Pesanan::findOrFail($id);

        $kategori_produk = KategoriProduk::find($pesanan->kategori_produk_id);

        return view('admin.pesanan.detail', compact('pesanan','kategori_produk'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $produk = DB::table('produk')->get();
        $pesanan = DB::table('pesanan')->where('id', $id)->get();
        return view('admin.pesanan.edit', compact('pesanan','produk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //buat class baru dengan nama table yang mau kita tambahkan datanya (produk)
        //ambil data yang di inputkan user dengan parameter request,
        //lalu masukkan ke dalam kolom table (produk)
        //lalu kembalikan ke tampilan produk ketika setelah user mengklik button simpan
        $pesanan = Pesanan::find($request->id);
        $pesanan->tanggal = $request->tanggal;
        $pesanan->nama_pemesan = $request->nama_pemesan;
        $pesanan->alamat_pemesan = $request->alamat_pemesan;
        $pesanan->no_hp = $request->no_hp;
        $pesanan->email = $request->email;
        $pesanan->jumlah_pesanan = $request->jumlah_pesanan;
        $pesanan->deskripsi = $request->deskripsi;
        $pesanan->produk_id = $request->produk_id;
        $pesanan->save();
        return redirect('admin/pesanan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //buka table produk
        //cari data yang ingin di hapus berdasarkan id nya
        //hapus data menggunakan method delete()
        DB::table('pesanan')->where('id',$id)->delete();
        return redirect('admin/pesanan');
    }
}
