<?php  
    if (isset($_POST['submit'])) {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $email = $_POST['email'];
        $rs = $_POST['regalo'];
        $total = $_POST['totalPagado'];
        $fecha = date("Y-m-d  h:i:s");
        $regalo = (int) $rs ; //convierto el regalo al un entero. para evitar errores
        include_once "php/funtions/funciones.php";
        $boletos = $_POST['pases'];
        $camisaEvento = $_POST['camisaevento'];
        $etiquetas = $_POST['eventoetiqueta'];
        $pasesArticulos = totalJson($boletos, $camisaEvento, $etiquetas); // esta variable retoma el valor de la funcion la cual retorna un objeto json
        $registroEventos = $_POST['registro']; 
        $eventosRegistrados = registroEventos($registroEventos);
        try {
            include_once 'php/funtions/bd_con.php';
            $pdo->beginTransaction(); 
            $insertar = $pdo->prepare("INSERT INTO registrousuario (nombreUsuario, apellidoUsuario, emailUsuario, fechaRegistro, pasesArticulos, talleresRegistrados, fk_regalo, totalPago )
                                        VALUES (:nombreUsuario, :apellidoUsuario, :emailUsuario, :fechaRegistro, :pasesArticulos, :talleresRegistrados, :fk_regalo, :totalPago ) ");
            $insertar->bindParam(":nombreUsuario", $nombre);
            $insertar->bindParam(":apellidoUsuario", $apellido);
            $insertar->bindParam(":emailUsuario", $email);
            $insertar->bindParam(":fechaRegistro", $fecha);
            $insertar->bindParam(":pasesArticulos", $pasesArticulos);
            $insertar->bindParam(":talleresRegistrados", $eventosRegistrados);
            $insertar->bindParam(":fk_regalo", $regalo);
            $insertar->bindParam(":totalPago", $total);
            $insertar->execute();
            $pdo->commit();
            header("Location: validar_formulario.php?exitoso=1");
        } catch (\Exception $th) {
            $pdo->rollBack();
            echo "Ha ocurrido un error" . " " . $th->getMesage(); 
        }
    }
?>

<?php include_once "php/templates/header.php" ?>

<section class="container seccion">

    <h2 class="centrar-texto section-h2">Resumen Compra</h2>


 <?php  
    
   if (isset($_GET['exitoso'])) {
    if ($_GET['exitoso'] == 1 ) {?>

        <div class="registro-exito">

            <h2 class="texto-exito centrar-texto"> El registro ha sido exitoso!!!!</h2>

        </div>

   <?php } } ?>
    



</section> 

<?php include_once 'php/templates/footer.php' ?>