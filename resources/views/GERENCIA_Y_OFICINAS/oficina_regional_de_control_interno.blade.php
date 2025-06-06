@extends('layouts.layout')

@section('title', 'Oficina Regional de Control Interno')

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
        <h1>OFICINA REGIONAL DE<br>CONTROL INTERNO</h1>
    </div>

    <div class="container fade-in">
        <div class="mensaje">
            <h2 style="font-weight:bold; color:#1256b0; text-align: center;">ING. GUILLERMO TOMÁS URIBE CÓRDOVA </h2>
            <p style="font-weight: bold; font-size: 19px; color: #ff6700; text-align: center;">
                guribe@regionjunin.gob.pe
            </p>
            <p>
                El Órgano de Control del Gobierno Regional, lo constituye la Oficina Regional de Control Interno, encargada de programar, ejecutar y evaluar las actividades de control posterior de la gestión administrativa, técnica y financiera del Gobierno Regional, de conformidad con las normas del Sistema Nacional de Control. La Oficina Regional de Control Institucional está a cargo de un funcionario seleccionado y nombrado por la Contraloría General de la República, mediante concurso público de méritos; depende funcional y orgánicamente de la Contraloría General de la República.  
            </p>
            <h3>Funciones</h3>
                <ul>
                    <li>Planificar, dirigir, coordinar, supervisar y evaluar las actividades de la Oficina General Regional de Control Interno del Gobierno Regional Junín, formulando el Plan de Control Anual; de acuerdo a la Directiva de Contraloría General de la República.</li>
                    <li>Designar comisiones de acciones de control y concertar la programación del personal profesional para mantener la oportunidad en el desempeño de la auditoria.</li>
                    <li>Identificar área críticas que ameriten examinarse, teniendo en cuenta, los criterios de oportunidad, materialidad, costo beneficio y notación.</li>
                    <li>Revisar con el auditor responsable del equipo de trabajo de una acción de control las pruebas documentadas, evidenciando a efectos de la formulación de los hallazgos de auditoría (Auditoria financiera, auditoría de gestión, exámenes especiales, informes de control interno).</li>
                    <li>Supervisar y observar el cumplimiento de las normas técnicas y administrativas de los diferentes sistemas, realizando las recomendaciones y sugerencias a fin de evitar que se cometan datos irregulares o contrarios a las normas.</li>
                    <li>Supervisar, conducir y aprobar los memorándums de planeamiento y programas de auditoría.</li>
                    <li>Atender y ejecutar acciones de control por encargo de la Contraloría General en el ámbito del Gobierno Regional Junín a sectores, Municipalidades Provinciales, Distritales y otras que se encargan.</li>
                    <li>Supervisar y evaluar la información sobre el seguimiento de medidas correctivas (Implementación, observaciones y recomendaciones contenidas en los informes de acciones de control).</li>
                    <li>Supervisar la información sobre seguimiento de procesos judiciales y administrativos.</li>
                    <li>Aprobar los informes resultantes de las acciones de control y elevar al Titular del Gobierno Regional, Contraloría General de República, Presidencia del Consejo de Ministros, Control Interno de los Ministerios del sector que corresponda y otras instancias.</li>
                    <li>Elaborar la información mensual, trimestral de acuerdo a las directivas de Contraloría General de República como (Formulación de Plan de Control, evaluación del Plan de Control, informes SAGU, seguimiento de procesos administrativos, procesos judiciales, información sobre cumplimiento de medidas de austeridad).</li>
                    <li>Atender las citaciones que hace el Ministerio Publico, Procuraduría y Poder Judicial.</li>
                    <li>Otras que le encargue el Presidente Regional y Órgano Superior de Control.
                    </li>
                
                </ul>    
        </div>
        <div class="divider" style="width: 2px; background-color: #ccc; height: 1100px; margin: 0 60px;"></div>
        <aside class="sidebar">
            <h2>Atención al cuidadano</h2>
            <ul>
                <li><a href="http://sisdore.regionjunin.gob.pe:8080/accesoinformacion/"> <i class="ri-file-list-3-line"></i> Solicitud electronica de acceso a la informacion publica</a></li>
                <li><a href="https://reclamos.servicios.gob.pe/?institution_id=57"> <i class="ri-contacts-book-2-line"></i> Libro de reclamaciones</a></li>
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
                <p style="text-align: justify; margin: 0 30px;">“Conformar un equipo profesional multidisciplinario, altamente calificado, con sólidos principios éticos, capacitado permanentemente, equipado con tecnologías de constante actualización, que brinde confianza y seguridad a la población sobre el adecuado uso de los recursos públicos en la entidad, mediante un control oportuno y eficaz, que fomente un ambiente de honestidad y transparencia en el Gobierno Regional Junín. ”</p>
            </div>
            <img src="images/visionicon.png"style="width: 30%; height:  40%;">
        </div>
        <div class="container1">
            <div class="texto">
                <h2>MISIÓN</h2>
                <p style="text-align: justify; margin: 0 30px;">“Promover la correcta y transparente gestión de los recursos y bienes de la entidad, cautelando la legalidad de sus actos y operaciones, así como el logro de sus resultados, mediante la ejecución de acciones y actividades de control, para contribuir con el cumplimiento de los fines y metas institucionales. ”</p>  
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
