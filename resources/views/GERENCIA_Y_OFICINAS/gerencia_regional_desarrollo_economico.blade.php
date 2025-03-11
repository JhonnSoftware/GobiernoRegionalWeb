@extends('layouts.layout')

@section('title', 'Gerencia General Regional')

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
        
    </style>

    <div class="banner">
        <h1>GERENCIA REGIONAL DE <br> DESARROLLO ECONÓMICO</h1>
    </div>

    <div class="container">
        <div class="mensaje">
            <h2>ING. MIGUEL ANGEL RIVERA PORRAS</h2>
            <p>
                mrivera@regionjunin.gob.pe
            </p>
            <p>
                La Gerencia Regional de Desarrollo Económico está encargada de conducir las acciones específicas regionales en materia de industria, comercio, turismo, artesanía, pesquería, minería, energía e hidrocarburos, pequeña y microempresa y agricultura promoviendo las exportaciones, la promoción de la inversión privada, la productividad y competitividad regional.         
            </p>
            <h3>Funciones</h3>
                <ul>
                    <li>Formular, ejecutar y evaluar, los planes y políticas en materia de desarrollo económico regional.</li>
                    <li>Participar en el Comité de Coordinación de Gerencia convocado por la Gobernación Regional.</li>
                    <li>Ejecutar los recursos financieros, logísticos, bienes y activos, optimizando las capacidades humanas necesarias para la gestión gerencial, con arreglo a la normatividad.</li>
                    <li>Dirigir y formular perfiles en la fase que le corresponda en las acciones específicas regionales que le compete, dentro del marco de los lineamientos de política nacional, regional, Plan de Desarrollo Regional Concertado y del Sistema Nacional de Inversión Pública; identificando los susceptibles de Cooperación Técnica Internacional.</li>
                    <li>Participar en la formulación del Plan de Desarrollo Regional Concertado, Plan Estratégico Institucional, Plan Operativo Institucional, Presupuesto Institucional y  el Programa Anual de Inversiones.</li>
                    <li>Realizar las coordinaciones interinstitucionales con las entidades públicas y privadas en el ámbito nacional, regional y local, orientadas a la gestión ambiental y defensa civil.</li>
                    <li>Conducir la ejecución de los recursos financieros, logísticos, y humanos a cargo de la Gerencia Regional de Recursos Naturales y Gestión de Medio Ambiente.</li>
                    <li>Promover la gestión de financiamiento para la ejecución de los planes, programas y proyectos regionales de medio ambiente y defensa civil.</li>
                    <li>Evaluar los planes y proyectos regionales de medio ambiente y defensa civil.</li>
                    <li>Otras que le encargue el Gerente General Regional.</li>
                    <p>Líneas de autoridad y responsabilidad:</p>
                    <li>Dirige, supervisa y evalúa las Sub Gerencias a su cargo.</li>
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
@endsection
