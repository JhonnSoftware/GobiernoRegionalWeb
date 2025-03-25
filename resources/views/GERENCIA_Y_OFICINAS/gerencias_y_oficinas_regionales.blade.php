@extends('layouts.layout')

@section('title', 'Gerencia y Oficinas Regionales')

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

        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            max-width: 1200px;
            margin: 50px auto;
            background: #fff;
            padding: 20px;
        }

        .logo img {
            width: 400px;
            height: 550px;
            border-radius: 15px;
        }

        .divider {
            width: 2px;
            background-color: #ccc;
            height: 500px;
            margin: 0 60px;
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
        .container1 {
            display: grid;
            margin-inline: 1.5rem;
            margin-inline: 5rem;

        }

        .card__container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(230px, 348px));
            justify-content: center;
            gap: 2rem;
        }

        .card__article {
            position: relative;
            background-color: white;
            border: 2px solid #ccc;
            padding: 3rem 1.5rem 1.5rem;
            display: grid;
            row-gap: 1rem;
            overflow: hidden;
            transition: background-color .6s;
            border-radius: 30px;
        }

        .card__img {
            width: 200px;
            justify-self: center;
            filter: drop-shadow(0 8px 24px hsla(170, 12%, 8%, .1));
            transition: transform .4s;
        }

        .card__data {
            display: flex;
            justify-content: center;
            align-items: flex-end;
            transition: transform .4s;
        }

        .card__title {
            font-size: var(--normal-font-size);
            font-weight: 400;
        }

        .card__bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
            transform: scale(1.3);
            z-index: -1;
            transition: transform .4s;
        }

        .card__button {
            background-color: #ff6600c4;
            padding: .75rem 1rem;
            color: #ffff;
            font-weight: bold;
            text-decoration: none;
            display: flex;
            align-items: center;
            column-gap: .5rem;
            justify-self: center;
            box-shadow: 0 8px 24px hsla(170, 12%, 8%, .1);
            position: absolute;
            bottom: -1.5rem;
            opacity: 0;
            pointer-events: none;
            transition: transform .4s, opacity .4s;
        }

        .card__button i {
            font-size: 1.25rem;
            transition: trabsform .4s;
        }

        .card__button:hover i {
            transform: translateX(.5rem);
        }

        /*card animation*/
        .card__article:hover .card__img {
            transform: translateY(-1.5rem);
        }

        .card__article:hover {
            background-color: transparent;
        }

        .card__article:hover .card__button {
            transform: translateY(-3.75rem);
            opacity: 1;
            pointer-events: initial;
        }
    </style>

    <div class="banner fade-in">
        <h1>GERENCIA Y OFICINAS<br>REGIONALES</h1>
    </div>

    <div class="container1 fade-in">
        <div class="card__container">
            <article class="card__article">
                <img src="images/grdeju.png" alt="image" class="card__img"
                    style="width: 300px; height: 180px; object-fit: cover;">

                <a href="{{ url('gerencia_regional_desarrollo_economico') }}" class="card__button">
                    Ver mas... <i class="ri-arrow-right-line"></i>
                </a>
            </article>
            <article class="card__article">
                <img src="images/grppatju.png" alt="image" class="card__img"
                    style="width: 300px; height: 190px; object-fit: cover;">

                <a href="{{ url('gerencia_regional_de_planeamiento_presupuesto_y_acondicionamiento_territorial') }}"
                    class="card__button">
                    Ver mas... <i class="ri-arrow-right-line"></i>
                </a>
            </article>
            <article class="card__article">
                <img src="images/grrngaju.png" alt="image"
                    class="card__img"style="width: 300px; height: 190px; object-fit: cover;">

                <a href="{{ url('grrnga') }}" class="card__button">
                    Ver mas... <i class="ri-arrow-right-line"></i>
                </a>
            </article>
            <article class="card__article">
                <img src="images/grdsju.png" alt="image" class="card__img"
                    style="width: 300px; height: 190px; object-fit: cover;">

                <a href="{{ url('gerencia_regional_de_desarrollo_social') }}" class="card__button">
                    Ver mas... <i class="ri-arrow-right-line"></i>
                </a>
            </article>
            <article class="card__article">
                <img src="images/griju.png" alt="image" class="card__img"
                    style="width: 300px; height: 190px; object-fit: cover;">


                <a href="{{ url('gerencia_regional_de_infraestructura') }}" class="card__button">
                    Ver mas... <i class="ri-arrow-right-line"></i>
                </a>
            </article>
            <article class="card__article">
                <img src="images/orafju.png" alt="image" class="card__img"
                    style="width: 300px; height: 250px; object-fit: cover;">



                <a href="{{ url('oficina_regional_de_administracion_y_finanzas') }}" class="card__button">
                    Ver mas... <i class="ri-arrow-right-line"></i>
                </a>
            </article>
            <article class="card__article">
                <img src="images/orajuju.png" alt="image" class="card__img"
                    style="width: 300px; height: 250px; object-fit: cover;">



                <a href="{{ url('oficina_regional_de_asesoria_juridica') }}" class="card__button">
                    Ver mas... <i class="ri-arrow-right-line"></i>
                </a>
            </article>
            <article class="card__article">
                <img src="images/orcju.png" alt="image"
                    class="card__img"style="width: 300px; height: 250px; object-fit: cover;">



                <a href="{{ url('oficina_regional_de_comunicaciones') }}" class="card__button">
                    Ver mas... <i class="ri-arrow-right-line"></i>
                </a>
            </article>
            <article class="card__article">
                <img src="images/orci.png" alt="image" class="card__img"
                    style="width: 300px; height: 250px; object-fit: cover;">


                <a href="{{ url('oficina_regional_de_control_interno') }}" class="card__button">
                    Ver mas... <i class="ri-arrow-right-line"></i>
                </a>
            </article>
            <article class="card__article">
                <img src="images/orditiju.png" alt="image" class="card__img"
                    style="width: 300px; height: 250px; object-fit: cover;">

                <a href="{{ url('oficina_regional_de_desarrollo_institucional_y_tecnologia_de_la_informacion') }}"
                    class="card__button">
                    Ver mas... <i class="ri-arrow-right-line"></i>
                </a>
            </article>

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
