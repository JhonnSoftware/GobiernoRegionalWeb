@extends('layouts.layout')
@section('title', 'Galerias Fotograficas')
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

    </style>

    <div class="banner">
        <h1>FOTOGALERÍA</h1>
    </div>

    <div class="header-alert text-center">
        <strong>VIDEOS RECIENTES DE NUESTRO CANAL OFICIAL DE YOUTUBE</strong><br>
    </div>

    

@endsection
