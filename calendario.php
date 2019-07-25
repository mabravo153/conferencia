<?php include_once "php/templates/header.php" ?>

<?php

include_once 'php/funtions/bd_con.php';

    //conexion a la base de datos 


    try{
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = $pdo->prepare(' SELECT nombreEventos, fechaEvento, horaEvento,nombreEvento,nombreInvitado, apellidoInvitado, icono
                                FROM evento INNER JOIN invitado ON evento.fk_idInvitado  = invitado.idInvitado 
                                INNER JOIN  categoriaeventos ON evento.fk_idCategoria = categoriaeventos.idCategoria '); 
        $sql->execute();

    }catch (\Exception $e) {
        echo "Error!!" . " " .  $e->getMessage(); 
    }

    ?>

<section class="container seccion">

    <h2 class="centrar-texto section-h2">Calendario de enventos</h2>

    <div class="contenedor-calendario">
    
   
    
    <?php 

        $calendario = array(); //esta variable es importante que este afuera, con este array filtraremos por fecha 


        while ($eventos = $sql->fetch(PDO::FETCH_ASSOC)) {

            $fecha = $eventos['fechaEvento'];

            $evento = array(
                'titulo' => $eventos['nombreEventos'],
                'fecha' => $eventos['fechaEvento'],
                'hora' => $eventos['horaEvento'],
                'iconoEvento' => 'fa' . " " . $eventos['icono'], 
                'categoria' => $eventos['nombreEvento'],
                'invitado' => $eventos['apellidoInvitado'] . " " . $eventos['nombreInvitado']
            );

            $calendario[$fecha][] = $evento;
        //de esta manera mostramos un array ordenado por fecha 
        } 
    ?>


        
    <?php 
        foreach ($calendario as $keys => $values) { ?>
            
            <h2>
                <i class="fas fa-calendar-alt"></i>

                <?php
                
                //estableciendo la localidad en unix
                setlocale(LC_TIME, "es_ES.UTF-8");

                //estableciendo la localidad en windows 
                setlocale(LC_TIME, "spanish");

                echo strftime("%A, %d de %B del %G", strtotime($keys)) ?>
            </h2>

            <?php  foreach ($values as $value) { ?>

               <div class="dia"> 

       
                        <h3 class="titulo-calendario"> <?php echo $value['titulo'] ?></h3>
                   
                        <p class="hora-calendario">
                        <i class="fas fa-clock" aria_hidde="true" > </i>
                         <?php echo "{$value['hora']} {$value['fecha']}" ?></p>

                        <p class="hora-calendario">
                        <i class="fas fa-user" aria_hidde="true" > </i>
                        <?php echo "{$value['invitado']}" ?></p>

                        <p class="hora-calendario">
                        <i class="<?php echo $value['iconoEvento'] ?>" aria_hidde="true" > </i>
                        <?php echo "{$value['categoria']}" ?></p>
        

                    

               </div>
               
            <?php } ?> 


        <?php } ?>

       <!--esta es una manera muy sencilla de manetener-->


    </div>
  </section>
  <?php include_once 'php/templates/footer.php'?>