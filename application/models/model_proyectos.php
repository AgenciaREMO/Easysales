<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//Aqui se pone model_NOMBRE DE LA TABLA A LA QUE VAMOS A HACER LÑAS OPERACIONES
 class Model_Proyectos extends CI_Model {

  function __construct() {
   parent::__construct();
     }

    function get_proyectos(){
      $consulta= $this->db->get('proyectos');
      return $consulta-> result();

     }
    function guardar($data)
    {
      $this->db->insert('proyectos', $data);
     
    }
	function obtener_clientes(){
		 $this->db->select('*');
		 $this->db->from('clientes');
		//$query = $this->db->get('clientes');  //Esto es como si fuera select 
		 $query = $this->db->get();
        if($query->num_rows()> 0){
        return $query;
     }else{
        return FALSE;
	}
	}
	function w_brief(){
		 $this->db->select('*');
		 $this->db->from('web');
		 //$this->db->join('proyectos','web.id_proyecto=proyectos.id_proyecto');
		//$query = $this->db->get('clientes');  //Esto es como si fuera select 
		 $query = $this->db->get();
        if($query->num_rows()> 0){
        return $query;
     }else{
        return FALSE;
	}
		
	}	
	function v_brief(){
		 $this->db->select('*');
		 $this->db->from('video');
		 //$this->db->join('video','proyectos.id_proyecto=video.id_proyecto');
		 $query = $this->db->get();
        if($query->num_rows()> 0){
        return $query;
     }else{
        return FALSE;
	}
		
	}	
	function f_brief(){
		 $this->db->select('*');
		 $this->db->from('fotografia');
		 //$this->db->join('fotografia','proyectos.id_proyecto=fotografia.id_proyecto'); 
		 $query = $this->db->get();
        if($query->num_rows()> 0){
        return $query;
     }else{
        return FALSE;
	}
		
	}
	function dg_brief(){
		 $this->db->select('*');
		 $this->db->from('diseno_grafico');
		 //$this->db->join('diseno_grafico','proyectos.id_proyecto=diseno_grafico.id_proyecto'); 
		 $query = $this->db->get();
        if($query->num_rows()> 0){
        return $query;
     }else{
        return FALSE;
	}
		
	}
	function obtener_clientes_2(){
		 $this->db->select('clientes.nombre as Nom_cliente');
		 $this->db->from('clientes');
		//$query = $this->db->get('clientes');  //Esto es como si fuera select 
		 $query = $this->db->get();
        if($query->num_rows()> 0){
        return $query;
     }else{
        return FALSE;
	}
	}
	function obtener_personal(){
		 $this->db->select('*');
		 $this->db->from('personal');
		//$query = $this->db->get('clientes');  //Esto es como si fuera select 
		 $query = $this->db->get();
        if($query->num_rows()> 0){
        return $query;
     }else{
        return FALSE;
	}
	}
    function all()
    {
	  $this->db->select('proyectos.id_proyecto, proyectos.id_cliente, proyectos.id_personal, proyectos.nombre as NomPro,proyectos.depto_responsable,proyectos.objetivo, proyectos.alcance, proyectos.antecedentes, proyectos.f_inicio, proyectos.f_termino, proyectos.resultado_estatus,proyectos.brief, clientes.id_cliente, clientes.nombre as NomCli, personal.id_personal, personal.nombre as personalnom');
      $this->db->from('proyectos');
      $this->db->join('clientes', 'proyectos.id_cliente = clientes.id_cliente');
      $this->db->join('personal', 'proyectos.id_personal = personal.id_personal');	
      $query = $this->db->get();
      if($query->num_rows()> 0){
        return $query;
      }else{
        return FALSE;
     }
    }
	 function obtener_nombre()
    {
	  $this->db->select('*');
      $this->db->from('clientes');
      $this->db->join('clientes', 'proyectos.id_cliente = clientes.id_cliente');
      $this->db->join('personal', 'proyectos.id_personal = personal.id_personal');	
      $query = $this->db->get();
      if($query->num_rows()> 0){
        return $query;
      }else{
        return FALSE;
     }
    }
	function eliminar($id_proyecto){
      $this->db->where('id_proyecto', $id_proyecto);
      $this->db->delete('proyectos');
    }
    function obtener_parametro($id_proyecto){
	 $this->db->from('proyectos');
      $this->db->where('id_proyecto', $id_proyecto);
      $query = $this->db->get();
      if($query->num_rows()>0){
        return $query;
      }else{
        return FALSE;
      }
    }
    function getnomempresa() {
        $data = array();
        $query = $this->db->get('empresa');
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row){
                    $data[] = $row;
                }
        }
        $query->free_result();
        return $data;
    }
     function editarparametros($id_proyecto, $data) {
       $this->db->where('id_proyecto', $id_proyecto);
       $this->db->update('proyectos', $data);
    }
     function consultas(){
      $this->db->select('*');
      $this->db->from('proyectos');
      $this->db->join('personal', 'personal.id_personal = proyectos.id_personal');
      $query = $this->db->get();
     }
 }