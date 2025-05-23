@extends('layouts.layout')

@section('title', 'Gerencia Regional de Infraestructura')

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
        <h1>GERENCIA REGIONAL DE <br>INFRAESTRUCTURA</h1>
    </div>

    <div class="container fade-in">
        <div class="mensaje">
            <h2 style="font-weight:bold; color:#1256b0; text-align: center;">ING. RONY PAOLO VEJARANO PEREZ </h2>
            <p style="font-weight: bold; font-size: 19px; color: #ff6700; text-align: center;">
                rvejarano@regionjunin.gob.pe
            </p>
            <p>
                La Gerencia Regional de Infraestructura está encargada de formular, proponer, ejecutar, dirigir, controlar y
                administrar los planes y políticas de la Región en materia de transportes, comunicaciones,
                telecomunicaciones y construcción de acuerdo a los planes regionales, nacionales y sectoriales; así como,
                desarrollar funciones normativas, reguladoras, de supervisión, evaluación y control de las funciones
                específicas regionales en los sectores antes mencionados. </p>
            <h3>Funciones</h3>
            <ul>
                <li>Ejecutar los recursos financieros, bienes y activos, capacidades humanas, necesarios para la gestión
                    gerencial, con arreglo de la normatividad.</li>
                <li>Dirigir y formular perfiles y proyectos en la fase que les corresponda en materia de vialidad,
                    transportes, comunicaciones, telecomunicaciones, construcción, dentro del marco del sistema de Inversión
                    Pública e identificar los susceptibles de Cooperación Técnica Internacional.</li>
                <li>Participar en la formulación del Plan de Desarrollo Regional Concertado, Presupuesto Institucional, Plan
                    Operativo Institucional, y el Programa Anual de Inversiones.</li>
                <li>Participar en la Formulación del Programa de Competitividad Regional.</li>
                <li>Ejecutar los acuerdos que adopte el Comité de Coordinación Gerencial cuando corresponda en materia
                    sectorial y administrativas de su competencia.</li>
                <li>Supervisar y evaluar las acciones de las Sub Gerencias Regionales a su cargo para dar cumplimiento a los
                    planes, programas y acuerdos, de su competencia.</li>
                <li>Promover la inversión Privada, dirigida a lograr el crecimiento económico regional conforme a la Ley.
                </li>
                <li>Resolver en primera instancia administrativa, los recursos impugnativos interpuestos contra las
                    decisiones de los órganos o dependencias a su cargo.</li>
                <li>Ejercer la Secretaría Técnica para las contrataciones de servicios de consultoría y ejecución de obras.
                </li>
                <li>Proponer procedimientos de Simplificación Administrativa que alivien cargas y obligaciones burocráticas,
                    además de programas de modernización de la gestión pública para ser aplicados en las Direcciones
                    Regionales sectoriales a su cargo.</li>
                <li>Utilizar técnicas estadísticas para establecer, controlar y verificar la capacidad de los procesos y las
                    características de los servicios a su cargo.
                    Proponer procedimientos para mejorar la gestión de los servicios que presta a la sociedad o Gobierno
                    Regional.</li>
                <li>Proponer procedimientos para modernizar la gestión de su Unidad Orgánica.</li>
                <li>Definir indicadores de gestión que permitan evaluar el avance que se logre en el desempeño de la Unidad
                    Orgánica, así como efectuar su seguimiento y, en función a dichos resultados reevaluar y proponer
                    modificaciones a los objetivos, políticas y estrategias establecidas si fuera necesario.</li>
                <li>Realizar otras funciones que le sean asignadas.</li>
                <p>Órganos de la Gerencia Regional de Infraestructura: </p>
                <li>Sub Gerencia de Estudios.</li>
                <li>Sub Gerencia de Obras.</li>
                <li>Sub Gerencia de Supervisión y Liquidación de Obras.</li>
                <li>Dirección Regional de Transportes y Comunicaciones. </li>
            </ul>
        </div>
        <div class="divider" style="width: 2px; background-color: #ccc; height: 1100px; margin: 0 60px;"></div>
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
        </aside>

    </div>
    <div class="contenedor-mv fade-in">
        <div class="container2">
            <div class="texto">
                <h2>VISIÓN</h2>
                <p style="text-align: justify; margin: 0 30px; font-size: 12px">“Gobierno Regional Junín consolidado en una gestión por resultados, con liderazgo en el territorio e
                    institucionalmente; que garantiza el ejercicio pleno de los derechos y la igualdad de oportunidades de
                    los habitantes; que promueve la inversión pública y privada, con inversiones sustanciales en la
                    industrialización de nuestra producción primaria; que promueve articula e implementa políticas
                    ambientales; gestora de los sistemas administrativos con eficiencia y eficacia; población con muchas
                    oportunidades para aplicar su máximo potencial; con empleos dignos y permanentes; conduciendo la gestión
                    pública regional con transparencia, rendición de cuentas y practicando la democracia participativa, con
                    unidades económicas asociadas y competitivas, en el marco de un desarrollo sostenible.”</p>
            </div>
            <img src="images/visionicon.png"style="width: 30%; height:  40%;">
        </div>
        <div class="container1">
            <div class="texto">
                <h2>MISIÓN</h2>
                <p style="text-align: justify; margin: 0 30px;">“Institución pública descentralizada, con autonomía política, económica y administrativa; que fomenta el
                    desarrollo regional integral sostenible; organiza y conduce la gestión pública regional de acuerdo a sus
                    competencias exclusivas, compartidas y delegadas en el marco de las políticas nacionales y sectoriales;
                    para contribuir al bienestar de la población principalmente en los sectores más vulnerables. ”</p>
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
