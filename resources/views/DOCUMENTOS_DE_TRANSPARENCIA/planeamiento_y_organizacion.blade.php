@extends('layouts.layout')

@section('title', 'Planeamiento y Organizacion')

@section('contenido-principal')
    <style>
        .banner {
            position: relative;
            width: 100%;
            height: 400px;
            background: linear-gradient(to left, rgba(204, 204, 204, 0.4), rgba(0, 14, 139, 0.9)),
                url('images/boletin1.jpg') no-repeat center center/cover;
            display: flex;
            align-items: center;
            justify-content: start;
            padding-left: 20px;
        }

        .banner h1 {
            color: white;
            font-size: 50px;
            font-weight: bold;
            margin-left: 140px;
            font-family: 'Panton Narrow Black Italic', sans-serif;
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
        <h1>PLANEAMIENTO Y<br>ORGANIZACIÓN</h1>
    </div>
    <div class="iframe-container">
        <iframe src="https://www.transparencia.gob.pe/enlaces/pte_transparencia_enlaces.aspx?id_entidad=10148&id_tema=5&ver=" frameborder="0"></iframe>
    </div>
@endsection