@extends('layouts.layout')

@section('title', 'Gobernador Regional')

@section('contenido-principal')

    <style>
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.8s ease-out, transform 0.8s ease-out;
        }

        /* Cuando se activa la clase .visible, la animación se ejecuta */
        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .banner {
            position: relative;
            width: 100%;
            height: 340px;
            background: linear-gradient(to left, rgba(56, 56, 56, 0.4), rgba(0, 14, 139, 0.9)),
                url('images/Gobierno_Regional_Junin.jpg') no-repeat;
            background-size: cover;
            background-position: 50% 35%;
            display: flex;
            align-items: center;
            justify-content: center; /* Centra el contenido horizontalmente */
            text-align: center;
        }

        .banner h1 {
            position: relative;
            color: #fff;
            font-size: 50px;
            font-weight: bold;
            margin-top: 50px;
            font-family: 'Panton Narrow Black Italic', sans-serif;
            text-shadow: 3px 3px 5px rgba(0, 0, 0, 0.5);
            font-size: 55px;
        }

        .banner h1::after {
            content: "";
            display: block;
            width: 160px; /* Ancho de la línea */
            height: 5px;  /* Grosor de la línea */
            background-color: #ff6700;
            margin: 10px auto 0; /* Espaciado y centrado */
        }

        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            max-width: 1200px;
            margin: 50px auto;
            background: #fff;
            padding: 80px;
        }

        .divider {
            width: 2px;
            background-color: #ccc;
            height: 500px;
            margin: 0 60px;
        }

        .logo img {
            width: 400px;
            height: 550px;
        }

        .mensaje {
            max-width: 600px;
        }

        .mensaje h2 {
            font-size: 28px;
            margin-bottom: 10px;
        }

        .mensaje p {
            font-size: 16px;
            color: #333;
            line-height: 1.6;
        }
        .image-container {
            position: relative;
            display: inline-block;
            padding: 20px;
            background-color: #fff; /* Puedes cambiar el color si lo deseas */
            border-radius: 10px;
        }

        .image-container img {
            display: block;
            width: 400px; /* Ajusta según tu necesidad */
            height: 550px;
            
        }

        .corner {
            position: absolute;
            width: 80px;
            height: 80px;
            border: 4px solid #ff6600; /* Color de los corners */
        }

        .corner.top-left {
            top: -5px;
            left: -5px;
            border-right: none;
            border-bottom: none;
        }

        .corner.top-right {
            top: -5px;
            right: -5px;
            border-left: none;
            border-bottom: none;
        }

        .corner.bottom-left {
            bottom: -5px;
            left: -5px;
            border-right: none;
            border-top: none;
        }

        .corner.bottom-right {
            bottom: -5px;
            right: -5px;
            border-left: none;
            border-top: none;
        }

    </style>

    <div class="banner fade-in">
        <h1>GOBERNADOR REGIONAL <br>DE JUNIN</h1>
    </div>

    <div class="container fade-in">
        <div class="logo">
            <div class="image-container">
                <img src="images/GRJpages0019240508a2c57eb717528e1c67157b870e96.png" alt="Huamanga Nuestra Identidad">
                <div class="corner top-left"></div>
                <div class="corner bottom-right"></div>
            </div>
        </div>
        <div class="divider"></div>
        <div class="mensaje" style="text-align: justify;">
            <h2 style="font-weight:bold; color:#1256b0; text-align: center;">MG. ZÓSIMO CÁRDENAS MUJE</h2>
            <p style="font-weight: bold; font-size: 19px; color: #ff6700; text-align: center;" >
                zcardenas@regionjunin.gob.pe
            </p>
            <p style="font-weight: bold; font-size: 19px;">
                ¡Bienvenido!
            </p>
            <p>
                Muchas gracias estimado ciudadano por visitar nuestra plataforma digital: Soy Zósimo Cárdenas Muje y te doy la bienvenida al portal institucional donde podrás encontrar información sobre los servicios inspirados en los habitantes de sierra y selva, de manera eficiente y transparente. Gobierno para todos
            </p>
            <p>
                El principal objetivo de nuestra gestión 2023 – 2026 es generar las condiciones para que todos los juninenses puedan ampliar sus capacidades, con educación, salud y empleo. Junto a nuestro equipo técnico, pondremos todo nuestro esfuerzo para lograr que la población acceda a los servicios básicos de calidad como medio fundamental para el logro del desarrollo de capacidades humanas y nos centraremos en reactivar la economía en un proceso sostenido de crecimiento económico regional con alto empleo y oportunidades para generar riqueza y distribución adecuada.
            </p>
            <p>
                Todos los avances y proyecciones, los podrás encontrar perfectamente estructurado en distintas secciones del portal, así que te invito a que navegues por ellas y que disfrutes de los contenidos que pongo a tu disposición.
            </p>
            <p style="font-weight: bold; text-align: right;">
                Atentamente.
            </p>
            <p style="font-weight: bold; font-size: 25px; color: #ff6700; text-align: center;">
                ¡El Cambio lo Hacemos Todos!
            </p>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Seleccionamos todos los elementos que queremos animar
            let elements = document.querySelectorAll('.fade-in');
        
            elements.forEach((element, index) => {
                setTimeout(() => {
                    element.classList.add('visible');
                }, index * 300); // Agrega un pequeño retraso entre elementos
            });
        });
    </script>
@endsection