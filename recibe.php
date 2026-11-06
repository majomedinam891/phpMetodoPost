<h1> <?= intval( $_GET['edad']) + intval($_GET['datoget'])?></h1>

<h3> <?php echo $_GET['datoget'] ?> </h3>
<h3> <?= $_GET['edad']; ?> </h3>

<!-- metodo post    -->
<h3>Formulario de practica</h3>
<form action="recibePost.php" method="post">
    <input type="text" name="caja1">
    <input type="number" name="caja2">
    <button type="submit">Enviar</button>
</form>

<h3>Formulario Validación</h3>
<form action="recibePost.php" method="post">
    <input type="text" name="nombre">
    <input type="text" name="correo">
    <input type="number" name="edad">
    <input type="text" name="curso">
    <input type="text" name="modalidad">
    <button type="submit">Enviar</button>
</form>
<?php
$persona = [
    "nombre" => "Laura",
    "edad"   => 31,
    "ciudad" => "Bogotá",
];

echo $persona["nombre"], " vive en ", $persona["ciudad"], "\n";
$persona["profesion"] = "Ingeniera";

foreach ($persona as $clave => $valor) {
    echo "$clave: $valor\n";
}
echo isset($persona["telefono"]) ? "tiene" : "sin teléfono", "\n";
