<?php
include("connection.php");
$con = connection();

$id = null;
$name = $_POST['Nombre_Completo:'];
$lastname = $_POST['Fecha_de_nacimiento:'];
$username = $_POST['Género:'];
$password = $_POST['Dirección:'];
$email = $_POST['Número_de_teléfono:'];
$Correo = $_POST['Email:'];
$Consulta = $_POST['¿Motivo_de_la_consulta?'];
$Tratamiento = $_POST['¿Esta_en_tratamiento_medico?'];
$Mensaje = $_POST['Mensaje:'];

$sql = "INSERT INTO datos_clientes VALUES('$id','$name','$lastname','$username','$password','$email','$Correo','$Consulta','$Mensaje','$Tratamiento')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}else{

}

?>