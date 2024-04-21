<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Usuario</title>
</head>
<body>
    <h1>Eliminar Usuario</h1>
    
    <form action="{{ route('delete.destroy') }}" method="POST">
        @csrf
        @method('DELETE')
        <label for="id">ID del Usuario:</label><br>
        <input type="text" id="id" name="id" required><br><br>
        <button type="submit">Eliminar</button>
    </form>
</body>
</html>
