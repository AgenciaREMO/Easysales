<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//Este es el constructor//
class Perfil extends CI_Controller {
function __construct(){
	parent::__construct();
//Aqui podemos declarar librerias si se va a cargar en primer instancia///
//Aqui puse una libreria para poder definir errores//
   $this->load->model('Model_Perfil');
   $this->form_validation->set_message('required','Debe de ingresar un valor para %s');
}
	public function index()
	{
		$data['contenido'] = 'perfil/index';
		$data['titulo'] = 'Perfiles';
		$data['query'] = $this->Model_Perfil-> all();
		$this->load->view('template', $data);
		
	}
	//carga la pagina pero ya filtrado
	public function search()
	{
		$data['contenido'] = 'perfil/index';
		$data['titulo'] = 'Perfiles';
		$value = $this->input->post('buscar'); //aqui toma el valor del formilario de buscar
		$data['query'] = $this->Model_Perfil-> allFiltered('nombre', $value);
		$this->load->view('template', $data);
		
	}
	public function edit(){
		//$id=$this->uri->segment(3);  //Aqui se pasa el valor con el 3	
		$data['contenido'] = 'perfil/edit';
		$data['titulo'] = 'Actualizar Perfil';
		$data['registro'] = $this->Model_Perfil->find($id);
		$this->load->view('template', $data);
	}
	public function update(){
		$registro=$this->input->post(); //Si no se pone nada dentro de post() se puede agarrar todo los campos
		//$data = array('id'-> $this->input->post('id'),
					  //'name' $pas);
		update($registro);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */