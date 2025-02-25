<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* ============ INICIO ==============*/
Route::get('index', function(){
    return view('index');
});
/* ============ INFORMACION INSTITUCIONAL ==============*/
Route::get('mision_vision', function(){
    return view('INFORMACION_INSTITUCIONAL.mision_vision');
});
Route::get('estructura_organica', function(){
    return view('INFORMACION_INSTITUCIONAL.estructura_organica');
});
Route::get('gobernador_regional', function(){
    return view('INFORMACION_INSTITUCIONAL.gobernador_regional');
});
Route::get('consejo_de_coordinacion_regional', function(){
    return view('INFORMACION_INSTITUCIONAL.consejo_de_coordinacion_regional');
});
Route::get('actividades_oficiales', function(){
    return view('INFORMACION_INSTITUCIONAL.actividades_oficiales');
});

/* ============ GERENCIA Y OFICINAS ==============*/
Route::get('gerencia_general_regional', function(){
    return view('GERENCIA_Y_OFICINAS.gerencia_general_regional');
});
Route::get('procaduria_publica_regional', function(){
    return view('GERENCIA_Y_OFICINAS.procaduria_publica_regional');
}); 
Route::get('directorio_regional', function(){
    return view('GERENCIA_Y_OFICINAS.directorio_regional');
});
/* ============ DOCUMENTOS DE TRANSPARENCIA ==============*/

/* ============ SERVICIOS EN LINEA ==============*/
Route::get('contactanos', function(){
    return view('SERVICIOS_EN_LINEA.contactanos');
});

/* ============ IMAGEN INSTITUCIONAL ==============*/
Route::get('manual_identidad_corporativa', function(){
    return view('IMAGEN_INSTITUCIONAL.manual_identidad_corporativa');
});
