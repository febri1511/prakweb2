<?php

namespace App\Http\Controllers;

use App\Models\KategoriProduk;
use App\Models\Produk;
use App\Models\pesanan;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produk = new Produk();
        return view('admin.produk.produk', ['produk' => $produk->getAllData()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $kategori_produk = KategoriProduk::all();

        //menampilkan seluruh
        $produk = Produk::all();
        return view('admin.produk.create', compact('kategori_produk','produk'));
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
        $produk = new Produk();
        $produk->kode = $request->kode;
        $produk->nama = $request->nama;
        $produk->harga_jual = $request->harga_jual;
        $produk->harga_beli = $request->harga_beli;
        $produk->stok = $request->stok;
        $produk->min_stok = $request->min_stok;
        $produk->deskripsi = $request->deskripsi;
        $produk->kategori_produk_id = $request->kategori_produk_id;
        $produk->save();
        return redirect('admin/produk');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $produk = Produk::findOrFail($id);

        $kategori_produk = KategoriProduk::find($produk->kategori_produk_id);

        return view('admin.produk.detail', compact('produk','kategori_produk'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kategori_produk = DB::table('kategori_produk')->get();
        $produk = DB::table('produk')->where('id', $id)->get();
        return view('admin.produk.edit', compact('kategori_produk','produk'));
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
        $produk = Produk::find($request->id);
        $produk->kode = $request->kode;
        $produk->nama = $request->nama;
        $produk->harga_jual = $request->harga_jual;
        $produk->harga_beli = $request->harga_beli;
        $produk->stok = $request->stok;
        $produk->min_stok = $request->min_stok;
        $produk->deskripsi = $request->deskripsi;
        $produk->kategori_produk_id = $request->kategori_produk_id;
        $produk->save();
        return redirect('admin/produk');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //buka table produk
        //cari data yang ingin di hapus berdasarkan id nya
        //hapus data menggunakan method delete()
        DB::table('produk')->where('id',$id)->delete();
        return redirect('admin/produk');
    }
}
