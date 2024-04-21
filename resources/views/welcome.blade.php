<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Welcome</h1>
        <a href="{{ route('registro.create') }}">Crear Usuario</a> | <a href="{{ route('delete.index') }}">Eliminar Usuario</a>
    </div>
</body>

</html>
