<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmación de Contacto</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            padding: 20px 0;
            background-color: #10aef3;
            color: #ffffff;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        .header img {
            max-width: 180px;
            height: auto;
            margin-bottom: 10px;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
        }
        .content {
            padding: 20px;
        }
        .content p {
            font-size: 16px;
            line-height: 1.6;
            color: #44434b;
        }
        .content a {
            color: #d93183;
            text-decoration: none;
        }
        .footer {
            text-align: center;
            padding: 20px 0;
            background-color: #10aef3;
            color: #cac9d1;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="https://toditititas.org/assets/images/resources/logoBlanco.png" alt="Logo de la Fundación">
            <h1>Fundación Toditititas</h1>
        </div>
        <div class="content">
            <p>Hola {{ $name }},</p>
            <p>Gracias por ponerte en contacto con nosotros. Hemos recibido tu mensaje y pronto nos pondremos en contacto contigo.</p>
            <p>Si tienes alguna pregunta adicional, no dudes en <a href="mailto:info@toditititas.org">contactarnos</a>.</p>
            <p>Gracias,<br>El equipo de la Fundación Toditititas</p>
        </div>
        <div class="footer">
            <p>¿Quieres apoyar nuestra misión? <a href="https://toditititas.org/donar" class="donation-link">
                <i class="icon-donation"></i>Haz una donación aquí
            </a></p>
        </div>
    </div>
</body>
</html>
