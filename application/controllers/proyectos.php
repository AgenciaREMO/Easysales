<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Proyectos extends CI_Controller {
function __construct(){
	parent::__construct();
   $this->load->model('Model_Proyectos');
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
		$data['contenido'] = 'proyectos/agregar';
		$this->load->view('template', $data);
		
	}
	public function agregar()
	{
		$this->validaSesion(); 	 
		 $data =array(
		 	'nom_cliente' => $this->Model_Proyectos->obtener_clientes(),
		 	'dump'=> 0,
			'nom_persnonal'=> $this->Model_Proyectos->obtener_personal()
		 	);
		
		$this->load->view('proyectos/agregar',$data); 
	}
	public function publicaciones()
	{
		
		$this->load->view('proyectos/publicaciones'); 
	}
	public function guardar()
	{	$this->validaSesion(); 
		$data = array(
			'id_cliente' => $this->input->post('id_nombres',TRUE),
			'id_personal' => $this->input->post('id_personales',TRUE),
			'nombre' => $this->input->post('nombre',TRUE),
			'depto_responsable' => $this->input->post('depto_responsable',TRUE),
			'objetivo' => $this->input->post('objetivo',TRUE),
			'alcance' => $this->input->post('alcance',TRUE),
			'antecedentes' => $this->input->post('antecedentes',TRUE),
			'f_inicio' => $this->input->post('f_inicio',TRUE),
			'f_termino' => $this->input->post('f_termino',TRUE),
			//'id_prospeccion' => $this->input->post('id_prospeccion',TRUE),
			//'id_oportunidad' => $this->input->post('id_oportunidad',TRUE),
			//'id_cierre' => $this->input->post('id_cierre',TRUE),
			'resultado_estatus' => $this->input->post('estatus',TRUE)
		);
		$this->Model_Proyectos->guardar($data);
		redirect('proyectos/mostrar?msg=1');
	}
	public function mostrar()
	{	
		 $this->validaSesion(); 
		 $data =array(
		 	'enlaces' => $this->Model_Proyectos-> all(),
			'valor_web' => $this->Model_Proyectos-> w_brief(),
			'valor_video' => $this->Model_Proyectos-> v_brief(),
			'valor_fotografia' => $this->Model_Proyectos-> f_brief(),
			'valor_dg' => $this->Model_Proyectos-> dg_brief(),
		 	'dump'=> 0
		 	);
		 $this->load->view('proyectos/index', $data); 
	}



		public function eliminar(){
		 $id_proyecto = $this->uri->segment(3);
		 $this->Model_Proyectos->eliminar($id_proyecto);
		 redirect('proyectos/mostrar?msg=2');
	}
	public function editar(){
		$this->validaSesion(); 
		$id_proyecto = $this->uri->segment(3);
		$obtener_parametro= $this->Model_Proyectos->obtener_parametro($id_proyecto);
		if($obtener_parametro != FALSE){
			foreach ($obtener_parametro->result() as $row) {
				$id_cliente = $row->id_cliente;
				$id_personal = $row->id_personal;
				$nombre = $row->nombre;
				$depto_responsable = $row->depto_responsable;
				$objetivo = $row->objetivo;
				$alcance = $row->alcance;
				$antecedentes = $row->antecedentes;
				$f_inicio = $row->f_inicio;
				$f_termino = $row->f_termino;
				//$id_prospeccion = $row->id_prospeccion;
				//$id_oportunidad = $row->id_oportunidad;
				//$id_cierre = $row->id_cierre;
				$resultado_estatus = $row->resultado_estatus;

			}
			$data = array(
				'id_proyecto' => $id_proyecto,
				'id_cliente' => $id_cliente,
				'id_personal' => $id_personal,
				'nombre'=> $nombre,
				'depto_responsable' => $depto_responsable,
				'mision' => $objetivo,
				'alcance' => $alcance,
				'antecedentes' => $antecedentes,
				'f_inicio' => $f_inicio,
				'f_termino' => $f_termino,
				//'id_prospeccion' => $id_prospeccion,
				//'id_oportunidad' => $id_oportunidad,
				//'id_cierre' => $id_cierre,
				'resultado_estatus' => $resultado_estatus,
				'nom_cliente' => $this->Model_Proyectos->obtener_clientes(),  
				'nom_c' => $this->Model_Proyectos->obtener_clientes_2(),
				'nom_persnonal'=> $this->Model_Proyectos->obtener_personal()
				);
		}else{
				$data = '';
				return FALSE;
		}
		$this-> load -> view('proyectos/editar',$data);
	}
	 function editarparametros(){
		$this->validaSesion(); 
   		$id_proyecto= $this-> uri-> segment(3);
		if(empty($_POST['id_nombres'])){
					$data = array(					
				'id_cliente' => $this->input->post('id_cliente', true),
				'id_personal'=> $this->input->post('id_personal', true),
				'nombre' => $this->input->post('nombre', true),
				'depto_responsable' => $this->input->post('depto_responsable', true),
				'objetivo' => $this->input->post('objetivo', true),
				'alcance' => $this->input->post('alcance', true),
				'antecedentes' =>$this->input->post('antecedentes', true),
				'f_inicio' =>$this->input->post('f_inicio', true),
				'f_termino' =>$this->input->post('f_termino', true),
				//'id_prospeccion' =>$this->input->post('id_prospeccion', true),
				//'id_oportunidad' =>$this->input->post('id_oportunidad', true),
				//'id_cierre' =>$this->input->post('id_cierre', true),
				'resultado_estatus' =>$this->input->post('estatus', true)
				);
				$this->Model_Proyectos-> editarparametros($id_proyecto,$data);
				}else{
				$data = array(					
				'id_cliente' => $this->input->post('id_nombres', true),
				'id_personal'=> $this->input->post('id_personales', true),
				'nombre' => $this->input->post('nombre', true),
				'depto_responsable' => $this->input->post('depto_responsable', true),
				'objetivo' => $this->input->post('objetivo', true),
				'alcance' => $this->input->post('alcance', true),
				'antecedentes' =>$this->input->post('antecedentes', true),
				'f_inicio' =>$this->input->post('f_inicio', true),
				'f_termino' =>$this->input->post('f_termino', true),
				//'id_prospeccion' =>$this->input->post('id_prospeccion', true),
				//'id_oportunidad' =>$this->input->post('id_oportunidad', true),
				//'id_cierre' =>$this->input->post('id_cierre', true),
				'resultado_estatus' =>$this->input->post('estatus', true)
				);
        $this->Model_Proyectos-> editarparametros($id_proyecto,$data);
				}
			redirect('proyectos/mostrar?msg=1');  
        
   }
	
	
}