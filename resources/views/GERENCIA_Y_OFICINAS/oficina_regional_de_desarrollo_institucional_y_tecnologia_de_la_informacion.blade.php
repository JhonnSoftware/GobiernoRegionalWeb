@extends('layouts.layout')

@section('title', 'Oficina Regional de Desarrollo Institucional y Tecnologia de la Informacion')

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
        <h1>OFICINA REGIONAL DE DESARROLLO<br>INSTITUCIONAL Y TECNOLOGÍA <br>DE LA INFORMACIÓN</h1>
    </div>

    <div class="container">
        <div class="mensaje">
            <h2>ING. EDWIN ERNESTO RAMON QUISPE </h2>
            <p>
                eramon@regionjunin.gob.pe
            </p>
            <p>
                La Oficina Regional de Desarrollo Institucional y Tecnología de la Información del Gobierno Regional Junín es un órgano de asesoramiento responsable de coordinar el proceso permanente y evolutivo de cambio y adecuación sistemática de las funciones, estructuras, cargos, procedimientos y de la tecnología de la información del Gobierno Regional para el logro de sus fines y objetivos.   
            </p>
            <h3>Funciones</h3>
                <ul>
                    <li>Proponer a los órganos de gobierno del Gobierno Regional Junín, estudios, planes y programas orientados al cambio y adecuación sistemática de funciones, estructura, cargos, procedimientos y de la tecnología de información para optimizar los servicios y supervisar el cumplimiento de los mismos.</li>
                    <li>Diseñar, normar, organizar y monitorear los sistemas informáticos del Gobierno Regional.</li>
                    <li>Formular el Programa de Desarrollo Institucional en coordinación con las demás unidades orgánicas del Gobierno Regional.</li>
                    <li>Formular y/o actualizar los documentos de gestión institucional como el Reglamento de Organización y Funciones, Cuadro de Asignación de Personal, Manual de Organización y Funciones, y Texto Único de Procedimientos Administrativos.</li>
                    <li>Asesorar a los órganos del Gobierno Regional en la adopción e implementación de políticas de desarrollo de gestión, modernización, racionalización y simplificación administrativa.</li>
                    <li>Administrar la utilización de los servidores, equipos informáticos, aplicaciones y bases de datos asignados para mantener la operatividad de l os sistemas.</li>
                    <li>Monitorear y mantener actualizada la base de datos de mantenimiento preventivo y correctivo de los equipos de cómputo y de comunicaciones.</li>
                    <li>Realizar y mantener el inventario de equipos de cómputo.</li>
                    <li>Cautelar la seguridad de los sistemas de información en el Gobierno Regional.</li>
                    <li>Administrar la red de data del Gobierno Regional.</li>
                    <li>Proponer normas y aprobar los requerimientos de tecnología de información y de sistemas informáticos en el Gobierno Regional.</li>
                    <li>Establecer procesos y metodologías sobre las etapas de optimización e informatización.</li>
                    <li>Formular el Plan Operativo Informático y su correspondiente Evaluación.</li>
                    <li>Formular el Plan Estratégico de Sistemas de Información.</li>
                    <li>Brindar asesoramiento técnico para la adquisición de equipos informáticos y accesorios.</li>
                    <li>Autorizar la adquisición de equipos informáticos y accesorios.</li>
                    <li>Autorizar la asignación de equipos informáticos a las diferentes unidades orgánicas.</li>
                    <li>Formular normas técnicas de uso y mantenimiento de los equipos informáticos, así como difundir y controlar su correcta aplicación.</li>
                    <li>Administrar el portal electrónico (Internet e Intranet), brindando asistencia técnica a los usuarios.</li>
                    <li>Elaborar normas y herramientas técnicas adecuadas para impulsar y ejecutar la política de Desarrollo Institucional dentro de la organización del Gobierno Regional.</li>
                    <li>Formular y proponer normas y directivas tendientes a optimizar la gestión pública en el ámbito regional.</li>
                    <li>Desarrollar sistemas de información gerencial del Gobierno Regional.</li>
                    <li>Proponer una adecuada racionalización de personal, material y espacios de acuerdo a criterios técnicos y eficacia para un mejor servicio a los usuarios.</li>
                    <li>Desarrollar labores de producción, desarrollo y soporte técnico, a fin de automatizar los procesos de apoyo a la gestión.</li>
                    <li>Desarrollar y diseñar sistemas y normas de seguridad de información</li>
                    <li>Utilizar técnicas estadísticas para establecer, controlar y verificar la capacidad de los procesos y las características de los servicios a su cargo.</li>
                    <li>Proponer procedimientos para mejorar la gestión de los servicios que presta a la sociedad o Gobierno Regional.</li>
                    <li>Proponer procedimientos para modernizar la gestión de su Unidad Orgánica.</li>
                    <li>Definir indicadores de gestión que permitan evaluar el avance que se logre en el desempeño de la Unidad Orgánica, así como efectuar su seguimiento y, en función a dichos resultados reevaluar y proponer modificaciones a los objetivos, políticas y estrategias establecidas si fuera necesario.</li>
                    <li>Las demás funciones que le sean asignadas.</li>
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
                <p>“Hacer del Gobierno Regional Junín una organización al servicio del ciudadano ”</p>
            </div>
            <img src="images/visionicon.png"style="width: 30%; height:  40%;">
        </div>
        <div class="container1">
            <div class="texto">
                <h2>MISIÓN</h2>
                <p>“Ser una oficina transparente y confiable del Gobierno Regional Junín”</p>  
            </div>
            <img src="images/misionicon.png" style="width: 45%; height:  45%;">
        </div>
    </div>

@endsection
