@extends('layouts.layout')
@section('title', 'Manual de identidad coorporativa')
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
        
        .pdf-container{
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .pdf-viewer{
            width: 60%;
            height: 1000px;
            border-radius: 15px;
        }
    </style>
    <div class="banner">
        <h1>MANUAL DE IDENTIDAD<br>COORPORATIVA</h1>
    </div>
    <div class="pdf-container mt-5">
        <iframe class="pdf-viewer" src="pdf/GRJ-21021780dfdc31535a5facafcbde6ce43529ad.pdf" frameborder="0"></iframe>
    </div>
    <div class="container mt-5" style="display: flex; align-content: center; justify-content: center;">
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
                                ['name' => 'Manual de Identidad Coorporativa', 'size' => '1.4 MB', 'date' => '30/05/2023', 'path' => 'pdfs/estructura_organica.pdf'],
                            ];
                        @endphp

                        @foreach ($pdfs as $pdf)
                            <tr>
                                <td>
                                    <img src="{{ asset('images/pdf-icon.png') }}" alt="PDF" class="me-2" width="24" height="24">
                                    PDF
                                </td>
                                <td>
                                    <strong>{{ $pdf['name'] }}</strong>
                                    <p class="text-muted small mb-0">{{ $pdf['date'] }} — {{ $pdf['size'] }}</p>
                                </td>
                                <td class="text-center">
                                    <a href="{{ asset($pdf['path']) }}" target="_blank" class="btn btn-outline-primary btn-sm">
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
@endsection