<?php 
class Produtos extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Produtos_model');
		$this->load->model('Categorias_model');
	}

	public function index()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');

		$dados = array(
			'title' => 'App Estoque',
			'msg' => 'Listar Produtos',
			'prod' =>$this->Produtos_model->getProdutos()
		);
			
			$this->load->view('template/header', $dados);	
			$this->load->view('produtos/index', $dados);
			$this->load->view('template/footer');
	}
	public function create()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');

		$dados = array(
			'title' => 'App Estoque',
			'msg' => 'Adicionar Produtos',
			'cat' => $this->Categorias_model->getCategoria()
		);

		$this->form_validation->set_rules('nome', 'Nome Produto', 'required');
		$this->form_validation->set_rules('preco', 'Preço', 'required');
		$this->form_validation->set_rules('qtd', 'Quantidade', 'required');
		$this->form_validation->set_rules('categoria', 'Nome Categoria', 'required');

		if ($this->form_validation->run() === false) {
			
			$this->load->view('template/header', $dados);	
			$this->load->view('produtos/create', $dados);
			$this->load->view('template/footer');
	
			} else{

				$cat = $this->Produtos_model->setProduto();
				redirect('produtos');
			}
	}
	public function edit($id = false)
	{
		$this->load->helper('form');
		$this->load->library('form_validation');

		$dados = array(
			'title' => 'App Estoque',
			'msg' => 'Editar Produdo',
			'prod' =>$this->Produtos_model->getProdutos($id),
			'cat' => $this->Categorias_model->getCategoria()
		);

		$this->form_validation->set_rules('nome', 'Nome Produto', 'required');
		$this->form_validation->set_rules('preco', 'Preço', 'required');
		$this->form_validation->set_rules('qtd', 'Quantidade', 'required');

		if ($this->form_validation->run() === false) {
			
			$this->load->view('template/header', $dados);	
			$this->load->view('produtos/edit', $dados);
			$this->load->view('template/footer');
	
			} else{

				$this->Produtos_model->upProduto();
				redirect('produtos');
				exit();
			}
	}
	public function delete($id)
	{
		$this->Produtos_model->deletProduto($id);
		redirect('produtos');
		exit();
	}
}
