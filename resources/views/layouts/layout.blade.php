<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylePrincipal.css">
    <title>@yield('title')</title>

    <!-- LINK PARA EL CSS -->
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
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }

        .noticia-principal{
            display: flex;
            align-content: center;
            justify-content: center;
            gap: 20px;
            margin-bottom: 20px;
        }

        .noticia-principal .card-fecha-main{
            position: absolute; 
            top: 20px; 
            left: 20px; 
            background: #ef6610; 
            color: white; 
            padding: 5px 10px; 
            font-size: 14px; 
            border-radius: 15px; 
            font-weight: bold;
        }

        .noticia-principal .card-fecha-main{
            position: absolute; 
            top: 20px; 
            left: 20px; 
            background: #ef6610; 
            color: white; 
            padding: 5px 10px; 
            font-size: 14px; 
            border-radius: 15px; 
            font-weight: bold;
        }
        .noticia-principal .card-categoria-main{
            position: absolute; 
            background: #036b37; 
            bottom:150px; 
            right: 10px; 
            color: white; 
            padding: 5px 15px; 
            font-size: 18px; 
            font-weight: bold;
        }

        .img-noticia-principal{
            width: 600px;
            max-width: 700px;
            height: 500px;
            margin-left: 190px;
            margin-right: 30px;
            object-fit: cover;
            display: block;
            border-radius: 15px;
            transition: transform 0.3s ease-in-out;
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.3);
        }

        .contenido-noticia{
            display: flex;
            flex-direction: column;
            align-items: center;
            align-content: center;
            max-width: 500px;
            width: 100%;
            margin-right: 150px;
        }

        .contenido-noticia-principal{
            max-height: 250px;
            overflow-y: auto;
            text-align: justify;
        }

        .img-noticia-principal:hover{
            transform: translateY(-15px);
        }

        .ultima-noticia{
            color: #7c89b5;
            align-self: flex-start;
        }

        .titulo-noticia-principal{
            color: #273982;
            font-family: 'Loew-Bold';
        }

        .contenido-noticia-principal{
            font-family: Arial, Helvetica, sans-serif;
            color: #747474;
        }

        .cards-container{
            display: flex;
            justify-content: space-between;
            gap: 0;
            margin: 60px 90px;
        }

        .cards-container a {
            text-decoration: none;
            font-size: 10px; 
            border: 2px solid #1d307c; 
            padding: 20px; 
            text-align: center; 
            color: #1d307c; 
            margin: 0; 
        }

        .cards-container button:hover {
            background-color: #1d307c; 
            color: #fff; /* Cambia el color del texto al hacer hover */
        }

        .card{
            display: flex;
            flex-direction: column;
            width: 400px;
            background-color: #f2f7fc;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease-in-out;
        }

        .card h2{
            font-family: "Eloque-Bold";
        }



        .card:hover{
            transform: translateY(-15px);
        }

        .card img{
            width: 100%;
            height: 300px;
            object-fit: cover;
            border-radius: 8px 8px 8px 8px;
        }
        .card h2{
            padding: 20px;
            text-align: center;
        }
        .card p{
            padding: 10px;
            display: none;
        }

        .noticias-list {
            display: flex;
        }

        .noticias-swiper{
            display: flex;
            justify-content: center; /* Centrar el Swiper */
            align-items: center;
            width: 100%;
            max-width: 1200px; /* Ajusta según el tamaño deseado */
            margin: auto;
        }

        .noticias-swiper .swiper-wrapper {
            display: flex;
        }

        .noticias-swiper .swiper-slide {
            display: flex;
            justify-content: center;
        }

        .noticias-footer{
            display: flex;
            justify-content: center;
            align-content: center;
        }

        .noticias-footer a{
            padding: 20px;
            border-radius: 15px;
            background-color: #1355B3; 
            color: white;
            text-decoration: none;
            transition: background-color 0.3s ease-in-out;
            
        }

        .noticias-footer a:hover{
            background-color: #12b460d2;
        }
    </style>

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
                <li><a href="#"> INICIO </a></li>
                <li><a href=""> INFORMACION <br> INSTITUCIONAL </a>
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

    <!-- AQUI VA EL CONTENEDOR PRINCIPAL -->
    
    @yield('contenido-principal')

    <!-- AQUI TERMINA VA EL CONTENEDOR PRINCIPAL -->

    <article>
        <h1 class="noticias">NOTICIAS Y SUCESOS</h1>
        <h2 class="destacados">destacados</h2>
        <hr>
    </article>

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
    
    <article>
        <h2 class="azul">ENLACES</h2>
        <h3 class="naranja">del estado</h3>
        <hr>
    </article>

    <div class="container-fluid-x">
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