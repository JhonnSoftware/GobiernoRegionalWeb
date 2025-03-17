@extends('layouts.layout')

@section('title', 'Oportunidad Laborales')

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
        
        .iframe-container {
            display: flex;
            justify-content: center;
            align-content: center;
            width: 100%;
            height: 800px; /* Ajusta la altura según necesites */
            margin-top: 20px;
        }

        .iframe-container iframe {
            width: 100%;
            height: 100%;
            margin: 0px 300px;
            border-radius: 15px;
        }
    </style>
    <div class="banner">
        <h1>LIBRO DE RECLAMACIONES</h1>
    </div>
    <div class="iframe-container">
        <iframe src="https://reclamos.servicios.gob.pe/" frameborder="0"></iframe>
    </div>
@endsection