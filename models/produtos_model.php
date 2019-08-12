<?php
class Produtos_model extends CI_model{
    public function buscaTodos(){
        return $this->db->get("products")->result_array(); //Tudo que tem na tabela products será retornada na função
    }

    public function salva($produto){ //posteriormente mudar o nome da função para salvarNovo
        $this->db->insert("products", $produto);
    }    
    
    public function deletar_produto($id){
        $this->db->where('id', $id);
        $this->db->delete('products');
        return true;        
    }

    public function retorna($id){
        return $this->db->get_where("products", array(
            "id" => $id
        ))->row_array();
    }
    
    public function salvar($id){ //posteriormente mudar para salvarAlteracao
        //$id = $this->input->post('id');//

        $produto = array(
            'nome' => $this->input->post('nome'),
            'preco' => $this->input->post('preco'),
            'description' => $this->input->post('description')
        );
        $this->console_log($id);
        $this->db->where('id', $id);
        return $this->db->update('products', $produto);
    }
    public function console_log( $data ){
        echo '<script>';
        echo 'console.log('. json_encode( $data ) .')';
        echo '</script>';
    }
}