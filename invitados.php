<?php include_once "php/templates/header.php" ?>


<div class="container seccion">

<h2 class="centrar-texto section-h2">Nuestos Invitados</h2> 

    <div class="seccion-invitados">

    <?php
    include_once 'php/funtions/bd_con.php';

    try {
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $invitados = $pdo->prepare('SELECT nombreInvitado, apellidoInvitado, descripcionInvitado, urlImagen 
                                    FROM invitado ');
        $invitados->execute();

    } catch (\Exception $th) {
        echo "Error!!!! ". " " . $th->getMessage();
    }
    
    ?> 


        <?php

        while ($a = $invitados->fetch(PDO::FETCH_ASSOC)) { ?>
            
           <?php     

            $invitado = array(
                'nombre' => " {$a['nombreInvitado']}  {$a['apellidoInvitado']}" ,
                'descripcion' => $a['descripcionInvitado'],
                'imagen' =>  $a['urlImagen']
            );
           ?> 
           
        <div class="invitado">
            <img src="img/<?php echo $invitado['imagen']; ?>" alt="invitado1">
            <p><?php echo $invitado['nombre'] ?></p>
        </div>

     <?php  } ?> 





    </div>

</div>


<?php include_once 'php/templates/footer.php' ?>