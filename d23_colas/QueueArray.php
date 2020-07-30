<?php

require_once 'InterfaceQueue.php';

class QueueArray implements InterfaceQueue {
    private $datos;

    // Indice del elemento mas antiguo (por aqui se elimina)
    private $primero;

    // Indice del elemento mas nuevo (por aqui se inserta)
    private $ultimo;

    public function __construct() {
        $this->datos = [];
        $this->primero = 0;
        $this->ultimo = 0;
    }

    public function enqueue($elemento) {
        array_push($this->datos, $elemento);
        $this->ultimo++;
    }

    public function is_empty(): bool {
        return ($this->primero === $this->ultimo);
    }

    public function front() {
        if ($this->is_empty()) {
            throw new Exception('Cola vacia');
        }

        return $this->datos[$this->primero];
    }

    public function dequeue() {
        $aux = $this->front();
        unset($this->datos[$this->primero++]);
        return $aux;
    }

    public function clear() {
        $this->datos = [];
        $this->primero = 0;
        $this->ultimo = -1;
    }

    public function print() {
        echo 'Primero=', $this->primero, ' Ultimo=', $this->ultimo, PHP_EOL;
        var_dump($this->datos);
    } 
}