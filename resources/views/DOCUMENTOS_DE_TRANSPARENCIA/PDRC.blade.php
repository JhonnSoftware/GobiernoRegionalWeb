@extends('layouts.layout')

@section('title', 'PDRC')

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

        .container-pag{
            width: 100%;
            height: 100vh;
            background: linear-gradient(45deg, #410358, #4700bc);
            display: flex;
            align-content: center;
            justify-content: center;
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

        .filter-container {
            display: flex;
            align-items: center;
            gap: 20px;
            flex-wrap: wrap;
        }
        .filter-group {
            display: flex;
            flex-direction: column;
        }
        .input-group-text {
            background-color: #fff;
        }
        .input-group{
            width: 420px;
        }
        .input-group .form-control {
            padding: 12px 16px; /* Más alto y con más espacio lateral */
            font-size: 16px; /* Para que el texto se vea bien con más padding */
        }
        .header-alert {
            background-color: #ff6700;
            color: white;
            padding: 15px;
            border-radius: 10px;
            font-size: 16px;
        }
        .event-card {
            display: flex;
            align-items: center;
            background: white;
            border-radius: 10px;
            padding: 15px;
            margin-bottom: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .event-icon {
            background: #ff6700;
            color: white;
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 10px;
            font-size: 24px;
            margin-right: 15px;
        }
        .event-info {
            flex-grow: 1;
        }
        .event-title {
            font-weight: bold;
            color: #ff6700;
        }
    </style>

    <div class="banner fade-in">
        <h1>PLAN DE DESARROLLO REGIONAL<br>CONCERTADO (PDRC)</h1>
    </div>

    <div class="container mt-4 fade-in">
        <div class="filter-container">
            <!-- Filtro por fecha -->
            <div class="filter-group">
                <label class="fw-bold">Filtrar por fecha de publicación</label>
                <div class="d-flex gap-2">
                    <div class="input-group">
                        <input type="date" class="form-control">
                        <span class="input-group-text"><i class="bi bi-calendar"></i></span>
                    </div>
                    <div class="input-group">
                        <input type="date" class="form-control">
                        <span class="input-group-text"><i class="bi bi-calendar"></i></span>
                    </div>
                </div>
            </div>
    
            <!-- Filtro por palabra clave -->
            <div class="filter-group">
                <label class="fw-bold">Filtrar por palabra clave</label>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Buscar...">
                    <span class="input-group-text"><i class="bi bi-search"></i></span>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container mt-4 fade-in">
        <div class="header-alert text-center">
            <strong>REPORTE DE SEGUIMIENTO DEL PDRC - JUNIN AL 2050</strong><br>
        </div>
    
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>11/10/2024</small><br>
                    <span class="event-title">REPORTE DE SEGUIMIENTO DEL PDRC - JUNIN AL 2050 CON METAS AL 2021 Y 2030 CORRESPONDIENTE AL AÑO 2023</span><br>
                    <small>3.3 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
        </div>

        <div class="header-alert text-center">
            <strong>REPORTE DE SEGUIMIENTO DEL PDRC</strong><br>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>30/10/2023</small><br>
                    <span class="event-title">REPORTE DE SEGUIMIENTO DEL PDRC - JUNÍN AL 2050 CON METAS AL 2021 Y 2030 CORRESPONDIENTE AL AÑO 2022 - EVALUACIÓN DE INDICADORES</span><br>
                    <small>1004.6 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>30/10/2023</small><br>
                    <span class="event-title">REPORTE DE SEGUIMIENTO DEL PRDC - JUNÍN AL 2050 CON METAS AL 2021 Y 2030 CORRESPONDIENTE AL AÑO 2022</span><br>
                    <small>3.4 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
        </div>
        <div class="header-alert text-center">
            <strong>INFORME DE EVALUACIÓN PDRC JUNIN AL 2025</strong><br>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>20/12/2024</small><br>
                    <span class="event-title">RESOLUCIÓN MATRIZ DE COMPROMISOS PDRC 2021 2023</span><br>
                    <small>3.2 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>25/10/2024</small><br>
                    <span class="event-title">INFORME DE EVALUACIÓN DE RESULTADOS DEL PDRC JUNÍN AL 2050 PERIODO 2021-2023</span><br>
                    <small>1.2 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>28/10/2022</small><br>
                    <span class="event-title">INFORME DE EVALUACIÓN DE RESULTADOS PDRC JUNIN 2015-2021</span><br>
                    <small>5.3 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>30/09/2021</small><br>
                    <span class="event-title">INFORME DE EVALUACIÓN DE IMPLEMENTACION 2020 - PDRC JUNIN AL 2050</span><br>
                    <small>1.9 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
        </div>
        <div class="header-alert text-center">
            <strong></strong><br>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>30/06/2022</small><br>
                    <span class="event-title">Reporte de Seguimiento del PDRC -Junín al 2050 con metas al 2021 y 2030 correspondiente al año 2021</span><br>
                    <small>90 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>10/06/2022</small><br>
                    <span class="event-title">Aviso de Sinceramiento Reporte de Seguimiento del PDRC Junín al 2050 — correspondiente al año 2021</span><br>
                    <small>41.2 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>10/06/2022</small><br>
                    <span class="event-title">Aviso de Sinceramiento Informe de Evaluación de Implementación del PDRC Junín al 2050— correspondiente al año 2021.</span><br>
                    <small>41.8 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>10/06/2022</small><br>
                    <span class="event-title">Aviso de Sinceramiento Informe de Evaluación de Resultados del PDRC Junín al 2050— correspondiente al año 2021.</span><br>
                    <small>40.5 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>21/07/2021</small><br>
                    <span class="event-title">REPORTE DE SEGUIMIENTO - PLAN DE DESARROLLO REGIONAL CONCERTADO</span><br>
                    <small>1.1 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>18/09/2020</small><br>
                    <span class="event-title">AVISO DE SINCERAMIENTO</span><br>
                    <small>357.8 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>06/01/2016</small><br>
                    <span class="event-title">Norma que aprueba el Plan de Desarrollo Regional Concertado al 2050 (con metas al 2021 y al 2030)</span><br>
                    <small>1 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>06/01/2016</small><br>
                    <span class="event-title">Plan de Desarrollo Regional Concertado 2008 - 2015</span><br>
                    <small>4.9 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>20/11/2015</small><br>
                    <span class="event-title">Plan de Desarrollo Regional Concertado al 2050 (con metas al 2021 y al 2030)</span><br>
                    <small>17.5 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>14/10/2015</small><br>
                    <span class="event-title">Norma que aprueba el Plan de Desarrollo Regional Concertado 2008 - 2015</span><br>
                    <small>230.9 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>14/10/2015</small><br>
                    <span class="event-title">Evaluación de Indicadores del PDRC</span><br>
                    <small>128.5 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>14/10/2015</small><br>
                    <span class="event-title">Evaluación de Indicadores del PDRC al 2015</span><br>
                    <small>929.6 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
        </div>
    </div>
    
    <div class="pag fade-in">
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
