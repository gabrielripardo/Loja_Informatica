<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos extends CI_Controller {

	public function index(){
		$this->load->model("produtos_model");
		$lista = $this->produtos_model->buscaTodos();
		$dados = array("produtos" => $lista);
		$this->load->view('produtos/index', $dados); //Chama a view
	}
	public function formulario(){
		$this->load->view('produtos/formulario');
	}
	public function novo(){
        $produto = array(
			"nome" => $this->input->post("nome"),
			"preco" => $this->input->post("preco"),
			"description" => $this->input->post("description")
		);
		$this->load->model("produtos_model");
		$this->produtos_model->salva($produto);
		//$this->session->set_flashdata("success", "Produto cadastrado com sucesso!");
		redirect('/');
	}
	public function delete($id){
		$this->load->model("produtos_model");
		$this->produtos_model->deletar_produto($id);
		redirect('/');	
	}

	public function editar(){
		$id = $this->input->get("id");
		$this->load->model("produtos_model");
		$produto = $this->produtos_model->retorna($id);
		$dados = array("produto" => $produto);

		echo ($produto['nome']);
		//$this->load->view('templates/header');
		//$this->load->view('templates/nav-top');
		$this->load->view("produtos/editar", $dados);
		//$this->load->view('templates/footer');
		//$this->load->view('templates/js');
		
	}

	public function exibirDetalhe(){		
		$id = $this->input->get("id");
		$dt = $this->input->get("dt");
		//echo $vars;

		 echo 'id: '.$id.' | dt: '.$dt;		
		// $dt_entrada = (new DateTime("@$dt"))->format('d/m/Y H:i:s');
		// echo 'DT_ENTRADA: '.$dt_entrada;

		$this->load->view("produtos/detalhe");
	}

	public function salvar($id){
		$this->load->model("produtos_model");
		$this->produtos_model->salvar($id);
		//$this->session->set_flashdata('success', 'Produto alterado com sucesso!');
		redirect('/');
	}
}
