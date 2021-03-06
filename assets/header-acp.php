<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Cinefy interne Dashboard-Anwendung zur Verwaltung aller Kundendaten.">
    <meta name="author" content="Cinefy, Matthias Gerling, Tim Riegel, Bootstrap">
    <meta name="generator" content="Hugo 0.88.1">
    <link rel="icon" href="../assets/favicon.ico">
    <title><?php echo($title); ?> | Intern Cinefy</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">



    <!-- Bootstrap core CSS -->
<link href="../assets/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>


    <!-- Custom styles for this template -->
    <link href="../assets/dashboard.css" rel="stylesheet">

  </head>
  <body>

<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="index.php"><img src="../assets/logo-cutout.png" height="30" alt="Cinefy" title="Cinefy"></a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item" style="margin-left:5px;">
          <strong>Schnellzugriff</strong>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="index.php">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="crud.php">
              <span data-feather="edit"></span>
              CRUD
            </a>
          </li>
          <hr>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="../index.php">
              <span data-feather="globe"></span>
              Zur Homepage
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="../../phpmyadmin/">
              <span data-feather="database"></span>
              phpMyAdmin
            </a>
          </li>
          <hr>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="../logout.php">
              <span data-feather="log-out"></span>
              Logout
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <script src="../assets/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="../assets/dashboard.js"></script>
    <script src="https://use.fontawesome.com/a9f7fb24d5.js"></script>
