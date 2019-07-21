<?php include_once "php/templates/header.php" ?>
<section class="container seccion">

    <h2 class="centrar-texto section-h2">Registro de Usuarios</h2>

    <form id="registro" action="" method="POST">

        <div class="registro caja container seccion">

            <div class="campo">
                <label for="name">Nombre:</label>
                <input type="text" name="nombre" id="name" placeholder="Tu Nombre" required>
            </div>

            <div class="campo">
                <label for="lastname">Apellido:</label>
                <input type="text" name="apellido" id="lastname" placeholder="Tu Apellido" required >
            </div>

            <div class="campo">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" placeholder="Tu Email" required>
            </div>
        </div>
        <!--dato usuarios-->

        <div class="error container seccion" id="error"></div>
            <!--dejaremos este div vacio y lo llenaremos con js-->

        <h3 class="centrar-texto section-h2">PRECIOS</h3>
    <div id="paquetes" class="container seccion paquete" >
    
    <div class="contenedor-precios">
      <div class="precio">
        <p class="p-naranja">UN SOLO DIA</p>
        <p class="numero-precio">$30</p>
        <p class="parrafo-precio"><i class="fas fa-check"></i> BOCADILLOS GRATIS</p>
        <p class="parrafo-precio"><i class="fas fa-check"></i> TODAS LAS CONFERENCIAS</p>
        <p class="parrafo-precio"><i class="fas fa-check"></i> TODOS LOS TALLERES</p>
        <div class="orden">
          <label for="paseDia">Boletos:</label>
          <input type="number" name="paseDia" id="paseDia" min="1" placeholder="1">
        </div>
      </div> 
      <div class="precio"> 
        <p class="p-naranja">TODOS LOS DIAS</p>
        <p class="numero-precio">$50</p>
        <p class="parrafo-precio"><i class="fas fa-check"></i> BOCADILLOS GRATIS</p>
        <p class="parrafo-precio"><i class="fas fa-check"></i> TODAS LAS CONFERENCIAS</p>
        <p class="parrafo-precio"><i class="fas fa-check"></i> TODOS LOS TALLERES</p>
        <div class="orden">
            <label for="paseCompleto">Boletos:</label>
            <input type="number" name="paseCompleto" id="paseCompleto" min="1" placeholder="1">
          </div>
      </div>
      <div class="precio">
        <p class="p-naranja">PASE POR DOS DIAS</p>
        <p class="numero-precio">$45</p>
        <p class="parrafo-precio"><i class="fas fa-check"></i> BOCADILLOS GRATIS</p>
        <p class="parrafo-precio"><i class="fas fa-check"></i> TODAS LAS CONFERENCIAS</p>
        <p class="parrafo-precio"><i class="fas fa-check"></i> TODOS LOS TALLERES</p>
        <div class="orden">
            <label for="paseDos">Boletos:</label>
            <input type="number" name="paseDos" id="paseDos" min="1" placeholder="1">
          </div>
      </div>
    </div>
  </div><!--paquetes-->

  <h3 class="centrar-texto section-h2">Elige tus talleres</h3>
    <div id="eventos" class="eventos seccion container caja">
        
        <div class="">
              <div id="viernes" class="contenido-dia">
                  <h4>Viernes</h4>
                  <div class="contenedor-dia">
                      <div>
                          <p>Talleres:</p>
                          <label><input type="checkbox" name="registro[]" id="taller_01" value="taller_01"><time>10:00</time> Responsive Web Design</label>
                          <label><input type="checkbox" name="registro[]" id="taller_02" value="taller_02"><time>12:00</time> Flexbox</label>
                          <label><input type="checkbox" name="registro[]" id="taller_03" value="taller_03"><time>14:00</time> HTML5 y CSS3</label>
                          <label><input type="checkbox" name="registro[]" id="taller_04" value="taller_04"><time>17:00</time> Drupal</label>
                          <label><input type="checkbox" name="registro[]" id="taller_05" value="taller_05"><time>19:00</time> WordPress</label>
                      </div>
                      <div>
                          <p>Conferencias:</p>
                          <label><input type="checkbox" name="registro[]" id="conf_01" value="conf_01"><time>10:00</time> Como ser Freelancer</label>
                          <label><input type="checkbox" name="registro[]" id="conf_02" value="conf_02"><time>17:00</time> Tecnologías del Futuro</label>
                          <label><input type="checkbox" name="registro[]" id="conf_03" value="conf_03"><time>19:00</time> Seguridad en la Web</label>
                      </div>
                      <div>
                          <p>Seminarios:</p>
                          <label><input type="checkbox" name="registro[]" id="sem_01" value="sem_01"><time>10:00</time> Diseño UI y UX para móviles</label>
                      </div>
                    </div> 
              </div> <!--#viernes-->
              <div id="sabado" class="contenido-dia">
                 <h4>Sábado</h4>
                  <div class="contenedor-dia">
                  <div>
                        <p>Talleres:</p>
                        <label><input type="checkbox" name="registro[]" id="taller_06" value="taller_06"><time>10:00</time> AngularJS</label>
                        <label><input type="checkbox" name="registro[]" id="taller_07" value="taller_07"><time>12:00</time> PHP y MySQL</label>
                        <label><input type="checkbox" name="registro[]" id="taller_08" value="taller_08"><time>14:00</time> JavaScript Avanzado</label>
                        <label><input type="checkbox" name="registro[]" id="taller_09" value="taller_09"><time>17:00</time> SEO en Google</label>
                        <label><input type="checkbox" name="registro[]" id="taller_10" value="taller_10"><time>19:00</time> De Photoshop a HTML5 y CSS3</label>
                        <label><input type="checkbox" name="registro[]" id="taller_11" value="taller_11"><time>21:00</time> PHP | Medio y Avanzado</label>
                  </div>
                  <div>
                        <p>Conferencias:</p>
                        <label><input type="checkbox" name="registro[]" id="conf_04" value="conf_04"><time>10:00</time> Como crear una tienda online que venda millones en pocos días</label>
                        <label><input type="checkbox" name="registro[]" id="conf_05" value="conf_05"><time>17:00</time> Los mejores lugares para encontrar trabajo</label>
                        <label><input type="checkbox" name="registro[]" id="conf_06" value="conf_06"><time>19:00</time> Pasos para crear un negocio rentable</label>
                  </div>
                  <div>
                        <p>Seminarios:</p>
                        <label><input type="checkbox" name="registro[]" id="sem_02" value="sem_02"><time>10:00</time> Aprende a Programar en una mañana</label>
                        <label><input type="checkbox" name="registro[]" id="sem_03" value="sem_03"><time>17:00</time> Diseño UI y UX para móviles</label>
                  </div>
                </div>
              </div> <!--#sabado-->
              <div id="domingo" class="contenido-dia">
                  <h4>Domingo</h4>
                  <div class="contenedor-dia">
                  <div>
                        <p>Talleres:</p>
                        <label><input type="checkbox" name="registro[]" id="taller_12" value="taller_12"><time>10:00</time> Laravel</label>
                        <label><input type="checkbox" name="registro[]" id="taller_13" value="taller_13"><time>12:00</time> Crea tu propia API</label>
                        <label><input type="checkbox" name="registro[]" id="taller_14" value="taller_14"><time>14:00</time> JavaScript y jQuery</label>
                        <label><input type="checkbox" name="registro[]" id="taller_15" value="taller_15"><time>17:00</time> Creando Plantillas para WordPress</label>
                        <label><input type="checkbox" name="registro[]" id="taller_16" value="taller_16"><time>19:00</time> Tiendas Virtuales en Magento</label>
                  </div>
                  <div>
                        <p>Conferencias:</p>
                        <label><input type="checkbox" name="registro[]" id="conf_07" value="conf_07"><time>10:00</time> Como hacer Marketing en línea</label>
                        <label><input type="checkbox" name="registro[]" id="conf_08" value="conf_08"><time>17:00</time> ¿Con que lenguaje debo empezar?</label>
                        <label><input type="checkbox" name="registro[]" id="conf_09" value="conf_09"><time>19:00</time> Frameworks y librerias Open Source</label>
                  </div>
                  <div>
                        <p>Seminarios:</p>
                        <label><input type="checkbox" name="registro[]" id="sem_04" value="sem_04"><time>14:00</time> Creando una App en Android en una tarde</label>
                        <label><input type="checkbox" name="registro[]" id="sem_05" value="sem_05"><time>17:00</time> Creando una App en iOS en una tarde</label>
                  </div>
                </div>
              </div> <!--#domingo-->
          </div>
    </div> <!--#eventos-->

    <h3 class="centrar-texto section-h2">Pago y Extras</h3>
    <div id="resumen" class="resumen seccion container caja">
    
        <div class="contenedor-resumen">
            <div class="campo-regalo">
                <div class="campo-resumen">
                    <label for="camisaEvento">Camisa del Evento $10</label>
                    <input type="number" name="camisa evento" id="camisaEvento" min="1" placeholder="0">
                </div>
                <div class="campo-resumen">
                    <label for="eventoEtiqueta">Paquete 10 Etiquetas $2</label>
                    <input type="number" name="evento etiqueta" id="eventoEtiqueta" min="1" placeholder="0">
                </div>
                <div class="campo-resumen">
                    <label for="regalo">Selecciona tu Regalo</label>
                    <select name="regalo" id="regalo">
                        <option disabled value="" selected>--Selecciona un regalo--</option>
                        <option value="eti">Etiquetas</option>
                        <option value="pul">Pulseras</option>
                        <option value="Plu">Plumas</option>
                    </select>
                </div>
                <input type="button" value="Calcular" id="calcular" class="btn">
            </div>
    
            <div class="contenedor-total">
                <div class="campo-total">
                    <p>resumen</p>
                    <div id="listaProductos" class="contenido-resumen">
            
                    </div>
                    <p>total</p>
            
                    <div id="sumaTotal" class="suma-total">
            
                    </div>
            
                </div>
                <input type="submit" value="Pagar" class="btn" id="btnRegistro">
            </div>
            </div>
        <!--contenedor resumen-->
      <div id="errorRegalo" class="error-regalo">

      </div>
    </div>  
  </form>

  </section>
  <?php include_once 'php/templates/footer.php' ?>