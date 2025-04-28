@extends('layouts.layout')

@section('title', 'Direccion Regional de Vivienda Construccion y Sanamiento')

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
            font-size: 50px;
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

        .divider {
            width: 2px;
            background-color: #ccc;
            height: 500px;
            margin: 0 60px;
        }
    </style>

    </style>

    <div class="banner fade-in">
        <h1> DIRECCION REGIONAL DE VIVIENDA <br>CONTRUCCION Y SANAMIENTO </h1>
    </div>
    <div class="container fade-in">
        <div class="mensaje">
            <h2 style="font-weight:bold; color:#1256b0; text-align: center;">ING. EDUARDO ANTONIO TINTAYA FLORES</h2>
            <p style="font-weight: bold; font-size: 19px; color: #ff6700; text-align: center;">etintaya@regionjunin.gob.pe</p>
            <p>
                La Dirección Regional de Vivienda, Construcción y Saneamiento está dirigida por un Director Regional, quien
                es designado por el Gobernador Regional.
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
        <div class="divider" style="width: 2px; background-color: #ccc; height: 900px; margin: 0 60px;"></div>
        <aside class="sidebar">
            <h2>Atención al cuidadano</h2>
            <ul>
                <li><a href="http://sisdore.regionjunin.gob.pe:8080/accesoinformacion/"> <i class="ri-file-list-3-line"></i>
                        Solicitud electronica de acceso a la informacion publica</a></li>
                <li><a href="https://reclamos.servicios.gob.pe/?institution_id=57"> <i class="ri-contacts-book-2-line"></i>
                        Libro de reclamaciones</a></li>
                <li><a href="{{ url('portales_provinciales') }}">Portales
                            Provinciales</a></li>
                <li><a href="{{ url('portales_direcciones_regionales') }}">Portales de las Direcciones
                            Regionales</a></li>
            </ul>
            <h2>Visitanos</h2>
            <ul>
                <li><a href="https://web.facebook.com/DRVCSJ/?ref=embed_page#">Facebook</a></li>
            </ul>
        </aside>

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
