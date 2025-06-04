<?php
	global $theme_name;
	$theme_name = 'Industrias / Taglermaq';

	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
	
	

   //Limita la cantidad de caracteres 

	function string_limit_words($string, $word_limit) //se usa con el excerpt('30') <- limita 30 chars 
	{

	  $words = explode(' ', $string, ($word_limit + 1));

	  if(count($words) > $word_limit)

	  array_pop($words);

	  return implode(' ', $words);

	}

	/**Img**/
	add_theme_support( 'post-thumbnails' );

	

	/*OPTION PAGE*/

	if( function_exists('acf_add_options_page') ) {

		acf_add_options_page(array(

			'page_title' 	=> 'Opciones Generales',
			'menu_title'	=> 'Opciones Generales',
			'menu_slug' 	=> 'opciones-generales',
			'capability'	=> 'edit_posts',
			'redirect'		=> false

		));

		acf_add_options_sub_page(array(
			'page_title' 	=> 'Footer',
			'menu_title'	=> 'Footer',
			'parent_slug'	=> 'opciones-generales',

		));

	}
	/*OPTION PAGE*/


    
	

// Widget
    
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => __('Widget para Sidebar','Industrias / Taglermaq') ,
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }

function twentyseventeen_widgets_init() {

	// Nueva Zona Agregada
	register_sidebar( array(
		'name'          => __( 'Header', 'Industrias / Taglermaq' ),
		'id'            => 'sidebar-4',
		'description'   => __( 'Add widgets here to appear in your header.', 'twentyseventeen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Sidebar', 'Industrias / Taglermaq' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'twentyseventeen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 1', 'Industrias / Taglermaq' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Add widgets here to appear in your footer.', 'twentyseventeen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 2', 'Industrias / Taglermaq' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Add widgets here to appear in your footer.', 'twentyseventeen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'twentyseventeen_widgets_init' );


//add_action( 'woocommerce_after_shop_loop_item_title', 'dcms_show_stock_list_products' );
//function dcms_show_stock_list_products() {
	//global $product;

    //if ( $product->is_in_stock() ) {
       // echo '<div class="stock" >Stock: ' . $product->get_stock_quantity() . '</div>';
    //} else {
    //    echo '<div class="out-stock" >Sin stock</div>';
    //}
//}

//Desactivar soporte de Emojis
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );


add_image_size( 'despacho-gratis', 600, 570, true );
add_image_size( 'destacados', 329, 408, true );
add_image_size( 'single-img', 600, 744, true );
add_image_size( 'page-img', 600, 506, true );


add_filter('wpcf7_validate_text*', 'custom_validate_rut_function', 20, 2);

function custom_validate_rut_function($result, $tag) {
    $tag = new WPCF7_FormTag($tag);

    if ('your-rut' == $tag->name) {
        $value = isset($_POST[$tag->name]) ? trim($_POST[$tag->name]) : '';

        if (empty($value)) {
            $result->invalidate($tag, "El campo RUT es obligatorio.");
        }
    }

    return $result;
}


function mostrar_estilos_en_home() {
    if (is_home() || is_front_page()) { // Verifica si es la página de inicio o la página frontal
        wp_enqueue_style('home-estilo-principal', get_template_directory_uri() . '/css/owl.theme.default.min.css');
    } else {
        wp_enqueue_style('home-estilo-principal', get_template_directory_uri() . '/slick/slick.css');
		wp_enqueue_style('home-estilo-principal', get_template_directory_uri() . '/slick/slick-theme.css');
    }
}
add_action('wp_enqueue_scripts', 'mostrar_estilos_en_home');


// Añadir un campo de imagen a las categorías
function agregar_campo_imagen_categoria() {
    ?>
    <div class="form-field">
        <label for="categoria_imagen"><?php _e('Imagen de la categoría', 'textdomain'); ?></label>
        <input type="text" name="categoria_imagen" id="categoria_imagen" value="" />
        <p><?php _e('Introduce la URL de la imagen.', 'textdomain'); ?></p>
    </div>
    <?php
}
add_action('category_add_form_fields', 'agregar_campo_imagen_categoria', 10, 2);

function editar_campo_imagen_categoria($term) {
    $categoria_imagen = get_term_meta($term->term_id, 'categoria_imagen', true);
    ?>
    <tr class="form-field">
        <th scope="row" valign="top"><label for="categoria_imagen"><?php _e('Imagen de la categoría', 'textdomain'); ?></label></th>
        <td>
            <input type="text" name="categoria_imagen" id="categoria_imagen" value="<?php echo esc_attr($categoria_imagen) ? esc_attr($categoria_imagen) : ''; ?>" />
            <p class="description"><?php _e('Introduce la URL de la imagen.', 'textdomain'); ?></p>
        </td>
    </tr>
    <?php
}
add_action('category_edit_form_fields', 'editar_campo_imagen_categoria', 10, 2);

// Guardar el campo de imagen de la categoría
function guardar_campo_imagen_categoria($term_id) {
    if (isset($_POST['categoria_imagen'])) {
        update_term_meta($term_id, 'categoria_imagen', sanitize_text_field($_POST['categoria_imagen']));
    }
}
add_action('edited_category', 'guardar_campo_imagen_categoria', 10, 2);
add_action('create_category', 'guardar_campo_imagen_categoria', 10, 2);



// TODO: AGREGRA IMAGEN DESTACADA A LA COLUMNA ENTRADAS
add_filter('manage_posts_columns', 'add_img_column');
add_filter('manage_posts_custom_column', 'manage_img_column', 10, 2);

function add_img_column($columns) {
	$columns['img'] = 'Imagen Destacada';
	return $columns;
}

function manage_img_column($column_name, $post_id) {
	if( $column_name == 'img' ) {
		echo get_the_post_thumbnail($post_id, 'thumbnail'); return true;
	}
}







// TODO: BUSQUEDA AVANZADA CON CATEGORÍAS Y ETIQUETAS(TAGS) QUE COINCIDAN CON TERMINOS DE BUSQUEDA
function improve_search_query( $query ) {
    if ( $query->is_search && !is_admin() && $query->is_main_query() ) {
        // Obtén el término de búsqueda
        $search_term = $query->get('s');

        // Obtén las categorías que coinciden con los términos de búsqueda
        $matching_categories = get_terms(array(
            'taxonomy' => 'category',
            'fields' => 'ids',
            'name__like' => $search_term
        ));

        // Obtén las etiquetas que coinciden con los términos de búsqueda
        $matching_tags = get_terms(array(
            'taxonomy' => 'post_tag',
            'fields' => 'ids',
            'name__like' => $search_term
        ));

        // Crear un array para almacenar las condiciones de taxonomía
        $tax_query = array('relation' => 'OR');

        // Agregar las categorías coincidentes a la consulta
        if (!empty($matching_categories)) {
            $tax_query[] = array(
                'taxonomy' => 'category',
                'field' => 'id',
                'terms' => $matching_categories,
            );
        }

        // Agregar las etiquetas coincidentes a la consulta
        if (!empty($matching_tags)) {
            $tax_query[] = array(
                'taxonomy' => 'post_tag',
                'field' => 'id',
                'terms' => $matching_tags,
            );
        }

        // Si hay condiciones de taxonomía, modifícalas en la consulta
        if (!empty($tax_query)) {
            $query->set('tax_query', $tax_query);
        }
    }
}
add_action( 'pre_get_posts', 'improve_search_query' );




// TODO: LIMPIA LA CAJA DE BUSQUEDA CADA VEZ QUE SE INGRESA UN DATO
function modificar_busqueda($query) {
    if ($query->is_search && !is_admin() ) {
        $query->set('post_type', 'post');
        $query->set('posts_per_page', -1); // Esto muestra todos los resultados, puedes cambiarlo según tus necesidades
        $query->set('s', ''); // Limpia la búsqueda actual
        $search_query = get_search_query(); // Obtiene la cadena de búsqueda
        if (!empty($search_query)) {
            $query->set('s', $search_query); // Aplica la cadena de búsqueda nuevamente
            $query->set('title', $search_query); // Busca en los títulos de las publicaciones
        }
    }
    return $query;
}
add_filter('pre_get_posts','modificar_busqueda');


