<?php
  include("config.php");

  $conexao = mysqli_connect(SERVER, USER, PASSWORD, DB) or die("Erro na conexão com o servidor: " . mysqli_connect_error());
