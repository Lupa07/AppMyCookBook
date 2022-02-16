<!DOCTYPE html>
<html>
  <head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  
    <style>
 body {
      background-color: #D6EAF8;
      width: 800px;
      margin: 0 auto;
      
    }
    

  .button {
        background-color: #4caf50; /* Green */
        border: none;
        color: white;
        padding: 16px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;

        -webkit-transition-duration: 0.4s; /* Safari */
        transition-duration: 0.4s;
        cursor: pointer;

        justify-content: center;
      }

      .button1 {
        background-color: #D6EAF8;
        color: black;
        border: 2px solid #008cba;
        
        margin-top: 50px;
      }

      .button1:hover {
        background-color: #008cba;
        color: white;
      }

      .button2 {
        background-color: #D6EAF8;
        color: black;
        border: 2px solid #008cba;
        
        margin-top: 50px;
      }

      .button2:hover {
        background-color: #008cba;
        color: white;
      }
      #corporativo{
        margin-top: 20px;
          position: relative;
         
          text-transform: capitalize;
          text-align: center;
      }


      .botones{
        text-align: center;
      }
    </style>
    
    <link rel="icon" type="image/jpg" href="img/favIcon.png" />
    <title>My cookbook</title>
  </head>

  <body>
    <div id="contenedor">
      <div id="corporativo">
        <div id="logo">
            <img class="mb-4" src="img/favIcon.png" alt="" width="72" height="57" />
        </div>
        <div id="texto">
            <h1 class="h3 mb-3 fw-normal">My CookBook <br />Iniciar Sesion</h1>
        </div>
        </div>
      <div class="botones">
        <div id="boton1">
            <button type="submit" class="button button1" onclick="window.location.href='/MyCookBook/cliente.php'">Cliente</button> 
            </div>
        <div id="boton2">
            <button type="submit" class="button button2" onclick="window.location.href='/MyCookBook/admin.php'">Administrador</button>
        </div>
        <div id="botonabrir">
          <button type="submit" class="button button1 botones" id='abrir'>Ayuda</button>
          <dialog id="dialogo1">
            <span class="text-muted">Utilice "Cliente" para iniciar sesion como invitado</span><br />
            <span class="text-muted">Utilice "Administrador" para iniciar sesion como administrador</span><br />
            <button type="submit" class="button button1 botones" id='cerrar'>Cerrar</button>
          </dialog>
        </div>
        </div>
    </div>

  <script>
    let abrir=document.getElementById('abrir');
    let cerrar=document.getElementById('cerrar');
    let dialogo=document.getElementById("dialogo1")
    abrir.addEventListener('click', function(){
      dialogo.showModal();
    })
    cerrar.addEventListener('click',function(){
      dialogo.close();
    })
  </script>
  <br><br><br><br>
   <?php include "templates/footer.php"; ?> 
  </body>
  
</html>
