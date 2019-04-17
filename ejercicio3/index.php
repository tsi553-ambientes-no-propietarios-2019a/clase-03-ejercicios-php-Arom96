<?php
/**
 * Crear un arreglo asociativo que almacene las claves de acceso de 5 usuarios de un sistema. Acceder a cada componente por su nombre.
 *Crear un formulario que permita ingresar el nombre de usuario y la contraseña. Al enviar el formulario se debe validar los datos contra 
 *el arreglo para imprimir un mensaje que muestre un mensaje de error o que permita direccionar a otra página si los datos son correctos.
 */

$arrusuario=[["username"=>"OzzyCross"]] 

?>


<!DOCTYPE>
<html>
<head>
<link rel='stylesheet' type='text/css' media='screen' href='css/bootstrap.min.css'>
<script src='js/bootstrap.min.js'></script>
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-sm">
      
    </div>
    <div class="col-sm">
    <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Ingrese Nombre De Usuario</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Ingrese Una Contraseña</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>
    </div>
    <div class="col-sm">
      
    </div>
  </div>
</div>
</body>
</html>