<?php
 //se inicia la clase ninios con todos sus atributos
 class Ninios {

    private $db;
    private $ninios;

    public function __construct(){
        $this->db = conex();
        $this->ninios = array();
    }

    public function get_ninios(){
        $sql = "CALL sp_mostrar_datos";
        $resultado = $this->db->query($sql);
        while ($r =$resultado->fetch_assoc())
        {
            $this->ninios[] = $r;
        }
        return $this->ninios;
    }

 }



?>