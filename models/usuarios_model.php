<?php
class Usuarios_model extends CI_Model{
    public function salva($usuario){
        
        $this->db->insert("usuarios", $usuario); //inseri o array com as informações do usuário no bd
    }
}