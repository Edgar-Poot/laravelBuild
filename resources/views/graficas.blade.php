@extends('app')
@section('title', 'Sistema - gráficas')
@push('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<link rel="stylesheet" href="{{asset('css/mantenimiento.css')}}">
@endpush

@section('contenido')
<div class="container">
    <h2 class="mb-3 mt-3 display-5 text-center text-dark">Gráficas</h2>
    <P class="lead text-end">Este es el contenido de gráficas</P>
</div>
@endsection

@push('scripts')
<script src="{{asset('js/mantenimiento.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
@endpush