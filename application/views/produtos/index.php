<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center" style="background-color: #ccc">

<?php if(!empty($success)) {?>
	<div class="alert alert-success" role="alert">
		<?php echo $success;?>
	</div>
  <?php } ?>

  <h1 class="display-4"><?php echo $msg ?></h1>
  <p class="lead">Projeto desenvolvido para estudo pessoal.</p>
  <?php echo validation_errors(); ?>
</div>
<hr>
<div class="container">
<p><a href="<?php echo base_url('produtos/create')?>" class="btn btn-sm btn-success pull-right">Adicionar</a>
</p>
	<table class="table table-striped" id="table">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nome</th>
				<th>Preço</th>
				<th>Quantidade</th>
				<th>Categoria</th>
				<th>Ação </th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($prod as $p) {?>
			<tr>
				<td><?php echo $p['id']?></td>
				<td><?php echo $p['nome']?></td>
				<td><?php echo $p['preco']?></td>
				<td><?php echo $p['qtd']?></td>
				<td><?php echo $p['cat']?></td>
				<td>
					<a href="produtos/edit/<?php echo $p['id'] ?>" class="btn btn-sm btn-info">Editar</a>
					<a href="produtos/delete/<?php echo $p['id'] ?>" class="btn btn-sm btn-danger">Deletar</a>
				</td>

			</tr>
			<?php } ?>
		</tbody>
	</table>
