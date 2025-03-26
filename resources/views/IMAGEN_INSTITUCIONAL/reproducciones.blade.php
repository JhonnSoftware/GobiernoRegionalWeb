@extends('layouts.layout')
@section('title', 'Reproducciones')
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

        .header-alert {
            background-color: #ff6700;
            color: white;
            padding: 15px;
            border-radius: 10px;
            font-size: 16px;
            max-width: 1300px;
            margin: 40px auto;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Ajustes para que el iframe ocupe toda la card */
        .card {
            display: flex;
            flex-direction: column;
            height: 100%;
            padding: 0;
            /*
            border: none;
            box-shadow: none; */
        }

        .card iframe {
            flex-grow: 1;
            width: 100%;
            height: 250px;
            border: none;
        }

        .col-md-4 {
            display: flex;
        }

        .p-3 {
            padding: 0 !important;
        }

        /* Cuadro con el logo de YouTube */
        .youtube-box {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 200px;
            height: 200px;
            background-color: white;
            border: 2px solid #ff0000;
            border-radius: 20px;
            margin: 20px auto;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            cursor: pointer;
            transition: transform 0.2s ease-in-out;
        }

        .youtube-box:hover {
            transform: scale(1.05);
        }

        .youtube-box img {
            width: 100px;
            height: auto;
        }
    </style>

    <div class="banner fade-in">
        <h1>VIDEOS</h1>
    </div>

    <div class="header-alert text-center fade-in">
        <strong>VIDEOS RECIENTES DE NUESTRO CANAL OFICIAL DE YOUTUBE</strong><br>
    </div>

    <div class="container fade-in">
        <div class="row g-3">
            <div class="col-md-4">
                <div class="card">
                    <iframe src="https://www.youtube.com/embed/knJAwhkFNAo" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <iframe src="https://www.youtube.com/embed/1_EzIX5uBP8" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <iframe src="https://www.youtube.com/embed/w_KnCdfYONY" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <iframe src="https://www.youtube.com/embed/28F3Ug0mqLE" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <iframe src="https://www.youtube.com/embed/QRi8ETL0JwY" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <iframe src="https://www.youtube.com/embed/T39QTzy-3hU" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>

    <div class="header-alert text-center fade-in">
        <strong>PARA VER EL RESTO DE NUESTROS VIDEOS, VISITE NUESTRO CANAL EN YOUTUBE</strong><br>
    </div>

    <!-- Cuadro con el logo de YouTube con enlace -->
    <a href="https://www.youtube.com/@gob.regionjunin" target="_blank" class="youtube-box" style="background: #fff; border:#ff6700">
        <img src="images/logo.png" alt="YouTube" style="width: 150px; height: 150px;">
    </a>
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
