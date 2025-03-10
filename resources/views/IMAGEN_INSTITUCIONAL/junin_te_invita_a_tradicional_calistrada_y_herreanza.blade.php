@extends('layouts.layout')
@section('title', 'Galerias Fotograficas')
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
       .pag{
           display: flex;
           align-content: center;
           justify-content: center;
       }
       .link-ul{
           margin: 20px 30px;
       }
       .link-ul .link-li{
           display: inline-block;
           width: 45px;
           height: 45px;
           border-radius: 50%;
           text-align: center;
           font-size: 18px;
           font-weight: 500;
           line-height: 45px;
           cursor: pointer;
           background-position: 0 -45px;
           transition: background-position 0.5s;
       }


       .link-li.active{
           color: #fff;
           background-image: linear-gradient(#ff6700, #ff6700);
           background-repeat: no-repeat;
           background-position: 0 0;
       }
       .btn1, .btn2{
           display: inline-flex;
           align-items: center;
           font-size: 18px;
           font-weight: 500;
           color: #383838;
           background: transparent;
           outline: none;
           border: none;
           cursor: pointer;
       }


       .btn1 img{
           width: 24px;
           margin-right: 15px;
       }
       .btn2 img{
           width: 24px;
           margin-left: 15px;
           transform: rotate(180deg);
       }
       .image-container {
            position: relative;
            max-width: 800px;
            margin: auto;
            overflow: hidden;
            border-radius: 10px;
            cursor: pointer; /* Cambia el cursor a "mano" */
        }

        .image-container img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.3s ease-in-out; /* Agrega un pequeño efecto al pasar el mouse */
        }

        .image-container:hover img {
            transform: scale(1.05); /* Efecto de zoom al pasar el cursor */
        }

        .overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            background: rgba(255, 255, 255, 0.9);
            padding: 15px;
            text-align: center;
            font-weight: bold;
            box-sizing: border-box;
        }

        .caption-footer {
            background-color: #ff6600;
            color: white;
            font-size: 14px;
            padding: 5px;
            font-weight: bold;
            margin-top: 5px;
        }

        /* Para que todo el contenedor sea clickeable */
        .image-container a {
            display: block;
            text-decoration: none;
            color: inherit;
        }
    </style>

    <div class="banner">
        <h1>FOTOGALERÍA</h1>
    </div>

    
    
    

@endsection
