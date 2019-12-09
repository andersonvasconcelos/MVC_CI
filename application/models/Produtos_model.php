<?php
class Produtos_model extends CI_Model{
	public function __construct()
	{
		$this->load->database();
	}
	public function getProdutos($id = false)
	{
		if($id === false){
			$this->db->select('produtos.id, produtos.nome, produtos.preco, produtos.qtd, categorias.nome as cat');
			$this->db->from('produtos');
			$this->db->join('categorias', 'categorias.id = produtos.categoria');
			$this->db->order_by('produtos.id', 'ASC');
			$query = $this->db->get();
			return $query->result_array();
		}else{
			$this->db->select('produtos.id, produtos.nome, produtos.preco, produtos.qtd, produtos.categoria, categorias.nome as cat');
			$this->db->from('produtos');
			$this->db->join('categorias', 'categorias.id = produtos.categoria');
			$this->db->where('produtos.id', $id);
			$query = $this->db->get();
			return $query->row_array();
		}
	}
	public function setProduto()
	{
		$dados = array(
			'nome' => $this->input->post('nome'),
			'preco' => $this->input->post('preco'),
			'qtd' => $this->input->post('qtd'),
			'categoria' => $this->input->post('categoria')
		);

		$this->db->insert('produtos', $dados);
	}
	public function upProduto()
	{
		$dados = array(
			'nome' => $this->input->post('nome'),
			'preco' => $this->input->post('preco'),
			'qtd' => $this->input->post('qtd'),
			'categoria' => $this->input->post('categoria')
		);

		$id = $this->input->post('id');
		
		$this->db->where('id', $id);
		$this->db->update('produtos', $dados);
	}
	public function deletProduto($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('produtos');

	}
	public function totalProdutos()
	{
		return $this->db->count_all('produtos');
		
	}

}
