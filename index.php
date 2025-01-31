<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <header>
      
    </header>
    <title>Digiperpus</title>

    <link rel="stylesheet" href="style.css">

    <!-- Bootstrap Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
</head>
<body>
    





    <!--Bagian Navbar -->
    <nav class="navbar navbar-expand-lg" id="navbar">
        <div class="container">
          <a class="navbar-brand" href="index.html" id="logo"><span>Digi</span>Perpus</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span><i class="fa-solid fa-bars"></i></span>
          </button>
          <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link active" href="index.html">Beranda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">Tentang</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#packages">Kategori</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#services">Layanan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#gallary">Galeri</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#footer">Kontak</a>
              </li>
             
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="text" placeholder="Search">
              <button class="btn btn-primary" type="button">Search</button>
            </form>
          </div>
        </div>
      </nav>
    <!--Akhir Navbar-->





    <!--Bagian Home -->
    <div class="home">
        <div class="content">
            <h5>Welcome To Digiperpus</h5>
            <p> </p>
            <p>Temukan berbagai koleksi buku, artikel, jurnal, dan sumber daya lainnya<br>yang dapat memperkaya pengetahuan dan mendukung perjalanan belajar Anda.</p>
            <h1><span class="changecontent"></span></h1>
            <p> </p>
            <p> </p>
            <p> </p>
            <a href="login.php">LOGIN</a>
        </div>
    </div>
    <!--Akhir Home -->


        <!-- Bagian Tentang Kami -->
        <section class="about" id="about">
          <div class="container">
    
            <div class="main-txt">
              <h1>Tentang <span>Kami</span></h1>
            </div>
    
            <div class="row" style="margin-top: 50px;">
    
              <div class="col-md-6 py-3 py-md-0">
                <div class="card">
                  <img src="./img/hijab.jpg" alt="">
                </div>
              </div>
    
              <div class="col-md-6 py-3 py-md-0">
                <h2>Kenapa Digiperpus?</h2>
                <p>Selamat datang di Digiperpus, perpustakaan digital yang hadir untuk mempermudah akses informasi dan pengetahuan bagi masyarakat luas. DigiPerpus adalah platform perpustakaan digital yang menyediakan berbagai koleksi buku, jurnal, artikel, dan sumber daya pendidikan lainnya dalam format digital yang dapat diakses kapan saja dan di mana saja.
    
                  Kami berkomitmen untuk memajukan literasi digital dan mendukung pembelajaran sepanjang hayat dengan menyediakan akses yang mudah dan efisien ke berbagai bahan bacaan. DigiPerpus dirancang untuk mempermudah pengguna dalam menemukan materi yang relevan dan terpercaya, baik untuk keperluan akademik, profesional, maupun pribadi.</p>
                <button id="about-btn">Selengkapnya</button>
              </div>
    
            </div>
    
          </div>
        </section>
        <!-- Akhir Tentang kami -->




         <!-- Kategori Buku -->
    <section class="packages" id="packages">
      <div class="container">
        
        <div class="main-txt">
          <h1><span>Kategori</span> Buku</h1>
        </div>

        <div class="row" style="margin-top: 30px;">

          <div class="col-md-4 py-3 py-md-0">

            <div class="card">
              <img src="./img/fiksiiii.jpg" alt="">
              <div class="card-body">
                <h3>FIKSI</h3>
                <p>Buku-buku yang berisi cerita rekaan atau imajinatif.</p>
                <div class="star">
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star "></i>
                  <i class="fa-solid fa-star "></i>
                </div>
                
                <a href="#book">Selengkapnya</a>
              </div>
            </div>

          </div>
          <div class="col-md-4 py-3 py-md-0">

            <div class="card">
              <img src="./img/non fiksi.jpg" alt="">
              <div class="card-body">
                <h3>NON FIKSI</h3>
                <p>Buku yang menyajikan fakta dan informasi yang didasarkan pada kenyataan.</p>
                <div class="star">
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star "></i>
                  <i class="fa-solid fa-star "></i>
                </div>
                
                <a href="#book">Selengkapnya</a>
              </div>
            </div>

          </div>
          <div class="col-md-4 py-3 py-md-0">

            <div class="card">
              <img src="./img/image.png" alt="">
              <div class="card-body">
                <h3>SASTRA</h3>
                <p>karya-karya yang ditulis dengan gaya bahasa yang indah dan penuh makna.</p>
                <div class="star">
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star "></i>
                  <i class="fa-solid fa-star "></i>
                </div>
                
                <a href="#book">Selengkapnya</a>
              </div>
            </div>

          </div>



        </div>



        <div class="row" style="margin-top: 30px;">

          <div class="col-md-4 py-3 py-md-0">

            <div class="card">
              <img src="./img/pendidikann.png" alt="">
              <div class="card-body">
                <h3>PENDIDIKAN</h3>
                <p>Buku pembelajaran, baik untuk pendidikan dasar, menengah, maupun tinggi.</p>
                <div class="star">
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star "></i>
                  <i class="fa-solid fa-star "></i>
                </div>
                
                <a href="#book">Selengkapnya</a>
              </div>
            </div>

          </div>
          <div class="col-md-4 py-3 py-md-0">

            <div class="card">
              <img src="./img/sainss.png" alt="">
              <div class="card-body">
                <h3>SAINS DAN TEKNOLOGI</h3>
                <p>buku-buku yang membahas berbagai bidang ilmu pengetahuan dan teknologi.</p>
                <div class="star">
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star "></i>
                  <i class="fa-solid fa-star "></i>
                </div>
                
                <a href="#book">Selengkapnya</a>
              </div>
            </div>

          </div>
          <div class="col-md-4 py-3 py-md-0">

            <div class="card">
              <img src="./img/jurnall.png" alt="">
              <div class="card-body">
                <h3>KARYA ILMIAH & JURNAL</h3>
                <p>literatur yang berbasis penelitian dan kajian ilmiah. </p>
                <div class="star">
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star checked"></i>
                  <i class="fa-solid fa-star "></i>
                  <i class="fa-solid fa-star "></i>
                </div>
                
                <a href="#book">Selengkapnya</a>
              </div>
            </div>

          </div>



        </div>


      </div>
    </section>
    <!-- Akhir Kategori -->








    <!-- Bagian Layanan -->
    <section class="services" id="services">
      <div class="container">

        <div class="main-txt">
          <h1><span>L</span>ayanan</h1>
        </div>

        <div class="row" style="margin-top: 30px;">

          <div class="col-md-4 py-3 py-md-0">

            <div class="card">
              <i class="fas fa-hotel"></i>
              <div class="card-body">
                <h3>Layanan Pendaftaran Anggota</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A, eaque.</p>
              </div>
            </div>

          </div>
          <div class="col-md-4 py-3 py-md-0">

            <div class="card">
              <i class="fas fa-utensils"></i>
              <div class="card-body">
                <h3>Pinjaman dan Pengembalian Buku</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A, eaque.</p>
              </div>
            </div>

          </div>
          <div class="col-md-4 py-3 py-md-0">

            <div class="card">
              <i class="fas fa-bullhorn"></i>
              <div class="card-body">
                <h3>Jurnal dan <br>E-Resources</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A, eaque.</p>
              </div>
            </div>

          </div>



        </div>


        <div class="row" style="margin-top: 30px;">

          <div class="col-md-4 py-3 py-md-0">

            <div class="card">
              <i class="fas fa-globe-asia"></i>
              <div class="card-body">
                <h3>Panduan Penggunaan Perpustakaan</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A, eaque.</p>
              </div>
            </div>

          </div>
          <div class="col-md-4 py-3 py-md-0">

            <div class="card">
              <i class="fas fa-plane"></i>
              <div class="card-body">
                <h3>Program dan Kegiatan Perpustakaan</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A, eaque.</p>
              </div>
            </div>

          </div>
          <div class="col-md-4 py-3 py-md-0">

            <div class="card">
              <i class="fas fa-hiking"></i>
              <div class="card-body">
                <h3>Akses ke <br>Koleksi Digital</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A, eaque.</p>
              </div>
            </div>

          </div>



        </div>

      </div>
    </section>
    <!-- Akhir Layanan -->




    <!-- Bbagian Galeri -->
    <section class="gallary" id="gallary">
      <div class="container">

        <div class="main-txt">
          <h1><span>G</span>allary</h1>
        </div>

        <div class="row" style="margin-top: 30px;">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="./img/1.1.png" alt="" height="230px">
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="./img/1.jpg" alt="" height="230px">
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="./img/2.jpg" alt="" height="230px">
            </div>
          </div>
        </div>


        <div class="row" style="margin-top: 30px;">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="./img/3.jpg" alt="" height="230px">
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="./img/4.jpg" alt="" height="230px">
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="./img/5.jpg" alt="" height="230px">
            </div>
          </div>
        </div>

      </div>
    </section>
    <!-- Akhir Gallary -->




    <!-- Bagian Footer -->
    <footer id="footer">
      <h1><span>Digi</span>perpus</h1>
      <p>Perpustakaan berbasis Digital.</p>
      
      <div class="social-media">
        <!-- Menambahkan link dengan ikon Font Awesome -->
        <a href="https://facebook.com" target="_blank" class="social-icon facebook">
            <i class="fa fa-facebook"></i>
        </a>
        <a href="https://twitter.com" target="_blank" class="social-icon twitter">
            <i class="fa fa-twitter"></i>
        </a>
        <a href="https://instagram.com" target="_blank" class="social-icon instagram">
            <i class="fa fa-instagram"></i>
        </a>
    </div>


      <div class="credit">
        <p>Compiled By <a href="#">Edi Kurniawan</a></p>
      </div>
      <div class="copyright">
        <p>&copy;2025 DigiPerpus</p>
      </div>
    </footer>
    <!--Akhir Footer -->







    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>