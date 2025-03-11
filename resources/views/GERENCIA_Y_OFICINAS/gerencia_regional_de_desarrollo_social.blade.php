@extends('layouts.layout')

@section('title', 'Gerencia Regional de Desarrollo Social')

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
        <h1>GERENCIA REGIONAL DE <br>DESARROLLO SOCIAL</h1>
    </div>

    <div class="container">
        <div class="mensaje">
            <h2>LIC. LISETTE RUIZ RIVERA</h2>
            <p>
                lruiz@regionjunin.gob.pe
            </p>
            <p>
                La Gerencia Regional de Desarrollo Social está encargada de conducir las acciones específicas regionales en materia de educación, cultura, ciencia y tecnología, recreación, deportes, salud, vivienda, trabajo, promoción del empleo, pequeña y microempresa, población, saneamiento, desarrollo social, e igualdad de oportunidades.             </p>
            <h3>Funciones</h3>
                <ul>
                    <li>Planificar, dirigir, coordinar, supervisar y evaluar las actividades de la Gerencia Regional de Desarrollo Social.</li>
                    <li>Dirigir, supervisar y evaluar el cumplimiento de las metas y objetivos de las Sub Gerencias y Sectores a su cargo, así como los planes y programas de la Gerencia Regional de Desarrollo Social.</li>
                    <li>Conducir la formulación y evaluación del Plan Operativo Institucional de la Gerencia Regional de Desarrollo Institucional.</li>
                    <li>Dirigir y evaluar los planes y programas orientadas a la prevención de la violencia política, familiar y sexual; así mismo el apoyo de los niños, jóvenes, adolescentes mujeres, personas con discapacidad, adultos mayores y sectores sociales en situación de riesgo y vulnerabilidad.</li>
                    <li>Conducir la elaboración de planes y proyectos de desarrollo social.</li>
                    <li>Proponer normas y procedimientos para mejorar la atención de los servicios que presta la Gerencia Regional de Desarrollo Social.</li>
                    <li>Conducir la ejecución de los recursos financieros, logísticos, y humanos a cargo de la Gerencia Regional de Recursos Naturales y Gestión de Medio Ambiente.</li>
                    <li>Presentar y brindar información oportuna sobre los proyectos y programas que desarrolla la Gerencia.</li>
                    <li>Presentar informes periodísticos a la Gerencia General Regional, sobre la Gestión que se desarrolla.</li>
                    <li>Otras que le encargue el Gerente General Regional</li>
                    <li>Participar en la formulación del Plan de Desarrollo Regional Concertado, Presupuesto Institucional, Programa Anual de Inversiones y Programa de Competitividad.</li>
                    <p>Líneas de autoridad y responsabilidad:</p>
                    <li>Tiene autoridad sobre los Sub Gerentes.</li>
                    <li>Coordina, recibe indicaciones y se reporta al Gerente General Regional.</li>
                </ul>    
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
                <p>“Ente de conducción de desarrollo integral, que lidera el desarrollo humano bajo una buena planificación concertada para lograr una mejor calidad de vida en la población.”</p>
            </div>
            <img src="images/visionicon.png"style="width: 30%; height:  40%;">
        </div>
        <div class="container1">
            <div class="texto">
                <h2>MISIÓN</h2>
                <p>“Organizar y conducir la Gestión Pública Regional en el Eje Social, fortaleciendo las organizaciones públicas, privadas y las organizaciones sociales, para lograr estándares de calidad de vida en la población.”</p>  
            </div>
            <img src="images/misionicon.png" style="width: 45%; height:  45%;">
        </div>
    </div>

@endsection
