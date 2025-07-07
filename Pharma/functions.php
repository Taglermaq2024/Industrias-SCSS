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













// TODO: INICIO - Mejora la búsqueda principal
function mi_busqueda_principal_modificada( $query ) { 
    
    // Aplicar solo a la búsqueda principal en el frontend
    if ( !is_admin() && $query->is_main_query() && $query->is_search() ) {

        $query->set('post_type', 'post');
        $query->set('posts_per_page', -1);

        $search_term = $query->get('s');
        if ( empty($search_term) ) {
            return;
        }

        // =================================================================
        // NUEVO: Lógica para generar términos en singular y plural
        // =================================================================
        // Creamos un array para almacenar las variaciones del término de búsqueda.
        // Esta es una aproximación simple pero efectiva para muchos sustantivos en español.
        $search_terms_plural_sensitive = [];
        $search_terms_plural_sensitive[] = $search_term; // Añadimos el término original

        // Comprobamos si la palabra termina en 's' para generar el singular.
        if ( strtolower( substr( $search_term, -1 ) ) === 's' ) {
            $search_terms_plural_sensitive[] = substr( $search_term, 0, -1 );
        } 
        // Si no, asumimos que es singular y añadimos la 's' para el plural.
        else {
            $search_terms_plural_sensitive[] = $search_term . 's';
        }

        // Eliminamos posibles duplicados (por ejemplo, si se busca una palabra que termina en 's' pero es singular)
        $search_terms_plural_sensitive = array_unique( $search_terms_plural_sensitive );


        // ------ INICIO Bloque añadido para las exclusiones por palabra clave, descomentar para activar -------
        // $exclusions = [
        //     'ulma'       => [1427,],
        //     'envasadora' => [430,],
        //     'rayos'      => [1114,],
        // ];

        // $posts_to_exclude = [];
        // foreach ($exclusions as $keyword => $ids) {
        //     if (stripos($search_term, $keyword) !== false) {
        //         $posts_to_exclude = array_merge($posts_to_exclude, $ids);
        //     }
        // }
        // ------ FIN BLOQUE




        if (!empty($posts_to_exclude)) {
            $query->set('post__not_in', $posts_to_exclude); 
        }

        add_filter('posts_distinct', 'mi_busqueda_distinct');
        add_filter('posts_join', 'mi_busqueda_join');

        // =================================================================
        // MODIFICADO: Pasamos el array de términos al filtro 'posts_where'
        // =================================================================
        add_filter('posts_where', function($where) use ($search_terms_plural_sensitive) {
            global $wpdb;

            // Construimos una lista de condiciones 'LIKE' para cada término de búsqueda
            $search_conditions = [];
            foreach ( $search_terms_plural_sensitive as $term ) {
                $like = '%' . $wpdb->esc_like( $term ) . '%';
                $search_conditions[] = "{$wpdb->posts}.post_title LIKE '{$like}'";
                $search_conditions[] = "{$wpdb->posts}.post_excerpt LIKE '{$like}'";
                $search_conditions[] = "{$wpdb->posts}.post_content LIKE '{$like}'";
                $search_conditions[] = "t.name LIKE '{$like}'"; // Búsqueda en etiquetas/categorías
            }

            // Unimos todas las condiciones con 'OR'
            $new_where_part = '(' . implode(' OR ', $search_conditions) . ')';

            // Reemplazamos la condición de búsqueda de título original con nuestra nueva condición extendida.
            // Esto mantiene la estructura de la consulta original de WordPress.
            $where = preg_replace(
                "/\(\s*{$wpdb->posts}.post_title\s+LIKE\s*(\'[^\']+\')\s*\)/",
                $new_where_part,
                $where
            );
            
            return $where;
        });
    }
}
add_action( 'pre_get_posts', 'mi_busqueda_principal_modificada' );

function mi_busqueda_distinct() {
    return 'DISTINCT';
}

function mi_busqueda_join($join){
    global $wpdb;
    // Se añade una comprobación para no duplicar el JOIN si otro plugin lo añade
    if ( strpos( $join, 'term_relationships' ) === false ) {
        $join .= " LEFT JOIN {$wpdb->term_relationships} tr ON {$wpdb->posts}.ID = tr.object_id";
        $join .= " LEFT JOIN {$wpdb->term_taxonomy} tt ON tr.term_taxonomy_id = tt.term_taxonomy_id";
        $join .= " LEFT JOIN {$wpdb->terms} t ON tt.term_id = t.term_id";
    }
    return $join;
}
// TODO: FIN - Mejora la búsqueda principal
