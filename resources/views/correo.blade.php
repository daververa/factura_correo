<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¡Compra Confirmada!</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f9f9f9;
            color: #333;
            margin: 0;
            padding: 20px;
            text-align: center;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 5px;
        }

        .header {
            background-color: #0A0A3C;
            color: #fff;
            padding: 10px;
            border-radius: 5px 5px 0 0;
        }

        .header img {
            max-width: 100px;
            margin-bottom: 10px;
        }

        .header h1 {
            margin: 0;
            font-size: 24px;
        }

        .content {
            margin-top: 20px;
        }

        .check {
            color: #4CAF50;
            font-size: 50px;
            margin-bottom: 20px;
        }

        .packing-animation {
            background: url('https://media.giphy.com/media/2L4bpHvOP4Khn0C2ds/giphy.gif') center/cover no-repeat;
            height: 100px;
            width: 100px;
            margin: 20px auto;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0%, 100% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.1);
            }
        }

        .details {
            margin-bottom: 20px;
        }

        .footer {
            margin-top: 20px;
            font-size: 12px;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #0A0A3C;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #fff;
            color: #0A0A3C;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <img src="{{ asset('logo mobile.png') }}" alt="Logo"/>
            <h1>¡Compra Confirmada!</h1>
        </div>

        <div class="check">&#10004;</div>

        <div class="content">
            <p>¡Bienvenido a la familia JamDay!</p>

            <p>Tu compra ha sido confirmada y estamos emocionados por ello. Aquí tienes algunos detalles:</p>

            <div class="details">
                <p><strong>Cliente:</strong> Cliente Ejemplo S.A.</p>
                <p><strong>Número de Factura:</strong> #123456</p>
                <p><strong>Fecha de Compra:</strong> 29 de enero de 2024</p>
            </div>

            <p>Estamos preparando tu pedido. ¡Pronto estara contigo!</p>

            <div class="packing-animation"></div>

            <div class="footer">
                <p>Atentamente,</p>
                <p>Equipo de Ventas - Empresa XYZ</p>
            </div>
        </div>

        <a class="button" href="#">Ver Detalles de la Compra</a>
    </div>
</body>

</html>

