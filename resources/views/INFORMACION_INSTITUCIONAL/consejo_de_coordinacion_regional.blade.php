@extends('layouts.layout')

@section('title', 'Consejo de coordinacion regional')

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
            align-items:center;
            justify-content: center;
            max-width: 1000px;
            margin: 50px auto;
            background: #fff;
            padding: 20px;
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
            color: #e91e63;
        }

        .content {
            width: 70%;
            padding: 20px;
        }

        .content p{
            text-align: justify;
        }

        h1 {
            font-size: 26px;
            color: #222;
        }

        h2 {
            font-size: 20px;
            color: #333;
            margin-top: 20px;
        }

        p {
            font-size: 16px;
            line-height: 1.6;
            color: #555;
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

        .divider {
                    width: 2px;
                    background-color: #ccc;
                    height: 500px;
                    margin: 0 60px;
        }
    </style>
    <div class="banner">
        <h1>CONSEJO DE COORDINACION<br>REGIONAL</h1>
    </div>

    <!-- CONTENIDO PRINCIPAL -->
    <div class="container">
        <main class="content">

            <h1 style="font-weight:bold; color:#1256b0; font-size:35px;">¿QUÉ ES UN CONSEJO DE COORDINACIÓN REGIONAL?</h1>
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
        <div class="divider"></div>
        <aside class="sidebar">
            <h2>Atención al cuidadano</h2>
            <ul>
                <li><a href="http://sisdore.regionjunin.gob.pe:8080/accesoinformacion/">Solicitud electronica de acceso a la
                        informacion publica</a></li>
                <li><a href="https://reclamos.servicios.gob.pe/?institution_id=57">Libro de reclamaciones</a></li>
                <li><a href="https://www.regionjunin.gob.pe/pagina/id/portales_provinciales_de_la_region_junin/">Portales
                        Provinciales</a></li>
                <li><a href="https://www.regionjunin.gob.pe/pagina/id/portales_regionales/">Portales de las Direcciones
                        Regionales</a></li>
            </ul>
        </aside>
    </div>
@endsection
