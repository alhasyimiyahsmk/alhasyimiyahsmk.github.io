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
  <title>Profile</title>
  <!-- Tell the browser to be responsive to screen width -->
  <link rel="shorcut icon" type="text/css" href="<?php echo base_url().'assets/images/favicon.png'?>">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/bootstrap/css/bootstrap.min.css'?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/font-awesome/css/font-awesome.min.css'?>">
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
        Data Pribadi Siswa
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data</li>
      </ol>
    </section>

    <style>
        ul {
            list-style-type: none;
            margin: 0;
            padding: -10;
            text-align: center;
        }

        .kop-surat {
            width: 100vh
        }

        table.kop-surat td.konten {
            height: 110px;
        }

        table.kop-surat td.smk {
            height: 110px;
        }

        td.smk h4 {
            padding: 0px;
        }
    </style>
    <table class="kop-surat" align="center">
        <tr class="konten">
            <td style="padding-right:5px;"><img src="<?php echo base_url('theme/images/logo smkah.jpg') ?>" alt="" style="width:100px;height:100px;"></td>
            <td class="smk" align="center" style="height:150px;">
                            <h4 style="padding:none;">
                    <font size="8pt" style=" text-align:center; font-weight: bold;">SMKS AL-HASYIMIYAH</font><BR>
                </h4>
                <font size="4pt" style=" text-align:center;">Jl. Hanjawar Pacet Kp. Cibadak Desa Sukanagalih Kec. Pacet</font><BR>
                <font size="4pt" style=" text-align:center; "> Kab.Cianjur Prov. Jawa Barat</font><BR>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <hr>
            </td>
        </tr>
        <br>
    </table>

    <table align="center">
        <tr>
            <td align="center" width="575">
                <h4 style="padding:none;"><b>DATA SISWA</b><BR></h4>
                <img src="<?= base_url(); ?>pendaftar/Foto_Siswa/<?= $siswa["Foto"]; ?>" width="90" height="120">
            </td>
            </tr>
            <tr>
            <td align="center"><?= $siswa["Nama_Siswa"]; ?></td>
        </tr>
    </table>
    <br>
    <table align="center">
        <tr>
            <td width="80">
                <font size="3">Tingkat</font>
            </td>
            <td width="200">
                <font size="3">: <?= $siswa["Tingkat"]; ?></font>
            </td>
            <td width="80">
                <font size="3">Jurusan</font>
            </td>
            <td width="200">
                <font size="3">: <?= $siswa["Prodi"]; ?></font>
            </td>
        </tr>
    </table>
    <table align="center">
            <tr>
            <td width="80">Jenis Kelamin</td>
            <td width="490">: <?= $siswa["Jenis_Kelamin"]; ?></td>
        </tr>
    </table>
    <table align="center">
        <tr>
            <td width="80">Asal Sekolah</td>
            <td width="200">: <?= $siswa["Asal_Sekolah"]; ?></td>
            <td width="80">NISN</td>
            <td width="200">: <?= $siswa["NISN"]; ?></td>
        </tr>
        <tr>
            <td width="80">No Ijazah</td>
            <td width="200">: <?= $siswa["No_Ijazah"]; ?></td>
            <td width="80">No SKHUN</td>
            <td width="200">: <?= $siswa["No_SKHUN"]; ?></td>
        </tr>
        <tr>
            <td width="80">No UN</td>
            <td width="200">: <?= $siswa["No_UN"]; ?></td>
        </tr>
    </table>
    <table align="center">
        <tr>
            <td width="80">NIK</td>
            <td width="490">: <?= $siswa["NIK"]; ?></td>
        </tr>
        <tr>
            <td width="80">TTL</td>
            <td width="490">: <?= $siswa["TTL"]; ?></td>
        </tr>
        <tr>
            <td width="80">Alamat Tinggal</td>
            <td width="490">: <?= $siswa["Alamat_Tinggal"]; ?></td>
        </tr>
    </table>
    <table align="center">
        <tr>
            <td width="80">Alat Transportasi</td>
            <td width="200">: <?= $siswa["Transportasi"]; ?></td>
            <td width="80">Ukuran Pakaian</td>
            <td width="200">: <?= $siswa["Ukuran_Pakaian"]; ?></td>
        </tr>
        <tr>
            <td width="80">Jenis Tinggal</td>
            <td width="200">: <?= $siswa["Jenis_Tinggal"]; ?></td>
            <td width="80">Rencana Tinggal</td>
            <td width="200">: <?= $siswa["Rencana_Tinggal"]; ?></td>
        </tr>
        <tr>
            <td width="80">No Hp</td>
            <td width="200">: <?= $siswa["No_HP"]; ?></td>
            <td width="80">Email</td>
            <td width="200">: <?= $siswa["Email"]; ?></td>
        </tr>
        <tr>
            <td width="80">Jenis Bantuan</td>
            <td width="200">: <?= $siswa["Jenis_Bantuan"]; ?></td>
            <td width="80">No KKS</td>
            <td width="200">: <?= $siswa["No_KKS"]; ?></td>
        </tr>
    </table>
    <BR>
    <table align="center">
        <tr>
            <td align="center" width="580">
                <h4 style="padding:none;"><b>DATA ORTU/WALI</b><BR></h4>
            </td>
        </tr>
    </table>
    <table align="center">
        <tr>
            <td width="290">
                <b>DATA AYAH KANDUNG</b>
            </td>
            <td width="290">
                <b>DATA IBU KANDUNG</b><br>
            </td>
        </tr>
    </table>
    <table align="center">
        <tr>
            <td width="80">Nama Ayah</td>
            <td width="200">: <?= $siswa["Nama_Ayah"]; ?></td>
            <td width="80">Nama Ibu</td>
            <td width="200">: <?= $siswa["Nama_Ibu"]; ?></td>
        </tr>
        <tr>
            <td width="80">Lahir</td>
            <td width="200">: <?= $siswa["Lahir_Ayah"]; ?></td>
            <td width="80">Lahir</td>
            <td width="200">: <?= $siswa["Lahir_Ibu"]; ?></td>
        </tr>
        <tr>
            <td width="80">Pekerjaan</td>
            <td width="200">: <?= $siswa["Pekerjaan_Ayah"]; ?></td>
            <td width="80">Pekerjaan</td>
            <td width="200">: <?= $siswa["Pekerjaan_Ibu"]; ?></td>
        </tr>
        <tr>
            <td width="80">Pendidikan</td>
            <td width="200">: <?= $siswa["Pendidikan_Ayah"]; ?></td>
            <td width="80">Pendidikan</td>
            <td width="200">: <?= $siswa["Pendidikan_Ibu"]; ?></td>
        </tr>
        <tr>
            <td width="80">Penghasilan Bulanan</td>
            <td width="200">: <?= $siswa["Penghasilan_Ayah"]; ?></td>
            <td width="80">Penghasilan Bulanan</td>
            <td width="200">: <?= $siswa["Penghasilan_Ibu"]; ?></td>
        </tr>
    </table>
    <BR>
    <table align="center">
        <tr>
            <td width="290">
                <b>DATA WALI</b><br>
            </td>
        </tr>
    </table>
    <table align="center">
        <tr>
            <td width="80">Nama Wali</td>
            <td width="200">: <?= $siswa["Nama_Wali"]; ?></td>
        </tr>
        <tr>
            <td width="80">Lahir</td>
            <td width="200">: <?= $siswa["Lahir_Wali"]; ?></td>
        </tr>
        <tr>
            <td width="80">Pekerjaan</td>
            <td width="200">: <?= $siswa["Pekerjaan_Wali"]; ?></td>
        </tr>
        <tr>
            <td width="80">Pendidikan</td>
            <td width="200">: <?= $siswa["Pendidikan_Wali"]; ?></td>
        </tr>
        <tr>
            <td width="80">Penghasilan Bulanan</td>
            <td width="200">: <?= $siswa["Penghasilan_Wali"]; ?></td>
        </tr>
    </table>
    <BR> <BR> 
    <table align="center">
        <tr>
            <td align="center" width="290">
                <h4 style="padding:none;"><b>DATA PERIODIK</b><BR></h4>
            </td>
        </tr>
    </table>
    <table align="center">
        <tr>
            <td width="180">Tinggi Badan</td>
            <td width="110">: <?= $siswa["Tinggi_Badan"]; ?></td>
        </tr>
        <tr>
            <td width="180">Berat Badan</td>
            <td width="">: <?= $siswa["Berat_Badan"]; ?></td>
        </tr>
        <tr>
            <td width="180">Jarak Ke Sekolah</td>
            <td width="">: <?= $siswa["Jarak_Sekolah"]; ?></td>
        </tr>
        <tr>
            <td width="180">Waktu Tempuh Ke Sekolah</td>
            <td width="">: <?= $siswa["Waktu_Tempuh"]; ?></td>
        </tr>
        <tr>
            <td width="180">Jumlah Sudara Kandung</td>
            <td width="">: <?= $siswa["Saudara_Kandung"]; ?></td>
        </tr>
    </table>
    <!--<script type="text/javascript">
    window.print();
