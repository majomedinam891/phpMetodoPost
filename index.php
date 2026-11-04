<h1>Hola esto es html en php</h1>

<?php
echo "<h1>Hola desde PHP</h1>";

$miVariable = 130;

echo "Mi variable:". $miVariable;

if ($miVariable >= 100) {
    echo "mi variable es mayor a 100";
} else {
    echo "mi variable es menor que 100";
}

// $palabra = "SENA";

// for ($i=0; $i < strlen ($palabra) ; $i++) {
//     echo "<h1>".substr 
//         ($palabra,$i,1)."</h1>";
// }

$palabra1 = "reconocer";
$palabraAlreves = "";

$invertida = strlen($palabra1) - 1;

for ($i = $invertida; $i >= 0; $i--) {
    $palabraAlreves = $palabraAlreves.substr($palabra1,$i,1);
}

if($palabra1 == $palabraAlreves){
    echo $palabra1." Es palindromo";
} else {
    echo $palabra1." No es palindromo";
}
?>

<a href="recibe.php?datoget=hola&edad=18">Ir a otra página</a>
