@extends('layouts.layout')


@section('title', 'Convenios y Adendas')


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
        <h1>CONVENIOS Y ADENDAS</h1>
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
                    <small>28/02/2025</small><br>
                    <span class="event-title">CONVENIO Nº138-2025 - CONVENIO DE COOPERACIÓN INTERINSTITUCIONAL ENTRE 
                        LE GOBIERNO REGIONAL DE JUNÍN YLA MUNICIPALIDAD PROVINCIAL DE HUANCAYO PARA LA EVALUACION DEL 
                        EXPEDIENTE TECNICO Y EJECUCION DEL PROYECTO DE INVERSION DENOMINADO: "MEJORAMIENTO DE</span><br>
                    <small>2.2 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>12/01/2022</small><br>
                    <span class="event-title">CONVENIO Nº137-2025 - CONVENIO DE COOPERACIÓN INTERINSTITUCIONAL ENTRE LE 
                        GOBIERNO REGIONAL DE JUNIN YLA MUNICIPALIDAD PROVINCIAL DE HUANCAYO PARA LA EVALUACION DEL EXPEDIENTE 
                        TECNICO Y EJECUCION DEL PROYECTO DE INVERSION DENOMINADO: "MEJORAMIENTO DE</span><br>
                    <small>14.2 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>11/06/2021</small><br>
                    <span class="event-title">CONVENIO Nº136-2025 - CONVENIO DE COOPERACIÓN INTERINSTITUCIONAL ENTRE EL 
                        GOBIERNO REGIONAL DE JUNÍN Y LA MUNICIPALIDAD PROVINCIAL DE HUANCAYO PARA LA EVALUACION DEL EXPEDIENTE 
                        TECNICO Y EJECUCION DEL PROYECTO DE INVERSION DENOMINADO: "MEJORAMIENTO D</span><br>
                    <small>27.8 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>11/04/2019</small><br>
                    <span class="event-title">CONVENIO Nº135-2025 - CONVENIO DE COOPERACIÓN INTERINSTITUCIONAL 
                        ENTRE LE GOBIERNO REGIONAL DE JUNÍN Y LA MUNICIPALIDAD PROVINCIAL DE HUANCAYO PARA LA 
                        EVALUACION DEL EXPEDIENTE TECNICO Y ON REGOINA EJECUCION DEL PROYECTO DE INVERSION 
                        DENOMINADO: "REP</span><br>
                    <small>23.7 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>21/09/2016</small><br>
                    <span class="event-title">CONVENIO Nº135-2025 - CONVENIO DE COOPERACIÓN INTERINSTITUCIONAL 
                        ENTRE LE GOBIERNO REGIONAL DE JUNÍN Y LA MUNICIPALIDAD PROVINCIAL DE HUANCAYO PARA LA 
                        EVALUACION DEL EXPEDIENTE TECNICO Y ON REGOINA EJECUCION DEL PROYECTO DE INVERSION 
                        DENOMINADO: "REP</span><br>
                    <small>16.1 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>27/08/2008</small><br>
                    <span class="event-title">CONVENIO Nº134-2025 - CONVENIO DE COOPERACION INTERINSTITUCIONAL ENTRE 
                        EL GOBIERNO REGIONAL DE JUNIN Y LA MUNICIPALIDAD PROVINCIAL DE SATIPO PARA LA ELABORACION, 
                        EVALUACION DEL EXPEDIENTE TECNICO YEJECUCION DEL PROYECTO DE INVERSIÓN: "MEJORAMIENTO DE</span><br>
                    <small>1.3 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>27/02/2003</small><br>
                    <span class="event-title">CONVENIO Nº133-2025 - CONVENIO DE COOPERACIÓN INTERINSTITUCIONAL ENTRE EL 
                        GOBIERNO REGIONAL DE JUNIN YLA MUNICIPALIDAD PROVINCIAL DE CHANCHAMAYO PARA LA FORMULACION DE 
                        ESTUDIO DE PRE INVERSION, ESTUDIO DEFINITIVO Y EJECUCION DE LA INVERSION: "CONSTR</span><br>
                    <small>9.4 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>27/02/2003</small><br>
                    <span class="event-title">CONVENIO Nº127-2025 - CONVENIO DE COOPERACIÓN INTERINSTITUCIONAL ENTRE 
                        EL GOBIERNO REGIONAL DE JUNÍN Y LA MUNICIPALIDAD DISTRITAL DE SAN RAMÓN PARA LA FORMULACION 
                        DE ESTUDIO DE PRE INVERSION YIO ESTUDIO DEFINITIVO Y EJECUCIÓN DE LA INVERSIÓN: "MEJORA</span><br>
                    <small>9.4 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>27/02/2003</small><br>
                    <span class="event-title">CONVENIO Nº126-2025 - CONVENIO DE COOPERACIÓN INTERINSTITUCIONAL ENTRE 
                        EL GOBIERNO REGIONAL DE JUNÍN Y LA MUNICIPALIDAD DISTRITAL DE HUÁCHAC PARA LA FORMULACION DE 
                        ESTUDIO DE PRE INVERSION YIO ESTUDIO DEFINITIVO Y EJECUCIÓN DE LA INVERSIÓN: "MEJORAMI</span><br>
                    <small>9.4 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>27/02/2003</small><br>
                    <span class="event-title">CONVENIO Nº125-2025 - CONVENIO DE COOPERACIÓN INTERINSTITUCIONAL ENTRE 
                        EL GOBIERNO REGIONAL DE JUNIN Y LA MUNICIPALIDAD DISTRITAL DE CHILCA PARA LA FORMULACION DE 
                        ESTUDIO DE PRE INVERSION Y/O ESTUDIO DEFINITIVO YEJECUCIÓN DE LA INVERSIÓN: "MEJORAMIEN</span><br>
                    <small>9.4 MB</small>
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



