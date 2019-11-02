

<?php
	include 'AccesoDatos.php';

	$usuarioIngresado = $_GET['inputEmail'];
	$claveIngresada = $_GET['inputPassword'];

	include 'AccesoDatos.php';
	$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
	$consulta =$objetoAccesoDato->RetornarConsulta("select * from usuario");
	$consulta->execute();			
	$datos= $consulta->fetchAll(PDO::FETCH_ASSOC);		
	foreach ($datos as $usuario ) {
		if($usuario["nombre"]==$usuarioIngresado)
		{
			if($usuario["clave"]==$claveIngresada)
			{

				$_SESSION['usuario']=$usuario["nombre"];
				$_SESSION['perfil']=$usuario["perfil"];
				setcookie("usuario", $_SESSION['usuario']);
			}
		}
		# code...
	}
	header("Location: ../paginas/login.php");
?>