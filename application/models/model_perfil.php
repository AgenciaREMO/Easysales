  <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//Aqui se pone model_NOMBRE DE LA TABLA A LA QUE VAMOS A HACER LÑAS OPERACIONES
 class Model_Perfil extends CI_Model {

  function __construct() {
   parent::__construct();
     }

     function all() {  //se le agregan valores por si hay vacio o mandas valores
         $query = $this->db->get('perfil');  //Esto es como si fuera select 
         return $query->result(); //Aqui se regresa el resultado
     }
	 function allFiltered($field, $value) {  //se le agregan valores por si hay vacio o mandas valores
		     $this->db->like($field, $value);
         $query = $this->db->get('perfil');  //Esto es como si fuera select 
         return $query->result(); //Aqui se regresa el resultado
		 
     }
     function find($id) {
      $this->db->where('id', $id);
      return $this->db->get('perfil')->row(); //select* from usuario where id=3 y devuelve el registro
     }

     function insert($registro) {  //insert into 
      $this->db->set($registro);
      $this->db->insert('perfil');
     }

     function update($registro) {
      $this->db->set($registro);
      $this->db->where('id', $registro['id']);
      $this->db->update('perfil');
     }

     function delete($id) {
      $this->db->where('id', $id);
   $this->db->delete('perfil');
     }
 }