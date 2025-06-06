@extends('layouts.layout')

@section('title', 'Portales Provinciales')

@section('contenido-principal')

    <style>
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.8s ease-out, transform 0.8s ease-out;
        }

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
            justify-content: center;
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
            width: 160px;
            height: 5px;
            background-color: #ff6700;
            margin: 10px auto 0;
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
        <h1>PORTALES PROVINCIALES DE LA <br> REGIÓN JUNÍN</h1>
    </div>

    <div class="container fade-in">

        <div class="mensaje">
            <img src="images/Division_Politica_de_Junin.jpg" alt="Descripción de la imagen" style="max-width: 100%; height: auto;">

            <!-- Tabla debajo de la imagen -->
            <div class="table-responsive mt-4">
                <table class="table table-striped table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Municipalidad Provincial</th>
                            <th>Dirección Web</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Provincia de Chanchamayo</td>
                            <td><a href="http://www.munichanchamayo.gob.pe" target="_blank">www.munichanchamayo.gob.pe</a></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Provincia de Chupaca</td>
                            <td><a href="http://www.munichupaca.gob.pe" target="_blank">www.munichupaca.gob.pe</a></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Provincia de Concepción</td>
                            <td><a href="http://www.municoncepcion.gob.pe" target="_blank">www.municoncepcion.gob.pe</a></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Provincia de Huancayo</td>
                            <td><a href="http://www.munihuancayo.gob.pe" target="_blank">www.munihuancayo.gob.pe</a></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Provincia de Jauja</td>
                            <td><a href="http://www.munijauja.gob.pe" target="_blank">www.munijauja.gob.pe</a></td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Provincia de Junín</td>
                            <td><a href="http://www.munijunin.gob.pe" target="_blank">www.munijunin.gob.pe</a></td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Provincia de Satipo</td>
                            <td><a href="http://www.munisatipo.gob.pe" target="_blank">www.munisatipo.gob.pe</a></td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Provincia de Tarma</td>
                            <td><a href="http://www.munitarma.gob.pe" target="_blank">www.munitarma.gob.pe</a></td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>Provincia de Yauli La Oroya</td>
                            <td><a href="http://www.muniyauli-yauli.gob.pe" target="_blank">www.muniyauli-yauli.gob.pe</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="divider" style="width: 2px; background-color: #ccc; height: 1000px; margin: 0 60px;"></div>

        <aside class="sidebar">
            <h2>Atención al cuidadano</h2>
            <ul>
                <li><a href="http://sisdore.regionjunin.gob.pe:8080/accesoinformacion/"> <i class="ri-file-list-3-line"></i>
                        Solicitud electrónica de acceso a la información pública</a></li>
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
            let elements = document.querySelectorAll('.fade-in');
            elements.forEach((element, index) => {
                setTimeout(() => {
                    element.classList.add('visible');
                }, index * 300);
            });
        });
    </script>
@endsection
