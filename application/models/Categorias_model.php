<?php
class Categorias_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}
	public function getCategoria($id = false)
	{
		if($id === false){
			$query = $this->db->get('categorias');
			return $query->result_array();
		}else{
			$query = $this->db->get_where('categorias', array('id' => $id));
			return $query->row_array();
		}
	}
	public function setCategoria()
	{
		$dados = array (
			'nome' => $this->input->post('nome')
		);

		$this->db->insert('categorias', $dados);
		return  $this->getCategoria($this->db->insert_id());
	}
	public function delCategoria($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('categorias');
	}
	public function totalCategorias()
	{
		return $this->db->count_all('categorias');
	}

}
