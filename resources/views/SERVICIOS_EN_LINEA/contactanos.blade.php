@extends('layouts.layout')

@section('title', 'Contactanos')

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

        .sidebar {
            align-self: flex-start;
            width: 30%;
            background: #fff;
            padding: 20px;
        }

        .sidebar h2 {
            color: #e91e63;
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

        .content p {
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

        .fa-map-marker-alt {
            color: #e91e63;
            margin-right: 5px;
        }

        .divider {
            width: 2px;
            background-color: #ccc;
            height: 500px;
            margin: 0 60px;
        }

        .map-container iframe {
            border-radius: 15px;
        }
    </style>
    <div class="banner">
        <h1>CONTACTANOS</h1>
    </div>

    <!-- CONTENIDO PRINCIPAL -->
    <div class="container">
        <main class="content">

            <h1>Gobierno Regional de Junín</h1>
            <p>
                Dirección: Jr. Loreto Nº 363, Huancayo <br>
                RUC: 20486021692 <br>
                Horario de Atención: <br>
                Lunes a viernes de 08:00 a 13:00 horas y de 14:30 a 17:30 hora
            </p>
            <br>
            <p>
                Oficina de enlace en Lima: Jirón Gregorio Paredes Nª 316 - Lima Cercado;<br>
                Coordinadora: Esther Cecilia Benites Barreto<br>
                Correo: cbenites@regionjunin.gob.pe<br>
                Telefono: (01) 3723753<br>
                Horario de Atención:<br>
                Lunes a viernes de 08:00 a 13:00 horas y de 14:30 a 17:30 horas
            </p>
            <br>
            <p>Mesa de partes: mesadepartesvirtual@regionjunin.gob.pe</p>

            <div class="map-container">
                <iframe width="100%" height="400" frameborder="0" style="border:0" allowfullscreen loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.445351155178!2d-75.209673285607!3d-12.067256791450032!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x910e965d2279b0af%3A0xa7bfe3c8a85a1b7a!2sGobierno%20Regional%20de%20Jun%C3%ADn!5e0!3m2!1ses-419!2spe!4v1673642332105!5m2!1ses-419!2spe">
                </iframe>
            </div>


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