</script>-->

</page>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
 
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      
    </div>
    <strong>SMKS AL-HASYIMIYAH </a>.</strong> All rights reserved.
  </footer>
   <?php
              $id_user=$this->session->userdata('id_user');
              $q=$this->db->query("SELECT * FROM tbl_user WHERE id_user='$id_user'");
              $c=$q->row_array();
          ?>
 <div class="modal fade" id="ModalEdit<?php echo $id_user;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Edit Data</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'user/profil/update_mhs'?>" method="post">
                    <div class="modal-body">
                                
                             <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">NIPD</label>
                                <div class="col-sm-7">
                                  <input type="hidden" name="kode" value="<?php echo $id_user;?>">
                
                                  <input type="number" name="nim" class="form-control" value="<?php echo  $c['nim'];?>" id="inputUserName" placeholder="Nim" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Nama</label>
                                <div class="col-sm-7">
                                  <input type="text" name="nama" class="form-control" value="<?php echo  $c['nama_user'];?>" id="inputUserName" placeholder="Nama" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Kelas</label>
                                <div class="col-sm-7">
                                  <input type="kelas" name="kelas" class="form-control" value="<?php echo  $c['kelas'];?>" id="inputUserName" placeholder="kelas" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Jurusan</label>
                                <div class="col-sm-7">
                                  <input type="jurusan" name="jurusan" class="form-control" value="<?php echo  $c['jurusan'];?>" id="inputUserName" placeholder="jurusan" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Jenis Kelamin</label>
                                <div class="col-sm-7">
                                  <input type="jenis_kelamin" name="jenis_kelamin" class="form-control" value="<?php echo  $c['jenis_kelamin'];?>" id="inputUserName" placeholder="jenis_kelamin" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Tempat Tanggal Lahir</label>
                                <div class="col-sm-7">
                                  <input type="tempat_tl" name="tempat_tl" class="form-control" value="<?php echo  $c['tempat_tl'];?>" id="inputUserName" placeholder="tempat_tl" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Nama Ibu</label>
                                <div class="col-sm-7">
                                  <input type="nama_ibu" name="nama_ibu" class="form-control" value="<?php echo  $c['nama_ibu'];?>" id="inputUserName" placeholder="nama_ibu" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Alamat</label>
                                <div class="col-sm-7">
                                  <input type="alamat" name="alamat" class="form-control" value="<?php echo  $c['alamat'];?>" id="inputUserName" placeholder="alamat" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">No. HP</label>
                                <div class="col-sm-7">
                                  <input type="no_hp" name="no_hp" class="form-control" value="<?php echo  $c['no_hp'];?>" id="inputUserName" placeholder="no_hp" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Photo</label>
                                <div class="col-sm-7">
                                  <input type="photo" name="photo" class="form-control" value="<?php echo  $c['photo'];?>" id="inputUserName" placeholder="photo" required>
                                </div>
                            </div>
                               
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Password</label>
                                <div class="col-sm-7">
                                  <input type="password" name="Password" class="form-control" value="" id="inputUserName" placeholder="password" required>
                                </div>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Update</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
 
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url().'assets/plugins/jQuery/jquery-2.2.3.min.js'?>"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url().'assets/bootstrap/js/bootstrap.min.js'?>"></script>
<!-- Select2 -->
<script src="<?php echo base_url().'assets/plugins/select2/select2.full.min.js'?>"></script>
<!-- InputMask -->
<script src="<?php echo base_url().'assets/plugins/input-mask/jquery.inputmask.js'?>"></script>
<script src="<?php echo base_url().'assets/plugins/input-mask/jquery.inputmask.date.extensions.js'?>"></script>
<script src="<?php echo base_url().'assets/plugins/input-mask/jquery.inputmask.extensions.js'?>"></script>
<!-- date-range-picker -->
<script src="<?php echo base_url().'assets/plugins/daterangepicker/daterangepicker.js'?>"></script>
<!-- bootstrap datepicker -->
<script src="<?php echo base_url().'assets/plugins/datepicker/bootstrap-datepicker.js'?>"></script>
<!-- bootstrap color picker -->
<script src="<?php echo base_url().'assets/plugins/colorpicker/bootstrap-colorpicker.min.js'?>"></script>
<!-- bootstrap time picker -->
<script src="<?php echo base_url().'assets/plugins/timepicker/bootstrap-timepicker.min.js'?>"></script>
<!-- SlimScroll 1.3.0 -->
<script src="<?php echo base_url().'assets/plugins/slimScroll/jquery.slimscroll.min.js'?>"></script>
<!-- iCheck 1.0.1 -->
<script src="<?php echo base_url().'assets/plugins/iCheck/icheck.min.js'?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url().'assets/plugins/fastclick/fastclick.js'?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url().'assets/dist/js/app.min.js'?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url().'assets/dist/js/demo.js'?>"></script>
<script src="<?php echo base_url().'assets/ckeditor/ckeditor.js'?>"></script>
<!-- Page script -->

