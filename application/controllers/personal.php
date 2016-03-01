<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Personal extends CI_Controller {
function __construct(){
	parent::__construct();
   $this->load->model('Model_Personal');
   $this->form_validation->set_message('required','Debe de ingresar un valor para %s');
}
public function validaSesion(){
  if( $this->session->userdata('usuario_id') == FALSE )
  {
    $this->load->view('home/acceso_denegado');
    echo "Usuario no valido!!";
    exit();
  }
}
	public function index()
	{
		$this->validaSesion(); 
		$data['contenido'] = 'personal/agregar';
		$this->load->view('template', $data);
		
	}
	public function agregar()
	{
		$this->validaSesion(); 
		$this-> load -> view('personal/agregar');
	}
	public function guardar()
	{
		$this->validaSesion(); 
		$data = array(
			'nombre' => $this->input->post('nombre',TRUE),
			'telefono' => $this->input->post('telefono',TRUE),
			'celular' => $this->input->post('celular',TRUE),
			'email' => $this->input->post('email',TRUE),
			'especializacion' => $this->input->post('especializacion',TRUE),
			'puesto' => $this->input->post('puesto',TRUE)
		);
		$this->Model_Personal->guardar($data);
		redirect('personal/mostrar?msg=1');
	}
		public function mostrar()
	{
		$this->validaSesion(); 
		 $data =array(
		 	'enlaces' => $this->Model_Personal-> all(),
		 	'dump'=> 0
		 	);
		 $this->load->view('personal/index', $data); 
	}
	public function eliminar(){
		$this->validaSesion(); 
		 $id_personal = $this->uri->segment(3);
		 $this->Model_Personal->eliminar($id_personal);
		 redirect('personal/mostrar?msg=2');
		 
	}
	public function editar(){
		$this->validaSesion(); 
		$id_personal = $this->uri->segment(3);
		$obtener_parametro= $this->Model_Personal->obtener_parametro($id_personal);
		if($obtener_parametro != FALSE){
			foreach ($obtener_parametro->result() as $row) {
				$nombre = $row->nombre;
				$telefono = $row->telefono;
				$celular = $row->celular;
				$email = $row->email;
				$especializacion = $row->especializacion;
				$puesto = $row->puesto;

			}
			$data = array(
				'id_personal' => $id_personal,
				'nombre' => $nombre,
				'telefono' => $telefono,
				'celular' => $celular,
				'email' => $email,
				'especializacion' => $especializacion,
				'puesto' => $puesto
				);
		}else{
				$data = '';
				return FALSE;
		}
		$this-> load -> view('personal/editar',$data);
	}
	
	function editarparametros(){
		$this->validaSesion(); 
   		$id_personal= $this-> uri-> segment(3);
   		$data = array(
				'nombre' => $this->input->post('nombre', true),
				'telefono' => $this->input->post('telefono', true),
				'celular' => $this->input->post('celular', true),
				'email' => $this->input->post('email', true),
				'especializacion'=> $this->input->post('especializacion', true),
				'puesto'=> $this->input->post('puesto', true)
				);
        $this->Model_Personal-> editarparametros($id_personal,$data);
		redirect('personal/mostrar?msg=1');
        
   }
	
}
