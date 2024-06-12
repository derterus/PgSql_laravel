
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>AdminLTE 3 | Starter</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

      <!-- Preloader -->
      <div class="preloader flex-column justify-content-center align-items-center">
          <p class="animation__shake">Админ</p>
      </div>

      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
          <!-- Left navbar links -->
          <ul class="navbar-nav">
              <li class="nav-item">
                  <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                          class="fas fa-bars"></i></a>
              </li>
          </ul>

          <!-- Right navbar links -->
          <ul class="navbar-nav ml-auto">


              <!-- Messages Dropdown Menu -->

              <!-- Notifications Dropdown Menu -->


          </ul>
      </nav>
      <!-- /.navbar -->

      <!-- Main Sidebar Container -->

      <aside class="main-sidebar sidebar-dark-primary elevation-4">
          <!-- Brand Logo -->
          <a href="/admin" class="brand-link" style="text-align: center;">
              <span>Панель Администратора</span>
          </a>

          <!-- Sidebar -->
          <div class="sidebar">

              <!-- Sidebar Menu -->
              <nav class="mt-2">
                  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                      data-accordion="false">
                      <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
                      <li class="nav-item">
                          <a href="/" class="nav-link">
                              <i class="nav-icon fas fa-home"></i>
                              <p>
                                  Перейти на главную
                              </p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="/suppliers" class="nav-link">
                              <i class="nav-icon fas fa-truck"></i>
                              <p>
                                  Поставщики
                              </p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="/publishers" class="nav-link">
                              <i class="nav-icon fas fa-envelope"></i>
                              <p>
                                  Издательства
                              </p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="/authors" class="nav-link">
                              <i class="nav-icon fas fa-user-edit"></i>
                              <p>
                                  Авторы
                              </p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="/pages" class="nav-link">
                              <i class="nav-icon fas fa-columns"></i>
                              <p>
                                  Разделы
                              </p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="/home/books" class="nav-link">
                              <i class="nav-icon fas fa-book"></i>
                              <p>
                                  Книги
                              </p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="/ords" class="nav-link">
                              <i class="nav-icon fas fa-shopping-bag"></i>
                              <p>
                                  Заказы
                              </p>
                          </a>
                      </li>
                  </ul>
              </nav>
              <!-- /.sidebar-menu -->
          </div>
          <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
          <!-- Content Header (Page header) -->
          <div class="content-header">
              <div class="container-fluid">
                  <div class="row mb-2">
                      <div class="col-sm-6">
                          <h1 class="m-0">Главная</h1>
                      </div><!-- /.col -->
                      <div class="col-sm-6">
                          <ol class="breadcrumb float-sm-right">
                              <li class="breadcrumb-item active">Главная</li>
                          </ol>
                      </div><!-- /.col -->
                  </div><!-- /.row -->
              </div><!-- /.container-fluid -->
          </div>
          <!-- /.content-header -->

          <!-- Main content -->
          <section class="content">
              <div class="container-fluid">
                  <!-- Small boxes (Stat box) -->
                  <div class="row">

                      <!-- ./col -->
                      <div class="col-lg-3 col-6">
                          <!-- small box -->
                          <div class="small-box bg-success">
                              <div class="inner">
                                  <h3></h3>

                                  <p>Поставщики</p>
                              </div>
                              <div class="icon">
                                  <i class="ion ion-stats-bars"></i>
                              </div>
                              <a href="/suppliers" class="small-box-footer">Подробнее <i
                                      class="fas fa-arrow-circle-right"></i></a>
                          </div>
                      </div>
                      <div class="col-lg-3 col-6">
                          <!-- small box -->
                          <div class="small-box bg-info">
                              <div class="inner">
                                  <h3></h3>

                                  <p>Издательства</p>
                              </div>
                              <div class="icon">
                                  <i class="ion ion-person-add"></i>
                              </div>
                              <a href="/publishers" class="small-box-footer">Подробнее <i
                                      class="fas fa-arrow-circle-right"></i></a>
                          </div>
                      </div>
                      <div class="col-lg-3 col-6">
                          <!-- small box -->
                          <div class="small-box bg-danger">
                              <div class="inner">
                                  <h3></h3>

                                  <p>Авторы</p>
                              </div>
                              <div class="icon">
                                  <i class="ion ion-person-add"></i>
                              </div>
                              <a href="/authors" class="small-box-footer">Подробнее <i
                                      class="fas fa-arrow-circle-right"></i></a>
                          </div>
                      </div>
                      <!-- ./col -->
                      <div class="col-lg-3 col-6">
                          <!-- small box -->
                          <div class="small-box bg-success">
                              <div class="inner">
                                  <h3></h3>

                                  <p>Разделы</p>
                              </div>
                              <div class="icon">
                                  <i class="ion ion-person-add"></i>
                              </div>
                              <a href="/pages" class="small-box-footer">Подробнее <i
                                      class="fas fa-arrow-circle-right"></i></a>
                          </div>
                      </div>
                      <div class="col-lg-3 col-6">
                          <!-- small box -->
                          <div class="small-box bg-danger">
                              <div class="inner">
                                  <h3></h3>

                                  <p>Книги</p>
                              </div>
                              <div class="icon">
                                  <i class="ion ion-person-add"></i>
                              </div>
                              <a href="/home/books" class="small-box-footer">Подробнее <i
                                      class="fas fa-arrow-circle-right"></i></a>
                          </div>
                      </div>
                      <div class="col-lg-3 col-6">
                          <!-- small box -->
                          <div class="small-box bg-secondary">
                              <div class="inner">
                                  <h3></h3>

                                  <p>Заказы</p>
                              </div>
                              <div class="icon">
                                  <i class="ion ion-bag"></i>
                              </div>
                              <a href="/ords" class="small-box-footer">Подробнее <i
                                      class="fas fa-arrow-circle-right"></i></a>
                          </div>
                      </div>
                      <!-- ./col -->
                      <!-- ./col -->
                  </div>
              </div><!-- /.container-fluid -->
          </section>
          <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
          <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
  </div>

<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

