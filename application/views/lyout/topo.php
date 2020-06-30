<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Loja Virtual | Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets'); ?>/DataTables/datatables.css">


  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/template'); ?>/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url('assets/template'); ?>/dist/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/template'); ?>/dist/font-awesome/css/fontawesome.min.css">

  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/template'); ?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url('assets/template'); ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo base_url('assets/template'); ?>plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/template'); ?>dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url('assets/template'); ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url('assets/template'); ?>plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo base_url('assets/template'); ?>plugins/summernote/summernote-bs4.css">



  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url('assets/template'); ?>/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">


        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
            Sair do Sistema <i class="fas fa-th-large"></i>

          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="#" class="brand-link">
        <img src="<?php echo base_url('assets/template'); ?>/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Loja 3</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user (optional) -->


        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                <p>
                  Usuarios
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview" style="display: none;">
                <li class="nav-item">
                  <a href="<?php echo site_url('admin/usuarios'); ?>" class="nav-link">
                    <i class="far fa-address-book"></i>
                    <p>Lista de Usuarios</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo site_url('admin/usuarios/modulo'); ?>" class="nav-link">
                    <i class="fas fa-user-plus"></i>
                    <p>Novo Usuario</p>
                  </a>
                </li>

              </ul>
            </li>





            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                <p>
                  Config
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?php echo base_url('admin/config'); ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Loja</p>
                  </a>
                </li>




              </ul>

            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                <p>
                  Categorias
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview" style="display: none;">
                <li class="nav-item">
                  <a href="<?php echo base_url('categoria'); ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Lista Categorias</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url('categoria/novo'); ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Novo categoria</p>
                  </a>
                </li>

              </ul>
            </li>
            

            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                <p>
                  Categorias PAI
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview" style="display: none;">
                <li class="nav-item">
                  <a href="<?php echo base_url('categoriapai'); ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Lista Categoria PAIS</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url('categoriapai/novo'); ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Nova categoria PAI</p>
                  </a>
                </li>

              </ul>
            </li>

            
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                <p>
                  Marcas
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview" style="display: none;">
                <li class="nav-item">
                  <a href="<?php echo base_url('marca'); ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Lista Marcas</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url('marca/novo'); ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Nova Marca</p>
                  </a>
                </li>

              </ul>
            </li>


            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                <p>
                  Clientes
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview" style="display: none;">
                <li class="nav-item">
                  <a href="<?php echo base_url('cliente'); ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Lista Clientes</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url('cliente/novo'); ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Novo Cliente</p>
                  </a>
                </li>

              </ul>
            </li>

            
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                <p>
                  Produtos
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview" style="display: none;">
                <li class="nav-item">
                  <a href="<?php echo base_url('produto'); ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Lista Produtos</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url('produto/novo'); ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Novo Produto</p>
                  </a>
                </li>

              </ul>
            </li>

            <li class="nav-item">
              <a href="<?php echo base_url('admin/login/sair'); ?>" class="nav-link">
                <i class="fas fa-sign-out-alt"></i>
                <p>Sair</p>
              </a>
            </li>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>