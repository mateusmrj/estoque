<?php
session_start();
include_once("../seguranca.php");
include_once("../conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
	</head>

	<?php
  $id 				= $_POST["id"];
  $qtdeAtual  = $_POST["qtdeAtual"];
  $qtde       = $_POST["qtde"];

$estoque = $qtdeAtual-$qtde;



	$query = mysqli_query($conectar,"UPDATE produtos SET
		qtde			='$estoque'
		WHERE id='$id'");
    $teste ="UPDATE produtos SET
  		qtde ='$estoque',
  		WHERE id='$id'";


		if (mysqli_affected_rows($conectar) != 0 ){
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/controle/administrativo.php?link=10'>
				<script type=\"text/javascript\">
					alert(\"Quantidade atualizada com Sucesso.\");
				</script>
			";
		}
		 else{
				echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/controle/administrativo.php?link=10'>
				<script type=\"text/javascript\">
					alert(\"Quantidade não foi atualizada. \");
				</script>
			";

		}

		?>
	</body>
</html>
