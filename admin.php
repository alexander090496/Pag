<?php
//SELECT * FROM grado NATURAL JOIN grado_periodo_academico NATURAL JOIN periodo_academico order by id_grado_per_acad
//SELECT nombre_grado, periodo_academico FROM grado NATURAL JOIN grado_periodo_academico NATURAL JOIN periodo_academico order by id_grado_per_acad
// Select nombre_grado from grado a, grado_periodo_academico b, periodo_academico c where a.id_grado=b.grado_id_grado

include 'Conexion.php';
    $consulta1= mysqli_query($conexion, "SELECT * from grado");
    $consulta2= mysqli_query($conexion, "SELECT * from periodo_academico");
    $consulta3= mysqli_query($conexion, "SELECT * from estudiante");
    $per=[];
    $nomgr=[];
    //sacamos los datos y guardamos en el arreglo de idnuevo
    while($resul = mysqli_fetch_array($consulta1)){
        $nomgr[] = $resul["nombre_grado"];
    }
    while($resul1 = mysqli_fetch_array($consulta2)){
        $per[] = $resul1["periodo_academico"];
    }
    

?>

<!DOCTYPE html>
<html>
<head>
<title>Administrador</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script type= "text/javascript">
        function mostrar1(){
            document.getElementById('mate').style.display = 'block';
            document.getElementById('estu').style.display = 'none';
            document.getElementById('ver').style.display = 'none';

        }
        function mostrar2(){
            document.getElementById('estu').style.display = 'block';
            document.getElementById('mate').style.display = 'none';
            document.getElementById('ver').style.display = 'none';
        }
        function mostrar3(){
            document.getElementById('ver').style.display = 'block';
            document.getElementById('mate').style.display = 'none';
            document.getElementById('estu').style.display = 'none';
        }
        function mostrar4(){
            document.getElementById('tablaestu').style.display = 'block';
        }
        

    </script>
</head>

<body>
    <div class="container" id="">
        <nav class="navbar navbar-dark bg-dark">
        <nav class="navbar navbar-dark bg-dark">
    </div>

    <div class="container">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Inicio</a>
            </li>
            <li class="nav-item">
                <button type="button" class="btn btn-info" onclick="mostrar1()">CONTENIDO ACADEMICOS</button>
            </li>
            <li class="nav-item">
                <button type="button" class="btn btn-info" onclick="mostrar2()">CARGAR ESTUDIANTES</button>

            </li>
            <li class="nav-item">
                <button type="button" class="btn btn-info"onclick="location.href='formreuser.php'">REGISTRAR USUARIOS </button>
            </li>
            
            
            
        </ul>
    </div>

    <div id="mate" style='display:none;' class="container">
        <form>
            <label for="exampleFormControlInput1">Grado</label>
            <select class="form-control" name="nombg">
                <option disable>Grados</option>
                    <?php
                        foreach ($nomgr as $key) {
                            ?>
                            <option ><?php echo $key;?></option>
                            <?php
                        }
                    ?>
            </select>            
            <label for="exampleFormControlInput1">Periodo academico</label>
            <select class="form-control" name="nombg">
                <option disable>Periodo academico</option>
                    <?php
                        foreach ($per as $key) {
                            ?>
                            <option ><?php echo $key;?></option>
                            <?php
                        }
                            ?>
            </select>

            <form>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Subir CVS materias</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                </div>
            </form>
        </form>
        
    </div>

    <div id="estu" style='display:none;'>
        <form>
            <div  class="container">
                <?php
                echo "<table border='1'>";  
                echo "<tr>";
                echo "<th>Carnet</th>"; 
                echo "<th>Nombres</th>";  
                echo "<th>Apellidos</th>";  
                echo "<th>Correo Personal</th>";
                echo "<th>Telefono estudiante</th>";
                echo "<th>Acciones</th>";
                echo "</tr>"; 
                while($resul2 = mysqli_fetch_array($consulta3)){
                    ?>
                    <tr>
                    <td><?php echo $resul2["id_estudiante"];?></td>  
                    <td><?php echo $resul2["nombres_estudiante"];?></td>
                    <td><?php echo $resul2["apellidos_estudiante"];?></td>
                    <td><?php echo $resul2["correo_estudiante"];?></td>
                    <td><?php echo $resul2["telefono_estudiante"];?></td>
                    
                    <td><button type="button" class="btn btn-dark">Editar</button>
                        <button type="button" class="btn btn-dark">Eliminar</button>
                    </td>
                    
                    </tr>
                    <?php
                }
                ?>
            </div>
        </form>

        <form>
            <div class="form-group">
                <label for="exampleFormControlFile1">Subir CVS ESTUDIANTES</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
            </div>
        </form>
        
        
    </div>

    <div id="ver" style='display:none;'>
        <form>
            <h1>c</h1>
        </form>
        
    </div>




</body>

</html> 