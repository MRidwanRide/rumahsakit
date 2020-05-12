<div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <!-- <a class="navbar-brand" href="index.html">Concept</a> -->
                <center><a href="<?php echo base_url();?>"><img style="height:35px;padding-left:20px;" src="<?php echo base_url();?>assets/frontview/img/logo3.png" alt=""></a></center>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo base_url();?>assets/backview/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name">Welcome Administrator</h5>
                                </div>
                                <a class="dropdown-item" href="<?php echo base_url();?>login/logout"><i class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                             <li class="nav-item active">
                                <a class="nav-link active" href="<?php echo base_url(); ?>" ><i class="fa fa-fw fa-comments"></i>Go to Main Page<span class="badge badge-success"></span></a>
                            </li>
                            <div style="border:0.1px solid #303456; margin-top:15px; margin-bottom:15px;">
                            </div>
                            <li class="nav-divider">
                                LAMAN ADMIN 
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="<?php echo base_url(); ?>admin" ><i class="fa fa-fw fa-comments"></i>Kelola Blog <span class="badge badge-success">6</span></a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="<?php echo base_url(); ?>admin/banner" ><i class="fa fa-fw fa-film"></i>Kelola Banner <span class="badge badge-success">6</span></a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="<?php echo base_url(); ?>admin/karir/" ><i class="fa fa-fw fa-rocket"></i>Kelola Karir <span class="badge badge-success">6</span></a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="<?php echo base_url(); ?>admin/kontak" ><i class="fa fa-fw fa-user-circle"></i>Kelola Kontak <span class="badge badge-success">6</span></a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="<?php echo base_url(); ?>admin/galeri" ><i class="fa fa-fw fa-image"></i>Kelola Galeri <span class="badge badge-success">6</span></a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="<?php echo base_url(); ?>admin/jadwaldokter" ><i class="fa fa-fw fa-folder-open"></i>Kelola Jadwal Dokter <span class="badge badge-success">6</span></a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="<?php echo base_url(); ?>admin/rekanan" ><i class="fa fa-fw fa-magnet"></i>Kelola Rekanan<span class="badge badge-success">6</span></a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="<?php echo base_url(); ?>admin/pasien" ><i class="fa fa-fw fa-users"></i>Kelola Pasien<span class="badge badge-success">6</span></a>
                            </li>
                            <div style="border:0.1px solid #303456; margin-top:15px; margin-bottom:15px;">
                            </div>
                            <li class="nav-item ">
                                <a class="nav-link" href="<?php echo base_url(); ?>login/logout" ><i class="fa fa-fw fa-unlock"></i>Logout<span class="badge badge-success">6</span></a>
                            </li>
                            <!-- <li class="nav-divider">
                                MENU
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url(); ?>" ><i class="fas fa-fw fa-file"></i> Kelola Blog </a>
                            </li> -->
                        </ul>
                    </div>
                </nav>
            </div>
        </div>