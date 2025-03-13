@extends('layouts.layout')
@section('title', 'Manual de identidad coorporativa')
@section('contenido-principal')
    <style>
        @font-face {
            font-family: 'prueba-01';
            src: url('css/fonts/Fontspring-DEMO-uniformprocon-bld.otf') format('opentype');
            font-weight: normal;
            font-style: normal;
        }

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
                    <a href="">
                        <img src="images/1740152384_Yachay-57.jpg" style="height: 400px; width: 450px;" alt="Blog Image">
                    </a>
                    <div class="content">
                        <p style="font-size: 12px; color:#5c5c5c;">DR-de-Educacion / GR-Oficina-Regional-de-Desarrollo-Social</p>
                        <p style="font-size: 12px; color: #ff6700;"><i class="bi bi-list"></i> Hace 2 semanas / Obras / Educación</p>
                        <h1 style="font-size: 24px; font-family: 'prueba-01';">JUNIN REVOLUCIONA SU FUTURO CON PROYECTOS EDUCATIVOS</h1>
                        <p style="font-family: 'Times New Roman', serif; color:#5c5c5c;">La región Junín se consolida como referente
                            nacional en desarrollo social con la presentación de dos iniciativas de impacto: el Proyecto Educativo
                            Regional (PER) y Yachay (Aprende)...</p>
                        <a href="" class="btn btn-custom" style="background-color: #10329e; color: white; margin-right: 200px; padding: 2px 20px; border-radius: 0px;">Leer más <i class="fas fa-plus"></i></a>
                    </div>
                </div>  
            </div>
            <div class="col-md-4 d-flex">
                <div class="blog-card w-100" style="border-radius: 0;">
                    <a href="link2.html">
                        <img src="images/1740152226_IMG_8244 (2).jpg" style="height: 400px; width: 450px;" alt="Blog Image">
                    </a>
                    <div class="content">
                        <p style="font-size: 12px; color:#5c5c5c;">DR-de-Educacion / GR-Oficina-Regional-de-Desarrollo-Social</p>
                        <p style="font-size: 12px; color: #ff6700;"><i class="bi bi-list"></i> Hace 2 semanas / Obras / Educación</p>
                        <h1 style="font-size: 24px; font-family: 'prueba-01';">GERENTES DEL GRJ PRESENTAN PLAN 2025</h1>
                        <p style="font-family: 'Times New Roman', serif; color:#5c5c5c;">Los gerentes y directores del Gobierno Regional Junín (GRJ) expusieron los planes estratégicos para el 2025, destacando su compromiso con mantener el liderazgo en la ejecución del gasto público...</p>
                        <a href="" class="btn btn-custom" style="background-color: #10329e; color: white; margin-right: 200px; padding: 2px 20px; border-radius: 0px;">Leer más <i class="fas fa-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex">
                <div class="blog-card w-100" style="border-radius: 0;">
                    <a href="link3.html">
                        <img src="images/1740151071_DSC_5617 (1).jpg" style="height: 400px; width: 450px;" alt="Blog Image">
                    </a>
                    <div class="content">
                        <p style="font-size: 12px; color:#5c5c5c;">DR-de-Educacion / GR-Oficina-Regional-de-Desarrollo-Social</p>
                        <p style="font-size: 12px; color: #ff6700;"><i class="bi bi-list"></i> Hace 2 semanas / Obras / Educación</p>
                        <h1 style="font-size: 24px; font-family: 'prueba-01';">GRJ: MODERNIZACION DEL CENTRO DE SALUD DE JUPAY</h1>
                        <p style="font-family: 'Times New Roman', serif; color:#5c5c5c;">El Gobernador Regional Zósimo Cárdenas dispuso mejoras importantes en el Centro de Salud Justicia, Paz y Vida (Jupavi), con la reciente inauguración de nuevos ambientes destinados al área de Recursos Humanos, Estadísticas....</p>
                        <a href="" class="btn btn-custom" style="background-color: #10329e; color: white; margin-right: 200px; padding: 2px 20px; border-radius: 0px;">Leer más <i class="fas fa-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex">
                <div class="blog-card w-100" style="border-radius: 0;">
                    <a href="">
                        <img src="images/1740150927_WhatsApp Image 2025-01-29 at 12.22.14 PM.jpeg" style="height: 400px; width: 450px;" alt="Blog Image">
                    </a>
                    <div class="content">
                        <p style="font-size: 12px; color:#5c5c5c;">DR-de-Educacion / GR-Oficina-Regional-de-Desarrollo-Social</p>
                        <p style="font-size: 12px; color: #ff6700;"><i class="bi bi-list"></i> Hace 2 semanas / Obras / Educación</p>
                        <h1 style="font-size: 24px; font-family: 'prueba-01';">GRJ:EMPIEZA LA GRAN CONSTRUCCION DEL TUPAC</h1>
                        <p style="font-family: 'Times New Roman', serif; color:#5c5c5c;">"En gestiones anteriores demolían los colegios sin garantizar las clases de los estudiantes, como ocurrió en el colegio Castilla. Ahora es diferente: primero implementamos un plan de contingencia que...</p>
                        <a href="" class="btn btn-custom" style="background-color: #10329e; color: white; margin-right: 200px; padding: 2px 20px; border-radius: 0px;">Leer más <i class="fas fa-plus"></i></a>
                    </div>
                </div>  
            </div>
            <div class="col-md-4 d-flex">
                <div class="blog-card w-100" style="border-radius: 0;">
                    <a href="">
                        <img src="images/1740150712_WhatsApp Image 2025-01-29 at 12.21.42 PM.jpeg" style="height: 400px; width: 450px;" alt="Blog Image">
                    </a>
                    <div class="content">
                        <p style="font-size: 12px; color:#5c5c5c;">DR-de-Educacion / GR-Oficina-Regional-de-Desarrollo-Social</p>
                        <p style="font-size: 12px; color: #ff6700;"><i class="bi bi-list"></i> Hace 2 semanas / Obras / Educación</p>
                        <h1 style="font-size: 24px; font-family: 'prueba-01';">GRJ IMPULSA EDUCACION INTERACTIVA PARA NIÑOS</h1>
                        <p style="font-family: 'Times New Roman', serif; color:#5c5c5c;">En el marco de su compromiso con la educación y el desarrollo tecnológico de los poblados más alejadas, el gobernador Zósimo Cárdenas visitó la escuela del poblado de Huacamayo...</p>
                        <a href="" class="btn btn-custom" style="background-color: #10329e; color: white; margin-right: 200px; padding: 2px 20px; border-radius: 0px;">Leer más <i class="fas fa-plus"></i></a>
                    </div>
                </div>  
            </div>
            <div class="col-md-4 d-flex">
                <div class="blog-card w-100" style="border-radius: 0;">
                    <a href="">
                        <img src="images/1740150384_CETPRO LA OROYA.jpg" style="height: 400px; width: 450px;" alt="Blog Image">
                    </a>
                    <div class="content">
                        <p style="font-size: 12px; color:#5c5c5c;">DR-de-Educacion / GR-Oficina-Regional-de-Desarrollo-Social</p>
                        <p style="font-size: 12px; color: #ff6700;"><i class="bi bi-list"></i> Hace 2 semanas / Obras / Educación</p>
                        <h1 style="font-size: 24px; font-family: 'prueba-01';">GRJ ANUNCIA CONSTRUCCION DE CETPRO EN LA OROYA</h1>
                        <p style="font-family: 'Times New Roman', serif; color:#5c5c5c;">A favor de tener jóvenes que amplíen el mercado laboral, se han iniciado las gestiones para la construcción de un Centro de Educación Técnico-Productiva (Cetpro) en la provincia de Yauli La Oroya.)...</p>
                        <a href="" class="btn btn-custom" style="background-color: #10329e; color: white; margin-right: 200px; padding: 2px 20px; border-radius: 0px;">Leer más <i class="fas fa-plus"></i></a>
                    </div>
                </div>  
            </div>
        </div>
    </div>


    <div class="pag">
        <div class="pagination">
            <button class="btn1" onclick="backBtn()"> <img src="images/arrow.png" alt=""> Volver</button>
            <ul class="link-ul">
                <li class="link-li active" value="1" onclick="activeLink()">1</li>
                <li class="link-li" value="2" onclick="activeLink()">2</li>
                <li class="link-li" value="3" onclick="activeLink()">3</li>
                <li class="link-li" value="4" onclick="activeLink()">4</li>
                <li class="link-li" value="5" onclick="activeLink()">5</li>
                <li class="link-li" value="6" onclick="activeLink()">6</li>
            </ul>
            <button class="btn2" onclick="nextBtn()">Sig <img src="images/arrow.png" alt=""> </button>
        </div>
    </div>
    <script>
        let link = document.getElementsByClassName("link-li");


        let curentValue = 1;


        function activeLink(){
            for(l of link){
                l.classList.remove("active");
            }
            event.target.classList.add("active");
            currentValue = event.target.value;
        }


        function backBtn(){
            if(currentValue > 1){
                for(l of link){
                    l.classList.remove("active");
                }
                currentValue--;
                link[currentValue-1].classList.add("active");
            }
        }


        function nextBtn(){
            if(currentValue < 6){
                for(l of link){
                    l.classList.remove("active");
                }
                currentValue++;
                link[currentValue-1].classList.add("active");
            }
        }


    </script>
@endsection



