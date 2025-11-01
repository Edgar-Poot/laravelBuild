<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <header class="mt-3 display-3">
            <h2>Registro de entradas</h2>
        </header>
        <section class="mt-4">
            @if(session('success'))
            <div class="alert alert-success">
                {{session('success')}}
            </div>
            @endif
            <form action="{{route('entrada.store')}}" method="post">
                @csrf
                <div class="row">
                    <div class="form-group col-12 col-md-6">
                        <label for="titulo">Título</label>
                        <input type="text" class="form-control" required name="titulo" placeholder="Ingrese el título">
                    </div>
                    <div class="form-group col-12 col-md-6">
                        <label for="tag">Tag</label>
                        <input type="text" class="form-control" required name="tag" placeholder="Ingrese el tag">
                    </div>
                    <div class="form-group col-12 col-md-6">
                        <label for="contenido">Contenido</label>
                        <input type="text" class="form-control" required name="contenido" placeholder="Ingrese el contenido">
                    </div>
                    <div class="center mt-4">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </div>
            </form>
        </section>
    </div>
</body>

</html>