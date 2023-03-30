<?php
include_once('navbar.php');
include_once('sidebar.php');
?>
<!-- ini untuk buka konten -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
              <li class="breadcrumb-item active">Form Regist Data Science</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Form Registrasi</title>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        </head>
        <body>
            <div class="container">
                <h3 style="text-align: center;">Form Regist Data Science</h3>
                <hr>
                <br>
                <form method="POST" action="proses_registrasi.php" >
                    <div class="form-group row">
                        <label for="nama" class="col-4 col-form-label">Nama</label> 
                        <div class="col-8">
                        <input id="nama" name="nama" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nim" class="col-4 col-form-label">NIM</label> 
                        <div class="col-8">
                        <input id="nim" name="nim" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">Jenis Kelamin</label> 
                        <div class="col-8">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="laki-laki"> 
                            <label for="jk_0" class="custom-control-label">Laki - Laki</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="perempuan"> 
                            <label for="jk_1" class="custom-control-label">Perempuan</label>
                        </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="studi" class="col-4 col-form-label">Program Studi</label> 
                        <div class="col-8">
                        <select id="studi" name="studi" class="custom-select">
                            <option value="TI">Teknik Informatika</option>
                            <option value="SI">Sistem Informasi</option>
                            <option value="BD">Bisnis Digital</option>
                        </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">Skill</label> 
                        <div class="col-8">
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input name="skill[]" id="skill[]_0" type="checkbox" class="custom-control-input" value="html"> 
                            <label for="skill[]_0" class="custom-control-label">HTML</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input name="skill[]" id="skill[]_1" type="checkbox" class="custom-control-input" value="css"> 
                            <label for="skill[]_1" class="custom-control-label">CSS</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input name="skill[]" id="skill[]_2" type="checkbox" class="custom-control-input" value="javascript"> 
                            <label for="skill[]_2" class="custom-control-label">JavaScript</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input name="skill[]" id="skill[]_3" type="checkbox" class="custom-control-input" value="bootstrap"> 
                            <label for="skill[]_3" class="custom-control-label">Bootstrap</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input name="skill[]" id="skill[]_4" type="checkbox" class="custom-control-input" value="php"> 
                            <label for="skill[]_4" class="custom-control-label">PHP</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input name="skill[]" id="skill[]_5" type="checkbox" class="custom-control-input" value="python"> 
                            <label for="skill[]_5" class="custom-control-label">Python</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input name="skill[]" id="skill[]_6" type="checkbox" class="custom-control-input" value="java"> 
                            <label for="skill[]_6" class="custom-control-label">JAVA</label>
                        </div>
                        </div>
                    </div> 
                    <div class="form-group row">
                        <label for="domisili" class="col-4 col-form-label">Tempat Domisili</label> 
                        <div class="col-8">
                        <select id="domisili" name="domisili" class="custom-select">
                            <option value="jakarta">Jakarta</option>
                            <option value="depok">Depok</option>
                            <option value="bogor">Bogor</option>
                            <option value="tanggerang">Tanggerang</option>
                            <option value="bekasi">Bekasi</option>
                            <option value="lainnya">Lainnya</option>
                        </select>
                        </div>
                    </div> 
                    <div class="form-group row">
                        <label for="nama" class="col-4 col-form-label">Email</label> 
                        <div class="col-8">
                        <input id="email" name="email" type="email" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
                <br>
            </div>
        </body>
        </html>
    </section>
</div>

<!-- ini untuk tutup konten -->
<?php
include_once('footer.php');
?>
