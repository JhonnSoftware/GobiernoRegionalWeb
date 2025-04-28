@extends('layouts.layout')

@section('title', 'Portales Direcciones Regionales')

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
            font-size: 50px;
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

        /prueba/
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
        <h1>PORTALES DIRECCIONES REGIONALES</h1>
    </div>

    <div class="container fade-in">
        <div class="mensaje">
           <!-- a=AQUI PONES TU CODIGO AMOR ;3 -->
           
            <div class="foto1" style="display: flex; justify-content: center; align-items: center;">
                <img src="images/1629126128_grj.jpg" style="width: 400px; height: 50%; margin-bottom:40px;">
            </div>
            
            <table class="table custom-table">
                <thead class="custom-header">
                    <tr>
                        <th>N°</th>
                        <th>Portal</th>
                        <th>Direccion web</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>DIRECCIÓN REGIONAL DE AGRICULTURA</td>
                        <td><a href="https://www.agrojunin.gob.pe/" target="_blank">https://www.agrojunin.gob.pe/</a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>DIRECCIÓN REGIONAL DE ENERGIA Y MINAS</td>
                        <td><a href="https://www.gob.pe/regionjunin-drem" target="_blank">https://www.gob.pe/regionjunin-drem</a></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>DIRECCIÓN REGIONAL DE PRODUCCIÓN</td>
                        <td><a href="https://www.facebook.com/people/Direcci%C3%B3n-Regional-de-la-Producci%C3%B3n-Jun%C3%ADn-Sitio-Oficial/61556326447745/" target="_blank">https://www.facebook.com/people/Direccion-Regional-de-la-Produccion-Junin</a></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>DIRECCIÓN REGIONAL DE COMERCIO EXTERIOR Y TURISMO</td>
                        <td><a href="https://www.facebook.com/dirceturjuninoficial/?locale=es_LA" target="_blank">https://www.facebook.com/dirceturjuninoficial/?locale=es_LA</a></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>DIRECCIÓN REGIONAL DE EDUCACIÓN</td>
                        <td><a href="https://drej.edu.pe/" target="_blank">https://drej.edu.pe/</a></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>DIRECCIÓN REGIONAL DE TRABAJO Y PROMOCIÓN DEL EMPLEO</td>
                        <td><a href="https://www.facebook.com/TrabajoJuninOficial/?locale=es_LA" target="_blank">https://www.facebook.com/TrabajoJuninOficial/?locale=es_LA</a></td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>DIRECCIÓN REGIONAL DE SALUD</td>
                        <td><a href="https://www.diresajunin.gob.pe/" target="_blank">https://www.diresajunin.gob.pe/</a></td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>DIRECCIÓN REGIONAL DE TRANSPORTES Y COMUNICACIONES</td>
                        <td><a href="https://drtcjunin.gob.pe/" target="_blank">https://drtcjunin.gob.pe/</a></td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>DIRECCIÓN REGIONAL DE VIVIENDA, CONSTRUCCIÓN Y SANEAMIENTO</td>
                        <td><a href="https://www.facebook.com/DRVCSJ/?locale=es_LA" target="_blank">https://www.facebook.com/DRVCSJ/?locale=es_LA</a></td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>DIRECCIÓN REGIONAL DE ARCHIVO</td>
                        <td><a href="https://www.facebook.com/arjhyo/?locale=es_LA" target="_blank">https://www.facebook.com/arjhyo/?locale=es_LA   </a></td>
                    </tr>
                </tbody>
            </table>
        
        </div>
        <div class="divider" style="width: 2px; background-color: #ccc; height: 1000px; margin: 0 60px;"></div>
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