@extends('layouts.layout')

@section('title', 'Direccion Regional de Agricultura')

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
        <h1> DIRECCION REGIONAL DE <br> COMERCIO EXTERIOR <br> Y TURISMO </h1>
    </div>
    <div class="container">
        <div class="mensaje">
            <h2 style="font-weight:bold; color:#1256b0; text-align: center;">ARQUEOL. JULIO ABANTO LLAQUE </h2>
            <p style="font-weight: bold; font-size: 19px; color: #ff6700; text-align: center;">jabanto@regionjunin.gob.pe</p>
            <p>
                La Dirección Regional de Comercio Exterior y Turismo está dirigida por un Director Regional, quien es
                designado por el Gobernador Regional.
            </p>
            <h3>Funciones</h3>
            <ul>
                <li>Formular, aprobar, ejecutar, evaluar, dirigir, controlar y administrar los planes y políticas en materia
                    de comercio de la región, en concordancia con las políticas nacionales y los planes sectoriales, en
                    coordinación con las entidades del sector público competentes en la materia.</li>
                <li>Impulsar el desarrollo de los recursos humanos regionales y la mejora en la productividad y
                    competitividad de las unidades económicas de la región, a través de actividades de capacitación,
                    provisión de información y transferencia tecnológica.</li>
                <li>Elaborar y ejecutar las estrategias y el programa de desarrollo de la oferta exportable y de promoción
                    de las exportaciones regionales.</li>
                <li>Identificar oportunidades comerciales para los productos de la región y promover la participación
                    privada en proyectos de inversión en la región.</li>
                <li>Promover la provisión de servicios financieros a las empresas y organizaciones de la región, con énfasis
                    en las medianas, PYMES y las unidades productivas orientadas al comercio y a las exportaciones, por
                    parte del sector privado.</li>
                <li>Formular, aprobar, ejecutar, evaluar, dirigir, controlar y administrar las políticas en materia de
                    desarrollo de la actividad turística regional, en concordancia con la política general del gobierno y
                    los planes sectoriales.</li>
                <li>Monitorear y mantener actualizada la base de datos de mantenimiento preventivo y correctivo de los
                    equipos de cómputo y de comunicaciones.</li>
                <li>RLlevar y mantener actualizados los directorios de prestadores de servicios turísticos, calendarios de
                    eventos y el inventario de recursos turísticos, en el ámbito regional, de acuerdo a la metodología
                    establecida por el MINCETUR</li>
                <li>Cautelar la seguridad de los sistemas de información en el Gobierno Regional.</li>
                <li>Administrar la red de data del Gobierno Regional.</li>
                <li>Proponer normas y aprobar los requerimientos de tecnología de información y de sistemas informáticos en
                    el Gobierno Regional.</li>
                <li>Establecer procesos y metodologías sobre las etapas de optimización e informatización.</li>
                <li>Formular el Plan Operativo Informático y su correspondiente Evaluación.</li>
                <li>Formular el Plan Estratégico de Sistemas de Información.</li>
                <li>Brindar asesoramiento técnico para la adquisición de equipos informáticos y accesorios.</li>
                <li>Autorizar la adquisición de equipos informáticos y accesorios.</li>
                <li>Autorizar la asignación de equipos informáticos a las diferentes unidades orgánicas.</li>
                <li>Formular normas técnicas de uso y mantenimiento de los equipos informáticos, así como difundir y
                    controlar su correcta aplicación.</li>
                <li>Administrar el portal electrónico (Internet e Intranet), brindando asistencia técnica a los usuarios.
                </li>
                <li>Elaborar normas y herramientas técnicas adecuadas para impulsar y ejecutar la política de Desarrollo
                    Institucional dentro de la organización del Gobierno Regional.</li>
                <li>Formular y proponer normas y directivas tendientes a optimizar la gestión pública en el ámbito regional.
                </li>
                <li>Desarrollar sistemas de información gerencial del Gobierno Regional.</li>
                <li>Proponer una adecuada racionalización de personal, material y espacios de acuerdo a criterios técnicos y
                    eficacia para un mejor servicio a los usuarios.</li>
                <li>Desarrollar labores de producción, desarrollo y soporte técnico, a fin de automatizar los procesos de
                    apoyo a la gestión.</li>
                <li>Desarrollar y diseñar sistemas y normas de seguridad de información</li>
                <li>Utilizar técnicas estadísticas para establecer, controlar y verificar la capacidad de los procesos y las
                    características de los servicios a su cargo.</li>
                <li>Proponer procedimientos para mejorar la gestión de los servicios que presta a la sociedad o Gobierno
                    Regional.</li>
                <li>Proponer procedimientos para modernizar la gestión de su Unidad Orgánica.</li>
                <li>Definir indicadores de gestión que permitan evaluar el avance que se logre en el desempeño de la Unidad
                    Orgánica, así como efectuar su seguimiento y, en función a dichos resultados reevaluar y proponer
                    modificaciones a los objetivos, políticas y estrategias establecidas si fuera necesario.</li>
                <li>Las demás funciones que le sean asignadas.</li>
            </ul>
        </div>
        <div class="divider"></div>
        <aside class="sidebar">
            <h2>Atención al cuidadano</h2>
            <ul>
                <li><a href="http://sisdore.regionjunin.gob.pe:8080/accesoinformacion/"> <i class="ri-file-list-3-line"></i>
                        Solicitud electronica de acceso a la informacion publica</a></li>
                <li><a href="https://reclamos.servicios.gob.pe/?institution_id=57"> <i class="ri-contacts-book-2-line"></i>
                        Libro de reclamaciones</a></li>
                <li><a href="https://www.regionjunin.gob.pe/pagina/id/portales_provinciales_de_la_region_junin/"> <i
                            class="ri-home-6-fill"></i> Portales Provinciales</a></li>
                <li><a href="https://www.regionjunin.gob.pe/pagina/id/portales_regionales/"> <i
                            class="ri-building-2-fill"></i> Portales de las Direcciones Regionales</a></li>
            </ul>
            <h2> Visitanos..</h2>
            <ul>
                <li><a href="https://web.facebook.com/dirceturjuninoficial/?ref=embed_page#">Facebook </a></li>
            </ul>
        </aside>

    </div>

@endsection
