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
 * co_barra_a_option
 * co_barra_b_option
 * co_barra_c_option
 * co_barra_temas_option
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
			add_settings_section('co_banner_options_section','Banner Home',array($this, 'co_banner_section_callback'),'coverOptionsPage');
			add_settings_field('co_banner_input_url','Url del banner',array($this, 'co_input_url_field_render'),'coverOptionsPage','co_banner_options_section');
			add_settings_field('co_banner_input_link','Link del banner',array($this, 'co_input_link_field_render'),'coverOptionsPage','co_banner_options_section');
			// add_settings_field()

			add_settings_section('co_banner_options_section_2','Banner Single',array($this, 'co_banner_section_2_callback'),'coverOptionsPage');
			add_settings_field('co_banner_single_img', 'Url del banner', array($this, 'co_render_img_input_sin'), 'coverOptionsPage', 'co_banner_options_section_2');
			add_settings_field('co_banner_single_link', 'Link del banner', array($this, 'co_render_link_input_sin'), 'coverOptionsPage', 'co_banner_options_section_2');

			add_settings_section('co_banner_options_section_3', 'Banner Sidebar', array($this, 'co_banner_section_3_callback'), 'coverOptionsPage');
			add_settings_field('co_banner_side_img', 'Url del banner', array($this, 'co_render_img_input_sid'), 'coverOptionsPage', 'co_banner_options_section_3');
			add_settings_field('co_banner_side_link', 'Link del banner', array($this, 'co_render_link_input_sid'), 'coverOptionsPage', 'co_banner_options_section_3');
		}

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
