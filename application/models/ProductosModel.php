<?php
    class productosModel extends  CI_model{
        
        public function __construct(){
            //Nos servira para cargar una libreria
            $this -> load -> database();
        }
        public function registro($codigo, $descripcion,$inventariable,$stock){
           return $this->db->insert("productos", ["codigo"=>$codigo, "descripcion"=>$descripcion, "inventariable"=>$inventariable, "stock"=>$stock]);    
        }
    }
?>