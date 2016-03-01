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
    function all()
    {
	  $this->db->select('proyectos.id_proyecto, proyectos.id_cliente, proyectos.id_personal, proyectos.nombre as NomPro,proyectos.depto_responsable,proyectos.objetivo, proyectos.alcance, proyectos.antecedentes, proyectos.f_inicio, proyectos.f_termino, proyectos.id_prospeccion, proyectos.id_oportunidad, proyectos.id_cierre, proyectos.resultado_estatus, clientes.id_cliente, clientes.nombre as NomCli, personal.id_personal, personal.nombre as personalnom');
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
	function eliminar($id_proyecto){
      $this->db->where('id_proyecto', $id_proyecto);
      $this->db->delete('proyectos');
    }
    function obtener_parametro($id_proyecto){
      $this->db->where('id_proyecto', $id_proyecto);
      $query = $this->db->get('proyectos');
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