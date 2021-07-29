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
    <?php
        $row = $db->get_row("SELECT * FROM tb_tempat WHERE id_tempat='$_GET[ID]'");
        ?>

        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2><?=$row->nama_tempat?></h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
          <!-- About Start -->
          <div class="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <div class="about-img">
                            <img src="assets/images/tempat/<?=$row->gambar?>" style="height: 400px ;" style="width: 400px ;" alt="Image" alt="Blog">
                            <button type="button" class="btn-play" data-toggle="modal" data-src="<?=$row->link?>" data-target="#videoModal">
                                <span></span>
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="booking-content">
                            <div class="section-header">
                                <h4>Deskripsi</h4>
                            </div>
                            <p><?=$row->keterangan?></p></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
        
        <!-- Contact Start -->
    
            <div class="container">
                <div class="booking-content">
                    <div class="section-header">
                                    <h4>Alamat</h4>
                                    <h6><?=$row->lokasi?></h6>    
                                    <a href="javascript:void(0)" onclick="showRoute()" class="btn btn-info btn-sm"> <span class="glyphicon glyphicon-eye-open"></span> Tampilkan Rute </a>
                                    <a href="?m=detail&ID=<?=$_GET['ID']?>" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-list"></span> Rute Detail</a>
                       <hr>
                                    <div id="map" style="height: 500px;"></div>
                    </div>              
                </div>
            </div>
        
        <!-- Contact End -->

        <div class="team">
            <div class="container">
                <div class="section-header text-center">
                    <h2>Galery</h2>
                </div>
                <div class="row">
                <?php
            $rows = $db->get_results("SELECT * FROM tb_galeri WHERE id_tempat='$_GET[ID]'");
            foreach($rows as $r):?>
                    <div class="col-lg-4 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="assets/images/galeri/<?=$r->gambar?>" style="height:350px;" alt="Image">
                              
                            </div>
                            <div class="team-text">
                                <p><?=$r->nama_galeri?></p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach?>
                </div>
            </div>
        </div>

           <!-- Video Modal Start-->
           <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>        
                        <!-- 16:9 aspect ratio -->
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <!-- Video Modal End -->
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
        <!-- Footer End -->

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


<script>




var origin_pos  = {
    lat : -7.767943,
    lng : 110.3785153
};
var dst_pos = {
        lat : <?=$row->lat?>,
        lng : <?=$row->lng?>
    };
var errorRoute = false;
var map_detail;
var dragged = false;
var directionsDisplay;
var routeDisplayed = 0;

//menampilkan map detail
function tampilDetail(){          
    
    
    map_detail = new google.maps.Map(document.getElementById('map'), {
        zoom: default_zoom,
        center: dst_pos
    });  
    
    directionsDisplay = new google.maps.DirectionsRenderer({map: map_detail});
    
    addMarker(dst_pos, map_detail, '<?=$row->nama_tempat?>');    
    
    infoWindow = new google.maps.InfoWindow;
    
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
                lat: position.coords.latitude,
                lng: position.coords.longitude
            };
            
            
            origin_pos = pos;

            infoWindow.setPosition(pos);
            infoWindow.setContent('Your Location');
            infoWindow.open(map_detail);
            map_detail.setCenter(pos);
        }, function() {
            handleLocationError(true, infoWindow, map_detail.getCenter());
        });
    } else {          
        handleLocationError(false, infoWindow, map_detail.getCenter());
    }
}

function handleLocationError(browserHasGeolocation, infoWindow, pos) {
    infoWindow.setPosition(pos);
    infoWindow.setContent(browserHasGeolocation ?
                          'Error: The Geolocation service failed.' :
                          'Error: Your browser doesn\'t support geolocation.');
    infoWindow.open(map);
}

//menampilkan rute lokasi
function showRoute(){                               
    var directionsService = new google.maps.DirectionsService;
    var directionsDisplay = new google.maps.DirectionsRenderer;
    directionsDisplay.setMap(map_detail);    
    calculateAndDisplayRoute(directionsService, directionsDisplay);       
    console.log('Route displayed ' + ++routeDisplayed);
}

function calculateAndDisplayRoute(directionsService, directionsDisplay) {
    directionsService.route({
          origin: origin_pos,
          destination: dst_pos,
          travelMode: 'DRIVING'
    }, function(response, status) {
      if (status === 'OK') {
        directionsDisplay.setDirections(response);
      } else {
        window.alert('Directions request failed due to ' + status);
      }
    });
}

$(function(){
    tampilDetail();    
})

$(document).ready(function(){

    loadGallery(true, 'a.thumbnail');

    //This function disables buttons when needed
    function disableButtons(counter_max, counter_current){
        $('#show-previous-image, #show-next-image').show();
        if(counter_max == counter_current){
            $('#show-next-image').hide();
        } else if (counter_current == 1){
            $('#show-previous-image').hide();
        }
    }

    /**
     *
     * @param setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.
     * @param setClickAttr  Sets the attribute for the click handler.
     */

    function loadGallery(setIDs, setClickAttr){
        var current_image,
            selector,
            counter = 0;

        $('#show-next-image, #show-previous-image').click(function(){
            if($(this).attr('id') == 'show-previous-image'){
                current_image--;
            } else {
                current_image++;
            }

            selector = $('[data-image-id="' + current_image + '"]');
            updateGallery(selector);
        });

        function updateGallery(selector) {
            var $sel = selector;
            current_image = $sel.data('image-id');
            $('#image-gallery-caption').text($sel.data('caption'));
            $('#image-gallery-title').text($sel.data('title'));
            $('#image-gallery-image').attr('src', $sel.data('image'));
            disableButtons(counter, $sel.data('image-id'));
        }

        if(setIDs == true){
            $('[data-image-id]').each(function(){
                counter++;
                $(this).attr('data-image-id',counter);
            });
        }
        $(setClickAttr).on('click',function(){
            updateGallery($(this));
        });
    }
});


</script>
</body>
</html>