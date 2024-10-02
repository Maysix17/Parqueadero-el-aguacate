<?php
require_once("ClassCliente.php");


class Vehiculo {
    public $strplaca;
    public $strmarca;
    public $strcolor; 

    public $strNombre;

public function  __construct( string $placa, string $marca, string $color, Cliente $cliente){


    $this->strplaca = $placa;
    $this->strmarca = $marca;
    $this->strcolor = $color;
    $this->strNombre = $cliente;
    

}
public function getInfoCliente(){
    $InfoCliente = [
        
        "Placa" => $this ->strplaca,
        "Marca"=> $this->strmarca,
        "Color"=> $this->strcolor,
        "Cliente"=> $this->strNombre


    ];
    return $InfoCliente;

}
}



?>