<?php
session_start();
include("./basedd.php");



if ($_POST) {
    $usuario = (isset($_POST["usuario"]) ? $_POST["usuario"] : "");
    $contraseña = (isset($_POST["contraseña"]) ? $_POST["contraseña"] : "");

    $sentencia = $conexion->prepare("SELECT * FROM tusuarios WHERE usuario = ? AND contraseña = ?");
    $sentencia->execute([$usuario, $contraseña]);
    $resultado = $sentencia->fetch(PDO::FETCH_ASSOC);

    if ($resultado) {
        // Usuario y contraseña correctos
        $_SESSION['usuario'] = $usuario; // Guardar el nombre de usuario en la sesión
        header("Location:tienda.php");
    } else {
        // Usuario o contraseña incorrectos
        $mensaje= "Usuario o contraseña incorrectos. Por favor, inténtalo nuevamente.";
    }
}



?>
<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>League of Legends</title>
    <link rel="shortcut icon" href="images/favicon1.ico" type="image/x-icon">

    <link rel="stylesheet" href="styles/inicioinicio.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Navegador-->
    <header>
        <section class="textos-header">
        <style>
   
    .lol {
        margin-top: 120px;

        font-size: 50px;
        left: 150;
    }

  </style>
            <img class="lol" src="images\logo.png" alt=""> 
      
            <main class="container">
    <div class="row">
        <div class="col-md-4">
        
    </div>
    <div class="col-md-4">
        
    
    <div class="card">
        <div class="card-header">
            Login
        
        </div>
        <div class="card-body">
        
        <?php if(isset($mensaje)){?>
            <div class="alert alert-danger" role="alert">
                <strong><?php echo $mensaje;?></strong> 
            </div>
        <?php }?>
        
        
        <form action="" method="post">
            <div class="mb-3">
              <label for="usuario" class="form-label">Usuario:</label>
              <input type="text"
                class="form-control" name="usuario" id="usuario" placeholder="Escriba su usuario">
          
            </div>

            <div class="mb-3">
              <label for="contraseña" class="form-label">Contraseña:</label>
              <input type="password"
                class="form-control" name="contraseña" id="contraseña" aria-describedby="helpId" placeholder="Escriba su contraseña">

            </div>
            <button type="submit" class="btn btn-primary">Entrar a la aplicacion</button>


        </form>


        </div>
        
    </div>
    </div>
        <div>
            
        </section>
        

    </header>
    
<!doctype html>
<html lang="en">

<head>
  <title>Login</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">


</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  
    




  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>