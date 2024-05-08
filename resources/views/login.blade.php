<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión con Google</title>
    <!-- Agrega cualquier otro estilo o script que necesites -->
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Georgia', serif;
            background-color: #f2f2f2;
        }

        .container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: #ffffff;
            border-radius: 10px;
            padding: 50px 60px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            max-width: 400px; /* Limita el ancho máximo para mejorar la legibilidad */
            width: 90%; /* Ajusta el ancho para que se vea bien en pantallas más pequeñas */
            text-align: center; /* Centra el contenido */
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
            text-decoration: none;
            display: inline-block;
        }

        .button-google:hover {
            background-color: #f1f1f1;
        }

        .button-google img {
            vertical-align: middle;
            margin-right: 10px;
            width: 24px;
            height: auto;
        }

        /* Oculta el texto en pantallas más pequeñas */
        @media screen and (max-width: 360px) {
            .container p {
                display: none;
            }

            .button-google span {
                display: none;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Iniciar sesión con Google</h2>
        <p>Por favor, inicia sesión con tu cuenta de Google para continuar.</p>
        <a href="{{ route('login.google') }}" class="button-google">
            <img src="https://cdn-icons-png.flaticon.com/128/281/281764.png" alt="Google Icon" />
            <span>Iniciar sesión con Google</span> <!-- Texto del botón -->
        </a>
    </div>
    <!-- Agrega cualquier otro contenido o script que necesites -->
</body>
</html>
