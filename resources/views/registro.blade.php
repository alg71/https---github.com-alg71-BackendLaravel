<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
</head>

<body>
    <h1>Registro de Usuario</h1>
    <form action="{{ route('registro.store') }}" method="POST">
        @csrf
        <label for="name">Nombre:</label><br>
        <input type="text" id="name" name="name" required><br>
        
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br>
        
        <label for="password">Contraseña:</label><br>
        <input type="password" id="password" name="password" required><br>
        
        <label for="password_confirmation">Confirmar Contraseña:</label><br>
        <input type="password" id="password_confirmation" name="password_confirmation" required><br><br>
        
        <button type="submit">Registrar</button>
    </form>
</body>

</html>
