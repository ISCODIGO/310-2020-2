<?php

require_once 'InterfaceStack.php';
require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . '/d24_listas/simples/LinkedList.php';
//require_once '../d24_listas/simples/LinkedList.php';

class StackLL implements InterfaceStack
{
    private $lista;

    public function __construct() 
    {
        $this->lista = new LinkedList();
    }

    public function push($elemento) 
    {
        $this->lista->addFirst($elemento);
    }

    public function is_empty(): bool 
    {
        return $this->lista->is_empty();
    }

    public function pop() 
    {
        $aux = $this->lista->removeFirst();
        return $aux;
    }

    public function top() 
    {
        return $this->lista->first();
    }

    public function clear() 
    {
        $this->lista->clear();
    }

    public function size() 
    {
        return $this->lista->size();
    }
}