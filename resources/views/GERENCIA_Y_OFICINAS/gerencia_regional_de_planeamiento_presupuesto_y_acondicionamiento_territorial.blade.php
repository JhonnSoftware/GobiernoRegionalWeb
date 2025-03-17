@extends('layouts.layout')

@section('title', 'Gerencia General de Planeamiento Presupuesto y Acondicionamiento Territorial')

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

    <div class="banner">
        <h1>GERENCIA REGIONAL DE PLANEAMIENTO<br>PRESUPUESTO Y ACONDICIONAMIENTO<br>TERRITORIAL</h1>
    </div>

    <div class="container">
        <div class="mensaje">
            <h2 style="font-weight:bold; color:#1256b0; text-align: center;">MAG. PERCY DAVID TIZA FELIX</h2>
            <p style="font-weight: bold; font-size: 19px; color: #ff6700; text-align: center;">
                ptiza@regionjunin.gob.pe
            </p>
            <p>
                La Gerencia Regional de Planeamiento, Presupuesto y Acondicionamiento Territorial, es el órgano encargado de ejercer funciones específicas sectoriales en materia de planificación estratégica prospectiva, inversiones, presupuesto, tributación y ordenamiento territorial, administración y adjudicación de terrenos de propiedad del Estado. Asimismo, se encarga de contribuir a un ordenado y sistemático proceso de gestión del Gobierno Regional, mediante la formulación, seguimiento, evaluación y control de los planes de desarrollo, programas y presupuesto del Gobierno Regional. 
            </p>
            <h3>Funciones</h3>
                <ul>
                    <li>Planear, conducir, coordinar y supervisar la formulación, seguimiento y evaluación de los sistemas de planificación estratégica prospectiva e inversión pública del Gobierno Regional Junín, así como de presupuesto, créditos, tributos, administración y ordenamiento territorial.</li>
                    <li>Conducir y supervisar los procesos de formulación y evaluación de Planes de Desarrollo Regional Concertado, Plan Anual de Presupuesto Participativo Anual, entre otros.</li>
                    <li>Conducir y evaluar el proceso del Presupuesto del Pliego.</li>
                    <li>Conducir el Sistema de Inversión Pública del Gobierno Regional Junín.</li>
                    <li>Normar, conducir, coordinar y evaluar el proceso de organización, funciones, sistemas y procedimientos del Pliego.</li>
                    <li>Proponer, normar, conducir, coordinar y evaluar los tributos en el Gobierno Regional Junín.</li>
                    <li>Elaborar el Plan de Desarrollo Regional Concertado para aprobación del Consejo Regional.</li>
                    <li>Dirigir y coordinar la elaboración del Plan de Competitividad Regional.</li>
                    <li>Promover la formulación de los planes de ordenamiento territorial en el ámbito de su jurisdicción regional; así como tramitar los expedientes sobre demarcación territorial.</li>
                    <li>Participar en las tareas de programación del desarrollo que se deriven de los convenios con el Gobierno Regional Junín.</li>
                    <li>Proponer y supervisar el Plan Anual y el Presupuesto Participativo Anual, así como el Programa de Desarrollo Institucional.</li>
                    <li>Efectuar las funciones de Secretario Técnico del Consejo de Coordinación Regional.</li>
                    <li>Utilizar técnicas estadísticas para establecer, controlar y verificar la capacidad de los procesos y las características de los servicios a su cargo.</li>
                    <li>Proponer procedimientos para mejorar la gestión de los servicios que presta a la sociedad o Gobierno Regional.</li>
                    <li>Proponer procedimientos para modernizar la gestión de su Unidad Orgánica.</li>
                    <li>Definir indicadores de gestión que permitan evaluar el avance que se logre en el desempeño de la Unidad Orgánica, así como efectuar su seguimiento y, en función a dichos resultados reevaluar y proponer modificaciones a los objetivos, políticas y estrategias establecidas si fuera necesario.</li>
                    <li>Otras funciones que le sean asignadas. </li>
                    <p>La Gerencia Regional de Planeamiento, Presupuesto y Acondicionamiento Territorial, para el cumplimiento de sus funciones se organiza y está integrada por las Unidades Orgánicas siguientes::</p>
                    <li>Sub Gerencia de Planeamiento y Cooperación Técnica.</li>
                    <li>Sub Gerencia de Presupuesto y Tributación.</li>
                    <li>Sub Gerencia de Acondicionamiento Territorial.</li>
                    <li>Sub Gerencia de Inversión Pública.</li>
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
                <p style="text-align: justify; margin: 0 30px;">“Gerencia integrada, moderna y proactiva, conformada con personal calificado, con principios y valores sólidos, con vocación de servicio y comprometidos con el desarrollo regional.”</p>
            </div>
            <img src="images/visionicon.png" style="width: 35%; height: 40%;">
        </div>
        <div class="container1">
            <div class="texto">
                <h2>MISIÓN</h2>
                <p style="text-align: justify; margin: 0 30px;">“Se encarga de contribuir a un ordenado y sistemático proceso de gestión del Gobierno Regional, mediante la formulación, seguimiento, evaluación y control de los planes de desarrollo, programas y presupuesto del Gobierno Regional.”</p>  
            </div>
            <img src="images/misionicon.png" style="width: 45%; height: 45%; ">
        </div>
    </div>
@endsection
