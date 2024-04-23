<?php 
include("basedd.php");

if(isset($_GET['txtID'] )){ 
    $txtID=(isset($_GET['txtID']))?$_GET['txtID']:"";

    $sentencia=$conexion->prepare("DELETE FROM tusuarios WHERE id=:id");
    $sentencia->bindParam(":id",$txtID);
    $sentencia->execute();
    header("Location:index.php");
    
    }

$sentencia=$conexion->prepare("SELECT * FROM `tusuarios` ");
$sentencia->execute();
$lista_tusuarios=$sentencia->fetchAll(PDO:: FETCH_ASSOC);



?>
<?php include("templates/header.php"); ?>

<head>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style_tienda.css">
    <link rel="stylesheet" href="styles/footer.css">

</head>

  <style>
   
    .card {
        margin-top: 100px;

        font-size: 50px;
        left: 150;
    }
    th {
        color: #1d1d1b; 
    }
    td {
        color: rgba(0, 0, 0, 0.5); 
    }
  </style>


<div class="card">
    <div class="card-header">
    <a name="" id="" class="btn btn-primary" 
    href="crear.php" role="button">
        Agregar usuario
    </a>
    </div>
    <div class="card-body">

<div class="table-responsive-sm">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre del usuario</th>
                <th scope="col">Contraseña</th>
                <th scope="col">Correo</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>

        <?php foreach ($lista_tusuarios as $registro) {?>

            <tr class="">
                <td scope="row"><?php echo $registro['id']; ?></td>
                <td><?php echo $registro['usuario']; ?></td>
                <td>****</td>
                <td><?php echo $registro['correo']; ?></td>
                <td>
                    <a class="btn btn-info" href="editar.php?txtID=<?php echo $registro['id']; ?>" role="button"> Editar </a>
                    |
                    <a class="btn btn-danger" href="index.php?txtID=<?php echo $registro['id']; ?>" role="button"> Eliminar </a>

                </td>
            </tr>
        <?php } ?>


        </tbody>

    </table>

</div>
    </div>
</div>


<script src="scripts/script_tienda.js"></script>


