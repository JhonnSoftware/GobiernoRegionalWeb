@extends('layouts.layout')

@section('title', 'Gerencia General Regional')

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
            align-items: flex-start;
            justify-content: center;
            max-width: 1200px;
            margin: 50px auto;
            background: #fff;
            padding: 80px;
        }

        .logo img {
            width: 400px;
            height: 550px;
        }

        .divider {
            width: 2px;
            background-color: #ccc;
            height: 500px;
            margin: 0 60px;
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

        .image-container {
            position: relative;
            display: inline-block;
            padding: 20px;
            background-color: #fff; /* Puedes cambiar el color si lo deseas */
            border-radius: 10px;
        }

        .image-container img {
            display: block;
            width: 400px; /* Ajusta según tu necesidad */
            height: 550px;
            
        }

        .corner {
            position: absolute;
            width: 80px;
            height: 80px;
            border: 4px solid #ff6600; /* Color de los corners */
        }

        .corner.top-left {
            top: -5px;
            left: -5px;
            border-right: none;
            border-bottom: none;
        }

        .corner.top-right {
            top: -5px;
            right: -5px;
            border-left: none;
            border-bottom: none;
        }

        .corner.bottom-left {
            bottom: -5px;
            left: -5px;
            border-right: none;
            border-top: none;
        }

        .corner.bottom-right {
            bottom: -5px;
            right: -5px;
            border-left: none;
            border-top: none;
        }
    </style>

    <div class="banner fade-in">
        <h1>GERENCIA GENERAL<br>REGIONAL</h1>
    </div>

    <div class="container fade-in">
        <div class="logo">
            <div class="image-container">
                <img src="images/GRJpages131454b5adec5558594d25ac994c3119d17a09.jpg" alt="Huamanga Nuestra Identidad">
                <div class="corner top-left"></div>
                <div class="corner bottom-right"></div>
            </div>
        </div>
        <div class="divider"></div>
        <div class="mensaje">
            <h2 style="font-weight:bold; color:#1256b0; text-align: center;">ECO. ROY TOMAS GONZALES MAYTA</h2>
            <p style="font-weight: bold; font-size: 19px; color: #ff6700; text-align: center;" >
                rgonzales@regionjunin.gob.pe
            </p>
            <p style="text-align: justify;">
                La Gerencia General Regional es el órgano ejecutivo del Gobierno Regional, responsable de coordinar, dirigir, controlar y supervisar a las Gerencias Regionales y órganos desconcentrados, según corresponda, en las materias de su competencia. Está a cargo de un Gerente General Regional designado por la Presidencia Regional, siendo el responsable administrativo por los actos que ejecuta en el ejercicio de sus funciones y por los que suscribe conjuntamente con el Gobernador Regional.
            </p>
            <p style="text-align: justify;">
                Funciones:
                1. Dirigir, coordinar y supervisar las actividades administrativas de los órganos y/o unidades orgánicas del Gobierno Regional, que se encuentran bajo su dependencia jerárquica.<br>
                2. Coordinar, monitorear y supervisar la formulación del Plan de Desarrollo Regional Concertado y el Presupuesto Participativo, elevándolo al Gobernador Regional para su aprobación por el Consejo Regional.<br>
            
                3. Supervisar, monitorear y evaluar la ejecución de los programas y proyectos regionales, incluidos en el Plan de Desarrollo Regional Concertado, Estratégico Institucional y Operativo Institucional del Gobierno Regional Junín.<br>
                
            </p>
            <p id="masInfo" style="display: none; text-align: justify;">
                4. Supervisar y coordinar con las unidades orgánicas competentes, la ejecución de los recursos presupuestales del Gobierno Regional.<br>
                5. Efectuar la supervisión, vigilancia y verificación de los actos y resultados de la gestión pública del Gobierno Regional Junín.<br>
                6. Informar periódicamente al Gobernador Regional las acciones de carácter administrativo y financiero del Gobierno Regional Junín.<br>
                7. Monitorear la ejecución y supervisión de la aplicación de las normas técnicas y administrativas de nivel nacional que tengan implicancia en el desarrollo regional.<br>
                8. Proponer al Gobernador Regional las normas reglamentarias de organización y funciones de las dependencias administrativas del Gobierno Regional Junín.<br>
                9. Expedir resoluciones administrativas de acuerdo a sus competencias.<br>
                10. Evaluar y proponer acciones de personal al Gobernador Regional.<br>
                11. Proponer al Gobernador Regional las modificaciones de carácter presupuestal, administrativo y otras del Gobierno Regional, necesarias para su funcionamiento.<br>
                12. Proponer al Gobernador Regional los contratos y convenios a celebrarse por el Gobierno Regional, para su aprobación correspondiente.<br>
                13. Presentar los informes que le sean solicitados por el Gobernador Regional.<br>
                14. Utilizar técnicas estadísticas para establecer, controlar y verificar la capacidad de los procesos y las características de los servicios a su cargo.<br>
                15. Proponer procedimientos para la mejora y modernización de la gestión de los servicios que presta a la sociedad en el ámbito regional.<br>
                16. Proponer al Gobernador Regional políticas y estrategias para impulsar el desarrollo regional.<br>
                17. Definir indicadores de gestión que permitan evaluar el avance que se logre en el desempeño de la unidad orgánica.<br>
            </p>
            <p>
                <a href="javascript:void(0);" onclick="mostrarMas()" id="verMas" style="color: #ff6804; text-decoration: none;">Ver Más...</a>
            </p>
            <script>
                function mostrarMas() {
                    var contenido = document.getElementById("masInfo");
                    var enlace = document.getElementById("verMas");
            
                    if (contenido.style.display === "none") {
                        contenido.style.display = "block";
                        enlace.innerText = "Ver Menos...";
                    } else {
                        contenido.style.display = "none";
                        enlace.innerText = "Ver Más...";
                    }
                }
            </script>
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
