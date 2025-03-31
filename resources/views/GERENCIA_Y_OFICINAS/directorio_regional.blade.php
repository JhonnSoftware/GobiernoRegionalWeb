@extends('layouts.layout')

@section('title', 'Directorio Regional')

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

        .table {
            border-radius: 12px;
            overflow: hidden;
        }
        thead tr {
            border-top-left-radius: 12px;
            border-top-right-radius: 12px;
        }
        tbody tr:last-child td {
            border-bottom-left-radius: 12px;
            border-bottom-right-radius: 12px;
        }

        .custom-table {
            border-collapse: separate;
            border-spacing: 0 10px;
            width: 100%;
        }
        .custom-table thead {
            background-color: #c7d6f3;
            color: #000;
            border-top-left-radius: 12px;
            border-top-right-radius: 12px;
            overflow: hidden;
        }
        .custom-table th, .custom-table td {
            padding: 12px;
            background: white;
            border: none;
        }
        .custom-table thead th:first-child {
            border-top-left-radius: 12px;
        }
        .custom-table thead th:last-child {
            border-top-right-radius: 12px;
        }
        .custom-table tbody tr {
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 12px;
        }
        .custom-table tbody tr td:first-child {
            border-top-left-radius: 12px;
            border-bottom-left-radius: 12px;
        }
        .custom-table tbody tr td:last-child {
            border-top-right-radius: 12px;
            border-bottom-right-radius: 12px;
        }
        .profile-img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
        }
        .icon-btn {
            border: none;
            background: none;
            color: #000;
            font-size: 18px;
        }

        .custom-header {
            background-color: #ff6700 !important;
            color: white !important;
        }
        .custom-header th {
            background-color: #ff6700 !important;
            color: white !important;
        }
    </style>
    <div class="banner fade-in">
        <h1>DIRECTORIO REGIONAL</h1>
    </div>

    <div class="container mt-5 fade-in">
        <table class="table custom-table">
            <thead class="custom-header">
                <tr>
                    <th>DEPENDENCIA</th>
                    <th>REPRESENTANTE</th>
                    <th>CORREO ELECTRONICO</th>
                    <th>ANEXOS</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>GOBERNADOR REGIONAL</td>
                    <td>MG. ZÓSIMO CÁRDENAS MUJE</td>
                    <td>zcardenas@regionjunin.gob.pe</td>
                    <td>1302</td>
                </tr>
                <tr>
                    <td>VICEGOBERNADOR REGIONAL</td>
                    <td>CPC. MILAGROS MARISEL INCHE ARIAS</td>
                    <td>minche@regionjunin.gob.pe</td>
                    <td>1301</td>
                </tr>
                <tr>
                    <td>SECRETARIA GENERAL</td>
                    <td>ABOG. ENA MILAGROS BONILLA PEREZ</td>
                    <td>ebonilla@regionjunin.gob.pe</td>
                    <td>1304</td>
                </tr>
                <tr>
                    <td>GERENCIA GENERAL REGIONAL</td>
                    <td>ECO. ROY TOMAS GONZALES MAYTA</td>
                    <td>rgonzales@regionjunin.gob.pe</td>
                    <td>1308</td>
                </tr>
                <tr>
                    <td>OFICINA REGIONAL DE CONTROL INSTITUCIONAL</td>
                    <td>DR. IVAN ANTONIO HERRERA VILLARUEL</td>
                    <td></td>
                    <td>1316</td>
                </tr>
                <tr class="highlighted-row">
                    <td>PROCURADURIA PÚBLICA REGIONAL</td>
                    <td>ABOG. FRANZ EVER PAZCE CONTRERAS</td>
                    <td>fpazce@regionjunin.gob.pe</td>
                    <td>1521</td>
                </tr>
                <tr>
                    <td>OFICINA REGIONAL DE ASESORIA JURIDICA</td>
                    <td>ABOG. LUIS ALBERTO CORDOVA MORALES</td>
                    <td>lcordova@regionjunin.gob.pe</td>
                    <td>1322</td>
                </tr>
                <tr>
                    <td>CONSEJO REGIONAL</td>
                    <td>ABOG. ROGELIO ANIBAL ESPINOZA ESPIRITU</td>
                    <td>respinoza@regionjunin.gob.pe</td>
                    <td>1516</td>
                </tr>
                <tr>
                    <td>OFICINA REGIONAL DE COMUNICACIONES</td>
                    <td>LIC. FLOR BEHTSI ASPARREN BROCOS</td>
                    <td>fasparren@regionjunin.gob.pe</td>
                    <td>1312</td>
                </tr>
                <tr>
                    <td>OFICINA REGIONAL DE DESARROLLO INSTITUCIONAL Y TECNOLOGÍA DE LA INFORMACIÓN</td>
                    <td>ING. EDWIN ERNESTO RAMON QUISPE</td>
                    <td>eramon@regionjunin.gob.pe</td>
                    <td>1501</td>
                </tr>
                <tr>
                    <td>GERENCIA REGIONAL DE PLANEAMIENTO, PRESUPUESTO Y ACONDIC. TERRITORIAL</td>
                    <td>MG. PERCY DAVID TIZA FELIX</td>
                    <td>ptiza@regionjunin.gob.pe</td>
                    <td>1506</td>
                </tr>
                <tr>
                    <td>SUB GERENCIA DE INVERSIÓN PROGRAMACIÓN MULTISECTORIAL DE INVERSIONES</td>
                    <td>MG. DORA MARIA LLACZA YACHACHIN</td>
                    <td>dllacza@regionjunin.gob.pe</td>
                    <td>1711</td>
                </tr>
                <tr>
                    <td>SUB GERENCIA DE PRESUPUESTO Y TRIBUTACIÓN</td>
                    <td>CPC. NATALÍ OBDULIA ALMIDÓN ORTIZ</td>
                    <td>nalmidon@regionjunin.gob.pe</td>
                    <td>1510</td>
                </tr>
                <tr>
                    <td>SUB GERENCIA DE COOPERACIÓN TECNICA Y PLANEAMIENTO</td>
                    <td>ECO. ANTONIA BRIGIDA VEGA TERREL</td>
                    <td>avega@regionjunin.gob.pe</td>
                    <td>1717</td>
                </tr>
                <tr>
                    <td>SUB GERENCIA DE ACONDICIONAMIENTO TERRITORIAL</td>
                    <td>ECON. JULIO RAUL MEZA SULLUCHUCO</td>
                    <td>jmezas@regionjunin.gob.pe</td>
                    <td>1722</td>
                </tr>
                <tr>
                    <td>OFICINA REGIONAL DE ADMINISTRACIÓN Y FINANZAS</td>
                    <td>CPC. MARIANELA LIZ QUISPE SALAS</td>
                    <td>mquispe@regionjunin.gob.pe</td>
                    <td>1201</td>
                </tr>
                <tr>
                    <td>OFICINA DE ADMINISTRACIÓN FINANCIERA</td>
                    <td>CPC. IRIS POVIS RAMOS</td>
                    <td>ipovis@regionjunin.gob.pe</td>
                    <td>1204</td>
                </tr>
                <tr>
                    <td>OFICINA DE ABASTECIMIENTOS Y SERVICIOS AUXILIARES</td>
                    <td>C.P.C JUAN CARLOS RAMOS DOMINGUEZ</td>
                    <td></td>
                    <td>1701</td>
                </tr>
                <tr>
                    <td>OFICINA DE RECURSOS HUMANOS</td>
                    <td>LIC. JUAN JOSEPH CHAVÉZ SÁNCHEZ</td>
                    <td></td>
                    <td>1622</td>
                </tr>
                <tr>
                    <td>OFICINA DE GESTIÓN PATRIMONIAL</td>
                    <td>CPC. MARIA ELENA YACTAYO QUINTANILLA</td>
                    <td>myactayo@regionjunin.gob.pe</td>
                    <td>1419</td>
                </tr>
                <tr>
                    <td>GERENCIA REGIONAL DE RR.NN GESTIÓN MEDIO AMBIENTE</td>
                    <td>ING. VLADIMIR JAVIER YAÑEZ RODRIGUEZ</td>
                    <td>vyanez@regionjunin.gob.pe</td>
                    <td>1423</td>
                </tr>
                <tr>
                    <td>SUB GERENCIA DE RR.NN Y MEDIO AMBIENTE</td>
                    <td>ING. MIDORI ANICA SURICHAQUI SINCHE(e)</td>
                    <td></td>
                    <td>1426</td>
                </tr>
                <tr>
                    <td>GERENCIA REGIONAL DE DESARROLLO ECONÓMICO</td>
                    <td>ING. MIGUEL ANGEL RIVERA PORRAS</td>
                    <td>mrivera@regionjunin.gob.pe</td>
                    <td>1401</td>
                </tr>
                <tr>
                    <td>SUB GERENCIA DE PROMOCIÓN DE INVERSIONES</td>
                    <td>LIC. JULIO CESAR MEZA CCANTO</td>
                    <td>jmeza@regionjunin.gob.pe</td>
                    <td>1405</td>
                </tr>
                <tr>
                    <td>GERENCIA REGIONAL DE DESARROLLO SOCIAL</td>
                    <td>LIC. LISETTE RUIZ RIVERA</td>
                    <td>lruiz@regionjunin.gob.pe</td>
                    <td>1409</td>
                </tr>
                <tr>
                    <td>SUB GERENCIA DE DEFENSA CIVIL</td>
                    <td>ARQ. JOSE AUGUSTO VASQUEZ LOAIZA</td>
                    <td>jvasquez@regionjunin.gob.pe</td>
                    <td>1418</td>
                </tr>
                <tr>
                    <td>SUB GERENCIA DE DESARROLLO SOCIAL E IGUALDAD DE OPORTUNIDADES</td>
                    <td>LIC. RUDY GUERRA RICSE</td>
                    <td>rguerra@regionjunin.gob.pe</td>
                    <td>1433</td>
                </tr>
                <tr>
                    <td>GERENCIA REGIONAL DE INFRAESTRUCTURA</td>
                    <td>ING. RONY PAOLO VEJARANO PEREZ</td>
                    <td>rvejarano@regionjunin.gob.pe</td>
                    <td>1601</td>
                </tr>
                <tr>
                    <td>SUB GERENCIA DE SUPERVISION Y LIQUIDACIÓN DE OBRAS</td>
                    <td>ING. JULIO CESAR BARRAZA CHIRINOS</td>
                    <td>jbarraza@regionjunin.gob.pe</td>
                    <td>1608</td>
                </tr>
                <tr>
                    <td>SUB GERENCIA DE OBRAS</td>
                    <td>ING. RAQUEL HUAMAN MOSQUERA</td>
                    <td>rhuaman@regionjunin.gob.pe</td>
                    <td>1611</td>
                </tr>
                <tr>
                    <td>SUB GERENCIA DE ESTUDIOS Y PROYECTOS</td>
                    <td>ING. FRANK GONZALES QUISPE</td>
                    <td>fgonzales@regionjunin.gob.pe</td>
                    <td>1616</td>
                </tr>
                <tr>
                    <td>DIRECCION REGIONAL DE PRODUCCIÓN</td>
                    <td>ING. RONALD GENARO MARIÑO OBREGON</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>DIRECCION REGIONAL DE TRANSPORTES Y COMUNICACIONES</td>
                    <td>MG.MICHAEL PALACIOS RAMOS</td>
                    <td>mpalacios@regionjunin.gob.pe</td>
                    <td></td>
                </tr>
                <tr>
                    <td>DIRECCIÓN REGIONAL DE VIVIENDA, CONSTRUCCIÓN Y SANEAMIENTO</td>
                    <td>ING. PABEL CAMAYO CERRON</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>DIRECCIÓN REGIONAL DE COMERCIO EXTERIOR Y TURISMO</td>
                    <td>LIC. JULIO HUMBERTO ABANTO LLAQUE</td>
                    <td>jabanto@regionjunin.gob.pe</td>
                    <td></td>
                </tr>
                <tr>
                    <td>DIRECCIÓN REGIONAL DE TRABAJO Y PROMOCIÓN DEL EMPLEO</td>
                    <td>ABOG. DIANA ROXANA CONDE MONTOYA</td>
                    <td>dconde@regionjunin.gob.pe</td>
                    <td></td>
                </tr>
                <tr>
                    <td>DIRECCIÓN REGIONAL DE ENERGÍA Y MINAS</td>
                    <td>ING. RODOLFO ROLANDO CANO ANDRADE</td>
                    <td>rcano@regionjunin.gob.pe</td>
                    <td></td>
                </tr>
                <tr>
                    <td>DIRECCIÓN REGIONAL DE AGRICULTURA</td>
                    <td>MG. JAIME VICTORINO AQUINO AQUINO</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>DIRECCIÓN REGIONAL DE EDUCACIÓN</td>
                    <td>ECON. MEDARNO SEVERO GOMEZ MIGUEL</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>DIRECCIÓN REGIONAL DE SALUD</td>
                    <td>LIC. CLIFOR CURIPACO LOPEZ</td>
                    <td>cmatamoros@regionjunin.gob.pe</td>
                    <td></td>
                </tr>
                <tr>
                    <td>DIRECCIÓN DE ARCHIVO REGIONAL</td>
                    <td>LIC. ELVIRO LUIS CALDERON YACHACHI </td>
                    <td>ecalderon@regionjunin.gob.pe</td>
                    <td></td>
                </tr>



                <tr>
                    <td>DIRECCIÓN DE LA ALDEA INFANTIL "EL ROSARIO"</td>
                    <td>FLOR DE MARIA ESTHER TORRES</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>DIRECTOR GENERAL DEL HOSPITAL REGIONAL DE MEDICINA TROPICAL "JULIO CESAR DEMARINI"</td>
                    <td>M.C. MAXIMO RAFAEL POMAYAY VILCHEZ</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>DIRECTOR GENERAL DEL INSTITUTO REGIONAL DE ENFERMEDADES NEOPLASICAS DEL CENTRO</td>
                    <td>M.C. PABLO RODRIGUEZ RUIZ</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>DIRECTOR EJECUTIVO DE LA RED SALUD JAUJA</td>
                    <td>C.D. JORGE OSORES SANCHEZ</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>DIRECTOR EJECUTIVO DE LA RED SALUD VALLE DEL MANTARO</td>
                    <td>C.D. NANCY LUZ BAQUERIZO INGA</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>DIRECTOR EJECUTIVO DE LA RED SALUD CHUPACA</td>
                    <td>M.C. LIZ SAMANIEGO CHAVEZ</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>DIRECTOR EJECUTIVO DE LA RED SALUD PICHANAKI</td>
                    <td>M.C. DANIEL NEHEMIAS HUAMANI SOLANO</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>DIRECTOR EJECUTIVO DE LA RED INTEGRADA DE SALUD CHANCHAMAYO</td>
                    <td>M.C. FERNANDO RAUL POLANCO HINOSTROZA</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>DIRECTOR EJECUTIVO DE LA RED INTEGRADA DE SALUD TARMA</td>
                    <td>C.D. ALDO DENNYS TINEO VELITA</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>DIRECTOR EJECUTIVO DE LA RED INTEGRADA DE SALUD DE SAN MARTIN DE PANGOA</td>
                    <td>OBST. RUTH ROSMERY CALDERON HUAMAN</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>DIRECTOR EJECUTIVO DE LA RED INTEGRADA DE SALUD DE SATIPO</td>
                    <td>PSICOL. RUDY RENZO ARAUJO HINOSTROZA</td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
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
