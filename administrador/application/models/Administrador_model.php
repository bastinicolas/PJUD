<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Administrador_model extends CI_Model 
{
    function __construct()
    {
        parent::__construct();
    }
    
    //SELECCIONAR TODAS LAS REGIONES
      public function iniciar_sesion($username,$password){
        
          
        $sql="SELECT ID_USUARIO,ID_TIPO,NOMBRE,APELLIDO,MAIL,FONO
              FROM usuario
              WHERE USERNAME='".$username."' AND PASSWORD='".$password."'";
         $query= $this->db->query($sql);
        if($query->num_rows()>=1)
        {
           
            return $query->result();
        }else{
                return NULL;
        }
                
    }
}
