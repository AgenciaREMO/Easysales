<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//Este es el constructor//
class Video extends CI_Controller {
function __construct(){
	parent::__construct();
//Aqui podemos declarar librerias si se va a cargar en primer instancia///
//Aqui puse una libreria para poder definir errores//
   $this->load->model('Model_Video');
   $this->form_validation->set_message('required','Debe de ingresar un valor para %s');
}
	public function index()
	{
		$data['contenido'] = 'video/agregar';
		$data['titulo'] = 'Clientes';
		$this->load->view('template', $data);
		
	}
	public function agregar()
	{
		$id_proyecto = $this->uri->segment(3);
		$obt_id= $this->Model_Video->obtener_id($id_proyecto);
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
		$this-> load -> view('video/agregar',$data);	
	}
	public function guardar()
	{
		$p=$_POST['id_proyecto'];
		$T_brief=$_POST['Tipo_Brief'];
		$data = array(
			'id_proyecto' => $this->input->post('id_proyecto',TRUE),
			'duracion' => $this->input->post('duracion',TRUE),
			'referencia' => $this->input->post('referencia',TRUE),
			'canal_distribucion' => $this->input->post('canal_distribucion',TRUE),
			'desc_proyecto' => $this->input->post('desc_proyecto',TRUE)
			
		);
		$data2 = array(
			'brief' => $this->input->post('Tipo_Brief',TRUE),	
		);
		$this->Model_Video->guardar($data);
		$this->Model_Video->guardar_b($p,$data2);
		redirect('proyectos/mostrar?msg=3');  
	}
	public function mostrar()
	{
		$id_proyecto = $this->uri->segment(3);
		 $data =array(
		 	'enlaces' => $this->Model_Video-> all($id_proyecto),
		 	'dump'=> 0
		 	);
		 $this->load->view('video/index', $data); //Para pasar los datos	 
	}
	public function eliminar()
	{	 $cambiar_brief=0;
		 $id_video = $this->uri->segment(3);
		
		 ///////////////////////////
		  $obtener_parametro= $this->Model_Video->obtener_parametro($id_video);
		if($obtener_parametro != FALSE){
			foreach ($obtener_parametro->result() as $row) {
				
				$id_proyecto=$row->id_proyecto;
				$duracion = $row->duracion;
				$referencia = $row->referencia;
				$material = $row->material;
				$canal_distribucion = $row->canal_distribucion;
				$desc_proyecto = $row->desc_proyecto;
	
			}
			$data = array(
				'id_video' => $id_video,
				'duracion' => $duracion,
				'referencia'=> $referencia,
				'material'=> $material,
				'canal_distribucion'=> $canal_distribucion,
				'desc_proyecto' => $desc_proyecto
				);
		}else{
				$data = '';
				return FALSE;
		}
		///////
		$data2 = array(
			'brief' => $cambiar_brief
		);
		///////	
		$this->Model_Video->guardar_nob($id_proyecto,$data2);
		 //redirect('web/index');
		 $this->Model_Video->eliminar($id_video);
		redirect('proyectos/mostrar?msg=4');  
		 
		 
		 
		 //////////////////////////
	}
	
	public function editar(){
		$id_video = $this->uri->segment(3);
		$obtener_parametro= $this->Model_Video->obtener_parametro($id_video);
		if($obtener_parametro != FALSE){
			foreach ($obtener_parametro->result() as $row) {
				$duracion = $row->duracion;
				$referencia = $row->referencia;
				$material = $row->material;
				$canal_distribucion = $row->canal_distribucion;
				$desc_proyecto = $row->desc_proyecto;
	
			}
			$data = array(
				'id_video' => $id_video,
				'duracion' => $duracion,
				'referencia'=> $referencia,
				'material'=> $material,
				'canal_distribucion'=> $canal_distribucion,
				'desc_proyecto' => $desc_proyecto
				);
		}else{
				$data = '';
				return FALSE;
		}
		$this-> load -> view('video/editar',$data);
	}
	function editarparametros(){
   		$id_video= $this-> uri-> segment(3);
   		$data = array(
				'duracion' => $this->input->post('duracion', true),
				'referencia'=> $this->input->post('referencia', true),
				'material'=> $this->input->post('material', true),
				'canal_distribucion'=> $this->input->post('canal_distribucion', true),
				'desc_proyecto' => $this->input->post('desc_proyecto', true)
				);
        $this->Model_Video-> editarparametros($id_video,$data);
		redirect('proyectos/mostrar?msg=3');  
   }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */