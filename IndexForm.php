<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <title>My cookbook</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/" />

  <link rel="icon" type="image/jpg" href="img/favIcon.png" />
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

    body {
      height: 100%;
      width: 800px;
      margin: 0 auto;

      display: flex;
      align-items: center;
      padding-top: 40px;
      padding-bottom: 40px;
      background-color: #f5f5f5;
    }

    .form-signin {
      width: 100%;
      max-width: 330px;
      padding: 15px;
      margin: auto;
    }

    .form-signin .checkbox {
      font-weight: 400;
    }

    .form-signin .form-floating:focus-within {
      z-index: 2;
    }

    .form-signin input[type="text"] {
      margin-bottom: -1px;
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
    }

    .form-signin input[type="password"] {
      margin-bottom: 10px;
      border-top-left-radius: 0;
      border-top-right-radius: 0;
    }
  </style>
</head>

<body class="text-center">
  <main class="form-signin">
    <form id="login">
      <img class="mb-4" src="img/favIcon.png" alt="" width="72" height="57" />
      <h1 class="h3 mb-3 fw-normal">My CookBook <br />Iniciar Sesion</h1>

      <div class="form-floating">
        <input type="text" class="form-control" id="floatingInput" />
        <label for="floatingInput">Usuario</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" />
        <label for="floatingPassword">Contrase??a</label>
      </div>

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me" /> Remember me
        </label>
      </div>
      <button class="w-100 btn btn-lg btn-primary" type="submit" onclick="cargaWeb()">
        Sign in
      </button>
    </form>
    <div class="collapse" id="navbarToggleExternalContent">
      <div class="bg-dark p-4">
        <span class="text-muted">Utilice "admin" para iniciar sesion como administrador</span><br />
        <span class="text-muted">Utilice "usuario" para iniciar sesion como invitado</span>
      </div>
    </div>
    <nav class="navbar navbar-dark bg-dark">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>
    <p class="mt-5 mb-3 text-muted">&copy; 2021???2022</p>
  </main>

  <script>
    const formulario = document.getElementById("login");

    function cargaWeb() {
      let usuario = document.getElementById('floatingInput').value;
      if (usuario == 'admin') {
        window.location.replace('http://localhost/MyCookBook/admin.php'); 
       
      } else if (usuario == "usuario") {

        window.location.replace('http://localhost/MyCookBook/cliente.php'); 
      } else {
        alert("Usuario no registrado, puede iniciar sesion como administrador o como usuario")
      }
    }




    /*formulario.addEventListener('submit', (e) => {
      e.preventDefault();
    });*/
  </script>
</body>

</html>