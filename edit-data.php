<?php 
  
  include('koneksi.php'); 
  
  $id = $_GET['id'];
  
  $query = "SELECT * FROM tbl_biodata WHERE id = $id LIMIT 1";

  $result = mysqli_query($connection, $query);

  $row = mysqli_fetch_array($result);

  ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit Data</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              <strong>EDIT DATA</strong>
            </div>
            <div class="card-body">
              <form action="update-data.php" method="POST">
              
              <div class="form-group">
                  <label>ID</label>
                  <input type="text" name="id" value="<?php echo $row['id'] ?>" placeholder="Masukkan ID Anda" class="form-control”>
                  <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                </div>

                <div class="form-group">
                  <label>Nama Lengkap</label>
                  <input type="text" name="nama" value="<?php echo $row['nama'] ?>" placeholder="Masukkan Nama" class="form-control">
                </div>

                <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" name="alamat" value="<?php echo $row['alamat'] ?>" placeholder="Masukkan Alamat" class="form-control">
                </div>
                
                <div class="form-group">
                  <label>Kota. Lahir</label>
                  <input type="text" name="tempat_lahir" value="<?php echo $row['tempat_lahir'] ?>" placeholder="Masukkan Tempat Lahir" class="form-control">
                </div>
                
                <div class="form-group">
                  <label>Tgl. Lahir</label>
                  <input type="date" name="tgl_lahir" value="<?php echo $row['tgl_lahir'] ?>" placeholder="Masukkan Tgl. Lahir" class="form-control">
                </div>

                <div class="form-group">
                  <label><strong>Agama</strong></label>
                  <select name="agama" value="<?php echo $row['agama'] ?>" required class="form-control">
                    <option value="-">- Pilih Agama -
                    <option value="Islam">Islam
                    <option value="Kristen">Kristen
                    <option value="Katolik">Katolik
                    <option value="Hindu">Hindu
                    <option value="Budha">Budha
                  </select>
                </div>
                
                <div class="form-group">
                  <label><strong>Alamat Lengkap</strong></label>
                  <input type="text" name="alamat" value="<?php echo $row['alamat'] ?>" placeholder="Masukkan Alamat" required class="form-control">
                </div>

                <div class="form-group">
                    <label><strong>Email</strong></label>
                    <input type="email" name="email" value="<?php echo $row['email'] ?>" placeholder="Masukkan Email Anda" required class="form-control">
                </div>

                <div class="form-group">
                    <label><strong>No. HP</strong></label>
                    <input type="tel" name="no_hp" value="<?php echo $row['no_hp'] ?>" placeholder="Masukkan No. HP Anda" required class="form-control">
                </div>

                <div class="form-group">
                    <label><strong>Sekolah</strong></label>
                    <input type="text" name="sekolah" value="<?php echo $row['sekolah'] ?>" placeholder="Masukkan Nama Sekolah Anda" required class="form-control">
                </div>

                <div class="form-group">
                    <label><strong>Kelas</strong></label>
                    <select name="kelas" value="<?php echo $row['kelas'] ?>" required class="form-control">
                    <option value="-">- Pilih Kelas -
                    <option value="X SIJA 1">X SIJA 1
                    <option value="X SIJA 2">X SIJA 2
                    <option value="XI SIJA 1">XI SIJA 1
                    <option value="XI SIJA 2">XI SIJA 2
                    <option value="XII SIJA 1">XII SIJA 1
                    <option value="XII SIJA 2">XII SIJA 2
                  </select>
                </div>

                <div class="form-group">
                    <label><strong>Blog</strong></label>
                    <input type="url" name="blog" value="<?php echo $row['blog'] ?>" placeholder="Masukkan URL Blog Anda" required class="form-control">
                </div>

                <div class="form-group">
                    <label><strong>Peminatan Karir</strong></label>
                    <select name="karir" value="<?php echo $row['karir'] ?>" required class="form-control">
                    <option value="-">- Pilih Peminatan -
                    <option value="Network Engineer">Network Engineer
                    <option value="Programmer">Programmer
                    <option value="Cloud Engineer">Cloud Engineer
                    <option value="Data Analyst">Data Analyst
                    <option value="Graphic Design">Graphic Design
                  </select>
                </div>

                <div class="form-group">
                    <label><strong>Motto</strong></label>
                    <input type="text" name="motto" value="<?php echo $row['motto'] ?>" placeholder="Masukkan Motto Anda" required class="form-control">
                </div>


                <button type="submit" class="btn btn-success">UPDATE</button>
                <button type="reset" class="btn btn-warning">RESET</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>