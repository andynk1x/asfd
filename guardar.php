<?php

$conexion = mysqli_connect("localhost","root","","asignaciones");

$codigo = $_POST['codigo'];
$tarea = $_POST['tarea'];
$docente = $_POST['docente'];
$fecha = $_POST['fecha'];
$observaciones = $_POST['observaciones'];

$sql = "INSERT INTO tareas (codigo,tarea_asignacion,docente,fecha_presentacion,observaciones)
VALUES ('$codigo','$tarea','$docente','$fecha','$observaciones')";

mysqli_query($conexion,$sql);

echo "Datos guardados correctamente";

?>