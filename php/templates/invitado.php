<div class="container seccion">

<h2 class="centrar-texto section-h2">Nuestos Invitados</h2> 

    <div class="seccion-invitados">

    <?php

        //conexion a al base de datos y consulta 

    include_once 'php/funtions/bd_con.php';

    try {
        
        $invitados = $pdo->prepare('SELECT idInvitado, nombreInvitado, apellidoInvitado, descripcionInvitado, urlImagen 
                                    FROM invitado ');
        $invitados->execute();

    } catch (\Exception $th) {
        echo "Error!!!! ". " " . $th->getMessage();
    }
    
    ?> <!--cierra conexion base de datos-->


        <?php
        //creando un array para cada uno de los invitados
        while ($a = $invitados->fetch(PDO::FETCH_ASSOC)) { ?>
            
           <?php     

            $invitado = array(
                'id' => $a['idInvitado'],
                'nombre' => " {$a['nombreInvitado']}  {$a['apellidoInvitado']}" ,
                'descripcion' => $a['descripcionInvitado'],
                'imagen' =>  $a['urlImagen']
            );
           ?> 
           
          
         <!--  imprime usuarios y su modal  -->  
        <div class="invitado">
           <a class="invitado-info" href="#invitado<?php echo $invitado['id']; ?>">
            <img src="img/<?php echo $invitado['imagen']; ?>" alt="invitado1">
            <p><?php echo $invitado['nombre'] ?></p>
            </a>
        </div>

        <div style="display: none;">

            <div class="invitado-info" id="invitado<?php echo $invitado['id']; ?>">
                <h2 class="centrar-texto section-h2"><?php echo $invitado['nombre'] ?></h2> 
                <p class="descripcion-invitado"><?php echo $invitado['descripcion'] ?></p>
            </div>

        </div>

     <?php  } ?> 





    </div>

</div>