<!DOCTYPE html>
<html>

<head>
    <title>Inicio de Sesion</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
</head>

<header>
<nav class="navbar navbar-expand-lg navbar-dark default-color-dark fixed-top" style="background-color:#5F968E;">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="fotos.html">Fotos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contactos.php">Contactos</a>
            </li>
        </ul>
         <ul class="navbar-nav ml-auto nav-flex-icons">
            <li class="nav-item">
                 <a class="nav-link" href="ubicacion.php">UBICACION COLEGIO </a>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link waves-effect waves-light">8 <i class="fa fa-eye"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link waves-effect waves-light">1 <i class="fa fa-bullhorn"></i></a>
            </li> -->
            <!-- <li class="nav-item avatar dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="http://www.torneodj.com/files/avatar/2_120.jpg" class="img-fluid rounded-circle z-depth-0" width="30"></a>
                <div class="dropdown-menu dropdown-menu-right dropdown-purple" aria-labelledby="navbarDropdownMenuLink-5">
                    <a class="dropdown-item whov" href="#"><i class="fa fa-plus"></i> Agregar post</a>
                    <a class="dropdown-item whov" href="#"><i class="fa fa-edit"></i> Editar cuenta</a>
                </div>
            </li> -->
        </ul>
    </div>
</nav>
</header>

<body style="background-color:#BFDCCF;">
    <div class="jumbotron" style="background-color:#D5C9B1;">
        <h3>Inicio de Sesion.</h3>
    </div>
        
    <div class="container">
        <form action="valise1.php" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Correo electronico</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name= "correo" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Contraseña</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="contra" required>
            </div>
            <button type="submit" class="btn btn-primary">Ingresar</button>
        </form>
    </div>
    

</body>

</html>