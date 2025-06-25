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
                    <h2><?php the_field('titulo_h01'); ?>"</h2>
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
                <h3>Tecnología para la industria Bakery</h3>
            </div>
            <!--tí<tulo-->

            <div class="scroll-horizontal">
                <div class="grid-container">

                    

                    <?php if( have_rows("aplicaciones") ): ?>
                    <?php while( have_rows("aplicaciones") ): the_row(); ?>

                        <a href="<?php bloginfo('url'); ?>/<?php the_sub_field('url_a'); ?>"
                            class="grid-item">
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



    <div class="equipos">
        <div class="contenido">

            <div class="titulo">
                <div class="titulo-content">
                    <div class="titulo-int">
                        <div class="titulo-h2">
                            <h2>Equipos y tecnologías</h2>
                        </div>
                        <!--h2-->
                        <p>Para el desarrollo de tu negocio</p>
                    </div>
                </div>
            </div>
            <!--info-->

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

                </div><!-- #owl-demo-2 -->
            </div><!-- .container -->
        </div>
        <!--carrusel-->

    </div>
    </div>
    <!--equipo-->


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


    
    <!-- Materializa tus ideas -->
    <div class="ideas">
        <div class="wrapper-title">
            <h2>Materializa tus ideas</h2>
            <h3>Innovación y tecnología al servicio de tus necesidades</h3>
        </div>

        <div class="wrapper-box-ideas">
            <div class="content-box-ideas">
                <div class="img-ideas">
                    <img src="<?php bloginfo('url'); ?>/wp-content/uploads/sites/11/2024/06/barritas-cereal.jpg" alt="">
                </div>
                <div class="capas-ideas">
                    <div class="capa-1">
                        <div class="content-img-txt">
                            <img src="<?php bloginfo('url'); ?>/wp-content/uploads/sites/11/2024/06/barritas-cereal.jpg" alt="">
                            <h2>HANDTMANN</h2>
                            <p>Barritas de Cereal</p>
                        </div>
                    </div>
                    <div class="capa-2">
                        <div class="content-txt-button">
                            <p>El sistema de formado FS 510 permite la producción desde 6 a 24 pistas y logrando crear productos con variadas formas (alargadas, cilíndricas, estrellas, entre otras) con diámetros de hasta 80 mm y longitudes desde 20 mm..</p>
                            <a href="<?php bloginfo('url'); ?>/formadoras-industriales-fs-510/">
                                <button>Ver Máquina</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="content-box-ideas">
                <div class="img-ideas">
                    <img src="<?php bloginfo('url'); ?>/wp-content/uploads/sites/11/2024/06/envasador-galletas.jpg" alt="">
                </div>
                <div class="capas-ideas">
                    <div class="capa-1">
                        <div class="content-img-txt">
                            <img src="<?php bloginfo('url'); ?>/wp-content/uploads/sites/11/2024/06/envasador-galletas.jpg" alt="">
                            <h2>ULMA</h2>
                            <p>Envasadora de Galletas</p>
                        </div>
                    </div>
                    <div class="capa-2">
                        <div class="content-txt-button">
                            <p>La envolvedora vertical VTI 200 (VFFS) permite realizar envases de tres soldaduras y aplicaciones a velocidades intermedias de hasta 70 ciclos/min. con una excelente relación de calidad y precio.</p>
                            <a href="<?php bloginfo('url'); ?>/envasadora-vertical-vti-200/">
                                <button>Ver Máquina</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="content-box-ideas">
                <div class="img-ideas">
                    <img src="<?php bloginfo('url'); ?>/wp-content/uploads/sites/11/2024/06/bombones-chocolate.jpg" alt="">
                </div>
                <div class="capas-ideas">
                    <div class="capa-1">
                        <div class="content-img-txt">
                            <img src="<?php bloginfo('url'); ?>/wp-content/uploads/sites/11/2024/06/bombones-chocolate.jpg" alt="">
                            <h2>APEX</h2>
                            <p>Bombones de Chocolate</p>
                        </div>
                    </div>
                    <div class="capa-2">
                        <div class="content-txt-button">
                            <p>El Deco-Bot es una estación de decoración robótica capaz de realizar escritura, dibujos y más en pasteles o agregar remolinos, rosetas y rosas a cupcakes, logrando terminaciones con apariencia casera.</p>
                            <a href="<?php bloginfo('url'); ?>/deco-bot/">
                                <button>Ver Máquina</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




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