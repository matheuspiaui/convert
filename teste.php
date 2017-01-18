<?php
include("include.php");


    $bitcoin = new MoedaDTO(1);
    
    $obj = new MoedaBusiness;

    $obj->retornaValor();
    
    //$res = $obj->BitParaReal($bitcoin);
    //print_r($obj->jsonForPHP("https://www.mercadobitcoin.net/api/ticker/"));
    
    //echo "<script>retornaVal(".$res.")</script>";

?>