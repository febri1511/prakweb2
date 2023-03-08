<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2</title>
</head>

<body>
    <div class="container">
        <div class="m-5">
            <h2><strong>Belanja Online</strong></h2>
        </div>
        <hr>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


        <div class="row">
            <div class="col-md-7">
                <form method="POST" action="form_belanja.php">
                    <div class=" form-group row">
                        <label for="nama" class="col-4 col-form-label">Customer</label>
                        <div class="col-8">
                            <div class="input-group">

                                <input name="nama" placeholder="Nama Customer" type="text" class="form-control"
                                    required="required">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">Pilih Produk</label>
                        <div class="col-8">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV"
                                    required="required">
                                <label for="produk_0" class="custom-control-label">TV</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_1" type="radio" class="custom-control-input"
                                    value="KULKAS" required="required">
                                <label for="produk_1" class="custom-control-label">KULKAS</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_2" type="radio" class="custom-control-input"
                                    value="MESIN CUCI" required="required">
                                <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
                        <div class="col-3">
                            <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control"
                                required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <button name="submit" type="submit" class="btn btn-success">Kirim</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-4">
                <ul class="list-group ml-4">
                    <li class=" list-group-item active">Daftar Harga</li>
                    <li class=" list-group-item">TV : 4.200.000</li>
                    <li class="list-group-item">KULKAS : 3.100.000</li>
                    <li class="list-group-item">MESIN CUCI : 3.800.000</li>
                    <li class="list-group-item active">Harga Dapat Berubah Setiap Saat</li>
                </ul>
            </div>

        </div>
        <hr>
    </div>
    <?php
    if (isset($_POST['submit'])) {
      $nama = $_POST["nama"];
      $produk = $_POST['produk'];
      $jumlah = $_POST['jumlah'];
      
      if ($produk == "TV") {
        $total = $jumlah * 4200000;
        echo "Nama Customer : $nama";
        echo "<br/>Pilihan Produk : $produk";
        echo "<br/>Jumlah Beli : $jumlah";
        echo "<br/>Total Belanja : Rp. ". number_format($total,0,",","."). ",-";
      } elseif($produk == "KULKAS"){
        $total = $jumlah * 3100000;
        echo "Nama Customer : $nama";
        echo "<br/>Pilihan Produk : $produk";
        echo "<br/>Jumlah Beli : $jumlah";
        echo "<br/>Total Belanja : Rp. ". number_format($total,0,",","."). ",-";
      } elseif($produk == "MESIN CUCI"){
        $total = $jumlah * 3800000;
        echo "Nama Customer : $nama";
        echo "<br/>Pilihan Produk : $produk";
        echo "<br/>Jumlah Beli : $jumlah";
        echo "<br/>Total Belanja : Rp. ". number_format($total,0,",","."). ",-";
      } else {
        echo "tidak ada";
      }
    }
    
    ?>
</body>

</html>