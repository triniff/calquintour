<?php
	 $archivo = "cont.txt"; //el archivo que contiene en numero
        $contador=0;
		$f = fopen($archivo, "r"); //abrimos el archivo en modo de lectura
        if($f)
        {
            $contador = fread($f, filesize($archivo)); //leemos el archivo
            $contador = $contador + 1; //sumamos +1 al contador
            fclose($f);
        }
        $f = fopen($archivo, "w+");
        if($f)
        {
            fwrite($f, $contador);
            fclose($f);
        }
       
	 
	$name = $_POST['nombre'];
	$mail = $_POST['email'];
	$phone = $_POST['phone'];
	$begin = $_POST['partida'];
    $ending = $_POST['llegada'];
	$date = $_POST['fecha'];
    $gente = $_POST['gente'];
    
	$tour= $_POST['tour'];
	$vina=" ";
	  if ($tour==1){
        $vina="Concha y Toro";
      }
	  if ($tour==2){
        $vina="Emiliana";
      }
	  if ($tour==3){
        $vina="Undurraga";
      }
	  if ($tour==4){
        $vina="Cousino Macul";
      }
	  if ($tour==5){
        $vina="Santa Rita";
      }
	  if ($tour==6){
        $vina="Casas del Bosque";
      }
	  if ($tour==7){
        $vina="Experiencia Nerudiana";
      }
	  if ($tour==8){
        $vina="Experiencia Vinocratas";
      }
	  if ($tour==9){
        $vina="Experiencia Barra Brava";
      }
	  if ($tour==10){
        $vina="Cepas Patrimoniales";
      }
	  $code="cot" . "00" . $tour . "-" .$contador;
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
$headers .= "From: <web@calquintour.cl>\r\n ";
	
	
	$cuerpo = "Ha recibido una solicitud de Cotizacion \n\n"; 
	$cuerpo .= "Codigo: " . $code . "\r\n"; 
    $cuerpo .= "Nombre y apellido: " . $name . "\r\n"; 
    $cuerpo .= "Email: " . $mail . "\r\n";
	$cuerpo .= "Telefono: " .  $phone . "\r\n";
	$cuerpo .= "Partida: " . $begin . "\r\n";
	$cuerpo .= "Llegada: " . $ending . "\r\n";
	$cuerpo .= "Tour: " . $vina . "\r\n\n";
    $cuerpo .= "Personas: " . $gente . "\r\n\n";
	$cuerpo .= "Fecha: " . $date . "\r\n\n";
	$cuerpo .= "el cliente espera su pronta respuesta" . "\r\n\n";
	$asunto ="Solicitud de Cotizacion " . $code;
	$destinatario = "cotizacion@calquintour.cl";
	
	
	
	
	mail($destinatario, $asunto, $cuerpo, $headers);
	
    
?>