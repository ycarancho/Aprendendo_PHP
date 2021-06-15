<?php

class Humano
{
    protected $idade;
    protected $cor;
    protected $altura;

    public function setIdade($idade)
    {
        $this->idade = $idade;
    }

    public function getIdade()
    {
        return $this->idade;
    }
    public function setCor($cor)
    {
        $this->cor = $cor;
    }

    public function getCor()
    {
        return $this->cor;
    }
    public function setAltura($altura)
    {
        $this->altura = $altura;
    }

    public function getAltura()
    {
        return $this->altura;
    }
}

class Professor extends Humano
{
    protected $nome;
    protected $formacao;

    public function setFormacao($formacao)
    {

        $this->formacao = $formacao;
    }
    public function getFormacao()
    {
        return $this->formacao;
    }
    public function setNome($nome)
    {

        $this->nome = $nome;
    }
    public function getNome()
    {
        return $this->nome;
    }
}

$professor = new Professor;

$professor->setIdade(34);
$professor->setAltura(1.78);
$professor->setCor("Pardo");
$professor->setNome("Anderson");
$professor->setFormacao("Sistemas de Informação");


echo " Idade: " . $professor->getIdade() . "<br>";
echo " Altura: " . $professor->getAltura() . "<br>";
echo " Etinia: " . $professor->getCor() . "<br>";
echo " Nome: " . $professor->getNome() . "<br>";
echo " Formação: " . $professor->getFormacao() . "<br>";


/*Ancestralidade,
 checando se o objeto está sendo instanciado por determinada classe*/

if ($professor instanceof Humano) {
    echo "Sim, o professor é uma instancia";
}
