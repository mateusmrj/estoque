<?php
	$id = $_GET['id'];
	//Executa consulta
	$result = mysqli_query($conectar,"SELECT * FROM produtos WHERE id = '$id' LIMIT 1");
	$resultado = mysqli_fetch_assoc($result);
	$id_produto = $resultado['id'];
?>
<div class="container theme-showcase" role="main">
  <div class="page-header">
	<h1>Adiciona mais produto</h1>
  </div>
  <div class="row espaco">
		<div class="pull-right">
			<a href='administrativo.php?link=10&id=<?php echo $resultado['id']; ?>'><button type='button' class='btn btn-sm btn-info'>Listar</button></a>

			<a href='processa/proc_apagar_produto.php?id=<?php echo $resultado['id']; ?>'><button type='button' class='btn btn-sm btn-danger'>Apagar</button></a>
		</div>
	</div>
  <div class="row">
	<div class="col-md-12">
	  <form class="form-horizontal" method="POST" action="processa/proc_add_produto.php" enctype="multipart/form-data">
			<div row>
				<h2><?php echo $resultado['nome']; ?></h2>
			</div>

			<div class="form-group">
			<div class="col-sm-10">
			  <input type="hidden" class="form-control" name="qtdeAtual" style="width: 20%;" placeholder="Quantidade" value="">
			</div>
		  </div>

		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Quantidade</label>
			<div class="col-sm-10">
			  <input type="number" class="form-control" name="qtde" style="width: 20%;" placeholder="Nome Produto" value="">
			</div>
		  </div>



		  <input type="hidden" name="id" value="<?php echo $id_produto;?>">
		  <div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
			  <button type="submit" class="btn btn-success">Adicionar</button>
			</div>
		  </div>
		</form>
	</div>
	</div>
</div> <!-- /container -->
