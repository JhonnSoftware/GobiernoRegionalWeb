<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('portales_provinciales', function(){
    return view('portales_provinciales');
});

Route::get('portales_direcciones_regionales', function(){
    return view('portales_direcciones_regionales');
});

/* ============ INICIO ==============*/
Route::get('index', function(){
    return view('index');
});
    Route::get('obras_en_progreso', function(){
        return view('INICIO.obras_en_progreso');
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

    /*** Consejo Regional ****/
    Route::get('directorio_de_consejeros_regionales', function(){
        return view('INFORMACION_INSTITUCIONAL.directorio_de_consejeros_regionales');
    });
    Route::get('reglamento_interno_de_consejo_regional', function(){
        return view('INFORMACION_INSTITUCIONAL.reglamento_interno_de_consejo_regional');
    });
    Route::get('acuerdos_regionales', function(){
        return view('INFORMACION_INSTITUCIONAL.acuerdos_regionales');
    });
    Route::get('actas_de_sesiones_ordinarias', function(){
        return view('INFORMACION_INSTITUCIONAL.actas_de_sesiones_ordinarias');
    });
    Route::get('actas_de_sesiones_extraordinarias', function(){
        return view('INFORMACION_INSTITUCIONAL.actas_de_sesiones_extraordinarias');
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
Route::get('gerencias_y_oficinas_regionales', function(){
    return view('GERENCIA_Y_OFICINAS.gerencias_y_oficinas_regionales');
});

    Route::get('gerencia_regional_desarrollo_economico', function(){
        return view('GERENCIA_Y_OFICINAS.gerencia_regional_desarrollo_economico');
    });
    Route::get('gerencia_regional_de_planeamiento_presupuesto_y_acondicionamiento_territorial', function(){
        return view('GERENCIA_Y_OFICINAS.gerencia_regional_de_planeamiento_presupuesto_y_acondicionamiento_territorial');
    });
    Route::get('grrnga', function(){
        return view('GERENCIA_Y_OFICINAS.grrnga');
    });
    Route::get('gerencia_regional_de_desarrollo_social', function(){
        return view('GERENCIA_Y_OFICINAS.gerencia_regional_de_desarrollo_social');
    });
    Route::get('gerencia_regional_de_infraestructura', function(){
        return view('GERENCIA_Y_OFICINAS.gerencia_regional_de_infraestructura');
    });
    Route::get('oficina_regional_de_administracion_y_finanzas', function(){
        return view('GERENCIA_Y_OFICINAS.oficina_regional_de_administracion_y_finanzas');
    });
    Route::get('oficina_regional_de_asesoria_juridica', function(){
        return view('GERENCIA_Y_OFICINAS.oficina_regional_de_asesoria_juridica');
    });
    Route::get('oficina_regional_de_comunicaciones', function(){
        return view('GERENCIA_Y_OFICINAS.oficina_regional_de_comunicaciones');
    });
    Route::get('oficina_regional_de_control_interno', function(){
        return view('GERENCIA_Y_OFICINAS.oficina_regional_de_control_interno');
    });
    Route::get('oficina_regional_de_desarrollo_institucional_y_tecnologia_de_la_informacion', function(){
        return view('GERENCIA_Y_OFICINAS.oficina_regional_de_desarrollo_institucional_y_tecnologia_de_la_informacion');
    });

Route::get('direcciones_regionales', function(){
    return view('GERENCIA_Y_OFICINAS.direcciones_regionales');
});

    Route::get('direccion_regional_de_agricultura', function(){
        return view('GERENCIA_Y_OFICINAS.direccion_regional_de_agricultura');
    });
    Route::get('direccion_regional_de_archivo', function(){
        return view('GERENCIA_Y_OFICINAS.direccion_regional_de_archivo');
    });
    Route::get('direccion_regional_de_salud', function(){
        return view('GERENCIA_Y_OFICINAS.direccion_regional_de_salud');
    });
    Route::get('direccion_regional_de_comercio_exterior_y_turismo', function(){
        return view('GERENCIA_Y_OFICINAS.direccion_regional_de_comercio_exterior_y_turismo');
    });
    Route::get('direccion_regional_de_educacion', function(){
        return view('GERENCIA_Y_OFICINAS.direccion_regional_de_educacion');
    });
    Route::get('direccion_regional_de_energia_y_minas', function(){
        return view('GERENCIA_Y_OFICINAS.direccion_regional_de_energia_y_minas');
    });
    Route::get('direccion_regional_de_produccion', function(){
        return view('GERENCIA_Y_OFICINAS.direccion_regional_de_produccion');
    });
    Route::get('direccion_regional_de_trabajo_y_promocion_del_empleo', function(){
        return view('GERENCIA_Y_OFICINAS.direccion_regional_de_trabajo_y_promocion_del_empleo');
    });
    Route::get('direccion_regional_de_transportes_y_comunicaciones', function(){
        return view('GERENCIA_Y_OFICINAS.direccion_regional_de_transportes_y_comunicaciones');
    });
    Route::get('direccion_regional_de_vivienda_construccion_y_saneamiento', function(){
        return view('GERENCIA_Y_OFICINAS.direccion_regional_de_vivienda_construccion_y_saneamiento');
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
    Route::get('TUPA', function () {
        return view('DOCUMENTOS_DE_TRANSPARENCIA.TUPA');
    });
    /*** Normativa Regional ****/
    Route::get('convenios_y_adendas', function(){
        return view('DOCUMENTOS_DE_TRANSPARENCIA.convenios_y_adendas');
     });
    Route::get('contratos', function(){
        return view('DOCUMENTOS_DE_TRANSPARENCIA.contratos');
     });
    Route::get('decretos_regionales', function(){
        return view('DOCUMENTOS_DE_TRANSPARENCIA.decretos_regionales');
     });
    Route::get('directivas_regionales', function(){
        return view('DOCUMENTOS_DE_TRANSPARENCIA.directivas_regionales');
     });
    Route::get('ordenanzas_regionales', function(){
        return view('DOCUMENTOS_DE_TRANSPARENCIA.ordenanzas_regionales');
     });

     /*** Resoluciones Gerenciales ****/
    Route::get('resoluciones_gerencia_general_regional', function () {
        return view('DOCUMENTOS_DE_TRANSPARENCIA.resoluciones_gerencia_general_regional');
    });
    Route::get('resoluciones_secretaria_regional', function () {
        return view('DOCUMENTOS_DE_TRANSPARENCIA.resoluciones_secretaria_regional');
    });
    Route::get('resoluciones_gerenciales_regionales_desarrollo_economico', function () {
        return view('DOCUMENTOS_DE_TRANSPARENCIA.resoluciones_gerenciales_regionales_desarrollo_economico');
    });
    Route::get('resoluciones_gerenciales_regionales_desarrollo_social', function () {
        return view('DOCUMENTOS_DE_TRANSPARENCIA.resoluciones_gerenciales_regionales_desarrollo_social');
    });
    Route::get('resoluciones_gerenciales_regionales_infraestructura', function () {
        return view('DOCUMENTOS_DE_TRANSPARENCIA.resoluciones_gerenciales_regionales_infraestructura');
    });
    Route::get('resoluciones_gerenciales_regionales_recursos_naturales_gestion_medio_ambiente', function () {
        return view('DOCUMENTOS_DE_TRANSPARENCIA.resoluciones_gerenciales_regionales_recursos_naturales_gestion_medio_ambiente');
    });
    Route::get('resoluciones_gerenciales_regionales_planeamiento_presupuesto_atp', function () {
        return view('DOCUMENTOS_DE_TRANSPARENCIA.resoluciones_gerenciales_regionales_planeamiento_presupuesto_atp');
    });

    /*** Resoluciones Directorales ****/
    Route::get('resoluciones_directorales', function () {
        return view('DOCUMENTOS_DE_TRANSPARENCIA.resoluciones_directorales');
    });
    Route::get('resoluciones_directorales_administrativas', function () {
        return view('DOCUMENTOS_DE_TRANSPARENCIA.resoluciones_directorales_administrativas');
    });
    Route::get('resoluciones_sub_directorales_administrativas', function () {
        return view('DOCUMENTOS_DE_TRANSPARENCIA.resoluciones_sub_directorales_administrativas');
    });
    Route::get('resoluciones_directorales_oficina_regional_desarrollo_institucional_y_tecnologias_informacion', function () {
        return view('DOCUMENTOS_DE_TRANSPARENCIA.resoluciones_directorales_oficina_regional_desarrollo_institucional_y_tecnologias_informacion');
    });
    Route::get('resoluciones_ejecutivas_regionales', function () {
        return view('DOCUMENTOS_DE_TRANSPARENCIA.resoluciones_ejecutivas_regionales');
    });
    Route::get('resoluciones_directorales_direccion_regional_trabajo_promocion_empleo', function () {
        return view('DOCUMENTOS_DE_TRANSPARENCIA.resoluciones_directorales_direccion_regional_trabajo_promocion_empleo');
    });
    Route::get('otras_resoluciones', function () {
        return view('DOCUMENTOS_DE_TRANSPARENCIA.otras_resoluciones');
    });

    /*** Informacion Adicional ****/
    Route::get('audiencias_publicas', function () {
        return view('DOCUMENTOS_DE_TRANSPARENCIA.audiencias_publicas');
    });
    Route::get('concorej', function () {
        return view('DOCUMENTOS_DE_TRANSPARENCIA.concorej');
    });
    Route::get('declaraciones_juradas_bienes_y_rentas', function () {
        return view('DOCUMENTOS_DE_TRANSPARENCIA.declaraciones_juradas_bienes_y_rentas');
    });
    Route::get('informes_auditoria', function () {
        return view('DOCUMENTOS_DE_TRANSPARENCIA.informes_auditoria');
    });
    Route::get('memoria_anual', function () {
        return view('DOCUMENTOS_DE_TRANSPARENCIA.memoria_anual');
    });
    Route::get('presupuesto_participativo', function () {
        return view('DOCUMENTOS_DE_TRANSPARENCIA.presupuesto_participativo');
    });
    Route::get('plan_de_prevencion_ante_desastres', function () {
        return view('DOCUMENTOS_DE_TRANSPARENCIA.plan_de_prevencion_ante_desastres');
    });

/* ============ SERVICIOS EN LINEA ==============*/
Route::get('oportunidades_laborales', function(){
    return view('SERVICIOS_EN_LINEA.oportunidades_laborales');
});

Route::get('denuncia_posibles_actos_de_soborno', function(){
    return view('SERVICIOS_EN_LINEA.denuncia_posibles_actos_de_soborno');
});
Route::get('contactanos', function(){
    return view('SERVICIOS_EN_LINEA.contactanos');
});

/* ============ IMAGEN INSTITUCIONAL ==============*/
Route::get('manual_identidad_corporativa', function(){
    return view('IMAGEN_INSTITUCIONAL.manual_identidad_corporativa');
});
Route::get('noticias', function(){
    return view('IMAGEN_INSTITUCIONAL.noticias');
});
Route::get('reproducciones', function(){
    return view('IMAGEN_INSTITUCIONAL.reproducciones');
});
Route::get('transmiciones', function(){
    return view('IMAGEN_INSTITUCIONAL.transmiciones');
});
Route::get('galerias_fotograficas', function(){
    return view('IMAGEN_INSTITUCIONAL.galerias_fotograficas');
});

Route::get('junin_te_invita_a_tradicional_calistrada_y_herreanza', function(){
    return view('IMAGEN_INSTITUCIONAL.junin_te_invita_a_tradicional_calistrada_y_herreanza');
});

