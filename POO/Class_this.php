<?php
// O THIS FAZ REFERENCIA AO PROPRIO OBJETO
class Animal
{
    public $nome;

    function escolhenome($nome)
    {
        $this->nome = $nome; //altera o nome por parametro de função    
    }
    function latir()
    {
        return "au au";
    }
    function latirforte()
    {
        /* Deixando a letra maiuscula fazendo referencia ao retorno da funçao
        latir */
        return strtoupper($this->latir());
    }
}

$animal1 = new Animal;
$animal1->escolhenome("Same");

echo "O nome do animal é $animal1->nome e faz " . $animal1->latirforte();
