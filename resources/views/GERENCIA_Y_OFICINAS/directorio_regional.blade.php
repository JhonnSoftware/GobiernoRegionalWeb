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
    </style>
    <div class="banner">
        <h1>DIRECTORIO REGIONAL</h1>
    </div>

    <div class="container mt-5">
        <table class="table custom-table">
            <thead>
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
                    <td>ING. ELMER BUJAICO CCOICCA</td>
                    <td>ebujaico@regionjunin.gob.pe</td>
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
                    <td>ING. RODOLFO JAIME ORTÍZ ZUASNABAR</td>
                    <td>rortiz@regionjunin.gob.pe</td>
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
                    <td>ING. EDUARDO ANTONIO TINTAYA FLORES</td>
                    <td>etintaya@regionjunin.gob.pe</td>
                    <td></td>
                </tr>
                <tr>
                    <td>DIRECCIÓN REGIONAL DE COMERCIO EXTERIOR Y TURISMO</td>
                    <td>ARQUEOL. JULIO ABANTO LLAQUE</td>
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
                    <td>MG. OMAR LUIS TOVALINO CORDOVA</td>
                    <td>otovalinoi@regionjunin.gob.pe</td>
                    <td></td>
                </tr>
                <tr>
                    <td>DIRECCIÓN REGIONAL DE SALUD</td>
                    <td>MC. CHRISTIAN DANY MATAMOROS VERA</td>
                    <td>cmatamoros@regionjunin.gob.pe</td>
                    <td></td>
                </tr>
                <tr>
                    <td>DIRECCIÓN DE ARCHIVO REGIONAL</td>
                    <td>LIC. ELVIRO LUIS CALDERON YACHACHI </td>
                    <td>ecalderon@regionjunin.gob.pe</td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
