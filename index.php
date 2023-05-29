<?php
include("connection.php");
$con = connection();

$sql = "SELECT * FROM datos_clientes";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="Css/style.css" rel="stylesheet">
    <link href="Estilos_Css/style.css" rel="stylesheet">
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
    <title>FORMULARIO </title>
</head>

<body>
<section id="contact" class="section-bg wow fadeInUp">
<form action="insert_user.php" method="POST">
      <div class="container">

      <div class="section-header">
          <h3>FORMULARIO DEL PACIENTE</h3>
          <p>Tan cerca que seas tú el que les diga lo que necesitan mucho antes de que ellos se den cuenta de que lo necesitan</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Direcciòn</h3>
              <address>Calle 86 sur # 77 L 49, Bogota Colombia</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Nùmero de telèfono</h3>
              <p><a href="tel:+155895548855">+57 315 427 4425</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@example.com">andreaortiz9410@gmail.com</a></p>
            </div>
          </div>

        </div>

        <div class="form">
          <div id="sendmessage">Tu mensaje ha sido enviado. ¡Gracias! Furopia Shop</div>
          <div id="errormessage"></div>


            <div class="form-row">

              <div class="form-group col-md-6">
                <input for="text" name="Nombre_Completo:" class="form-control" id="Nombre_Completo:" placeholder="Nombre_Completo:" data-rule="minlen:4" data-msg="Ingrese El  nombre completo de su mascota" />
                <div class="validation"></div>
              </div>

              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="Email:" id="Email:" placeholder="Email:" data-rule="Email:" data-msg="Por favor introduzca una dirección de correo electrónico válida" />
                <div class="validation"></div>
              </div>

            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="Fecha_de_nacimiento:" id="subject" placeholder="Fecha_de_nacimiento:" data-rule="minlen:4" data-msg="Ingrese la fecha de nacimiento de su mascota" />
              <div class="validation"></div>
            </div>

        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="Género:" id="" placeholder="Género:" data-rule="minlen:4" data-msg="Ingrese el genero de la mascota" />
          <div class="validation"></div>
        </div>


        <div class="form-group">
            <input type="text" class="form-control" name="Dirección:" id="Dirección:" placeholder="Dirección:" data-rule="minlen:4" data-msg="Por favor introduzca una dirección de correo electrónico válida" />
            <div class="validation"></div>
            </div>

        <div class="form-group">
            <input type="text" class="form-control" name="Número_de_teléfono:" id="Número_de_teléfono:" placeholder="Número_de_teléfono:" data-rule="minlen:4" data-msg="Por favor introduzca el numero de telefono" />
            <div class="validation"></div>
            </div>

            

        <div class="form-group">
            <input type="text" class="form-control" name="¿Motivo_de_la_consulta?" id="¿Motivo_de_la_consulta?" placeholder="¿Motivo_de_la_consulta?" data-rule="minlen:4" data-msg="Ingrese el motivo de la consulta" />
            <div class="validation"></div>
            </div>            
            

        <div class="form-group">
            <input type="text" class="form-control" name="¿Esta_en_tratamiento_medico?" id="¿Esta_en_tratamiento_medico?" placeholder="¿Esta_en_tratamiento_medico?" data-rule="minlen:4" data-msg="Ingrese el motivo de la consulta" />
            <div class="validation"></div>
            </div>  


            <div class="form-group">
              <textarea class="form-control" name="Mensaje:" id="Mensaje:" rows="5" data-rule="required" data-msg="Por favor escribe algo para nosotros" placeholder="Mensaje:"></textarea>
              <div class="validation"></div>
            </div>

            <div class="text-center"><button type="submit">Enviar Mensaje</button></div>
          





        </div>

      </div>
    </section>

 
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="js/main.js"></script>
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</form>


    <div class="users-table">
        <h2>Usuarios registrados</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre
                        Completo</th>
                    <th>Fecha de
                        nacimiento</th>
                    <th>Género</th>
                    <th>Dirección</th>
                    <th>Teléfono</th>
                    <th>Email</th>
                    <th>Motivo_de
                        la consulta</th>
                    <th>Mensaje</th>
                    <th>Tratamiento</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <th><?= $row['id'] ?></th>
                        <th><?= $row['Nombre_Completo:'] ?></th>
                        <th><?= $row['Fecha_de_nacimiento:'] ?></th>
                        <th><?= $row['Género:'] ?></th>
                        <th><?= $row['Dirección:'] ?></th>
                        <th><?= $row['Número_de_teléfono:'] ?></th>
                        <th><?= $row['Email:'] ?></th>
                        <th><?= $row['¿Motivo_de_la_consulta?'] ?></th>
                        <th><?= $row['¿Esta_en_tratamiento_medico?'] ?></th>
                        <th><?= $row['Mensaje:'] ?></th>
                        <th><a href="update.php?id=<?= $row['id'] ?>" class="users-table--edit">Editar</a></th>
                        <th><a href="delete_user.php?id=<?= $row['id'] ?>" class="users-table--delete" >Eliminar</a></th>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

</body>

</html>