@extends('layouts.layout')

@section('title', 'GRRNGA')

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
        /*prueba*/
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
        <h1>GERENCIA REGIONAL DE RECURSOS<br>NARUTALES Y GESTIÓN DEL<br>MEDIO AMBIENTE</h1>
    </div>

    <div class="container">
        <div class="mensaje">
            <h2>ING. VLADIMIR JAVIER YAÑEZ RODRIGUEZ</h2>
            <p>
                vyanez@regionjunin.gob.pe
            </p>
            <p>
                La Gerencia Regional de Recursos Naturales y Gestión del Medio Ambiente, está encargada de formular, proponer, ejecutar dirigir, controlar y administrar los planes y políticas en materia de Recursos Naturales y Gestión del Medio Ambiente.
            </p>
            <h3>Funciones</h3>
                <ul>
                    <li>Dirigir la formulación y evaluación del Plan Operativo Institucional de la Gerencia Regional de Recursos Naturales y Gestión del Medio Ambiente.</li>
                    <li>Dirigir la formulación de políticas, planes, actividades en materia de áreas protegidas del medio ambiente y defensa civil.</li>
                    <li>Dirigir la formulación de proyectos regionales para el medio ambiente y defensa civil de acuerdo al Sistema de Inversión Pública e identificar los correspondientes a la Cooperación Técnica Internacional.</li>
                    <li>Participar en la formulación del Plan de Desarrollo Regional Concertado, Presupuesto Institucional y el Programa Anual de Inversiones.</li>
                    <li>Supervisar y evaluar las acciones de la Sub Gerencia de Medio Ambiente y Recursos Naturales y Defensa Civil.</li>
                    <li>Realizar las coordinaciones interinstitucionales con las entidades públicas y privadas en el ámbito nacional, regional y local, orientadas a la gestión ambiental y defensa civil.</li>
                    <li>Conducir la ejecución de los recursos financieros, logísticos, y humanos a cargo de la Gerencia Regional de Recursos Naturales y Gestión de Medio Ambiente.</li>
                    <li>Promover la gestión de financiamiento para la ejecución de los planes, programas y proyectos regionales de medio ambiente y defensa civil.</li>
                    <li>Realizar las coordinaciones interinstitucionales con las entidades públicas y privadas en el ámbito nacional, regional y local, orientadas a la gestión ambiental y defensa civil.</li>
                    <li>Conducir la ejecución de los recursos financieros, logísticos, y humanos a cargo de la Gerencia Regional de Recursos Naturales y Gestión de Medio Ambiente.</li>
                    <li>Promover la gestión de financiamiento para la ejecución de los planes,Promover la gestión de financiamiento para la ejecución de los planes, programas y proyectos regionales de medio ambiente y defensa civil.</li>
                    <li>Efectuar las funciones de Secretario Técnico del Consejo de Coordinación Regional.</li>
                    <li>Utilizar técnicas estadísticas para establecer, controlar y verificar la capacidad de los procesos y las características de los servicios a su cargo.</li>
                    <li>Proponer procedimientos para mejorar la gestión de los servicios que presta a la sociedad o Gobierno Regional.</li>
                    <li>Evaluar los planes y proyectos regionales de medio ambiente y defensa civil.</li>
                    <li>Otras que le encargue el Gerente General Regional. </li>
                    <p>Líneas de autoridad y responsabilidad:</p>
                    <li>Dirige, supervisa y evalúa las Sub Gerencias a su cargo.</li>
                    <li>Coordina, recibe indicaciones y se reporta al Gerente General Regional</li>
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
                <p>“La GRRNGMA es la Autoridad Ambiental Regional posicionada como referente nacional en gestión ambiental y de recursos naturales con compromiso y responsabilidad social para el desarrollo sostenible del departamento de Junín. ”</p>
            </div>
            <img src="images/visionicon.png"style="width: 30%; height:  40%;">
        </div>
        <div class="container1">
            <div class="texto">
                <h2>MISIÓN</h2>
                <p>“Promover y conducir el desarrollo sostenible de la Región Junín mediante la adecuada gestión ambiental. ”</p>  
            </div>
            <img src="images/misionicon.png" style="width: 45%; height:  45%;">
        </div>
    </div>

@endsection
