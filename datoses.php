
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


$id=$_POST['id'];
$nom=$_POST['nombre'];
$ape=$_POST['apellidos'];
$correo=$_POST['correo'];
$tel=$_POST['tel'];

$consulta1= mysqli_query($conexion, "SELECT * from estudiante where id_estudiante=$id");
$idn="";
//sacamos los datos y guardamos en el arreglo de idnuevo
while($resul = mysqli_fetch_array($consulta1)){
    $idn = $resul["id_estudiante"];
}
if($idn==NULL){
    $consulta2= mysqli_query($conexion, "INSERT INTO estudiante (id_estudiante, nombres_estudiante, apellidos_estudiante, correo_estudiante, telefono_estudiante) VALUES ('$id', '$nom', '$ape', '$correo', '$tel')");
    ?>
    <div class="alert alert-success" role="alert">
        <h1  class="alert-link">Estudiante guardado con exito</h1>
    </div>
    <?php
}
else{
    ?>
    <div class="alert alert-danger" role="alert">
        <h1 class="alert-link">Estudiante ya esta registrado!</h1>.
    </div>  
    <?php
}

?>

</body>

</html> 