<?php

//include_once(index.html);

$n1 = $_GET["n1"];
$n2 = $_GET["n2"];
$op = $_GET["calu"]; 
$operacao = $op;

function soma($n1,$n2)
{
    return $n1+$n2;
}

function sub($n1,$n2){
    return $n1-$n2;
}

function mult($n1,$n2){
    return $n1*$n2;
}
function div($n1,$n2){
    return $n1/$n2;
}

// switch ($op) {
//    case '1':
//        eval('echo soma($n1,$n2);');
//        break;
//
//    case '2': 
//        eval('echo sub($n1,$n2);');
//        break;
//    case '3':
//        eval('echo mult($n1,$n2);');
//        break;
//    case '4':
//        eval('echo div($n1,$n2);');
//        break;
//    }

$op = array(
    "1" => soma($n1,$n2),
    "2" => sub($n1,$n2),
    "3" => mult($n1,$n2),
    "4" => div($n1,$n2)
);


print_r($op[$operacao]);


?>