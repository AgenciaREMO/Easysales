<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Clientes extends CI_Controller {
function __construct(){
	parent::__construct();
   $this->load->model('Model_Clientes');
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
		$data['contenido'] = 'clientes/agregar';
		$data['titulo'] = 'Clientes';
		$this->load->view('template', $data);
		
	}
	public function agregar()
	{
		$this->validaSesion(); 
		$data =array(
		 	'nom_empresa' => $this->Model_Clientes->obtener_nombreempresa(),
		 	'dump'=> 0
		 	);
		$this-> load -> view('clientes/agregar',$data);	
		
	}
	public function guardar()
	{
		$this->validaSesion(); 
		$data = array(
			'nombre' => $this->input->post('nombre',TRUE),
			'puesto' => $this->input->post('puesto',TRUE),
			'id_empresa' => $this->input->post('id_empresas',TRUE),
			'tipo_cliente' => $this->input->post('tipo_cliente',TRUE),
			'telefono' => $this->input->post('telefono',TRUE),
			'celular' => $this->input->post('celular',TRUE),
			'email' => $this->input->post('email',TRUE)
		);
		$this->Model_Clientes->guardar($data);
		redirect('clientes/mostrar?msg=1');
		
	}
	public function mostrar()
	{
		$this->validaSesion(); 
		 $data =array(
		 	'enlaces' => $this->Model_Clientes-> all(),
		 	'dump'=> 0
		 	);
		 $this->load->view('clientes/index', $data); 
	}
	public function eliminar(){
		$this->validaSesion(); 
		 $id_cliente = $this->uri->segment(3);
		 $this->Model_Clientes->eliminar($id_cliente);
		 redirect('clientes/mostrar?msg=2');
	}
	
	public function editar(){
		$this->validaSesion(); 
		$id_cliente = $this->uri->segment(3);
		$obtener_parametro= $this->Model_Clientes->obtener_parametro($id_cliente);
		if($obtener_parametro != FALSE){
			foreach ($obtener_parametro->result() as $row) {
				$nombre = $row->nombre;
				$puesto = $row->puesto;
				$id_empresa = $row->id_empresa;
				$tipo_cliente = $row->tipo_cliente;
				$telefono = $row->telefono;
				$celular = $row->celular;
				$email = $row->email;

			}
			$data = array(
				'id_cliente' => $id_cliente,
				'nombre' => $nombre,
				'puesto'=> $puesto,
				'id_empresa' => $id_empresa,
				'tipo_cliente' => $tipo_cliente,
				'telefono' => $telefono,
				'celular' => $celular,
				'email' => $email,
				'nom_empresa' => $this->Model_Clientes->obtener_nombreempresa()
				);
		}else{
				$data = '';
				return FALSE;
		}
		$this-> load -> view('clientes/editar',$data);
	}

	 function editarparametros(){
		$this->validaSesion(); 
   		$id_cliente= $this-> uri-> segment(3);
   		$data = array(
				'nombre' => $this->input->post('nombre', true),
				'puesto'=> $this->input->post('puesto', true),
				'id_empresa'=> $this->input->post('id_empresas', true),
				'telefono' => $this->input->post('telefono', true),
				'celular' => $this->input->post('celular', true),
				'email' => $this->input->post('email', true)
				);
        $this->Model_Clientes-> editarparametros($id_cliente,$data);

		redirect('clientes/mostrar?msg=1');  
   }
}
