<?php include 'Genericos/conecta.php'; ?>
<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <title>Menu</title>

  <!-- Stylesheets -->
  <link rel = "stylesheet" href = "style.css">
  
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  
  <!-- Ajax -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  
</head>

<body>
<div class="container">
  <div class="card border-0 shadow mt-4 mb-5 pb-5">
    <img src="logo.png" onclick="window.location.href='index.php'" class="rounded mx-auto logo mt-3" alt="logo">
    <h1 class="font-weight-light logo-text">Sempre Em Forma</h1>
    <button type="button" onclick="window.location.href='salas.php'" class="btn btn-default w-50 mx-auto mt-2 mb-2"><h3 class="font-weight-light">Salas</h3></button>
    <button type="button" onclick="window.location.href='usuarios.php'" class="btn btn-default w-50 mx-auto mt-2 mb-2"><h3 class="font-weight-light">Usuários</h3></button>
    <button type="button" onclick="window.location.href='reservar.php'" class="btn btn-default w-50 mx-auto mt-2 mb-2"><h3 class="font-weight-light">Reservar Sala</h3></button>
  </div>
</div>

<div style="color: white;">Icons made by <a href="http://www.freepik.com/" style="color: hsla(0, 100%, 35%, 1)" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" style="color: hsla(0, 100%, 35%, 1)" title="Flaticon">www.flaticon.com</a></div>

<script>
  
</script>
  
</body>