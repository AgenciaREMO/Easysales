<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Empresas extends CI_Controller {
function __construct()
{
	parent::__construct();
    $this->load->model('Model_Empresas');
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
		$data['contenido'] = 'empresas/mostrar';
		$this->load->view('template', $data);
	}
	public function menu()
	{
		$this->validaSesion();
		$this-> load -> view('empresas/menu');
	}
	public function agregar()
	{
		$this->validaSesion();
		$this-> load -> view('empresas/agregar');
	}
	public function guardar()
	{
		$this->validaSesion();
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
		redirect('empresas/mostrar?msg=1');
	}
		public function mostrar()
	{
		$this->validaSesion();
		 $data =array(
		 	'enlaces' => $this->Model_Empresas-> all(),
		 	'dump'=> 0
		 	);
		 $this->load->view('empresas/index', $data); 
	}
		public function eliminar(){
		$this->validaSesion();
		 $id_empresa = $this->uri->segment(3);
		 $this->Model_Empresas->eliminar($id_empresa);
		 redirect('empresas/mostrar?msg=2');
	}
	public function editar(){
		$this->validaSesion();
		$id_empresa = $this->uri->segment(3);
		$obtener_parametro= $this->Model_Empresas->obtener_parametro($id_empresa);
		if($obtener_parametro != FALSE){
			foreach ($obtener_parametro->result() as $row) {
				$nombre_empresa = $row->nombre_empresa;
				$giro_empresa = $row->giro_empresa;
				$antecedentes = $row->antecedentes;
				$mision = $row->mision;
				$valores = $row->valores;
				$servicios_productos = $row->servicios_productos;
				$diferenciador = $row->diferenciador;

			}
			$data = array(
				'id_empresa' => $id_empresa,
				'nombre_empresa' => $nombre_empresa,
				'giro_empresa'=> $giro_empresa,
				'antecedentes' => $antecedentes,
				'mision' => $mision,
				'valores' => $valores,
				'servicios_productos' => $servicios_productos,
				'diferenciador' => $diferenciador
				);
		}else{
				$data = '';
				return FALSE;
		}
		$this-> load -> view('empresas/editar',$data);
	}
   function editarparametros(){
	    $this->validaSesion();
   		$id_empresa= $this-> uri-> segment(3);
   		$data = array(
				'nombre_empresa' => $this->input->post('nombre_empresa', true),
				'giro_empresa'=> $this->input->post('giro_empresa', true),
				'antecedentes' => $this->input->post('antecedentes', true),
				'mision' => $this->input->post('mision', true),
				'valores' => $this->input->post('valores', true),
				'servicios_productos' => $this->input->post('servicios_productos', true),
				'diferenciador' =>$this->input->post('diferenciador', true)
				);
        $this->Model_Empresas-> editarparametros($id_empresa,$data);
		redirect('empresas/mostrar?msg=1');
        
   }
}