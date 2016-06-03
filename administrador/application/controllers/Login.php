<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
        
        parent::__construct();
        //$this->load->library('form_validation');
	
        
    }
    
	public function index()
	{
			
      $this->load->view('loginC_view/login_view');
    
   /* if(isset($_POST['password'])){
     $this->load->model('Login_model');    
    if($this->Login_model->login($_POST['username'],md5($_POST['password']))){
        
        redirect(Administrador);
    }else{
        
        redirect(Login);
    } 
    }
   $this->load->view('page-sign-in');
 
	
    
    */
    }
    
   
   public function iniciar_sesion_post() {
      if ($this->input->post()) {
         $username = $this->input->post('username');
         $password = $this->input->post('password');
          
         /*echo '<pre>';
          print_r($username);
          echo '</pre>';
           echo '<pre>';
          print_r($password);
          echo '</pre>';
          */
         $this->load->model('Login_model');
         $usuario = $this->Login_model->login($username, $password);
          
          /* echo '<pre>';
          print_r($usuario);
          echo '</pre>';
          */
         if ($usuario != NULL) {
            $usuario_data = array(
               'id_usuario' => $usuario->ID_USUARIO,
                'id_tipo' => $usuario->ID_TIPO,
               'nombre' => $usuario->NOMBRE,
                'apellido' => $usuario->APELLIDO,
                'mail' => $usuario->MAIL,
                'fono' => $usuario->FONO,
                'entidad' => $usuario->NOMBRE_ENTIDAD,
                'region' => $usuario->REGION,
               'logueado' => TRUE
            );
             
             /*echo '<pre>';
          print_r($usuario_data);
          echo '</pre>';
          */
           $this->session->set_userdata($usuario_data);
           redirect('Login/logueado');
          
         } else {
        
            /* echo '<pre>';
                print_r("no entro al if");
             echo '</pre>';
            */
            redirect('Login');
         }
      } else {
         $this->index();
      }
   }
   public function logueado() {
      if($this->session->userdata('logueado')){
         $data = array();
         $data['nombre'] = $this->session->userdata('nombre');
         redirect('Administrador');
      }else{
         $this->index();
      }
   }
   public function cerrar_sesion() {
      $usuario_data = array(
         'logueado' => FALSE
      );
      $this->session->set_userdata($usuario_data);
      redirect('page-sign-in');
   }
    
    
}