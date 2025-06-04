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
                <h3>Tecnología para la Industria Cárnica</h3>
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




    


    
    <!-- Materializa tus ideas -->
    <div class="ideas">
        <div class="wrapper-title">
            <h2>Materializa tus ideas</h2>
            <h3>Innovación y tecnología al servicio de tus necesidades</h3>
        </div>
        

        <div class="wrapper-box-ideas">


            <div class="content-box-ideas">
                <div class="img-ideas">
                    <img src="<?php bloginfo('url'); ?>/wp-content/uploads/sites/14/2024/11/almacen-vertical.jpg" alt="">
                </div>
                <div class="capas-ideas">
                    <div class="capa-1">
                        <div class="content-img-txt">
                            <img src="<?php bloginfo('url'); ?>/wp-content/uploads/sites/14/2024/11/almacen-vertical.jpg" alt="">
                            <h2>MODULA</h2>
                            <p>Almacenes Automáticos</p>
                        </div>
                    </div>
                    <div class="capa-2">
                        <div class="content-txt-button">
                            <p>Los Almacenes Modula permiten almacenar productos de forma ordenada, ahorrando tiempo y espacio. Esto permite trabajar con productos de forma segura, garantizando su total trazabilidad, facilitando la gestión de datos y el control de inventario.</p>
                            <a href="https://taglermaq.cl/foodservice/sistema-de-elaboracion-de-salchichas-pvlh-246/">
                                <button>Ver Máquina</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="content-box-ideas">
                <div class="img-ideas">
                    <img src="<?php bloginfo('url'); ?>/wp-content/uploads/sites/14/2024/11/chequeador-de-peso.jpg" alt="">
                </div>
                <div class="capas-ideas">
                    <div class="capa-1">
                        <div class="content-img-txt">
                            <img src="<?php bloginfo('url'); ?>/wp-content/uploads/sites/14/2024/11/chequeador-de-peso.jpg" alt="">
                            <h2>ANRITSU</h2>
                            <p>Chequeador de Peso de Cápsulas</p>
                        </div>
                    </div>
                    <div class="capa-2">
                        <div class="content-txt-button">
                            <p>El chequeador de peso de Cápsulas de Anritsu garantiza precisión de +/- 0,5 mg, inspeccionando hasta 230,000 cápsulas/h en modelos de 10, 20 o 30 carriles. Su diseño reduce estática y vibración, y cuenta con un sistema de rechazo para eliminar cápsulas fuera de especificación.</p>
                            <a href="https://taglermaq.cl/foodservice/sistema-de-elaboracion-de-salchichas-pvlh-246/">
                                <button>Ver Máquina</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="content-box-ideas">
                <div class="img-ideas">
                    <img src="<?php bloginfo('url'); ?>/wp-content/uploads/sites/14/2024/11/c6-medical.jpg" alt="">
                </div>
                <div class="capas-ideas">
                    <div class="capa-1">
                        <div class="content-img-txt">
                            <img src="<?php bloginfo('url'); ?>/wp-content/uploads/sites/14/2024/11/c6-medical.jpg" alt="">
                            <h2>VC999</h2>
                            <p>Envasadora de Campana</p>
                        </div>
                    </div>
                    <div class="capa-2">
                        <div class="content-txt-button">
                            <p>Las envasadoras de campana VC999 para el área Pharma permiten una amplia aplicación para envasado de productos e insumos médicos, esto gracia a su diseño altamente higiénico y compatibilidad con diferentes bolsas. Además, la longitud de sus barras de sellado permite trabajar con un gran número de productos a la vez.</p>
                            <a href="https://taglermaq.cl/foodservice/sistema-de-elaboracion-de-salchichas-pvlh-246/">
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