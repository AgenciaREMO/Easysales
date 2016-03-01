<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//Este es el constructor//
class Web extends CI_Controller {
function __construct(){
	parent::__construct();
//Aqui podemos declarar librerias si se va a cargar en primer instancia///
//Aqui puse una libreria para poder definir errores//
   $this->load->model('Model_Web');
   $this->form_validation->set_message('required','Debe de ingresar un valor para %s');
}
	public function index()
	{
		$data['contenido'] = 'web/agregar';
		$data['titulo'] = 'Clientes';
		$this->load->view('template', $data);
		
	}
	public function agregar()
	{
		$id_proyecto = $this->uri->segment(3);
		$obt_id= $this->Model_Web->obtener_id($id_proyecto);
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
		$this-> load -> view('web/agregar',$data);	
	}
	public function mostrar()
	{
		$id_proyecto = $this->uri->segment(3);
		
		 $data =array(
		 	'enlaces' => $this->Model_Web-> all($id_proyecto),
		 	'dump'=> 0
		 	);
		 $this->load->view('web/index', $data); //Para pasar los datos	 
	}	
	public function guardar()
	{
		$p=$_POST['id_proyecto'];
		$T_brief=$_POST['Tipo_Brief'];
		$data = array(
			'id_proyecto' => $this->input->post('id_proyecto',TRUE),
			'nombre_dominio' => $this->input->post('nombre_dominio',TRUE),
			'hosting' => $this->input->post('hosting',TRUE),
			'desc_proyecto' => $this->input->post('desc_proyecto',TRUE)
			
		);
		
		$data2 = array(
			'brief' => $this->input->post('Tipo_Brief',TRUE),	
		);
		$this->Model_Web->guardar($data);
		$this->Model_Web->guardar_b($p,$data2);
		redirect('proyectos/mostrar?msg=3');
	}
	
	public function eliminar()
	{	
		$cambiar_brief=0;
		$id_web = $this->uri->segment(3);
		///////
		$obtener_parametro= $this->Model_Web->obtener_parametro($id_web);
		if($obtener_parametro != FALSE){
			foreach ($obtener_parametro->result() as $row) {
				$nombre_dominio = $row->nombre_dominio;
				$id_proyecto=$row->id_proyecto;
				$hosting = $row->hosting;
				$desc_proyecto = $row->desc_proyecto;
	
			}
			$data = array(
				'id_web' => $id_web,
				'nombre_dominio' => $nombre_dominio,
				'hosting'=> $hosting,
				'desc_proyecto' => $desc_proyecto
				);
		}else{
				$data = '';
				return FALSE;
		}
		$data2 = array(
			'brief' => $cambiar_brief
		);
		$this->Model_Web->guardar_nob($id_proyecto,$data2);
		 //redirect('web/index');
		$this->Model_Web->eliminar($id_web);
		redirect('proyectos/mostrar?msg=4');
	}
	
	public function editar(){
		$id_web = $this->uri->segment(3);
		$obtener_parametro= $this->Model_Web->obtener_parametro($id_web);
		if($obtener_parametro != FALSE){
			foreach ($obtener_parametro->result() as $row) {
				$nombre_dominio = $row->nombre_dominio;
				$hosting = $row->hosting;
				$desc_proyecto = $row->desc_proyecto;
	
			}
			$data = array(
				'id_web' => $id_web,
				'nombre_dominio' => $nombre_dominio,
				'hosting'=> $hosting,
				'desc_proyecto' => $desc_proyecto
				);
		}else{
				$data = '';
				return FALSE;
		}
		$this-> load -> view('web/editar',$data);
	}
	function editarparametros(){
   		$id_web= $this-> uri-> segment(3);
   		$data = array(
				'nombre_dominio' => $this->input->post('nombre_dominio', true),
				'hosting'=> $this->input->post('hosting', true),
				'desc_proyecto' => $this->input->post('desc_proyecto', true)
				);
        $this->Model_Web-> editarparametros($id_web,$data);
		redirect('proyectos/mostrar?msg=3');  
   }
	//carga la pagina pero ya filtrado
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */