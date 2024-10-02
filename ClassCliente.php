<?php

class Cliente {
    Public $strNombre;
    public $strDocumento;

    public function __construct(string $nombre, string $documento) {
        $this->strNombre = $nombre;
        $this->strDocumento = $documento;
    }
    public function getInfoCliente() {
        $infoCliente = [
            'Nombre' => $this->strNombre,
            'Documento' => $this->strDocumento
        ];
        return $infoCliente;
    }
}

?>