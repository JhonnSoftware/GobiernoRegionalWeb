@extends('layouts.layout')

@section('title', 'Obras en Progreso')

@section('contenido-principal')
    <style>
        .banner {
            position: relative;
            width: 100%;
            height: 340px;
            background: linear-gradient(to left, rgba(204, 204, 204, 0.4), rgba(0, 14, 139, 0.9)),
                url('images/Gobierno_Regional_Junin.jpg') no-repeat;
            background-size: cover;
            background-position: 50% 35%;
            display: flex;
            align-items: center;
            justify-content: start;
            padding-left: 20px;
        }

        .banner h1 {
            color: #fff;
            font-size: 50px;
            font-weight: bold;
            margin-left: 180px;
            margin-top: 50px;
            font-family: 'Panton Narrow Black Italic', sans-serif;
            text-shadow: 3px 3px 5px rgba(0, 0, 0, 0.5);
        }

        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            max-width: 1000px;
            margin: 50px auto;
            background: #fff;
            padding: 20px;
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
    <div class="banner">
        <h1>REGLAMENTO DE FUNCIONAMIENTO DEL<br>SISTEMA DE INFORMACIÓN AMBIENTAL<br>REGIONAL JUNÍN - SIAR JUNÍN</h1>
    </div>
    <div class="d-flex justify-content-center mt-5 ">
        <div style="width: 1200px; min-width: 1200px;">
            <iframe class="w-100" src="pdf/GRJ-151752dcec04f8f970c75b8c424352b43d5447.pdf" 
                style="height: 600px; border-radius: 15px;"></iframe>
        </div>
    </div>

    <div class="container mt-4 d-flex justify-content-center">
        <div class="d-flex align-items-center border p-3 rounded shadow-sm" 
            style="width: 1200px; min-width: 1200px;">
            <img src="https://cdn-icons-png.flaticon.com/512/337/337946.png" alt="PDF Icon" width="40" class="me-3">
            <div class="flex-grow-1">
                <p class="mb-1 fw-bold">Reglamento de Funcionamiento del Sistema de Información Ambiental Regional Junín - SIAR JUNÍN</p>
                <a href="pdf/GRJ-151752dcec04f8f970c75b8c424352b43d5447.pdf" class="text-decoration-none fw-semibold" download style="color: #1255b3;">Descargar PDF</a>
            </div>
        </div>
    </div>
@endsection