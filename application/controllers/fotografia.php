<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//Este es el constructor//
class Fotografia extends CI_Controller {
function __construct(){
	parent::__construct();
//Aqui podemos declarar librerias si se va a cargar en primer instancia///
//Aqui puse una libreria para poder definir errores//
   $this->load->model('Model_fotografia');
   $this->form_validation->set_message('required','Debe de ingresar un valor para %s');
}
	public function index()
	{
		$data['contenido'] = 'fotografia/agregar';
		$data['titulo'] = 'Clientes';
		$this->load->view('template', $data);
		
	}
	public function agregar()
	{
		$id_proyecto = $this->uri->segment(3);
		$obt_id= $this->Model_fotografia->obtener_id($id_proyecto);
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
		$this-> load -> view('fotografia/agregar',$data);			
	}
	public function guardar()
	{
		$p=$_POST['id_proyecto'];
		$T_brief=$_POST['Tipo_Brief'];
		$data = array(
			'id_proyecto' => $this->input->post('id_proyecto',TRUE),
			'tipo_foto' => $this->input->post('tipo_foto',TRUE),
			'lugar_sesion' => $this->input->post('lugar_sesion',TRUE),
			'desc_proyecto' => $this->input->post('desc_proyecto',TRUE)
			
		);
			
		$data2 = array(
			'brief' => $this->input->post('Tipo_Brief',TRUE),	
		);
		$this->Model_fotografia->guardar_b($p,$data2);
		$this->Model_fotografia->guardar($data);
		redirect('proyectos/mostrar?msg=3');  
	}
	public function mostrar()
	{
		 $id_proyecto = $this->uri->segment(3);	
		 $data =array(
		 	'enlaces' => $this->Model_fotografia-> all($id_proyecto),
		 	'dump'=> 0
		 	);
		 $this->load->view('fotografia/index', $data); //Para pasar los datos	 
	}
	public function eliminar()
	{
		 $cambiar_brief=0;		 	
		 $id_foto = $this->uri->segment(3);
		$obtener_parametro= $this->Model_fotografia->obtener_parametro($id_foto);
		if($obtener_parametro != FALSE){
			foreach ($obtener_parametro->result() as $row) {
				$id_proyecto=$row->id_proyecto;	
				$tipo_foto = $row->tipo_foto;
				$lugar_sesion = $row->lugar_sesion;
				$desc_proyecto = $row->desc_proyecto;
			}
			$data = array(
				'id_foto' => $id_foto,
				'tipo_foto' => $tipo_foto,
				'lugar_sesion'=> $lugar_sesion,
				'desc_proyecto' => $desc_proyecto
				);
		}else{
				$data = '';
				return FALSE;
		}
		$data2 = array(
			'brief' => $cambiar_brief
		);
		$this->Model_fotografia->guardar_nob($id_proyecto,$data2); 
		$this->Model_fotografia->eliminar($id_foto);
		redirect('proyectos/mostrar?msg=4');  
		 
		 
		 
	}
	
	public function editar(){
		$id_foto = $this->uri->segment(3);
		$obtener_parametro= $this->Model_fotografia->obtener_parametro($id_foto);
		if($obtener_parametro != FALSE){
			foreach ($obtener_parametro->result() as $row) {
				$tipo_foto = $row->tipo_foto;
				$lugar_sesion = $row->lugar_sesion;
				$desc_proyecto = $row->desc_proyecto;
	
			}
			$data = array(
				'id_foto' => $id_foto,
				'tipo_foto' => $tipo_foto,
				'lugar_sesion'=> $lugar_sesion,
				'desc_proyecto' => $desc_proyecto
				);
		}else{
				$data = '';
				return FALSE;
		}
		$this-> load -> view('fotografia/editar',$data);
	}
	function editarparametros(){
   		$id_foto= $this-> uri-> segment(3);
   		$data = array(
				'tipo_foto' => $this->input->post('tipo_foto', true),
				'lugar_sesion'=> $this->input->post('lugar_sesion', true),
				'desc_proyecto' => $this->input->post('desc_proyecto', true)
				);
        $this->Model_fotografia-> editarparametros($id_foto,$data);
		redirect('proyectos/mostrar?msg=3');  
   }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */