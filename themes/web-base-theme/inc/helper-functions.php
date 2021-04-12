<?php
/**
 * Custom helper functions for this theme
 * @package web-base-theme
*/

if ( ! function_exists( 'wbt_posted_on' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time.
	 */
	function wbt_posted_on() {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
		}

		$time_string = sprintf(
			$time_string,
			esc_attr( get_the_date( DATE_W3C ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( DATE_W3C ) ),
			esc_html( get_the_modified_date() )
		);

		$posted_on = sprintf(
			/* translators: %s: post date. */
			esc_html_x( 'Publicado el %s', 'post date', '_s' ),
			'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
		);

		echo '<span class="posted-on">' . $posted_on . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

	}
endif;

if ( ! function_exists( 'wbt_posted_by' ) ) :
	/**
	 * Prints HTML with meta information for the current author.
	 */
	function wbt_posted_by() {
		$byline = sprintf(
			/* translators: %s: post author. */
			esc_html_x( 'por %s', 'post author', '_s' ),
			'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
		);

		echo '<span class="byline"> ' . $byline . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

	}
endif;

/**
 * [custom_pagination]
 * @param [Int] $numpages
 * @param [Int] $pagerange
 * @param [Int] $paged
 *
 */
function custom_pagination($numpages = '', $pagerange = '', $paged='') {
	if (empty($pagerange)) {
		$pagerange = 9;
	}
	/**
	 * This first part of our function is a fallback
	 * for custom pagination inside a regular loop that
	 * uses the global $paged and global $wp_query variables.
	 *
	 * It's good because we can now override default pagination
	 * in our theme, and use this function in default quries
	 * and custom queries.
	 */
	global $paged;

		if (empty($paged)) {
			$paged = 1;
		}

		if ($numpages == '') {
			global $wp_query;
			$numpages = $wp_query->max_num_pages;

			if(!$numpages) {
					$numpages = 1;
			}
		}
	$big = 999999999;
	$pagination_args = array(
	'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
	'format'          => 'page/%#%',
	'total'           => $numpages,
	'current'         => $paged,
	'show_all'        => false,
	'end_size'        => 1,
	'mid_size'        => $pagerange,
	'prev_next'       => true,
	'type'            => 'list',
	'add_args'        => false,
	'add_fragment'    => ''
	);

	$paginate_links = paginate_links($pagination_args);

	if ($paginate_links) {
		echo "<nav class='custom-pagination'>";
			echo $paginate_links;
		echo "</nav>";
	}

}//custom pagination
