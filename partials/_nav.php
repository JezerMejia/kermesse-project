<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title><?php echo($page_title) ?></title>
  <link href="<?php echo $base_url?>/css/styles.css" rel="stylesheet" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo $base_url?>/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo $base_url?>/css/datatables.min.css">
  <link rel="stylesheet" href="<?php echo $base_url?>/css/responsive.bootstrap5.min.css">
  <link rel="stylesheet" href="<?php echo $base_url?>/css/buttons.bootstrap5.min.css">
  <!-- jAlert css  -->
  <link rel="stylesheet" href="<?php echo $base_url?>/css/jAlert.css" />
</head>

<body class="sb-nav-fixed">
  <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="<?php echo $base_url?>/./">Kermesse Project</a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="<?php echo $base_url?>/#!"><i
        class="fas fa-bars"></i></button>
    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
      <div class="input-group">
        <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..."
          aria-describedby="btnNavbarSearch" />
        <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
      </div>
    </form>
    <!-- Navbar-->
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="<?php echo $base_url?>/#" role="button" data-bs-toggle="dropdown"
          aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="<?php echo $base_url?>/#!">Settings</a></li>
          <li><a class="dropdown-item" href="<?php echo $base_url?>/#!">Activity Log</a></li>
          <li>
            <hr class="dropdown-divider" />
          </li>
          <li><a class="dropdown-item" href="<?php echo $base_url?>/#!">Logout</a></li>
        </ul>
      </li>
    </ul>
  </nav>
  <div id="layoutSidenav">
    <div id="layoutSidenav_nav">
      <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
          <div class="nav">
            <div class="sb-sidenav-menu-heading">Core</div>
            <a class="nav-link" href="<?php echo $base_url?>/./hola">
              <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
              Dashboard
            </a>
            <div class="sb-sidenav-menu-heading">Interface</div>
            <a class="nav-link collapsed" href="<?php echo $base_url?>/#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts"
              aria-expanded="false" aria-controls="collapseLayouts">
              <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
              Layouts
              <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
              <nav class="sb-sidenav-menu-nested nav">
                <a class="nav-link" href="<?php echo $base_url?>/layout-static.html">Static Navigation</a>
                <a class="nav-link" href="<?php echo $base_url?>/layout-sidenav-light.html">Light Sidenav</a>
              </nav>
            </div>
            <a class="nav-link collapsed" href="<?php echo $base_url?>/#" data-bs-toggle="collapse" data-bs-target="#collapsePages"
              aria-expanded="false" aria-controls="collapsePages">
              <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
              Pages
              <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
              <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                <a class="nav-link collapsed" href="<?php echo $base_url?>/#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth"
                  aria-expanded="false" aria-controls="pagesCollapseAuth">
                  Authentication
                  <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne"
                  data-bs-parent="#sidenavAccordionPages">
                  <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="<?php echo $base_url?>/login.html">Login</a>
                    <a class="nav-link" href="<?php echo $base_url?>/register.html">Register</a>
                    <a class="nav-link" href="<?php echo $base_url?>/password.html">Forgot Password</a>
                  </nav>
                </div>
                <a class="nav-link collapsed" href="<?php echo $base_url?>/#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError"
                  aria-expanded="false" aria-controls="pagesCollapseError">
                  Error
                  <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne"
                  data-bs-parent="#sidenavAccordionPages">
                  <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="<?php echo $base_url?>/401.html">401 Page</a>
                    <a class="nav-link" href="<?php echo $base_url?>/404.html">404 Page</a>
                    <a class="nav-link" href="<?php echo $base_url?>/500.html">500 Page</a>
                  </nav>
                </div>
              </nav>
            </div>
            <div class="sb-sidenav-menu-heading">Addons</div>
            <a class="nav-link" href="<?php echo $base_url?>/charts.html">
              <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
              Charts
            </a>
            <a class="nav-link" href="<?php echo $base_url?>/arqueo_caja">
              <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
              Arqueo caja
            </a>
            <a class="nav-link" href="<?php echo $base_url?>/arqueo_caja_det">
              <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
              Arqueo caja det
            </a>
            <a class="nav-link" href="<?php echo $base_url?>/categoria_gastos">
              <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
              Categoria gastos
            </a>
            <a class="nav-link" href="<?php echo $base_url?>/categoria_productos">
              <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
              Categoria productos
            </a>
            <a class="nav-link" href="<?php echo $base_url?>/comunidad">
              <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
              Comunidad
            </a>
            <a class="nav-link" href="<?php echo $base_url?>/control_bonos">
              <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
              Control bonos
            </a>
            <a class="nav-link" href="<?php echo $base_url?>/denominacion">
              <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
              Denominacion
            </a>
            <a class="nav-link" href="<?php echo $base_url?>/gasto">
              <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
              Gasto
            </a>
            <a class="nav-link" href="<?php echo $base_url?>/ingreso_comunidad">
              <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
              Ingreso Comunidad
            </a>
            <a class="nav-link" href="<?php echo $base_url?>/ingreso_comunidad_det">
              <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
              Ingreso Comunidad Det
            </a>
            <a class="nav-link" href="<?php echo $base_url?>/kermesse">
              <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
              Kermesse
            </a>
            <a class="nav-link" href="<?php echo $base_url?>/lista_precio">
              <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
              Lista precio
            </a>
            <a class="nav-link" href="<?php echo $base_url?>/lista_precio_det">
              <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
              Lista precio det
            </a>
            <a class="nav-link" href="<?php echo $base_url?>/moneda">
              <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
              Moneda
            </a>
            <a class="nav-link" href="<?php echo $base_url?>/opcion">
              <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
              Opcion
            </a>
            <a class="nav-link" href="<?php echo $base_url?>/parroquia">
              <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
              Parroquia
            </a>
            <a class="nav-link" href="<?php echo $base_url?>/producto">
              <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
              Producto
            </a>
            <a class="nav-link" href="<?php echo $base_url?>/rol">
              <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
              Rol
            </a>
            <a class="nav-link" href="<?php echo $base_url?>/rol_opcion">
              <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
              Rol Opcion
            </a>
            <a class="nav-link" href="<?php echo $base_url?>/rol_usuario">
              <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
              Rol Usuario
            </a>
            <a class="nav-link" href="<?php echo $base_url?>/tasa_cambio">
              <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
              Tasa cambio
            </a>
            <a class="nav-link" href="<?php echo $base_url?>/tasa_cambio_det">
              <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
              Tasa cambio det
            </a>
            <a class="nav-link" href="<?php echo $base_url?>/usuario">
              <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
              Usuario
            </a>
            <a class="nav-link" href="<?php echo $base_url?>/tables.html">
              <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
              Tables
            </a>
          </div>
        </div>
        <div class="sb-sidenav-footer">
          <div class="small">Logged in as:</div>
          Start Bootstrap
        </div>
      </nav>
    </div>
    <div id="layoutSidenav_content">