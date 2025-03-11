@extends('layouts.layout')

@section('title', 'Direcciones Regionales')

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
        .container1{
            display: grid;
            margin-inline: 1.5rem;
            margin-inline: 5rem;
            
        }

        .card__container{
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(230px, 348px));
            justify-content: center;
            gap: 2rem;
        }

        .card__article{
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
        .card__img{
        width: 200px;
        justify-self: center;
        filter: drop-shadow(0 8px 24px hsla(170, 12%, 8%, .1));
        transition: transform .4s;
        }
        .card__data{
        display: flex;
        justify-content: center;
        align-items: flex-end;
        transition: transform .4s;
        }
        .card__title{
        font-size: var(--normal-font-size);
        font-weight: 400;
        }
        .card__bg{
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
        .card__button{
        background-color: #fff;
        padding: .75rem 1rem;
        color: var(--black-color);
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

        .card__button i{
        font-size: 1.25rem;
        transition: trabsform .4s;
        }

        .card__button:hover i{
        transform: translateX(.5rem);
        }
        /*card animation*/
        .card__article:hover .card__img{
        transform: translateY(-1.5rem);
        }
        .card__article:hover .card__data{
        transform: translateY(-4.5rem);
        opacity: 0; /*alza sin back*/
        }
        .card__article:hover{
        background-color: transparent;
        }
        .card__article:hover .card__bg{
        transform: scale(1);
        }
        .card__article:hover .card__button{
        transform: translateY(-3.75rem);
        opacity: 1;
        pointer-events: initial;
        }
    </style>

    <div class="banner">
        <h1>DIRECCIONES REGIONALES</h1>
    </div>

    <div class="container1">
        <div class="card__container">
            <article class="card__article">
                <img src="images/draju.png" alt="image" class="card__img" style="width: 300px; height: 180px; object-fit: cover;">

                <div class="card__data">
                    <h3 class="card__title">Direccion Regional de Agricultura</h3>
                </div>

                <img src="images/fondodraju.png" alt="image" class="card__bg">

                <a href="{{ url('direccion_regional_de_agricultura') }}" class="card__button">
                    Ver mas... <i class="ri-arrow-right-line"></i>
                </a>
            </article>
            <article class="card__article">
                <img src="images/drarchju.png" alt="image" class="card__img" style="width: 300px; height: 190px; object-fit: cover;">

                <div class="card__data">
                    <h3 class="card__title">Direccion Regional de Archivo</h3>
                </div>

                <img src="images/fondodrarchju.jpg" alt="image" class="card__bg">

                <a href="{{ url('direccion_regional_de_archivo') }}" class="card__button">
                    Ver mas... <i class="ri-arrow-right-line"></i>
                </a>
            </article>
            <article class="card__article">
                <img src="images/diresaju.png" alt="image" class="card__img">

                <div class="card__data">
                    <h3 class="card__title">Direccion Regional de Salud</h3>
                </div>

                <img src="images/fondodiresaju.jpg" alt="image" class="card__bg">

                <a href="{{ url('direccion_regional_de_salud') }}" class="card__button">
                    Ver mas... <i class="ri-arrow-right-line"></i>
                </a>
            </article>
            <article class="card__article">
                <img src="images/dirceturju.png" alt="image" class="card__img">

                <div class="card__data">
                    <h3 class="card__title">Direccion Regional de Comercio Exterior y Turismo</h3>
                </div>

                <img src="images/fondodircetur.jpg" alt="image" class="card__bg">

                <a href="{{ url('direccion_regional_de_comercio_exterior_y_turismo') }}" class="card__button">
                    Ver mas... <i class="ri-arrow-right-line"></i>
                </a>
            </article>
            <article class="card__article">
                <img src="images/dreju.png" alt="image" class="card__img">

                <div class="card__data">
                    <h3 class="card__title">Direccion Regional de Educacion</h3>
                </div>

                <img src="images/fondodreju.jpeg" alt="image" class="card__bg">

                <a href="{{ url('direccion_regional_de_educacion') }}" class="card__button">
                    Ver mas... <i class="ri-arrow-right-line"></i>
                </a>
            </article>
            <article class="card__article">
                <img src="images/dreymju.png" alt="image" class="card__img" style="width: 300px; height: 250px; object-fit: cover;">

                <div class="card__data">
                    <h3 class="card__title">Direccion Regional de Energia y Minas</h3>
                </div>

                <img src="images/fondoreymju.jpg" alt="image" class="card__bg">

                <a href="{{ url('direccion_regional_de_energia_y_minas') }}" class="card__button">
                    Ver mas... <i class="ri-arrow-right-line"></i>
                </a>
            </article>
            <article class="card__article">
                <img src="images/direproju.png" alt="image" class="card__img">

                <div class="card__data">
                    <h3 class="card__title">Direccion Regional de Producción</h3>
                </div>

                <img src="images/fondodireproju.jpg" alt="image" class="card__bg">

                <a href="{{ url('direccion_regional_de_produccion') }}" class="card__button">
                    Ver mas... <i class="ri-arrow-right-line"></i>
                </a>
            </article>
            <article class="card__article">
                <img src="images/drtpeju.png" alt="image" class="card__img">

                <div class="card__data">
                    <h3 class="card__title">Direccion Regional de Trabajo y Promoción del Empleo</h3>
                </div>

                <img src="images/fondodrtpe.png" alt="image" class="card__bg">

                <a href="{{ url('direccion_regional_de_trabajo_y_promocion_del_empleo') }}" class="card__button">
                    Ver mas... <i class="ri-arrow-right-line"></i>
                </a>
            </article>
            <article class="card__article">
                <img src="images/drtcju.png" alt="image" class="card__img">

                <div class="card__data">
                    <h3 class="card__title">Direccion Regional de Transportes y Comunicaciones</h3>
                </div>

                <img src="images/fondodrtc.jpeg" alt="image" class="card__bg">

                <a href="{{ url('direccion_regional_de_transportes_y_comunicaciones') }}" class="card__button">
                    Ver mas... <i class="ri-arrow-right-line"></i>
                </a>
            </article>
            <article class="card__article">
                <img src="images/drvysju.png" alt="image" class="card__img">

                <div class="card__data">
                    <h3 class="card__title">Direccion Regional de Vivienda, Construccion y Saneamiento</h3>
                </div>

                <img src="images/fondodrvysju.jpg" alt="image" class="card__bg">

                <a href="{{ url('direccion_regional_de_vivienda_construccion_y_saneamiento') }}" class="card__button">
                    Ver mas... <i class="ri-arrow-right-line"></i>
                </a>
            </article>
            
        </div>
    </div>
    
@endsection
