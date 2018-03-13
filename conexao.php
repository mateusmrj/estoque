<?php
$conectar = mysqli_connect("localhost","root","")or die ("Erro na conexão");
mysqli_select_db($conectar,"estoque")or die ("Base não encontrada");

?>
