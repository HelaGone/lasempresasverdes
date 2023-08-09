<?php

	// CUSTOM METABOXES //////////////////////////////////////////////////////////////////
	/**
	 * Agrega metaboxes a la UI del administrador
	*/
	add_action('add_meta_boxes', function(){

		add_meta_box( 'meta-box-featured', 'Contenido pagado', 'show_metabox_featured', array('post'), 'side', 'high' );

	});

	////////////////////////////////////////////////////////////////////////////////////////
	//FUNCTION CALLBACKS ///////////////////////////////////////////////////////////////////
	////////////////////////////////////////////////////////////////////////////////////////

	// Callback function to show checkbox to add to featured projects

	function show_metabox_featured($post) {
		$post_destacado = (get_post_meta($post->ID, 'post_destacado', true)) ? 'checked' : '';

		wp_nonce_field(__FILE__, '_articulo_featured_nonce');

		echo <<< HTML
			<div>
				<label for="post_destacado"><input type="checkbox" name="post_destacado" id="post_destacado" value="true" $post_destacado>&nbsp;Marcar como destacado</label>
			</div>
HTML;
	}

	//////////////////////////////////////////////////////////////////////////////////////
	// SAVE METABOXES DATA ///////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////////////////

	/**
	 * En esta sección se hace update de los metaboxes registrados
	*/

	add_action('save_post', function($post_id) {

		$post_type = get_post_type($post_id);

		if ( ! current_user_can('edit_page', $post_id))
			return $post_id;


		if ( defined('DOING_AUTOSAVE') and DOING_AUTOSAVE )
			return $post_id;


		if ( wp_is_post_revision($post_id) OR wp_is_post_autosave($post_id) )
			return $post_id;

		// Guardar correctamente los metadatos

		if ( !defined( 'DOING_AJAX' ) and isset($_POST['post_destacado']) ) {
			update_post_meta($post_id, 'post_destacado', $_POST['post_destacado']);
		} else if ( ! defined('DOING_AJAX') ){
			delete_post_meta($post_id, 'post_destacado');
		}

	});

// OTHER METABOXES ELEMENTS //////////////////////////////////////////////////////////