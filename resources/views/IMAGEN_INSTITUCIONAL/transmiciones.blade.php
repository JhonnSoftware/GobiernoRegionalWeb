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
        <h1>TRANSMICIONES</h1>
    </div>

    <div class="header-alert text-center fade-in">
        <strong>TRANSMICIONES RECIENTES DE NUESTRA PAGINA DE FACEBOOK</strong><br>
    </div>

    <div class="container fade-in">
        <div class="row g-3">
            <div class="col-md-4">
                <div class="card">
                    <iframe src="https://www.facebook.com/plugins/video.php?href=https://www.facebook.com/100066497738582/videos/9298964023548329" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <iframe src="https://www.facebook.com/plugins/video.php?href=https://www.facebook.com/100066497738582/videos/951106187180200" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <iframe src="https://www.facebook.com/plugins/video.php?href=https://www.facebook.com/100066497738582/videos/505588319041003" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <iframe src="https://www.facebook.com/plugins/video.php?href=https://www.facebook.com/100066497738582/videos/1290156088720234" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <iframe src="https://www.facebook.com/plugins/video.php?href=https://www.facebook.com/100066497738582/videos/614363418088380" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <iframe src="https://www.facebook.com/plugins/video.php?href=https://www.facebook.com/100066497738582/videos/1169688731204113" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>

    <div class="header-alert text-center fade-in">
        <strong>PARA VER EL RESTO DE LAS TRANSMICIONES, VISITE NUESTRO PAGINA DE FACEBOOK</strong><br>
    </div>

    <!-- Cuadro con el logo de YouTube con enlace -->
    <div style="display: flex; justify-content: center; align-items: center; margin: -50px;">
        <a href="https://www.facebook.com/GReJunin" target="_blank" class="facebook-box">
            <img src="images/facebook_logo.png" alt="Facebook" style="width: 350px; height: 350px;">
        </a>
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
