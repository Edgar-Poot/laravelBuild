<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estructura condicional</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <!--Manejo de directivas blade-->
    <div class="container my-5 text-center">
        <h1 class="mb-3">Su nota es: <span class="fw-bold">{{$nota}}</span></h1>
        @if($nota >= 10.5)
        <p class="text-success fw-semibold">Situación: Aprobado</p>
        @else
        <p class="text-danger fw-semibold">Situación: Desaprobado</p>
        @endif
        <p class="fw-semibold mb-0">
            Situación:
            @if($nota >= 0 && $nota <= 6)
                <span class="text-danger">Pésimo</span>
                @elseif($nota > 6 && $nota <= 10.5)
                    <span class="text-warning">Bajo</span>
                    @elseif($nota > 10.5 && $nota <= 14)
                        <span class="text-secondary">Regular</span>
                        @elseif($nota > 14 && $nota <= 17)
                            <span class="text-info">Bueno</span>
                            @elseif($nota > 17 && $nota <= 20)
                                <span class="text-success">Excelente</span>
                                @else
                                <span class="text-muted">Nota inválida</span>
                                @endif
        </p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>
</body>

</html>