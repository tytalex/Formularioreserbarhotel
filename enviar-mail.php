<?php 
if (isset($_POST['nombres'])){
	$nombres=htmlentities($_POST['nombres']);
	$apellidos=htmlentities($_POST['apellidos']);
	$email_cliente=htmlentities($_POST['email']);
	$telefono=htmlentities($_POST['telefono']);
	$calle=htmlentities($_POST['calle']);
	$calle_numero=htmlentities($_POST['calle_numero']);
	$ciudad=htmlentities($_POST['ciudad']);
	$codigo_postal=htmlentities($_POST['codigo_postal']);
	$pais=htmlentities($_POST['pais']);
	$ingreso=htmlentities($_POST['ingreso']);
	$salida=htmlentities($_POST['salida']);
	$personas=htmlentities($_POST['personas']);
	$habitaciones=htmlentities($_POST['habitaciones']);
	$comentario=htmlentities($_POST['comentario']);
	
	/*SIGUE RECOLECTANDO DATOS PARA FUNCION MAIL*/
	$message = '';
	$message .= '<p>Hola, ha sido registrada una nueva reserva de habitación, según el detalle siguiente:</p> ';
	$message .= '<p>Cliente: '.$nombres.' '.$apellidos.'</p> ';
	$message .= '<p>Email: '.$email_cliente.'</p> ';
	$message .= '<p>Teléfono: '.$telefono.'</p> ';
	$message .= '<p>Dirección: '.$calle.' '.$calle_numero.' '.$ciudad.' CP'.$codigo_postal.' '.$pais.'</p> ';
	$message .= '<p>Fecha de ingreso: '.$ingreso.'</p> ';
	$message .= '<p>Fecha de salidad: '.$salida.'</p> ';
	$message .= '<p>Personas: '.$personas.'</p> ';
	$message .= '<p>Tipo de habitación: '.$habitaciones.'</p> ';
	$message .= '<p>Comentarios especiales: '.$comentario.'</p> ';
	
	$header = "MIME-Version: 1.0\r\n";
	$header .= "Content-type: text/html; charset=UTF-8\r\n";
	$header .= "From: ". $nombres . " <" . $email_cliente . ">\r\n";
	$email='alex_diosdado99@hotmail.com';//Ingresa tu dirección de correo
	
	$subject="Nueva reserva de habitación realiza por: ".$nombres;			
	if (mail($email,$subject,$message,$header)){
		?>
		<div class='col-md-12'>
			<div class="alert alert-success alert-dismissible fade show" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			  <strong>Bien hecho!</strong> La reserva de habitación ha sido realiza con éxito.
			</div>
		</div>	
		<?php
	}	 else {
		?>
		<div class='col-md-12'>
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			  <strong>Error!</strong> No se pudo realizar la reserva de habitación.
			</div>
		</div>	
		<?php
	}
	/*FINALIZA RECOLECTANDO DATOS PARA FUNCION MAIL*/
	

	?>

	<?php
}

?>
