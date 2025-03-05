@extends('layouts.layout')


@section('title', 'Directivos Regionales')


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
        <h1>DECRETOS REGIONALES</h1>
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
            <strong>DIRECTIVAS 2025</strong><br>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>06/02/2025</small><br>
                    <span class="event-title">DIRECTIVA N° 01 -2025 NORMAS PARA EL PROCEDIMIENTO ADMINISTRATIVO DE 
                        RECONOCIMIENTO DE DEUDA DE EJERCICIOS FISCALES ANTERIORES DE LA UNIDAD EJECUTORA 001-SEDE 
                        CENTRAL DEL GOBIERNO REGIONAL DE JUNIN</span><br>
                    <small>785 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>

        <div class="header-alert text-center">
            <strong>DIRECTIVAS 2024</strong><br>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>11/12/2024</small><br>
                    <span class="event-title">DIRECTIVA GENERAL N° 006-2024-G-R-JUNIN-GGR/ORAF-OGP - 
                        NORMAS Y PROCEDIMIENTOS PARA LA DISPOSICIÓN FINAL-ACTOS DE ADMINISTRACIÓN Y 
                        ACTOS DE DISPOSICIÓN DE BIENES MUEBLES PATRIMONIALES EN EL GOBIERNO REGIONAL 
                        JUNIN</span><br>
                    <small>13 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>11/12/2024</small><br>
                    <span class="event-title">DIRECTIVA GENERAL N° 005-2024-GR-JUNIN-GGR/ORAF-OGP - NORMAS 
                        Y PROCEDIMIENTOS PARA LOS ACTOS DE DISPOSICIÓN DE BIENES MUEBLES PATRIMONIALES EN 
                        EL GOBIERNO REGIONAL JUNIN</span><br>
                    <small>9.9 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>11/12/2024</small><br>
                    <span class="event-title">DIRECTIVA GENERAL N° 004-2024-G-R-JUNIN-GGR- NORMAS Y 
                        PROCEDIMIENTOS QUE REGULA LAS MEDIDAS NECESARIAS PARA EL USO DE LA BICICLETA 
                        COMO MEDIO DE TRANSPORTE AL CENTRO DE LABORES AL GOBIERNO REGIONAL JUNIN</span><br>
                    <small>262.9 KB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>13/08/2024</small><br>
                    <span class="event-title">DIRECTIVA N003-2024-G-R-JUNIN-GGR- NORMAS PARA LA FORMULACIÓN 
                        DE LINEAMIENTOS PARA EL FUNCIONAMIENTO DE LAS INSTANCIAS PROVINCIALES Y DISTRITALES 
                        DE CONCERTACIÓN EN MARCO A LA LEY N°30364 PARA LA PREVENCIÓN DE VIOLENCIA CONTRA LAS
                         MUJERES</span><br>
                    <small>2.6 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>03/07/2024</small><br>
                    <span class="event-title">DIRECTIVA GENERAL N°002-2024-GRJ/SG NORMAS Y PROCEDIMIENTOS 
                        PARA LA RECEPCIÓN DOCUMENTAL EN LAS VENTANILLAS DE TRÁMITE DOCUMENTARIO DEL GOBIERNO
                         REGION DE JUNÍN</span><br>
                    <small>3.9 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>26/01/2024</small><br>
                    <span class="event-title">DIRECTIVA GENERAL N° 001-2024- GR-JUNÍN/GGR - NORMAS Y PROCEDIMIENTOS PARA 
                        EL OTORGAMIENTO, RENDICIÓN DE VIÁTICOS Y PASAJES EN COMISIÓN DE SERVICIOS PARA 
                        FUNCIONARIOS, PERSONAL DE CONFIANZA, SERVIDORES PÚBLICOS DEL GOBIERNO REGIONAL 
                        JUNIN</span><br>
                    <small>1.5 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="header-alert text-center">
            <strong>DIRECTIVAS 2023</strong><br>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>06/01/2025</small><br>
                    <span class="event-title">DIRECTIVA GENERAL N° 006-2023-GR-JUNIN-GGR 
                        NORMAS Y PROCEDIMIENTOS PARA EL OTORGAMIENTO, RENDICIÓN DE 
                        VIÁTICOS Y PASAJES EN COMISIÓN DE SERVICIOS PARA FUNCIONARIOS, 
                        PERSONAL DE CONFIANZA, SERVIDORES PUBLICOS Y CONSULTORES DEL 
                        GOBIERNO REGIONAL JUNÍN</span><br>
                    <small>6.4 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>06/01/2025</small><br>
                    <span class="event-title">DIRECTIVA GENERAL N° 005-2023-GRJ-GGR - NORMAS Y 
                        PROCEDIMIENTOS PARA LA FIRMA DE CONVENIOS Y PARA LAS TRANSFERENCIAS 
                        FINANCIERAS OTORGADAS POR EL GOBIERNO REGIONAL DE JUNÍN A ENTIDADES 
                        PÚBLICAS Y A LOS GOBIERNOS LOCALES</span><br>
                    <small>4.8 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>06/01/2025</small><br>
                    <span class="event-title">DIRECTIVA GENERAL N°004 -2023-GR-JUNIN/GGR NORMAS Y 
                        PROCEDIMIENTOS PARA EL OTORGAMIENTO, RENDICIÓN DE VIÁTICOS Y PASAJES EN 
                        COMISIÓN DE SERVICIOS PARA FUNCIONARIOS, PERSONAL DE CONFIANZA, SERVIDORES 
                        PUBLICOS Y CONSULTORES DEL GOBIERNO REGIONAL JUNÍN.</span><br>
                    <small>4.4 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>06/01/2025</small><br>
                    <span class="event-title">DIRECTIVA GENERAL N° 003 -2023-GR-JUNIN/GGR NORMAS Y 
                        PROCEDIMIENTOS PARA EL OTORGAMIENTO, RENDICIÓN DE VIÁTICOS Y PASAJES EN 
                        COMISIÓN DE SERVICIOS PARA FUNCIONARIOS, PERSONAL DE CONFIANZA, SERVIDORES 
                        PÚBLICOS Y CONSULTORES DEL GOBIERNO REGIONAL JUNÍN</span><br>
                    <small>4.6 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>06/01/2025</small><br>
                    <span class="event-title">DIRECTIVA GENERAL N°002-2023-GRJ-GGR MODIFICACIÓN DE NORMAS 
                        PARA LA APLICACIÓN DEL CÓDIGO DE ETICA EN EL GOBIERNO REGIONAL JUNIN</span><br>
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
                    <small>06/01/2025</small><br>
                    <span class="event-title">DIRECTIVA GENERAL N°001- 2023-GRJUNIN/GGR - NORMAS PARA 
                        LA CONTRATACIÓN DE BIENES, SERVICIOS Y OBRAS, CUYOS MONTOS SEAN IGUALES O 
                        INFERIORES A OCHO (8) UNIDADES IMPOSITIVAS TRIBUTARIAS EN EL GOBIERNO REGIONAL
                         JUNÍN</span><br>
                    <small>12.9 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="header-alert text-center">
            <strong>DIRECTIVAS 2022</strong><br>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>06/01/2025</small><br>
                    <span class="event-title">DIRECTIVA GERENCIAL N°006 -2022-GR JUNIN-SG NORMAS 
                        PARA LA ORGANIZACIÓN DE LOS ARCHIVOS DE GESTIÓN Y SU TRANSFERENCIA AL 
                        ARCHIVO CENTRAL DEL GOBIERNO REGIONAL JUNÍN</span><br>
                    <small>4 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>06/01/2025</small><br>
                    <span class="event-title">DIRECTIVA GENERAL Nº005 -2022-GRJ-GGR-SG NORMAS 
                        GENERALES PARA LAS COMUNICACIONES ESCRITAS Y MENSAJES ELECTRÓNICOS EN 
                        EL AMBITO DEL GOBIERNO REGIONAL JUNIN DURANTE EL ESTADO DE EMERGENCIA 
                        Y TELETRABAJO/TRABAJO REMOTO</span><br>
                    <small>3.7 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>06/01/2025</small><br>
                    <span class="event-title">DIRECTIVA GENERAL Nº004 -2022-GRJ-GGR LINEAMIENTOS 
                        SOBRE EL TELETRABAJO EN EL ÁMBITO DEL GOBIERNO REGIONAL JUNÍN</span><br>
                    <small>5.6 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>06/01/2025</small><br>
                    <span class="event-title">DIRECTIVA GENERAL Nº003-2022-GR-JUNIN-GGR NORMAS Y 
                        PROCEDIMIENTOS PARA LA REALIZACIÓN DE LAS SESIONES DEL DIRECTORIO DE 
                        GERENTES REGIONALES EN EL GOBIERNO REGIONAL JUNIN</span><br>
                    <small>1.1 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>06/01/2025</small><br>
                    <span class="event-title">DIRECTIVA GENERAL N° 002-2022-GRJ/GGR NORMAS PARA 
                        LA RECONSTRUCCIÓN DE EXPEDIENTES Y/0 DOCUMENTOS ADMINISTRATIVOS EN EL 
                        GOBIERNO REGIONAL DE JUNÍN</span><br>
                    <small>1.9 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>06/01/2025</small><br>
                    <span class="event-title">DIRECTIVA GENERAL N° 001-2022-GRJ-GGR - NORMAS SOBRE 
                        APLICACIÓN DEL REGIMEN LABORAL ESPECIAL DE CONSTRUCCIÓN CIVIL A TRABAJADORES 
                        OBREROS, CONTRATADOS PARA LA EJECUCIÓN DE OBRAS PÚBLICAS POR ADMINISTRACIÓN 
                        DIRECTA EN EL ÁMBITO DEL GOBIERNO REGIONAL</span><br>
                    <small>1.6 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="header-alert text-center">
            <strong>DIRECTIVAS 2021</strong><br>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>23/08/2021</small><br>
                    <span class="event-title">DIRECTIVA GENERAL N° 006-2021- GRJ-JUNÍN-GGR - NORMAS 
                        PARA LA CONTRATACIÓN DE BIENES Y SERVICIOS, CUYOS MONTOS SEAN IGUALES O 
                        INFERIORES A OCHO (8) UNIDADES IMPOSITIVAS TRIBUTARIAS EN EL GOBIERNO 
                        REGIONAL JUNÍN</span><br>
                    <small>10.2 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>28/05/2021</small><br>
                    <span class="event-title">DIRECTIVA GENERAL N°005 -2021-GRJ-JUNÍN-GGR - DIRECTIVA 
                        PARA LA EJECUCIÓN PRESUPUESTARIA DEL PLIEGO 450 GOBIERNO REGIONAL DEL DEPARTAMENTO 
                        DE JUNIN PARA EL AÑO FISCAL 2021</span><br>
                    <small>14.5 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>14/05/2021</small><br>
                    <span class="event-title">DIRECTIVA GENERAL N° 004 -2021-GRJ-JUNÍN-GGR - DIRECTIVA 
                        PARA LA FORMULACIÓN, APROBACIÓN, DIFUSIÓN Y ACTUALIZACIÓN DEL MANUAL DE 
                        PROCEDIMIENTOS DEL GOBIERNO REGIONAL JUNÍN</span><br>
                    <small>2.2 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>06/01/2025</small><br>
                    <span class="event-title">DIRECTIVA GENERAL N° 003 -2021-GRJ-JUNÍN-GGR - 
                        DIRECTIVA SOBRE RÉGIMEN DE LOS FEDATARIOS PARA LA AUTENTICACIÓN DE DOCUMENTOS 
                        Y CERTIFICACIÓN DE FIRMAS EN EL GOBIERNO REGIONAL JUNÍN</span><br>
                    <small>3.5 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>19/04/2021</small><br>
                    <span class="event-title">DIRECTIVA GENERAL N°002 -2021-GRJ-JUNÍN-GGR - 
                        DIRECTIVA DE TRANSFERENCIA DE OBRAS Y/0 PROYECTOS DE INVERSIÓN PÚBLICA 
                        EJECUTADOS POR CONTRATA, ADMINISTRACIÓN</span><br>
                    <small>3.6 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>24/03/2021</small><br>
                    <span class="event-title">DIRECTIVA GERENCIAL N° 001 -2021-GRJ-GGR LINEAMIENTOS 
                        PARA LA PUBLICACIÓN Y ACTUALIZACIÓN DE INFORMACIÓN EN EL PORTAL DE TRANSPARENCIA 
                        ESTANDAR DEL GRJ</span><br>
                    <small>4.8 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="header-alert text-center">
            <strong>DIRECTIVAS 2020</strong><br>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>14/12/2020</small><br>
                    <span class="event-title">DIRECTIVA GENERAL N°011-2020-GRJ/GGR - 
                        DIRECTIVA GENERAL: FORMULACIÓN DEL PLAN OPERATIVO INSTITUCIONAL 
                        MULTIANUAL (POIM), ARTICULADO CON LOS SISTEMAS ADMINISTRATIVOS 
                        TRANSVERSALES DE GESTIÓN DE RECURSOS HUMANOS, PROGRAMACIÓN 
                        MULTIANUAL Y GESTI?</span><br>
                    <small>19 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>31/08/2020</small><br>
                    <span class="event-title">DIRECTIVA GENERAL N°010-2020-GRJ/GGR - NORMAS 
                        Y PROCEDIMIENTO PARA EL CONTROL, CUSTODIA Y EJECUCIÓN DE CARTAS 
                        FIANZAS PRESENTADAS ANTE EL PLIEGO GOBIERNO REGIONAL JUNIN</span><br>
                    <small>3.8 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>27/07/2020</small><br>
                    <span class="event-title">DIRECTIVA GENERAL N°009-2020-GRJ/GGR - NORMAS 
                        PARA LA APLICACIÓN DEL CÓDIGO DE ETICA EN EL GOBIERNO REGIONAL DE JUNIN</span><br>
                    <small>1.9 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>22/07/2020</small><br>
                    <span class="event-title">DIRECTIVA GENERAL N°008-2020-GRJ/GGR - 
                        LINEAMIENTOS PARA EL MANEJO DEL AISLAMIENTO EN HOTEL, HOSTAL U 
                        HOSPEDAJE, FRENTE AL COVID-19</span><br>
                    <small>2.6 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>02/07/2020 </small><br>
                    <span class="event-title">DIRECTIVA GENERAL N°007-2020-GRJ/GGR - LINEAMIENTOS 
                        PARA LA LIQUIDACION DE OFICIO DE PROYECTOS DE INVERSION EJECUTADOS POR EL 
                        GOBIERNO REGIONAL DE JUNIN</span><br>
                    <small>2 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>02/07/2020</small><br>
                    <span class="event-title">DIRECTIVA GENERAL N°006-2020-GRJ/GGR - DISPOSICIONES 
                        PARA LA ACTUACIÓN EN LUGARES DE TRABAJO EN EL CONTEXTO DEL COVID-19</span><br>
                    <small>3.1 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>19/06/2020</small><br>
                    <span class="event-title">DIRECTIVA GENERAL N°005-2020-GRJ/GGR - NORMAS Y 
                        PROCEDIMIENTOS PARA EL MANEJO, USO Y CONTROL DEL FONDO PARA LA CAJA 
                        CHICA EN EL GOBIERNO REGIONAL JUNÍN</span><br>
                    <small>3 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>08/06/2020</small><br>
                    <span class="event-title">DIRECTIVA GENERAL N°004-2020-GRJ/GGR-ORAF/ORH - 
                        NORMAS PARA LA ADQUISICIÓN, ASIGNACIÓN Y USO DEL UNIFORME INSTITUCIONAL 
                        DEL PERSONAL ADMINISTRATIVO EN EL GOBIERNO REGIONAL JUNÍN</span><br>
                    <small>1.7 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>02/06/2020</small><br>
                    <span class="event-title">DIRECTIVA GENERAL N°003-2020-GRJ/GGR - NORMAS 
                        GENERALES PARA LAS COMUNICACIONES ESCRITAS Y MENSAJES ELECTRÓNICOS 
                        EN EL AMBITO DEL GOBIERNO REGIONAL JUNIN DURANTE EL ESTADO DE EMERGENCIA 
                        Y TELETRABAJO / TRABAJO REMOTO</span><br>
                    <small>3.8 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>15/04/2020</small><br>
                    <span class="event-title">DIRECTIVA GENERAL N°002-2020-GRJ/GGR - 
                        LINEAMIENTOS SOBRE TELETRABO EN EL AMBITO DEL GOBIERNO REGIONAL 
                        JUNIN</span><br>
                    <small>1.9 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>06/02/2020</small><br>
                    <span class="event-title">DIRECTIVA GENERAL N°001-2020-GRJ/GGR-ORAF-ORH - 
                        NORMAS SOBRE CONTRATACIÓN DE PERSONAL OBRERO Y ADMINISTRATIVO PARA LA 
                        EJECUCIÓN DE OBRAS PÚBLICAS POR ADMINISTRACIÓN DIRECTA EN LA JURISDICCIÓN 
                        DEL GOBIERNO REGIONAL JUNÍN</span><br>
                    <small>3.1 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="header-alert text-center">
            <strong>DIRECTIVAS 2019</strong><br>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>14/05/2019</small><br>
                    <span class="event-title">DIRECTIVA GENERAL N° 005-2019- GR-JUNÍN/GGR - 
                        NORMAS Y PROCEDIMIENTOS PARA LA REALIZACIÓN DE LAS SESIONES DEL 
                        DIRECTORIO DE GERENTES REGIONALES EN EL GOBIERNO REGIONAL JUNIN</span><br>
                    <small>1.2 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>12/04/2019</small><br>
                    <span class="event-title">DIRECTIVA GENERAL N° 004-2019- GR-JUNÍN/GGR - 
                        NORMAS Y PROCEDIMIENTOS PARA EL OTORGAMIENTO, RENDICIÓN DE VIÁTICOS 
                        Y PASAJES EN COMISIÓN DE SERVICIOS PARA FUNCIONARIOS, PERSONAL DE 
                        CONFIANZA, SERVIDORES, PERSONAL CONTRATADO BAJO LA MODALIDAD DE C</span><br>
                    <small>4.2 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>21/03/2019</small><br>
                    <span class="event-title">	DIRECTIVA GENERAL N° 003-2019- GR-JUNÍN/GGR - 
                        NORMAS Y PROCEDIMIENTOS PARA EL OTORGAMIENTO, EJECUCIÓN Y RENDICIÓN 
                        DE CUENTAS DE LOS FONDOS BAJO LA MODALIDAD DE ENCARGOS INTERNOS EN EL 
                        GOBIERNO REGIONAL JUNIN</span><br>
                    <small>2.5 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>01/03/2019</small><br>
                    <span class="event-title">DIRECTIVA GERENCIAL N° 002 - 2019-GRJ/GGR - 
                        LINEAMIENTOS PARA LA PUBLICACIÓN Y ACTUALIZACIÓN DE INFORMACIÓN 
                        EN EL PORTAL DE TRANSPARENCIA ESTANDAR DEL GRJ</span><br>
                    <small>4.1 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>11/01/2019</small><br>
                    <span class="event-title">DIRECTIVA GENERAL N° 001-2019- GR-JUNÍN/GGR - 
                        NORMAS PARA LA APLICACIÓN DEL RÉGIMEN LABORAL ESPECIAL DE CONTRATACION 
                        ADMINISTRATIVA DE SERVICIOS (CAS) EN EL GOBIERNO REGIONAL JUNÍN</span><br>
                    <small>2.9 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
            
        </div>
        <div class="header-alert text-center">
            <strong>DIRECTIVAS 2018</strong><br>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>27/12/2018</small><br>
                    <span class="event-title">DIRECTIVA GENERAL N° 004-2018- GRJUNÍN-GRI NORMAS Y
                         PROCEDIMIENTOS PARA LA EJECUCIÓN DE OBRAS POR EJECUCIÓN PRESUPUESTARIA 
                         INDIRECTA (POR CONTRATA) EN EL GOBIERNO REGIONAL JUNÍN</span><br>
                    <small>10.1 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>27/12/2018 </small><br>
                    <span class="event-title">DIRECTIVA GENERAL N° 003-2018- GRJUNÍN-ORAF-OASA NORMAS 
                        Y PROCEDIMIENTOS PARA LA FISCALIZACION POSTERIOR DE LOS DOCUMENTOS PRESENTADOS 
                        POR EL POSTOR GANADOR DURANTE EL PROCEDIMIENTO DE SELECCIÓN EN EL GOBIERNO REGIONAL
                         JUNÍN</span><br>
                    <small>1.5 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>24/10/2018</small><br>
                    <span class="event-title">DIRECTIVA GENERAL Nro 002-2018-GRJ/ORAF/OASA NORMAS 
                        Y PROCEDIMIENTOS PARA EL CONTROL Y MANEJO DE ALMACENES DE OBRA DE LOS 
                        PROYECTOS DE INVERSIÓN EJECUTADAS POR LA MODALIDAD DE ADMINISTRACIÓN DIRECTA 
                        EN EL GOBIERNO REGIONAL JUNÍN</span><br>
                    <small>3.1 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>31/01/2018</small><br>
                    <span class="event-title">Directiva Gerencial N°001-2018-GR-JUNIN-GGR-/GRPPAT 
                        NORMAS PARA LA EJECUCIÓN PRESUPUESTARIA DEL PLIEGO 450 GOBIERNO REGIONAL DEL 
                        DEPARTAMENTO DE JUNÍN — PARA EL AÑO FISCAL 2018</span><br>
                    <small>7.9 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="header-alert text-center">
            <strong>DIRECTIVAS 2017</strong><br>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>04/12/2017</small><br>
                    <span class="event-title">Directiva Gerencial N°011-2017-GRJ/ORAF/ORH 
                        PROCEDIMIENTOS PARA LA PROGRAMACIÓN Y ACTOS PREPARATORIOS PARA LA 
                        CONTRATACIÓN DE BIENES, SERVICIOS Y OBRAS EN EL GOBIERNO REGIONAL 
                        DE JUNÍN</span><br>
                    <small>4 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>04/12/2017</small><br>
                    <span class="event-title">Directiva Gerencial N°010-2017-GRJ/ORAF/ORH NORMAS 
                        Y PROCEDIMIENTOS PARA EFECTUAR LA ENTREGA Y RECEPCIÓN DE CARGO APLICABLES 
                        A LOS FUNCIONRIOS Y SERVIDORES DEL GOBIERNO REGIONAL JUNÍN</span><br>
                    <small>2.6 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>01/12/2017</small><br>
                    <span class="event-title">Directiva Gerencial N°010-2017-GRJ/ORAF/ORH NORMAS Y 
                        PROCEDIMIENTOS PARA EFECTUAR LA ENTREGA Y RECEPCIÓN DE CARGO APLICABLES A 
                        LOS FUNCIONRIOS Y SERVIDORES DEL GOBIERNO REGIONAL JUNÍN</span><br>
                    <small>2.6 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>23/10/2017</small><br>
                    <span class="event-title">Directiva Gerencial N°009-2017-GRJ-GGR/ORDITI - 
                        MODIFICACIÓN DE NORMAS GENERALES PARA LAS COMUNICACIONES ESCRITAS Y 
                        MENSAJES ELECTRÓNICOS EN EL GOBIERNO REGIONAL JUNIN</span><br>
                    <small>3.7 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>23/10/2017</small><br>
                    <span class="event-title">DIRECTIVA GENERAL N°008-2017-GR-JUNIN-GRJ/GRI/SGSLO - 
                        "NORMAS Y PROCEDIMIENTOS PARA LA LIQUIDACIÓN TÉCNICA Y FINANCIERA DE OBRAS 
                        EJECUTADAS POR LA MODALIDAD DE ADMINISTRACION DIRECTA EN EL 
                        GOBIERNO REGIONAL"</span><br>
                    <small>12.1 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>12/09/2017</small><br>
                    <span class="event-title">DIRECTIVA GENERAL N°007-2017 NORMAS PARA LA 
                        APLICACIÓN DEL RÉGIMEN LABORAL ESPECIAL DE CONTRATACION ADMINISTRATIVA 
                        DE SERVICIOS (CAS) EN EL GOBIERNO REGIONAL JUNÍN</span><br>
                    <small>3.1 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>19/07/2017</small><br>
                    <span class="event-title">DIRECTIVA GENERAL Nº 006 - 2017 MODIFICACIÓN DEL 
                        "RÉGIMEN DEL FEDATARIO PARA LA AUTENTICACIÓN DE DOCUMENTOS Y CERTIFICACIÓN 
                        DE FIRMAS EN EL GOBIERNO REGIONAL DE JUNÍN"</span><br>
                    <small>3 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>18/07/2017</small><br>
                    <span class="event-title">DIRECTIVA GENERAL Nº 005 - 2017 NORMAS Y 
                        PROCEDIMIENTOS PARA LA TRANSFERENCIA DE SALDO DE MATERIALES DE 
                        OBRAS EJECUTADAS POR ADMINISTRACIÓN DIRECTA EN EL GOBIERNO REGIONAL JUNIN</span><br>
                    <small>1.8 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>06/06/2017</small><br>
                    <span class="event-title">DIRECTIVA REGIONAL Nº 004 - 2017 - NORMAS DE SELECCIÓN 
                        Y AUTORIZACIÓN PARA LA REALIZACIÓN DE PRÁCTICAS PRE PROFESIONALES Y 
                        PROFESIONALES EN LA SEDE Y UNIDADES EJECUTORAS DEL GOBIERNO REGIONAL JUNÍN</span><br>
                    <small>1.6 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>19/07/2017</small><br>
                    <span class="event-title">DIRECTIVA REGIONAL Nº 003 - 2017 - NORMAS GENERALES PARA LAS 
                        COMUNICACIONES ESCRITAS Y MENSAJES ELECTRÓNICOS EN EL GOBIERNO REGIONAL JUNÍN</span><br>
                    <small>3 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>19/07/2017</small><br>
                    <span class="event-title">DIRECTIVA REGIONAL Nº 002 - 2017 - NORMAS Y PROCEDIMIENTOS PARA 
                        LA LIQUIDACIÓN TECNICA Y FINANCIERA DE OBRAS EJECUTADAS POR LA MODALIDAD DE 
                        ADMINISTRACIÓN INDIRECTA (CONTRATA) EN EL GRJ.</span><br>
                    <small>3 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>14/02/2017</small><br>
                    <span class="event-title">DIRECTIVA REGIONAL Nº 001 - 2017 - NORMAS PARA LA EJECUCIÓN 
                        PRESUPUESTARIA DEL PLIEGO 450 GOBIERNO REGIONAL DEL DEPARTAMENTO DE JUNÍN - PARA 
                        EL AÑO FISCAL 2017</span><br>
                    <small>8.8 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="header-alert text-center">
            <strong>DIRECTIVAS 2016</strong><br>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>21/10/2016</small><br>
                    <span class="event-title">DIRECTIVA REGIONAL Nº 011 - 2016 - MODIFICACIÓN DE 
                        NORMAS GENERALES DE SEGURIDAD Y VIGILANCIA EN EL GRJ</span><br>
                    <small>1.5 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>15/09/2016</small><br>
                    <span class="event-title">DIRECTIVA REGIONAL Nº 010 - 2016 - RÉGIMEN DEL 
                        FEDATARIO PARA LA AUTENTIFICACIÓN DE DOCUMENTOS Y CERTIFICACIÓN DE 
                        FIRMAS EN EL GRJ</span><br>
                    <small>1.6 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>09/09/2016</small><br>
                    <span class="event-title">DIRECTIVA REGIONAL Nº 009 - 2016 - NORMAS PARA 
                        LA ADQUISICIÓN, ASIGNACIÓN Y USO DEL UNIFORME INSTITUCIONAL EN EL 
                        GRJ</span><br>
                    <small>1.9 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>25/07/2016</small><br>
                    <span class="event-title">	DIRECTIVA REGIONAL Nº 008 - 2016 - ROTACIÓN DE SERVIDORES ADMINISTRATIVOS EN EL GRJ</span><br>
                    <small>1.4 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>19/07/2016</small><br>
                    <span class="event-title">DIRECTIVA REGIONAL Nº 007 - 2016 - NORMAS PARA EL USO DE 
                        LENGUAJE INCLUSIVO EN TODAS LAS COMUNICACIONES ESCRITAS, ORALES Y GRAFICAS
                         QUE SE ELABOREN EN EL GRJ</span><br>
                    <small>1.8 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>31/05/2016</small><br>
                    <span class="event-title">DIRECTIVA REGIONAL N° 006 - 2016 - MODIFICACIÓN DE 
                        NORMA Y PROCEDIMIENTOS PARA LA TRANSFERENCIA DE SALDO DE MATERIALES DE OBRAS 
                        EJECUTADAS POR ADMINISTRACIÓN DIRECTA EN EL GRJ</span><br>
                    <small>1.1 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>06/05/2016</small><br>
                    <span class="event-title">DIRECTIVA REGIONAL Nº 005 - 2016 - NORMAS PARA EL 
                        USO DE VEHÍCULOS Y CONTROL EN LA DISTRIBUCIÓN DE COMBUSTIBLE EN LA SEDE 
                        DEL GRJ</span><br>
                    <small>2.8 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>12/04/2016</small><br>
                    <span class="event-title">DIRECTIVA REGIONAL Nº 004 - 2016 - MODIFICACIÓN DE 
                        NORMAS PARA LA FORMULACIÓN, APROBACIÓN, EJECUCIÓN, MONITOREO Y EVALUACIÓN 
                        DEL POI 2016 DEL GRJ</span><br>
                    <small>4.6 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>15/03/2016</small><br>
                    <span class="event-title">DIRECTIVA REGIONAL Nº 003 - 2016 - NORMAS Y PROCEDIMIENTOS 
                        PARA LA ELABORACIÓN DEL INVENTARIO FÍSICO DE BIENES PATRIMONIALES EN EL GRJ</span><br>
                    <small>3.4 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>17/02/2016</small><br>
                    <span class="event-title">DIRECTIVA REGIONAL Nº 002 - 2016 - NORMAS Y PROCEDIMIENTOS 
                        PARA LA ELABORACIÓN DE TÉRMINOS DE REFERENCIA PARA CONTRATACIÓN DE ESTUDIOS 
                        DEFINITIVOS EN EL GRJ</span><br>
                    <small>4.9 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>03/02/2016</small><br>
                    <span class="event-title">DIRECTIVA REGIONAL Nº 001 - 2016 - NORMAS PARA LA CONTRATACIÓN 
                        DE BIENES Y SERVICIOS, CUYOS MONTOS SEAN IGUALES O INFERIORES A OCHO UNIDADES 
                        IMPOSITIVAS TRIBUTARIAS EN EL GRJ</span><br>
                    <small>4.2 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>14/02/2017</small><br>
                    <span class="event-title">DIRECTIVA REGIONAL Nº 001 - 2017 - NORMAS PARA LA EJECUCIÓN 
                        PRESUPUESTARIA DEL PLIEGO 450 GOBIERNO REGIONAL DEL DEPARTAMENTO DE JUNÍN - PARA 
                        EL AÑO FISCAL 2017</span><br>
                    <small>8.8 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
        </div>
        <div class="header-alert text-center">
            <strong>DIRECTIVAS 2015</strong><br>
        </div>
        <div class="mt-3">
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>09/12/2015</small><br>
                    <span class="event-title">DIRECTIVA REGIONAL Nº 012 - 2015 - NORMAS PARA LA FORMULACIÓN,
                         APROBACIÓN, EJECUCIÓN, MONITOREO Y EVALUACIÓN DEL POI 2016 DEL GRJ</span><br>
                    <small>4.8 MB</small>
                </div>
                <a href="" class="bi bi-download fs-3 me-3" style="color: #ff6700;"></a>
                <a href="" class="bi bi-folder fs-3" style="color: #ff6700;"></a>
            </div>
            <div class="event-card">
                <div class="event-icon"><i class="fa-solid fa-file-pdf text-white" style="padding:20px;"></i></div>
                <div class="event-info">
                    <small>02/12/2015</small><br>
                    <span class="event-title">DIRECTIVA REGIONAL Nº 011 - 2015 - PROCEDIMIENTOS PARA 
                        LA PROGRAMACIÓN Y ACTOS PREPARATORIOS PARA LA CONTRATACIÓN DE BIENES, 
                        SERVICIOS Y OBRAS EN EL GRJ</span><br>
                    <small>6.3 MB</small>
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



