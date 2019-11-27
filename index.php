<?php
  $url = $_SERVER['REQUEST_URI'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Body Rafting Citumang Pangandaran</title>
	<link rel="icon" href="img/Fevicon.png" type="image/png">

  <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
  <link rel="stylesheet" href="vendors/Magnific-Popup/magnific-popup.css">

  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <!--================ Header Menu Area start =================-->
  <header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container box_1620">
          <a class="navbar-brand logo_h" href="/"><img src="img/logo.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav justify-content-end">
              <li class="nav-item
              <?php if($url == '/'){ echo 'active'; } ?>
              "><a class="nav-link" href="/">Home</a></li> 
              <li class="nav-item
              <?php if($url == '/about'){ echo 'active'; } ?>
              "><a class="nav-link" href="/about">About</a></li> 
              <li class="nav-item
              <?php if($url == '/fasilitas'){ echo 'active'; } ?>
              "><a class="nav-link" href="/fasilitas">Fasilitas</a>

              <li class="nav-item
              <?php if($url == '/detail'){ echo 'active'; } ?>
              "><a class="nav-link" href="/detail">Harga</a></li> 

              <li class="nav-item">
                <a  class="button button-hero button-shadow text-white mt-3" href="tel:6282116383272">
                  Pesan Sekarang
                </a>
              </li>
            </ul>
          </div> 
        </div>
      </nav>
    </div>
  </header>
  <!--================Header Menu Area =================-->

  <?php

  if($url == '/' || $url == '/index.html'){
    include "page/home.php";
  }else if($url == '/about' || $url == '/about.html'){
    include "page/about.php";
  }else if($url == '/fasilitas' || $url == '/fasilitas.html'){
    include "page/fasilitas.php";
  }else if($url == '/contact' || $url == '/contact.html'){
    include "page/contact.php";
  }else if($url == '/detail' || $url == '/detail.html'){
    include "page/detail.php";
  }
  ?>

  <!-- ================ start footer Area ================= -->
  <footer class="footer-area section-gap">
		<div class="container">
			<div class="row">
				<div class="col-xl-2 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
					<h4>Social Media</h4>
					<ul>
						<li><a href="https://instagram.com/citumangview">Instagram</a></li>
						<li><a href="https://facebook.com/hendri.cbarca">Facebook</a></li>
					</ul>
				</div>
				<div class="col-xl-3 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
					<h4>Alamat</h4>
          <p>
          ALAMAT: Jln. Raya sukamanah Desa bojong kec. parigi  kab. Pangandaran 
          CITUMANG VIA PARKIR 1 ( SATU )
          </p>
				</div>
				<div class="col-xl-3 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
					<h4>Harga Paket</h4>
					<ul>
						<li><a href="/detail">Paket Citumang Double track 125Rb</a></li>
						<li><a href="/detail">Paket Citumang 85.000 /Pax</a></li>
					</ul>
				</div>
				
				<div class="col-xl-4 col-md-8 mb-4 mb-xl-0 single-footer-widget">
					<h4>Newsletter</h4>
          <p>You can trust us. we only send promo offers,</p>
          
          <div class="form-wrap" id="mc_embed_signup">
            <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
            method="get">
              <div class="input-group">
                <input type="email" class="form-control" name="EMAIL" placeholder="Your Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '">
                <div class="input-group-append">
                  <button class="btn click-btn" type="submit">
                    <i class="ti-arrow-right"></i>
                  </button>
                </div>
              </div>
              <div style="position: absolute; left: -5000px;">
								<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
							</div>

							<div class="info"></div>
            </form>
          </div>
          
				</div>
			</div>
			<div class="footer-bottom row align-items-center text-center text-lg-left">
				<p class="footer-text m-0 col-lg-8 col-md-12"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <i class="ti-heart" aria-hidden="true"></i>  <a href="https://citumangview.com">CitumangView</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
				<div class="col-lg-4 col-md-12 text-center text-lg-right footer-social">
					<a href="#"><i class="ti-facebook"></i></a>
					<a href="#"><i class="ti-twitter-alt"></i></a>
					<a href="#"><i class="ti-dribbble"></i></a>
					<a href="#"><i class="ti-linkedin"></i></a>
				</div>
			</div>
		</div>
	</footer>
  <!-- ================ End footer Area ================= -->




  <script src="vendors/jquery/jquery-3.2.1.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="vendors/nice-select/jquery.nice-select.min.js"></script>
  <script src="vendors/Magnific-Popup/jquery.magnific-popup.min.js"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="js/mail-script.js"></script>
  <script src="js/main.js"></script>
</body>
</html>