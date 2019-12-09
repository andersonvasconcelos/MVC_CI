<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center" style="background-color: #ccc">

  <h1 class="display-4"><?php echo $msg ?></h1>
  <p class="lead">Projeto desenvolvido para estudo pessoal.</p>
  <?php echo validation_errors(); ?>
</div>
<hr>
<div class="container">

	<?php echo form_open('produtos/edit')?>
	<input type="hidden" name="id" value="<?php echo $prod['id']?>" class="form-control">
	<label>Nome</label>
	<input type="text" name="nome" value="<?php echo $prod['nome']?>" class="form-control">
	<label>Preço</label>
	<input type="text" name="preco" value="<?php echo $prod['preco']?>" class="form-control">
	<label>Quantidade</label>
	<input type="text" name="qtd" value="<?php echo $prod['qtd']?>" class="form-control">
	<label>Categoria</label>
	<select class="form-control" name="categoria">
		<option value="<?php echo $prod['categoria']?>"> <?php echo $prod['cat']?></option>
		<?php foreach ($cat as $c) {?>
			<option value="<?php echo $c['id']?>"><?php echo $c['nome']?></option>
		<?php } ?>
	</select>
	
	<hr>
	<input type="submit" class="btn btn-success" value="Salvar">
	
