@extends('layouts.layout')

@section('title', 'Responsables del acceso a la informacion publica y del portal de transparencia')

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
        
        .iframe-container {
            display: flex;
            justify-content: center;
            align-content: center;
            width: 100%;
            height: 800px; /* Ajusta la altura según necesites */
            margin-top: 20px;
        }

        .iframe-container iframe {
            width: 100%;
            height: 100%;
            margin: 0px 300px;
            border-radius: 15px;
        }
        /*parte1 */

        .outer {
            height: 50vh;
            background: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: row;
            flex-wrap: wrap;
            /* Permite que los elementos se acomoden si no hay espacio */
            gap: 20px;
        }

        .outer .content {
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            /* Asegura que la imagen y el texto estén alineados */
            justify-content: start;
            width: 700px;
            /* Asegura un ancho uniforme */
            height: 270px;
            /* Ajusta según sea necesario */
            background: #fff;
            padding: 15px;
            border-radius: 12px;
            box-shadow: 0px 5px 10px rgba(0, 0, 0, 1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .content .image-box {
            flex-shrink: 0;
            width: 200px;
            height: 232px;
            border-radius: 12px;
            background: #12B461 ;
            padding: 3px;
            overflow: hidden;
        }

        .content .image-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .content .details {
            margin-left: 20px;
            flex: 1;
            /* Permite que el texto ocupe el espacio disponible */
        }

        .content .details .name {
            font-size: 20px;
            font-weight: bold;
            color: #1355B3;
        }
        .content .details .title {
            
            font-weight: bold;
            color: #FF6801;
        }
        .content .details .job {
            font-weight: bold;
        }

        .content .details p {
            font-size: 14px;
            margin: 5px 0;
        }

        .outer .content:hover {
            transform: translateY(-10px);
            /* Hace que se levante */
            box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.3);
            /* Aumenta la sombra para el efecto de elevación */
        }
    </style>
    <div class="banner">
        <h1>RESPONSABLES DEL ACCESO A <br> LA INFORMACIÓN PUBLICA Y DEL <br>  PORTAL DE TRANSPARENCIA</h1>
    </div>
    <div class="outer">
        <div class="content">
            <div class="image-box">
                <img src="images/GRJ_COM_RE.png">
            </div>
            <div class="details">
                <div class="name">RESPONSABLE DE ENTREGA DE INFORMACION</div>
                <div class="title">OFICINA REGIONAL DE COMUNICACIONES</div>
                <div class="job">LIC. FLOR BEHTSI ASPARREN BROCOS</div>
                <strong>CARGO:</strong>
                Directora de la Oficina Regional de Comunicaciones
                <br>
                <strong>CORREO:</strong>
                fasparren@regionjunin.gob.pe
                <br>     
                <strong>ANEXO(s):</strong> 
                1312
            </div>

        </div>
        <div class="content">
            <div class="image-box">
                <img src="images/GRJ_ORDITI_RE.jpg">
            </div>
            <div class="details">
                <div class="name">RESPONSABLE DEL PORTAL DE TRANSPARENCIA ESTÁNDAR</div>
                <div class="title">OFICINA REGIONAL DE DESARROLLO INSTITUCIONAL Y TECNOLOGÍA DE LA INFORMACIÓN</div>
                <div class="job">ING. EDWIN ERNESTO RAMON QUISPE</div>
                <strong>CARGO:</strong>
                Director Regional de Desarrollo Institucinal y Tecnología de la Información
                <br>
                <strong>CORREO:</strong>
                eramon@regionjunin.gob.pe 
                <br>
                <strong>ANEXO(s):</strong>  
                1500
            </div>

        </div>  
    </div>
    
@endsection