<!DOCTYPE html>
<html>
<head>
    <title>Crear Recurso</title>
</head>
<body>
    <h1>Crear Nuevo Recurso</h1>
    <form action="{{ route('recursos.store') }}" method="POST">
        @csrf
        <label>Nombre:</label>
        <input type="text" name="nombre" required>
        <br>
        <label>Descripción:</label>
        <input type="text" name="descripcion" required>
        <br>
        <button type="submit">Guardar</button>
    </form>
    <a href="{{ route('recursos.index') }}">Volver</a>
</body>
</html>