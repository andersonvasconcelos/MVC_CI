

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  <h1 class="display-4"><?php echo $msg ?></h1>
  <p class="lead">Projeto desenvolvido para estudo pessoal.</p>
</div>

<div class="container">
  <div class="card-deck mb-6 text-center">
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Produtos Cadastrados</h4>
      </div>
      <div class="card-body">
			<img src="<?php echo base_url('assets/img/produtos.png')?>" style="min-height:350px" width="200px" class="card-img-top" alt="..."  >
        <h1 class="card-title pricing-card-title"><?php echo $totalProdutos?> <small class="text-muted">/ Produtos</small></h1>
    
        <a href="produtos/" class="btn btn-lg btn-block btn-primary">Ver Produtos</a>
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Categorias Cadastradas</h4>
      </div>
      <div class="card-body">
			<img src="<?php echo base_url('assets/img/categorias.png')?>" style="max-height:350px" width="200px"  class="card-img-top" alt="...">
        <h1 class="card-title pricing-card-title"><?php echo $totalCategorias?> <small class="text-muted">/ Categorias</small></h1>
        <a href="categorias/" class="btn btn-lg btn-block btn-primary">Ver Categorias</a>
      </div>
    </div>
  </div>
