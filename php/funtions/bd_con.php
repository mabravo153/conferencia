<?php



//usamos pdo ya que esta mas orientado a varias bases de datos. 

try {
    $pdo = new PDO('mysql: host=127.0.0.1;dbname=conferencia', 'mabravo', 'Zsgm1994+-',array(PDO::ATTR_PERSISTENT => true));
} catch (\Exception $th) {
    echo "No se ha podido establecer conexion a la base de datos" . " " . $th->getMessage();
}



//el nombre de usario y contraseña se deben escribir por separado 