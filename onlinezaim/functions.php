<?php
// правильный способ подключить стили и скрипты
add_action( 'wp_enqueue_scripts', 'onlinezaim_scripts' );
function onlinezaim_scripts() {
  wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css' );
	wp_enqueue_style( 'style', get_stylesheet_uri() );
  wp_enqueue_style( 'media', get_template_directory_uri() . '/css/media.css' );

  wp_enqueue_script( 'jquery-3.3.1.slim', 'https://code.jquery.com/jquery-3.3.1.slim.min.js', array(), '3.3.1', true );
  wp_enqueue_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js', array(), '1.0.0', true );
  wp_enqueue_script( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js', array(), '1.0.0', true );
}
?>
