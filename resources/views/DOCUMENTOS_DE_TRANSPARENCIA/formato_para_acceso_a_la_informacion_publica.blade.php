@extends('layouts.layout')

@section('title', 'Mision y Vision')

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

    .container{

    }

</style>
<div class="banner">
    <h1>FORMATO PARA ACCESO A LA <br> INFORMACION PUBLICA</h1>
</div>
<div class="pdf-container mt-5">
    <iframe class="pdf-viewer" src="pdf/GRJ-16214531e38c572db677738d1c0c257ec089f3.pdf" frameborder="0"></iframe>
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
                            ['name' => 'Formato de solicitud de acceso a la informacion pública', 'size' => '1.4 MB', 'date' => '30/05/2023', 'path' => 'pdfs/estructura_organica.pdf'],
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