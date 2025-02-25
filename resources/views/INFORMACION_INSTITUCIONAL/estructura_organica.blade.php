@extends('layouts.layout')

@section('title', 'Estructura Organica')

@section('contenido-principal')
    <style>
        .banner {
            position: relative;
            width: 100%;
            height: 400px;
            background: linear-gradient(to left, rgba(204, 204, 204, 0.4), rgba(0, 14, 139, 0.9)),
                url('images/boletin1.jpg') no-repeat center center/cover;
            display: flex;
            align-items: center;
            justify-content: start;
            padding-left: 20px;
        }

        .banner h1 {
            color: white;
            font-size: 50px;
            font-weight: bold;
            margin-left: 140px;
            font-family: 'Panton Narrow Black Italic', sans-serif;
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
        <h1>ESTRUCTURA ORGANICA</h1>
    </div>
    <div class="pdf-container mt-5">
        <iframe class="pdf-viewer" src="pdf/GRJ-1954154fe1cf95944f7d0b2814d8f5268a9d3c.pdf" frameborder="0"></iframe>
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
                                ['name' => 'Estructura Orgánica', 'size' => '1.4 MB', 'date' => '30/05/2023', 'path' => 'pdfs/estructura_organica.pdf'],
                                ['name' => 'Reglamento Interno', 'size' => '2.1 MB', 'date' => '15/06/2023', 'path' => 'pdfs/reglamento_interno.pdf'],
                                ['name' => 'Manual de Procedimientos', 'size' => '3.5 MB', 'date' => '10/07/2023', 'path' => 'pdfs/manual_procedimientos.pdf']
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