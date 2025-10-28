<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <!--Manejo de directivas blade-->
    @switch($numero)
    @case(1)
    <p class="text-success text-center display-1 my-5 fw-semibold">Lunes</p>
    @break
    @case(2)
    <p class="text-info text-center display-1 my-5 fw-semibold">Martes</p>
    @break
    @case(3)
    <p class="text-warning text-center display-1 my-5 fw-semibold">Miércoles</p>
    @break
    @case(4)
    <p class="text-secondary text-center display-1 my-5 fw-semibold">Jueves</p>
    @break
    @case(5)
    <p class="text-danger text-center display-1 my-5 fw-semibold">Viernes</p>
    @break
    @default
    <p class="text-danger text-center display-1 my-5 fw-semibold">Error</p>
    @endswitch
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>
</body>

</html>