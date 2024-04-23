
<?php include("templates/header.php"); ?>


                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         
        <div class="header-content container">

            <div class="header-txt">
                <h1><span>Bienvenido al sistema</span> 
                    <?php echo $_SESSION['usuario'];?></h1>
                    
                <p>
                    Tema de campeón: Milo
                    Con un nuevo campeon viene nuevo tema.
                    <br>¿Como que no has escuchado el tema de milo? Escuchalo ahora
                </p>
                <a href="https://www.youtube.com/watch?v=3s6whZ3Q0U0" target="_blank" class="btn-1">Informacion</a>
            </div>
            <div class="header-img">
                <img src="images/logo.png" alt="">

            </div>

        </div>
    </header>
    <section class="roles container">
        <h2>Roles</h2>
        <p>
            En League of Legends contamos con 5 roles principales los cuales se conocen como Top, 
            Jungla, Mid, ADC y Support. Adicionalmente a eso tenemos diferentes arquetipos de personajes 
            como Luchadores, Tanques, Asesinos, Magos, etc.
        </p>

        <div class="roles-content">
            <div class="roles-1">
                <img src="images/b1.png" alt="">
                <h3>Superior</h3>
            </div>
            <div class="roles-1">
                <img src="images/b2.png" alt="">
                <h3>Medio</h3>
            </div>
            <div class="roles-1">
                <img src="images/b3.png" alt="">
                <h3>Lanzador</h3>
            </div>
            <div class="roles-1">
                <img src="images/b4.png" alt="">
                <h3>soporte</h3>
            </div>

        </div>

    </section>

    <section class="info">

        <img class="bg-2" src="images/bg-2.png" alt="">
        <div class="info-content container">

            <div class="info-img">
                <img src="images/jugadores.png" alt="">
            </div>

            <div class="info-txt">
                <h2>Jugadores profesionales de esports de League of Legends</h2>
                    <p>
                        Algo que ha quedado de cierta manera expuesto por Faker, quien es catalogado como el mejor 
                        jugador de la historia de League of Legends dentro de la escena competitiva, siendo tres veces 
                        campeón de Worlds, la mayor competencia a nivel mundial del videojuego.
                    </p>
                    <a href="https://esports.as.com/league-of-legends/jugadores/" target="_blank" class="btn-1">Informacion</a>
                
            </div>

        </div>

    </section>



    <main class="products container">
    <h2>Productos en nuestra tienda</h2>
    <div class="box-container" id="lista-1">
        <div class="box">
            <img src="images/pla1.png" alt="">
            <div class="product-txt">
                <?php
                $nombreProducto = "Playera";
                $descripcionProducto = "SKT";
                $precioProducto = 210;
                ?>
                <h3><?php echo $nombreProducto; ?></h3>
                <p><?php echo $descripcionProducto; ?></p>
                <p class="precio">$<?php echo $precioProducto; ?></p>
                <a href="#" class="agregar-carrito btn-3" data-id="1" onclick="guardarProducto('<?php echo $nombreProducto; ?>', '<?php echo $descripcionProducto; ?>', <?php echo $precioProducto; ?>)">Agregar al carrito</a>
            </div>
        </div>

        <div class="box">
            <img src="images/pla2.png" alt="">
            <div class="product-txt">
                <?php
                $nombreProducto = "Playera ligera";
                $descripcionProducto = "Calidad premium";
                $precioProducto = 290;
                ?>
                <h3><?php echo $nombreProducto; ?></h3>
                <p><?php echo $descripcionProducto; ?></p>
                <p class="precio">$<?php echo $precioProducto; ?></p>
                <a href="#" class="agregar-carrito btn-3" data-id="2" onclick="guardarProducto('<?php echo $nombreProducto; ?>', '<?php echo $descripcionProducto; ?>', <?php echo $precioProducto; ?>)">Agregar al carrito</a>
            </div>
        </div>
        
        <div class="box">
            <img src="images/pla3.png" alt="">
            <div class="product-txt">
                <?php
                $nombreProducto = "Sudadera";
                $descripcionProducto = "E-sports";
                $precioProducto = 270;
                ?>
                <h3><?php echo $nombreProducto; ?></h3>
                <p><?php echo $descripcionProducto; ?></p>
                <p class="precio">$<?php echo $precioProducto; ?></p>
                <a href="#" class="agregar-carrito btn-3" data-id="3" onclick="guardarProducto('<?php echo $nombreProducto; ?>', '<?php echo $descripcionProducto; ?>', <?php echo $precioProducto; ?>)">Agregar al carrito</a>
            </div>
        </div>

        <div class="box">
            <img src="images/pla4.png" alt="">
            <div class="product-txt">
                <?php
                $nombreProducto = "Playera Viego";
                $descripcionProducto = "Algodon";
                $precioProducto = 250;
                ?>
                <h3><?php echo $nombreProducto; ?></h3>
                <p><?php echo $descripcionProducto; ?></p>
                <p class="precio">$<?php echo $precioProducto; ?></p>
                <a href="#" class="agregar-carrito btn-3" data-id="4" onclick="guardarProducto('<?php echo $nombreProducto; ?>', '<?php echo $descripcionProducto; ?>', <?php echo $precioProducto; ?>)">Agregar al carrito</a>
            </div>
        </div>

        <div class="box">
            <img src="images/pla5.png" alt="">
            <div class="product-txt">
                <?php
                $nombreProducto = "Sylas";
                $descripcionProducto = "Figura de coleccion";
                $precioProducto = 320;
                ?>
                <h3><?php echo $nombreProducto; ?></h3>
                <p><?php echo $descripcionProducto; ?></p>
                <p class="precio">$<?php echo $precioProducto; ?></p>
                <a href="#" class="agregar-carrito btn-3" data-id="5" onclick="guardarProducto('<?php echo $nombreProducto; ?>', '<?php echo $descripcionProducto; ?>', <?php echo $precioProducto; ?>)">Agregar al carrito</a>
            </div>
        </div>

        <div class="box">
            <img src="images/pla6.png" alt="">
            <div class="product-txt">
                <?php
                $nombreProducto = "Teemo y Ziggs";
                $descripcionProducto = "Figura de coleccion";
                $precioProducto = 350;
                ?>
                <h3><?php echo $nombreProducto; ?></h3>
                <p><?php echo $descripcionProducto; ?></p>
                <p class="precio">$<?php echo $precioProducto; ?></p>
                <a href="#" class="agregar-carrito btn-3" data-id="6" onclick="guardarProducto('<?php echo $nombreProducto; ?>', '<?php echo $descripcionProducto; ?>', <?php echo $precioProducto; ?>)">Agregar al carrito</a>
            </div>
        </div>

        <div class="box">
            <img src="images/pla7.png" alt="">
            <div class="product-txt">
                <?php
                $nombreProducto = "Blitz y Crank";
                $descripcionProducto = "Figura de coleccion";
                $precioProducto = 850;
                ?>
                <h3><?php echo $nombreProducto; ?></h3>
                <p><?php echo $descripcionProducto; ?></p>
                <p class="precio">$<?php echo $precioProducto; ?></p>
                <a href="#" class="agregar-carrito btn-3" data-id="7" onclick="guardarProducto('<?php echo $nombreProducto; ?>', '<?php echo $descripcionProducto; ?>', <?php echo $precioProducto; ?>)">Agregar al carrito</a>
            </div>
        </div>


        <div class="box">
            <img src="images/pla8.png" alt="">
            <div class="product-txt">
                <?php
                $nombreProducto = "Proyecto ashe";
                $descripcionProducto = "Figura de coleccion";
                $precioProducto = 650;
                ?>
                <h3><?php echo $nombreProducto; ?></h3>
                <p><?php echo $descripcionProducto; ?></p>
                <p class="precio">$<?php echo $precioProducto; ?></p>
                <a href="#" class="agregar-carrito btn-3" data-id="8" onclick="guardarProducto('<?php echo $nombreProducto; ?>', '<?php echo $descripcionProducto; ?>', <?php echo $precioProducto; ?>)">Agregar al carrito</a>
            </div>
        </div>

    </div>
    <div class="btn-2" id="load-more">Cargar Más</div>
</main>

    
    <section class="app container">
        <div class="app-txt">
            <h2>Decarga nuestra app Wild Rift descubre ofertas </h2>
            <p>
                League of Legends: Wild Rift es un videojuego multijugador de arena de batalla on-line desarrollado 
                y publicado por Riot Games para sistemas operativos Android, iOS, y próximamente disponible en consolas. 
                El juego es una versión modificada del juego de PC, League of Legends.
            </p>
            <div class="descarga">
                <img src="images/store1.png" alt="">
                <img src="images/store1.png" alt="">
            </div>

        </div>

        <div class="app-img">
            <img src="images/app.png" alt="">

        </div>

    </section>
    <?php include("templates/footer.php"); ?>
 
