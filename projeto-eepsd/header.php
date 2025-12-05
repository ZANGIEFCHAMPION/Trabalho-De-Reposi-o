<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>EEPD - Escola Presidente Dutra</title>

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

    <!-- CSS EXTERNO -->
    <link rel="stylesheet" href="css/estilo.css">

</head>
<body>

<!-- MENU -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    
    <a class="navbar-brand" href="index.php">EEPD</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="menu">
      <ul class="navbar-nav me-auto">
        <li class="nav-item"><a class="nav-link" href="cursos.php">Cursos</a></li>
        <li class="nav-item"><a class="nav-link" href="blog.php">Blog</a></li>
        <li class="nav-item"><a class="nav-link" href="professores.php">Professores</a></li>
        <li class="nav-item"><a class="nav-link" href="alunos.php">Alunos</a></li>
        <li class="nav-item"><a class="nav-link" href="contato.php">Contato</a></li>
      </ul>

      <a href="login.php" class="btn btn-outline-light me-2">Login</a>
      <a href="cadastro.php" class="btn btn-success">Cadastro</a>
    </div>
  </div>
</nav>
