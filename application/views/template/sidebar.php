<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo base_url('assets/AdminLTE-2.0.5/dist/img/avatar5.png') ?>" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>Administrator</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
                <span class="input-group-btn">
                    <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
                <a href="<?php echo site_url('dashboard') ?>">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            <li class="treeview">
                <a href="<?php echo site_url('approval') ?>">
                    <i class="fa fa-dashboard"></i> <span>Pending Aprroval</span>
                </a>
            </li>
            <li class="treeview">
                <a href="<?php echo site_url('pilihrkpp') ?>">
                    <i class="fa fa-user"></i>
                    <span>Pilih RK dan PP</span>
                </a>
            </li>
            <li>
                <a href="<?php echo site_url('kesepakatankinerja') ?>">
                    <i class="fa fa-th"></i> <span>Pengajuan Kesepakatan</span> 
                </a>
            </li>                 
            <li class="treeview">
                <a href="<?php echo site_url('penilaiangenerik') ?>">
                    <i class="fa fa-laptop"></i>
                    <span>Penilaian Generik RK / AYD</span>
                </a>
            </li>
            <li class="treeview">
                <a href="<?php echo site_url('penilaianspesifik') ?>">
                    <i class="fa fa-edit"></i> <span>Penilaian Spesifik AYD</span>
                </a>
            </li>
            <li class="treeview">
                <a href="<?php echo site_url('hasilpenilaian') ?>">
                    <i class="fa fa-table"></i> <span>Hasil Penilaian SMK</span>
                </a>
            </li>
            <li class="treeview">
                <a href="<?php echo site_url('semester') ?>">
                    <i class="fa fa-table"></i> <span>Semester</span>
                </a>
            </li>
            <li class="treeview">
                <a href="<?php echo site_url('generik') ?>">
                    <i class="fa fa-table"></i> <span>Penilaian Generik</span>
                </a>
            </li>
            
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">