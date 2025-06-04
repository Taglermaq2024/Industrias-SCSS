<?php
/*
Template Name: Front Page
*/
get_header(); ?>


<section class="wrapper">

    <div class="wrapper-video">
        <div class="content-textos">
         <?php the_field('texto_video'); ?>
        </div>
        <video width="300" height="150" class="video" muted="" loop="loop" autoplay="autoplay" controlslist="nodownload" playsinline="playsinline">
            <source src="<?php the_field('video_principal'); ?>" type="video/mp4">
        </video>
    </div>
    <!--video-->


    <div class="content-principal">
        <div class="container">
            <div class="imagen wow fadeInUp">
                <img src="<?php the_field('imagen_h01'); ?>" alt="Carnicomaq">
            </div>
            <div class="contenido">
                <div class="titulo">
                    <h2><?php the_field('titulo_h01'); ?></h2>
                </div>
                <?php the_field('contenido_h01'); ?>
                <a href="<?php bloginfo('url'); ?>/contacto" class="btn-default"><span>Contacto</span></a>
            </div>
        </div>
        <!--container-->
    </div>
    <!--content principal-->


    <div class="aplicaciones">
        <div class="container">

            <div class="content-title-principal">
                <h2>APLICACIONES</h2>
                <h3>Para la industria del Food Service</h3>
            </div>
            <!--título-->

            <div class="scroll-horizontal">
                <div class="grid-container">

                    <?php if( have_rows("aplicaciones") ): ?>
                        <?php while( have_rows("aplicaciones") ): the_row(); ?>

                            <a href="<?php bloginfo('url'); ?>/<?php the_sub_field('url_a'); ?>" class="grid-item">
                                <img src="<?php the_sub_field('imagen_a'); ?>" alt="<?php the_sub_field('titulo_a'); ?>">
                                <div class="box-color">
                                    <img class="icon-vector" src="<?php the_sub_field('icono_a'); ?>" alt="<?php the_sub_field('titulo_a'); ?>">
                                    <span class="title-grid"><?php the_sub_field('titulo_a'); ?></span>
                                </div>
                            </a>

                        <?php endwhile; ?>
                    <?php endif; ?>

                </div>

            </div>
            <!--scroll-container-->

        </div>
        <!--container-->
    </div>
    <!--content principal-->



    <!-- <div class="equipos">
        <div class="contenido">

            <div class="titulo">
                <div class="titulo-content">
                    <div class="titulo-int">
                        <div class="titulo-h2">
                            <h2>Equipos y tecnologías</h2>
                        </div>
                        <p>Para el desarrollo de tu negocio</p>
                    </div>
                </div>
            </div>
            
            <div class="carrusel">
                <div id="equipos-tecnologias" class="owl-carousel owl-theme">
                    <?php if( have_rows("equipos_t") ): ?>
                    <?php while( have_rows("equipos_t") ): the_row(); ?>
                    <article class="thumbnail item">
                        <a href="<?php bloginfo('url'); ?>/<?php the_sub_field('url_t'); ?>">
                            <img src="<?php the_sub_field('imagen_t'); ?>" class="img-responsive" alt="<?php the_sub_field('titulo_t'); ?>" />
                        </a>

                        <div class="caption">
                            <a href="<?php bloginfo('url'); ?>/<?php the_sub_field('url_t'); ?>" class="btn"><span class="texto"><?php the_sub_field('titulo_t'); ?></span> <span class="btn-right-arrow"><svg
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        aria-hidden="true" focusable="false" width="20px" height="20px"
                                        style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);"
                                        preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32">
                                        <path d="M28 16l-7-7l-1.414 1.414L24.172 15H4v2h20.172l-4.586 4.586L21 23l7-7z"
                                            fill="#000000"></path>
                                    </svg></span></a>
                        </div>
                    </article>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>

    </div> -->
    </div>


    <div class="soluciones">
        <a href="<?php bloginfo('url'); ?>/<?php the_field('link_s'); ?>">
            <img src="<?php the_field('imagen_s'); ?>" class="tvimage-lazy img-responsive tv-img-responsive" alt="Soluciones" />
            <div class="contenido">
                <?php the_field('contenido_s'); ?>
                <p><a href="<?php bloginfo('url'); ?>/<?php the_field('link_s'); ?>" class="btn"><span>Ver Máquinas</span>
            </div>
            <!--contenido-->
        </a>
    </div>
    <!--soluciones-->


    <div class="ideas">
        <div class="wrapper-title">
            <h2>Desarrolla tus Proyectos</h2>
            <h3>Innovación y tecnología al servicio de tus necesidades</h3>
        </div>
        <!--title-->

        


        <div class="wrapper-box-ideas">


            <div class="content-box-ideas">
                <div class="img-ideas">
                    <img src="<?php bloginfo('url'); ?>/wp-content/uploads/sites/13/2024/10/fs503.jpg" alt="">
                </div>
                <div class="capas-ideas">
                    <div class="capa-1">
                        <div class="content-img-txt">
                            <img src="<?php bloginfo('url'); ?>/wp-content/uploads/sites/13/2024/10/fs503.jpg" alt="">
                            <h2>HANDTMANN</h2>
                            <p>Sistema de formado FS-503</p>
                        </div>
                    </div>
                    <div class="capa-2">
                        <div class="content-txt-button">
                            <p>Mejora la elaboración de productos en base a carne, pescado y productos híbridos como carne/queso, entre otros con la Embutidora Al Vacío VF-608 PLUS + Sistema de Formado FS 503. Este sistema de formado permite procesos automatizados con una capacidad de producción de hasta 150 porc/min, y generar productos 3D con formas libres con un diámetro de 15 mm a 100 mm.</p>
                            <a href="https://taglermaq.cl/foodservice/sistema-de-elaboracion-de-salchichas-pvlh-246/">
                                <button>Ver Máquina</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="content-box-ideas">
                <div class="img-ideas">
                    <img src="<?php bloginfo('url'); ?>/wp-content/uploads/sites/13/2024/10/congelado-irinox.jpg" alt="">
                </div>
                <div class="capas-ideas">
                    <div class="capa-1">
                        <div class="content-img-txt">
                            <img src="<?php bloginfo('url'); ?>/wp-content/uploads/sites/13/2024/10/congelado-irinox.jpg" alt="">
                            <h2>IRINOX</h2>
                            <p>Abatidor Multifresh®</p>
                        </div>
                    </div>
                    <div class="capa-2">
                        <div class="content-txt-button">
                            <p>El abatidor de temperatura MultiFresh® Next para carro, integra una unidad de refrigeración de propano, ecológico, personalizable según necesidades del usuario considerando funciones, tipo de rendimiento y características útiles para su uso. Además, integra hasta 12 funciones y 150 ciclos, definidos por Irinox, para conservar la frescura de los productos durante más tiempo.</p>
                            <a href="https://taglermaq.cl/foodservice/multifresh-next-xxl/">
                                <button>Ver Máquina</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="content-box-ideas">
                <div class="img-ideas">
                    <img src="<?php bloginfo('url'); ?>/wp-content/uploads/sites/13/2024/10/cuchillo-dick-red-spirit.jpg" alt="">
                </div>
                <div class="capas-ideas">
                    <div class="capa-1">
                        <div class="content-img-txt">
                            <img src="<?php bloginfo('url'); ?>/wp-content/uploads/sites/13/2024/10/cuchillo-dick-red-spirit.jpg" alt="">
                            <h2>F.DICK</h2>
                            <p>Cuchillo Red Spirit Santoku</p>
                        </div>
                    </div>
                    <div class="capa-2">
                        <div class="content-txt-button">
                            <p>A primera vista se puede sentir la inspiración y la pasión de esta serie de cuchillos. Los cuchillos Red Spirit están concebidos para un afilado sin concesiones. Las hojas están rectificadas muy finas y además el filo está pulido. El mango redondo, típico asiático posee una sensación táctil extraordinaria.</p>
                            <a href="https://taglermaq.cl/foodservice/cuchillo-red-spirit-santoku-8174218/">
                                <button>Ver Máquina</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            
        </div>





    </div>
    <!--ideas-->


    <div class="representaciones">
        <div class="wrapper-titulo-marcas">
            <h2>Representaciones</h2>
            <a href="<?php bloginfo('url'); ?>/representaciones">
                <h3>Ver todas nuestras marcas</h3>
            </a>
        </div>

        <div class="contenedor-marcas">

            <div id="marcas" class="owl-carousel owl-theme">
                <?php if( have_rows("repre-home") ): ?>
                <?php while( have_rows("repre-home") ): the_row(); ?>
                <article class="thumbnail item">
                    <a
                        href="<?php bloginfo('template_url'); ?>/busqueda?controller=search&amp;s=<?php the_sub_field('marca'); ?>"><img
                            src="<?php the_sub_field('imagen'); ?>" alt="<?php the_sub_field('marca'); ?>"></a>
                </article>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <!--slider-->

        </div>
        <!--contenedor marcas-->

    </div>
    <!--representaciones-->



</section>

<?php get_footer("home"); ?>