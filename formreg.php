<!DOCTYPE html>
<html>

<head>
    <title>Registro</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <form action="datoses.php" method="POST">
            <div class="col-10">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Carnet Estudiante</label>
                    <input type="text" class="form-control" name="id" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Nombre</label>
                    <input type="text" class="form-control" name="nombre" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Apellidos</label>
                    <input type="text" class="form-control" name="apellidos" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Correo Electronico</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="correo">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Telefono</label>
                    <!-- <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com"> -->
                    <input type="text" class="form-control" name="tel">
                </div>       
                
                
            </div>
            <div aling="center">
                <button type="submit" class="btn btn-dark">Registrar</button>
            </div>

            
        </form>

    </div>
    
</body>

</html>