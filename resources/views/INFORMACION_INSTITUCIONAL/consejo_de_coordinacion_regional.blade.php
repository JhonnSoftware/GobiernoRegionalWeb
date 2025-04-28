@extends('layouts.layout')

@section('title', 'Consejo de coordinacion regional')

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

        .content {
            width: 70%;
            padding: 20px;
        }

        .content p {
            text-align: justify;
        }

        p {
            font-size: 16px;
            line-height: 1.6;
            color: #333;
        }

        .functions {
            list-style: none;
            padding: 0;
        }

        .functions li {
            padding-left: 20px;
            position: relative;
            margin-bottom: 8px;
        }

        .functions li::before {
            content: "•";
            color: #ff6801;
            font-size: 20px;
            position: absolute;
            left: 0;
            top: 0;
        }

        .fa-map-marker-alt {
            color: #ff6801;
            margin-right: 5px;
        }

    </style>
    <div class="banner fade-in">
        <h1>CONSEJO DE COORDINACION<br>REGIONAL</h1>
    </div>

    <!-- CONTENIDO PRINCIPAL -->
    <div class="container fade-in">
        <main class="content">

            <h1 style="font-weight:bold; color:#1256b0; font-size:35px; text-align:center;">¿QUÉ ES UN CONSEJO DE COORDINACIÓN REGIONAL?</h1>
            <p>
                El Consejo de Coordinación Regional, es un Órgano consultivo y de coordinación del Gobierno Regional con las
                Municipalidades. Está integrado por los Alcaldes Provinciales y por los representantes de la sociedad Civil,
                con las funciones y atribuciones que la señala la presente Ley.

                Órgano consultivo y de coordinación del Gobierno Regional con las Municipalidades. Está integrado por los
                Alcaldes Provinciales y por los representantes de la sociedad civil, con las funciones y atribuciones que le
                señala la Ley Orgánica de Gobiernos Regionales (Cuarto párrafo del Art. 11 de la Ley N° 27902, que modifica
                la Ley N° 27867).

                Este órgano debe estar instalada dentro de los primeros sesenta días naturales del año correspondiente
                (vence el 01-03-11), (Art. 2ª ley 28013).

                Para dicha implementación se designó al comité electoral del Consejo de Coordinación Regional mediante
                RESOLUCIÓN EJECUTIVA REGIONAL N° 075 2011-GR-JUNÍN/PR.

                Comisión que mediante Oficio Nº 001-2011-GRJ/CE – CONCOREJ de fecha 22-02-11 informa la elección de los 06
                miembros plenos de la Sociedad Civil, proceso que se efectuó mediante una Convocatoria amplia a través de
                los diversos medios de comunicación y que se inició el 18 de enero de 2011.

                Mediante Acuerdo Regional Nº 064-2011-GRJUNIN/CR de fecha 25-02-11 el Consejo Regional del Gobierno Regional
                Junín, reconoce en calidad de invitados a 9 alcaldes Distritales y a 6 miembros de las Organizaciones de la
                Sociedad Civil.

                El Consejo de Coordinación Regional tiene por función emitir opinión consultiva sobre (Ley Nº 27902, Ley que
                modifica la Ley Orgánica de Gobiernos Regionales Nº 27867):
            </p>

            <ul class="functions">
                <li>El Plan Anual y el Presupuesto Participativo Anual.</li>
                <li>El Plan de Desarrollo Regional Concertado.</li>
                <li>La visión general y los lineamientos estratégicos de los componentes del Plan de Desarrollo Regional
                    Concertado.</li>
                <li>Otras que le encargue o solicite el Consejo Regional.</li>
            </ul>

            <h2 style="font-weight:bold; color:#1256b0; font-size:25px;">QUIENES INTEGRAN EL CCR</h2>
            <p>Está integrado por autoridades regionales, autoridades provinciales y la sociedad civil. ( 60% Autoridades:
                Presidente Regional y Alcaldes Provinciales y 40 % Sociedad Civil ). Compuesto de la siguiente manera:</p>
        </main>
        <div class="divider" style="width: 2px; background-color: #ccc; height: 800px; margin: 0 60px;"></div>
        <aside class="sidebar">
            <h2>Atención al cuidadano</h2>
            <ul>
                <li><a href="http://sisdore.regionjunin.gob.pe:8080/accesoinformacion/">Solicitud electronica de acceso a la
                        informacion publica</a></li>
                <li><a href="https://reclamos.servicios.gob.pe/?institution_id=57">Libro de reclamaciones</a></li>
                <li><a href="{{ url('portales_provinciales') }}">Portales
                    Provinciales</a></li>
                <li><a href="{{ url('portales_direcciones_regionales') }}">Portales de las Direcciones
                        Regionales</a></li>
            </ul>
        </aside>
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
