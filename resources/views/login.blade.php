<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión con Google</title>
    <!-- Agrega cualquier otro estilo o script que necesites -->
    <style>
        .container {
            text-align: center;
            margin-top: 50px;
        }

        .button-google {
            background-color: #ffffff;
            color: #757575;
            border: 1px solid #757575;
            border-radius: 4px;
            font-size: 16px;
            font-weight: bold;
            padding: 10px 20px;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none; /* Agregado para que el enlace no tenga subrayado */
            display: inline-block; /* Agregado para que el enlace se comporte como un botón */
        }

        .button-google:hover {
            background-color: #f1f1f1;
        }

        .button-google img {
            vertical-align: middle;
            margin-right: 10px;
            width: 24px; /* Ajusta el ancho de la imagen según sea necesario */
            height: auto; /* Mantén la proporción de la imagen */
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Iniciar sesión con Google</h2>
        <p>Por favor, inicia sesión con tu cuenta de Google para continuar.</p>
        <a href="{{ route('login.google') }}" class="button-google">
            <img src="https://cdn-icons-png.flaticon.com/128/281/281764.png" alt="Google Icon" />
            Iniciar sesión con Google
        </a>
        
        
    </div>
    <!-- Agrega cualquier otro contenido o script que necesites -->
</body>
</html>
