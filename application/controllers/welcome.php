<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//Este es el constructor//
class Home extends CI_Controller {
function __construct(){
parent::__construct();
//Aqui podemos declarar librerias si se va a cargar en primer instancia///

}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['contenido'] = 'home/index';
		$data['titulo'] = 'Inicio';
		$this->load->view('template', $data);
		
	}
	
 public function acerca_de() {
					/*$');*/
  $this->session->set_userdata('usuario', 'Andrés Oller');
  $data['contenido'] = 'home/acerca_de';
  $data['titulo'] = 'Acerca De';
  $this->load->view('template', $data);
 }
  public function ingreso() {
  $data['contenido'] = 'home/ingreso';
  $data['titulo'] = 'Ingreso';
  $this->load->view('template', $data);
  //$this->load->view('ingreso');
 }
  
 public function ingresar(){
  $this->form_validation->set_rules('login', 'Usuaurio', 'required');
  $this->form_validation->set_rules('password', 'Clave', 'required');
 
  if($this->form_validation->run() == FALSE){
   $this->ingreso();
  }
  else {
   $this->session->set_userdata('usuario', 'Andrés Oller');
   redirect('home/index');
  }
    
 }
 
 public function acceso_denegado() {
   $data['contenido'] = 'home/acceso_denegado';
  $data['titulo'] = 'Denegado';
  $this->load->view('template', $data);
 }
 public function salir() {
  $this->session->sess_destroy();
  redirect('home/index');
 }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */