@extends('layouts.layout')

@section('title', 'Oficina Regional de Comunicaciones')

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
            color: #ff6700;
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
            color: #ff6700;
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
            margin: 0 10px;
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
            gap: 10px; /* Espaciado entre Misión y Visión */
            max-width: 1000px;
            margin: 50px auto;
        }
        .container1, .container2 {
            flex: 1; /* Ambos ocupan el mismo ancho */
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 10px;
            height: 400px;
            text-align: center;
        }
        .container1 {
            background: #ff660047;
        }
        .container2 {
            background: #12b3605f;
        }
    </style>

    <div class="banner">
        <h1>OFICINA REGIONAL DE<br>COMUNICACIONES</h1>
    </div>

    <div class="container">
        <div class="mensaje">
            <h2>LIC. FLOR BEHTSI ASPARREN BROCOS</h2>
            <p>
                fasparren@regionjunin.gob.pe
            </p>
            <p>
                La Oficina Regional de Comunicaciones está a cargo de un Director Regional, quien es designado por el Presidente Regional a propuesta del Gerente General Regional.  
            </p>
            <h3>Funciones</h3>
                <ul>
                    <li>Proponer a la Presidencia Regional la política de imagen institucional y de relaciones públicas y supervisar su ejecución.</li>
                    <li>Normar y dirigir el Sistema Regional de Información y desarrollar las actividades de comunicación y difusión relacionadas con las acciones del Gobierno Regional Junín.</li>
                    <li>Diseñar estrategias que contribuyan a fortalecer la imagen del Gobierno Regional ante la opinión pública.</li>
                    <li>Proporcionar a las unidades orgánicas del Gobierno Regional la información y análisis sobre las noticias y tendencia diarias de la opinión pública regional, nacional e internacional.</li>
                    <li>Mantener debidamente informada a la opinión pública sobre la política, objetivos, programas, proyectos, actividades más importantes y logros del Gobierno Regional Junín a través de los diferentes medios de comunicación social.</li>
                    <li>Atender visitantes (personas naturales) y/o Instituciones Nacionales y Extranjeras interesadas en las actividades del Gobierno Regional Junín, proporcionándoles la información necesaria, previa coordinación con la unidad orgánica correspondiente, en los casos que sea meritorio.</li>
                    <li>Establecer y mantener relaciones permanentes con todos los medios de comunicación Regional y Nacional.</li>
                    <li>Ejecutar y apoyar programas de divulgación hacia el interior de la institución para mejorar los resultados de la gestión.</li>
                    <li>Controlar, aprobar y supervisar todo tipo de impresos, campañas, avisos y spots publicitarios que se realicen por encargo del Gobierno Regional.</li>
                    <li>Transmitir comunicaciones Oficiales autorizadas por la Presidencia Regional y/o la Gerencia General Regional del Gobierno Regional Junín.</li>
                    <li>Promover, proponer y dirigir la organización de las ceremonias cívicas patrióticas, efemérides y otros eventos que realice el Gobierno Regional Junín.</li>
                    <li>Proponer al Presidente Regional las líneas de acción a seguir en materia de comunicaciones e informaciones.</li>
                    <li>Proveer información que el Gobierno Regional genere o tenga en su poder a las personas naturales o jurídicas que lo soliciten al amparo de la Ley de Transparencia y Acceso a la información Pública, Ley Nº 27806, modificada con la Ley Nº 27927.</li>
                    <li>Implementar mecanismos que faciliten el acceso de la ciudadanía a la información pública que posea o produzca el Gobierno Regional.</li>
                    <li>Utilizar técnicas estadísticas para establecer, controlar y verificar la capacidad de los procesos y las características de los servicios a su cargo.</li>
                    <li>Proponer procedimientos para mejorar la gestión de los servicios que presta a la sociedad o Gobierno Regional.</li>
                    <li>Proponer procedimientos para modernizar la gestión de su Unidad Orgánica</li>
                    <li>Definir indicadores de gestión que permitan evaluar el avance que se logre en el desempeño de la Unidad Orgánica, así como efectuar su seguimiento y, en función a dichos resultados reevaluar y proponer modificaciones a los objetivos, políticas y estrategias establecidas si fuera necesario.</li>
                    <li>Las demás que le sean asignadas.</li>
                    
        </div>
        <div class="divider"></div>
        <aside class="sidebar">
            <h2>Atención al cuidadano</h2>
            <ul>
                <li><a href="http://sisdore.regionjunin.gob.pe:8080/accesoinformacion/"> <i class="ri-file-list-3-line"></i> Solicitud electronica de acceso a la informacion publica</a></li>
                <li><a href="https://reclamos.servicios.gob.pe/?institution_id=57"> <i class="ri-contacts-book-2-line"></i> Libro de reclamaciones</a></li>
                <li><a href="https://www.regionjunin.gob.pe/pagina/id/portales_provinciales_de_la_region_junin/"> <i class="ri-home-6-fill"></i> Portales Provinciales</a></li>
                <li><a href="https://www.regionjunin.gob.pe/pagina/id/portales_regionales/"> <i class="ri-building-2-fill"></i> Portales de las Direcciones Regionales</a></li>
            </ul>
        </aside>
        
    </div>
    <div class="contenedor-mv">
        <div class="container2">
            <div class="texto">
                <h2>VISIÓN</h2>
                <p>“Aspiramos ser la mejor oficina regional de comunicaciones a nivel regional que este a la altura de los requerimientos más exigentes de los ciudadanos y unidades orgánicas para manejar una buena comunicación y entendimiento. ”</p>
            </div>
            <img src="images/visionicon.png"style="width: 30%; height:  40%;">
        </div>
        <div class="container1">
            <div class="texto">
                <h2>MISIÓN</h2>
                <p>“Nuestro trabajo en comunicaciones facilitara el logro de los objetivos de las unidades orgánicas para mantener debidamente informa a la ciudadanía además generar espacios a través de programas, proyectos y actividades para difundir el avance de la gestión regional.”</p>  
            </div>
            <img src="images/misionicon.png" style="width: 45%; height:  45%;">
        </div>
    </div>

@endsection
