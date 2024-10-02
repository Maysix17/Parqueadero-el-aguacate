<?php
require_once("ClassVehiculo.php");

class Parqueadero {
    public $pisos;
    public $cuposDisponibles;
    public $precioPorHora;
    public $espacios;

    public function __construct(int $pisos = 4, int $cuposPorPiso = 10) {
        $this->pisos = $pisos;
        $this->precioPorHora = 2;
        $this->cuposDisponibles = array_fill(0, $pisos, $cuposPorPiso);
        $this->espacios = []; 
    }

    public function registrarEspacio(Vehiculo $vehiculo, int $piso) {
        if ($piso >= 1 && $piso <= $this->pisos && $this->cuposDisponibles[$piso - 1] > 0) {
            $this->cuposDisponibles[$piso - 1]--;
            $this->espacios[$piso][] = $vehiculo;
            return "Vehículo registrado en el piso $piso.";
        } else {
            return "No hay espacio disponible en el piso $piso.";
        }
    }

    public function calcularPago(int $horas) {
        return $horas * $this->precioPorHora;
    }

    public function mostrarEstado() {
        return [
            "Pisos" => $this->pisos,
            "Cupos Disponibles por Piso" => $this->cuposDisponibles,
            "Vehículos Registrados" => $this->espacios
        ];
    }
}
?>
