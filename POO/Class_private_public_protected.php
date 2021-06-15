<?php

class Carro1
{
    public $cor;

    public function setCor($cor)
    {
        $this->cor = $cor;
    }

    public function getCor()
    {
        return $this->cor;
    }
}
class Carro2
{
    private $cor;

    public function setCor($cor)
    {
        $this->cor = $cor;
    }

    public function getCor()
    {
        return $this->cor;
    }
}
class Carro3
{
    protected $cor;

    public function setCor($cor)
    {
        $this->cor = $cor;
    }

    public function getCor()
    {
        return $this->cor;
    }
}
class Carroherança extends carro3
{
}

// Instanciando Objetos
$carro1 = new Carro1;
$carro2 = new Carro2;
$carro3 = new Carro3;
$carroH = new Carroherança;

/* Quando a propriedade é Public podemos acessar de qualquer parte do codigo*/
echo $carro1->cor = "Amarelo";
echo "<br>";

/* Quando uma propriedade é Private, 
so consigo acessar via metodo da classe que ela foi criada */
$carro2->setCor("Azul");
echo $carro2->getCor() . "<br>";


/*Quando a propriedade é Protected 
conseguimos acessar somente pela sua classe de origem e heranças*/
$carro3->setCor("Rosa");
echo $carro3->getCor() . "<br>";

// Acessando a propriedade da Herança via metodo da classe PAI = Carro3
$carroH->setCor("Branco");
echo $carroH->getCor() . "<br>";
