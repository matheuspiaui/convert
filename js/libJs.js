function retornaValReal(valor)
{
    document.getElementById("re").value = valor;
}

function retornaValBitcoin(valor)
{
    document.getElementById("bit").value = valor;
}

var strNew = document.moeda.real.value; 
var strOld = document.moeda.real.value;
function ControlTimer(){ 
    strNew = document.moeda.real.value;
    if(strNew!=strOld){
	   fAcao();
    }
    strOld = strNew;
    setTimeout("ControlTimer()",100) 
} 
ControlTimer() 
function fAcao(){ 
    alert("mudou");//coloque seu codigo aki
} 