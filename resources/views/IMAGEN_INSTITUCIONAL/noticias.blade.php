@extends('layouts.layout')
@section('title', 'Manual de identidad coorporativa')
@section('contenido-principal')
    <style>
        @font-face {
            font-family: 'prueba-01';
            src: url('css/fonts/Fontspring-DEMO-uniformprocon-lgt.otf') format('opentype');
            font-weight: normal;
            font-style: normal;
        }

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
            width: 1300px;
            margin: 40px auto; /* Centrado horizontalmente */
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .blog-card {
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            height: 100%;
            text-decoration: none;
            color: inherit;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .blog-card:hover {
            transform: scale(1.05);
            box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.2);
        }
        .blog-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        .blog-card .content {
            padding: 15px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .btn-custom {
            background-color: #1457b4;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .btn-custom i {
            margin-left: 5px;
        }
    </style>
    <div class="banner">
        <h1>NOTICIAS</h1>
    </div>
    <div class="header-alert text-center">
        <strong>ARCHIVO DE NOTICIAS</strong><br>
    </div>

    <div class="container py-5">
        <div class="row g-4">
            <div class="col-md-4 d-flex">
                <div class="blog-card w-100" style="border-radius: 0;">
                    <a href="link1.html">
                        <img src="images/1740152384_Yachay-57.jpg" alt="Blog Image">
                    </a>
                    <div class="content">
                        <p style="font-size: 12px;">DR-de-Educacion / GR-Oficina-Regional-de-Desarrollo-Social</p>
                        <p style="font-size: 12px; color: #ff6700;"><i class="bi bi-list"></i> Hace 2 semanas / Obras / Educación</p>
                        <h1 style="font-size: 20px; font-family: 'prueba-01';">JUNÍN REVOLUCIONA SU FUTURO CON PROYECTOS EDUCATIVOS</h1>
                        <p>La región Junín se consolida como referente nacional en desarrollo social con la presentación de dos iniciativas de impacto: el Proyecto Educativo Regional (PER) y Yachay (Aprende), orientados a transformar la educación y fortalecer los núcleos familiares...</p>
                        <a href="link1.html" class="btn btn-custom">Leer más <i class="fas fa-plus"></i></a>
                    </div>
                </div>  
            </div>
            <div class="col-md-4 d-flex">
                <div class="blog-card w-100">
                    <a href="link2.html">
                        <img src="image2.jpg" alt="Blog Image">
                    </a>
                    <div class="content">
                        <h5>Cras ultricies ligula sed magna dictum porta.</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <a href="link2.html" class="btn btn-custom">Leer más <i class="fas fa-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex">
                <div class="blog-card w-100">
                    <a href="link3.html">
                        <img src="image3.jpg" alt="Blog Image">
                    </a>
                    <div class="content">
                        <h5>Donec sollicitudin molestie malesuada.</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <a href="link3.html" class="btn btn-custom">Leer más <i class="fas fa-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex">
                <div class="blog-card w-100">
                    <a href="link4.html">
                        <img src="image4.jpg" alt="Blog Image">
                    </a>
                    <div class="content">
                        <h5>Donec sollicitudin molestie malesuada.</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <a href="link4.html" class="btn btn-custom">Leer más <i class="fas fa-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex">
                <div class="blog-card w-100">
                    <a href="link5.html">
                        <img src="image5.jpg" alt="Blog Image">
                    </a>
                    <div class="content">
                        <h5>Satisne vobis videor pro meo iure in vestris auribus commentatus.</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <a href="link5.html" class="btn btn-custom">Leer más <i class="fas fa-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex">
                <div class="blog-card w-100">
                    <a href="link6.html">
                        <img src="image6.jpg" alt="Blog Image">
                    </a>
                    <div class="content">
                        <h5>Pellentesque in ipsum id orci porta dapibus.</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <a href="link6.html" class="btn btn-custom">Leer más <i class="fas fa-plus"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection