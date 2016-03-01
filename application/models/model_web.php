<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//Aqui se pone model_NOMBRE DE LA TABLA A LA QUE VAMOS A HACER LÑAS OPERACIONES
 class Model_Web extends CI_Model {

  function __construct() {
   parent::__construct();
     }

    function get_web(){
      $consulta= $this->db->get('web');
      return $consulta-> result();

     }
    function guardar($data)
    {
      $this->db->insert('web', $data);
     
    }
    function obtener_id($id_proyecto)
    {
    $this->db->select('id_proyecto');
    $this->db->from('proyectos');
    $this->db->where('id_proyecto', $id_proyecto);
    $query = $this->db->get();
      if($query->num_rows()> 0){
        return $query;
      }else{
        return FALSE;
     }
    }
     function guardar_b($p,$data2)
    {
      $this->db->where('id_proyecto', $p);
      $this->db->update('proyectos', $data2);
     
    }
	 function guardar_nob($id_proyecto,$data2)
    {
      $this->db->where('id_proyecto', $id_proyecto);
      $this->db->update('proyectos', $data2);
     
    }
    function all($id_proyecto)
    {
      $this->db->where('id_proyecto', $id_proyecto);
      $query = $this->db->get('web');
     if($query->num_rows()> 0){
        return $query;
     }else{
        return FALSE;
     }
    }
	function eliminar($id_web){
      $this->db->where('id_web', $id_web);
      $this->db->delete('web');
    }
	function cambiar_sta($id_web){
      $this->db->where('id_web', $id_web);
      $query = $this->db->get('web');
      if($query->num_rows()>0){
        return $query;
      }else{
        return FALSE;
      }
    }
	 function edit_p($id_web, $data) {
       $this->db->where('id_proyecto', $id_proyecto);
       $this->db->update('proyectos', $data);
    }
    function obtener_parametro($id_web){
      $this->db->where('id_web', $id_web);
      $query = $this->db->get('web');
      if($query->num_rows()>0){
        return $query;
      }else{
        return FALSE;
      }
    }
   
     function editarparametros($id_web, $data) {
       $this->db->where('id_web', $id_web);
       $this->db->update('web', $data);
    }
 }