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

    <div class="image-container">
        <a href="https://www.ejemplo.com" target="_blank"> <!-- Reemplaza con tu link -->
            <img src="images/normal_5fd72798079af87e15c47315baa47125.jpg" alt="Evento en Junín">
            <div class="overlay">
                <p>JUNÍN TE INVITA A TRADICIONAL CALISTRADA Y HERRANZA</p>
                <div class="caption-footer">5 FOTOGRAFÍAS DISPONIBLES</div>
            </div>
        </a>
    </div>
    
    <div class="header-alert text-center">
        <strong>FOTOGALERÍAS ANTERIORES</strong><br>
    </div>

    <div class="container py-5">
        <div class="row g-4">
            <div class="col-md-4 d-flex">
                <div class="blog-card w-100" style="border-radius: 0;">
                    <a href="">
                        <img src="images/normal_c8c090299708addff11550778ce0dc9b.jpg" style="height: 400px; width: 450px;" alt="Blog Image">
                    </a>
                    <div class="content">
                        <p style="font-size: 12px; color:#5c5c5c;">DR-de-Educacion / GR-Oficina-Regional-de-Desarrollo-Social</p>
                        <p style="font-size: 12px; color: #ff6700;"><i class="bi bi-list"></i> Hace 2 semanas / Obras / Educación</p>
                        <h1 style="font-size: 24px; font-family: 'prueba-01';">PRIMERA PIEDRA DEL SISTEMA DE SANEAMIENTO RURAL EN SAN JOSÉ DE PANAMÁ</h1>
                        <p style="font-family: 'Times New Roman', serif; color:#5c5c5c;">La región Junín se consolida como referente
                            nacional en desarrollo social con la presentación de dos iniciativas de impacto: el Proyecto Educativo
                            Regional (PER) y Yachay (Aprende)...</p>
                        <a href="" class="btn btn-custom" style="background-color: black; color: white; margin-right: 200px; padding: 2px 20px; border-radius: 0px;">Leer más <i class="fas fa-plus"></i></a>
                    </div>
                </div>  
            </div>
            <div class="col-md-4 d-flex">
                <div class="blog-card w-100">
                    <a href="link2.html">
                        <img src="images/normal_0f13629cb3b0bd3eed600f65a8937ee4.jpg" style="height: 400px; width: 450px;" alt="Blog Image">
                    </a>
                    <div class="content">
                        <p style="font-size: 12px; color:#5c5c5c;">DR-de-Educacion / GR-Oficina-Regional-de-Desarrollo-Social</p>
                        <p style="font-size: 12px; color: #ff6700;"><i class="bi bi-list"></i> Hace 2 semanas / Obras / Educación</p>
                        <h1 style="font-size: 24px; font-family: 'prueba-01';">GERENTES DEL GRJ PRESENTAN PLAN 2025</h1>
                        <p style="font-family: 'Times New Roman', serif; color:#5c5c5c;">Los gerentes y directores del Gobierno Regional Junín (GRJ) expusieron los planes estratégicos para el 2025, destacando su compromiso con mantener el liderazgo en la ejecución del gasto público...</p>
                        <a href="" class="btn btn-custom" style="background-color: black; color: white; margin-right: 200px; padding: 2px 20px; border-radius: 0px;">Leer más <i class="fas fa-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex">
                <div class="blog-card w-100">
                    <a href="link3.html">
                        <img src="images/normal_2b349e2c3ef7e068c24609ebd4a5c850.jpg" style="height: 400px; width: 450px;" alt="Blog Image">
                    </a>
                    <div class="content">
                        <p style="font-size: 12px; color:#5c5c5c;">DR-de-Educacion / GR-Oficina-Regional-de-Desarrollo-Social</p>
                        <p style="font-size: 12px; color: #ff6700;"><i class="bi bi-list"></i> Hace 2 semanas / Obras / Educación</p>
                        <h1 style="font-size: 24px; font-family: 'prueba-01';">GRJ: MODERNIZACION DEL CENTRO DE SALUD DE JUPAY</h1>
                        <p style="font-family: 'Times New Roman', serif; color:#5c5c5c;">El Gobernador Regional Zósimo Cárdenas dispuso mejoras importantes en el Centro de Salud Justicia, Paz y Vida (Jupavi), con la reciente inauguración de nuevos ambientes destinados al área de Recursos Humanos, Estadísticas....</p>
                        <a href="" class="btn btn-custom" style="background-color: black; color: white; margin-right: 200px; padding: 2px 20px; border-radius: 0px;">Leer más <i class="fas fa-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex">
                <div class="blog-card w-100" style="border-radius: 0;">
                    <a href="">
                        <img src="images/normal_ec51dbffaf27aaf549f798a99d2f5ec8.jpg" style="height: 400px; width: 450px;" alt="Blog Image">
                    </a>
                    <div class="content">
                        <p style="font-size: 12px; color:#5c5c5c;">DR-de-Educacion / GR-Oficina-Regional-de-Desarrollo-Social</p>
                        <p style="font-size: 12px; color: #ff6700;"><i class="bi bi-list"></i> Hace 2 semanas / Obras / Educación</p>
                        <h1 style="font-size: 24px; font-family: 'prueba-01';">GRJ:EMPIEZA LA GRAN CONSTRUCCION DEL TUPAC</h1>
                        <p style="font-family: 'Times New Roman', serif; color:#5c5c5c;">"En gestiones anteriores demolían los colegios sin garantizar las clases de los estudiantes, como ocurrió en el colegio Castilla. Ahora es diferente: primero implementamos un plan de contingencia que...</p>
                        <a href="" class="btn btn-custom" style="background-color: black; color: white; margin-right: 200px; padding: 2px 20px; border-radius: 0px;">Leer más <i class="fas fa-plus"></i></a>
                    </div>
                </div>  
            </div>
            <div class="col-md-4 d-flex">
                <div class="blog-card w-100" style="border-radius: 0;">
                    <a href="">
                        <img src="images/normal_3f36878f3ae36030cff74660c3ecb077.jpg" style="height: 400px; width: 450px;" alt="Blog Image">
                    </a>
                    <div class="content">
                        <p style="font-size: 12px; color:#5c5c5c;">DR-de-Educacion / GR-Oficina-Regional-de-Desarrollo-Social</p>
                        <p style="font-size: 12px; color: #ff6700;"><i class="bi bi-list"></i> Hace 2 semanas / Obras / Educación</p>
                        <h1 style="font-size: 24px; font-family: 'prueba-01';">GRJ IMPULSA EDUCACION INTERACTIVA PARA NIÑOS</h1>
                        <p style="font-family: 'Times New Roman', serif; color:#5c5c5c;">En el marco de su compromiso con la educación y el desarrollo tecnológico de los poblados más alejadas, el gobernador Zósimo Cárdenas visitó la escuela del poblado de Huacamayo...</p>
                        <a href="" class="btn btn-custom" style="background-color: black; color: white; margin-right: 200px; padding: 2px 20px; border-radius: 0px;">Leer más <i class="fas fa-plus"></i></a>
                    </div>
                </div>  
            </div>
            <div class="col-md-4 d-flex">
                <div class="blog-card w-100" style="border-radius: 0;">
                    <a href="">
                        <img src="images/normal_3229484b8cc58d8849904368c74d89bd.jpg" style="height: 400px; width: 450px;" alt="Blog Image">
                    </a>
                    <div class="content">
                        <p style="font-size: 12px; color:#5c5c5c;">DR-de-Educacion / GR-Oficina-Regional-de-Desarrollo-Social</p>
                        <p style="font-size: 12px; color: #ff6700;"><i class="bi bi-list"></i> Hace 2 semanas / Obras / Educación</p>
                        <h1 style="font-size: 24px; font-family: 'prueba-01';">GRJ ANUNCIA CONSTRUCCION DE CETPRO EN LA OROYA</h1>
                        <p style="font-family: 'Times New Roman', serif; color:#5c5c5c;">A favor de tener jóvenes que amplíen el mercado laboral, se han iniciado las gestiones para la construcción de un Centro de Educación Técnico-Productiva (Cetpro) en la provincia de Yauli La Oroya.)...</p>
                        <a href="" class="btn btn-custom" style="background-color: black; color: white; margin-right: 200px; padding: 2px 20px; border-radius: 0px;">Leer más <i class="fas fa-plus"></i></a>
                    </div>
                </div>  
            </div>
        </div>
    </div>

@endsection
