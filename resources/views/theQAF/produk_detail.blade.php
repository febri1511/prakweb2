<?php
// tangkap request id dari klik tombol mata atau detail 
$id = $_REQUEST['iddetail'];

// buat object produk dari class produk 
$obj_produk = new Produk();

// lalu tampilkan data produk menggunakan function ambil produk dari class produk 
//berdasarkan id nya
$produk = $obj_produk->ambilProduk($id);
?>
<!-- /.cantent-header-->

<!-- Ini untuk buka konten -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Detail Produk</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Detail Produk</li>
            </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
<section class="content">
<div class="container">
    <ul>
        <li> ID Produk : <?php echo $produk ['id'] ?> </li>
        <li> Nama Produk : <?php echo $produk ['nama'] ?> </li>
        <li> Harga Jual : <?php echo $produk ['harga_jual'] ?> </li>
        <li> Harga Beli : <?php echo $produk ['harga_beli'] ?> </li>
        <li> Stok : <?php echo $produk ['stok'] ?> </li>
        <li> Min_Stok : <?php echo $produk ['min_stok'] ?> </li>
        <li> Deskripsi : <?php echo $produk ['deskripsi'] ?> </li>
        <li> Kategori Produk : <?php echo $produk ['kategori_produk_id'] ?> </li>
    </ul>
</div>

</section>
</div>
<!-- ini untuk tutup konten -->
