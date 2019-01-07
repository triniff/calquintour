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
	$phone = $_POST['fono'];
	$begin = $_POST['inicio'];
    $nota = $_POST['nota'];
	$date = $_POST['fecha'];
    $gente = $_POST['gente'];
	$tour= $_POST['tour'];
	$vina="";
    
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
	
	
	$cuerpo = "Ha recibido una solicitud de Cotizacion".PHP_EOL; 
	$cuerpo .= "Codigo: " . $code . PHP_EOL; 
    $cuerpo .= "Nombre y apellido: " . $name . PHP_EOL; 
    $cuerpo .= "Email: " . $mail . PHP_EOL;
	$cuerpo .= "Telefono: " .  $phone . PHP_EO;
	$cuerpo .= "Partida: " . $inicio . PHP_EOL;
    $cuerpo .= "tour: " . $vina . PHP_EOL;
    $cuerpo .= "Personas: " . $gente . '\n';
    $cuerpo .= "Fecha: " . $date . PHP_EOL;
	$cuerpo .= "Nota: " . $nota . PHP_EOL;
	$cuerpo .= "el cliente espera su pronta respuesta en idioma ingles";
	$asunto ="Solicitud de Cotizacion " . $code;
	$destinatario = "s.gatica.l@gmail.com";
	
	

	
	
	
					  if ( mail($destinatario, $asunto, $cuerpo,$headers) ) {
       						    header('Refresh: 5; URL=index.html');
							    print '<script language="JavaScript">'; 
                                print 'alert("Quote Sent, your answer will be in less than 24 hours.");'; 
                                print '</script>'; 
                              
							
							} else {
       						    print '<script language="JavaScript">'; 
                                print 'alert("Unsuccessful delivery, try again or use our social networks");'; 
                                print '</script>'; 
                            
							 
							}
	

exit();
?>