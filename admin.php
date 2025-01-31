<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <title>Admin</title>
  </head>

  <body style="color-dark">

    <h3 align="center">Selamat Datang di DigiPerpus!</h3>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              DATA BUKU
            </div>
            <div class="card-body">
              <a href="tambah.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA</a>
              <table class="table table-bordered" id="myTable">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">JUDUL BUKU</th>
                    <th scope="col">PENULIS</th>
                    <th scope="col">UPDATE</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                include 'koneksi.php';
                $no = 1;
                $data = mysqli_query( $koneksi,"SELECT * FROM buku");
                while($d = mysqli_fetch_array($data)){
                  ?>

                  <tr>
                <td><?php echo $no++?></td>
                <td><?php echo $d['judul']; ?></td>
                <td><?php echo $d['penulis']; ?></td>
                      <td class="text-center">
                        <a href="edit.php?id=<?php echo $d['id']?>" class="btn btn-sm btn-primary">EDIT</a>
                        <a href="hapus.php?id=<?php echo $d['id']; ?>" class="btn btn-sm btn-danger">HAPUS</a>
                      </td>
                  </tr>

                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready( function () {
          $('#myTable').DataTable();
      } );
    </script>

    
  </body>
</html>

