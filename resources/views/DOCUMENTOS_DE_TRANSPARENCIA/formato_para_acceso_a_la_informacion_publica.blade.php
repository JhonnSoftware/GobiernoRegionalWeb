@extends('layouts.layout')

@section('title', 'Formato para acceso a la infromacion publica')

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

        .pdf-container {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .pdf-viewer {
            width: 60%;
            height: 1000px;
            border-radius: 15px;
        }
    </style>
    <div class="banner fade-in">
        <h1>FORMATO PARA ACCESO A LA <br> INFORMACION PUBLICA</h1>
    </div>
    <div class="pdf-container mt-5 fade-in">
        <iframe class="pdf-viewer" src="pdf/GRJ-16214531e38c572db677738d1c0c257ec089f3.pdf" frameborder="0"></iframe>
    </div>
    <div class="container mt-5 fade-in" style="display: flex; align-content: center; justify-content: center;">
        <div class="card shadow" style="width: 1100px;">
            <div class="card-body" style="background: rgb(216, 216, 216);">
                <table class="table table-hover align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">Tipo</th>
                            <th scope="col">Nombre</th>
                            <th scope="col" class="text-center">Descargar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $pdfs = [
                                [
                                    'name' => 'Formato de solicitud de acceso a la informacion pública',
                                    'size' => '1.4 MB',
                                    'date' => '30/05/2023',
                                    'path' => 'pdfs/estructura_organica.pdf',
                                ],
                            ];
                        @endphp

                        @foreach ($pdfs as $pdf)
                            <tr>
                                <td>
                                    <img src="{{ asset('images/pdf-icon.png') }}" alt="PDF" class="me-2"
                                        width="24" height="24">
                                    PDF
                                </td>
                                <td>
                                    <strong>{{ $pdf['name'] }}</strong>
                                    <p class="text-muted small mb-0">{{ $pdf['date'] }} — {{ $pdf['size'] }}</p>
                                </td>
                                <td class="text-center">
                                    <a href="{{ asset($pdf['path']) }}" target="_blank"
                                        class="btn btn-outline-primary btn-sm">
                                        <i class="bi bi-download"></i> Descargar
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
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
