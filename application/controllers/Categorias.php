<?php 
class Categorias extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Categorias_model');	
	}

	public function index()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');

		$dados = array(
			'title' => 'App Estoque',
			'msg' => 'Listar Categorias',
			'cats' =>$this->Categorias_model->getCategoria()
		);

		$this->form_validation->set_rules('nome', 'Nome Categoria', 'required');

		if ($this->form_validation->run() === false) {
			
			$this->load->view('template/header', $dados);	
			$this->load->view('categorias/index', $dados);
			$this->load->view('template/footer');
	
			} else{

				$cat = $this->Categorias_model->setCategoria();
				//$cat = $this->Categorias_model->getCategoria($id);
				
				$dados['msg'] = "Categoria Cadastrada com Sucesso";
				$dados['log'] = true;
				$dados['cat'] = $cat;
				
				echo json_encode($dados);
			}
	}
	public function delete()
	{
		$id = $this->input->post('id');
		$this->Categorias_model->delCategoria($id);
		redirect('categorias');
		exit();
	}
}
