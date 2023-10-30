<?php define('img', 'assets/images/'); define('Url',"http://pro.loc/"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="<?= Url.'assets/bootstrap-5.3.2-dist/css/bootstrap.min.css' ?>" rel="stylesheet" crossorigin="anonymous">
  <link rel="stylesheet" href="<?= Url.'assets/styles/style.css' ?>">
  <link rel="stylesheet" href="<?= Url.'assets/styles/utilities.css' ?>">
  <link rel="stylesheet" href="<?= Url.'assets/styles/fonts.css' ?>">
  <link rel="stylesheet" href="<?= Url.'assets/styles/media.css' ?>">
  <link rel="stylesheet" href="<?= Url.'assets/fontawesome/css/fontawesome.min.css' ?>">
  <link rel="stylesheet" href="<?= Url.'assets/fontawesome/css/brands.min.css' ?>">
  <link rel="stylesheet" href="<?= Url.'assets/fontawesome/css/solid.min.css' ?>">
</head>

<body>
  <header>
    <!-- Navbar -->
    <nav class="navbar navbar-light">
      <div class="container-fluid">
        <!-- Logo (Centered) -->
        <a class="navbar-brand mx-auto" href="#">
          <img src="<?= img.'logo.png' ?>" class="logo" alt="Your Logo">
        </a>
        <button class="navbar-dots navbar-toggler border-none" type="button" data-bs-toggle="offcanvas"
          data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
          <img src="<?= img.'menu.png' ?>" alt="Your Logo">
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header border-bottom-blue">
            <button type="button" class="btn m-2" data-bs-dismiss="offcanvas" aria-label="Close">
              <svg width="30" height="30" viewBox="0 0 50 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="Group 690">
                  <rect id="Rectangle 122" width="64.2824" height="6.42824" rx="3.21412"
                    transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 50 46.0825)" fill="#2B227D" />
                  <rect id="Rectangle 148" y="46.0825" width="64.2824" height="6.42824" rx="3.21412"
                    transform="rotate(-45 0 46.0825)" fill="#2B227D" />
                </g>
              </svg>
            </button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1">
              <li class="nav-item border-bottom-blue p-2">
                <a class="nav-link active fs-3" aria-current="page" href="<?= Url ?>">Home Page</a>
              </li>
              <li class="nav-item border-bottom-blue p-2">
                <a class="nav-link fs-3" href="<?= Url ?>">EMPLOYERS</a>
              </li>
              <li class="nav-item border-bottom-blue p-2">
                <a class="nav-link fs-3" href="<?= Url.'eight-reasons.php' ?>">Eight Reasons</a>
              </li>
              <li class="nav-item border-bottom-blue p-2">
                <a class="nav-link fs-3" href="<?= Url.'why-mpe.php' ?>">Why MPE?</a>
              </li>
              <li class="nav-item border-bottom-blue p-2">
                <a class="nav-link fs-3" href="<?= Url.'all-exams.php' ?>">All Exams</a>
              </li>
              <li class="nav-item border-bottom-blue p-2">
                <a class="nav-link fs-3" href="<?= Url.'international-license.php' ?>">International License </a>
              </li>
              <li class="nav-item border-bottom-blue p-2">
                <a class="nav-link fs-3" href="<?= Url.'global-register.php' ?>">Global Register</a>
              </li>
              <li class="nav-item border-bottom-blue p-2">
                <a class="nav-link fs-3" href="<?= Url.'global-diploma.php' ?>">Global Diploma</a>
              </li>
              <li class="nav-item border-bottom-blue p-2">
                <a class="nav-link fs-3" href="<?= Url.'tesol.php' ?>">TESOL</a>
              </li>
              <li class="nav-item border-bottom-blue p-2">
                <a class="nav-link fs-3" href="<?= Url.'global-diploma.php' ?>">Global Diploma</a>
              </li>
              <li class="nav-item border-bottom-blue p-2">
                <a class="nav-link fs-3" href="<?= Url.'code-of-conduct.php' ?>">Professional Code of Conduct</a>
              </li>
              <li class="nav-item border-bottom-blue p-2">
                <a class="nav-link fs-3" href="<?= Url.'professional-commitment.php' ?>">Professional Commitment</a>
              </li>
              <li class="nav-item border-bottom-blue p-2">
                <a class="nav-link fs-3" href="<?= Url.'governing-board.php' ?>">Governing Board</a>
              </li>
              <li class="nav-item p-2">
                <a class="nav-link fs-3" href="<?= Url.'how-to-prepare.php' ?>">How to prepare</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </header>
  <!-- Main -->
  <main class="container-fluid main-content">
    <div class="mx-1 border-frame">