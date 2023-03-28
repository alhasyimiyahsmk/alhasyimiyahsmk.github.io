<footer id="colorlib-footer">
    <div class="container">
        <div class="row row-pb-md">
            <div class="col-md-3 colorlib-widget">
                <h4>Keterangan</h4>
                <p>Bila menemukan kesulitan dalam melakukan pendaftaran. Silakan hubungi
                    kontak kami yang telah tersedia.
                </p>
                <p>
                    <ul class="colorlib-social-icons">
                        <li>
                            <a href="https://www.facebook.com/" target="_blank">
                                <p><i class="icon-facebook"></i>SMKS AL-HASYIMIYAH</p>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/" target="_blank">
                                <p><i class="icon-youtube"></i> SMKS AL-HASYIMIYAH</p>
                            </a>
                        </li>
                        
                    </ul>
                </p>
            </div>
            <div class="col-md-3 colorlib-widget">
                <h4>Quick Links</h4>
                <p>
                    <ul class="colorlib-footer-links">
                        <li><a href="<?= base_url(); ?>home/index"><i class="icon-check"></i> Home</a></li>
                        <li><a href="<?= base_url(); ?>home/cek_status"><i class="icon-check"></i> Cek Status</a></li>
                        <li><a href="<?= base_url(); ?>home/kontak_kami"><i class="icon-check"></i> Kontak Kami</a></li>
                    </ul>
                </p>
            </div>

            <div class="col-md-3 colorlib-widget">
                <h4>Kontak Info</h4>
                <ul class="colorlib-footer-links">
                    <li>Jl. Hanjawar Pacet RT 02/01 Kp. Cibadak Desa Sukanagalih Kec. Pacet Kab. Cianjur Prov. Jawa Barat</li>
                    <?php foreach ($sekolah as $skl) : ?>
                        <li><a><i class="icon-phone"></i><?= $skl['kontak1']; ?></a>
                        </li>
                        <li><a><i class="icon-phone"></i><?= $skl['kontak2']; ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</footer>
</div>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
</div>

<!-- jQuery -->
<script src="<?= base_url('assets/'); ?>js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="<?= base_url('assets/'); ?>js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="<?= base_url('assets/'); ?>js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="<?= base_url('assets/'); ?>js/jquery.waypoints.min.js"></script>
<!-- Stellar Parallax -->
<script src="<?= base_url('assets/'); ?>js/jquery.stellar.min.js"></script>
<!-- Flexslider -->
<script src="<?= base_url('assets/'); ?>js/jquery.flexslider-min.js"></script>
<!-- Owl carousel -->
<script src="<?= base_url('assets/'); ?>js/owl.carousel.min.js"></script>
<!-- Magnific Popup -->
<script src="<?= base_url('assets/'); ?>js/jquery.magnific-popup.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/magnific-popup-options.js"></script>
<!-- Counters -->
<script src="<?= base_url('assets/'); ?>js/jquery.countTo.js"></script>
<!-- Main -->
<script src="<?= base_url('assets/'); ?>js/main.js"></script>

<!--datatables-->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
<script>
    $(document).ready(function() {
        $('#cek_status').DataTable();
    })
</script>

</body>

</html>