<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Administrador extends CI_Controller {

 function __construct()
 {
   parent::__construct();
  
   
 }

 function index()
 {
     
     if($this->session->userdata('logueado')){
     
        $data= array();
        $data['nombre']=$this->session->userdata('nombre');
        $data['apellido']=$this->session->userdata('apellido');
        $data['entidad']=$this->session->userdata('entidad');
        //$data['region']=$this->session->userdata('region');
        $this->load->view('administradorC_view/administrador_view',$data);
     }else{
         
         redirect(Login);
     }
 }
}
?>