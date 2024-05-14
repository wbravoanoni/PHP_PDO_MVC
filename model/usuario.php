<?php

require_once('./core/crud.php');


class Usuario extends Crud{

    public function __construct(
        public int $id = 0,
        public string $nombre = '',
        public string $apellido = '',
        public string $telefono = '',
        public int $edad = 0
    )
    {parent::__construct("usuario");}

    public function insertar(){
        $parametros= [$this->nombre,$this->apellido,$this->telefono,$this->edad];
        $this->crear('nombre,apellido,telefono,edad','?,?,?,?',$parametros);
    }

    public function actualizar(){
        $parametros= [$this->nombre, $this->apellido, $this->telefono, $this->edad, $this->id];
        $this->update('nombre = ?, apellido = ?, telefono = ?, edad = ?', $parametros);
    }

    public function remover(){
        $this->delete($this->id);
    }

    
}

# id nombre appelido telefono edad

?>