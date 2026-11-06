<!-- <h1>Hola esto es html en php</h1>

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

<?php
const IVA = 0.19;
define('MONEDA', 'COP');

echo "IVA: " . IVA . " e n " . MONEDA . "\n";
echo PHP_INT_MAX . "\n";  ?>

<?php

$frutas = [
    "manzana" => 30,
    "pera" => 10,
    "fresa" => 20,
    "banano" => 34
];
$frutas["kiwi"] = 15;

foreach ($frutas as $fruta => $cantidad) {
    echo $fruta. ": ".$cantidad;
} ?> -->

<h1>frutas ejercicio</h1>
<?php

$inventario = [
    "manzanas" => 50,
    "peras" => 30,
    "naranjas" => 0,
    "uvas" => 15,
];

// Recorrer el inventario
foreach ($inventario as $producto => $cantidad) {
    echo "$producto: $cantidad unidades <br>";
}

// Agregar mangos
$inventario["mangos"] = 20;

// Aumentar 10 unidades a las peras
$inventario["peras"] += 10;

// Verificar si existen kiwis
if (isset($inventario["kiwis"])) {
    echo "Sí existen kiwis en el inventario";
} else {
    echo "No existen kiwis en el inventario";
}

// Calcular el total de unidades
$total = array_sum($inventario);

echo "<br> Total de unidades: $total";

?>

<h1>estudiantes ejercicio</h1>
<?php

$estudiantes = [
    "Ana" => ["matematicas" => 4.5, "ciencias" => 3.8, "ingles" => 4.2],
    "Luis" => ["matematicas" => 3.0, "ciencias" => 2.8, "ingles" => 3.5],
    "Marta" => ["matematicas" => 5.0, "ciencias" => 4.7, "ingles" => 4.9],
    "Carlos" => ["matematicas" => 2.5, "ciencias" => 3.2, "ingles" => 2.9],
];

// Crear arrays vacíos
$promedios = [];
$resultados = [];

// Calcular promedio de cada estudiante
foreach ($estudiantes as $nombre => $notas) {

    $promedio = array_sum($notas) / count($notas);

    $promedios[$nombre] = $promedio;

    // Clasificar estudiante
    if ($promedio >= 3.0) {
        $resultados[$nombre] = "Aprobado";
    } else {
        $resultados[$nombre] = "Reprobado";
    }
}

// Mostrar promedios
foreach ($promedios as $nombre => $promedio) {
    echo "$nombre: $promedio <br>";
}

// Mejor y peor promedio
$mejor = max($promedios);
$peor = min($promedios);

echo "<br> Mejor promedio: " . array_search($mejor, $promedios);
echo " ($mejor)";

echo "<br> Peor promedio: " . array_search($peor, $promedios);
echo " ($peor)";

// Mostrar resultados
echo "<br><br> Resultados: <br>";

foreach ($resultados as $nombre => $estado) {
    echo "$nombre: $estado <br>";
}

// Promedio de cada materia
$materias = ["matematicas", "ciencias", "ingles"];

echo "<br> Promedio por materia: <br>";

foreach ($materias as $materia) {

    $suma = 0;

    foreach ($estudiantes as $notas) {
        $suma += $notas[$materia];
    }

    $promedioMateria = $suma / count($estudiantes);

    echo "$materia: $promedioMateria <br>";
}

?>

<h1>ejercicio empleados</h1>
<?php

$empleados = [
    ["nombre" => "Sofía", "depto" => "Ventas", "salario" => 2500000],
    ["nombre" => "Pedro", "depto" => "Sistemas", "salario" => 4000000],
    ["nombre" => "Laura", "depto" => "Ventas", "salario" => 2800000],
    ["nombre" => "Andrés", "depto" => "Sistemas", "salario" => 4500000],
    ["nombre" => "Julia", "depto" => "Recursos", "salario" => 3000000],
];

// Crear arrays vacíos
$porDepto = [];
$salarios = [];

// Recorrer empleados
foreach ($empleados as $empleado) {

    $depto = $empleado["depto"];
    $nombre = $empleado["nombre"];
    $salario = $empleado["salario"];

    // Agrupar nombres por departamento
    $porDepto[$depto][] = $nombre;

    // Sumar salarios por departamento
    if (!isset($salarios[$depto])) {
        $salarios[$depto] = 0;
    }

    $salarios[$depto] += $salario;
}

// Mostrar empleados por departamento
foreach ($porDepto as $depto => $nombres) {

    echo "$depto: ";

    foreach ($nombres as $nombre) {
        echo "$nombre ";
    }

    echo "<br>";
}

// Calcular promedio de salarios
echo "<br> Promedio de salarios por departamento: <br>";

foreach ($salarios as $depto => $total) {

    $cantidad = count($porDepto[$depto]);

    $promedio = $total / $cantidad;

    echo "$depto: $promedio <br>";
}

// Encontrar departamento con mayor nómina
$mayor = max($salarios);

$departamentoMayor = array_search($mayor, $salarios);

echo "<br> Departamento con mayor nómina: $departamentoMayor";
echo "<br> Nómina total: $mayor";

?>

