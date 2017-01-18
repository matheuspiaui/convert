<?php

class MoedaDTO{
    
    private $nome;
    private $valorReal;
    private $valorBitcoin;
    
    
    //construtor
    
    function __construct($a){
        $this->nome="Bitcoin";
        $this->valorReal=0;
        $this->valorBitcoin=$a;
    }
    
    
    // Nome
    function getNome()
    {
        return $this->nome;
    }
    
    function setNome($Nome)
    {
        $this->nome = $Nome;
    }
    
    //ValorReal
    function getValorReal()
    {
        return $this->valorReal;
    }
    
    function setValorReal($ValorReal)
    {
        $this->valorReal = $ValorReal;
    }
    
    //ValorBitcoin
    function getValorBitcoin()
    {
        return $this->valorBitcoin;
    }
    
    function setValorBitcoin($ValorBitcoin)
    {
        $this->valorBitcoin = $ValorBitcoin;
    }
}

?>