<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//Aqui se pone model_NOMBRE DE LA TABLA A LA QUE VAMOS A HACER LÑAS OPERACIONES
 class Model_Video extends CI_Model {

  function __construct() {
   parent::__construct();
     }

    function get_video(){
      $consulta= $this->db->get('video');
      return $consulta-> result();

     }
    function guardar($data)
    {
      $this->db->insert('video', $data);
     
    }
	function guardar_nob($id_proyecto,$data2)
    {
      $this->db->where('id_proyecto', $id_proyecto);
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
	  function guardar_b($p,$data2)
    {
      $this->db->where('id_proyecto', $p);
      $this->db->update('proyectos', $data2);
     
    }
    function all($id_proyecto)
    {
      $this->db->where('id_proyecto', $id_proyecto);
      $query = $this->db->get('video');
     if($query->num_rows()> 0){
        return $query;
     }else{
        return FALSE;
     }
    }
	function eliminar($id_video){
      $this->db->where('id_video', $id_video);
      $this->db->delete('video');
    }
    function obtener_parametro($id_video){
      $this->db->where('id_video', $id_video);
      $query = $this->db->get('video');
      if($query->num_rows()>0){
        return $query;
      }else{
        return FALSE;
      }
    }
   
     function editarparametros($id_video, $data) {
       $this->db->where('id_video', $id_video);
       $this->db->update('video', $data);
    }
 }