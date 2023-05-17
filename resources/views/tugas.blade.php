<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <div class="container m-5">
        <div class="row">
            <div class="col-md-12">
                <form method="POST">
                    @csrf
                    <div class="form-group row">
                      <label for="nama" class="col-4 col-form-label">Nama</label> 
                      <div class="col-8">
                        <input style="width: 200px" id="nama" name="nama" type="text" required="required" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="tgl_pemeriksaan" class="col-4 col-form-label">Tanggal Pemeriksaan</label> 
                      <div class="col-8">
                        <input style="width: 200px" id="tgl_pemeriksaan" name="tgl_pemeriksaan" type="date" class="form-control" required="required">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="usia" class="col-4 col-form-label">Tanggal Lahir/Usia</label> 
                      <div class="col-8">
                        <input style="width: 200px" id="usia" name="usia" type="date" class="form-control" required="required">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-4">Jenis Kelamin</label> 
                      <div class="col-8">
                        <div class="custom-control custom-radio custom-control-inline">
                          <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="Perempuan" required="required"> 
                          <label for="jk_0" class="custom-control-label">Perempuan</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                          <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="Laki-laki" required="required"> 
                          <label for="jk_1" class="custom-control-label">Laki-laki</label>
                        </div>
                      </div>
                    </div> 
                    <div class="form-group row">
                      <div class="offset-4 col-8">
                        <button name="submit" type="submit" value="submit" class="btn btn-primary">Kirim</button>
                      </div>
                    </div>
                  </form>

                  
    @if (isset($_POST['submit']))
    @php
    $nama = $_POST['nama'];
    $tgl_pemeriksaan = $_POST['tgl_pemeriksaan'];
    $usia = $_POST['usia'];
    $jk = $_POST['jk'];
    @endphp
    <table>
        <tr>
            <td>Nama Pasien</td>
            <td>:</td>
            <td>{{ $nama }}
            <td>
        </tr>
        <tr>
            <td>Tanggal Pemeriksaan</td>
            <td>:</td>
            <td>{{ $tgl_pemeriksaan }}
            <td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td>{{ $usia }}
            <td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>{{ $jk }}
            <td>
        </tr>
    </table>
    @endif
    <table border="2" rules="all" class="mt-3">
        <tr>
            <th style="text-align: center">Jenis Tes</th>
            <th style="text-align: center">Hasil Pemeriksaan</th>
            <th style="text-align: center">Normal</th>
        </tr>
        <tr>
            <td>Tekanan Darah</td>
            <td></td>
            <td>120/80 mmhg</td>
        </tr>
        <tr>
            <td>Asam Urat</td>
            <td></td>
            <td>Pria : < 7 mg/dl | Wanita: < 6 mg/dl</td>
        </tr>
        <tr>
            <td>Kolesterol total</td>
            <td></td>
            <td>< 200 mg/dl</td>
        </tr>
        <tr>
            <td rowspan="3">Gula darah</td>
            <td rowspan="3"></td>
            <td>Puasa: 70-110 mg/dl</td>
        </tr>
        <tr>
            <td>2 jam setelah makan: 100-150 mg/dl</td>
        </tr>
        <tr>
            <td>Sewaktu/acak : 70-125 mg/dl</td>
        </tr>
    </table>
                  
            </div>
        </div>
    </div>
</body>
</html>