<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model 
{
    public function __construct()
    {
        parent::__construct();
        
    }

    public function login($username,$password)
    {
        
       /* $this->db->where('USERNAME',$username);
        $this->db->where('PASSWORD',$password);
        $query=$this->db->get('usuario');
        
        if($query->num_rows()>0)
        {
            return true;
        }else{
            return false;
        }
        */
        $sql="SELECT ID_USUARIO,ID_TIPO,NOMBRE,APELLIDO,MAIL,FONO,REGION,NOMBRE_ENTIDAD
              FROM usuario,region,entidad
              WHERE USERNAME='".$username."'  AND PASSWORD='".md5($password)."' AND entidad.ID_ENTIDAD=usuario.ID_ENTIDAD
                    AND region.ID_REGION=entidad.ID_REGION";
      $query= $this->db->query($sql);
    
        if($query->num_rows()>=1)
        {
           
            return $query->row();
        }else{
                return NULL;
        }      
    }
    
    
}
