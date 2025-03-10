@extends('layouts.layout')

@section('title', 'Gobernador Regional')

@section('contenido-principal')

    <style>
        .banner {
            position: relative;
            width: 100%;
            height: 340px;
            background: linear-gradient(to left, rgba(204, 204, 204, 0.4), rgba(0, 14, 139, 0.9)),
                url('images/Gobierno_Regional_Junin.jpg') no-repeat;
            background-size: cover;
            background-position: 50% 35%;
            display: flex;
            align-items: center;
            justify-content: start;
            padding-left: 20px;
        }

        .banner h1 {
            color: #fff;
            font-size: 50px;
            font-weight: bold;
            margin-left: 180px;
            margin-top: 50px;
            font-family: 'Panton Narrow Black Italic', sans-serif;
            text-shadow: 3px 3px 5px rgba(0, 0, 0, 0.5);
        }

        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            max-width: 1000px;
            margin: 50px auto;
            background: #fff;
            padding: 20px;
        }

        .logo img {
            width: 400px;
            height: 550px;
            border-radius: 15px;
        }

        .divider {
            width: 2px;
            background-color: #ccc;
            height: 500px;
            margin: 0 60px;
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
    </style>

    <div class="banner">
        <h1>GOBERNADOR REGIONAL <br>DE JUNIN</h1>
    </div>

    <div class="container">
        <div class="logo">
            <img src="images/GRJpages0019240508a2c57eb717528e1c67157b870e96.png" alt="Huamanga Nuestra Identidad">
        </div>
        <div class="divider"></div>
        <div class="mensaje">
            <h2>MG. ZÓSIMO CÁRDENAS MUJE</h2>
            <p>
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
        </div>
    </div>

@endsection