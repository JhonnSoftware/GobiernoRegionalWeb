<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gobierno Regional Junin</title>

    <!-- LINK PARA EL CSS -->
    <link rel="stylesheet" href="css/stylePrincipal.css">
    <!-- Incluir CSS de Owl Carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <!-- CSS de Splide -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4/dist/css/splide.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <!-- Incluir jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Incluir JS de Owl Carousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <!-- JS de Splide -->
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4/dist/js/splide.min.js"></script>

</head>

<body>
    <!-- NAVEGACION -->
    <header class="header" id="mainMenu">
        <div class="brilogo" style="display: flex;">
            <a href="https://www.regionjunin.gob.pe/index.php" style="padding-right: 5px; margin-top: 100px;">
                <img src="images/logo.png">
            </a>
            <a>
                <img src="images/eslogan.png" style="margin-left: 100px; margin-top: 10px;">
            </a>
        </div>
        <!--nuevo-->
        <input type="checkbox" id="toggle">
        <label for="toggle"> <img class="menu1" src="images/menu1.svg" alt="menu1"> </label>

        <nav class="navigation">
            <ul class="menu">
                <li><a href="{{ url('index') }}"> INICIO </a></li>
                <li><a href="#"> INFORMACION <br> INSTITUCIONAL </a>
                    <ul>
                        <li><a href="{{ url('mision_vision') }}">Mision y Vision</a></li>
                        <li><a href="{{ url('estructura_organica') }}">Estrutura Organica</a></li>
                        <li><a href="{{ url('gobernador_regional') }}">Gobernador Regional</a></li>
                        <li><a href="#">Consejo Regional</a>
                            <ul>
                                <li><a href="{{ url('directorio_de_consejeros_regionales') }}">Directorio de consejeros Regionales</a></li>
                                <li><a href="{{ url('reglamento_interno_de_consejo_regional') }}">Reglamento Interno del Consejo Regional</a></li>
                                <li><a href="{{ url('acuerdos_regionales') }}">Acuerdos Regionales</a></li>
                                <li><a href="{{ url('actas_de_sesiones_ordinarias') }}">Actas de sesiones Ordinarias</a></li>
                                <li><a href="{{ url('actas_de_sesiones_extraordinarias') }}">Actas de sesiones Extraordinarias</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ url('consejo_de_coordinacion_regional') }}">Consejo de Coordinacion Regional</a></li>
                        <li><a href="{{ url('actividades_oficiales') }}">Actividades Oficiales</a></li>
                    </ul>
                </li>
                <li><a href="#"> GERENCIAS <br> Y OFICINAS </a>
                    <ul>
                        <li><a href="{{ url('gerencia_general_regional') }}">Gerencia General Regional</a></li>
                        <li><a href="{{ url('gerencias_y_oficinas_regionales') }}">Gerencias y Oficinas Regionales</a></li>
                        <li><a href="{{ url('direcciones_regionales') }}">Directorio Regionales</a></li>
                        <li><a href="{{ url('procaduria_publica_regional') }}">procuraduria publica regional</a></li>
                        <li><a href="{{ url('directorio_regional') }}">Directorio Regional</a></li>
                    </ul>
                </li>
                <li><a href="#"> DOCUMENTOS DE <br> TRANSPARENCIA </a>
                    <ul>
                        <li><a href="#">Transparencia</a>
                            <ul>
                                <li><a href="{{ url('formato_para_acceso_a_la_informacion_publica') }}">Formato
                                        para acceso a la informacion Publica</a></li>
                                <li><a href="{{ url('informacion_de_contrataciones') }}">Informacion
                                        de Contrataciones</a></li>
                                <li><a href="{{ url('informacion_personal') }}">Informacion
                                        de Personal</a></li>
                                <li><a href="{{ url('informacion_presupuestal') }}">Informacion
                                        Presupuestal</a></li>
                                <li><a href="{{ url('marco_legal_de_transparencia') }}">Marco
                                        Legal de transparencia</a></li>
                                <li><a href="{{ url('participacion_cuidadana') }}">Participacion
                                        Ciudadana</a></li>
                                <li><a href="{{ url('planeamiento_y_organizacion') }}">Planeamiento
                                        y Organizacion</a></li>
                                <li><a href="{{ url('proyectos_de_inversion') }}">Proyectos
                                        de Inversion</a></li>
                                <li><a href="{{ url('responsables_acceso_informacion_publica_pte') }}">Responsables
                                        del Acceso a la informacion Publica y PTE</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Documentos de Gestion</a>
                            <ul>
                                <li><a
                                        href="{{ url('CAP') }}">CAP</a>
                                </li>
                                <li><a
                                        href="{{ url('MAPRO') }}">MAPRO</a>
                                </li>
                                <li><a
                                        href="{{ url('MOF') }}">MOF</a>
                                </li>
                                <li><a
                                        href="{{ url('PAC') }}">PAC</a>
                                </li>
                                <li><a
                                        href="{{ url('PAP') }}">PAP</a>
                                </li>
                                <li><a
                                        href="{{ url('PDRC') }}">PDRC</a>
                                </li>
                                <li><a
                                        href="{{ url('PEI') }}">PEI</a>
                                </li>
                                <li><a
                                        href="{{ url('POI') }}">POI</a>
                                </li>
                                <li><a
                                        href="{{ url('RIT') }}">RIT</a>
                                </li>
                                <li><a
                                        href="{{ url('ROF') }}">ROF</a>
                                </li>
                                <li><a
                                        href="{{ url('TUPA') }}">TUPA</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#">Normatividad Regional</a>
                            <ul>
                                <li><a
                                        href="{{ url('convenios_y_adendas') }}">Convenios
                                        y Adendas</a></li>
                                <li><a
                                        href="{{ url('contratos') }}">Contratos</a>
                                </li>
                                <li><a
                                        href="{{ url('decretos_regionales') }}">Decretos
                                        Regionales</a></li>
                                <li><a
                                        href="{{ url('directivas_regionales') }}">Directivas
                                        Regionales</a></li>
                                <li><a
                                        href="{{ url('ordenanzas_regionales') }}">Ordenanzas
                                        Regionales</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Resoluciones Gerenciales</a>
                            <ul>
                                <li><a
                                        href="{{ url('resoluciones_gerencia_general_regional') }}">Resoluciones
                                        de Gerencia General Regional</a></li>
                                <li><a
                                        href="{{ url('resoluciones_secretaria_regional') }}">Resoluciones
                                        de Secretaria General</a></li>
                                <li><a
                                        href="{{ url('resoluciones_gerenciales_regionales_desarrollo_economico') }}">Resoluciones
                                        gerenciales regionales de Desarrollo Economico</a></li>
                                <li><a
                                        href="{{ url('resoluciones_gerenciales_regionales_desarrollo_social') }}">Resoluciones
                                        gerenciales regionales de Desarrollo Social</a></li>
                                <li><a
                                        href="{{ url('resoluciones_gerenciales_regionales_infraestructura') }}">Resoluciones
                                        gerenciales regionales de Infraestructura</a></li>
                                <li><a
                                        href="{{ url('resoluciones_gerenciales_regionales_recursos_naturales_gestion_medio_ambiente') }}">Resoluciones
                                        gerenciales regionales de Recursos Naturales y Gestion del Medio Ambiente</a>
                                </li>
                                <li><a
                                        href="{{ url('resoluciones_gerenciales_regionales_planeamiento_presupuesto_atp') }}">Resoluciones
                                        gerenciales regionales de Planeamiento, Presupuesto y A.T.</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Resoluciones Directorales</a>
                            <ul>
                                <li><a
                                        href="{{ url('resoluciones_directorales') }}">Resoluciones
                                        Directorales</a></li>
                                <li><a
                                        href="{{ url('resoluciones_directorales_administrativas') }}">Resoluciones
                                        Directorales Adminisrativas</a></li>
                                <li><a
                                        href="{{ url('resoluciones_sub_directorales_administrativas') }}">Resoluciones
                                        Sub Directorales Administrativas</a></li>
                                <li><a
                                        href="{{ url('resoluciones_directorales_oficina_regional_desarrollo_institucional_y_tecnologias_informacion') }}">Resoluciones
                                        Directorales de la oficina regional de desarrollo insitutcional y tecnologias de
                                        la informacion</a></li>
                                <li><a
                                        href="{{ url('resoluciones_ejecutivas_regionales') }}">Resoluciones
                                        Ejecutivas Regionales</a></li>
                                <li><a
                                        href="{{ url('resoluciones_directorales_direccion_regional_trabajo_promocion_empleo') }}">Resoluciones
                                        Directorales de la direccion regional de trabajo y pormocion del empleo</a></li>
                                <li><a
                                        href="{{ url('otras_resoluciones') }}">Otras
                                        Resoluciones</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Informacion Adicional</a>
                            <ul>
                                <li><a
                                        href="{{ url('audiencias_publicas') }}">Audencias
                                        Publicas</a></li>
                                <li><a
                                        href="{{ url('concorej') }}">CONCOREJ</a>
                                </li>
                                <li><a
                                        href="{{ url('declaraciones_juradas_bienes_y_rentas') }}">Declaraciones
                                        Juradas de Bienes y Rentas</a></li>
                                <li><a
                                        href="{{ url('informes_auditoria') }}">Informes
                                        de Auditoria</a></li>
                                <li><a
                                        href="{{ url('memoria_anual') }}">Memoria
                                        Anual</a></li>
                                <li><a
                                        href="{{ url('presupuesto_participativo') }}">Presupuesto
                                        Participativo</a></li>
                                <li><a
                                        href="{{ url('plan_de_prevencion_ante_desastres') }}">Plan
                                        de Prevencion ante desastres</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="#"> SERVICIOS<br> EN LINEA </a>
                    <ul>
                        <li><a href="{{ url('oportunidades_laborales') }}">Oportunidades Laborales</a>
                        </li>
                        <li><a href="{{ url('libro_de_reclamaciones') }}">Libro de reclamaciones</a>
                        </li>
                        <li><a href="{{ url('denuncia_posibles_actos_de_soborno') }}">Denuncia posibles actos de
                                soborno</a></li>
                        <li><a href="{{ url('contactanos') }}">Contactanos</a></li>
                    </ul>
                </li>
                <li><a href="#"> IMAGEN <br> INSTITUCIONAL </a>
                    <ul>
                        <li><a href="{{ url('manual_identidad_corporativa') }}">Manualde identidad coorporativa</a></li>
                        <li><a href="{{ url('noticias') }}">Noticias</a></li>
                        <li><a href="{{ url('reproducciones') }}">Videos</a></li>
                        <li><a href="{{ url('galerias_fotograficas') }}">Galerias Fotograficas</a></li>
                    </ul>
                </li>

            </ul>

        </nav>

        <div class="brilogo2">
            <a href="https://www.transparencia.gob.pe/enlaces/pte_transparencia_enlaces.aspx?id_entidad=10148">
                <img src="images/portaltranspte.png" alt="portaltransferecia" style="margin-right: 10px;">
            </a>
        </div>
        <div class="britransmission">
            <a href="https://www.regionjunin.gob.pe/pagina/id/region_en_accion/">
                <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                    viewBox="0 0 24 24">
                    <path
                        d="M6 2c-1.10457 0-2 .89543-2 2v4c0 .55228.44772 1 1 1s1-.44772 1-1V4h12v7h-2c-.5523 0-1 .4477-1 1v2h-1c-.5523 0-1 .4477-1 1s.4477 1 1 1h5c.5523 0 1-.4477 1-1V3.85714C20 2.98529 19.3667 2 18.268 2H6Z" />
                    <path
                        d="M6 11.5C6 9.567 7.567 8 9.5 8S13 9.567 13 11.5 11.433 15 9.5 15 6 13.433 6 11.5ZM4 20c0-2.2091 1.79086-4 4-4h3c2.2091 0 4 1.7909 4 4 0 1.1046-.8954 2-2 2H6c-1.10457 0-2-.8954-2-2Z" />
                </svg>
            </a>
        </div>
    </header>

    <!-- CARRRUSEL DE IMAGENES HEADER -->
    <div class="brislider">
        <!--lista item-->
        <div class="brilist">
            <div class="briitem active">
                <img src="images/fondo1.jpg">
            </div>
            <div class="briitem">
                <img src="images/fondo2.png">
            </div>
            <div class="briitem">
                <img src="images/fondo3.png">
            </div>
            <div class="briitem">
                <img src="images/fondo4.jpg">
            </div>
            <div class="briitem">
                <img src="images/fondo5.jpg">
            </div>
        </div>
        <!--button arrows-->
        <div class="briarrows">
            <button id="prev">
                < </button>
                    <button id="next"> > </button>
        </div>
        <!--thumbnail-->
        <div class="brithumbnail" style="padding-top: 7rem;">
            <div class="briitem active">
                <img src="images/fondo1.jpg">
            </div>
            <div class="briitem">
                <img src="images/fondo2.png">
            </div>
            <div class="briitem">
                <img src="images/fondo3.png">
            </div>
            <div class="briitem">
                <img src="images/fondo4.jpg">
            </div>
            <div class="briitem">
                <img src="images/fondo5.jpg">
            </div>
        </div>

    </div>

    <!-- ENLACES DE CIRCULOS VERDES -->
    <section class="botones" style="padding-top: 5rem;">
        <div class="bributton-container">
            <a href="http://sisdore.regionjunin.gob.pe:8080/sisdore/pages/Inicio.jsf" class="circle-button"><i
                    class="fa-solid fa-folder-open"></i></a>
            <P>SISTEMA<br>DOCUMENTARIO<br>REGIONAL</P>
        </div>
        <div class="bributton-container">
            <a href="https://apps2.mef.gob.pe/consulta-vfp-webapp/consultaExpediente.jspx" class="circle-button"><i
                    class="fa-solid fa-chalkboard-user"></i></i></a>
            <p>CONSULTA<br>SIAF</p>
        </div>
        <div class="bributton-container">
            <a href="https://www.regionjunin.gob.pe:2096/" class="circle-button"><i
                    class="fa-solid fa-envelope"></i></i></a>
            <p>CORREO</br>INSTITUCIONAL</p>
        </div>
        <div class="bributton-container">
            <a href="https://observatorioviolenciajunin.pe/" class="circle-button"><i class="fa-solid fa-eye"></i></a>
            <p>OBSERVATORIO<br>REGIONAL<br>JUNIN</p>
        </div>
        <div class="bributton-container">
            <a href="https://www.gob.pe/institucion/regionjunin/informes-publicaciones/5424254-programa-de-voluntariado"
                class="circle-button"><i class="fa-solid fa-users"></i></a>
            <p>PROGRAMA DE<br>VOLUNTARIADO-MIMP</p>
        </div>
        <div class="bributton-container">
            <a href="https://www.regionjunin.gob.pe/ver_documento/id/GRJ-151752dcec04f8f970c75b8c424352b43d5447.pdf/"
                class="circle-button"><i class="fa-solid fa-oil-well"></i></a>
            <p>OBRAS EN<br>PROGRESO</p>
        </div>
    </section>

    <!-- BOLETINES INFORMATIVOS (FRANJA) -->
    <article>
        <h1 class="boletines">BOLETINES</h2>
            <h2 class="informativos">informativos</h3>
                <hr>
    </article>

    <!-- SECCION BOLETINES -->
    <div class="bricontainer">
        <div class="bricard">
            <img src="images/boletin1.jpg" alt="...">
            <a href="https://www.facebook.com/photo/?fbid=985419816956691&set=a.245305080968172" target="_blank"
                class="info-btn">Más Información</a>
        </div>
        <div class="bricard">
            <img src="images/boletin2.jpg" alt="...">
            <a href="https://www.facebook.com/photo/?fbid=998514515647683&set=a.243741341125008" target="_blank"
                class="info-btn">Más Información</a>
        </div>
        <div class="bricard">
            <img src="images/boletin3.jpg" alt="...">
            <a href="https://www.facebook.com/photo/?fbid=972190598280075&set=a.243741341125008" target="_blank"
                class="info-btn">Más Información</a>
        </div>
        <div class="bricard">
            <img src="images/boletin4.jpg" alt="...">
            <a href="https://www.facebook.com/photo/?fbid=989322513233550&set=a.243741341125008" target="_blank"
                class="info-btn">Más Información</a>
        </div>
    </div>

    <!--- NOTICIAS Y SUCESOS  -->
    <article>
        <h1 class="noticias">NOTICIAS Y SUCESOS</h1>
        <h2 class="destacados">destacados</h2>
        <hr>
    </article>

    <div class="noticia-principal">
        <img src="img_NOTICIAS/noticia01.jpg" alt="" class="img-noticia-principal">
        <div class="contenido-noticia">
            <h2 class="ultima-noticia">Ultimo Momento</h2>
            <h1 class="titulo-noticia-principal">🔵🟠🟢 MESA TÉCNICA PARA NOMBRAMIENTO DE DOCENTES</h1>
            <p class="contenido-noticia-principal">
                Este lunes 20 se tendrá primeras coordinaciones para lograr derechos laborales de educadores
                En respuesta a las demandas de docentes que solicitan su nombramiento, el Gobierno Regional Junín (GRJ)
                anunció la conformación de una mesa técnica que iniciará su labor este lunes 20 de enero, buscando dar
                solución a sus inquietudes laborales. Esta decisión fue el resultado de un diálogo entre los
                representantes de los profesores con mejor desempeño en la última evaluación y el equipo técnico
                del GRJ. La reunión, que contará con la participación de la Gerencia de Desarrollo Social,
                la Drej, las Ugels y la directiva de los docentes, se centrará en transparentar las plazas
                vacantes disponibles. "Todo será realizado bajo un enfoque técnico y transparente", aseguró
                uno de los docentes participantes. De esta manera en forma conjunta se reafirma el compromiso
                con la meritocracia y el fortalecimiento del sistema educativo regional.
            </p>
        </div>
    </div>

    <div class="cards-container">
        <div class="noticias-swiper swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="card">
                        <div class="card-fecha-01"
                            style="position: absolute; top: 20px; left: 20px; background: #ef6610; color: white; padding: 5px 10px; font-size: 14px; border-radius: 15px; font-weight: bold;">
                            <i class="bi bi-list"></i> Hace 2 semanas
                        </div>
                        <img src="img_NOTICIAS/nueva_ugel.jpeg" alt="">
                        <div class="card-categoria-01"
                            style="position: absolute; background: #036b37; bottom:150px; right: 10px; color: white; padding: 5px 15px; font-size: 18px; font-weight: bold;">
                            <i class="bi bi-list-ul"></i> Educación
                        </div>
                        <h2>NUEVA UGEL RÍO TAMBO ABRIRÁ SUS PUERTAS EL 11 DE FEBRERO</h2>
                        <p>Gobernador regional confirma fecha para iniciar operaciones:
                            Infraestructura edificada por el Gobierno Regional, beneficiará a más de 10 mil estudiantes
                            del VRAEM
                            Con el objetivo de reforzar el seguimiento pedagógico a más de 10 mil niños y niñas de la
                            zona del VRAEM, se anunció la inauguración de la nueva sede de la UGEL Río Tambo, programada
                            para el próximo 11 de febrero. Esta infraestructura reemplazará a la antigua sede, destruida
                            por un huaico en 2017, que desde entonces operaba en módulos prefabricados.
                            El gobernador regional, Zósimo Cárdenas, confirmó la fecha durante una inspección inopinada
                            al avance de la obra, acompañado por consejeros de la selva central. “Este proyecto esperado
                            por años permitirá garantizar un mejor servicio educativo para la región. Ha llegado el
                            momento de poner en marcha la UGEL Río Tambo”, destacó.
                            El nuevo local optimizará el monitoreo educativo de 280 instituciones públicas, y
                            contribuirá a mejorar la calidad educativa en una zona prioritaria. El director de la UGEL,
                            Raúl Vidal Porras, subrayó la importancia de este avance para el futuro de las comunidades
                            locales.
                        </p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card">
                        <div class="card-fecha-02"
                            style="position: absolute; top: 20px; left: 20px; background: #ef6610; color: white; padding: 5px 10px; font-size: 14px; border-radius: 15px; font-weight: bold;">
                            <i class="bi bi-list"></i> Hace 2 semanas
                        </div>
                        <img src="img_NOTICIAS/defensa_riberena.jpeg" alt="">
                        <div class="card-categoria-01"
                            style="position: absolute; background: #036b37; bottom:150px; right: 10px; color: white; padding: 5px 15px; font-size: 18px; font-weight: bold;">
                            <i class="bi bi-list-ul"></i> Obras
                        </div>
                        <h2>ENTREGAN DEFENSA RIBEREÑA EN EL POBLADO DE CHALHUAPUQUIO</h2>
                        <p>El gobernador regional de Junín, Zósimo Cárdenas, junto con el consejero Yoner Ambicho,
                            inauguró la defensa ribereña en el poblado de Chalhuapuquio, distrito de San Ramón. Esta
                            obra, destinada a proteger los sembríos y bienes de la población local, forma parte de los
                            esfuerzos para mitigar los efectos de fenómenos naturales en la zona.
                            Durante el evento, los pobladores aprovecharon la ocasión para plantear diversas solicitudes
                            al mandatario regional, manifestando a la vez llegada a dicho poblado. En respuesta,
                            Cárdenas anunció la próxima intervención en carreteras agrarias mediante el uso de
                            maquinaria pesada, así como la entrega de 200 bolsas de cemento, en el marco de las acciones
                            de descentralización en la selva central.
                        </p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card">
                        <div class="card-fecha-03"
                            style="position: absolute; top: 20px; left: 20px; background: #ef6610; color: white; padding: 5px 10px; font-size: 14px; border-radius: 15px; font-weight: bold;">
                            <i class="bi bi-list"></i> Hace 2 semanas
                        </div>
                        <img src="img_NOTICIAS/vraem_contaran_nuevo_hospital.jpg" alt="">
                        <div class="card-categoria-03"
                            style="position: absolute; background: #036b37; bottom:150px; right: 10px; color: white; padding: 5px 15px; font-size: 18px; font-weight: bold;">
                            <i class="bi bi-list-ul"></i> Salud
                        </div>
                        <h2>55 MIL POBLADORES DEL VRAEM CONTARAN CON NUEVO HOSPITAL</h2>
                        <p>Más de 55 mil habitantes del Valle de los Ríos Apurímac, Ene y Mantaro (VRAEM) pronto tendrán
                            acceso a atención médica de calidad con la próxima inauguración del Hospital de Pangoa. Este
                            moderno centro de salud, será entregado durante el segundo semestre de este año, según
                            confirmó el gobernador regional de Junín, Zósimo Cárdenas, durante una inspección en las
                            instalaciones.
                            El proyecto, iniciado en 2016, alcanza un avance del 90% y se encuentra en la fase final, a
                            la espera de la instalación del equipamiento sanitario. Tras nueve años de espera, este
                            hospital marcará un antes y un después para las familias satipeñas, acercándolas a servicios
                            médicos públicos de calidad y garantizando una atención digna y oportuna.
                        </p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card">
                        <div class="card-fecha-04"
                            style="position: absolute; top: 20px; left: 20px; background: #ef6610; color: white; padding: 5px 10px; font-size: 14px; border-radius: 15px; font-weight: bold;">
                            <i class="bi bi-list"></i> Hace 2 semanas
                        </div>
                        <img src="img_NOTICIAS/supervisan_avance_puente_victoria.jpeg" alt="">
                        <div class="card-categoria-04"
                            style="position: absolute; background: #036b37; bottom:150px; right: 10px; color: white; padding: 5px 15px; font-size: 18px; font-weight: bold;">
                            <i class="bi bi-list-ul"></i> Obras
                        </div>
                        <h2>REVOLUCIÓN AGRARIA: SUPERVISAN AVANCE DE PUENTE VICTORIA</h2>
                        <p>Con el objetivo de garantizar el cumplimiento de plazos, el gobernador Zósimo Cárdenas
                            supervisó in situ el puente Victoria, en San Ramón. Esta infraestructura, esencial para la
                            Revolución Agraria en la selva central, registra un avance del 90% en la construcción de sus
                            estructuras en ambos estribos.
                            La entrega del proyecto está programada para el segundo semestre de este año y su inversión
                            total asciende a 24.1 millones de soles, impulsado de manera directa el sector agrario y
                            turístico en selva central.
                        </p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card">
                        <div class="card-fecha-05"
                            style="position: absolute; top: 20px; left: 20px; background: #ef6610; color: white; padding: 5px 10px; font-size: 14px; border-radius: 15px; font-weight: bold;">
                            <i class="bi bi-list"></i> Hace 2 semanas
                        </div>
                        <img src="img_NOTICIAS/eliminan_criaderos_zancudos_exito.jpeg" alt="">
                        <div class="card-categoria-05"
                            style="position: absolute; background: #036b37; bottom:150px; right: 10px; color: white; padding: 5px 15px; font-size: 18px; font-weight: bold;">
                            <i class="bi bi-list-ul"></i> Salud
                        </div>
                        <h2>SELVA CENTRAL: ELIMINAN CRIADEROS DE ZANCUDOS CON ÉXITO</h2>
                        <p>Con el objetivo de combatir el dengue en el distrito de San Ramón, el equipo técnico de la
                            Zona Sanitaria, llevó a cabo una jornada exitosa de eliminación de criaderos de zancudos.
                            Durante la intervención, se identificaron y destruyeron focos de reproducción del mosquito
                            Aedes aegypti, responsable de la transmisión del dengue.
                            Esta acción permitió intervenir en zonas críticas, eliminando depósitos de agua acumulada y
                            sensibilizando a los vecinos sobre la importancia de la prevención. Sin embargo, desafíos
                            como viviendas cerradas y algunos pobladores renuentes a colaborar limitaron parcialmente el
                            alcance de la jornada. Ante ello, las autoridades reiteraron la necesidad de la colaboración
                            comunitaria para mantener espacios libres de criaderos.
                        </p>
                    </div>
                </div>
            </div>

            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>

    <div class="noticias-footer">
        <a href="https://www.regionjunin.gob.pe/lista_noticias/">TODAS LAS NOTICIAS</a>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const cards = document.querySelectorAll(".card");
            const tiempo = document.querySelector(".ultima-noticia");
            const noticiaPrincipalImg = document.querySelector(".img-noticia-principal");
            const noticiaPrincipalTitulo = document.querySelector(".titulo-noticia-principal");
            const noticiaPrincipalContenido = document.querySelector(".contenido-noticia-principal");

            cards.forEach(card => {
                card.addEventListener("click", function () {
                    // Obtener datos de la tarjeta seleccionada
                    const imgSrc = card.querySelector("img").src;
                    const titulo = card.querySelector("h2").textContent;
                    const contenido = card.querySelector("p").textContent;
                    const tiempoCard = card.querySelector(".card01-tiempo").textContent;

                    // Actualizar la noticia principal con la tarjeta seleccionada
                    noticiaPrincipalImg.src = imgSrc;
                    noticiaPrincipalTitulo.textContent = titulo;
                    noticiaPrincipalContenido.textContent = contenido;
                    tiempo.textContent = tiempoCard;
                });
            });
        });
    </script>

    <!-- TRANSMICIONES EN VIVO -->

    <article>
        <h1 class="transmiciones">trAnsmIcIones</h1>
        <h2 class="vivo">en vivo</h2>
        <hr>
    </article>

    <div class="container">
        <div class="main-video">
            <iframe
                src="https://www.facebook.com/plugins/video.php?href=https://www.facebook.com/100066497738582/videos/644754994560027?locale=es_LA"
                frameborder="0" allowfullscreen="true" scrolling="no" style="border:none;"
                allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share">
            </iframe>
            <h4 class="mt-3">#EnVivo | 🔵🟢🟠 LANZAMIENTO DEL PROYECTO EDUCATIVO REGIONAL Y PROYECTO YACHAY</h4>
        </div>
        <div class="card-wrapper videos-swiper swiper">
            <div class="card-list swiper-wrapper">
                <div class="card-item swiper-slide">
                    <iframe
                        src="https://www.facebook.com/plugins/video.php?href=https://www.facebook.com/100066497738582/videos/644754994560027?locale=es_LA"
                        frameborder="0" allowfullscreen="true" scrolling="no" style="border:none;"
                        allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share">
                    </iframe>
                    <div class="fecha-transm-01" style="margin-left: 20px; color: #696969; padding-top: 5px;">
                        12 de febrero a las 11:30 a.m
                    </div>
                    <div class="vid-categoria-03"
                        style="position: absolute; background: #036b37; bottom: 135px; right: 10px; color: white; padding: 5px 15px; font-size: 18px; font-weight: bold;">
                        <i class="bi bi-list-ul"></i> Obras
                    </div>
                    <h4>#EnVivo | 🔵🟢🟠 LANZAMIENTO DEL PROYECTO EDUCATIVO REGIONAL Y PROYECTO YACHAY</h4>
                </div>
                <div class="card-item swiper-slide">
                    <iframe
                        src="https://www.facebook.com/plugins/video.php?href=https://www.facebook.com/100066497738582/videos/829860039245780?locale=es_LA"
                        frameborder="0" allowfullscreen="true" scrolling="no" style="border:none;"
                        allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share">
                    </iframe>
                    <div class="fecha-transm-01" style="margin-left: 20px; color: #696969; padding-top: 5px;">
                        12 de febrero a las 11:30 a.m
                    </div>
                    <div class="vid-categoria-03"
                        style="position: absolute; background: #036b37; bottom: 135px; right: 10px; color: white; padding: 5px 15px; font-size: 18px; font-weight: bold;">
                        <i class="bi bi-list-ul"></i> Obras
                    </div>
                    <h4>#EnVivo | 🔵🟢🟠 #RevolucionEducativa - Gobernador Regional Inspecciona
                        UGEL - Río Tambo
                    </h4>
                </div>
                <div class="card-item swiper-slide">
                    <iframe
                        src="https://www.facebook.com/plugins/video.php?href=https://www.facebook.com/100066497738582/videos/1131532901373941?locale=es_LA"
                        frameborder="0" allowfullscreen="true" scrolling="no" style="border:none;"
                        allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share">
                    </iframe>
                    <div class="fecha-transm-01" style="margin-left: 20px; color: #696969; padding-top: 5px;">
                        12 de febrero a las 11:30 a.m
                    </div>
                    <div class="vid-categoria-03"
                        style="position: absolute; background: #036b37; bottom: 135px; right: 10px; color: white; padding: 5px 15px; font-size: 18px; font-weight: bold;">
                        <i class="bi bi-list-ul"></i> Obras
                    </div>
                    <h4>
                        #EnVivo | 🔵🟢🟠 𝗜𝗻𝘀𝗽𝗲𝗰𝗰𝗶𝗼́𝗻 𝗱𝗲 𝗖𝗲𝗻𝘁𝗿𝗼 𝗱𝗲 𝗦𝗮𝗹𝘂𝗱 𝗣𝘂𝗲𝗿𝘁𝗼 𝗢𝗰𝗼𝗽𝗮
                        𝗥𝗶́𝗼 𝗧𝗮𝗺𝗯𝗼
                    </h4>
                </div>
                <div class="card-item swiper-slide">
                    <iframe
                        src="https://www.facebook.com/plugins/video.php?href=https://www.facebook.com/100066497738582/videos/1619152132812428?locale=es_LA"
                        frameborder="0" allowfullscreen="true" scrolling="no" style="border:none;"
                        allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share">
                    </iframe>
                    <div class="fecha-transm-01" style="margin-left: 20px; color: #696969; padding-top: 5px;">
                        12 de febrero a las 11:30 a.m
                    </div>
                    <div class="vid-categoria-03"
                        style="position: absolute; background: #036b37; bottom: 135px; right: 10px; color: white; padding: 5px 15px; font-size: 18px; font-weight: bold;">
                        <i class="bi bi-list-ul"></i> Obras
                    </div>
                    <h4>
                        #RevoluciónEducativa | 🔵🟢🟠 𝗜𝗻𝘀𝗽𝗲𝗰𝗰𝗶𝗼́𝗻 𝗱𝗲 𝗹𝗮 𝗼𝗯𝗿𝗮
                        𝗜.𝗘 𝗔𝗡𝗗𝗥𝗘𝗦 𝗔𝗩𝗘𝗟𝗜𝗡𝗢 𝗖𝗔́𝗖𝗘𝗥𝗘𝗦 𝗗𝗢𝗥𝗥𝗘𝗚𝗔𝗥𝗔𝗬 - 𝗣𝗔𝗡𝗚𝗢𝗔 -
                        𝗦𝗔𝗧𝗜𝗣𝗢
                    </h4>
                </div>

            </div>

            <div class="swiper-pagination"></div>

            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

        </div>
    </div>

    <div class="btn-transmisiones">
        <a href="https://www.youtube.com/@gob.regionjunin">VER TRANSMISIONES</a>
    </div>

    <!-- VIDEOS INSTITUCIONALES -->

    <article>
        <h2 class="azul">VIDEOS</h2>
        <h3 class="naranja">institucionales</h3>
        <hr>
    </article>

    <div class="container-fluid-video">
        <div class="row g-0"> <!-- Usamos g-0 para quitar márgenes entre las columnas -->
            <div class="col d-flex justify-content-center">
                <div class="card mb-3 w-100">
                    <div class="row">
                        <div class="col-lg-6">
                            <div id="videoCarousel" class="card-img bg-dark position-relative">
                                <video id="videoPlayer" controls width="100%" height="380" controlsList="nodownload">
                                    <source src="videos/video1.mp4" type="video/mp4">
                                    Tu navegador no es compatible con el vídeo de HTML5.
                                </video>
                                <button id="prevBtn" class="carousel-btn carousel-btn-prev" onclick="changeVideo(-1)">
                                    < </button>
                                        <button id="nextBtn" class="carousel-btn carousel-btn-next"
                                            onclick="changeVideo(1)">></button>
                            </div>
                        </div>
                        <div class="col-lg-6 px-4 pt-3">
                            <div class="card-body">
                                <h5 id="videoTitle" class="card-title mb-3 fw-bold">Lorem ipsum dolor sit amet</h5>
                                <h5 id="videoDescription" style="color: rgb(112, 112, 112);">Lorem ipsum dolor sit amet
                                    consectetur...</h5>
                                <h5 id="videoFecha" style="color: #183069;">05 de Abril de 2024</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        /*LISTA DE DATOS PARA LOS VIDEOS */
        const videosData = [{
            src: 'videos/Manos a la Obra - Puente Cantuta.mp4',
            title: '🔵🟠🟢 𝐄𝐬𝐭𝐞 𝟐𝟎𝟐𝟒 𝐥𝐚 𝐆𝐞𝐫𝐞𝐧𝐜𝐢𝐚 𝐑𝐞𝐠𝐢𝐨𝐧𝐚𝐥 𝐝𝐞 𝐑𝐞𝐜𝐮𝐫𝐬𝐨𝐬 𝐍𝐚𝐭𝐮𝐫𝐚𝐥𝐞𝐬 𝐲 𝐆𝐞𝐬𝐭𝐢𝐨́𝐧 𝐀𝐦𝐛𝐢𝐞𝐧𝐭𝐚𝐥 𝐜𝐨𝐧𝐬𝐨𝐥𝐢𝐝𝐨́ 𝐞𝐬𝐟𝐮𝐞𝐫𝐳𝐨𝐬 𝐜𝐥𝐚𝐯𝐞 𝐞𝐧 𝐥𝐚 𝐜𝐨𝐧𝐬𝐞𝐫𝐯𝐚𝐜𝐢𝐨́𝐧 𝐝𝐞 𝐥𝐨𝐬 𝐫𝐞𝐜𝐮𝐫𝐬𝐨𝐬 𝐧𝐚𝐭𝐮𝐫𝐚𝐥𝐞𝐬',
            description: 'Logramos conservar y fortalecer las áreas naturales protegidas, impulsar proyectos de reforestación y mejorar el control del medio ambiente a través de equipos de monitoreo ambiental. Además, avanzamos con el IOARR que consta la adquisición de equipos y herramientas para combatir los incendios forestales. Nuestro compromiso sigue firme en construir un futuro más verde y sostenible para todos. ¡Juntos, seguimos cuidando el medio ambiente!',
            fecha: '#ElCambioLoHacemosTodos #GobiernoRegionalJunín #ZósimoCárdenas'
        },
        {
            src: 'videos/video49.mp4',
            title: '¡🔵🟠🟢 EDUCACIÓN PARA EL VRAEM!',
            description: '🔵🟠🟢 🏫 El gobernador Zósimo Cárdenas entregó un nuevo módulo educativo en Pumabamba, Santo Domingo de Acobamba, beneficiando a niños de 3 a 5 años. Ya son 25 módulos entregados para fortalecer la educación en las zonas más vulnerables. ¡Comprometidos con el futuro!  ',
            fecha: '#ElCambioLoHacemosTodos #GobiernoRegionalJunín #ZósimoCárdenas'
        }];

        let currentIndex = 0;

        function changeVideo(direction) {
            currentIndex += direction;

            if (currentIndex < 0) {
                currentIndex = videosData.length - 1;
            } else if (currentIndex >= videosData.length) {
                currentIndex = 0;
            }

            const { src, title, description, fecha } = videosData[currentIndex];

            const videoPlayer = document.getElementById('videoPlayer');
            videoPlayer.src = src;
            videoPlayer.load();

            const videoTitle = document.getElementById('videoTitle');
            videoTitle.textContent = title;

            const videoDescription = document.getElementById('videoDescription');
            videoDescription.textContent = description;

            const videoFecha = document.getElementById('videoFecha');
            videoFecha.textContent = fecha;
        }

        window.onload = () => {
            const { src, title, description, fecha } = videosData[currentIndex];

            const videoPlayer = document.getElementById('videoPlayer');
            videoPlayer.src = src;

            const videoTitle = document.getElementById('videoTitle');
            videoTitle.textContent = title;

            const videoDescription = document.getElementById('videoDescription');
            videoDescription.textContent = description;

            const videoFecha = document.getElementById('videoFecha');
            videoFecha.textContent = fecha;
        };
    </script>

    <div class="btn-ver-mas">
        <a href="https://www.youtube.com/@gob.regionjunin">VER MÁS</a>
    </div>

    <!--- ENLACES DE ESTADO  -->
    <article>
        <h2 class="azul">ENLACES</h2>
        <h3 class="naranja">del estado</h3>
        <hr>
    </article>


    <div class="container-fluid">
        <div class="owl-carousel" id="inst-02" style="padding-top: 3rem;">
            <a class="links-ext" href="https://www.gob.pe/" target="_blank">
                <img src="https://www.regionjunin.gob.pe/images/logo-estado-peruano.svg" alt="logo"
                    style="width:160px; height:64px; border:none; margin:0; padding:0; box-shadow:none; border-radius:0;">
            </a>
            <a class="links-ext" href="https://www.gob.pe/contraloria" target="_blank">
                <img src="https://www.regionjunin.gob.pe/images/contraloria6.png" alt="logo"
                    style="width:160px; border:none; margin:25px 0 19px; padding:0; box-shadow:none; border-radius:0;">
            </a>
            <a class="links-ext" href="https://www.gob.pe/osce" target="_blank">
                <img src="https://www.regionjunin.gob.pe/images/logo-osce.png" alt="logo"
                    style="width:160px; height:64px; border:none; margin:1px 0px 0px 14px; padding:0; box-shadow:none; border-radius:0;">
            </a>
            <a class="links-ext" href="https://www.sunat.gob.pe/" target="_blank">
                <img src="https://www.regionjunin.gob.pe/images/logo-sunat.png" alt="logo"
                    style="width:160px; border:none; margin:18px 15px; padding:0; box-shadow:none; border-radius:0;">
            </a>
            <a class="links-ext" href="https://www.gob.pe/reniec" target="_blank">
                <img src="https://www.regionjunin.gob.pe/images/logo-reniec.png" alt="logo"
                    style="width:160px; border:none; margin:4px 5px 16px 5px; padding:0; box-shadow:none; border-radius:0;">
            </a>
            <a class="links-ext" href="https://www.defensoria.gob.pe/" target="_blank">
                <img src="https://www.regionjunin.gob.pe/images/logo-defensoria-azul.png" alt="logo"
                    style="width:160px; border:none; margin:4px 5px 16px 5px; padding:0; box-shadow:none; border-radius:0;">
            </a>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $('#inst-02').owlCarousel({
                items: 6,
                loop: true,
                autoplay: true,
                autoplaySpeed: 5000,  // Velocidad de transición
                autoplayTimeout: 8000, // Tiempo entre transiciones
                autoplayHoverPause: true,  // Pausar cuando se pase el ratón
                nav: false,
                dots: false,
                smartSpeed: 5000,  // Velocidad de transición
                responsive: {
                    0: { items: 1, margin: 20 },  /* Más separación en celulares */
                    480: { items: 2, margin: 20 },
                    768: { items: 3, margin: 25 },
                    1024: { items: 4, margin: 30 },
                    1200: { items: 6, margin: 30 } /* Espaciado normal en PC */
                }
            });
        });
    </script>

    <!--- ENCUENTRANOS EN  -->

    <article>
        <h2 class="encuentranos">ENCUENTRANOS</h2>
        <h3 class="en">en..</h3>
        <hr>
    </article>

    <div class="content-contact" style="position: relative;">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.6105185225842!2d-75.21140852405026!3d-12.070296992341179!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x910e964e39339e27%3A0x53e3ec8dd75d535d!2sGobierno%20Regional%20de%20Junin%2C%20Huancayo%2012001!5e0!3m2!1ses-419!2spe!4v1738010697582!5m2!1ses-419!2spe"
            width="800" height="250" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        <div class="info-float">
            <p><b>Dirección Sede Principal:</b> Jr. Loreto N° 363, Huancayo</p>
            <p><b>Dirección Sede Huancavelica:</b> Av. Huancavelica y Lima N° ... , Huancayo</p>
            <p><b>Oficina de Enlace en Lima:</b> Jirón Gregorio Paredes N° 316 <br>
                Lima Cercado - Teléfono: (01)3723753</p>
            <p>Horario de Atención: Lunes a Viernes de 08:00 a 13:00 horas <br> y de 14:30 a 17:30 horas.</p>
        </div>
    </div>

    <!--- FOOTER  -->

    <footer>
        <div class="footer-b">
            <img src="img_NOTICIAS/ORDITI-logo.png" alt="ORDITI" class="footer-img">
            <ul>
                <li>Gobierno Regional Junín Copyright © 2025</li>
                <li>Soporte técnico: orditi@regionjunin.gob.pe</li>
                <li>Oficina Regional de Desarrollo Institucional <br> y Tecnología de la Información</li>
            </ul>
        </div>
    </footer>

    <div class="social-icons"
        style="width: 48px;position: fixed;top: 50%;right: 0px;transform:translateY(-50%); z-index: 999;">
        <a href="https://www.tiktok.com/@gobregionaljunin" target="_blank" class="social-icon facebook"
            style="background-color: #000; color: #fff;display: block;width: 40px;height: 40px;border-radius: 50%;text-align: center;line-height: 40px;margin: 8px auto;transition:box-shadow .3s, transform 0.4s;;box-shadow: 0px 3px 10px rgba(0,0,0,.25)"><i
                class="fa-brands fa-tiktok" style="margin: 12px;"></i></a>
        <a href="https://www.facebook.com/GReJunin" target="_blank" class="social-icon facebook"
            style="background-color: #1b63ff;color: #fff;display: block;width: 40px;height: 40px;border-radius: 50%;text-align: center;line-height: 40px;margin: 8px auto;transition:box-shadow .3s, transform 0.4s;;box-shadow: 0px 3px 10px rgba(0,0,0,.25)"><i
                class="fa-brands fa-facebook-f" style="margin: 12px;"></i></a>
        <a href="https://www.instagram.com/gobregion.junin" target="_blank" class="social-icon instagram"
            style="background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%,#d6249f 60%,#285AEB 90%);box-shadow: 0px 3px 10px rgba(0,0,0,.25);color: #fff;display: block;width: 40px;height: 40px;border-radius: 50%;text-align: center;line-height: 40px;margin: 8px auto;transition:box-shadow .3s, transform 0.4s;;box-shadow: 0px 3px 10px rgba(0,0,0,.25)"><i
                class="fa-brands fa-instagram" style="margin: 12px;"></i></a>
        <a href="https://www.youtube.com/@gob.regionjunin" target="_blank" class="social-icon youtube"
            style="background-color: #cd201f;color: #fff;display: block;width: 40px;height: 40px;border-radius: 50%;text-align: center;line-height: 40px;margin: 8px auto;transition:box-shadow .3s, transform 0.4s;;box-shadow: 0px 3px 10px rgba(0,0,0,.25)"><i
                class="fa-brands fa-youtube" style="margin: 12px;"></i></a>
        <a href="http://twitter.com/gobregionjunin" target="_blank" class="social-icon twitter"
            style="background-color: #000;color: #fff;display: block;width: 40px;height: 40px;border-radius: 50%;text-align: center;line-height: 40px;margin: 8px auto;transition:box-shadow .3s, transform 0.4s;;box-shadow: 0px 3px 10px rgba(0,0,0,.25)"><i
                class="fa-brands fa-x-twitter" style="margin: 12px;"></i></a>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script>
        let jQuery370 = $.noConflict(true);

        jQuery370(document).ready(function ($) {

            $('.social-icon').hover(function () {
                $(this).css({
                    'box-shadow': 'none',
                    'transform': 'rotate(360deg) scale(1.1)'
                })
            }, function () {
                $(this).css({
                    'box-shadow': 'box-shadow: 0px 3px 10px rgba(0,0,0,.25)',
                    'transform': 'rotate(0deg) scale(1)'
                })
            });

            if ($(window).width() >= 992) {
                $('.submenu').css('z-index', '999');
                $('#logos-mainpage').css({
                    'display': 'block'
                });
                $('#slogan').css({
                    'display': 'block'
                });

                $('.nav-item.dropdown').hover(function () {
                    $(this).find('.menu-hov').stop(true, true).delay(100).fadeIn(200);
                }, function () {
                    $(this).find('.menu-hov').stop(true, true).delay(100).fadeOut(200);
                });

                /*$('#cont-menu-margin').css('margin-left', '16px');*/
                $('#cont-menu-margin').css('font-size', '13px');

                $('#cont-menu-margin li.nav-item').css({
                    'margin-right': '1.5rem'
                });


                $('.nav-link.dropdown-toggle').hover(function () {

                    $(this).css({
                        /*'font-weight': '500',*/
                        'transform': 'scale(1.1)',
                        'border-top': '3px solid rgb(255, 103, 0)'

                    });
                }, function () {

                    $(this).css({
                        /*'font-weight': '400',*/
                        'transform': 'scale(1)',
                        'border-top': '3px solid transparent'
                    });
                });

                $('.dropdown-item').hover(function () {

                    $(this).css({
                        'background-color': '#ff6700',

                    });
                }, function () {

                    $(this).css({
                        'background-color': '#fff',

                    });
                });

                /* Asegura que la clase se mantenga mientras el cursor esté sobre el dropdown*/
                $(".dropdown-menu.menu-hov").hover(function () {
                    $(this).parent().css({
                        'border-top': '3px solid rgb(255, 103, 0)'
                    });

                }, function () {
                    $(this).parent().css({

                        'border-top': '3px solid transparent'

                    });
                });

                /*Floating Header */
                var altura = $('#subheader header').offset().top;

                $(window).on('scroll', function () {
                    if ($(window).scrollTop() > altura) {
                        $('#subheader header').css({
                            'position': 'fixed',
                            'width': '100%',
                            'z-index': '1000',
                            'top': '0',
                            'left': '0',
                            'box-shadow': '0px 4px 3px rgba(0,0,0,.4)'
                        });
                        $('#menu-main').css('height', '90px');
                    } else {
                        $('#subheader header').css({
                            'position': 'relative',
                            'z-index': '3',
                            'box-shadow': '0px 4px 3px rgba(0,0,0,.1)'
                        });
                        $('#menu-main').css('height', '90px');
                    }
                });

            } else {
                $('#logos-mainpage').css({
                    'display': 'none'
                });
                $('#slogan').css({
                    'display': 'none'
                });
                $('.linejump').css('display', 'none');
                $('#cont-menu-margin').removeClass('align-items-center');
                $('#menu-main').css('height', 'auto');
                $('#container-second-bar-header').removeClass('container-fluid');
                $('#container-second-bar-header').addClass('container');
                $('.social-icons').css('display', 'none');
            }
        });
    </script>

    <script src="app.js"></script> <!--llama a js-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>