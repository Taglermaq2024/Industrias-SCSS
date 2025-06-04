<?php
/*
Template Name: Page Interior
*/
get_header(); ?>

<div class="categorias-int">

    <div class="top">
     <div class="breadcrumbs">
     <?php if(function_exists('bcn_display'))
        {
        bcn_display();
     }?>
     </div>
    </div><!--breadcrumbs-->
    
    
    <div class="container">
       
    <div class="wrapper-titulo">
     <div class="content-titles">
      <span class="title-small">Cárnico |</span>
      <h2 class="title-banner">Resultado de búsqueda</h2>
     </div>
    </div><!--titulo-->
  

    <div id="posts-container" class="maquinas">

    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
       
            <article>
                <div class="producto-wrapper">
                    <div class="imagen">
                        <a href="<?php the_permalink(); ?>">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('page-img', ['alt' => get_the_title()]); ?>
                            <?php else : ?>
                                <img src="https://carnicomaq.cl/608-home_default/desapilador-de-bandejas-easy-loader-90.jpg" alt="<?php the_title(); ?>">
                            <?php endif; ?>
                        </a>
                    </div><!--imagen-->
                    <div class="titulo">
                        <a href="<?php the_permalink(); ?>"><h6><?php the_title(); ?></h6></a>
                    </div><!--titulo-->
                </div><!--producto-wrapper-->
            </article><!--producto-->
            <?php endwhile;  ?>
    </ul>
    <?php else : ?>
    <h2><?php echo __('Nada encontrado', "Jardin" ); ?></h2>
    <?php endif; ?>


        

    </div><!--maquinas-->

   
    </div><!--container-->

</div><!--representaciones-->


<?php get_footer(); ?>