<?php

if (session_status() != PHP_SESSION_ACTIVE) {
  session_start();
  if (isset($_SESSION['usuario'])) {
    $logged_user = $_SESSION['usuario'];
  }
}

$kermesse_nav = [
  "Parroquia" => "parroquia",
  "Kermesse" => "kermesse",
];

$caja_nav = [
  "Arqueo Caja" => "arqueo_caja",
  "Arqueo Caja Det" => "arqueo_caja_det",
  "Tasa de Cambio Det" => "tasa_cambio_det",
  "Denominación" => "denominacion",
  "Moneda" => "moneda",
];

$ingresos_com_nav = [
  "Ingresos Comunidad" => "ingreso_comunidad",
  "Ingresos Comunidad Det" => "ingreso_comunidad_det",
  "Control bonos" => "control_bonos",
  "Comunidad" => "comunidad",
];

$productos_nav = [
  "Productos" => "producto",
  "Categorías" => "categoria_productos",
];

$precios_nav = [
  "Lista de Precios" => "lista_precio",
  "Lista de Precios Det" => "lista_precio_det",
];

$gastos_nav = [
  "Gastos" => "gasto",
  "Categorías" => "categoria_gastos",
];

$seguridad_nav = [
  "Usuarios" => "usuarios",
  "Roles" => "rol",
  "Opciones" => "opcion",
  "Rol-Opciones" => "rol_opcion",
  "Rol-Usuario" => "rol_usuario",
];

$navigations = [
  "Kermesse" => $kermesse_nav,
  "Caja" => $caja_nav,
  "Comunidad" => $ingresos_com_nav,
  "Productos" => $productos_nav,
  "Precios" => $precios_nav,
  "Gastos" => $gastos_nav,
  "Seguridad" => $seguridad_nav,
]
?>
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
    <a class="navbar-brand ps-3" href="<?php echo $base_url?>/">Kermesse Project</a>
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
    <!-- Navbar account-->
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="<?php echo $base_url?>/#" role="button" data-bs-toggle="dropdown"
          aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
<?php if (isset($logged_user) && $logged_user != null): ?>
          <li><a class="dropdown-item" href="<?php echo $base_url?>/#!">Settings</a></li>
          <li><a class="dropdown-item" href="<?php echo $base_url?>/#!">Activity Log</a></li>
          <li>
            <hr class="dropdown-divider" />
          </li>
          <li><a class="dropdown-item" href="<?php echo $base_url?>/logout">Logout</a></li>
<?php else: ?>
          <li><a class="dropdown-item" href="<?php echo $base_url?>/login">Login</a></li>
<?php endif; ?>
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
            <a class="nav-link" href="<?php echo $base_url?>/">
              <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
              Dashboard
            </a>
            <div class="sb-sidenav-menu-heading">Interface</div>

          <?php foreach ($navigations as $nav_title => $nav_value): ?>
          <a class="nav-link collapsed" href="<?php echo $base_url?>/#" data-bs-toggle="collapse" data-bs-target="<?php echo "#collapse_$nav_title" ?> "
            aria-expanded="false" aria-controls="<?php echo "collapse_$nav_title" ?>">
              <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
              <?php echo $nav_title; ?>
              <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="<?php echo "collapse_$nav_title" ?>" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
              <nav class="sb-sidenav-menu-nested nav">
                <?php foreach($nav_value as $sub_title => $sub_value): ?>
                  <a class="nav-link" href="<?php echo $base_url?>/<?php echo $sub_value ?>"><?php echo $sub_title ?></a>
                <?php endforeach; ?>
              </nav>
            </div>
          <?php endforeach; ?>

            <div class="sb-sidenav-menu-heading">Addons</div>
            <a class="nav-link" href="<?php echo $base_url?>/charts.html">
              <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
              Charts
            </a>
          </div>
        </div>
        <div class="sb-sidenav-footer">
<?php if (isset($logged_user) && $logged_user != null): ?>
          <div class="small">Logged in as:</div>
          <?php echo $logged_user->get_full_name(); ?>
<?php else: ?>
          <div class="small">Not logged in</div>
<?php endif; ?>
        </div>
      </nav>
    </div>
    <div id="layoutSidenav_content">
