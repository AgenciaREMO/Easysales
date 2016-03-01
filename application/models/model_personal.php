<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//Aqui se pone model_NOMBRE DE LA TABLA A LA QUE VAMOS A HACER LÑAS OPERACIONES
 class Model_Personal extends CI_Model {

  function __construct() {
   parent::__construct();
     }

	 
	 function get_empresa(){
      $consulta= $this->db->get('personal');
      return $consulta-> result();

     }
	 function guardar($data)
    {
      $this->db->insert('personal', $data);
     
    }
     function all()
    {
      $query = $this->db->get('personal');
     if($query->num_rows()> 0){
        return $query;
     }else{
        return FALSE;
     }
    }
	function eliminar($id_personal){
      $this->db->where('id_personal', $id_personal);
      $this->db->delete('personal');
    }
    function obtener_parametro($id_personal){
      $this->db->where('id_personal', $id_personal);
      $query = $this->db->get('personal');
      if($query->num_rows()>0){
        return $query;
      }else{
        return FALSE;
      }
    }
     function find($id) {
      $this->db->where('id', $id);
      return $this->db->get('personal')->row(); //select* from usuario where id=3 y devuelve el registro
     }

     function insert($registro) {  //insert into 
      $this->db->set($registro);
      $this->db->insert('personal');
     }

     function update($registro) {
      $this->db->set($registro);
      $this->db->where('id', $registro['id']);
      $this->db->update('personal');
     }

     function delete($id) {
      $this->db->where('id', $id);
      $this->db->delete('personal');
     }
	 function editarparametros($id_personal, $data) {
       $this->db->where('id_personal', $id_personal);
       $this->db->update('personal', $data);
    }
     

 }