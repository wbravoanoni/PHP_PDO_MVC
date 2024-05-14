<?php
require_once('./model/usuario.php');


class UsuarioController extends Usuario{

    public function __construct(){
        parent::__construct();
    }

    public function indexUsuario(){
        require_once('./view/usuarios.php');
    }

    public function mostrarUsuario(){

        if( isset( $_REQUEST['id'] )){
            $usuario = $this->consultarUno( $_REQUEST['id'] );
        }else{
            $usuario = $this;
        }

        require_once('./view/usuario_formulario.php');
    }

    public function guardar(){
        $this->id = $_REQUEST['id'];
        $this->nombre = $_REQUEST['nombre'];
        $this->apellido = $_REQUEST['apellido'];
        $this->telefono = $_REQUEST['telefono'];
        $this->edad = $_REQUEST['edad'];
        $this->id > 0 ? $this->actualizar() : $this->insertar();
        header("Location:index.php");
    }

    public function eliminar(){
        $this->delete($_REQUEST['id']);
        header("Location:index.php");
    }







}







?>