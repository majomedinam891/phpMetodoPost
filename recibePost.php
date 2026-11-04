<?php

$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$edad=$_POST['edad'];
$curso=$_POST['curso'];
$modalidad=$_POST['modalidad'];

if($nombre == "") {
    echo "Falto el campo nombre";
} elseif ($correo == "") {
    echo "Falto el campo correo";
} elseif ($edad == "") {
    echo "Falto el campo edad";
} else if ($curso == "") {
    echo "Falto el campo curso";
} elseif ($modalidad == "") {
    echo "Falto el campo modalidad";
} else {
    echo "Incripcion Recibida";
}
?>