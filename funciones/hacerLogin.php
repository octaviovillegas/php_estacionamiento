<h1>bienvenido</h1>

<?php
	session_start();
echo "bienvenido";
	$usuarioIngresado = $_GET['inputEmail'];
	$claveIngresada = $_GET['inputPassword'];
	
	$booUsuario = 0;
	$booPassword = 0;

	if (empty($usuarioIngresado) || empty($claveIngresada)) 
	{
		header("Location: ../paginas/login.php?error=camposvacios");
		exit();
	}
	else
	{
		$archivo = fopen("../archivos/usuarios.txt", "r") or die("Imposible arbrir el archivo");
	
		while(!feof($archivo)) 
		{
			$objeto = json_decode(fgets($archivo));
			if ($objeto->usuario == $usuarioIngresado) 
			{	
				$booUsuario = 1;
				if ($objeto->password == $claveIngresada)
				{
					fclose($archivo);
					$_SESSION['usuario']=$objeto->usuario;
					$_SESSION['perfil']=$objeto->perfil;
					setcookie("usuario", $_SESSION['usuario'], expires_or_options, path, domain, secure, httponly)
					header("Location: ../paginas/login.php?exito=signup");
					exit();
				}			
			}
		 	
		}	
		if ($booUsuario == 0) {
			header("Location: ../paginas/login.php?error=usuarioincorrecto");
			fclose($archivo);
			exit();
		}
		else 
	    {
			header("Location: ../paginas/login.php?error=contraseñaincorrecta");
			fclose($archivo);
			exit();
		}

		fclose($archivo);
	}	
	header("Location: ../paginas/login.php");
	exit();
?>