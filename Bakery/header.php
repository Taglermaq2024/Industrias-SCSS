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

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bakerymaq.css?0.0.25" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" />
    <?php wp_head(); ?>

</head>


<body class="<?php echo esc_attr($combined_classes); ?>">



    <!-- Preload con animación para categorías -->
    <div id="loading-overlay" style="display: none;">
        <div class="spinner"></div>
    </div>



    <header>

        <nav>
            <div class="navbar">
                <i class='bx bx-menu'></i>
                <div class="logo"><a href="<?php bloginfo('url'); ?>"><img
                            src="<?php bloginfo('template_url'); ?>/images/logo-bakerymaq.jpg"
                            alt="Taglermaq / Bakery"></a></div>
                <div class="nav-links">
                    <div class="sidebar-logo">
                        <span class="logo-name"><img src="<?php bloginfo('template_url'); ?>/images/logo-bakerymaq.jpg"
                                alt="Taglermaq / Bakery"></span>
                        <i class='bx bx-x'></i>
                    </div>
                    <ul class="links">
                        <li><a href="https://taglermaq.cl/" target="_blank">IR A TAGLERMAQ</a></li>
                        <li>
                            <a href="#">MÁQUINAS</a>
                            <i class='bx bxs-chevron-down htmlcss-arrow arrow'></i>


                            <ul class="htmlCss-sub-menu sub-menu">
                                <div class="wrapper-menu-principal">
                                    <div class="content-sub-menu">
                                        <li>
                                            <a href="<?php bloginfo('url'); ?>/embutidoras-al-vacio/">
                                                <img class="img_icon color1"
                                                    src="https://www.taglermaq.cl/bakerymaq/wp-content/uploads/sites/11/2025/06/icomenu-embutidora.svg">
                                                Embutidoras al vacio
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php bloginfo('url'); ?>/fabricadoras-de-hielo">
                                                <img class="img_icon color2"
                                                    src="https://taglermaq.cl/bakerymaq/wp-content/uploads/sites/11/2025/06/icomenu-hielo.svg">
                                                Fabricadoras de hielo
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php bloginfo('url'); ?>/filtros-sanitarios/?_filtros_sanitarios=control-de-acceso-y-lavado-de-manos">
                                                <img class="img_icon color3"
                                                    src="https://taglermaq.cl/bakerymaq/wp-content/uploads/sites/2/2024/05/ico_filtros-sanitarios.svg">
                                                Filtros Sanitarios
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php bloginfo('url'); ?>/hornos-y-marmitas/">
                                                <img class="img_icon color4"
                                                    src="https://taglermaq.cl/bakerymaq/wp-content/uploads/sites/11/2025/06/icomenu-hornos.svg">
                                                Hornos y Marmitas
                                            </a>
                                        </li>
                                    </div>

                                    <div class="content-sub-menu">
                                        <li>
                                            <a href="<?php bloginfo('url'); ?>/lavadoras-industriales/">
                                                <img class="img_icon color5"
                                                    src="https://taglermaq.cl/bakerymaq/wp-content/uploads/sites/2/2024/05/ico_lavadoras.svg">
                                                Lavadoras Industriales
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php bloginfo('url'); ?>/manipulacion-de-cargas/">
                                                <img class="img_icon color6"
                                                    src="https://taglermaq.cl/bakerymaq/wp-content/uploads/sites/11/2025/06/icomenu-manipulacion-cargas.svg">
                                                Manipulación de cargas
                                            </a>
                                        </li>
                                        <li><a href="<?php bloginfo('url'); ?>/maquinas-cortadoras/?_maquinas_cortadoras=cortadoras-de-pan">
                                                <img class="img_icon color7"
                                                    src="https://taglermaq.cl/bakerymaq/wp-content/uploads/sites/11/2025/06/icomenu-cortadoras.svg">
                                                Máquinas cortadoras
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php bloginfo('url'); ?>/sistemas-de-inspeccion?_sistemas_de_inspeccion=chequeadores-de-peso">
                                                <img class="img_icon color8"
                                                    src="https://taglermaq.cl/bakerymaq/wp-content/uploads/sites/2/2024/05/ico_inspeccion.svg">
                                                Sistema de Inspección
                                            </a>
                                        </li>
                                    </div>

                                    <div class="content-sub-menu">
                                        <li>
                                            <a href="<?php bloginfo('url'); ?>/maquinas-envasadoras?_maquinas_envasadoras=desapiladores-de-bandejas">
                                                <img class="img_icon color9"
                                                    src="https://taglermaq.cl/bakerymaq/wp-content/uploads/sites/11/2025/06/icomenu-envasadoras.svg">
                                                Máquinas envasadoras
                                            </a>
                                        </li>
                                        
                                        <li>
                                            <a href="<?php bloginfo('url'); ?>/preparacion-de-salmueras">
                                                <img class="img_icon color10"
                                                    src="https://taglermaq.cl/bakerymaq/wp-content/uploads/sites/11/2025/06/icomenu-salmuera.svg">
                                                Preparación de salmuera
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php bloginfo('url'); ?>/sistemas-de-automatizacion/">
                                                <img class="img_icon color11"
                                                    src="https://taglermaq.cl/bakerymaq/wp-content/uploads/sites/11/2025/06/icomenu-automatizacion.svg">
                                                Sistema de automatización
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php bloginfo('url'); ?>/higiene-e-inocuidad/?_higiene_e_inocuidad=bio-desinfeccion">
                                                <img class="img_icon color12"
                                                    src="https://taglermaq.cl/bakerymaq/wp-content/uploads/sites/2/2024/05/ico_higiene-inocuidad.svg">
                                                Higiene e Inocuidad
                                            </a>
                                        </li>
                                    </div>

                                    <div class="content-sub-menu">
                                        <li>
                                            <a href="<?php bloginfo('url'); ?>/enfriamiento-rapido">
                                                <img class="img_icon color13"
                                                    src="https://taglermaq.cl/bakerymaq/wp-content/uploads/sites/2/2024/05/ico_enfriamiento.svg">
                                                Enfriamiento Rápido
                                            </a>
                                        </li>
                                    </div>


                                </div>
                            </ul>

                        </li>

                        <li>
                            <a href="<?php bloginfo('url'); ?>/aplicaciones">APLICACIONES</a>
                        </li>
                        </li>
                        <li><a href="<?php bloginfo('url'); ?>/contacto">CONTACTO</a></li>
                    </ul>
                </div>
                <div class="search-box">
                    <i class='bx bx-search'></i>
                    <div class="input-box">
                        <!--<form action="<?php bloginfo('siteurl'); ?>" id="searchform" method="get">
                  <input type="text" id="s" name="s" value="" placeholder="Buscar.." /> 
                  <button type="submit"></button>
            </form>-->
                        <form role="search" method="get" id="advanced-searchform" class="searchform"
                            action="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <div class="wrapper-input">
                                <input class="input-search" type="text" value="<?php echo get_search_query(); ?>"
                                    name="s" id="s" placeholder="Buscar..." />
                                <button class="btn-search" type="submit" id="searchsubmit" value="Buscar"></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </nav>

    </header>
    <!--header-->