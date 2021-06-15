<?php
// Em alguns casos as Traits podem substituir as Heranças 
trait objeto
{
    public function testando()
    {
        echo "Testando a Traits de Objeto";
    }
}

trait Objeto2
{
    public function testando2()
    {
        echo "Testando a Traits de Objeto2";
    }
}

class Central
{
    use objeto;
    use objeto2;
}

$x = new Central;

$x->testando2() . "<br>";
$x->testando();
