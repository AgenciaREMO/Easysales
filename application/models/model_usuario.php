<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//Aqui se pone model_NOMBRE DE LA TABLA A LA QUE VAMOS A HACER LÑAS OPERACIONES
 class Model_Usuario extends CI_Model {

  function __construct() {
   parent::__construct();
     }

     function all() {
         $query = $this->db->get('usuario');  //Esto es como si fuera select 
         return $query->result(); //Aqui se regresa el resultado
     }

     function find($id) {
      $this->db->where('id', $id);
      return $this->db->get('usuario')->row(); //select* from usuario where id=3 y devuelve el registro
     }

     function insert($registro) {  //insert into 
      $this->db->set($registro);
     $this->db->insert('usuario');
     }

     function update($registro) {
      $this->db->set($registro);
   $this->db->where('id', $registro['id']);
   $this->db->update('usuario');
     }

     function delete($id) {
      $this->db->where('id', $id);
   $this->db->delete('usuario');
     }

     function get_login($user, $pass) {
      $this->db->where('login', $user);
         $this->db->where('password', $pass);
         return $this->db->get('usuario');
     }

 }