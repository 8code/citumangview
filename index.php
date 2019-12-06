<?php
  $url = $_SERVER['REQUEST_URI'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<script data-ad-client="ca-pub-3313481531647549" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Citumang, Paket Wisata Citumang Body Rafting, Body Rafting">
  <meta name="author" content="Wisata Citumang ">
  <meta name="google-site-verification" content="h8cxN9DLBUKGd57814eP4szD8uqejuKhhP9qco66DBI" />
  <title>Citumang View - Paket Wisata Citumang Body Rafting</title>
  
  
	<link rel="icon" href="img/Fevicon.png" type="image/png">

  <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
  <link rel="stylesheet" href="vendors/Magnific-Popup/magnific-popup.css">

  <link rel="stylesheet" href="css/style.css">


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  
  <style>

.wa,.tel{
	position:fixed;
	width:60px;
  height:60px;
	background-color:#25d366;
	color:#FFF;
	border-radius:50px;
	text-align:center;
  font-size:30px;
	box-shadow: 2px 2px 3px #999;
  z-index:100;

}
.wa{
	bottom:30px;
  right:50px;
}
.tel{
	bottom:30px;
  left:50px;
}
@media(min-width:800px){
  .tel{
    display:none
  }
  .wa{
    top:10px;
    width:55px;
    height:55px;
  }
}

.menu_nav .nav-item{
  text-align:center
}
</style>
  
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-150434016-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-150434016-2');
</script>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-W6VPCTS');</script>
    <!-- End Google Tag Manager -->

</head>
<body>
  <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W6VPCTS"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <!--================ Header Menu Area start =================-->
  <header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container box_1620">
          <a class="navbar-brand logo_h" href="/"><img width="200px" src="img/logo.png" alt=""></a>
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
                <!-- <a  class="button button-hero button-shadow text-white mt-3" href="tel:6282116383272">
                  Pesan Sekarang
                </a> -->
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
				<div class="col-xl-3 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
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
				
				<div class="col-xl-3 col-md-6 mb-4 mb-xl-0 single-footer-widget">
					<h4>Contact Us</h4>
          <p>

          <a href="https://api.whatsapp.com/send?phone=6282116383272&text=Halo%20Saya%20Pesan%20Paket%20Body%20Rafting%20Citumang%20Pangandaran" 
           target="_blank">
          <i class="fa fa-whatsapp"></i>
          WhatsApp (62-8211-6383-272)
          </a>
          <br>
          <a href="tel:6282116383272" target="_blank">
                <i class="fa fa-phone " ></i>
                Telpon (62-8211-6383-272)
                </a>

          </p>
          
				</div>
			</div>
			<div class="footer-bottom row align-items-center text-center text-lg-left">
				<p class="footer-text m-0 col-lg-8 col-md-12"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <i class="ti-heart" aria-hidden="true"></i>  <a href="https://citumangview.com">CitumangView</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
				<div class="col-lg-4 col-md-12 text-center text-lg-right footer-social">
            <a href="https://instagram.com/citumangview">
              <i class="fa fa-instagram"></i>
            </a>
            <a href="https://facebook.com/hendri.cbarca">
              <i class="fa fa-facebook"></i>
          </a>
				</div>
			</div>
		</div>
	</footer>
  <!-- ================ End footer Area ================= -->

    <a href="https://api.whatsapp.com/send?phone=6282116383272&text=Halo%20Saya%20Pesan%20Paket%20Body%20Rafting%20Citumang%20Pangandaran" 
    class="wa" target="_blank">
    <i class="fa fa-whatsapp"></i>
    </a>

    <a href="tel:6282116383272" target="_blank"
    style="background: red;" class="tel"
    >
      <i class="fa fa-phone " ></i>
      </a>


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