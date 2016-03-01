<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//Aqui se pone model_NOMBRE DE LA TABLA A LA QUE VAMOS A HACER LÑAS OPERACIONES
 class Model_Empresas extends CI_Model {

  function __construct() {
      parent::__construct();
     }

     function get_empresa(){
      $consulta= $this->db->get('empresa');
      return $consulta-> result();

     }
    function guardar($data)
    {
      $this->db->insert('empresa', $data);
     
    }
    function all()
    {
      $query = $this->db->get('empresa');
     if($query->num_rows()> 0){
        return $query;
     }else{
        return FALSE;
     }
    }

    function eliminar($id_empresa){
      $this->db->where('id_empresa', $id_empresa);
      $this->db->delete('empresa');
    }
    function obtener_parametro($id_empresa){
      $this->db->where('id_empresa', $id_empresa);
      $query = $this->db->get('empresa');
      if($query->num_rows()>0){
        return $query;
      }else{
        return FALSE;
      }
    }
    function getnom() {
       $query = $this->db->get('personal');
     if($query->num_rows()> 0){
        return $query;
     }else{
        return FALSE;
     }
    }
     function editarparametros($id_empresa, $data) {
       $this->db->where('id_empresa', $id_empresa);
       $this->db->update('empresa', $data);
    }

 }