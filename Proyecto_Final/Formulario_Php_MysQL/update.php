<?php 
    include("connection.php");
    $con=connection();

    $id=$_GET['id'];

    $sql="SELECT * FROM datos_clientes WHERE id='$id'";
    $query=mysqli_query($con, $sql);

    $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="Estilos_Css/style.css" rel="stylesheet">
        <title>Editar usuarios</title>
        
    </head>
    <body>
        <div class="users-form">
            <form action="edit_user.php" method="POST">
                <input type="hidden" name="id" value="<?= $row['id']?>">
                <input type="text" name="Email:" placeholder="Email:" value="<?= $row['Email:']?>">
                <input type="text" name="Nombre_Completo:" placeholder="Nombre_Completo:" value="<?= $row['Nombre_Completo:']?>">
                <input type="text" name="Fecha_de_nacimiento:" placeholder="Fecha_de_nacimiento:" value="<?= $row['Fecha_de_nacimiento:']?>">
                <input type="text" name="Género:" placeholder="Género:" value="<?= $row['Género:']?>">
                <input type="text" name="¿Motivo_de_la_consulta?" placeholder="¿Motivo_de_la_consulta?" value="<?= $row['¿Motivo_de_la_consulta?']?>">
                <input type="text" name="Dirección:" placeholder="Dirección:" value="<?= $row['Dirección:']?>">
                <input type="text" name="Número_de_teléfono:" placeholder="Número_de_teléfono:" value="<?= $row['Número_de_teléfono:']?>">
                <input type="text" name="¿Motivo_de_la_consulta?" placeholder="¿Motivo_de_la_consulta?" value="<?= $row['¿Motivo_de_la_consulta?']?>">
                <input type="text" name="¿Esta_en_tratamiento_medico?" placeholder="¿Esta_en_tratamiento_medico?" value="<?= $row['¿Esta_en_tratamiento_medico?']?>">
                <input type="text" name="Mensaje:" placeholder="Mensaje:" value="<?= $row['Mensaje:']?>">




    



                <input type="submit" value="Actualizar">
            </form>
        </div>
    </body>
</html>