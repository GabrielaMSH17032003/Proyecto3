
<?php

session_start();
$url_base="http://localhost/Proyecto3/";
if(!isset($_SESSION['usuario'])){
    header("Location:".$url_base."login.php");

}
?>

<!DOCTYPE php>
<php lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>League of legends</title>
    <link rel="shortcut icon" href="images/favicon1.ico" type="image/x-icon">
    <link rel="stylesheet" href="styles/style_tienda.css">
    <link rel="stylesheet" href="styles/footer.css">


</head>

<body>
    <header class="header">
        <img class="bg" src="images/bg.png" alt="">
        <div class="menu container">
            <div id="" class="logo"></div>
       
            <input type="checkbox" id="menu">
            <label for="menu">
                <img src="images/Menu.png" class="menu-icono" alt="">
            </label>
            <nav class="navbar">
                <ul>
                    <li><a href="tienda.php#">Inicio</a></li>
                    <li><a href="campeones.php">Campeones</a></li>
                    <li><a href="juego.php">Juego</a></li>
                    <li><a href="estadisticas.php">Estadisticas</a></li>
                    <li><a href="notas.php">Notas de versión</a></li>
                    <li><a href="http://localhost/shoppingcart/admin.php">Tienda</a></li>
                    <li><a href="index.php">Login</a></li>
                    <li><a href="<?php echo $url_base;?>cerrar.php">Cerrar Sesion</a></li>
                </ul>
            </nav>
            <div>
                <ul>
                    <li class="submenu">
                        <img src="images/car.svg" id="img-carrito" alt="carrito">
                        <div id="carrito">
                            <table id="lista-carrito">
                                <thead>
                                    <tr>
                                        <th>Imagen</th>
                                        <th>Nombre</th>
                                        <th>Precio</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                            <a href="#" id="vaciar-carrito" class="btn-3">Vaciar carrito</a>
                            
                            <a href="#" type="submit" class="btn btn-success">Realizar compra
                                

                            </a>
                            






                        </div>

                    </li>
                </ul>
            </div>
        </div>

        <script src="scripts/script.js"></script>

