<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">
    <title>Signin Template · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">

    

      <!-- Bootstrap core CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .container {
    max-width: 600px;
    padding: 60px;
    -webkit-box-shadow: 1px 1px 31px -5px rgba(0,0,0,0.75);
    -moz-box-shadow: 1px 1px 31px -5px rgba(0,0,0,0.75);
    box-shadow: 1px 1px 31px -5px rgba(0,0,0,0.75);
}

.formulario div[class^="col-md-"] {
    height: 90px;
}

.invalid {
    color: red;
}
    </style>

    
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<!--main class="form-signin">
  <form>
    <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
  </form>
</main-->
<div class="container">
  <form >
    <div class="row">
      <div class="col-md-12 mb-5">
        <h2>Angular Forms</h2>
      </div>
    </div>
    <div class="row formulario">
      <div class="col-md-6 mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre" placeholder="Ingrese nombre" formControlName="nombre">
        <small class="invalid" 
         >
          El nombre es requerido
        </small>
        <small class="invalid" 
        >
        El nombre no puede contener espacios
      </small>
      </div>
      <div class="col-md-6 mb-3">
        <label for="apellido" class="form-label">Apellido</label>
        <input type="text" class="form-control" id="apellido" placeholder="Ingrese apellido" formControlName="apellido"> 
        <small class="invalid"
         >
          El apellido es requerido
        </small>
      </div>
      <div class="col-md-6 mb-3">
        <label for="dni" class="form-label">Edad</label>
        <input type="number" class="form-control" id="edad" placeholder="Ingrese edad" formControlName="edad">
        <small class="invalid"
          >
          La edad es requerida
        </small>
        <small class="invalid"
          >
          La edad debe ser de 18 a 99 años
        </small>
      </div>
      <div class="col-md-6 mb-3">
        <label for="sexo" class="form-label">Sexo</label>
        <select class="form-select" id="sexo" formControlName="sexo">
          <option value="">Seleccione uno</option>
          <option value="F">Femenino</option>
          <option value="M">Masculino</option>
        </select>
        <small class="invalid"
         >
          El sexo es requerido
        </small>
      </div>
      <div class="col-md-12 mb-5">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" placeholder="Ingrese email" formControlName="email">
        <small class="invalid" 
         >
          El email es requerido
        </small>
        <small class="invalid" 
         >
          El email no tiene el formato correcto
      </small>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 mb-5">
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="terminos" formControlName="terminos">
          <label for="recordar" class="form-check-label" for="terminos">
            Aceptar términos y condiciones
          </label>
        </div>
      </div>
      <div class="col-md-12 d-grid gap-2">
        <button type="submit" 
        class="btn btn-primary btn-block" 
       >
        Aceptar
      </button>
      </div>
    </div>
  </form>
</div>

    
  </body>
</html>
