<?php

class A
{
    public function sumar($a, $b)
    {
        return $a + $b;
    }
}

class B
{
    private $a;

    public function __construct($a)
    {
        $this->a = $a
    }

    public function traerSuma()
    {
        return $this->a->sumar(1, 3);
    }

    public function setA($a)
    {
        $this->a = $a
    }
}

$a = new A;
//$b = new B($a); // por constructor
$b = new B();
$b->setA($a);
echo $b->traerSuma();
