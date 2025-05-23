@extends('layouts.layout')

@section('title', 'Oficina Regional de Administracion y Finanzas')

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
        <h1>OFICINA REGIONAL DE<br>ADMINISTRACIÓN Y FINANZAS</h1>
    </div>

    <div class="container fade-in">
        <div class="mensaje">
            <h2 style="font-weight:bold; color:#1256b0; text-align: center;">CPC. MARIANELA LIZ QUISPE SALAS</h2>
            <p style="font-weight: bold; font-size: 19px; color: #ff6700; text-align: center;">
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
        <div class="divider" style="width: 2px; background-color: #ccc; height: 1400px; margin: 0 60px;"></div>
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
                <p style="text-align: justify; margin: 0 30px;">“Optimizar en términos de eficiencia, economía y eficacia la gestión pública, modernizando los procesos de los sistemas administrativos del Gobierno Regional Junín. ”</p>
            </div>
            <img src="images/visionicon.png"style="width: 30%; height:  40%;">
        </div>
        <div class="container1">
            <div class="texto">
                <h2>MISIÓN</h2>
                <p style="text-align: justify; margin: 0 30px;">“Unidad Orgánica sólida en la gestión de los sistemas de administración pública, lider en la ejecución del gasto con transparencia y calidad. ”</p>  
            </div >
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
