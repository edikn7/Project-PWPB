<!DOCTYPE html>
<html lang="en">
 
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Tambah Data Buku</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              TAMBAH DATA BUKU
            </div>
            <div class="card-body">
              <form method="POST" action="tambah_aksi.php">
                
                <div class="form-group">
                  <label>Judul Buku</label>
                  <input type="text" name="judul" placeholder="Masukkan Judul Buku" class="form-control">
                </div>

                <div class="form-group">
                  <label>Penulis</label>
                  <input type="text" name="penulis" placeholder="Masukkan Penulis Buku" class="form-control">
                </div>

                <a  href="admin.php" class="btn btn-sm btn-primary" >Kembali</a>
                <input type="submit" value="simpan" class="btn btn-success">
                <input type="reset" value="reset"class="btn btn-warning">
                

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