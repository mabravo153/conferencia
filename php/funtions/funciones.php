<?php

function totalJson( &$boletos, &$camisaEvento = 0, &$etiquetas = 0 ){
    //esto lo haremos con el fin de formatear mejor el array de boleto 

    $dias = array(0 =>'undia', 1=>'diascompletos', 2 => 'dos dias');
    $arraydias = array_combine($dias, $boletos); //esto nos combierte dos arrays, el primer parametro toma las llaves y el segundo toma el valor

    $json = array(); //creamos esta variable con el fin de no sobre escribir arraydias 

    foreach ($arraydias as $key => $value) {
        
        if ($value > 0) {

            $json[$key] = $value; 
        
        }
    }

    if ($camisaEvento > 0) {
        $json['camisas'] = $camisaEvento; //estamos agregando rn caso que el usuario tenga una camisa. insertarlo en el ararray 
    }

    if ($etiquetas > 0) {
        $json['etiquetas'] = $etiquetas;
    }

    return json_encode($json);
}

//es necesario agregarle una llave al array, ya que al convertirse en json. este pasa a ser algo similar a un objeto en js


function registroEventos(&$registroEventos){
    $eventos = array();

    foreach ($registroEventos as $value) {
        $eventos['eventos'] = $value;
    }
    
    return json_encode($eventos);

}




?>