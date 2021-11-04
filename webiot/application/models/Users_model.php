<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model {

   public function login($correo, $password){
      $this->db->where("user_email", $correo);
      $this->db->where("user_password", $password);
      $resultados = $this->db->get("user");

      if ($resultados->num_rows() > 0) {
         return $resultados->row();
      }
      else{
         return false;
      }
   }

   public function getUsuarios(){
      $this->db->where("user_estado","1");
      $resultados = $this->db->get("user");
      return $resultados->result();
   }
   public function getUsuariosProyecto($proyecto){
      $this->db->where("user_estado","1");
      $this->db->where("user_proyecto",$proyecto);
      $resultados = $this->db->get("user");
      return $resultados->result();
   }
   public function getUsuariosAplicacion($aplicacion){
      $this->db->where("user_estado","1");
      $this->db->where("user_aplicacion",$aplicacion);
      $resultados = $this->db->get("user");
      return $resultados->result();
   }

   public function getUsuarioTipo($id){
      $this->db->where("user_estado","1");
      $this->db->where("user_id",$id);
      $resultados = $this->db->get("user");
      return $resultados->row("user_tipo");
   }

   public function getUsuario($id){
      $this->db->where("user_id",$id);
      $resultado = $this->db->get("user");
      return $resultado->row();
   }

   public function save($data){
      return $this->db->insert("user",$data);
   }

   public function update($id,$data){
      $this->db->where("user_id",$id);
      return $this->db->update("user",$data);
   }

   public function delete($id){
      $this->db->where("user_id",$id);
      return $this->db->delete("user");
   }



}
