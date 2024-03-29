<?php
/**
 * Plugin Name: Cover options
 * Plugin URI:  https://github.com/HelaGone/CoverOptions
 * Description: Cover Options for wordpress
 * Version:     1.0.0
 * Author:      Holkan Luna
 * Author URI:  https://cubeinthebox.com/
 * License:     GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: cover-options
 * Domain Path: /languages
 */

/*
 * Options:
 * co_banner_option
*/

function co_activation_plugin(){
	//Plugin activation actions
}
register_activation_hook( __FILE__, 'co_activation_plugin' );

function co_deactivation(){
	//Plugin deactivation actions
}
register_deactivation_hook( __FILE__, 'co_deactivation' );

function co_uninstall(){
	//Plugin delete actions
}
register_uninstall_hook(__FILE__, 'co_uninstall');


include_once dirname(__FILE__).'/helper_functions.php';

if(!class_exists('CoverOptionsNew')):
	class CoverOptionsNew{
		public function __construct(){
			 add_action('admin_menu', array($this, 'co_add_admin_menu'));
			 add_action('admin_init', array($this, 'co_settings_init'));
			 add_action('admin_init', array($this, 'co_load_plugin_css'));
		}//end construct

		public function co_load_plugin_css() {
			wp_register_style( 'co_style', plugins_url( 'cover-options/css/style.css' ) );
			wp_enqueue_style( 'co_style' );
		}

		public function co_add_admin_menu(){
			add_menu_page('Cover Options', 'Cover Options', 'manage_options', 'cover_options', array($this, 'co_cover_options_page'));
		}//end co_add_admin_menu

		public function co_settings_init(){
			//BANNER OPTION
			register_setting('coverOptionsPage', 'co_banner_option');
			add_settings_section('co_banner_options_section','Banners Home',array($this, 'co_banner_section_callback'),'coverOptionsPage');

			// TOP BANNER
			add_settings_field('co_banner_input_url','Url del TOP banner',array($this, 'co_input_url_field_render'),'coverOptionsPage','co_banner_options_section');
			add_settings_field('co_banner_input_link','Link del TOP banner',array($this, 'co_input_link_field_render'),'coverOptionsPage','co_banner_options_section');

			// SECOND BANNER
			add_settings_field('co_banner_input_url_2','Url del banner 2', array($this, 'co_input_url_field_render_2'),'coverOptionsPage','co_banner_options_section');
			add_settings_field('co_banner_input_link_2','Link del banner 2', array($this, 'co_input_link_field_render_2'),'coverOptionsPage','co_banner_options_section');

			// THIRD BANNER
			add_settings_field('co_banner_input_url_3', 'Url del banner 3', array($this, 'co_input_url_field_render_3'),'coverOptionsPage','co_banner_options_section');
			add_settings_field('co_banner_input_link_3', 'Link del banner 3', array($this, 'co_input_link_field_render_3'), 'coverOptionsPage', 'co_banner_options_section');

			// FOURTH BANNER
			add_settings_field('co_banner_input_url_4', 'Url del banner 4', array($this, 'co_input_url_field_render_4'),'coverOptionsPage','co_banner_options_section');
			add_settings_field('co_banner_input_link_4', 'Link del banner 4', array($this, 'co_input_link_field_render_4'), 'coverOptionsPage', 'co_banner_options_section');

			// FIFTH BANNER
			add_settings_field('co_banner_input_url_5', 'Url del banner 5', array($this, 'co_input_url_field_render_5'),'coverOptionsPage','co_banner_options_section');
			add_settings_field('co_banner_input_link_5', 'Link del banner 5', array($this, 'co_input_link_field_render_5'), 'coverOptionsPage', 'co_banner_options_section');

			// SIXTH BANNER
			add_settings_field('co_banner_input_url_6', 'Url del banner 6', array($this, 'co_input_url_field_render_6'),'coverOptionsPage','co_banner_options_section');
			add_settings_field('co_banner_input_link_6', 'Link del banner 6', array($this, 'co_input_link_field_render_6'), 'coverOptionsPage', 'co_banner_options_section');

			// BANNER SINGLE PAGE
			add_settings_section('co_banner_options_section_2','Banner Single',array($this, 'co_banner_section_2_callback'),'coverOptionsPage');
			add_settings_field('co_banner_single_img', 'Url del banner', array($this, 'co_render_img_input_sin'), 'coverOptionsPage', 'co_banner_options_section_2');
			add_settings_field('co_banner_single_link', 'Link del banner', array($this, 'co_render_link_input_sin'), 'coverOptionsPage', 'co_banner_options_section_2');

			// BANNER SIDEBAR
			add_settings_section('co_banner_options_section_3', 'Banner Sidebar', array($this, 'co_banner_section_3_callback'), 'coverOptionsPage');
			add_settings_field('co_banner_side_img', 'Url del banner', array($this, 'co_render_img_input_sid'), 'coverOptionsPage', 'co_banner_options_section_3');
			add_settings_field('co_banner_side_link', 'Link del banner', array($this, 'co_render_link_input_sid'), 'coverOptionsPage', 'co_banner_options_section_3');

			// YOUTUBE LIVE
			add_settings_section('co_live_section', 'Youtube live', array($this, 'co_live_callback'), 'coverOptionsPage');
			add_settings_field('co_live_url', 'ID de Youtube Live', array($this, 'co_render_yt_live_input'), 'coverOptionsPage', 'co_live_section');
			add_settings_field('co_live_title', 'Título de la transmisión en vivo', array($this, 'co_render_live_title_input'), 'coverOptionsPage', 'co_live_section');
		}

		// FIELD GROUP 6
		public function co_input_url_field_render_6(){
			$options = get_option('co_banner_option'); ?>
			<input type="text" 
				name="co_banner_option[co_banner_input_url_6]"
				value="<?php echo array_key_exists('co_banner_input_url_6', $options ) ? $options['co_banner_input_url_6'] : ""; ?>" 
				class="custom_input">
		<?php
		}
		public function co_input_link_field_render_6(){
			$options = get_option('co_banner_option'); ?>
			<input type="text"
				name="co_banner_option[co_banner_input_link_6]"
				value="<?php echo array_key_exists('co_banner_input_link_6', $options) ? $options['co_banner_input_link_6'] : ""; ?>"
				class="custom_input">
		<?php
		}

		// FIELD GROUP 5
		public function co_input_url_field_render_5(){
			$options = get_option('co_banner_option'); ?>
			<input type="text" 
				name="co_banner_option[co_banner_input_url_5]"
				value="<?php echo array_key_exists('co_banner_input_url_5', $options) ? $options['co_banner_input_url_5'] : ""; ?>" 
				class="custom_input">
		<?php
		}
		public function co_input_link_field_render_5(){
			$options = get_option('co_banner_option'); ?>
			<input type="text"
				name="co_banner_option[co_banner_input_link_5]"
				value="<?php echo array_key_exists('co_banner_input_link_5', $options) ? $options['co_banner_input_link_5'] : ""; ?>"
				class="custom_input">
		<?php
		}

		// FIELD GROUP 4
		public function co_input_url_field_render_4(){
			$options = get_option('co_banner_option'); ?>
			<input type="text" 
				name="co_banner_option[co_banner_input_url_4]"
				value="<?php echo array_key_exists('co_banner_input_url_4', $options) ?  $options['co_banner_input_url_4'] : ""; ?>" 
				class="custom_input">
		<?php
		}
		public function co_input_link_field_render_4(){
			$options = get_option('co_banner_option'); ?>
			<input type="text"
				name="co_banner_option[co_banner_input_link_4]"
				value="<?php echo array_key_exists('co_banner_input_link_4', $options) ? $options['co_banner_input_link_4'] : ""; ?>"
				class="custom_input">
		<?php
		}

		// FIELD GROUP 3
		public function co_input_url_field_render_3(){
			$options = get_option('co_banner_option'); ?>
			<input type="text" 
				name="co_banner_option[co_banner_input_url_3]"
				value="<?php echo $options['co_banner_input_url_3']; ?>" 
				class="custom_input">
		<?php
		}
		public function co_input_link_field_render_3(){
			$options = get_option('co_banner_option'); ?>
			<input type="text"
				name="co_banner_option[co_banner_input_link_3]"
				value="<?php echo $options['co_banner_input_link_3']; ?>"
				class="custom_input">
		<?php
		}

		// FIELD GROUP 2
		public function co_input_url_field_render_2(){
			$options = get_option('co_banner_option'); ?>
			<input type="text" 
				name="co_banner_option[co_banner_input_url_2]" 
				value="<?php echo $options['co_banner_input_url_2']; ?>" 
				class="custom_input">
		<?php
		}
		public function co_input_link_field_render_2(){
			$options = get_option('co_banner_option'); ?>
			<input type="text"
				name="co_banner_option[co_banner_input_link_2]"
				value="<?php echo $options['co_banner_input_link_2']; ?>"
				class="custom_input">
		<?php
		}

		// FIELD GROUP 1
		public function co_input_url_field_render(){
			$options = get_option('co_banner_option'); ?>
			<input type="text" name="co_banner_option[co_banner_input_url]" value="<?php echo $options['co_banner_input_url']; ?>" class="custom_input">
		<?php
		}
		public function co_input_link_field_render(){
			$options = get_option('co_banner_option'); ?>
			<input type="text"
				name="co_banner_option[co_banner_input_link]"
				value="<?php echo $options['co_banner_input_link']; ?>"
				class="custom_input">
		<?php
		}

		// FIELD GROUP SINGLE
		public function co_render_img_input_sin(){
			$options = get_option('co_banner_option');?>
			<input type="text"
				name="co_banner_option[co_banner_single_img]"
				value="<?php echo $options['co_banner_single_img']?>" class="custom_input">
		<?php
		}
		public function co_render_link_input_sin(){
			$options = get_option('co_banner_option');?>
			<input type="text"
				name="co_banner_option[co_banner_single_link]"
				value="<?php echo $options['co_banner_single_link']?>" class="custom_input">
		<?php
		}

		// FIELD GROUP SIDEBAR
		public function co_render_img_input_sid(){
			$options = get_option('co_banner_option'); ?>
			<input type="text"
				name="co_banner_option[co_banner_side_img]"
				value="<?php echo $options['co_banner_side_img']?>"
				class="custom_input">
			<?php
		}
		public function co_render_link_input_sid(){
			$options = get_option('co_banner_option'); ?>
			<input type="text"
				name="co_banner_option[co_banner_side_link]"
				value="<?php echo $options['co_banner_side_link']?>"
				class="custom_input">
			<?php
		}

		// FIELD GROUP YOUTUBE LIVE
		public function co_render_yt_live_input(){
			$options = get_option('co_banner_option'); ?>
			<input type="text"
				name="co_banner_option[co_live_url]"
				value="<?php echo $options['co_live_url']?>"
				class="custom_input">
			<?php
		}
		public function co_render_live_title_input(){
			$options = get_option('co_banner_option'); ?>
			<input type="text"
				name="co_banner_option[co_live_title]"
				value="<?php echo $options['co_live_title']?>"
				class="custom_input">
			<?php
		}

		//SECTION BANNER
		public function co_banner_section_callback(){
			echo 'Selecciona un banner para el home del sitio';
		}

		//SECTION BANNER
		public function co_banner_section_2_callback(){
			echo 'Selecciona un banner para el <strong><em>single</em></strong> del sitio';
		}

		//SECTION BANNER
		public function co_banner_section_3_callback(){
			echo 'Selecciona un banner para el <strong><em>sidebar</em></strong> del single';
		}

		//SECTION BANNER
		public function co_live_callback(){
			echo 'Agrega la url de la transmisión en vivo de <strong><em>Youtube</em></strong>';
		}



		public function co_cover_options_page(){ ?>
			<form action="options.php" method="post">
				<h2>Opciones de banners</h2>
				<?php
					settings_fields('coverOptionsPage');
					do_settings_sections('coverOptionsPage');
					submit_button();
				?>
			</form>
		<?php
		}// end co_cover_options_page


	}// end class
endif;

if(is_admin()):
	$options_page = new CoverOptionsNew();
endif;
