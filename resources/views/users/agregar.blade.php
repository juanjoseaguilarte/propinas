<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
   <h1>Agregar Usuario</h1> 
   <div class="container">
       <div class="row">
           <div class="col">
               <a href="{{ route('home')}}">
                <h1>Inicio</h1>
               </a>
           </div>
           <a href="{{ route('listar-usuarios')}}">
                <h1>Listar Usuarios</h1>
               </a>
           </div>
       </div>
   </div>
   <form class="form-inline" method="POST" action="{{ route('guardar-usuario') }}">
       @csrf
       <div class="form-group">

           Status <input class="form-control m-2" type="checkbox" name="status">
           Nombre <input class="form-control m-2" type="text" name="name">
           Email <input class="form-control m-2" type="email" name="email">
           Password <input class="form-control m-2" type="password" name="password">
           
           <button class="btn btn-primary m-2">Enviar</button>
        </div>
   </form>

</body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>