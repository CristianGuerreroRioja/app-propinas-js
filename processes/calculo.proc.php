<?php

if(is_null($cuenta)) {
    header("Location:../index.php");
}

if(isset($_POST['submit'])){
    //muestro valores de variables
    $cuenta = $_POST['cuenta'];
    $servicio = $_POST['servicio'];
    $personas = $_POST['personas'];
    echo $cuenta; echo "<br>";
    echo $servicio; echo "<br>";
    echo $personas; echo "<br>";
    
} else {
    header("Location:../index.php");
}

if($cuenta != 0 and $personas != 0) {

if($servicio == "Normal"){
    $total = ($cuenta * 0.10);
} elseif($servicio == "Bueno"){
    $total = ($cuenta * 0.20);
} elseif($servicio == "Mala"){
    $total = ($cuenta * 0.05);
} elseif($servicio == "Excelente"){
    $total = ($cuenta * 0.30);
}

$totalpropi = $total / $personas;

}



if(is_nan($totalpropi)) {
    header("Location:../index.php");
} else {
    header("Location:../index.php?totalpropi=".$totalpropi);
}


echo "<br>";
echo $total;
echo "<br>";
echo $totalpropi;


