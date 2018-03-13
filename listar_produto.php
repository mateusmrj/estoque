
<?php

	$resultado=mysqli_query($conectar,"SELECT * FROM produtos ORDER BY 'id'");
	$linhas=mysqli_num_rows($resultado);
?>
<div class="container theme-showcase" role="main">
  <div class="page-header">
	<h1>Lista de Produtos</h1>
  </div>
  <div class="row espaco">
		<div class="pull-right">
			<a href="administrativo.php?link=11"><button type='button' class='btn btn-sm btn-success'>Cadastrar</button></a>
		</div>
	</div>
  <div class="row">
	<div class="col-md-12">
	  <table class="table">
		<thead>
		  <tr>
			<th>ID</th>
			<th>Nome</th>
			<th>Preco</th>
			<th>Quantidade</th>
			<th>Ações</th>
		  </tr>
		</thead>
		<tbody>
			<?php
				while($linhas = mysqli_fetch_array($resultado)){
					echo "<tr>";
						echo "<td>".$linhas['id']."</td>";
						echo "<td>".$linhas['nome']."</td>";
						echo "<td>".$linhas['preco']."</td>";
						echo "<td>".$linhas['qtde']."</td>";
						?>
						<td>						
						<?php
							if($_SESSION['usuarioNivelAcesso'] == 1){ ?>
								<a href='administrativo.php?link=7&id=<?php echo $linhas['id']; ?>'><button type='button' class='btn btn-sm btn-success'>Adicionar</button></a>
						<?php }
						 if($_SESSION['usuarioNivelAcesso'] == 2){ ?>
							 <a href='administrativo.php?link=6&id=<?php echo $linhas['id']; ?>'><button type='button' class='btn btn-sm btn-warning'>Retira</button></a>
						<?php } ?>
						<a href='administrativo.php?link=13&id=<?php echo $linhas['id']; ?>'><button type='button' class='btn btn-sm btn-info'>Editar</button></a>
						<a href='processa/proc_apagar_produto.php?id=<?php echo $linhas['id']; ?>'><button type='button' class='btn btn-sm btn-danger'>Apagar</button></a>

						<?php
					echo "</tr>";
				}
			?>
		</tbody>
	  </table>
	</div>
	</div>
</div> <!-- /container -->
