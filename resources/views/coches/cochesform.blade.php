<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>form laravel</title>
  </head>
  <body>
       <div class="container bg-white mt-5" style="box-shadow: 9px 9px 14px -5px rgba(0,0,0,0.37);
             border-radius: 4px;
             padding:15px;">
          <h1>FOMULARIO</h1>
          <hr />
          <br>
    <div class="row" style="width:100%;">
    <form  action="{{ url('/formulario/coches') }}" method="post">
            <div class="form-row">                
            <div class="form-group col-md-6">
            <label for="coche_name">Nombre Coche</label>
            <input type="text" class="form-control" name="coche_name" id="coche_name" aria-describedby="helpId" placeholder="tsuru">
            <small id="helpId" class="form-text text-muted">No usar esapcios en blanco</small>
            <div class="mt-4">
              <label for="coches">Ingresa numero de coches</label>
              <input type="tel" class="form-control" name="coches-cantidad" id="" aria-describedby="helpId" placeholder="5">
              <small id="helpId" class="form-text text-muted">Ingresa Cantidad</small>
            </div>
            </div>
            <div class="form-group col-md-6">
              <label for="coche_description">Agrega una descripcion</label>
              <textarea class="form-control" name="coche_description" id="coche_description" rows="6"></textarea>
            </div>
        </div>
        <div class="row">
             <div class="form-group mx-auto">
            <button type="submit" class="btn btn-primary">ENVIAR </button>
             </div>
        </div>
        </form>
</div>

      </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>