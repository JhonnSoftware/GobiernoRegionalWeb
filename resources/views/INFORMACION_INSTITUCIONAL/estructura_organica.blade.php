@extends('layouts.layout')

@section('title', 'Estructura Organica')

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
        <h1>ESTRUCTURA ORGANICA</h1>
    </div>

    <div class="d-flex justify-content-center mt-5 ">
        <div style="width: 1200px; min-width: 1200px;">
            <iframe class="w-100" src="pdf/GRJ-1954154fe1cf95944f7d0b2814d8f5268a9d3c.pdf" 
                style="height: 600px; border-radius: 15px;"></iframe>
        </div>
    </div>

    <div class="container mt-4 d-flex justify-content-center">
        <div class="d-flex align-items-center border p-3 rounded shadow-sm" 
            style="width: 1200px; min-width: 1200px;">
            <img src="https://cdn-icons-png.flaticon.com/512/337/337946.png" alt="PDF Icon" width="40" class="me-3">
            <div class="flex-grow-1">
                <p class="mb-1 fw-bold">Estructura Orgánica</p>
                <a href="pdf/GRJ-1954154fe1cf95944f7d0b2814d8f5268a9d3c.pdf" class="text-decoration-none fw-semibold" download style="color: #1255b3;">Descargar PDF</a>
            </div>
        </div>
    </div>

    
@endsection