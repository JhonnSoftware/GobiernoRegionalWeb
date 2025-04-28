@extends('layouts.layout')

@section('title', 'Direccion Regional de Educacion')

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
        <h1> DIRECCION REGIONAL <br> DE EDUCACION </h1>
    </div>
    <div class="container fade-in">
        <div class="mensaje">
            <h2 style="font-weight:bold; color:#1256b0; text-align: center;">MG. OMAR LUIS TOVALINO CORDOVA</h2>
            <p style="font-weight: bold; font-size: 19px; color: #ff6700; text-align: center;">otovalino@regionjunin.gob.pe</p>
            <p>
                La Dirección Regional de Educación está dirigida por un Director Regional, quien es designado por el
                Gobernador Regional.
            </p>
            <h3>Funciones</h3>
            <ul>
                <li>Formular, aprobar, ejecutar, evaluar y administrar las políticas regionales de educación, cultura,
                    ciencia y tecnología, deporte y recreación de la región.</li>
                <li>Diseñar ejecutar y evaluar el proyecto educativo regional, los programas de desarrollo de la cultura,
                    ciencia y tecnología y el programa de desarrollo del deporte y recreación de la región, en concordancia
                    con la política educativa nacional.</li>
                <li>Diversificar los currículos nacionales, incorporando contenidos significativos de su realidad
                    sociocultural, económica, productiva y ecológica, respondiendo a las necesidades e intereses de los
                    educandos.</li>
                <li>Promover una cultura de derechos, de paz y de igualdad de oportunidades para todos.</li>
                <li>Promover, regular, incentivar y supervisar los servicios referidos a la educación inicial, primaria,
                    secundaria y superior no universitaria, en coordinación con el Gobierno Local y en armonía con la
                    política y normas del sector correspondiente y las necesidades de cobertura y niveles de enseñanza de la
                    población.</li>
                <li>Modernizar los sistemas descentralizados de gestión educativa y propiciar la formación de redes de
                    instituciones educativas, en coordinación con el Ministerio de Educación.</li>
                <li>Ejecutar y evaluar, conjuntamente con los gobiernos locales, los programas de alfabetización en el marco
                    de las políticas y programas nacionales.</li>
                <li>Integrar los distintos programas educativos regionales en una política integral orientada en lo
                    económico, a la mejora en la productividad y competitividad de la región; en lo social, a propiciar la
                    igualdad de oportunidades, la integración y la inclusión a nivel regional; en lo político, al
                    afianzamiento de los mecanismos de participación ciudadana y rendición de cuentas en los distintos
                    niveles de gobierno y en lo cultural, al desarrollo de una cultura de paz y reconocimiento y respeto a
                    la Diversidad.</li>
                <li>Promover permanentemente la educación intercultural y el uso de las lenguas ordinarias de la región.
                </li>
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
                <li>Definir indicadores de gestión que permitan evaluar el avance que se logre en el desempeño de la Unidad
                    Orgánica, así como efectuar su seguimiento y, en función a dichos resultados reevaluar y proponer
                    modificaciones a los objetivos, políticas y estrategias establecidas si fuera necesario.</li>
                <li>Las demás funciones que le sean asignadas.</li>
            </ul>
        </div>
        <div class="divider" style="width: 2px; background-color: #ccc; height: 1500px; margin: 0 60px;"></div>
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
            <h2> Visitanos..</h2>
            <ul>
                <li><a href="https://drej.edu.pe/">Pagina Web </a></li>
                <li><a href="https://web.facebook.com/educacion.junin.gob.pe/?ref=embed_page#"> Facebook</a></li>
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
