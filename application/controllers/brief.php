<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//Este es el constructor//
class Brief extends CI_Controller {
function __construct(){
	parent::__construct();
//Aqui podemos declarar librerias si se va a cargar en primer instancia///
//Aqui puse una libreria para poder definir errores//
   $this->load->model('Model_Clientes');
   $this->form_validation->set_message('required','Debe de ingresar un valor para %s');
}
	public function index()
	{
		$data['contenido'] = 'brief/agregar';
		$data['titulo'] = 'Clientes';
		$this->load->view('template', $data);
		
	}
	public function agregar()
	{
		$this-> load -> view('brief/agregar');	
	}
	public function guardar()
	{
		$data = array(
			'nombre' => $this->input->post('nombre',TRUE),
			'puesto' => $this->input->post('puesto',TRUE),
			'id_empresa' => $this->input->post('id_empresa',TRUE),
			'tipo_cliente' => $this->input->post('tipo_cliente',TRUE),
			'telefono' => $this->input->post('telefono',TRUE),
			'celular' => $this->input->post('valores',TRUE),
			'email' => $this->input->post('servicios_productos',TRUE)
		);
		$this->Model_Clientes->guardar($data);
		echo "SE GUARDARON LOS DATOS";

		redirect('empresas/agregar');
	}
	public function mostrar()
	{
		 
		 $this->load->view('brief/index', $data); //Para pasar los datos
		 //$this->load->view('empresas/agregar', $data);
		 //$this->load->view('template', $data);
	}
	public function eliminar(){
		 $id_cliente = $this->uri->segment(3);
		 $this->Model_Clientes->eliminar($id_cliente);
		 redirect('clientes/index');
	}
	
	public function editar(){
		
		$this-> load -> view('brief/editar',$data);
	}
	//carga la pagina pero ya filtrado
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */