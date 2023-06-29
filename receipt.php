<?php

$n = $_POST["n"];
$v = $_POST["v"];
$c = $_POST["c"];
$ca = $_POST["ca"];

if(empty($n)){
    echo "Please enter a Name";
}elseif($v == 00){
    echo "Please select an Invoice";
}elseif(empty($c)){
    echo "Please enter a check number";
}elseif(empty($ca)){
    echo "Please enter a cheque value";
}elseif($ca<100){
    echo "Please enter a greater value than 100";
}else{

    $balance = $v - $ca;

    echo "A Payment of Rs.";
    echo $ca;
    echo " has been done by ";
    echo $n;
    echo " from the cheque number ";
    echo $c;
    echo " to an Invoice value of Rs.";
    echo $v;
    echo " and the Remaining balance is Rs.";
    echo $balance;
    echo". Thank you for your Payment";
    
}

?>