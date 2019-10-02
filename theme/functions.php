<?php

// Menu Estilizado
register_nav_menus( array (
	'Menu' => 'Menu',
) );
add_action('init', 'register_custom_menu');


// Personaliza o leia mais
function new_excerpt_more($more) {
    global $post;
    return '';
}

/*
 * Resgata o autor linkado para seu Site.
 * A diferença dessa função é que monta o link do autor com um TARGET e sem o REL
 */
function get_autor_comentarios_link() {
	$url    = get_comment_author_url();
	$author = get_comment_author();

	if ( empty( $url ) || 'http://' == $url )
		echo $return = $author;
	else
		echo $return = "<a href='$url' class='url' target=_blank>$author</a>";
	return apply_filters('get_autor_comentarios_link', $return);
}

add_filter('excerpt_more', 'new_excerpt_more');

add_theme_support("post-thumbnails");

// Tamanhos das Imagens
add_image_size( 'thumbposts', 390, 225, true );


if ( current_user_can('contributor') && !current_user_can('upload_files') )
   add_action('admin_init', 'allow_contributor_uploads');
     function allow_contributor_uploads()      {
        $contributor = get_role('contributor');
        $contributor->add_cap('upload_files');
    }

?>