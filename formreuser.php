<?php
    include 'Conexion.php';
    $consulta1= mysqli_query($conexion, "SELECT * from estudiante");
    $idn=[];
    //sacamos los datos y guardamos en el arreglo de idnuevo
    while($resul = mysqli_fetch_array($consulta1)){
        $idn[] = $resul["id_estudiante"];
    }
    
?> 

<!DOCTYPE html>
<html>
<head>
    <title>Registro</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
</head>

<body>
    <div class="container" id="">
        <nav class="navbar navbar-dark bg-dark">
        <nav class="navbar navbar-dark bg-dark">
    </div>
    <div class="container">
        <form action="datosusu.php" method="POST">
            <div class="col-10">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Carnet Usuario</label>
                    <select class="form-control" name="ides">
                        <option disable>CARNETS ESTUDIANTES</option>
                            <?php
                                foreach ($idn as $key) {
                                    ?>
                                    <option ><?php echo $key;?></option>
                                    <?php
                                }
                            ?> 
                    </select>
                    
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Correo Institucional</label>
                    <input type="text" class="form-control" name="correo" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Contraseña Usuario</label>
                    <input type="text" class="form-control" name="contrause" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Tipo Usuario</label>
                    <input type="text" class="form-control" name="tipo" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Codigo Usuario</label>
                    <!-- <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com"> -->
                    <input type="text" class="form-control" name="idusu" required>
                </div>       
                
                
            </div>
            <div aling="center">
                <button type="submit" class="btn btn-dark">Registrar Usuario</button>
            </div>

            
        </form>

    </div>
    
</body>

</html>