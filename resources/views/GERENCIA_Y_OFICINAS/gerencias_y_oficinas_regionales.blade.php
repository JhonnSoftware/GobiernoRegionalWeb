@extends('layouts.layout')

@section('title', 'Gerencia General Regional')

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
        background-color: #ff6600c4;
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

        .card__article:hover{
        background-color: transparent;
        }

        .card__article:hover .card__button{
        transform: translateY(-3.75rem);
        opacity: 1;
        pointer-events: initial;
        }
    </style>

    <div class="banner">
        <h1>GERENCIA Y OFICINAS<br>REGIONALES</h1>
    </div>

    <div class="container1">
        <div class="card__container">
            <article class="card__article">
                <img src="images/grdeju.png" alt="image" class="card__img" style="width: 300px; height: 180px; object-fit: cover;">


                
                <a href="gerenci_d_e.html" class="card__button">
                    Ver mas... <i class="ri-arrow-right-line"></i>
                </a>
            </article>
            <article class="card__article">
                <img src="images/grppatju.png" alt="image" class="card__img" style="width: 300px; height: 190px; object-fit: cover;">


                

                <a href="#" class="card__button">
                    Ver mas... <i class="ri-arrow-right-line"></i>
                </a>
            </article>
            <article class="card__article">
                <img src="images/grrngaju.png" alt="image" class="card__img"style="width: 300px; height: 190px; object-fit: cover;">

                

                <a href="#" class="card__button">
                    Ver mas... <i class="ri-arrow-right-line"></i>
                </a>
            </article>
            <article class="card__article">
                <img src="images/grdsju.png" alt="image" class="card__img" style="width: 300px; height: 190px; object-fit: cover;">


                <a href="gerencia_d_s.html" class="card__button">
                    Ver mas... <i class="ri-arrow-right-line"></i>
                </a>
            </article>
            <article class="card__article">
                <img src="images/griju.png" alt="image" class="card__img" style="width: 300px; height: 190px; object-fit: cover;">


                <a href="#" class="card__button">
                    Ver mas... <i class="ri-arrow-right-line"></i>
                </a>
            </article>
            <article class="card__article">
                <img src="images/orafju.png" alt="image" class="card__img" style="width: 300px; height: 250px; object-fit: cover;">

                

                <a href="#" class="card__button">
                    Ver mas... <i class="ri-arrow-right-line"></i>
                </a>
            </article>
            <article class="card__article">
                <img src="images/orajuju.png" alt="image" class="card__img" style="width: 300px; height: 250px; object-fit: cover;">

                

                <a href="#" class="card__button">
                    Ver mas... <i class="ri-arrow-right-line"></i>
                </a>
            </article>
            <article class="card__article">
                <img src="images/orcju.png" alt="image" class="card__img"style="width: 300px; height: 250px; object-fit: cover;">

                

                <a href="#" class="card__button">
                    Ver mas... <i class="ri-arrow-right-line"></i>
                </a>
            </article>
            <article class="card__article">
                <img src="images/orci.png" alt="image" class="card__img" style="width: 300px; height: 250px; object-fit: cover;">

            
                <a href="#" class="card__button">
                    Ver mas... <i class="ri-arrow-right-line"></i>
                </a>
            </article>
            <article class="card__article">
                <img src="images/orditiju.png" alt="image" class="card__img" style="width: 300px; height: 250px; object-fit: cover;">

                <!--<div class="card__data">
                    <h3 class="card__title">Gerencia Regional de Desarrollo Institucional y Tecnologia de la informacion</h3>
                </div>-->


                <a href="#" class="card__button">
                    Ver mas... <i class="ri-arrow-right-line"></i>
                </a>
            </article>
            
        </div>
    </div>
    
@endsection
