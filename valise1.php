<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>Validar</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
</head>

<body>


<?php
include 'Conexion.php';

$correou=$_POST['correo'];
$contrause=$_POST['contra'];
//echo $correou.$contrause;

$consulta1= mysqli_query($conexion, "SELECT * from usuario where login_usuario like '$correou%' and password_usuario like '$contrause%'");

$usua="";
$con="";
$tipousu="";
while($resul = mysqli_fetch_array($consulta1)){
    $usua=$resul["login_usuario"];
    $con=$resul["password_usuario"];
    $tipousu = $resul["tipo_usuario"];
}

if ($usua==$correou and $con==$contrause ) {
    if($tipousu=="estudiante"){
        $_SESSION["$usua"];
        $_SESSION["$con"];
        echo '<script> window.location="estu.php"; </script>';
        
    }
    elseif ($tipousu=="administrador") {
        $_SESSION["$usua"];
        $_SESSION["$con"];
        echo '<script> window.location="admin.php"; </script>';
    }
}
else{
    ?>
    <div class="alert alert-danger" role="alert">
        <h1 class="alert-link">Error de contraseña!</h1>.
    </div>  
    <?php
}





?>

</body>

</html> 

