<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//Aqui se pone model_NOMBRE DE LA TABLA A LA QUE VAMOS A HACER LÑAS OPERACIONES
 class Model_Clientes extends CI_Model {

  function __construct() {
   parent::__construct();
     }

     function all() {
	
	  $this->db->select('clientes.id_cliente,clientes.nombre,clientes.puesto,clientes.id_empresa,clientes.tipo_cliente, clientes.telefono, clientes.celular, clientes.email, empresa.nombre_empresa');
	  $this->db->from('clientes');
      $this->db->join('empresa', 'clientes.id_empresa = empresa.id_empresa');
	  $query = $this->db->get();	 
		 
	
         
         if($query->num_rows()> 0){
        return $query;
     }else{
        return FALSE;
     }
     }
	 function get_cliente(){
      $consulta= $this->db->get('clientes');
      return $consulta-> result();

     }
    function guardar($data)
    {
      $this->db->insert('clientes', $data);
     
    }
	function eliminar($id_cliente){
      $this->db->where('id_cliente', $id_cliente);
      $this->db->delete('clientes');
    }
    function obtener_parametro($id_cliente){
      $this->db->where('id_cliente', $id_cliente);
      $query = $this->db->get('clientes');
      if($query->num_rows()>0){
        return $query;
      }else{
        return FALSE;
      }
    }
	function obtener_nombreempresa(){
         $query = $this->db->get('empresa');  //Esto es como si fuera select 
         if($query->num_rows()> 0){
        return $query;
     }else{
        return FALSE;
     }
    }
	function getnomempresa() {
        $data = array();
        $query = $this->db->get('clientes');
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row){
                    $data[] = $row;
                }
        }
        $query->free_result();
        return $data;
    }
     function editarparametros($id_cliente, $data) {
       $this->db->where('id_cliente', $id_cliente);
       $this->db->update('clientes', $data);
    }

     function find($id) {
      $this->db->where('id_cliente', $id_cliente);
      return $this->db->get('clientes')->row(); //select* from usuario where id=3 y devuelve el registro  
     }

     function insert($registro) {  //insert into 
      $this->db->set($registro);
     $this->db->insert('clientes');
     }

     function update($registro) {
      $this->db->set($registro);
   $this->db->where('id_cliente', $registro['id_cliente']);
   $this->db->update('clientes');
     }

     function delete($id) {
      $this->db->where('id_cliente', $id);
   $this->db->delete('clientes');
     }

 }