@extends('layouts.layout')

@section('title', 'Oficina Regional de Administracion y Finanzas')

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
        <h1>OFICINA REGIONAL DE<br>ADMINISTRACIÓN Y FINANZAS</h1>
    </div>

    <div class="container">
        <div class="mensaje">
            <h2>CPC. MARIANELA LIZ QUISPE SALAS</h2>
            <p>
                mquispe@regionjunin.gob.pe
            </p>
            <p>
                La Oficina Regional de Administración y Finanzas del Gobierno Regional Junín es la encargada de proporcionar el apoyo administrativo requerido en la gestión institucional, mediante la administración de los recursos humanos, materiales y financieros, así como la prestación de servicios generales del Gobierno Regional.  
            </p>
            <h3>Funciones</h3>
                <ul>
                    <li>Proponer las políticas y estrategias referentes a la administración de recursos humanos, materiales y financieros, así como la prestación de servicios generales del Gobierno Regional Junín.</li>
                    <li>Administrar los recursos económicos y financieros en concordancia con el Plan Estratégico y los Planes Operativos del Gobierno Regional Junín.</li>
                    <li>Programar, organizar, dirigir y controlar los procesos técnicos de personal, contabilidad, tesorería, ejecución presupuestal, abastecimientos; de conformidad con las disposiciones legales y normas técnicas vigentes.</li>
                    <li>Dirigir y evaluar las acciones de Administración de recursos humanos relacionados con los procesos técnicos de selección, contratación, registro y control, remuneraciones, evaluaciones, capacitación, movimiento y promoción del personal; así como los programas de bienestar y servicio social.</li>
                    <li>Elaborar y ejecutar el Programa Regional de Capacidades Humanas.</li>
                    <li>Participar en la formulación del Presupuesto Participativo del Gobierno Regional Junín, en coordinación con la Gerencia Regional de Planeamiento Presupuesto y Acondicionamiento Territorial.</li>
                    <li>Presentar y brindar información oportuna sobre los sistemas que dirige, con la sustentación técnica respectiva, en los plazos establecidos o cuando le sea requerida.</li>
                    <li>Participar en la formulación del Presupuesto del pliego en coordinación con la Gerencia Regional de Planeamiento, Presupuesto y Acondicionamiento Territorial.</li>
                    <li>Prever de los recursos financieros a las diferentes dependencias del Gobierno Regional y logísticos a las unidades orgánicas de la Sede del Gobierno Regional.</li>
                    <li>Proponer las directivas, que permitan mejorar su gestión.</li>
                    <li>Asegurar la disponibilidad de recursos para el pago de las obligaciones y presentar propuestas de racionalización de gastos, en el marco de las disposiciones presupuestarias vigentes.</li>
                    <li>Proponer las mejoras metodológicas de los sistemas que están bajo su responsabilidad.</li>
                    <li>Ejercer control previo de todas las operaciones que se realizan en el ámbito de la Oficina General Regional de Administración y Finanzas.</li>
                    <li>Dirigir y evaluar las acciones de abastecimiento, relacionadas con los procesos técnicos de adquisiciones en sus diversas modalidades, de servicios generales, de mantenimiento y conservación de equipos, maquinarias e instalaciones, y, de control patrimonial y seguros.</li>
                    <li>Utilizar técnicas estadísticas para establecer, controlar y verificar la capacidad de los procesos y las características de los servicios a su cargo.</li>
                    <li>Proponer procedimientos para mejorar la gestión de los servicios que presta a la sociedad o Gobierno Regional.</li>
                    <li>Proponer procedimientos para modernizar la gestión de su Unidad Orgánica</li>
                    <li>Definir indicadores de gestión que permitan evaluar el avance que se logre en el desempeño de la Unidad Orgánica, así como efectuar su seguimiento y, en función a dichos resultados reevaluar y proponer modificaciones a los objetivos, políticas y estrategias establecidas si fuera necesario.</li>
                    <li>Desarrollar las demás funciones de su competencia y otras que le sean asignadas por la Gerencia General Regional.</li>
                    <p>La Oficina Regional de Administración y Finanzas se organiza y está integrada por las unidades orgánicas siguientes:</p>
                    <li>Oficina de Recursos Humanos.</li>
                    <li>Oficina de Administración Financiera.</li>
                    <li>Oficina de Abastecimientos y Servicios Auxiliares.</li>
                    <li>Oficina de Gestión Patrimonial.</li>
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
                <p>“Optimizar en términos de eficiencia, economía y eficacia la gestión pública, modernizando los procesos de los sistemas administrativos del Gobierno Regional Junín. ”</p>
            </div>
            <img src="images/visionicon.png"style="width: 30%; height:  40%;">
        </div>
        <div class="container1">
            <div class="texto">
                <h2>MISIÓN</h2>
                <p>“Unidad Orgánica sólida en la gestión de los sistemas de administración pública, lider en la ejecución del gasto con transparencia y calidad. ”</p>  
            </div>
            <img src="images/misionicon.png" style="width: 45%; height:  45%;">
        </div>
    </div>

@endsection
