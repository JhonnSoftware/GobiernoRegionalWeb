@extends('layouts.layout')

@section('title', 'Estructura Organica')

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
        
        .pdf-container{
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .pdf-viewer{
            width: 60%;
            height: 1000px;
            border-radius: 15px;
        }

    </style>

    <div class="banner fade-in">
        <h1>ESTRUCTURA ORGANICA</h1>
    </div>

    <div class="d-flex justify-content-center mt-5 fade-in">
        <div style="width: 1200px; min-width: 1200px;">
            <iframe class="w-100" src="pdf/GRJ-1954154fe1cf95944f7d0b2814d8f5268a9d3c.pdf" 
                style="height: 600px; border-radius: 15px;"></iframe>
        </div>
    </div>

    <div class="container mt-4 d-flex justify-content-center fade-in">
        <div class="d-flex align-items-center border p-3 rounded shadow-sm" 
            style="width: 1200px; min-width: 1200px;">
            <img src="https://cdn-icons-png.flaticon.com/512/337/337946.png" alt="PDF Icon" width="40" class="me-3">
            <div class="flex-grow-1">
                <p class="mb-1 fw-bold">Estructura Orgánica</p>
                <a href="pdf/GRJ-1954154fe1cf95944f7d0b2814d8f5268a9d3c.pdf" class="text-decoration-none fw-semibold" download style="color: #1255b3;">Descargar PDF</a>
            </div>
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