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
    <div class="container">
        <div class="row">
            <div class="col">

                <div class="col">
                    <a href="{{ route('home')}}">
                        <h1>Inicio</h1>
                    </a>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <h3 class="btn btn-secondary">Listado de propinas de {{ $dato }} hasta {{ $to }}</h3>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-2">
                            
                            @foreach($users as $user)
                            
                            <div class="card m-1 shadow d-inline-flex">
                                <div class="card-body">
                                    @if($user->status === 'on')
                                    <h3 class="card-text">{{ $user->name }}</h3>
                                    @endif
                                    @foreach($tip as $item)
                                    @if($user->id == $item['user_id'])
                                    <p class="card-text">Propina: {{ number_format($item['sum(amount)'] / 1.02, 2) }}</p>
                                </div>
                            </div>
                                    @endif
                                    @endforeach
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>