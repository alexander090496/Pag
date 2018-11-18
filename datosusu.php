
 <!DOCTYPE html>
<html>
<head>
<title>Datos Registrados</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
</head>

<body>


<?php
include 'Conexion.php';

$ides=$_POST['ides'];

if ($ides=="CARNETS ESTUDIANTES") {
   ?>
   <div class="alert alert-danger" role="alert">
        <h1 class="alert-link">Seleccione carnet de usuario!</h1>.
    </div>
   <?php
}else{
    $correo=$_POST['correo'];
    $contrause=$_POST['contrause'];
    $tipo=$_POST['tipo'];
    $idusu=$_POST['idusu'];


    $consulta1= mysqli_query($conexion, "SELECT * from estudiante where id_estudiante=$idusu");

    $idun="";
    //sacamos los datos y guardamos en el arreglo de idnuevo
    while($resul = mysqli_fetch_array($consulta1)){
        $idun = $resul["id_estudiante"];
    }
    if($idun==NULL){
        $consre= mysqli_query($conexion, "INSERT INTO usuario (id_usuario, login_usuario, password_usuario, tipo_usuario, id_estudiante) VALUES ('$idusu', '$correo', '$contrause', '$tipo', '$ides')");
        ?>
        <div class="alert alert-success" role="alert">
            <h1  class="alert-link">Estudiante guardado con exito</h1>
        </div>
        <?php
    }else{
        ?>
        <div class="alert alert-danger" role="alert">
            <h1 class="alert-link">Estudiante ya esta registrado!</h1>.
        </div>  
        <?php
    }


$conexion=null;

}

?>

</body>

</html> 