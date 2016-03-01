<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//Aqui se pone model_NOMBRE DE LA TABLA A LA QUE VAMOS A HACER LÑAS OPERACIONES
 class Model_Fotografia extends CI_Model {

  function __construct() {
   parent::__construct();
     }

    function get_fotografia(){
      $consulta= $this->db->get('fotografia');
      return $consulta-> result();

     }
    function guardar($data)
    {
      $this->db->insert('fotografia', $data);
     
    }
	function guardar_nob($id_proyecto,$data2)
    {
      $this->db->where('id_proyecto', $id_proyecto);
      $this->db->update('proyectos', $data2);
     
    }
	function guardar_b($p,$data2)
    {
      $this->db->where('id_proyecto', $p);
      $this->db->update('proyectos', $data2);
     
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
    function all($id_proyecto)
    {
     $this->db->where('id_proyecto', $id_proyecto);
     $query = $this->db->get('fotografia');
     if($query->num_rows()> 0){
        return $query;
     }else{
        return FALSE;
     }
    }
	function eliminar($id_foto){
      $this->db->where('id_foto', $id_foto);
      $this->db->delete('fotografia');
    }
    function obtener_parametro($id_foto){
      $this->db->where('id_foto', $id_foto);
      $query = $this->db->get('fotografia');
      if($query->num_rows()>0){
        return $query;
      }else{
        return FALSE;
      }
    }
   
     function editarparametros($id_foto, $data) {
       $this->db->where('id_foto', $id_foto);
       $this->db->update('fotografia', $data);
    }
 }