<!--Counter Inbox-->
<?php 
    $query=$this->db->query("SELECT * FROM tbl_inbox WHERE inbox_status='1'");
    $jum_pesan=$query->num_rows();
 
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SIAKAD SMKS ALHASYIMIYAH</title>
  <!-- Tell the browser to be responsive to screen width -->
  <link rel="shorcut icon" type="text/css" href="<?php echo base_url().'assets/images/favicon.png'?>">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/bootstrap/css/bootstrap.min.css'?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url().'depan/lib/font-awesome/css/font-awesome.css'?>">
  <!-- Ionicons -->
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css'?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/AdminLTE.min.css'?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/skins/_all-skins.min.css'?>">
  

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!--Header-->
  <?php 
    $this->load->view('user/v_header');
  ?>
  <?php 
    $this->load->view('user/sidebar');
  ?>
 

 
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->

  <section id="services" class="services services">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <h2><strong>Selamat datang di Sistem Informasi Akademik SMKS AL-HASYIMIYAH</strong></h2>
    
    <hr>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-sm btn-info lg" data-toggle="modal" data-target="#exampleModal">
    <i class="fa fa-tachometer fa-4x" aria-hidden="true"></i> <br> Control Panel
    </button>
  </div>
  </div>


  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-cogs"></i>  MENU UTAMA</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button> 
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-3 text-info text-center">
              <a href="<?= base_url(); ?>"><p class="nav-link small text-info"><i class="fa fa-4x fa-home" aria-hidden="true"></i><br>Home</p></a>
              
            </div>
            <div class="col-md-3 text-info text-center">
              <a href="<?= base_url(); ?>"><p class="nav-link small text-info"><i class="fa fa-4x fa-user-circle-o" aria-hidden="true"></i><br>Profil Siswa</p></a>
            </div>
            <div class="col-md-3 text-info text-center">
              <a href="<?= base_url(); ?>"><p class="nav-link small text-info"><i class="fa fa-4x fa-calendar" aria-hidden="true"></i><br>Jadwal Pelajaran</p></a>
            </div>
            <div class="col-md-3 text-info text-center">
              <a href="<?= base_url(); ?>"><p class="nav-link small text-info"><i class="fa fa-4x fa-book" aria-hidden="true"></i><br>Daftar Mata Pelajaran</p></a>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-md-3 text-info text-center">
              <a href="<?= base_url(); ?>"><p class="nav-link small text-info"><i class="fa fa-4x fa-wpforms" aria-hidden="true"></i><br>Daftar Nilai</p></a>
            </div>
            <div class="col-md-3 text-info text-center">
              <a href="<?= base_url(); ?>"><p class="nav-link small text-info">CETAK TRANSKRIP</p></a>
              <i class="fas fa-3x fa-print"></i>
            </div>
            <div class="col-md-3 text-info text-center">
              <a href="<?= base_url(); ?>"><p class="nav-link small text-info">KATEGORI</p></a>
              <i class="fas fa-3x fa-list-ul"></i>
            </div>
            <div class="col-md-3 text-info text-center">
              <a href="<?= base_url(); ?>"><p class="nav-link small text-info">INFO KAMPUS</p></a>
              <i class="fas fa-3x fa-bullhorn"></i>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-md-3 text-info text-center">
              <a href="<?= base_url(); ?>"><p class="nav-link small text-info">IDENTITAS</p></a>
              <i class="fas fa-3x fa-id-card-alt"></i>
            </div>
            <div class="col-md-3 text-info text-center">
              <a href="<?= base_url(); ?>"><p class="nav-link small text-info">TENTANG KAMPUS</p></a>
              <i class="fas fa-3x fa-info-circle"></i>
            </div>
            <div class="col-md-3 text-info text-center">
              <a href="<?= base_url(); ?>"><p class="nav-link small text-info">FASILITAS</p></a>
              <i class="fas fa-3x fa-laptop"></i>
            </div>
            <div class="col-md-3 text-info text-center">
              <a href="<?= base_url(); ?>"><p class="nav-link small text-info">GALLERY</p></a>
              <i class="fas fa-3x fa-image"></i>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
        
     
  
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
     
    </div>
    <strong>SISTEM INFORMASI SMK AL-HASYIMIYAH </a>.</strong>
  </footer>


</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url().'assets/plugins/jQuery/jquery-2.2.3.min.js'?>"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url().'assets/bootstrap/js/bootstrap.min.js'?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url().'assets/plugins/fastclick/fastclick.js'?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url().'assets/dist/js/app.min.js'?>"></script>
<!-- Sparkline -->
<script src="<?php echo base_url().'assets/plugins/sparkline/jquery.sparkline.min.js'?>"></script>
<!-- jvectormap -->
<script src="<?php echo base_url().'assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'?>"></script>
<script src="<?php echo base_url().'assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'?>"></script>
<!-- SlimScroll 1.3.0 -->
<script src="<?php echo base_url().'assets/plugins/slimScroll/jquery.slimscroll.min.js'?>"></script>
<!-- ChartJS 1.0.1 -->
<script src="<?php echo base_url().'assets/plugins/chartjs/Chart.min.js'?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url().'assets/dist/js/pages/dashboard2.js'?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url().'assets/dist/js/demo.js'?>"></script>

<script>

            var lineChartData = {
                labels : <?php echo json_encode($bulan);?>,
                datasets : [
                    
                    {
                        fillColor: "rgba(60,141,188,0.9)",
                        strokeColor: "rgba(60,141,188,0.8)",
                        pointColor: "#3b8bba",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(152,235,239,1)",
                        data : <?php echo json_encode($value);?>
                    }

                ]
                
            }

        var myLine = new Chart(document.getElementById("canvas").getContext("2d")).Line(lineChartData);

        var canvas = new Chart(myLine).Line(lineChartData, {
            scaleShowGridLines : true,
            scaleGridLineColor : "rgba(0,0,0,.005)",
            scaleGridLineWidth : 0,
            scaleShowHorizontalLines: true,
            scaleShowVerticalLines: true,
            bezierCurve : true,
            bezierCurveTension : 0.4,
            pointDot : true,
            pointDotRadius : 4,
            pointDotStrokeWidth : 1,
            pointHitDetectionRadius : 2,
            datasetStroke : true,
            tooltipCornerRadius: 2,
            datasetStrokeWidth : 2,
            datasetFill : true,
            legendTemplate : "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].strokeColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
            responsive: true
        });
        
        </script>

</body>
</html>
