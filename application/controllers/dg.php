<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//Este es el constructor//
class Dg extends CI_Controller {
function __construct(){
	parent::__construct();
//Aqui podemos declarar librerias si se va a cargar en primer instancia///
//Aqui puse una libreria para poder definir errores//
   $this->load->model('Model_Dg');
   $this->form_validation->set_message('required','Debe de ingresar un valor para %s');
}
	public function index()
	{
		$data['contenido'] = 'dg/agregar';
		$data['titulo'] = 'Clientes';
		$this->load->view('template', $data);
		
	}
	public function agregar()
	{	$id_proyecto = $this->uri->segment(3);
		$obt_id= $this->Model_Dg->obtener_id($id_proyecto);
		if($obt_id != FALSE){
			foreach ($obt_id->result() as $row) {
				$id_proyecto = $row->id_proyecto;
	
			}
			$data = array(
				'id_proyecto' => $id_proyecto
				);
		}else{
				$data = '';
				return FALSE;
		}
		$this-> load -> view('dg/agregar',$data);	
	}
	public function guardar()
	{
		//$id_pro = $this->uri->segment(3);
		$p=$_POST['id_proyect'];
		$T_brief=$_POST['Tipo_Brief'];
		$data = array(
		
			'id_proyecto' => $this->input->post('id_proyect',TRUE),
			'desc_proyecto' => $this->input->post('desc_proyecto',TRUE)
		);
		$data2 = array(
			'brief' => $this->input->post('Tipo_Brief',TRUE),
		);
		
		$this->Model_Dg->guardar($data);
		$this->Model_Dg->guardar_b($p,$data2);
		echo $p;
		redirect('proyectos/mostrar?msg=3');  

		
		
	}
	public function mostrar()
	{
		$id_proyecto = $this->uri->segment(3);
		//$obt_id= $this->Model_Dg->all($id_proyecto);
		$data =array(
		 	'enlaces' => $this->Model_Dg-> all($id_proyecto),
		 	'dump'=> 0
		 	);
		 $this->load->view('dg/index', $data); //Para pasar los datos	 
	}
	public function eliminar()
	{
		 $cambiar_brief=0;
		 $id_dg = $this->uri->segment(3);
		 $obtener_parametro= $this->Model_Dg->obtener_parametro($id_dg);
		if($obtener_parametro != FALSE){
			foreach ($obtener_parametro->result() as $row) {
				
				$id_proyecto=$row->id_proyecto;
				$desc_proyecto = $row->desc_proyecto;
	
			}
			$data = array(
				'id_dg' => $id_dg,
				'desc_proyecto' => $desc_proyecto
				);
		}else{
				$data = '';
				return FALSE;
		}
		
		$data2 = array(
			'brief' => $cambiar_brief
		);
		$this->Model_Dg->guardar_nob($id_proyecto,$data2);
		$this->Model_Dg->eliminar($id_dg);
		redirect('proyectos/mostrar?msg=4');  
	}
	
	public function editar(){
		$id_dg = $this->uri->segment(3);
		$obtener_parametro= $this->Model_Dg->obtener_parametro($id_dg);
		if($obtener_parametro != FALSE){
			foreach ($obtener_parametro->result() as $row) {
				$desc_proyecto = $row->desc_proyecto;
	
			}
			$data = array(
				'id_dg' => $id_dg,
				'desc_proyecto' => $desc_proyecto
				);
		}else{
				$data = '';
				return FALSE;
		}
		$this-> load -> view('dg/editar',$data);
	}
	function editarparametros(){
   		$id_dg= $this-> uri-> segment(3);
   		$data = array(
				'desc_proyecto' => $this->input->post('desc_proyecto', true)
				);
        $this->Model_Dg-> editarparametros($id_dg,$data);
		redirect('proyectos/mostrar?msg=3');  
   }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */