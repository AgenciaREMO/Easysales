<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//Aqui se pone model_NOMBRE DE LA TABLA A LA QUE VAMOS A HACER LÑAS OPERACIONES
 class Model_Dg extends CI_Model {

  function __construct() {
   parent::__construct();
     }

    function get_dg(){
      $consulta= $this->db->get('diseno_grafico');
      return $consulta-> result();

     }
    function guardar($data)
    {
      $this->db->insert('diseno_grafico', $data);
     
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
	 function existe_id($id_proyecto)
    {
	  $this->db->select('id_proyecto');
	  $this->db->from('diseno_grafico');
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
	  $this->db->select('*');
	  $this->db->from('diseno_grafico');
      $this->db->where('id_proyecto', $id_proyecto);
      $query = $this->db->get();
     if($query->num_rows()> 0){
        return $query;
     }else{
        return FALSE;
     }
    }
	function eliminar($id_dg){
      $this->db->where('id_dg', $id_dg);
      $this->db->delete('diseno_grafico');
    }
    function obtener_parametro($id_dg){
      $this->db->where('id_dg', $id_dg);
      $query = $this->db->get('diseno_grafico');
      if($query->num_rows()>0){
        return $query;
      }else{
        return FALSE;
      }
    }
   
     function editarparametros($id_dg, $data) {
       $this->db->where('id_dg', $id_dg);
       $this->db->update('diseno_grafico', $data);
    }
 }