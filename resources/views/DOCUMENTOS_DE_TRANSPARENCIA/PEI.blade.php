@extends('layouts.layout')

@section('title', 'Directorio Regional')

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

    <div class="banner">
        <h1>PLAN ESTRATÉGICO INSTITUCIONAL<br>(PEI)</h1>
    </div>

    <div class="container mt-4">
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
    
    <div class="container mt-4">
        <div class="header-alert text-center">
            <strong>PLAN ESTRATEGICO INSTITUCIONAL 2021 - 2025</strong><br>
        </div>
    
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>31/07/2024</small><br>
                    <span class="event-title">REPORTE DE SEGUIMIENTO PEI 2021-2027 GORE JUNIN- I SEMESTRE 2024</span><br>
                    <small>2.4 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>01/04/2024</small><br>
                    <span class="event-title">PEI REPORTE DE SEGUIMIENTO ANUAL 2023</span><br>
                    <small>2.6 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>03/10/2023</small><br>
                    <span class="event-title">Informe de Evaluación Institucional I Semestre 2023</span><br>
                    <small>2.4 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>01/09/2023</small><br>
                    <span class="event-title">PEI REPORTE DE SEGUIMIENTO I SEMESTRE 2023</span><br>
                    <small>1.7 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>05/07/2023</small><br>
                    <span class="event-title">Plan Estratégico Institucional - Ampliado al 2026</span><br>
                    <small>3.4 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>05/07/2023</small><br>
                    <span class="event-title">Informe de Evaluación de Resultados PEI-POI 2022</span><br>
                    <small>3.2 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>30/03/2023</small><br>
                    <span class="event-title">REPORTE DE SEGUIMIENTO ANUAL PEI 2022 GRPPAT SGCTP</span><br>
                    <small>2.7 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>31/05/2022</small><br>
                    <span class="event-title">Informe de Evaluación Resultados PEI 2021</span><br>
                    <small>3.6 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>29/04/2022</small><br>
                    <span class="event-title">Seguimiento PEI 2021</span><br>
                    <small>5.8 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>28/10/2021</small><br>
                    <span class="event-title">Norma que aprueba el Plan Estratégico Institucional 2021 - 2025</span><br>
                    <small>1.2 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>28/10/2021</small><br>
                    <span class="event-title">Plan Estratégico Institucional 2021-2025</span><br>
                    <small>4.3 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>21/10/2021</small><br>
                    <span class="event-title">Aviso de Sinceramiento</span><br>
                    <small>48.1 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>13/08/2021</small><br>
                    <span class="event-title">PEI 2021 - 2025 - Aviso de Sinceramiento</span><br>
                    <small>287 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>23/04/2021</small><br>
                    <span class="event-title">PEI 2021 - 2025 - Aviso de Sinceramiento</span><br>
                    <small>71.6 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>

        <div class="header-alert text-center">
            <strong>PLAN ESTRATEGICO INSTITUCIONAL 2018 - 2020</strong><br>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>15/06/2021</small><br>
                    <span class="event-title">Informe de Evaluación Resultados PEI 2020</span><br>
                    <small>2.9 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>04/03/2021</small><br>
                    <span class="event-title">Seguimiento PEI 2020</span><br>
                    <small>556.1 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>26/08/2020</small><br>
                    <span class="event-title">Informe de Evaluación Resultados PEI 2019</span><br>
                    <small>3.1 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>22/06/2020</small><br>
                    <span class="event-title">Seguimiento PEI 2019</span><br>
                    <small>535 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>26/05/2020</small><br>
                    <span class="event-title">Informe de Evaluación Resultados PEI 2018</span><br>
                    <small>2.1 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>18/06/2019</small><br>
                    <span class="event-title">Seguimiento PEI 2018</span><br>
                    <small>3.7 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>13/07/2018</small><br>
                    <span class="event-title">Norma que aprueba el Plan Estratégico Institucional 2018 - 2020</span><br>
                    <small>268.5 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>03/07/2018</small><br>
                    <span class="event-title">Plan Estratégico Institucional 2018-2020</span><br>
                    <small>1.8 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="header-alert text-center">
            <strong>PLAN ESTRATEGICO INSTITUCIONAL 2015 - 2017</strong><br>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>28/05/2018</small><br>
                    <span class="event-title">Seguimiento y Evaluación del PEI 2015-2017</span><br>
                    <small>850.9 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>26/02/2016</small><br>
                    <span class="event-title">Informe de Evaluación del Plan Estratégico Institucional 2016</span><br>
                    <small>2.7 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>18/02/2016</small><br>
                    <span class="event-title">Norma que aprueba el Plan Estratégico Institucional 2015 - 2017</span><br>
                    <small>657.8 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>18/02/2016</small><br>
                    <span class="event-title">Plan Estratégico Institucional GRJ 2015-2017</span><br>
                    <small>5.8 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="header-alert text-center">
            <strong>PLAN ESTRATEGICO INSTITUCIONAL 2011 - 2014</strong><br>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>12/12/2013</small><br>
                    <span class="event-title">Plan Estratégico Institucional GRJ 2011-2014</span><br>
                    <small>13.2 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>27/07/2011</small><br>
                    <span class="event-title">Norma que aprueba el Plan Estratégico Institucional 2011 - 2014</span><br>
                    <small>1.2 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="header-alert text-center">
            <strong></strong><br>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>01/10/2024</small><br>
                    <span class="event-title">Informe de Evaluación Institucional PEI POI y Matriz de Compromisos - I Semestre 2024</span><br>
                    <small>7.1 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>13/06/2024</small><br>
                    <span class="event-title">EVALUACION PEI CORRESPONDIENTE 2023</span><br>
                    <small>15.2 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>13/06/2024</small><br>
                    <span class="event-title">PEI AMPLIADO 2027</span><br>
                    <small>5 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
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
