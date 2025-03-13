@extends('layouts.layout')

@section('title', 'Presupuesto Participativo')

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
        <h1>PRESUPUESTO PARTICIPATIVO</h1>
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
            <strong>PRESUPUESTO PARTICIPATIVO - 2026</strong><br>
        </div>
    
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>29/01/2025</small><br>
                    <span class="event-title">Lista de Agentes Participantes PPBR 2026 GRJ</span><br>
                    <small>840.8 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
    
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>09/01/2025</small><br>
                    <span class="event-title">CONVOCATORIA PPBR 2026 GRJ</span><br>
                    <small>741.8 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
    
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>09/01/2025 </small><br>
                    <span class="event-title">MODELO DE SOLICITUD PPBR 2026</span><br>
                    <small>142.2 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
    
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>09/01/2025</small><br>
                    <span class="event-title">REQUISITOS PPBR 2026</span><br>
                    <small>271 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>

            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>09/01/2025</small><br>
                    <span class="event-title">FICHA PPBR 2026</span><br>
                    <small>465.5 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>

        <div class="header-alert text-center">
            <strong>PRESUPUESTO PARTICIPATIVO - 2025</strong><br>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>19/12/2023</small><br>
                    <span class="event-title">CONVOCATORIA PPBR 2025</span><br>
                    <small>398.9 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>19/12/2023</small><br>
                    <span class="event-title">FICHA DE REGISTRO PPBR 2025</span><br>
                    <small>232.1 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>19/12/2023</small><br>
                    <span class="event-title">MODELO DE SOLICITUD PPBR 2025</span><br>
                    <small>104 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>19/12/2023</small><br>
                    <span class="event-title">REQUISITOS PPBR 2025</span><br>
                    <small>149.4 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="header-alert text-center">
            <strong>PRESUPUESTO PARTICIPATIVO - 2024</strong><br>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>14/02/2023</small><br>
                    <span class="event-title">MODELO DE SOLICITUD PPBR 2024</span><br>
                    <small>104 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>14/02/2023</small><br>
                    <span class="event-title">REQUISITOS PPBR 2024</span><br>
                    <small>149.4 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>14/02/2023</small><br>
                    <span class="event-title">FICHA PPBR 2024</span><br>
                    <small>232 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>14/02/2023</small><br>
                    <span class="event-title">CONVOCATORIA Y CRONOGRAMA PPBR 2024</span><br>
                    <small>399.9 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="header-alert text-center">
            <strong>PRESUPUESTO PARTICIPATIVO - 2023</strong><br>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>17/02/2022</small><br>
                    <span class="event-title">RESULTADOS FINALES AGENTES PARTICIPANTES 2023</span><br>
                    <small>287.5 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>16/02/2022</small><br>
                    <span class="event-title">MATRIZ AGENTES PARTICIPANTES 2023</span><br>
                    <small>290.5 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>03/02/2022</small><br>
                    <span class="event-title">CONVOCATORIA PPBR 2023</span><br>
                    <small>416.5 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>02/02/2022</small><br>
                    <span class="event-title">MODELO DE SOLICITUD PPBR 2023</span><br>
                    <small>103 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>02/02/2022</small><br>
                    <span class="event-title">FICHA PPBR 2023</span><br>
                    <small>233.8 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>02/02/2022</small><br>
                    <span class="event-title">REQUISITOS PPBR 2023</span><br>
                    <small>154.1 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="header-alert text-center">
            <strong>PRESUPUESTO PARTICIPATIVO - 2022</strong><br>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>18/02/2021</small><br>
                    <span class="event-title">NUEVO CRONOGRAMA PPBR 2022</span><br>
                    <small>633.9 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>05/02/2021</small><br>
                    <span class="event-title">RESULTADOS INSCRIPCIÓN AGENTES PARTICIPANTES PPBR 2022- FINAL</span><br>
                    <small>476.6 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>04/02/2021</small><br>
                    <span class="event-title">RESULTADOS INSCRIPCIÓN AGENTES PARTICIPANTES PPBR 2022</span><br>
                    <small>466.4 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>22/01/2021</small><br>
                    <span class="event-title">3. Ficha de Inscripcion de Agentes Participantes</span><br>
                    <small>274 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>22/01/2021</small><br>
                    <span class="event-title">2. Requisitos y Solicitud PPBR 2022</span><br>
                    <small>832 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>22/01/2021</small><br>
                    <span class="event-title">CONVOCATORIA PPBR 2022</span><br>
                    <small>741.9 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="header-alert text-center">
            <strong>PRESUPUESTO PARTICIPATIVO - 2021</strong><br>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>18/09/2020</small><br>
                    <span class="event-title">8. Aviso de Sinceramiento</span><br>
                    <small>341 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>16/09/2020</small><br>
                    <span class="event-title">7. Suspensión del Presupuesto Participativo 2021</span><br>
                    <small>255.1 KB</small>
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
                    <span class="event-title">6. Decreto de Urgencia 057-2020</span><br>
                    <small>780.6 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>25/02/2020</small><br>
                    <span class="event-title">5. Resultados del Proceso de Inscripcion de los Agentes Participantes</span><br>
                    <small>351.5 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>25/02/2020</small><br>
                    <span class="event-title">4. Agentes Participantes PPBR 2021</span><br>
                    <small>377 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>27/01/2020</small><br>
                    <span class="event-title">1. Convocatoria PPBR 2021</span><br>
                    <small>281.9 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>27/01/2020</small><br>
                    <span class="event-title">2. Requisitos y Solicitud de agentes participantes 2021</span><br>
                    <small>319.3 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>27/01/2020</small><br>
                    <span class="event-title">3. Ficha de registro de agentes participantes</span><br>
                    <small>245.2 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="header-alert text-center">
            <strong>PRESUPUESTO PARTICIPATIVO - 2020</strong><br>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>12/08/2019</small><br>
                    <span class="event-title">7.- Proyectos Priorizados PPBR 2020</span><br>
                    <small>1 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>12/08/2019</small><br>
                    <span class="event-title">6.- Comite de vigilancia PPBR 2020</span><br>
                    <small>700.4 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>12/08/2019</small><br>
                    <span class="event-title">5.- Equipo Técnico PPBR 2020</span><br>
                    <small>1.5 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>22/04/2019</small><br>
                    <span class="event-title">4.- Padron de Agentes Participantes</span><br>
                    <small>284.5 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>15/03/2019</small><br>
                    <span class="event-title">3. Ficha de registro de agentes participantes</span><br>
                    <small>233.1 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>15/03/2019</small><br>
                    <span class="event-title">2. Requisitos y modelo de solicitud</span><br>
                    <small>231.6 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>04/03/2019</small><br>
                    <span class="event-title">1. Convoctoria PPBR 2020</span><br>
                    <small>604.6 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="header-alert text-center">
            <strong>PRESUPUESTO PARTICIPATIVO - 2019</strong><br>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>21/01/2019</small><br>
                    <span class="event-title">7.- Comite de vigilancia PPBR 2019</span><br>
                    <small>1.4 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>17/01/2019</small><br>
                    <span class="event-title">8.- Proyectos Priorizados PPBR 2019</span><br>
                    <small>727.6 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>26/04/2018</small><br>
                    <span class="event-title">4.- Equipo Técnico PPBR 2019</span><br>
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
                    <small>26/04/2018</small><br>
                    <span class="event-title">3.- Agenda del Proceso PPBR 2019</span><br>
                    <small>264.4 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>19/03/2018</small><br>
                    <span class="event-title">2. Requisitos para Inscripción de Agentes Participantes</span><br>
                    <small>601.6 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>19/03/2018</small><br>
                    <span class="event-title">1. Convoctoria PPBR 2019</span><br>
                    <small>264.4 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="header-alert text-center">
            <strong>PRESUPUESTO PARTICIPATIVO - 2018</strong><br>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>21/06/2017</small><br>
                    <span class="event-title">9.- Proyectos Priorizados PPBR 2018</span><br>
                    <small>68.8 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>26/05/2017</small><br>
                    <span class="event-title">8.- Comité de Vigilancia PPBR 2018</span><br>
                    <small>52.5 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>26/05/2017</small><br>
                    <span class="event-title">1.- Convoctoria PPBR 2018</span><br>
                    <small>251.7 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>26/05/2017</small><br>
                    <span class="event-title">6.- Equipo Técnico PPBR 2018</span><br>
                    <small>1.8 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>25/05/2017</small><br>
                    <span class="event-title">5.- Agenda del Proceso PPBR 2018</span><br>
                    <small>251.7 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>21/04/2017</small><br>
                    <span class="event-title">7.- Padrón general de agentes participantes</span><br>
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
                    <small>30/03/2017</small><br>
                    <span class="event-title">4.- Ficha de inscripción</span><br>
                    <small>257.1 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>30/03/2017</small><br>
                    <span class="event-title">3.- Solicitud de inscripción</span><br>
                    <small>277.4 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>30/03/2017</small><br>
                    <span class="event-title">2.- Requisitos para Inscripción de Agentes Participantes</span><br>
                    <small>203.1 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="header-alert text-center">
            <strong>PRESUPUESTO PARTICIPATIVO - 2017</strong><br>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>05/07/2016</small><br>
                    <span class="event-title">6.- Proyectos Priorizados PPBR 2017</span><br>
                    <small>1 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>28/06/2016</small><br>
                    <span class="event-title">5.- Agentes Participantes - Sociedad Civil</span><br>
                    <small>119.4 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>28/06/2016</small><br>
                    <span class="event-title">4.- Agentes Participantes - Estado</span><br>
                    <small>265.8 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>28/06/2016</small><br>
                    <span class="event-title">3.- Agenda del Proceso PPBR 2017</span><br>
                    <small>201.9 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>28/06/2016</small><br>
                    <span class="event-title">1.- Convocatoria Presupuesto Participativo 2017</span><br>
                    <small>91.3 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>23/03/2016</small><br>
                    <span class="event-title">2.- Requisitos para Inscripción de Agentes Participantes</span><br>
                    <small>281.7 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="header-alert text-center">
            <strong>PRESUPUESTO PARTICIPATIVO - 2016</strong><br>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>01/01/2016</small><br>
                    <span class="event-title">Equipo Técnico del Presupuesto Participativo 2016</span><br>
                    <small>94.4 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>01/01/2016</small><br>
                    <span class="event-title">Proyectos Priorizados 2016</span><br>
                    <small>187.2 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>01/01/2016</small><br>
                    <span class="event-title">Agenda del Proceso Presupuesto Participativo - 2016</span><br>
                    <small>790.6 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="header-alert text-center">
            <strong>PRESUPUESTO PARTICIPATIVO - 2015</strong><br>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>10/12/2015</small><br>
                    <span class="event-title">Convocatoria al Proceso Participativo 2015</span><br>
                    <small>583.9 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>05/11/2015</small><br>
                    <span class="event-title">Equipo Técnico del Presupuesto Participativo - 2015</span><br>
                    <small>251.2 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>05/11/2015</small><br>
                    <span class="event-title">Reglamento General - Proceso del Presupuesto Participativo - 2015</span><br>
                    <small>182.7 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>05/11/2015</small><br>
                    <span class="event-title">Ordenanza Regional Nº 112 - 2015</span><br>
                    <small>202.7 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>05/11/2015</small><br>
                    <span class="event-title">Requisitos - Proceso de programación del PPR - 2015</span><br>
                    <small>544.4 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white"></i></div>
                <div class="event-info">
                    <small>16/06/2015</small><br>
                    <span class="event-title">ACUERDO REGIONAL N° 234-2015-GRJ/CR</span><br>
                    <small>649.5 KB</small>
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
