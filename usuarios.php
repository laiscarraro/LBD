<?php include 'Genericos/conecta.php'; ?>
<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <title>Usuários</title>

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
    <h1 class="font-weight-light logo-text">Usuários</h1>
    
    <input class="w-50 mx-auto mt-2 mb-2" type="text" id="myInput" onkeyup="myFunction()" placeholder="Procurar usuário...">
    
    <ul id="myUL">
    <?php
          $tsql = "SELECT nome, nroSocio FROM tb_Socio ORDER BY nome";
          $dados   = sqlsrv_query($conn, $tsql);

          while($row = sqlsrv_fetch_array($dados, SQLSRV_FETCH_ASSOC)) {
              ?><li><a class="w-50 mx-auto mt-2 mb-2" href="usuarioID.php?nroSocio=<?php echo $row['nroSocio'];?>&nome=<?php echo $row['nome'];?>"><?php echo $row['nome'];?></a></li><?php
          }
      ?>
    </ul>
</div>

<div style="color: white;">Icons made by <a href="http://www.freepik.com/" style="color: hsla(0, 100%, 35%, 1)" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" style="color: hsla(0, 100%, 35%, 1)" title="Flaticon">www.flaticon.com</a></div>

<script>
function myFunction() {
  // Declare variables
  var input, filter, ul, li, a, i, txtValue;
  input = document.getElementById('myInput');
  filter = input.value.toUpperCase();
  ul = document.getElementById("myUL");
  li = ul.getElementsByTagName('li');

  // Loop through all list items, and hide those who don't match the search query
  for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("a")[0];
    txtValue = a.textContent || a.innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
}
</script>
  
</body>