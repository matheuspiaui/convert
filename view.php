<?php
include("include.php");

if(isset($_POST["bit"]))
{
    $bitcoin = new MoedaDTO($_POST['bit']);//Metodo construtor com metodo é uma moeda btcoin
    
    $obj = new MoedaBusiness;
    
    //$bitcoin->setValorReal(3);
    
    $obj->BitParaReal($bitcoin);
    /*
    $_POST['bitcoin'] = $bitcoin->getValorBitcoin();
    $_POST['real'] = $bitconis->getValorReal();*/
    
    echo "<script>retornaValReal(".$bitcoin->getValorReal().");</script>";
    echo "<script>retornaValBitcoin(".$bitcoin->getValorBitcoin().");</script>";
}

if(isset($_POST["re"]))
{
    $real = new MoedaDTO;//Metodo construtor com metodo é uma moeda btcoin
    
    $real->setValorReal($_POST['re']);
    
    
    $obj = new MoedaBusiness;
    
    //$bitcoin->setValorReal(3);
    
    $obj->RealParaBit($real);
    /*
    $_POST['bitcoin'] = $bitcoin->getValorBitcoin();
    $_POST['real'] = $bitconis->getValorReal();*/
    
    echo "<script>retornaValReal(".$real->getValorReal().");</script>";
    echo "<script>retornaValBitcoin(".$real->getValorBitcoin().");</script>";
}
?>