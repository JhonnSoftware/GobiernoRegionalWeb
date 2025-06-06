@extends('layouts.layout')

@section('title', 'Procaduria Publica Regional')

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

        .content {
            width: 70%;
            padding: 20px;
        }

        .content p{
            text-align: justify;
        }

        h1 {
            font-size: 26px;
            color: #222;
        }

        p {
            font-size: 16px;
            line-height: 1.6;
            color: #333;
        }

        .functions {
            list-style: none;
            padding: 0;
        }

        .functions li {
            padding-left: 20px;
            position: relative;
            margin-bottom: 8px;
            text-align: justify;
        }

        .functions li::before {
            content: "•";
            color: #ff6700;
            font-size: 20px;
            position: absolute;
            left: 0;
            top: 0;
        }

        .fa-map-marker-alt {
            color: #ff6700;
            margin-right: 5px;
        }

        .divider {
            width: 2px;
            background-color: #ccc;
            height: 500px;
            margin: 0 60px;
        }
    </style>

    <div class="banner fade-in">
        <h1>PROCADURIA PUBLICA<br>REGIONAL</h1>
    </div>

    <div class="container fade-in">
        <main class="content">

            <h1 style="font-weight:bold; color:#1256b0; text-align: center;">ABOG. FRANZ EVER PAZCE CONTRERAS(e)</h1>
            <h5 style="font-weight: bold; font-size: 19px; color: #ff6700; text-align: center;">fpazce@regionjunin.gob.pe</h5>
            <p>ARTÍCULO 30º.- Procuraduría Pública Regional La  Procuraduría  Pública  Regional  
                ejercita  la  representación  y  defensa  en  los  procesos  y procedimientos en  
                los que el Gobierno Regional  Junín actúe como demandante, demandado, denunciante, 
                denunciado o parte civil, pudiendo prestar confesión en juicio en representación del  
                Gobierno  Regional  y  convenir  en   la  demanda  o  desistirse  de  ella  o   
                transigir  en   juicio previamente  autorizado  por  Resolución  Ejecutiva  Regional,  
                con  acuerdo  de  los  Gerentes Regionales. 
            </p>
            <p>
                La Procuraduría Pública Regional está a cargo de un Procurador Público Regional designado 
                por el Presidente Regional, previo concurso público de méritos.
            </p>
            <p>
                ARTÍCULO 31º.- Funciones del Procurador Público Regional
            </p>
            <p>
                Son funciones del Procurador Público Regional: 
            </p>
            <ul class="functions">
                <li>Ejercer la defensa del Gobierno Regional Junín ante los órganos jurisdiccionales del poder judicial, de conformidad con las normas vigentes. </li>
                <li>Ejercer la defensa de los derechos e intereses del Estado a nivel del Gobierno Regional.</li>
                <li>Realizar la representación y defensa judicial de los intereses y derechos del Gobierno Regional en todos los procesos y procedimientos en los que actúe como demandante, demandado, denunciante o parte civil pudiendo prestar confesión en juicio en representación del Gobierno Regional Junín ante cualquier órgano jurisdiccional del poder judicial.</li>
                <li>Convenir en la demanda o desistirse de ella, o transigir en juicio previamente autorizado por Resolución Ejecutiva Regional, con acuerdo de los Gerentes Regionales. </li>
                <li>Mantener  relaciones de coordinación y cooperación con el Consejo de Defensa Judicial del Estado.</li>
                <li>Informar permanentemente al Consejo Regional el estado de las acciones judiciales en defensa de los derechos e intereses del Estado a nivel regional. </li>
                <li>Formular anualmente la Memoria de su gestión.</li>
                <li>Utilizar  técnicas  estadísticas para establecer controlar y verificar la capacidad de los procesos y las características de los servicios a su cargo. </li>
                <li>Proponer procedimientos para mejorar la gestión de los servicios que presta a la sociedad o Gobierno Regional.</li>
                <li>Proponer procedimientos para modernizar la gestión de su Unidad Orgánica.</li>
                <li>Definir indicadores de gestión que permitan evaluar el avance que se logre en el desempeño de la Unidad Orgánica así como efectuar su seguimiento y en función a dichos resultados; reevaluar y proponer modificaciones a los objetivos, políticas y estrategias establecidas si fuera necesario. </li>
                <li>Las demás facultades y funciones que le sean asignadas por la Ley de la materia.</li>
            </ul>
            
        </main>
        <div class="divider" style="width: 2px; background-color: #ccc; height: 1000px; margin: 0 60px;"></div>
        <aside class="sidebar">
            <h2>Atención al cuidadano</h2>
            <ul>
                <li><a href="http://sisdore.regionjunin.gob.pe:8080/accesoinformacion/">Solicitud electronica de acceso a la
                        informacion publica</a></li>
                <li><a href="https://reclamos.servicios.gob.pe/?institution_id=57">Libro de reclamaciones</a></li>
                <li><a href="{{ url('portales_provinciales') }}">Portales
                    Provinciales</a></li>
            <li><a href="{{ url('portales_direcciones_regionales') }}">Portales de las Direcciones
                    Regionales</a></li>
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