<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
<?php if($this->session->flashdata('msg')=='error'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Error',
                    text: "Password dan Ulangi Password yang Anda masukan tidak sama.",
                    showHideTransition: 'slide',
                    icon: 'error',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#FF4859'
                });
        </script>
    <?php elseif($this->session->flashdata('msg')=='warning'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Warning',
                    text: "Gambar yang Anda masukan terlalu besar.",
                    showHideTransition: 'slide',
                    icon: 'warning',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#FFC017'
                });
        </script>
    <?php elseif($this->session->flashdata('msg')=='succes'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Success',
                    text: "Data Berhasil disimpan ke database.",
                    showHideTransition: 'slide',
                    icon: 'success',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#7EC857'
                });
        </script>
    <?php elseif($this->session->flashdata('msg')=='info'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Info',
                    text: "Pengguna berhasil di update",
                    showHideTransition: 'slide',
                    icon: 'info',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#00C9E6'
                });
        </script>
    <?php elseif($this->session->flashdata('msg')=='success-hapus'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Success',
                    text: "Pengguna Berhasil dihapus.",
                    showHideTransition: 'slide',
                    icon: 'success',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#7EC857'
                });
        </script>
    <?php elseif($this->session->flashdata('msg')=='show-modal'):?>
        <script type="text/javascript">
                $('#ModalResetPassword').modal('show');
        </script>
    <?php else:?>

    <?php endif;?>
</body>

</html>