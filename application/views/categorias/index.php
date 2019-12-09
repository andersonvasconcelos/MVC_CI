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
<p><a href="categorias/add" class="btn btn-sm btn-primary pull-right" data-toggle="modal" data-target="#add">Adicionar</a>
</p>
	<table class="table table-striped" id="table">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nome</th>
				<th>Ação </th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($cats as $c) {?>
			<tr>
				<td><?php echo $c['id']?></td>
				<td><?php echo $c['nome']?></td>
				<td>
					<a href="categorias/edit/<?php echo $c['id'] ?>" class="btn btn-sm btn-info">Editar</a>
					<a href="#" data-id="<?php echo $c['id'] ?>" class="btn btn-sm btn-danger delCat">Deletar</a>
				</td>

			</tr>
			<?php } ?>
		</tbody>
	</table>

<!-- Modal -->
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="addLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addLabel">Adicionar Categoria</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  	  
	  <?php echo form_open('',array('id'=>'myForm'));?>
		<label>Nome</label>
		<input type="text" name='nome' class="form-control" onfocus="">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btnAddC btn-primary">Salvar</button>
      </div>
    </div>
  </div>
</div>
