<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//Este es el constructor//
class Home extends CI_Controller {
function __construct(){
	parent::__construct();
   $this->form_validation->set_message('required','Debe de ingresar un valor para %s');
    $this->form_validation->set_message('loginok','Usuario o clave incorrectos');
	$this->form_validation->set_message('matches','%s No coincide con %s');
	$this->form_validation->set_message('cambiook','No se puede realizar el cambio de password ');
   $this->load->library('usuarioLib');
}
public function validaSesion(){
  if( $this->session->userdata('usuario_id') == FALSE )
  {
    $this->load->view('home/acceso_denegado');
    //echo "Usuario no valido!!";
    exit();
  }
}
	public function index()
	{
		$data['contenido'] = 'home/index';
		$data['titulo'] = 'Inicio';
		$this->load->view('home/ingreso', $data);	
	}
  public function vista() {
  $this->validaSesion();
  $data['contenido'] = 'home/vista';
  $data['titulo'] = 'Ingreso';
  $this->load->view('template', $data);
 }
  public function login() {
   $this->load->view('home/login');
 }
  public function ingresar_usuarios() {
   $this->load->view('home/registrar');
 }
  public function ingreso() {
  $this->load->view('home/login');
  
 }
  public function loginok() {  
  $login = $this->input->post('login');
  $password = $this->input->post('password');
  return $this->usuariolib->login($login, $password);
 }
 public function ingresar(){
  $this->form_validation->set_rules('login', 'Usuario', 'required|callback_loginok');
  $this->form_validation->set_rules('password', 'Clave', 'required'); 
  if($this->form_validation->run() == FALSE){
   $this->ingreso();
  }
  else {
   redirect('proyectos/mostrar');
  }  
 }
 public function acceso_denegado() {
   $data['contenido'] = 'home/acceso_denegado';
  $data['titulo'] = 'Denegado';
  $this->load->view('template', $data);
 }
 public function salir() {
  $this->session->sess_destroy();
  redirect('home/login');
 }
  public function cambio_clave() {
  $data['contenido'] = 'home/cambio_clave';
  $data['titulo'] = 'Cambiar Clave';
  $this->load->view('home/cambio_clave');
 }
  public function cambiar_clave() {
  $this->form_validation->set_rules('clave_act', 'Clave Actual', 'required|callback_cambiook');
  $this->form_validation->set_rules('clave_new', 'Clave Nueva', 'required|matches[clave_rep]');  
  $this->form_validation->set_rules('clave_rep', 'Repita Nueva', 'required');
  if($this->form_validation->run() == FALSE) {
   $this->cambio_clave();
  }
  else {
   redirect('proyectos/mostrar');
  }
 }
  public function cambiook() {
  $act = $this->input->post('clave_act');
  $new = $this->input->post('clave_new');
  return $this->usuariolib->cambiarPWD($act, $new);  
 }
 public function guardar()
  {
    $data = array(
      'nombre_empresa' => $this->input->post('nombre_empresa',TRUE),
      'giro_empresa' => $this->input->post('giro_empresa',TRUE),
      'antecedentes' => $this->input->post('antecedentes',TRUE),
      'mision' => $this->input->post('mision',TRUE),
      'vision' => $this->input->post('vision',TRUE),
      'valores' => $this->input->post('valores',TRUE),
      'servicios_productos' => $this->input->post('servicios_productos',TRUE),
      'diferenciador' => $this->input->post('diferenciador',TRUE)
    );
    $this->Model_Empresas->guardar($data);
    echo "SE GUARDARON LOS DATOS";

    redirect('empresas/agregar');
    



  }
 	public function guardar_usuario()
  {
    $data = array(
      'login' => $this->input->post('login',TRUE),
      'password' => $this->input->post('password',TRUE),
      'name' => $this->input->post('name',TRUE)
      );
    $this->Model_Usuario->ingresar_usuario($data);
   
    redirect('empresas/agregar');
    }
 
}
