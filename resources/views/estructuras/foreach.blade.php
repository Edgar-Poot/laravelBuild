<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>foreach</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <!--Manejo de directivas blade-->
    @foreach($lista as $obj)
    <p class="text-info text-center display-1 my-5 fw-semibold">{{$obj}}</p>
    @endforeach
    @php
    function sumar($numero1, $numero2) {
    return "La suma es: " . $numero1 +$numero2;
    }
    @endphp
    <p class="text-warning text-center display-1 my-5 fw-semibold">{{sumar(20,25)}}</p>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>
</body>

</html>