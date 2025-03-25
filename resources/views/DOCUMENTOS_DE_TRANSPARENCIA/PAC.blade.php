@extends('layouts.layout')

@section('title', 'PAC')

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
        <h1>PLAN ANUAL DE CONTRATACIONES<br> (PAC)</h1>
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
            <strong>PLAN ANUAL DE CONTRACIONES 2023</strong><br>
        </div>
    
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>13/01/2023</small><br>
                    <span class="event-title">Plan Anual de Contrataciones 2023</span><br>
                    <small>3.9 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
        </div>

        <div class="header-alert text-center">
            <strong>PLAN ANUAL DE CONTRATACIONES 2021</strong><br>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>25/02/2021</small><br>
                    <span class="event-title">Plan Anual de Contrataciones 2021 - Modificacíon 3</span><br>
                    <small>978.1 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>22/02/2021</small><br>
                    <span class="event-title">Plan Anual de Contrataciones 2021 - Modificacíon 2</span><br>
                    <small>934.4 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>09/02/2021</small><br>
                    <span class="event-title">Plan Anual de Contrataciones 2021 - Modificacíon 1</span><br>
                    <small>1.1 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>19/01/2021</small><br>
                    <span class="event-title">Plan Anual de Contrataciones 2021</span><br>
                    <small>993.3 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
        </div>
        <div class="header-alert text-center">
            <strong>PLAN ANUAL DE CONTRATACIONES 2020</strong><br>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>19/02/2021</small><br>
                    <span class="event-title">INFORME PAC - II SEMESTRE 2020</span><br>
                    <small>2.8 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>14/09/2020</small><br>
                    <span class="event-title">INFORME PAC - I SEMESTRE 2020</span><br>
                    <small>1.6 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
        </div>
        <div class="header-alert text-center">
            <strong>PLAN ANUAL DE CONTRATACIONES 2019</strong><br>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>16/01/2020</small><br>
                    <span class="event-title">INFORME PAC - II SEMESTRE 2019</span><br>
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
                    <small>08/08/2019</small><br>
                    <span class="event-title">Plan Anual de Contrataciones 2019 - Modificación 12</span><br>
                    <small>1007.9 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>24/07/2019</small><br>
                    <span class="event-title">INFORME PAC - I SEMESTRE 2019</span><br>
                    <small>2.4 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>28/05/2019</small><br>
                    <span class="event-title">Plan Anual de Contrataciones 2019 - Modificación 5</span><br>
                    <small>704.9 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>24/04/2019</small><br>
                    <span class="event-title">Plan Anual de Contrataciones 2019 - Modificación 4</span><br>
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
                    <small>09/04/2019</small><br>
                    <span class="event-title">Plan Anual de Contrataciones 2019 - Modificación 3</span><br>
                    <small>678.9 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>04/03/2019</small><br>
                    <span class="event-title">Plan Anual de Contrataciones 2019 - Modificación 2</span><br>
                    <small>1.1 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>14/02/2019</small><br>
                    <span class="event-title">Plan Anual de Contrataciones 2019 - Modificación 1</span><br>
                    <small>835.9 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>15/01/2019</small><br>
                    <span class="event-title">Plan Anual de Contrataciones 2019</span><br>
                    <small>440 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
        </div>
        <div class="header-alert text-center">
            <strong>PLAN ANUAL DE CONTRATACIONES 2018</strong><br>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>14/12/2018</small><br>
                    <span class="event-title">Plan Anual de Contrataciones 2018 - Modificación 11</span><br>
                    <small>84.3 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>13/11/2018</small><br>
                    <span class="event-title">Plan Anual de Contrataciones 2018 - Modificación 10</span><br>
                    <small>443.2 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>09/10/2018</small><br>
                    <span class="event-title">Plan Anual de Contrataciones 2018 - Modificación 9</span><br>
                    <small>533.1 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>20/09/2018</small><br>
                    <span class="event-title">Plan Anual de Contrataciones 2018 - Modificación 8</span><br>
                    <small>371.9 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>02/08/2018</small><br>
                    <span class="event-title">Plan Anual de Contrataciones 2018 - Modificación 7</span><br>
                    <small>288.6 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>03/07/2018</small><br>
                    <span class="event-title">Plan Anual de Contrataciones 2018 - Modificación 6</span><br>
                    <small>276 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>13/06/2018</small><br>
                    <span class="event-title">Plan Anual de Contrataciones 2018 - Modificación 5</span><br>
                    <small>280.4 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>14/05/2018</small><br>
                    <span class="event-title">Plan Anual de Contrataciones 2018 - Modificación 4</span><br>
                    <small>108.6 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>05/04/2018</small><br>
                    <span class="event-title">Plan Anual de Contrataciones 2018 - Modificación 3</span><br>
                    <small>105.3 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>07/03/2018</small><br>
                    <span class="event-title">Plan Anual de Contrataciones 2018 - Modificación 2</span><br>
                    <small>504.6 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>07/03/2018</small><br>
                    <span class="event-title">Plan Anual de Contrataciones 2018 - Modificación 1</span><br>
                    <small>493.3 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>01/02/2018</small><br>
                    <span class="event-title">Plan Anual de Contrataciones 2018</span><br>
                    <small>623.2 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
        </div>
        <div class="header-alert text-center">
            <strong>PLAN ANUAL DE CONTRATACIONES 2017</strong><br>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>04/01/2018</small><br>
                    <span class="event-title">Plan Anual de Contrataciones 2017 - Modificación 13</span><br>
                    <small>335.1 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>12/12/2017</small><br>
                    <span class="event-title">Plan Anual de Contrataciones 2017 - Modificación 12</span><br>
                    <small>348.2 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>07/11/2017</small><br>
                    <span class="event-title">Plan Anual de Contrataciones 2017 - Modificación 11</span><br>
                    <small>185 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>13/10/2017</small><br>
                    <span class="event-title">Plan Anual de Contrataciones 2017 - Modificación 10</span><br>
                    <small>336.4 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>06/09/2017</small><br>
                    <span class="event-title">Plan Anual de Contrataciones 2017 - Modificación 9</span><br>
                    <small>190.3 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>07/08/2017</small><br>
                    <span class="event-title">Plan Anual de Contrataciones 2017 - Modificación 8</span><br>
                    <small>218.4 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>04/07/2017</small><br>
                    <span class="event-title">Plan Anual de Contrataciones 2017 - Modificación 7</span><br>
                    <small>61.4 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>21/06/2017</small><br>
                    <span class="event-title">Plan Anual de Contrataciones 2017 - Modificación 6</span><br>
                    <small>202.6 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>24/05/2017</small><br>
                    <span class="event-title">Plan Anual de Contrataciones 2017 - Modificación 5</span><br>
                    <small>572.2 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>24/05/2017</small><br>
                    <span class="event-title">Plan Anual de Contrataciones 2017 - Modificación 4</span><br>
                    <small>572.2 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>24/05/2017</small><br>
                    <span class="event-title">Plan Anual de Contrataciones 2017 - Modificación 3</span><br>
                    <small>414.1 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>24/05/2017</small><br>
                    <span class="event-title">Plan Anual de Contrataciones 2017 - Modificación 2</span><br>
                    <small>278.5 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>24/05/2017</small><br>
                    <span class="event-title">Plan Anual de Contrataciones 2017</span><br>
                    <small>717.7 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
        </div>
        <div class="header-alert text-center">
            <strong>PLAN ANUAL DE CONTRATACIONES 2016</strong><br>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>14/12/2016</small><br>
                    <span class="event-title">Plan Anual de Contrataciones 2016 - ver. 14</span><br>
                    <small>183.2 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>11/11/2016</small><br>
                    <span class="event-title">Plan Anual de Contrataciones 2016 - ver. 13</span><br>
                    <small>1.1 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>21/10/2016</small><br>
                    <span class="event-title">Plan Anual de Contrataciones 2016 - ver. 12</span><br>
                    <small>1.4 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>03/08/2016</small><br>
                    <span class="event-title">Plan Anual de Contrataciones 2016 - ver. 11</span><br>
                    <small>471.3 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>05/05/2016</small><br>
                    <span class="event-title">Plan Anual de Contrataciones 2016 - ver. 9</span><br>
                    <small>689.7 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>15/03/2016</small><br>
                    <span class="event-title">Plan Anual de Contrataciones 2016 - ver. 8</span><br>
                    <small>1.5 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
        </div>
        <div class="header-alert text-center">
            <strong>PLAN ANUAL DE CONTRATACIONES 2015</strong><br>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>27/01/2016</small><br>
                    <span class="event-title">Plan Anual de Contrataciones 2015 - ver. 80</span><br>
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
                    <small>12/10/2015</small><br>
                    <span class="event-title">Norma que aprueba el Plan Anual de Contrataciones (PAC)</span><br>
                    <small>957.4 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #1356b3;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #1356b3;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>12/10/2015</small><br>
                    <span class="event-title">Plan Anual de Contrataciones 2015 - ver. 26</span><br>
                    <small>5.3 MB</small>
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
