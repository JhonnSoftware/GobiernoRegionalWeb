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

    /*** Transparencia ****/
    Route::get('formato_para_acceso_a_la_informacion_publica', function () {
        return view('DOCUMENTOS_DE_TRANSPARENCIA.formato_para_acceso_a_la_informacion_publica');
    });
    Route::get('informacion_de_contrataciones', function(){
        return view('DOCUMENTOS_DE_TRANSPARENCIA.informacion_de_contrataciones');
    });
    Route::get('informacion_personal', function(){
        return view('DOCUMENTOS_DE_TRANSPARENCIA.informacion_personal');
    });
    Route::get('informacion_presupuestal', function(){
        return view('DOCUMENTOS_DE_TRANSPARENCIA.informacion_presupuestal');
    });
    Route::get('marco_legal_de_transparencia', function(){
        return view('DOCUMENTOS_DE_TRANSPARENCIA.marco_legal_de_transparencia');
    });
    Route::get('participacion_cuidadana', function(){
        return view('DOCUMENTOS_DE_TRANSPARENCIA.participacion_cuidadana');
    });
    Route::get('planeamiento_y_organizacion', function(){
        return view('DOCUMENTOS_DE_TRANSPARENCIA.planeamiento_y_organizacion');
    });
    Route::get('proyectos_de_inversion', function(){
        return view('DOCUMENTOS_DE_TRANSPARENCIA.proyectos_de_inversion');
    });
    Route::get('responsables_acceso_informacion_publica_pte', function(){
        return view('DOCUMENTOS_DE_TRANSPARENCIA.responsables_acceso_informacion_publica_pte');
    });
    /*** Documentos de gestion ****/
    Route::get('CAP', function () {
        return view('DOCUMENTOS_DE_TRANSPARENCIA.CAP');
    });
    Route::get('MAPRO', function () {
        return view('DOCUMENTOS_DE_TRANSPARENCIA.MAPRO');
    });
    Route::get('MOF', function () {
        return view('DOCUMENTOS_DE_TRANSPARENCIA.MOF');
    });
    Route::get('PAC', function () {
        return view('DOCUMENTOS_DE_TRANSPARENCIA.PAC');
    });
    Route::get('PAP', function () {
        return view('DOCUMENTOS_DE_TRANSPARENCIA.PAP');
    });
    Route::get('PDRC', function () {
        return view('DOCUMENTOS_DE_TRANSPARENCIA.PDRC');
    });
    Route::get('PEI', function () {
        return view('DOCUMENTOS_DE_TRANSPARENCIA.PEI');
    });
    Route::get('POI', function () {
        return view('DOCUMENTOS_DE_TRANSPARENCIA.POI');
    });
    Route::get('RIT', function () {
        return view('DOCUMENTOS_DE_TRANSPARENCIA.RIT');
    });
    Route::get('ROF', function () {
        return view('DOCUMENTOS_DE_TRANSPARENCIA.ROF');
    });
    Route::get('TUFA', function () {
        return view('DOCUMENTOS_DE_TRANSPARENCIA.TUPA');
    });

/* ============ SERVICIOS EN LINEA ==============*/
Route::get('contactanos', function(){
    return view('SERVICIOS_EN_LINEA.contactanos');
});

/* ============ IMAGEN INSTITUCIONAL ==============*/
Route::get('manual_identidad_corporativa', function(){
    return view('IMAGEN_INSTITUCIONAL.manual_identidad_corporativa');
});
