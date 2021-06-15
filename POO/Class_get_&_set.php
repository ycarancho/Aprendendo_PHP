<?php

class Carro
{
    public $cor;
    public $modelo;
    public $velocidadeMaxima;
    public $aro;

    function setCor($cor)
    {
        $this->cor = $cor;
    }
    function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }
    function setVelocidadeMaxima($vel_max)
    {
        $this->velocidadeMaxima = $vel_max;
    }
    function setAro($aro)
    {
        $this->aro = $aro;
    }

    function getCor()
    {
        return $this->cor;
    }
    function getModelo()
    {
        return $this->modelo;
    }
    function getVelocidadeMaxima()
    {
        return $this->velocidadeMaxima . "Km/h";
    }
    function getAro()
    {
        return $this->aro;
    }
}


$carro1 = new Carro;
$carro1->setCor("Branco");
$carro1->setModelo("BMW");
$carro1->setVelocidadeMaxima(300);
$carro1->setAro(15);

echo " O modelo do carro é " . $carro1->getModelo();
echo " A cor do carro é " . $carro1->getCor();
echo " Ele chega ate " . $carro1->getVelocidadeMaxima();
echo " E tem o aro de " . $carro1->getAro();
