@extends('layouts.layout')

@section('title', 'Gerencia General de Desarrollo Económico')

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

    </style>

    <div class="banner">
        <h1>GERENCIA REGIONAL DE <br> DESARROLLO ECONÓMICO</h1>
    </div>

    <div class="container">
        <div class="mensaje">
            <h2 style="font-weight:bold; color:#1256b0; text-align: center;">ING. MIGUEL ANGEL RIVERA PORRAS</h2>
            <p style="font-weight: bold; font-size: 19px; color: #ff6700; text-align: center;">
                mrivera@regionjunin.gob.pe
            </p>
            <p style="text-align: justify;">
                La Gerencia Regional de Desarrollo Económico está encargada de conducir las acciones específicas regionales en materia de industria, comercio, turismo, artesanía, pesquería, minería, energía e hidrocarburos, pequeña y microempresa y agricultura promoviendo las exportaciones, la promoción de la inversión privada, la productividad y competitividad regional.         
            </p>
            <h3>Funciones</h3>
                <ul style="text-align: justify;">
                    <li>Formular, ejecutar y evaluar, los planes y políticas en materia de desarrollo económico regional.</li>
                    <li>Participar en el Comité de Coordinación de Gerencia convocado por la Gobernación Regional.</li>
                    <li>Ejecutar los recursos financieros, logísticos, bienes y activos, optimizando las capacidades humanas necesarias para la gestión gerencial, con arreglo a la normatividad.</li>
                    <li>Dirigir y formular perfiles en la fase que le corresponda en las acciones específicas regionales que le compete, dentro del marco de los lineamientos de política nacional, regional, Plan de Desarrollo Regional Concertado y del Sistema Nacional de Inversión Pública; identificando los susceptibles de Cooperación Técnica Internacional.</li>
                    <li>Participar en la formulación del Plan de Desarrollo Regional Concertado, Plan Estratégico Institucional, Plan Operativo Institucional, Presupuesto Institucional y  el Programa Anual de Inversiones.</li>
                    <li>Formular, ejecutar y evaluar los planes regionales de Competitividad promoción de las exportaciones y de la Inversión Privada en el ámbito regional.</li>
                    <li>Ejecutar los acuerdos que adopte el Comité de Coordinación Gerencial cuando corresponda en materia sectorial y administrativa de su competencia.</li>
                    <li>Supervisar y evaluar las acciones de las unidades orgánicas a su cargo, para dar cumplimiento a los planes, programas y acuerdos de su competencia.</li>
                    <li>Proponer procedimientos de Simplificación Administrativa que alivien cargas y obligaciones burocráticas, además de programas de modernización de la gestión pública para ser aplicados en las Direcciones Regionales sectoriales a su cargo.</li>
                    <li>Utilizar técnicas estadísticas para establecer, controlar y verificar la capacidad de los procesos y las características de los servicios a su cargo.</li>
                    <li>Proponer procedimientos para la mejora y modernización de la gestión de los servicios que  presta a la sociedad en el ámbito de su competencia.</li>
                    <li>Definir indicadores de gestión que permitan evaluar el avance que se logre en el desempeño de la Unidad Orgánica, así como efectuar su seguimiento y, en función a dichos resultados reevaluar y proponer modificaciones a los objetivos, políticas y estrategias establecidas si fuera necesario.</li>
                    <li>Realizar otras que le sean asignadas.</li>
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
@endsection
