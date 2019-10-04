<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title></title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/fonts/line-icons.css">
    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/morris/morris.css">
    <!-- Main Style -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/main.css">
    <!-- Responsive Style -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/responsive.css">

  </head>

  <body>
    <div class="app header-default side-nav-dark">
      <div class="layout">
        <!-- Header START -->
        <div class="header navbar">
          <div class="header-container">
            <div class="nav-logo">
              <a href="<?php echo base_url();?>/admin/dashboard">
                <b><img src="<?php echo base_url();?>assets/img/logo.png" alt=""></b>
                <span class="logo">
                  <img src="<?php echo base_url();?>assets/img/logo-text.png" alt="">
                </span>
              </a>
            </div>
            <ul class="nav-left">
              <li>
                <a class="sidenav-fold-toggler" href="javascript:void(0);">
                  <i class="lni-menu"></i>
                </a>
                <a class="sidenav-expand-toggler" href="javascript:void(0);">
                  <i class="lni-menu"></i>
                </a>
              </li>
            </ul>
            <ul class="nav-right">
              <li class="user-profile dropdown dropdown-animated scale-left">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="lni-user"></i>
                </a>
                <ul class="dropdown-menu dropdown-md">
                  <li>
                    <ul class="list-media">
                      <li class="list-item avatar-info">
                        <div class="media-img">
                          <img src="<?php echo base_url();?>assets/img/avatar/avatar.jpg" alt="">
                        </div>
                        <div class="info">
                          <span class="title text-semibold">Administrator</span>
                          <span class="sub-title">BKPPD</span>
                        </div>
                      </li>
                    </ul>
                  </li>
                  <li role="separator" class="divider"></li>
                  <li>
                    <a href="">
                      <i class="lni-cog"></i>
                      <span>Setting</span>
                    </a>
                  </li>
                  <li>
                    <a href="">
                      <i class="lni-user"></i>
                      <span>Profile</span>
                    </a>
                  </li>
                  <li>
                    <a href="/auth/logout">
                      <i class="lni-lock"></i>
                      <span>Logout</span>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
        <!-- Header END -->

        <!-- Side Nav START -->
        <div class="side-nav expand-lg">
          <div class="side-nav-inner">
            <ul class="side-nav-menu">
              <li class="side-nav-header">
                <span>Navigation</span>
              </li>
              <li class="nav-item dropdown">
                <a href="<?php echo base_url();?>admin/dashboard" class="dropdown-toggle">
                  <span class="icon-holder">
                    <i class="lni-dashboard"></i>
                  </span>
                  <span class="title">Dashboard</span>
                  <span class="arrow">
                    
                  </span>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="#">
                    <span class="icon-holder">
                      <i class="lni-archive"></i>
                    </span>
                    <span class="title">Master Data</span>
                    <span class="arrow">
                      <i class="lni-chevron-right"></i>
                    </span>
                  </a>
                <ul class="dropdown-menu sub-down">
                  <li>
                    <a href="<?php echo base_url();?>masterdata/kompetensi">Kompetensi</a>
                  </li>
                  <li>
                    <a href="<?php echo base_url();?>masterdata/jabatan">Jabatan</a>
                  </li>
                  <li>
                    <a href="<?php echo base_url();?>masterdata/pegawai">Pegawai</a>
                  </li>
                  
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="#">
                    <span class="icon-holder">
                      <i class="lni-arrow-up"></i>
                    </span>
                    <span class="title">Promosi</span>
                    <span class="arrow">
                      <i class="lni-chevron-right"></i>
                    </span>
                  </a>
                <ul class="dropdown-menu sub-down">
                  <li>
                    <a href="<?php echo base_url();?>promosi/pegawai">Pegawai</a>
                  </li>
                  <li>
                    <a href="<?php echo base_url();?>promosi/jabatan">Jabatan</a>
                  </li>
                  <li>
                    <a href="<?php echo base_url();?>promosi/kandidat">Kandidat</a>
                  </li>
                  
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="#">
                    <span class="icon-holder">
                      <i class="lni-arrows-horizontal"></i>
                    </span>
                    <span class="title">Mutasi</span>
                    <span class="arrow">
                      <i class="lni-chevron-right"></i>
                    </span>
                  </a>
                <ul class="dropdown-menu sub-down">
                  <li>
                    <a href="<?php echo base_url();?>mutasi/jabatan">Detail Jabatan</a>
                  </li>
                  <li>
                    <a href="<?php echo base_url();?>mutasi/rancang">Rancang Mutasi</a>
                  </li>
                  <li>
                    <a href="<?php echo base_url();?>mutasi/buat">Buat Mutasi</a>
                  </li>
                  
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="#">
                    <span class="icon-holder">
                      <i class="lni-stats-up"></i>
                    </span>
                    <span class="title">Statistik</span>
                    <span class="arrow">
                      <i class="lni-chevron-right"></i>
                    </span>
                  </a>
                <ul class="dropdown-menu sub-down">
                  <li>
                    <a href="<?php echo base_url();?>statistik/jabatan">Jabatan</a>
                  </li>
                  <li>
                    <a href="<?php echo base_url();?>statistik/kompetensi">Kompetensi</a>
                  </li>
                  
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a href="<?php echo base_url();?>admin/pengaturan" class="dropdown-toggle">
                  <span class="icon-holder">
                    <i class="lni-cog"></i>
                  </span>
                  <span class="title">Pengaturan</span>
                  <span class="arrow">
                    
                  </span>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <!-- Side Nav END -->