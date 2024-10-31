<?php
/*
Plugin Name: Picture For Facebook
Plugin URI: 
Description: Pega Imagem de Destaque do Post e coloca no cabeçalho para ser utilizada nas URL's do Facebook.
Author: Nova Brazil Agência Interativa
Version: 1.0.1
Author URI: http://www.novabrazil.art.br
*/

/* AÇÕES E FILTROS */

add_action('wp_head', 'PictureForFacebook_head');

function PictureForFacebook_head(){
  global $post;
  
  if(is_single()){
    $mini = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
  
    //verifica de post tem minitarua
    if(!empty($mini)){
    	echo('<!-- Plugin Picture For Facebook -->'. "\n");
  	  echo('<link rel="image_src" href="' . $mini . '" />' . "\n");
      echo('<meta property="og:image" content="' . $mini . '" />' . "\n");
    }
  }
  
}

?>