<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model("productosModel");
        $this->load->helper(array('form','url')); //Nos ayuda a cargar un formulario
    }
	public function index()
	{
        $info["titulo"] = "Registar datos";
		$this->load->view('productos/index', $info);
	}
    public function registrar(){
        $cod=$this->input-> post("cod"); //es lo mismo que si hicieramos $_POST[];
        $des=$this->input-> post("des"); //es lo mismo que si hicieramos $_POST[];
        $inv=$this->input-> post("inv"); //es lo mismo que si hicieramos $_POST[];
        $sto=$this->input-> post("sto"); //es lo mismo que si hicieramos $_POST[];
       
        $resultado = $this -> productosModel -> registro($cod,$des, $inv,$sto); 
        if($resultado){
            redirect("productos/correcto");//agregamos una nueva vista llamada correcto
        }else{
            $this->index();
        }
    }
    public function correcto(){
        $info["titulo"] = "correcto";
        $this->load->view('productos/correcto', $info);         
    }
}
?>