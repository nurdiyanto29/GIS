<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Burger King - Food Website Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Nunito:600,700" rel="stylesheet"> 
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
        <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">

        
    </head>

    <body>
        <!-- Nav Bar Start -->

        <!-- Nav Bar End -->
        <!-- Carousel Start -->
        <div class="carousel">
        <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="img/b2.jpeg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h1>Ayo <span>Mulai</span> Berwisata</h1>
                            <p>
                            </p><br><br><br>
                            <p>
                            Mau Wisata Kemana Hari Ini ?? 
                            </p>
                            <form class="form-inline">
    <input type="hidden" name="m" value="list" />
    <div class="form-group">
        <input class="form-control" type="text" placeholder="Temukan Disini. . ." name="q" value="<?=$_GET['q']?>" />            
        <!-- <a class="btn btn-success" href="?m=tempat_tambah"><span class="glyphicon glyphicon-plus"></span> Tambah</a> -->
    </div>
</form> 
                        </div>
                    </div>
        </div>
        <!-- Carousel End -->
    <br>
        
       <!-- Blog Start -->
       <div class="blog">
            <div class="container">
                <div class="section-header text-center">
                    <h2>Destinasi Wisata Menarik</h2>
                </div>
                <div class="row">
                <?php
                      $q = esc_field($_GET['q']);       
                      $sql = "SELECT * 
                          FROM tb_tempat p
                          WHERE nama_tempat LIKE '%$q%' 
                          ORDER BY id_tempat";
                      $rows = $db->get_results($sql);
                      foreach($rows as $row):?>
                    <div class="col-md-4">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="assets/images/tempat/<?=$row->gambar?>" style="height: 300px ;" style="width: auto;" alt="Image" alt="Blog">
                            </div>
                            <div class="blog-content">
                                <h2 class="blog-title"><?=$row->nama_tempat?></h2>
                                <div class="team-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                  </div>
                                <div class="blog-text">
                                    <p>
                                    <?=$row->lokasi?>
                                    </p>
                                    <a class="btn custom-btn" href="?m=tempat_detail&ID=<?=$row->id_tempat?>">Jelajahi</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach?>
                </div>
            </div>
        </div>
        <!-- Blog End -->
        <br><br><br><br>
        <div class="section-header text-center">
                    <p>"Selamat menikmati liburan anda #JanganLupaPakaiMasker"</p> 
                </div>
  

        <!-- Footer Start -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="footer-contact">
                                    <h2>Our Address</h2>
                                    <p><i class="fa fa-map-marker-alt"></i>Jl. Siaga, Kaliurang, Hargobinangun, Kec. Pakem, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55582</p>
                                    <p><i class="fa fa-phone-alt"></i>089999999897</p>
                                    <p><i class="fa fa-envelope"></i>merapi@gmail.com</p>
                                   
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="footer-contact">
                                <h2>Our Social Media</h2>
                                <div class="footer-social">
                                        <a href=""><i class="fab fa-twitter"></i></a>
                                        <a href=""><i class="fab fa-facebook-f"></i></a>
                                        <a href=""><i class="fab fa-youtube"></i></a>
                                        <a href=""><i class="fab fa-instagram"></i></a>
                                        <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="footer-newsletter">
                            <h2>About SIG Merapi</h2>
                            <p>
                                Sistem Informasi Geografis Wisata Kawasan Merapi merupakan fasilitas publik untuk menemukan zonifikasi pariwisata dikawasan Merapi.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <p>Copyright &copy; <a href="#">SIG | MERAPI</a>, All Right Reserved.</p>
                    <p>Designed By <a href="https://htmlcodex.com">NR.dev</a></p>
                </div>
            </div>
        </div>
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/tempusdominus/js/moment.min.js"></script>
        <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
        <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
        
        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
