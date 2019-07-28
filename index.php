<?php include_once "php/templates/header.php" ?>

  <section class="container seccion-pa">
    <h2 class="centrar-texto section-h2">LA MEJOR CONFERENCIA DE DISEÑO WEB EN ESPAÑOL</h2>
    <p class="centrar-texto">Pellentesque viverra varius suscipit. Morbi diam tortor, lobortis vitae urna finibus,
      tincidunt laoreet ligula. Praesent est nunc, imperdiet ut ligula ut, eleifend commodo libero. Suspendisse
      ultricies fermentum enim, euismod iaculis sem. Morbi sollicitudin pellentesque odio, mollis elementum elit commodo
      id. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a justo quis ante ornare consequat ut non orci.
      Nulla consequat ultrices turpis id consectetur. </p>
  </section>
  <!--descricion del evento-->

  <!--para agregar un video se debe agregar la etiqueta video, luego el sourse
  para que se visualice en dispos apple, es recomendable poner el mp4 primero-->
  <section class="programa">
    <div class="contenedor-video">
      <video autoplay loop poster="img/bg-talleres.jpg">
        <source src="video/video.mp4" type="video/mp4">
        <source src="video/video.webm" type="video/webm">
        <source src="video/video.ogv" type="video/ogv">
      </video>
    </div>
    <!--contenedor video-->

    <div class="contenido-programa">
      <div class="container">
        <div class="programa-evento seccion">
          <h2 class=" centrar-texto section-h2">Programa del evento</h2>

          <?php 

          try {
            include_once 'php/funtions/bd_con.php';

            $pdo->beginTransaction();

            $consulta = $pdo->prepare('SELECT nombreEvento, icono FROM categoriaeventos');
            $consulta->execute();
            $pdo->commit();
          } catch (\Exception $th) {
            $pdo->rollBack();
            echo  "Error!!" . " " . $th->getMessage();
          }
          ?>

          <nav class="menu-progama">
            <?php 
              while ($menu = $consulta->fetch(PDO::FETCH_ASSOC)) {
                ?>
                
                <a href="#<?php echo $menu['nombreEvento'] ?>"><i class="fas <?php echo $menu['icono'] ?>"></i> <?php echo $menu['nombreEvento'] ?> </a>

               <?php } ?>
           
          </nav>

          <div class="contenedor-eventos">
            <div id="talleres" class="info-curso ocultar">
              <div class="detalle-evento">
                <h3>HTML5, CSS3 JavaScript</h3>
                <p class="hora"><i class="fas fa-clock"></i> 14:00 hrs</p>
                <p><i class="fas fa-calendar-alt"></i> 10 de Dic</p>
                <p><i class="fas fa-user"></i> Juan Pablo de la Torre</p>
              </div>
              <div class="detalle-evento">
                <h3>Responsive Web Desing</h3>
                <p class="hora"><i class="fas fa-clock"></i> 14:00 hrs</p>
                <p><i class="fas fa-calendar-alt"></i> 10 de Dic</p>
                <p><i class="fas fa-user"></i> Juan Pablo de la Torre</p>
              </div>
              <a href="" class="btn btn-eventos">Ver Todos</a>
            </div>
            <!--talleres-->
            <div id="conferencias" class="info-curso ocultar">
              <div class="detalle-evento">
                <h3>Como ser Freelancer</h3>
                <p class="hora"><i class="fas fa-clock"></i> 14:00 hrs</p>
                <p><i class="fas fa-calendar-alt"></i> 10 de Dic</p>
                <p><i class="fas fa-user"></i> Gregorio Sanches</p>
              </div>
              <div class="detalle-evento">
                <h3>Tecnologias del futuro</h3>
                <p class="hora"><i class="fas fa-clock"></i> 14:00 hrs</p>
                <p><i class="fas fa-calendar-alt"></i> 10 de Dic</p>
                <p><i class="fas fa-user"></i> Juan Pablo de la Torre</p>
              </div>
              <a href="" class="btn btn-eventos">Ver Todos</a>
            </div>
            <!--conferencias-->
            <div id="seminarios" class="info-curso ocultar">
              <div class="detalle-evento">
                <h3>Diseño UI/UX en moviles</h3>
                <p class="hora"><i class="fas fa-clock"></i> 14:00 hrs</p>
                <p><i class="fas fa-calendar-alt"></i> 10 de Dic</p>
                <p><i class="fas fa-user"></i> Juan Pablo de la Torre</p>
              </div>
              <div class="detalle-evento">
                <h3>Aprende a programar en una mañana</h3>
                <p class="hora"><i class="fas fa-clock"></i> 14:00 hrs</p>
                <p><i class="fas fa-calendar-alt"></i> 10 de Dic</p>
                <p><i class="fas fa-user"></i> Juan Pablo de la Torre</p>
              </div>
              <a href="" class="btn btn-eventos">Ver Todos</a>
            </div>
            <!--seminarios-->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--contenido programas-->

  <?php include_once 'php/templates/invitado.php' ?> 

  <!--invitados-->

  <div class="contador parallax">
    <div class="container contenedor-contador">
      <div class="contenido-contador">
        <p class="numero-contador" id="numeroUno">0</p>
        <p>Invitados</p>
      </div>
      <div class="contenido-contador">
        <p class="numero-contador" id="numeroDos">0</p>
        <p>Talleres</p>
      </div>
      <div class="contenido-contador">
        <p class="numero-contador" id="numeroTres">0</p>
        <p>Dias</p>
      </div>
      <div class="contenido-contador">
        <p class="numero-contador" id="numeroCuatro">0</p>
        <p>Conferencias</p>
      </div>
    </div>
  </div>
  <!--contador-->

  <section class="container seccion">
    <h3 class="centrar-texto section-h2">PRECIOS</h3>
    <div class="contenedor-precios ">
      <div class="precio">
        <p class="p-naranja">UN SOLO DIA</p>
        <p class="numero-precio">$30</p>
        <p class="parrafo-precio"><i class="fas fa-check"></i> BOCADILLOS GRATIS</p>
        <p class="parrafo-precio"><i class="fas fa-check"></i> TODAS LAS CONFERENCIAS</p>
        <p class="parrafo-precio"><i class="fas fa-check"></i> TODOS LOS TALLERES</p>
        <a href="#" class="btn btn-compra">COMPRAR</a>
      </div>
      <div class="precio">
        <p class="p-naranja">TODOS LOS DIAS</p>
        <p class="numero-precio">$50</p>
        <p class="parrafo-precio"><i class="fas fa-check"></i> BOCADILLOS GRATIS</p>
        <p class="parrafo-precio"><i class="fas fa-check"></i> TODAS LAS CONFERENCIAS</p>
        <p class="parrafo-precio"><i class="fas fa-check"></i> TODOS LOS TALLERES</p>
        <a href="#" class="btn btn-compra">COMPRAR</a>
      </div>
      <div class="precio">
        <p class="p-naranja">PASE POR DOS DIAS</p>
        <p class="numero-precio">$45</p>
        <p class="parrafo-precio"><i class="fas fa-check"></i> BOCADILLOS GRATIS</p>
        <p class="parrafo-precio"><i class="fas fa-check"></i> TODAS LAS CONFERENCIAS</p>
        <p class="parrafo-precio"><i class="fas fa-check"></i> TODOS LOS TALLERES</p>
        <a href="#" class="btn btn-compra">COMPRAR</a>
      </div>
    </div>
  </section>
  <!--compra-->

  <div class="seccion">
    <div class="mapa" id="mapa">

    </div>
  </div>
  <!--mapa-->


  <section class="container seccion">
    <h3 class="centrar-texto section-h2">TESTIMONIALES</h3>
    <div class="contenedor-testimoniales">
      <div class="testimonio">
        <blockquote>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elitloremque perferendis ipsum nisi perspiciatis ipsam
            fugit nam et.</p>
        </blockquote>
        <div class="imagen-block">
            <img src="img/testimonial.jpg" class="imagen-testimonio" alt="testimoniales"> 
            <p class="p-naranja">OSWALDO
                ESCOBEDO <span>Diseñador en @prisma</span></p></div>
      </div>
      <div class="testimonio">
        <blockquote>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae voluptatibus exercitationem laudantium
            fugit nam et.</p>
        </blockquote>
        <div class="imagen-block">
        <img src="img/testimonial.jpg" class="imagen-testimonio" alt="testimoniales"> 
        <p class="p-naranja">OSWALDO
            ESCOBEDO <span>Diseñador en @prisma</span></p></div>
      </div>
      <div class="testimonio">
        <blockquote>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae voluptatibus exercitationem laudantium
            fugit nam et.</p>
        </blockquote>
        <div class="imagen-block">
            <img src="img/testimonial.jpg" class="imagen-testimonio" alt="testimoniales"> 
            <p class="p-naranja">OSWALDO
                ESCOBEDO <span>Diseñador en @prisma</span></p></div>
      </div>
    </div>
  </section><!--testimoniales-->

  <div class="seccion parallax imagen-news">
    <div class="contenedor-news container">
    <p class="centrar-texto">registrate al newsletter</p>
    <h2 class="centrar-texto">GDLWEBCAMP</h2>

    <a href="#" class="btn btn-news">REGISTRO</a> 
  </div>
  </div><!--newsletter-->

  <div class="seccion">
      <h3 class="centrar-texto section-h2">FALTAN</h3>
    <div class="container contenedor-contador">
      <div class="contenido-regresivo">
        <p class="numero-contador" id="dias"></p>
        <p class="parrafo-regreso">DIAS</p>
      </div>
      <div class="contenido-contador">
        <p class="numero-contador" id="horas"></p>
        <p class="parrafo-regreso">HORAS</p>
      </div>
      <div class="contenido-contador">
        <p class="numero-contador" id="minutos"></p>
        <p class="parrafo-regreso">MINUTOS</p>
      </div>
      <div class="contenido-contador">
        <p class="numero-contador" id="segundos"></p>
        <p class="parrafo-regreso">SEGUNDOS</p>
      </div>
    </div>
  </div>

 <?php include_once 'php/templates/footer.php' ?>