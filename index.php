<?php

require_once('usuario.php');

$usuario = new Usuario(1,'prueba','prueba','prueba','00');
#$usuario->insertar();
#$usuario->actualizar();
#$usuario->remover();

//var_dump($usuario->consultarTodo());
var_dump($usuario->consultarUno(2));

?>