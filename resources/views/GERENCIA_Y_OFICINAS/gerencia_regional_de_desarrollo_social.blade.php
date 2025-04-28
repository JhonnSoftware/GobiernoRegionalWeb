@extends('layouts.layout')

@section('title', 'Gerencia Regional de Desarrollo Social')

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

        .divider {
            width: 2px;
            background-color: #ccc;
            height: 500px;
            margin: 0 60px;
        }

        /*prueba*/
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
        <h1>GERENCIA REGIONAL DE <br>DESARROLLO SOCIAL</h1>
    </div>

    <div class="container fade-in">
        <div class="mensaje">
            <h2 style="font-weight:bold; color:#1256b0; text-align: center;">LIC. LISETTE RUIZ RIVERA</h2>
            <p style="font-weight: bold; font-size: 19px; color: #ff6700; text-align: center;">
                lruiz@regionjunin.gob.pe
            </p>
            <p>
                La Gerencia Regional de Desarrollo Social está encargada de conducir las acciones específicas regionales en
                materia de educación, cultura, ciencia y tecnología, recreación, deportes, salud, vivienda, trabajo,
                promoción del empleo, pequeña y microempresa, población, saneamiento, desarrollo social, e igualdad de
                oportunidades. </p>
            <h3>Funciones</h3>
            <ul>
                <li>Planificar, dirigir, coordinar, supervisar y evaluar las actividades de la Gerencia Regional de
                    Desarrollo Social.</li>
                <li>Dirigir, supervisar y evaluar el cumplimiento de las metas y objetivos de las Sub Gerencias y Sectores a
                    su cargo, así como los planes y programas de la Gerencia Regional de Desarrollo Social.</li>
                <li>Conducir la formulación y evaluación del Plan Operativo Institucional de la Gerencia Regional de
                    Desarrollo Institucional.</li>
                <li>Dirigir y evaluar los planes y programas orientadas a la prevención de la violencia política, familiar y
                    sexual; así mismo el apoyo de los niños, jóvenes, adolescentes mujeres, personas con discapacidad,
                    adultos mayores y sectores sociales en situación de riesgo y vulnerabilidad.</li>
                <li>Conducir la elaboración de planes y proyectos de desarrollo social.</li>
                <li>Proponer normas y procedimientos para mejorar la atención de los servicios que presta la Gerencia
                    Regional de Desarrollo Social.</li>
                <li>Conducir la ejecución de los recursos financieros, logísticos, y humanos a cargo de la Gerencia Regional
                    de Recursos Naturales y Gestión de Medio Ambiente.</li>
                <li>Presentar y brindar información oportuna sobre los proyectos y programas que desarrolla la Gerencia.
                </li>
                <li>Presentar informes periodísticos a la Gerencia General Regional, sobre la Gestión que se desarrolla.
                </li>
                <li>Otras que le encargue el Gerente General Regional</li>
                <li>Participar en la formulación del Plan de Desarrollo Regional Concertado, Presupuesto Institucional,
                    Programa Anual de Inversiones y Programa de Competitividad.</li>
                <p>Líneas de autoridad y responsabilidad:</p>
                <li>Tiene autoridad sobre los Sub Gerentes.</li>
                <li>Coordina, recibe indicaciones y se reporta al Gerente General Regional.</li>
            </ul>
        </div>
        <div class="divider" style="width: 2px; background-color: #ccc; height: 800px; margin: 0 60px;"></div>
        <aside class="sidebar">
            <h2>Atención al cuidadano</h2>
            <ul>
                <li><a href="http://sisdore.regionjunin.gob.pe:8080/accesoinformacion/"> <i class="ri-file-list-3-line"></i>
                        Solicitud electronica de acceso a la informacion publica</a></li>
                <li><a href="https://reclamos.servicios.gob.pe/?institution_id=57"> <i class="ri-contacts-book-2-line"></i>
                        Libro de reclamaciones</a></li>
                <li><a href="{{ url('portales_provinciales') }}">Portales
                            Provinciales</a></li>
                <li><a href="{{ url('portales_direcciones_regionales') }}">Portales de las Direcciones
                            Regionales</a></li>
            </ul>
        </aside>

    </div>
    <div class="contenedor-mv fade-in">
        <div class="container2">
            <div class="texto">
                <h2>VISIÓN</h2>
                <p style="text-align: justify; margin: 0 30px;">“Ente de conducción de desarrollo integral, que lidera el desarrollo humano bajo una buena planificación
                    concertada para lograr una mejor calidad de vida en la población.”</p>
            </div>
            <img src="images/visionicon.png"style="width: 30%; height:  40%;">
        </div>
        <div class="container1">
            <div class="texto">
                <h2>MISIÓN</h2>
                <p style="text-align: justify; margin: 0 30px;">“Organizar y conducir la Gestión Pública Regional en el Eje Social, fortaleciendo las organizaciones
                    públicas, privadas y las organizaciones sociales, para lograr estándares de calidad de vida en la
                    población.”</p>
            </div>
            <img src="images/misionicon.png" style="width: 45%; height:  45%;">
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
