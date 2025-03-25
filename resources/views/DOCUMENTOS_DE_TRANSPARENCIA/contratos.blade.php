@extends('layouts.layout')


@section('title', 'Contratos')


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
            justify-content: center;
            /* Centra el contenido horizontalmente */
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
            width: 160px;
            /* Ancho de la línea */
            height: 5px;
            /* Grosor de la línea */
            background-color: #ff6700;
            margin: 10px auto 0;
            /* Espaciado y centrado */
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
        <h1>CONTRATOS</h1>
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
            <strong>DOCUMENTOS DESCARGABLES</strong><br>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>05/02/2025</small><br>
                    <span class="event-title">CONTRATO Nº316-2024 CONTRATACIÓN DE CONSULTO RÍA DE OBRA: ELABORACIÓN DEL 
                        EXPEDIENTE TÉCNICO DEL PROYECTO: MEJORAMIENTO DE LOS SERVICIOS OPERATIVOS O MISIONALES 
                        INSTITUCIONALES EN LA DIRECCIÓN DE COMPETITIVIDAD AGRARIA DEL GOBIERNO REGIONAL</span><br>
                    <small>1.5 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>05/02/2025</small><br>
                    <span class="event-title">CONTRATO Nº317-2024 CONTRATACIÓN DEL SERVICIO DE CONSULTORÍA DE OBRA: PARA 
                        LA ELABORACIÓN DEL EXPEDIENTE TÉCNICO DEL PROYECTO DE INVERSIÓN: MEJORAMIENTO DEL SERVICIO DE 
                        MOVILIDAD URBANA EN CIRCUITO CAMINO REAL DE LOS WANCAS: AV. 31 DE OCTUBRE</span><br>
                    <small>1.9 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>05/02/2025</small><br>
                    <span class="event-title">CONTRATO Nº318-2024 CONTRATACIÓN DE BIENES: ADQUISICIÓN DE COMBUSTIBLE 
                        PARA LA OBRA: MEJORAMIENTO DEL SERVICIO DE TRANSITABILIDAD DE LAS CALLES Y AVENIDAS COLINDANTES 
                        A LA PLAZA CÍVICA DE SAN MARTÍN DE PANGOA DEL DISTRITO DE PANGOA</span><br>
                    <small>715.3 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>11/04/2019</small><br>
                    <span class="event-title">CONTRATO Nº320-2024 CONTRATACIÓN DE EJECUCIÓN DE OBRA: CONSTRUCCIÓN DEL 
                        PUENTE CUYANI EN EL TRAMO DEL CAMINO VECINAL ENTRE EL CENTRO POBLADO CENTRO CUYANI Y LA 
                        COMUNIDAD NATIVA PAMPA FLECHA DISTRITO PICHANAKI</span><br>
                    <small>3.1 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>21/09/2016</small><br>
                    <span class="event-title">CONTRATO Nº321-2024 CONTRATACIÓN DE SERVICIOS EN GENERAL: SERVICIO DE MONITOREO 
                        AMBIENTAL DE LA CALIDAD DE AGUA, AIRE, SUELO Y RUIDO AMBIENTAL PARA EL PROYECTO: MEJORAMIENTO DE LOS 
                        SERVICIOS DE GESTIÓN DE LA DIVERSIDAD BIOLÓGICA 9 PROVINCIAS</span><br>
                    <small>821 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>27/08/2008</small><br>
                    <span class="event-title">CONTRATO Nº022-2025 ADQUISICIÓN DE ACERO Y CLAVOS PARA EL PROYECTO: MEJORAMIENTO DEL
                         SERVICIO DE TRANSIT ABILIDAD DE LAS CALLES Y AVENIDAS COLINDANTES A LA PLAZA CÍVICA DE SAN MARTÍN DE 
                         PANGOA DEL DISTRITO DE PANGOA- PROVINCIA DE SATIPO- DEPARTAMEN</span><br>
                    <small>711.3 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>27/02/2003</small><br>
                    <span class="event-title">CONTRATO Nº017-2025 CONTRATACIÓN DE BIENES: ADQUISICIÓN DE ALIMENTOS (VIVERES) 
                        PARA TRABAJADORES DEL GOBIERNO REGIONAL DE JUNIN</span><br>
                    <small>1.6 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>27/02/2003</small><br>
                    <span class="event-title">CONTRATO Nº016-2025 CONTRATACIÓN DEL SERVICIO DE CONSULTORÍA DE OBRA PARA LA 
                        ELABORACIÓN DEL EXPEDIENTE TÉCNICO DEL PROYECTO DE INVERSIÓN: MEJORAMIENTO DEL SERVICIO DE EDUCACIÓN 
                        SUPERIOR TECNOLÓGICA EN EL IESTP 9 DE MAYO DISTRITO DE MANZANARES</span><br>
                    <small>2.4 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>27/02/2003</small><br>
                    <span class="event-title">CONTRATO Nº015-2025 CONTRATACIÓN DE LA EJECUCIÓN DE LA OBRA: MEJORAMIENTO DEL 
                        SERVICIO EDUCATIVO DEL NIVEL PRIMARIO DE LA I.E. Nº 31420 DEL CENTRO POBLADO DE SHANKIVIRONI DEL 
                        DISTRITO DE PERENE - PROVINCIA DE CHANCHAMAYO - DEPARTAMENTO DE JUNIN</span><br>
                    <small>3.8 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>27/02/2003</small><br>
                    <span class="event-title">CONTRATO Nº011-2025 CONTRATACIÓN DE EJECUCIÓN DE LA OBRA: MEJORAMIENTO LOS SERVICIOS 
                        DE SALUD DEL PUESTO DE SALUD DE YANAMUCLO DISTRITO DE MATAHUASI - PROVINCIA DE CONCEPCIÓN - DEPARTAMENTO 
                        DE JUNÍN CON CUI 2488800</span><br>
                    <small>2.7 MB</small>
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
        document.addEventListener("DOMContentLoaded", function() {
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



