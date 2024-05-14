<?php

if( !isset($_REQUEST['controller'] )){
    require_once('./controller/usuario_controller.php');
    $controlador = new UsuarioController();
    $controlador->indexUsuario();
}else{
    $controlador = $_REQUEST['controller'];
    $accion = $_REQUEST['accion'];
    require_once("controller/{$controlador}_controller.php");
    $controlador = ucwords($controlador).'Controller';
    $controlador = new $controlador;
    call_user_func([$controlador,$accion]);
}



?>