<?php
if (isset($_POST["submit"])) {
    if (isset($_POST["cuenta"]) && ($_POST["servicio"]) && ($_POST["personas"])) {
        $cuenta=$_POST["cuenta"];
        $porcentaje=$_POST["servicio"];
        $personas=$_POST["personas"];
        if($porcentaje=="excelente"){
            $porcentaje=30;
        }elseif ($porcentaje=="bueno") {
            $porcentaje=20;
        }elseif ($porcentaje=="normal") {
            $porcentaje=10;
        }elseif ($porcentaje=="malo") {
            $porcentaje=5;
        }
        $resultado=(($porcentaje*$cuenta)/100)/$personas;
        header("location:../index.php?res=".$resultado);
    }else{
        header("location:../index.php");
    }
}else{
    header("location:../index.php");
}
/*
if(is_nan($formula)){
    header("location:index.php");
}
*/