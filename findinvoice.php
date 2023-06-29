<?php

$s = $_POST["s"];
$value;

if($s == "1"){
    $value = 1200;
    echo $value;
}else if($s == "2"){
    $value = 2870;
    echo $value;
}else if($s == "3"){
    $value = 970;
    echo $value;
}else if($s == "4"){
    $value = 3630;
    echo $value;
}else{
    echo $value;
}

?>