<?php 
class Model_pdfs extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	//obtenemos las provincias para cargar en el select
	function getReporte()
	{
	  $this->db->select('*');
      $this->db->from('proyectos');
      $query = $this->db->get();
      if($query->num_rows()> 0){
        foreach ($query->result() as $fila)
			{
				$data[] = $fila;
			}
				return $data;
	}
	}
	
		
	
	
	
	
	
	function getbriefw($id_proyecto)
	{
	  $this->db->select('*');
      $this->db->from('web');
	  $this->db->where('id_proyecto', $id_proyecto);	
      $query = $this->db->get();
      if($query->num_rows()> 0){
        return $query;
      }else{
        return FALSE;
     }
	}
	function getbriefv($id_proyecto)
	{
	  $this->db->select('*');
      $this->db->from('video');
	  $this->db->where('id_proyecto', $id_proyecto);	
      $query = $this->db->get();
      if($query->num_rows()> 0){
        return $query;
      }else{
        return FALSE;
     }
	}
	function getbriefd_g($id_proyecto)
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
	function getbrieff($id_proyecto)
	{
	  $this->db->select('*');
      $this->db->from('fotografia');
	  $this->db->where('id_proyecto', $id_proyecto);	
      $query = $this->db->get();
      if($query->num_rows()> 0){
        return $query;
      }else{
        return FALSE;
     }
	}
    //obtenemos las localidades dependiendo de la provincia escogida
  /*  function getProvinciasSeleccionadas($provincia)
	{
        $query = $this->db->query('SELECT l.provincia,l.localidad,l.id,p.provincia 
                                  from localidades_es l inner join provincias_es p
                                  on l.provincia = p.id and p.id = '.$provincia);
        $data["localidades"]=array();
	    if($query->num_rows()>0)
	    {
		foreach ($query->result() as $fila)
		{
			$data["localidades"][$fila->id]["l.provincia"] = $fila->provincia;
			$data["localidades"][$fila->id]["l.localidad"] = $fila->localidad;
			$data["localidades"][$fila->id]["l.id"] = $fila->id;
            $data["localidades"][$fila->id]["p.provincia"] = $fila->provincia;
		}
			return $data["localidades"];
	     }
	}  */  
}
/*pdf_model.php
 * el modelo
 */