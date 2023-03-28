<body>
  <section class="body">

      <!-- start: header -->
      <header class="header">
          <div class="logo-container">
              <a href="#" class="logo">
                  <img src="<?= base_url(); ?>assets/images/Favicon.png" height="35" alt="JSOFT Admin" />
                  | SMK AL-HASYIMIYAH
              </a>
              <div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
                  <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
              </div>
          </div>

          <!-- start: search & user box -->
          <div class="header-right">

              <span class="separator"></span>
              <div id="userbox" class="userbox">
                  <a href="#" data-toggle="dropdown">
                      <figure class="profile-picture">
                          <img src="<?= base_url(); ?>sekolah/logo fix.png" alt="Joseph Doe" class="img-circle" data-lock-picture="assets/images/!logged-user.jpg" />
                      </figure>
                      <div class="profile-info" data-lock-name="" data-lock-email="">
                          <span class="name"><?= $admin['username'] ?></span>
                          <span class="role">administrator</span>
                      </div>

                      <i class="fa custom-caret"></i>
                  </a>

                  <div class="dropdown-menu">
                      <ul class="list-unstyled">
                          <li class="divider"></li>
                          <li>
                              <a role="menuitem" tabindex="-1" href="<?= base_url(); ?>admin_dash/logout"><i class="fa fa-power-off"></i> Logout</a>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
          <!-- end: search & user box -->
      </header>
      <!-- end: header -->

      <div class="inner-wrapper">
          <!-- start: sidebar -->
          <aside id="sidebar-left" class="sidebar-left">

              <div class="sidebar-header">
                  <div class="sidebar-title">
                      Navigation
                  </div>
                  <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
                      <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                  </div>
              </div>

              <div class="nano">
                  <div class="nano-content">
                      <nav id="menu" class="nav-main" role="navigation">
                          <ul class="nav nav-main">
                              <li class="nav-active">
                                  <a href="<?= base_url(); ?>admin/dashboard">
                                      <i class="fa fa-home" aria-hidden="true"></i>
                                      <span>Dashboard</span>
                                  </a>
                              </li>
                              <li class="nav-parent nav-active nav-expanded">
                                  <a> <i class="fa fa-list-alt" aria-hidden="true"></i>
                                      <span>Pendaftar</span></a>
                                  <ul class="nav nav-children">
                                      <li>
                                          <a href="<?= base_url(); ?>admin_dash/pendaftar">
                                              <i class="fa fa-folder" aria-hidden="true"></i>
                                              <span>Seluruh</span>
                                          </a>
                                      </li>
                                      <li>
                                          <a href="<?= base_url(); ?>admin_dash/pendaftar_proses">
                                              <i class="fa fa-folder-open" aria-hidden="true"></i>
                                              <span>Belum Verifikasi</span>
                                          </a>
                                      </li>
                                      <li>
                                          <a href="<?= base_url(); ?>admin_dash/pendaftar_lulus">
                                              <i class="fa fa-check" aria-hidden="true"></i>
                                              <span>Lulus</span>
                                          </a>
                                      </li>
                                      <li>
                                          <a href="<?= base_url(); ?>admin_dash/pendaftar_tlulus">
                                              <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                                              <span> Tidak Lulus</span>
                                          </a>
                                      </li>
                                  </ul>
                              </li>
                              <li class="nav-active">
                                  <a href="<?= base_url(); ?>admin_dash/tambah_daftar">
                                      <i class="fa fa-edit" aria-hidden="true"></i>
                                      <span>Tambah Pendaftar</span>
                                  </a>
                              </li>
                              <li class="nav-active">
                                  <a href="<?= base_url(); ?>admin_dash/upload_data">
                                      <i class="fa fa-bullhorn" aria-hidden="true"></i>
                                      <span>Setting Pengumuman</span>
                                  </a>
                              </li>
                          </ul>
                      </nav>

                      <hr class="separator" />

                      <nav id="menu" class="nav-main" role="navigation">
                          <ul class="nav nav-main">
                              <li class="nav-active">
                                  <a href="<?= base_url(); ?>admin_dash/logout">
                                      <i class="fa fa-sign-out" aria-hidden="true"></i>
                                      <span>Sign Out</span>
                                  </a>
                              </li>
                          </ul>
                      </nav>

                      <hr class="separator" />
                  </div>

              </div>

          </aside>
          <!-- end: sidebar -->