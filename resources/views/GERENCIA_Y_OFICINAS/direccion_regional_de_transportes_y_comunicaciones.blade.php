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

    </style>

    <div class="banner">
        <h1> DIRECCION REGIONAL DE <br> TRANSPORTES Y COMUNICACIONES </h1>
    </div>
    <div class="container">
        <div class="mensaje">
            <h2>MG. MICHAEL PALACIOS RAMOS</h2>
            <p>mpalacios@regionjunin.gob.pe</p>
            <p>
                La Dirección Regional de Transportes y Comunicaciones está dirigida por un Director Regional, quien es
                designado por el Gobernador Regional.
            </p>
            <h3>Funciones</h3>
            <ul>
                <li>Formular, aprobar, ejecutar, evaluar, fiscalizar, dirigir, controlar y administrar los planes y
                    políticas en materia de energía, minas e hidrocarburos de la región, en concordancia con las políticas
                    nacionales y los planes sectoriales.</li>
                <li>Promover las inversiones en el sector, con las limitaciones de Ley.</li>
                <li>Fomentar y supervisar las actividades de la pequeña minería y la minería artesanal y la exploración y
                    explotación de los recursos mineros de la región con arreglo a Ley.</li>
                <li>Impulsar proyectos y obras de generación de energía y electrificación urbana rurales, así como para el
                    aprovechamiento de hidrocarburos de la región. Asimismo, otorgar concesiones para mini centrales de
                    generación eléctrica.</li>
                <li>Conducir, ejecutar, supervisar y cooperar en programas de electrificación rural regionales, en el marco
                    del Plan Nacional de Electrificación Rural.</li>
                <li>Otorgar concesiones para pequeña minería y minería artesanal de alcance regional.</li>
                <li>Inventariar y evaluar los recursos mineros y el potencial minero y de hidrocarburos regionales.</li>
                <li>Aprobar y supervisar los Programas de Adecuación y Manejo Ambiental (PAMA) de su circunscripción,
                    implementando las acciones correctivas e imponiendo las sanciones correspondientes.</li>
                <li>Utilizar técnicas estadísticas para establecer, controlar y verificar la capacidad de los procesos y las
                    características de los servicios a su cargo.</li>
                <li>Proponer normas y aprobar los requerimientos de tecnología de información y de sistemas informáticos en
                    el Gobierno Regional.</li>
                <li>Resolver como Instancia Regional de Producción, en los procedimientos administrativos que tratan sobre
                    fomento de la pequeña y micro empresa.</li>
                <li>Coordinar la oferta de formación profesional y los programas de orientación laboral y ocupacional que
                    brindan las entidades públicas y privadas; asimismo supervisar los sistemas de intermediación laboral en
                    la región y su articulación con el sistema de formación profesional.</li>
                <li>Definir indicadores de gestión que permitan evaluar el avance que se logre en el desempeño de la Unidad
                    Orgánica, así como efectuar su seguimiento y, en función a dichos resultados reevaluar y proponer
                    modificaciones a los objetivos, políticas y estrategias establecidas si fuera necesario.</li>
                <li>Realizar otras funciones que le sean asignadas</li>
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
            <h2>Visitanos</h2>
            <ul>
                <li><a href="https://drtcjunin.gob.pe/">Pagina web</a></LI>
                <li><a href="https://web.facebook.com/drtcjunin.gob.pe/?ref=embed_page#">Facebook</a></li>
            </ul>
        </aside>

    </div>
@endsection
