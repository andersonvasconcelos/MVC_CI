<?php 
class Home extends CI_Controller{
	public function __construct()	
	{
		parent::__construct();
		$this->load->model('Produtos_model');
		$this->load->model('Categorias_model');
	}

	public function index()
	{
		$dados['title'] = 'App Estoque';	
		$dados['msg'] = 'Seja Bem vindo ao Estoque com CI';
		$dados['totalProdutos'] = $this->Produtos_model->totalProdutos();
		$dados['totalCategorias'] = $this->Categorias_model->totalCategorias();

	$this->load->view('template/header', $dados);	
	$this->load->view('home', $dados);
	$this->load->view('template/footer');
	}
}
