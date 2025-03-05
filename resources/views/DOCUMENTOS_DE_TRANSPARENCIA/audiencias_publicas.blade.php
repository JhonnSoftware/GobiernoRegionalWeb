@extends('layouts.layout')


@section('title', 'Audiencias Publicas')


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
        <h1>AUDIENCIAS PUBLICAS</h1>
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
            <strong>AUDIENCIA REGIONAL 2024</strong><br>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>31/05/2024</small><br>
                    <span class="event-title">AUDIENCIA PÚBLICA REGIONAL JUNÍN - 2024</span><br>
                    <small>17.8 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="header-alert text-center">
            <strong>AUDIENCIA REGIONAL 2023 - SEGUNDA</strong><br>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>14/11/2023</small><br>
                    <span class="event-title">Registro de Participantes- II Audiencia Pública Regional 2023</span><br>
                    <small>9.2 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>14/11/2023</small><br>
                    <span class="event-title">Informe II Audiencia Pública 2023</span><br>
                    <small>11.7 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>14/11/2023</small><br>
                    <span class="event-title">Agenda - II Audiencia Regional 2023</span><br>
                    <small>126.4 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>14/11/2023</small><br>
                    <span class="event-title">Acta - II Audiencia Regional 2023</span><br>
                    <small>8.4 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="header-alert text-center">
            <strong>AUDIENCIA REGIONAL 2023 - PRIMERA</strong><br>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>06/09/2023</small><br>
                    <span class="event-title">Convocatoria - I Audiencia Pública Regional 2023</span><br>
                    <small>367.9 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>06/09/2023</small><br>
                    <span class="event-title">Agenda - I Audiencia Regional 2023</span><br>
                    <small>473.8 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>06/09/2023</small><br>
                    <span class="event-title">Informe I Audiencia Pública 2023</span><br>
                    <small>8.7 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>06/09/2023</small><br>
                    <span class="event-title">Registro de Participantes- I Audiencia Pública Regional 2023</span><br>
                    <small>11.1 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="header-alert text-center">
            <strong>AUDIENCIA REGIONAL 2021 - SEGUNDA</strong><br>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>22/04/2022</small><br>
                    <span class="event-title">Registro de Participantes- II Audiencia Pública Regional 2021- Reprogramada</span><br>
                    <small>9.6 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>22/04/2022</small><br>
                    <span class="event-title">Convocatoria - II Audiencia Pública Regional 2021</span><br>
                    <small>833.3 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>22/04/2022</small><br>
                    <span class="event-title">Informe II Audiencia Pública 2021</span><br>
                    <small>9.2 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>22/04/2022</small><br>
                    <span class="event-title">Agenda - II Audiencia Regional 2021</span><br>
                    <small>833.3 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>22/04/2022</small><br>
                    <span class="event-title">Decreto Regional Nº 003-2021-GRJ/GR</span><br>
                    <small>833.3 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>22/04/2022</small><br>
                    <span class="event-title">Aviso de Sinceramiento</span><br>
                    <small>153.1 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>22/04/2022</small><br>
                    <span class="event-title">Acta- II Audiencia Regional 2021 - Reprogramada</span><br>
                    <small>6.6 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>22/04/2022</small><br>
                    <span class="event-title">Acta - II Audiencia Regional 2021 - Suspendida</span><br>
                    <small>545.7 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="header-alert text-center">
            <strong>AUDIENCIA REGIONAL 2021 - PRIMERA</strong><br>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>22/04/2022</small><br>
                    <span class="event-title">Registro de Participantes- I Audiencia Pública Regional 2021</span><br>
                    <small>4.8 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>22/04/2022</small><br>
                    <span class="event-title">Convocatoria - I Audiencia Pública Regional 2021</span><br>
                    <small>833.3 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>22/04/2022</small><br>
                    <span class="event-title">Agenda - I Audiencia Regional 2021</span><br>
                    <small>833.3 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>22/04/2022</small><br>
                    <span class="event-title">Acta - I Audiencia Regional 2021</span><br>
                    <small>4.9 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>22/04/2022</small><br>
                    <span class="event-title">Decreto Regional Nº 003-2021-GRJ/GR</span><br>
                    <small>833.3 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>22/04/2022</small><br>
                    <span class="event-title">Informe I Audiencia Pública 2021</span><br>
                    <small>9.2 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="header-alert text-center">
            <strong>AUDIENCIA REGIONAL 2020 - SEGUNDA</strong><br>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>22/03/2021</small><br>
                    <span class="event-title">II Audiencia Publica Regional</span><br>
                    <small>2.6 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>11/03/2021</small><br>
                    <span class="event-title">Registro de Participantes- II Audiencia Pública Regional 2020</span><br>
                    <small>518.3 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>11/03/2021</small><br>
                    <span class="event-title">Acta - II Audiencia Regional 2020</span><br>
                    <small>5 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="header-alert text-center">
            <strong>AUDIENCIA REGIONAL 2020 - PRIMERA</strong><br>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>16/02/2017</small><br>
                    <span class="event-title">Resolución N°080-2016-Consejo Nacional de Calificación de Victimas de Accidentes, Actos de Terrorismo o Narcotráfico</span><br>
                    <small>4.2 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="header-alert text-center">
            <strong>RESOLUCIONES - SUB GERENCIA DE PRESUPUESTO Y TRIBUTACIÓN</strong><br>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>21/08/2020</small><br>
                    <span class="event-title">RESOLUCIÓN SUB GERENCIAL DE PRESUPUESTO Y TRIBUTACION N°001-2020-GRJ/GRPPAT/SGPT</span><br>
                    <small>1.5 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>04/10/2019</small><br>
                    <span class="event-title">Resolución Sub Gerencial de Presupuesto y Tributación N°001-2019-GRJ/GRPPAT/SGPT</span><br>
                    <small>1.2 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="header-alert text-center">
            <strong>RESOLUCIÓN SUB GERENCIAL DE OBRAS</strong><br>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>27/08/2024</small><br>
                    <span class="event-title">RESOLUCION SUB GERENCIAL DE SUPERVISIÓN Y LIQUIDACIÓN DE OBRAS N01-2024-GR-JUNIN-GRI-SGLO</span><br>
                    <small>2.4 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>14/11/2019</small><br>
                    <span class="event-title">RESOLUCIÓN SUB GERENCIAL DE OBRAS N°001-2019-GRJ/GRI/SGO</span><br>
                    <small>4.1 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="header-alert text-center">
            <strong>RESOLUCIÓN SUB DIRECTORIAL - GESTIÓN PATRIMONIAL</strong><br>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>03/10/2019</small><br>
                    <span class="event-title">Resolución Sub Directoral Administrativa N°001-2019-GRJ/ORAF/OGP</span><br>
                    <small>1.2 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="header-alert text-center">
            <strong>RESOLUCIÓN POR ACUERDO MUTUO</strong><br>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>28/06/2017</small><br>
                    <span class="event-title">RESOLUCION POR MUTUO ACUERDO DEL CONVENIO DE ASIGNACIÓN POR DESEMPEÑO CAD ENTRE EL MIDIS, MEF Y GRJ</span><br>
                    <small>471.8 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="header-alert text-center">
            <strong>RESOLUCIÓN GERENCIAL DE PLANEAMIENTO, PRESUPUESTO Y ACONDICIONAMIENTO TERRITORIAL</strong><br>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>18/11/2019</small><br>
                    <span class="event-title">RESOLUCIÓN GERENCIAL REGIONAL DE PLANEAMIENTO, PRESUPUESTO Y ACONDICIONAMIENTO TERRITORIAL 
                        N°001-2019-GRJ/GRPPAT</span><br>
                    <small>3.2 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="header-alert text-center">
            <strong>RESOLUCIÓN DIRECTORIAL - RED DE SALUD VALLE DEL MANTARO</strong><br>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>04/12/2019</small><br>
                    <span class="event-title">Resolucion Directoral N°0334-2019-GRJ-DRSJ-DSVM/URHH</span><br>
                    <small>504 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>04/12/2019</small><br>
                    <span class="event-title">Resolucion Directoral N°0333-2019-GRJ-DRSJ-DSVM/URHH</span><br>
                    <small>533.6 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>04/12/2019</small><br>
                    <span class="event-title">Resolucion Directoral N°0332-2019-GRJ-DRSJ-DSVM/URHH</span><br>
                    <small>533.2 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="header-alert text-center">
            <strong>MIDAGRI</strong><br>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>08/11/2024</small><br>
                    <span class="event-title">RESOLUCIÓN ADMINISTRATIVA RA Nº D000462-MIDAGRI-SERFOR-ATFFS-SELVA CENTRAL</span><br>
                    <small>2.3 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>27/02/2025</small><br>
                    <span class="event-title">RESOLUCION DE LA COMISION AD-HOC- ORGANO SANCIONADOR N°001-2025-GR-JUNIN/CAHOS</span><br>
                    <small>1.1 MB</small>
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



