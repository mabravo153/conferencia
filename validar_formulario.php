<?php include_once "php/templates/header.php" ?>

<section class="container seccion">

    <h2 class="centrar-texto section-h2">Resumen Compra</h2>

<?php  

    if (isset($_POST['submit'])) {
       
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $email = $_POST['email'];
        $regalo = $_POST['regalo'];
        $total = $_POST['totalPagado'];
        $fecha = date("Y-m-d  h:i:s");

        //resultado en json 
        include_once "php/funtions/funciones.php";
        //registro boletos camisetas y etiqueta
        $boletos = $_POST['pases'];
        $camisaEvento = $_POST['camisaevento'];
        $etiquetas = $_POST['eventoetiqueta'];
        
        $pasesArticulos = totalJson($boletos, $camisaEvento, $etiquetas); // esta variable retoma el valor de la funcion la cual retorna un objeto json

        //registro talleres 
        $registroEventos = $_POST['registro']; 
        $eventosRegistrados = registroEventos($registroEventos);

        try {
            include_once 'php/funtions/bd_con.php'
            $pdo->beginTransaction(); 
            $insertar = $pdo->prepare("INSERT INTO registrousuario () ")
            
        } catch (\Exception $th) {
            $pdo->rollBack();
            echo "Ha ocurrido un error" . " " . $th->getMesage(); 
        }




    }


?>

</section> 

<?php include_once 'php/templates/footer.php' ?>