@extends('layouts.layout')

@section('title', 'Mision y Vision')

@section('contenido-principal')
    <style>
        /* Ocultamos los elementos inicialmente */
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

        .sidebar {
            align-self: flex-start;
            width: 30%;
            background: #fff;
            padding: 20px;
        }

        .sidebar h2 {
            color: #ff6801;
            font-size: 20px;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
        }

        .sidebar ul li {
            padding: 10px 0;
            border-bottom: 1px solid #ddd;
        }

        .sidebar ul li a {
            text-decoration: none;
            color: #333;
            font-size: 14px;
            display: block;
            transition: color 0.3s ease;
        }

        .sidebar ul li a:hover {
            color: #ff6801;
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

        .contenedor-mv {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
            max-width: 1200px;
            margin: 50px auto;
        }

        .container1,
        .container2 {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 10px;
            height: 400px;
            text-align: center;
        }

        .container1 {
            background: #ff6701af;
        }

        .container2 {
            background: #1155b488;
        }
    </style>

    <div class="banner fade-in">
        <h1>MISION Y VISION</h1>
    </div>

    <div class="container fade-in">
        <div class="logo">
            <img src="images/logo_gore.png" style="width: 200px; height: 50%; margin-right:10px;">
        </div>
        <div class="texto" style="margin: 0 20px; width: 500px">
            <h2 style="text-align: center; font-size:25px; font-weight:bold;">GOBIERNO REGIONAL JUNIN</h2>
            <p style="text-align: justify;">El Gobierno Regional Junín Promueve y Conduce el Desarrollo Integral de la Región, con competitividad,
                Enfoque de Cambio Climático y Gestión de Riesgos, Derechos e Igualdad de Oportunidad en el Marco de la
                Modernización del Estado”</p>
        </div>
        <div class="divider"></div>
        <aside class="sidebar">
            <h2>Atención al cuidadano</h2>
            <ul>
                <li><a href="http://sisdore.regionjunin.gob.pe:8080/accesoinformacion/">Solicitud electrónica de acceso a la
                        información pública</a></li>
                <li><a href="https://reclamos.servicios.gob.pe/?institution_id=57">Libro de reclamaciones</a></li>
                <li><a href="https://www.regionjunin.gob.pe/pagina/id/portales_provinciales_de_la_region_junin/">Portales
                        Provinciales</a></li>
                <li><a href="https://www.regionjunin.gob.pe/pagina/id/portales_regionales/">Portales de las Direcciones
                        Regionales</a></li>
            </ul>
        </aside>
    </div>

    <div class="contenedor-mv">
        <div class="container2 fade-in">
            <div class="texto">
                <h2>VISIÓN</h2>
                <p style="text-align: justify; margin: 0 30px;">
                    “Junín al 2030 integrado, moderno, transparente y ordenado, tiene alto nivel de desarrollo humano,
                    ciudadanos emprendedores y exitosos, con acceso pleno a servicios básicos y especializados de calidad,
                    crecimiento económico, industrializado y aprovechamiento sostenible de la biodiversidad y ecosistemas;
                    vigoriza el proceso de grandes cambios y lidera la región centro”</p>
            </div>
            <img src="images/visionicon.png" style="width: 35%; height: 40%;">
        </div>
        <div class="container1">
            <div class="texto">
                <h2>MISIÓN</h2>
                <p style="text-align: justify; margin: 0 30px;">
                    “Promover y Conducir el Desarrollo Integral de la Región Junín, con competitividad, Enfoque de Cambio
                    Climático y Gestión de Riesgos, Derechos e Igualdad de Oportunidad en el Marco de la Modernización del
                    Estado”</p>
            </div>
            <img src="images/misionicon.png" style="width: 45%; height: 45%; margin-top: 30px;">
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
