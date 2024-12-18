<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo BASEURL; ?>/css/bootstrap.css">
    <title><?php echo $data['judul']?></title>
</head>
<body>
    <div class="container">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">MVC</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link <?php echo ($data['judul'] == 'Home') ? 'active' : '' ?>" href="<?php echo BASEURL; ?>/home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo ($data['judul'] == 'About') ? 'active' : '' ?>" href="<?php echo BASEURL; ?>/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo ($data['judul'] == 'Daftar Mahasiswa') ? 'active' : '' ?>" href="<?php echo BASEURL; ?>/mahasiswa">Mahasiswa</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    </div>

    <div class="container mt-5">
    
