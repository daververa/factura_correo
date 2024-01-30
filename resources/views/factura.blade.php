<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factura de Venta - Empresa XYZ</title>
    <style>
        body {
            width: 210mm;
            height: 297mm;
            margin: 0 auto;
            background: #f9f9f9;
            font-family: 'Arial', sans-serif;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
        }

        .header,
        .footer {
            background-color: #0A0A3C;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        .header h1 {
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .header h1 img {
            max-width: 100px;
            margin-right: 20px;
        }

        .content {
            margin-top: 20px;
        }

        .company-info {
            display: flex;
            justify-content: space-between;
            border-bottom: 2px solid #ccc;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        .company-info div {
            width: 45%;
        }

        .details {
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .total-row td {
            border-top: 2px solid #333;
        }

        .footer p {
            margin: 0;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>
                <img src="{{ asset('logo mobile.png') }}" alt="Descripción de la imagen"/>
                Factura de Venta
            </h1>
        </div>

        <div class="company-info">
            <div>
                <p><strong>Empresa XYZ</strong></p>
                <p>Dirección: Av. Principal 123, Ciudad ABC</p>
                <p>Teléfono: (123) 456-7890</p>
                <p>Email: info@empresaxyz.com</p>
            </div>
            <div>
                <p><strong>Fecha:</strong> 29 de enero de 2024</p>
                <p><strong>Número de Factura:</strong> #123456</p>
            </div>
        </div>

        <div class="content">
            <div class="details">
                <p><strong>Cliente:</strong> Cliente Ejemplo S.A.</p>
                <p><strong>Número de Identificación:</strong> 123456789</p>
                <p><strong>Teléfono:</strong> (987) 654-3210</p>
                <p><strong>Dirección:</strong> Calle 456, Ciudad XYZ</p>
            </div>

            <table>
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Precio Unitario</th>
                        <th>Talla</th>
                        <th>Cantidad</th>
                        <th>Imparte</th>
                        <th>Total por Producto</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Camisa Premium</td>
                        <td>$150,000.00</td>
                        <td>M</td>
                        <td>2</td>
                        <td>Marca A</td>
                        <td>$300,000.00</td>
                    </tr>
                    <tr>
                        <td>Zapatos Elegantes</td>
                        <td>$200,000.00</td>
                        <td>42</td>
                        <td>1</td>
                        <td>Marca B</td>
                        <td>$200,000.00</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="5">Subtotal</td>
                        <td>$500,000.00</td>
                    </tr>
                    <tr>
                        <td colspan="5">IVA (19%)</td>
                        <td>$95,000.00</td>
                    </tr>
                    <tr>
                        <td colspan="5">Total</td>
                        <td>$595,000.00</td>
                    </tr>
                </tfoot>
            </table>

            <div class="details">
                <p><strong>Total en Letras:</strong> Quinientos noventa y cinco mil pesos</p>
            </div>

            <div class="details">
                <p><strong>Detalles de Envío</strong></p>
                <p><strong>Nombre del destinatario:</strong> Cliente Ejemplo S.A.</p>
                <p><strong>Dirección de Envío:</strong> Calle 456, Ciudad XYZ</p>
                <p><strong>Instrucciones para la entrega:</strong> Dejar en recepción</p>
                <p><strong>Teléfono de Contacto:</strong> (789) 123-4567</p>
                <p><strong>Método de Pago:</strong> Tarjeta de Crédito</p>
                <p><strong>Total de Ítems:</strong> 3</p>
            </div>

        </div>

        <div class="footer">
            <p>¡Gracias por tu compra!</p>
        </div>
    </div>
</body>

</html>

