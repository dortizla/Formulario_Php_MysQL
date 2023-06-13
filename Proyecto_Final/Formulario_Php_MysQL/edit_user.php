<?php

include("connection.php");
$con = connection();

$id= $_POST["id"];
$name = $_POST['Nombre_Completo:'];
$lastname = $_POST['Fecha_de_nacimiento:'];
$username = $_POST['Género:'];
$password = $_POST['Dirección:'];
$email = $_POST['Número_de_teléfono:'];
$Correo = $_POST['Email:'];
$Consulta = $_POST['¿Motivo_de_la_consulta?'];
$Tratamiento = $_POST['¿Esta_en_tratamiento_medico?'];
$Mensaje = $_POST['Mensaje:'];

$sql="UPDATE datos_clientes SET name='$name', 
   Nombre_Completo='$name',
   Fecha_de_nacimiento:='$lastname',
   Género:='$username',
   Dirección:='$password',
   Número_de_teléfono:='$email',
   Email:='$Correo',
   ¿Motivo_de_la_consulta?='$Consulta',
   ¿Esta_en_tratamiento_medico?='$Tratamiento',
   Mensaje:='$Mensaje' 
   WHERE id='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}else{

}

?>