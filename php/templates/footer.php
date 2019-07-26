<footer class="site-footer">
    <div class="contenedor-footer container">
      <div class="contenido-footer">
        <h3 class="centrar-texto">SOBRE <SPan>GDLWECAMP</SPan></h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et fugit ad velit voluptatem illo, consequuntur numquam adipisci molestiae. Ut voluptatum blanditiis nisi, nam culpa saepe pariatur deleniti velit porro aliquid.</p>
      </div>
      <div class="contenido-footer">
        <h3 class="centrar-texto">ULTIMOS <SPan>TWEETS</SPan></h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et fugit ad velit voluptatem illo, consequuntur numquam adipisci molestiae. Ut voluptatum blanditiis nisi, nam culpa saepe pariatur deleniti velit porro aliquid.</p>
      </div>
      <div class="contenido-footer">
        <h3 class="centrar-texto">REDES <SPan>SOCIALES</SPan></h3>
        <nav class="redes-sociales">
          <a href=""><i class="fab fa-facebook-f"></i></a>
          <a href=""><i class="fab fa-twitter"></i></a>
          <a href=""><i class="fab fa-pinterest-p"></i></a>
          <a href=""><i class="fab fa-youtube"></i></a>
          <a href=""><i class="fab fa-instagram"></i></a>
        </nav>
      </div>
    </div>
  </footer>

  <div class="derechos-reservados">
   <p class="centrar-texto container">&copy; TODOS LOS DERECHOS RESERVADOS, MIGUEL BRAVO 2019</p>
  </div>
  <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"></script>
  <script src="js/vendor/modernizr-3.7.1.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
  <script src="js/plugins.js"></script>
  <script src="js/jquery.animateNumber.js"></script>
  <script src="js/jquery.lettering-0.6.1.min.js"></script>

  <?php

    $archivo = basename($_SERVER['PHP_SELF']);
    $pagina = str_replace(".php", "", $archivo); 
    if($pagina == 'conferencia'){
      echo '<script src="js/lightbox.js"></script>' ;
    }elseif ($pagina == 'invitados') {
      echo '<script src="js/jquery.colorbox.js"></script>';
    }
    elseif ($pagina == 'index') {
      echo '<script src="js/jquery.colorbox.js"></script>';
    }

  ?> 

  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/main.js"></script>
 
  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set', 'transport', 'beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body>

</html>