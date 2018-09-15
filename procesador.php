<?php
    error_reporting(E_ALL);
    ini_set('display_errors',1);
    //validacion
    $error="";
    if(isset($_POST['envio'])) {//si se envio el formulario
    //validando nombre
    if (empty($_POST['nombre']))
        $error.="Ingresa un nombre </br>";
    else{
        $nombre=$_POST['nombre'];
        $nombre= filter_var($nombre, FILTER_SANITIZE_STRING);//ELIMINAR ETIQUETAS DE HTML AL INPUT
        $nombre= trim($nombre);
        if ($nombre=="") $error.="El nombre esta vacio </br>";
    }

    //validando color
    if (empty($_POST['color']))
        $error.="Ingresa un color </br>";
    else{
        $color=$_POST['color'];
        $color= filter_var($color, FILTER_SANITIZE_STRING);//ELIMINAR ETIQUETAS DE HTML AL INPUT
        $color= trim($color);
        if ($color=="") $error.="El color esta vacio </br>";

    }

    //validando genero
    if (empty($_POST['genero']))
        $error.="Ingresa un genero </br>";
    else{
        $genero=$_POST['genero'];
        $genero= filter_var($genero, FILTER_SANITIZE_STRING);//ELIMINAR ETIQUETAS DE HTML AL INPUT
        $genero= trim($genero);
        if ($genero=="") $error.="El genero esta vacio </br>";
    }
    $miArreglo="";
    //validando cursos
    if (empty($_POST['curso']))
        $error.="Ingresa un curso </br>";
    else{
        $curso=$_POST['curso'];
        foreach($curso as $valor){
            $miArreglo.=$valor." ,";
        }
        $miArreglo= filter_var($miArreglo, FILTER_SANITIZE_STRING);//ELIMINAR ETIQUETAS DE HTML AL INPUT
    
    }







    //enviar correo
    if($error==""){
        //cuerpo del mensaje
        $cuerpo ="Nombre: ".$nombre."\n";
        $cuerpo.="Cursos: ".$miArreglo."\n";
        $cuerpo.="Color: ".$color."\n";
        $cuerpo.="Genero: ".$genero."\n";
        //Direccion a enviar
        $destinatario="xxdestinatarioxxx@gmail.com";
        $asunto="Nuevo mensaje formulario";
        $cabeceras = "From: SoyElAdmin <xxxMiCorreoAdminxxx@gmail.com>". "\r\n";


        //envio de correo
        $success= mail($destinatario,$asunto,$cuerpo, $cabeceras);
        if ($success)
        echo "exito";
        else
        echo $error;
    }else{
        echo $error;
    }



}
else{
    echo "No se envio formulario";
}



?>