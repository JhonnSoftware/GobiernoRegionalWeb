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
        <h1>PLAN OPERATIVO<br>INSTITUCIONAL (POI)</h1>
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
            <strong>PLAN OPERATIVO INSTITUCIONAL MULTIANUAL 2025 - 2027</strong><br>
        </div>
   
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>07/01/2025</small><br>
                    <span class="event-title">CONSOLIDADO GENERAL DEL POI - PIA 2025</span><br>
                    <small>20.8 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>14/05/2024</small><br>
                    <span class="event-title">Plan Operativo Institucional Multianual 2025 - 2027</span><br>
                    <small>42 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
           
        </div>


        <div class="header-alert text-center">
            <strong>PLAN OPERATIVO INSTITUCIONAL MULTIANUAL 2022 - 2024</strong><br>
        </div>


        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>31/07/2024</small><br>
                    <span class="event-title">REPORTE SEGUIMIENTO POI PLIEGO - I SEMESTRE 2024 GORE JUNIN</span><br>
                    <small>55 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>30/12/2023</small><br>
                    <span class="event-title">CONSISTENCIA DEL POI CON PIA 2024 - PLIEGO 450 - GORE JUNÍN</span><br>
                    <small>8.4 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>31/08/2023</small><br>
                    <span class="event-title">REPORTE SEGUIMIENTO POI SEMESTRAL 2023</span><br>
                    <small>151.9 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
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
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>31/03/2023</small><br>
                    <span class="event-title">REPORTE_ANUAL_DE_SEGUIMIENTO_DEL_PLAN_OPERATIVO_INSTITUCIONAL_2022-8</span><br>
                    <small>106 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>30/09/2022</small><br>
                    <span class="event-title">Informe de Evaluación de Implementación del POI 2022 - I Semestre</span><br>
                    <small>3.5 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>30/09/2022</small><br>
                    <span class="event-title">Informe de Evaluación de Implementación del POI 2022 - I Semestre - Pliego</span><br>
                    <small>7.5 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>19/08/2021</small><br>
                    <span class="event-title">Aprobacion del POI 2022 - 2024</span><br>
                    <small>1.8 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
        </div>


        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>19/08/2021</small><br>
                    <span class="event-title">Equipo Tecnico responsable de desarrollar el Plan Operativo Institucional (POI) 2022-2024</span><br>
                    <small>3.8 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
        </div>


        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>03/08/2021</small><br>
                    <span class="event-title">POI MULTI-ANUAL 2022-2024 PLIEGO 450 - GOBIERO REGIONAL JUNIN</span><br>
                    <small>103.9 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
        </div>


        <div class="header-alert text-center">
            <strong>PLAN OPERATIVO INSTITUCIONAL MULTIANUAL 2021 - 2023</strong><br>
        </div>


        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>31/05/2022</small><br>
                    <span class="event-title">Informe de Evaluación de Implementación del POI 2021</span><br>
                    <small>44.7 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>12/05/2022</small><br>
                    <span class="event-title">REPORTE DE SEGUIMIENTO PLAN OPERATIVO INSTITUCIONAL 2021-PLIEGO 450 GORE JUNÍN</span><br>
                    <small></small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>12/05/2022</small><br>
                    <span class="event-title">REPORTE DE SEGUIMIENTO PLAN OPERATIVO INSTITUCIONAL 2021 - UE 818 SEDE CENTRAL</span><br>
                    <small>12.9 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>18/11/2021</small><br>
                    <span class="event-title">INFORME DE EVALUACION DE IMPLEMENTACION DEL POI-I SEMESTRE - UE 818 SEDE CENTRAL</span><br>
                    <small>4.9 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>03/08/2021</small><br>
                    <span class="event-title">REPORTE DE SEGUIMIENTO DEL PLAN OPERATIVO INSTITUCIONAL 2021 – I SEMESTRE DEL PLIEGO 450</span><br>
                    <small>20.9 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>18/09/2020</small><br>
                    <span class="event-title">Equipo Tecnico responsable de desarrollar el Plan Operativo Institucional (POI) 2021-2023</span><br>
                    <small>3.4 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>18/09/2020</small><br>
                    <span class="event-title">Aprobacion del POI 2021 - 2023</span><br>
                    <small>1 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>18/09/2020</small><br>
                    <span class="event-title">POI MULTI-ANUAL 2021-2023 PLIEGO 450 - GOBIERO REGIONAL JUNIN</span><br>
                    <small>9.1 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>22/06/2020</small><br>
                    <span class="event-title">Comunicado-005-2020-Ceplan</span><br>
                    <small>62 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
        </div>


        <div class="header-alert text-center">
            <strong>PLAN OPERATIVO INSTITUCIONAL MULTIANUAL 2020 - 2022</strong><br>
        </div>


        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>03/06/2019</small><br>
                    <span class="event-title">POI MULTI-ANUAL 2020-2022 PLIEGO 450 - GOBIERO REGIONAL JUNIN</span><br>
                    <small>15.1 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>03/06/2019</small><br>
                    <span class="event-title">Aprobacion del POI 2020 - 2022</span><br>
                    <small>887.5 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>28/02/2019</small><br>
                    <span class="event-title">Equipo Tecnico responsable de desarrollar el Plan Operativo Institucional (POI) 2020-2022</span><br>
                    <small>2.9 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
        </div>
        <div class="header-alert text-center">
            <strong>PLAN OPERATIVO INSTITUCIONAL - 2020</strong><br>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>12/04/2021</small><br>
                    <span class="event-title">INFORME DE EVALUACION DE IMPLEMENTACION POI - PLIEGO 450 GORE JUNIN</span><br>
                    <small>21.8 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>31/07/2020</small><br>
                    <span class="event-title">INFORME DE EVALUACIÓN DE IMPLEMENTAN DEL POI DEL I-SEMESTRE 2020</span><br>
                    <small>23.4 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
        </div>
        <div class="header-alert text-center">
            <strong>PLAN OPERATIVO INSTITUCIONAL - 2019</strong><br>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>22/06/2020</small><br>
                    <span class="event-title">SEGUIMIENTO DEL PLAN OPERATIVO INSTITUCIONAL 2019 IV TRIMESTRE</span><br>
                    <small>21.6 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>12/03/2020</small><br>
                    <span class="event-title">Informe de Evaluacion de implementación del POI - IV Trimestre 2019</span><br>
                    <small>33.6 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>18/11/2019</small><br>
                    <span class="event-title">Seguimiento del Plan Operativo Institucional 2019 III Trimestre</span><br>
                    <small>15 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>14/11/2019</small><br>
                    <span class="event-title">Informe de Evaluacion de implementación del POI - III Trimestre 2019</span><br>
                    <small>63.8 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>14/11/2019</small><br>
                    <span class="event-title">Informe de Evaluacion de implementación del POI -I Y II Trimestre 2019</span><br>
                    <small>56.7 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>09/09/2019</small><br>
                    <span class="event-title">Seguimiento del Plan Operativo Institucional 2019 II Trimestre</span><br>
                    <small>17.8 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>24/06/2019</small><br>
                    <span class="event-title">Seguimiento del Plan Operativo Institucional 2019 I Trimestre</span><br>
                    <small>19.5 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>22/06/2018</small><br>
                    <span class="event-title">Plan Operativo Institucional 2019</span><br>
                    <small>21.5 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>13/06/2018</small><br>
                    <span class="event-title">Aprobacion del POI 2019</span><br>
                    <small>178.1 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>13/06/2018</small><br>
                    <span class="event-title">Equipo Tecnico de Planeamiento Estrategico - POI 2019</span><br>
                    <small>2.5 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
        </div>
        <div class="header-alert text-center">
            <strong>PLAN OPERATIVO INSTITUCIONAL - 2018</strong><br>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>18/03/2019</small><br>
                    <span class="event-title">Informe de Evaluación de Implementación del POI año 2018</span><br>
                    <small>26.6 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>05/02/2019</small><br>
                    <span class="event-title">Seguimiento del III y IV Trimestre - POI 2018</span><br>
                    <small>46.9 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>21/12/2018</small><br>
                    <span class="event-title">Seguimiento del III Trimestre - POI 2018</span><br>
                    <small>66.2 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>02/08/2018</small><br>
                    <span class="event-title">Seguimiento del II Trimestre - POI 2018</span><br>
                    <small>42.7 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>12/06/2018</small><br>
                    <span class="event-title">Seguimiento del I Trimestre - POI 2018</span><br>
                    <small>10.4 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>15/02/2018</small><br>
                    <span class="event-title">Plan Operativo Institucional - 2018</span><br>
                    <small>31.9 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>26/07/2017</small><br>
                    <span class="event-title">Aprobacion Plan Operativo Institucional 2018</span><br>
                    <small>797 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>04/04/2017</small><br>
                    <span class="event-title">Equipo Tecnico Plan Operativo Institucional POI 2018</span><br>
                    <small>716.7 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
        </div>
        <div class="header-alert text-center">
            <strong>PLAN OPERATIVO INSTITUCIONAL - 2017</strong><br>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>16/01/2018 </small><br>
                    <span class="event-title">Evaluacion del Plan Operativo Institucional POI - III y IV Trimestre 2017</span><br>
                    <small>38.9 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>26/10/2017</small><br>
                    <span class="event-title">Evaluacion del Plan Operativo Institucional POI - I y II Trimestre 2017</span><br>
                    <small>55.6 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>10/01/2017</small><br>
                    <span class="event-title">POI 2017 - Equipo técnico</span><br>
                    <small>519.6 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>10/01/2017</small><br>
                    <span class="event-title">Norma que aprueba el POI 2017</span><br>
                    <small>181 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>10/01/2017</small><br>
                    <span class="event-title">POI 2017 - Anexos</span><br>
                    <small>14.9 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>10/01/2017</small><br>
                    <span class="event-title">POI 2017 - DIRESA</span><br>
                    <small>2.9 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>10/01/2017</small><br>
                    <span class="event-title">POI 2017 - DRE</span><br>
                    <small>3.2 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>10/01/2017</small><br>
                    <span class="event-title">POI 2017 - DRTC</span><br>
                    <small>616.4 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>10/01/2017</small><br>
                    <span class="event-title">POI 2017 - DRA</span><br>
                    <small>1.1 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>10/01/2017</small><br>
                    <span class="event-title">POI 2017 - DIREPRO</span><br>
                    <small>764.2 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>10/01/2017</small><br>
                    <span class="event-title">POI 2017 - Sede central</span><br>
                    <small>3.4 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>10/01/2017</small><br>
                    <span class="event-title">Informe POI 2017</span><br>
                    <small>4.2 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
        </div>
        <div class="header-alert text-center">
            <strong>PLAN OPERATIVO INSTITUCIONAL - 2016</strong><br>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>19/08/2016</small><br>
                    <span class="event-title">Norma que aprueba el POI - 2016</span><br>
                    <small>399 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>19/08/2016</small><br>
                    <span class="event-title">Plan Operativo Institucional - 2016</span><br>
                    <small>29.4 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
        </div>
        <div class="header-alert text-center">
            <strong>PLAN OPERATIVO INSTITUCIONAL - 2015</strong><br>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>27/10/2015</small><br>
                    <span class="event-title">Norma que aprueba el POI - 2015</span><br>
                    <small>423.4 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>27/10/2015</small><br>
                    <span class="event-title">Plan Operativo Institucional - 2015</span><br>
                    <small>45 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
        </div>
        <div class="header-alert text-center">
            <strong>PLAN OPERATIVO INSTITUCIONAL - 2014</strong><br>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>10/12/2015</small><br>
                    <span class="event-title">Norma que aprueba el POI - 2014</span><br>
                    <small>405.3 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>27/10/2015</small><br>
                    <span class="event-title">Plan Operativo Institucional - 2014</span><br>
                    <small>3.1 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
        </div>
        <div class="header-alert text-center">
            <strong>PLAN OPERATIVO INSTITUCIONAL - 2013</strong><br>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>10/12/2013</small><br>
                    <span class="event-title">Norma que aprueba el POI - 2013</span><br>
                    <small>889.6 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>27/10/2015</small><br>
                    <span class="event-title">Plan Operativo Institucional - 2013</span><br>
                    <small>21.4 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
        </div>
        <div class="header-alert text-center">
            <strong>PLAN OPERATIVO INSTITUCIONAL - 2012</strong><br>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>27/10/2015</small><br>
                    <span class="event-title">Plan Operativo Institucional - 2012</span><br>
                    <small>1.8 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
        </div>
        <div class="header-alert text-center">
            <strong>PLAN OPERATIVO INSTITUCIONAL - 2011</strong><br>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>27/10/2015</small><br>
                    <span class="event-title">Plan Operativo Institucional - 2011</span><br>
                    <small>11.5 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
        </div>
        <div class="header-alert text-center">
            <strong>PLAN OPERATIVO INSTITUCIONAL - 2010</strong><br>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>27/10/2015</small><br>
                    <span class="event-title">Plan Operativo Institucional - 2010</span><br>
                    <small>3.3 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
        </div>
        <div class="header-alert text-center">
            <strong>PLAN OPERATIVO INSTITUCIONAL - 2009</strong><br>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>27/10/2015</small><br>
                    <span class="event-title">Plan Operativo Institucional - 2009</span><br>
                    <small>4.4 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
        </div>
        <div class="header-alert text-center">
            <strong>PLAN OPERATIVO INSTITUCIONAL - 2008</strong><br>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>27/10/2015</small><br>
                    <span class="event-title">Plan Operativo Institucional - 2008</span><br>
                    <small>3.8 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>02/09/2024</small><br>
                    <span class="event-title">PROGRAMA DEL CURSO TALLER</span><br>
                    <small>2 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
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



