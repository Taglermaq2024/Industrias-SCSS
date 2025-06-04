<?php
// Función para obtener el nombre del sitio en un entorno multisite
function obtener_nombre_sitio() {
    return get_bloginfo('name');
}

// Obtener el nombre del sitio y convertirlo a minúsculas
$nombre_sitio = strtolower(obtener_nombre_sitio());

// Obtener las clases de body_class como array
$body_classes = get_body_class();

// Combinar el nombre del sitio con las clases de body_class
$combined_classes = $nombre_sitio . ' ' . implode(' ', $body_classes);
?>


<!doctype html>
<html <?php language_attributes(); ?>>



<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
    <?php
    // Obtener el nombre del sitio y la descripción
    $site_name = get_bloginfo('name');
    $description = get_bloginfo('description', 'display');
    $text_domain = 'your-text-domain'; // Reemplaza 'your-text-domain' con el dominio de texto de tu tema

    // Título por defecto
    $title = '';

    if (function_exists('is_tag') && is_tag()) {
      $title = single_tag_title( __("Posts con la etiqueta &quot;", $text_domain ), false ) . '&quot; | ';
    } elseif (is_archive()) {
      $title = wp_title('', false) . __( ' Archivo | ', $text_domain );
    } elseif (is_search()) {
      global $s;
      if (!empty($s)) {
        $title = __( 'Búsqueda para &quot;', $text_domain ) . esc_html($s) . '&quot; | ';
      } else {
        $title = __( 'Resultados de la búsqueda | ', $text_domain );
      }
    } elseif (is_404()) {
      $title = __( 'No encontrado | ', $text_domain );
    } elseif (is_single() || is_page()) {
      $title = wp_title('', false) . ' | ';
    } elseif (is_home() || is_front_page()) {
      $title = $site_name . ' | ' . $description;
    } else {
      $title = wp_title('', false) . ' | ' . $site_name;
    }

    // Agregar número de página si es necesario
    global $paged;
    if (empty($paged)) {
      $paged = 1;
    }
    if ($paged > 1) {
      $title .= ' | ' . sprintf(__('Página %s', $text_domain), $paged);
    }

    // Imprimir el título completo
    echo esc_html($title . $site_name);
    ?>
    </title>

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/pharma.css?0.0.70" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" />
    <?php wp_head(); ?>


    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-WWC7744W');</script>
    <!-- End Google Tag Manager -->


</head>



<body class="<?php echo esc_attr($combined_classes); ?>">
    
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WWC7744W"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    

    <!-- Preload con animación para categorías -->
    <div id="loading-overlay" style="display: none;">
        <div class="spinner"></div>
    </div>



    <header>

        <nav>
            <div class="navbar">
                <i class='bx bx-menu'></i>
                <div class="logo"><a href="<?php bloginfo('url'); ?>"><img
                            src="<?php bloginfo('template_url'); ?>/images/logo-carnicomaq.jpg"
                            alt="Taglermaq / Carnicomaq"></a></div>
                <div class="nav-links">
                    <div class="sidebar-logo">
                        <span class="logo-name"><img src="<?php bloginfo('template_url'); ?>/images/logo-carnicomaq.jpg"
                                alt="Taglermaq / Carnicomaq"></span>
                        <i class='bx bx-x'></i>
                    </div>
                    <ul class="links">
                        <li><a href="https://taglermaq.cl/" target="_blank">IR A TAGLERMAQ</a></li>
                        <li><a href="<?php bloginfo('url'); ?>">INICIO</a></li>
                        
                        <li>
                            <a href="#">MÁQUINAS</a>
                            <i class='bx bxs-chevron-down htmlcss-arrow arrow'></i>


                            <ul class="htmlCss-sub-menu sub-menu">
                                <div class="wrapper-menu-principal">
                                    <div class="content-sub-menu">
                                        <li>
                                            <a href="<?php bloginfo('url'); ?>/maquinas-envasadoras/?_maquinas_envasadoras=envasadoras-flow-pack">
                                                <img class="img_icon color1"
                                                    src="<?php bloginfo('url'); ?>/wp-content/uploads/sites/14/2024/12/ico_envasadoras.svg">
                                                Máquinas Envasadoras
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php bloginfo('url'); ?>/maquinas-de-procesamiento/?_maquinas_de_procesamiento=sistemas-de-preparacion-de-salmuera">
                                                <img class="img_icon color1"
                                                    src="<?php bloginfo('url'); ?>/wp-content/uploads/sites/14/2024/12/ico_desarrollo.svg">
                                                Desarrollo
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php bloginfo('url'); ?>/filtros-sanitarios/?_filtros_sanitarios=control-de-acceso-y-lavado-de-manos">
                                                <img class="img_icon color1"
                                                    src="<?php bloginfo('url'); ?>/wp-content/uploads/sites/14/2024/06/filtros-sanitarios1.png">
                                                Filtros Sanitarios
                                            </a>
                                        </li>
                                    </div>

                                    <div class="content-sub-menu">
                                        <li>
                                            <a href="<?php bloginfo('url'); ?>/sistemas-de-inspeccion?_sistemas_de_inspeccion=chequeadores-de-peso">
                                                <img class="img_icon color1"
                                                    src="<?php bloginfo('url'); ?>/wp-content/uploads/sites/14/2024/12/ico_sistema_inspeccion.svg">
                                                Sistemas de Inspección
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php bloginfo('url'); ?>/higiene-e-inocuidad/?_higiene_e_inocuidad=montacarga-higienizable">
                                                <img class="img_icon color1"
                                                    src="<?php bloginfo('url'); ?>/wp-content/uploads/sites/14/2024/12/ico_higiene_inocuidad.svg">
                                                Higiene e Inocuidad
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php bloginfo('url'); ?>/miscelaneos/?_miscelaneos=montacarga-higienizable">
                                                <img class="img_icon color1"
                                                    src="<?php bloginfo('url'); ?>/wp-content/uploads/sites/14/2024/12/ico_montacarga_higienizable.svg">
                                                Montacarga Higienizable
                                            </a>
                                        </li>
                                    </div>

                                    <div class="content-sub-menu">
                                        <li>
                                            <a href="<?php bloginfo('url'); ?>/?s=modula">
                                                <img class="img_icon color1"
                                                    src="<?php bloginfo('url'); ?>/wp-content/uploads/sites/14/2024/12/ico_almacenes-automaticos.svg">
                                                Almacenes Automáticos
                                            </a>
                                        </li>
                                    </div>
                                </div>
                            </ul>
                        </li>

                        <li><a href="<?php bloginfo('url'); ?>/representaciones">REPRESENTACIONES</a></li>
                        <li><a href="<?php bloginfo('url'); ?>/contacto">CONTACTO</a></li>
                    </ul>
                </div>
                

                <!-- BUSCAR MAQUINAS -->
                <div class="search-box">        
                    <i class='bx bx-search'></i>
                    <div class="input-box">
                        <form role="search" method="get" id="advanced-searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <div class="wrapper-input">
                                <input class="input-search" type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="Buscar..." />
                                <button class="btn-search" type="submit" id="searchsubmit" value="Buscar"></button>
                            </div>
                        </form>
                    </div>
                </div>


            </div>
        </nav>

    </header>


