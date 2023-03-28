<!DOCTYPE html>
<html lang="en">

  <meta charset="utf-8">
  <title>PORTAL BERITA ALHASYIMIYAH</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
<link rel="shorcut icon" type="text/css" href="<?php echo base_url().'assets/images/favicon.png'?>">
  
  <!-- Bootstr<ap CSS File -->
  <link href="<?php echo base_url().'depan/lib/bootstrap/css/bootstrap.min.css'?>" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?php echo base_url().'depan/lib/font-awesome/css/font-awesome.min.css'?>" rel="stylesheet">
  <link href="<?php echo base_url().'depan/lib/animate/animate.min.css'?>" rel="stylesheet">
  <link href="<?php echo base_url().'depan/lib/ionicons/css/ionicons.min.css'?>" rel="stylesheet">
  <link href="<?php echo base_url().'depan/lib/owlcarousel/assets/owl.carousel.min.css'?>" rel="stylesheet">
  <link href="<?php echo base_url().'depan/lib/lightbox/css/lightbox.min.css'?>" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?php echo base_url().'depan/css/style.css'?>" rel="stylesheet">
  <?php
    $b=$data->row_array();
    ?>
  <header class="section-header">
          <h3>MAKSIMUM NEWS</h3>
          <p>BERITA SEPUTAR SMKS AL-HASYIMIYAH DAN PRESTASI SISWA
			</p>
        </header>

        <head>
    <title><?php echo $b['tulisan_judul'];?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css'?>">
</head>
<body>
    <div class="container">
        <div class="col-md-8 col-md-offset-2">
            <h2><?php echo $b['tulisan_judul'];?></h2><hr/>
            <img src="<?php echo base_url().'assets/images/'.$b['tulisan_gambar'];?>">
            <?php echo $b['tulisan_isi'];?>
        </div>
         
    </div>

       

        

      </div>
    </section>

    <div class="card text-center m-3">
  <div class="card-header">
    <span id='info'><strong>INFORMASI AKADEMIS</strong></span>
  </div>
    
    
    </section><!-- #testimonials -->

    <!--==========================
      Team Section
    ============================-->
   
   

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    

   
      
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="<?php echo base_url().'depan/lib/jquery/jquery.min.js'?>"></script>
  <script src="<?php echo base_url().'depan/lib/jquery/jquery-migrate.min.js'?>"></script>
  <script src="<?php echo base_url().'depan/lib/bootstrap/js/bootstrap.bundle.min.js'?>"></script>
  <script src="<?php echo base_url().'depan/lib/easing/easing.min.js'?>"></script>
  <script src="<?php echo base_url().'depan/lib/superfish/hoverIntent.js'?>"></script>
  <script src="<?php echo base_url().'depan/lib/superfish/superfish.min.js'?>"></script>
  <script src="<?php echo base_url().'depan/lib/wow/wow.min.js'?>"></script>
  <script src="<?php echo base_url().'depan/lib/waypoints/waypoints.min.js'?>"></script>
  <script src="<?php echo base_url().'depan/lib/counterup/counterup.min.js'?>"></script>
  <script src="<?php echo base_url().'depan/lib/owlcarousel/owl.carousel.min.js'?>"></script>
  <script src="<?php echo base_url().'depan/lib/isotope/isotope.pkgd.min.js'?>"></script>
  <script src="<?php echo base_url().'depan/lib/lightbox/js/lightbox.min.js'?>"></script>
  <script src="<?php echo base_url().'depan/lib/touchSwipe/jquery.touchSwipe.min.js'?>"></script>
  <!-- Contact Form JavaScript File -->
  <script src="<?php echo base_url().'depan/contactform/contactform.js'?>"></script>

  <!-- Template Main Javascript File -->
  <script src="<?php echo base_url().'depan/js/main.js'?>"></script>

</body>
</html>
