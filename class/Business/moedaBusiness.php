<?php

class MoedaBusiness{
    
    public function BitParaReal(MoedaDTO $bit)
    {
        $valor = $this->retornaValor();// valor do bitcoin em reais
        $valor *= $bit->getValorBitcoin();
        //print $valor;
        $bit->setValorReal($valor);
    }
    
    public function RealParaBit(MoedaDTO $real)
    {
        $valorBit = $this->retornaValor();// valor do bitcoin em reais
        $valorBit /= $real->getValorBitcoin();
        //print $valor;
        $real->setValorBitcoin($valorBit);
    }
    
    
    
    private function retornaValor()
    {
        $valor = $this->jsonForPHP("https://www.mercadobitcoin.net/api/ticker/");
        
        //print_r($valor);
        return ($valor->ticker->last);
    }
    
    //Essa função recebe dados de um arquivo externo JSON
    //e retorna um Array Associativo em PHP
    private function jsonForPHP ($url)
    {
        $json_file = file_get_contents($url);
        
        return (json_decode($json_file));
    }
}



?>