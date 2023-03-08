<?php
/**
 * Twenty Twenty-Two functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Two
 * @since Twenty Twenty-Two 1.0
 */


if ( ! function_exists( 'ceuTheme_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Twenty Twenty-Two 1.0
	 *
	 * @return void
	 */
	function ceuTheme_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;



add_action( 'after_setup_theme', 'ceuTheme_support');


/*-----------------------------------
Enqueu Styles
------------------------------------*/
if ( ! function_exists( 'ceuTheme_styles' ) ) :
function ceuTheme_styles() {
  // Register Stylesheet
  wp_enqueue_style( 'ceuTheme-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));
  wp_enqueue_style( 'ceuTheme-style-blocks', get_template_directory_uri() . '/assets/css/blocks.css', array());
}
endif;
add_action( 'wp_enqueue_scripts', 'ceuTheme_styles');

function custom_menu() {
	register_nav_menu('custom-menu',__( 'Navigation Top' ));
}
add_action( 'init', 'custom_menu' );

function custom_deps() {
	echo "<script src='https://code.jquery.com/jquery-3.6.3.min.js' integrity='sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=' crossorigin='anonymous'></script><link rel='stylesheet' href='//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css'><script src='https://www.google.com/recaptcha/api.js' async defer></script><script type='text/javascript' src='//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js'></script>
	<script type='text/javascript' src='//cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js'></script>
	<script type='text/javascript' src='//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenLite.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/plugins/ModifiersPlugin.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/plugins/ScrollToPlugin.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js'></script>".'<script src="http://localhost:8080/wp-content/themes/ceu-wordpress-theme/assets/js/script.js?ver=6.1.1" id="script-js"></script><link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.3.15/slick.css">';
}
add_action("wp_head", "custom_deps");

// function custom_javascript() {
// 	wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/script.js');
// }

// add_action('wp_enqueue_scripts', 'custom_javascript');


/**
 * A class for displaying various tree-like structures.
 *
 * Extend the Walker class to use it, see examples below. Child classes
 * do not need to implement all of the abstract methods in the class. The child
 * only needs to implement the methods that are needed.
 *
 * @since 2.1.0
 *
 * @package WordPress
 * @abstract
 */
#[AllowDynamicProperties]
class Custom_Walker {
	/**
	 * What the class handles.
	 *
	 * @since 2.1.0
	 * @var string
	 */
	public $tree_type;

	/**
	 * DB fields to use.
	 *
	 * @since 2.1.0
	 * @var string[]
	 */
	public $db_fields;

	/**
	 * Max number of pages walked by the paged walker.
	 *
	 * @since 2.7.0
	 * @var int
	 */
	public $max_pages = 1;

	/**
	 * Whether the current element has children or not.
	 *
	 * To be used in start_el().
	 *
	 * @since 4.0.0
	 * @var bool
	 */
	public $has_children;

	/**
	 * Starts the list before the elements are added.
	 *
	 * The $args parameter holds additional values that may be used with the child
	 * class methods. This method is called at the start of the output list.
	 *
	 * @since 2.1.0
	 * @abstract
	 *
	 * @param string $output Used to append additional content (passed by reference).
	 * @param int    $depth  Depth of the item.
	 * @param array  $args   An array of additional arguments.
	 */
	public function start_lvl( &$output, $depth = 0, $args = array() ) {}

	/**
	 * Ends the list of after the elements are added.
	 *
	 * The $args parameter holds additional values that may be used with the child
	 * class methods. This method finishes the list at the end of output of the elements.
	 *
	 * @since 2.1.0
	 * @abstract
	 *
	 * @param string $output Used to append additional content (passed by reference).
	 * @param int    $depth  Depth of the item.
	 * @param array  $args   An array of additional arguments.
	 */
	public function end_lvl( &$output, $depth = 0, $args = array() ) {}
	public function build_custom_lvl( &$output, $depth = 0, $args = array() ) {

	}
	/**
	 * Starts the element output.
	 *
	 * The $args parameter holds additional values that may be used with the child
	 * class methods. Also includes the element output.
	 *
	 * @since 2.1.0
	 * @since 5.9.0 Renamed `$object` (a PHP reserved keyword) to `$data_object` for PHP 8 named parameter support.
	 * @abstract
	 *
	 * @param string $output            Used to append additional content (passed by reference).
	 * @param object $data_object       The data object.
	 * @param int    $depth             Depth of the item.
	 * @param array  $args              An array of additional arguments.
	 * @param int    $current_object_id Optional. ID of the current item. Default 0.
	 */
	public function start_el( &$output, $data_object, $depth = 0, $args = array(), $current_object_id = 0 ) {}

	/**
	 * Ends the element output, if needed.
	 *
	 * The $args parameter holds additional values that may be used with the child class methods.
	 *
	 * @since 2.1.0
	 * @since 5.9.0 Renamed `$object` (a PHP reserved keyword) to `$data_object` for PHP 8 named parameter support.
	 * @abstract
	 *
	 * @param string $output      Used to append additional content (passed by reference).
	 * @param object $data_object The data object.
	 * @param int    $depth       Depth of the item.
	 * @param array  $args        An array of additional arguments.
	 */
	public function end_el( &$output, $data_object, $depth = 0, $args = array() ) {}

	/**
	 * Traverses elements to create list from elements.
	 *
	 * Display one element if the element doesn't have any children otherwise,
	 * display the element and its children. Will only traverse up to the max
	 * depth and no ignore elements under that depth. It is possible to set the
	 * max depth to include all depths, see walk() method.
	 *
	 * This method should not be called directly, use the walk() method instead.
	 *
	 * @since 2.5.0
	 *
	 * @param object $element           Data object.
	 * @param array  $children_elements List of elements to continue traversing (passed by reference).
	 * @param int    $max_depth         Max depth to traverse.
	 * @param int    $depth             Depth of current element.
	 * @param array  $args              An array of arguments.
	 * @param string $output            Used to append additional content (passed by reference).
	 */
	public function display_element( $element, &$children_elements, $max_depth, $depth, $args, &$output ) {
		if ( ! $element ) {
			return;
		}

		$id_field = $this->db_fields['id'];
		$id       = $element->$id_field;

		// Display this element.
		$this->has_children = ! empty( $children_elements[ $id ] );
		if ( isset( $args[0] ) && is_array( $args[0] ) ) {
			$args[0]['has_children'] = $this->has_children; // Back-compat.
		}

		$this->start_el( $output, $element, $depth, ...array_values( $args ) );

		// Descend only when the depth is right and there are children for this element.
		if ( ( 0 == $max_depth || $max_depth > $depth + 1 ) && isset( $children_elements[ $id ] ) ) {

			foreach ( $children_elements[ $id ] as $child ) {

				if ( ! isset( $newlevel ) ) {
					$newlevel = true;
					// Start the child delimiter.
					$this->start_lvl( $output, $depth, ...array_values( $args ) );
				}
				$output .= '<a href="'.$child->url.'"><li>'.$child->title.'</li></a>';

			}
			unset( $children_elements[ $id ] );
		}

		if ( isset( $newlevel ) && $newlevel ) {
			// End the child delimiter.
			$this->end_lvl( $output, $depth, ...array_values( $args ) );
		}

		// End this element.
		$this->end_el( $output, $element, $depth, ...array_values( $args ) );
	}

	/**
	 * Displays array of elements hierarchically.
	 *
	 * Does not assume any existing order of elements.
	 *
	 * $max_depth = -1 means flatly display every element.
	 * $max_depth = 0 means display all levels.
	 * $max_depth > 0 specifies the number of display levels.
	 *
	 * @since 2.1.0
	 * @since 5.3.0 Formalized the existing `...$args` parameter by adding it
	 *              to the function signature.
	 *
	 * @param array $elements  An array of elements.
	 * @param int   $max_depth The maximum hierarchical depth.
	 * @param mixed ...$args   Optional additional arguments.
	 * @return string The hierarchical item output.
	 */
	public function walk( $elements, $max_depth, ...$args ) {
		$output = '';

		// Invalid parameter or nothing to walk.
		if ( $max_depth < -1 || empty( $elements ) ) {
			return $output;
		}

		$parent_field = $this->db_fields['parent'];

		// Flat display.
		if ( -1 == $max_depth ) {
			$empty_array = array();
			foreach ( $elements as $e ) {
				$this->display_element( $e, $empty_array, 1, 0, $args, $output );
			}
			return $output;
		}

		/*
		 * Need to display in hierarchical order.
		 * Separate elements into two buckets: top level and children elements.
		 * Children_elements is two dimensional array. Example:
		 * Children_elements[10][] contains all sub-elements whose parent is 10.
		 */
		$top_level_elements = array();
		$children_elements  = array();
		foreach ( $elements as $e ) {
			if ( empty( $e->$parent_field ) ) {
				$top_level_elements[] = $e;
			} else {
				$children_elements[ $e->$parent_field ][] = $e;
			}
		}

		/*
		 * When none of the elements is top level.
		 * Assume the first one must be root of the sub elements.
		 */
		if ( empty( $top_level_elements ) ) {

			$first = array_slice( $elements, 0, 1 );
			$root  = $first[0];

			$top_level_elements = array();
			$children_elements  = array();
			foreach ( $elements as $e ) {
				if ( $root->$parent_field == $e->$parent_field ) {
					$top_level_elements[] = $e;
				} else {
					$children_elements[ $e->$parent_field ][] = $e;
				}
			}
		}

		foreach ( $top_level_elements as $e ) {
			$this->display_element( $e, $children_elements, $max_depth, 0, $args, $output );
		}

		/*
		 * If we are displaying all levels, and remaining children_elements is not empty,
		 * then we got orphans, which should be displayed regardless.
		 */
		if ( ( 0 == $max_depth ) && count( $children_elements ) > 0 ) {
			$empty_array = array();
			foreach ( $children_elements as $orphans ) {
				foreach ( $orphans as $op ) {
					$this->display_element( $op, $empty_array, 1, 0, $args, $output );
				}
			}
		}

		return $output;
	}

	/**
	 * Produces a page of nested elements.
	 *
	 * Given an array of hierarchical elements, the maximum depth, a specific page number,
	 * and number of elements per page, this function first determines all top level root elements
	 * belonging to that page, then lists them and all of their children in hierarchical order.
	 *
	 * $max_depth = 0 means display all levels.
	 * $max_depth > 0 specifies the number of display levels.
	 *
	 * @since 2.7.0
	 * @since 5.3.0 Formalized the existing `...$args` parameter by adding it
	 *              to the function signature.
	 *
	 * @param array $elements  An array of elements.
	 * @param int   $max_depth The maximum hierarchical depth.
	 * @param int   $page_num  The specific page number, beginning with 1.
	 * @param int   $per_page  Number of elements per page.
	 * @param mixed ...$args   Optional additional arguments.
	 * @return string XHTML of the specified page of elements.
	 */
	public function paged_walk( $elements, $max_depth, $page_num, $per_page, ...$args ) {
		if ( empty( $elements ) || $max_depth < -1 ) {
			return '';
		}

		$output = '';

		$parent_field = $this->db_fields['parent'];

		$count = -1;
		if ( -1 == $max_depth ) {
			$total_top = count( $elements );
		}
		if ( $page_num < 1 || $per_page < 0 ) {
			// No paging.
			$paging = false;
			$start  = 0;
			if ( -1 == $max_depth ) {
				$end = $total_top;
			}
			$this->max_pages = 1;
		} else {
			$paging = true;
			$start  = ( (int) $page_num - 1 ) * (int) $per_page;
			$end    = $start + $per_page;
			if ( -1 == $max_depth ) {
				$this->max_pages = ceil( $total_top / $per_page );
			}
		}

		// Flat display.
		if ( -1 == $max_depth ) {
			if ( ! empty( $args[0]['reverse_top_level'] ) ) {
				$elements = array_reverse( $elements );
				$oldstart = $start;
				$start    = $total_top - $end;
				$end      = $total_top - $oldstart;
			}

			$empty_array = array();
			foreach ( $elements as $e ) {
				$count++;
				if ( $count < $start ) {
					continue;
				}
				if ( $count >= $end ) {
					break;
				}
				$this->display_element( $e, $empty_array, 1, 0, $args, $output );
			}
			return $output;
		}

		/*
		 * Separate elements into two buckets: top level and children elements.
		 * Children_elements is two dimensional array, e.g.
		 * $children_elements[10][] contains all sub-elements whose parent is 10.
		 */
		$top_level_elements = array();
		$children_elements  = array();
		foreach ( $elements as $e ) {
			if ( empty( $e->$parent_field ) ) {
				$top_level_elements[] = $e;
			} else {
				$children_elements[ $e->$parent_field ][] = $e;
			}
		}

		$total_top = count( $top_level_elements );
		if ( $paging ) {
			$this->max_pages = ceil( $total_top / $per_page );
		} else {
			$end = $total_top;
		}

		if ( ! empty( $args[0]['reverse_top_level'] ) ) {
			$top_level_elements = array_reverse( $top_level_elements );
			$oldstart           = $start;
			$start              = $total_top - $end;
			$end                = $total_top - $oldstart;
		}
		if ( ! empty( $args[0]['reverse_children'] ) ) {
			foreach ( $children_elements as $parent => $children ) {
				$children_elements[ $parent ] = array_reverse( $children );
			}
		}

		foreach ( $top_level_elements as $e ) {
			$count++;

			// For the last page, need to unset earlier children in order to keep track of orphans.
			if ( $end >= $total_top && $count < $start ) {
					$this->unset_children( $e, $children_elements );
			}

			if ( $count < $start ) {
				continue;
			}

			if ( $count >= $end ) {
				break;
			}

			$this->display_element( $e, $children_elements, $max_depth, 0, $args, $output );
		}

		if ( $end >= $total_top && count( $children_elements ) > 0 ) {
			$empty_array = array();
			foreach ( $children_elements as $orphans ) {
				foreach ( $orphans as $op ) {
					$this->display_element( $op, $empty_array, 1, 0, $args, $output );
				}
			}
		}

		return $output;
	}

	/**
	 * Calculates the total number of root elements.
	 *
	 * @since 2.7.0
	 *
	 * @param array $elements Elements to list.
	 * @return int Number of root elements.
	 */
	public function get_number_of_root_elements( $elements ) {
		$num          = 0;
		$parent_field = $this->db_fields['parent'];

		foreach ( $elements as $e ) {
			if ( empty( $e->$parent_field ) ) {
				$num++;
			}
		}
		return $num;
	}

	/**
	 * Unsets all the children for a given top level element.
	 *
	 * @since 2.7.0
	 *
	 * @param object $element           The top level element.
	 * @param array  $children_elements The children elements.
	 */
	public function unset_children( $element, &$children_elements ) {
		if ( ! $element || ! $children_elements ) {
			return;
		}

		$id_field = $this->db_fields['id'];
		$id       = $element->$id_field;

		if ( ! empty( $children_elements[ $id ] ) && is_array( $children_elements[ $id ] ) ) {
			foreach ( (array) $children_elements[ $id ] as $child ) {
				$this->unset_children( $child, $children_elements );
			}
		}

		unset( $children_elements[ $id ] );
	}

}

class Custom_Walker_Nav_Menu_Class extends Custom_Walker {
	/**
	 * What the class handles.
	 *
	 * @since 3.0.0
	 * @var string
	 *
	 * @see Walker::$tree_type
	 */
	public $tree_type = array( 'post_type', 'taxonomy', 'custom' );

	/**
	 * Database fields to use.
	 *
	 * @since 3.0.0
	 * @todo Decouple this.
	 * @var string[]
	 *
	 * @see Walker::$db_fields
	 */
	public $db_fields = array(
		'parent' => 'menu_item_parent',
		'id'     => 'db_id',
	);


	/**
	 * Starts the list before the elements are added.
	 *
	 * @since 3.0.0
	 *
	 * @see Walker::start_lvl()
	 *
	 * @param string   $output Used to append additional content (passed by reference).
	 * @param int      $depth  Depth of menu item. Used for padding.
	 * @param stdClass $args   An object of wp_nav_menu() arguments.
	 */
	public function start_lvl( &$output, $depth = 0, $args = null ) {
		if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
			$t = '';
			$n = '';
		} else {
			$t = "\t";
			$n = "\n";
		}
		$indent = str_repeat( $t, $depth );

		// Default class.
		$classes = array( 'sub-menu' );

		/**
		 * Filters the CSS class(es) applied to a menu list element.
		 *
		 * @since 4.8.0
		 *
		 * @param string[] $classes Array of the CSS classes that are applied to the menu `<ul>` element.
		 * @param stdClass $args    An object of `wp_nav_menu()` arguments.
		 * @param int      $depth   Depth of menu item. Used for padding.
		 */
		$class_names = implode( ' ', apply_filters( 'nav_menu_submenu_css_class', $classes, $args, $depth ) );
		$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

		$output .= "{$n}{$indent}<ul$class_names>{$n}";
	}

	/**
	 * Ends the list of after the elements are added.
	 *
	 * @since 3.0.0
	 *
	 * @see Walker::end_lvl()
	 *
	 * @param string   $output Used to append additional content (passed by reference).
	 * @param int      $depth  Depth of menu item. Used for padding.
	 * @param stdClass $args   An object of wp_nav_menu() arguments.
	 */
	public function end_lvl( &$output, $depth = 0, $args = null ) {
		if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
			$t = '';
			$n = '';
		} else {
			$t = "\t";
			$n = "\n";
		}
		$indent  = str_repeat( $t, $depth );
		$output .= "$indent</ul>{$n}";
	}

	/**
	 * Starts the element output.
	 *
	 * @since 3.0.0
	 * @since 4.4.0 The {@see 'nav_menu_item_args'} filter was added.
	 * @since 5.9.0 Renamed `$item` to `$data_object` and `$id` to `$current_object_id`
	 *              to match parent class for PHP 8 named parameter support.
	 *
	 * @see Walker::start_el()
	 *
	 * @param string   $output            Used to append additional content (passed by reference).
	 * @param WP_Post  $data_object       Menu item data object.
	 * @param int      $depth             Depth of menu item. Used for padding.
	 * @param stdClass $args              An object of wp_nav_menu() arguments.
	 * @param int      $current_object_id Optional. ID of the current menu item. Default 0.
	 */
	public function start_el( &$output, $data_object, $depth = 0, $args = null, $current_object_id = 0 ) {
		// Restores the more descriptive, specific name for use within this method.
		$menu_item = $data_object;

		if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
			$t = '';
			$n = '';
		} else {
			$t = "\t";
			$n = "\n";
		}
		$indent = ( $depth ) ? str_repeat( $t, $depth ) : '';

		$classes   = empty( $menu_item->classes ) ? array() : (array) $menu_item->classes;
		$classes[] = 'menu-item-' . $menu_item->ID;

		/**
		 * Filters the arguments for a single nav menu item.
		 *
		 * @since 4.4.0
		 *
		 * @param stdClass $args      An object of wp_nav_menu() arguments.
		 * @param WP_Post  $menu_item Menu item data object.
		 * @param int      $depth     Depth of menu item. Used for padding.
		 */
		$args = apply_filters( 'nav_menu_item_args', $args, $menu_item, $depth );

		/**
		 * Filters the CSS classes applied to a menu item's list item element.
		 *
		 * @since 3.0.0
		 * @since 4.1.0 The `$depth` parameter was added.
		 *
		 * @param string[] $classes   Array of the CSS classes that are applied to the menu item's `<li>` element.
		 * @param WP_Post  $menu_item The current menu item object.
		 * @param stdClass $args      An object of wp_nav_menu() arguments.
		 * @param int      $depth     Depth of menu item. Used for padding.
		 */
		$class_names = implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $menu_item, $args, $depth ) );
		$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

		/**
		 * Filters the ID attribute applied to a menu item's list item element.
		 *
		 * @since 3.0.1
		 * @since 4.1.0 The `$depth` parameter was added.
		 *
		 * @param string   $menu_item_id The ID attribute applied to the menu item's `<li>` element.
		 * @param WP_Post  $menu_item    The current menu item.
		 * @param stdClass $args         An object of wp_nav_menu() arguments.
		 * @param int      $depth        Depth of menu item. Used for padding.
		 */
		$id = apply_filters( 'nav_menu_item_id', 'menu-item-' . $menu_item->ID, $menu_item, $args, $depth );
		$id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

		$output .= $indent . '<li' . $id . $class_names . '>';

		$atts           = array();
		$atts['title']  = ! empty( $menu_item->attr_title ) ? $menu_item->attr_title : '';
		$atts['target'] = ! empty( $menu_item->target ) ? $menu_item->target : '';
		if ( '_blank' === $menu_item->target && empty( $menu_item->xfn ) ) {
			$atts['rel'] = 'noopener';
		} else {
			$atts['rel'] = $menu_item->xfn;
		}
		$atts['href']         = ! empty( $menu_item->url ) ? $menu_item->url : '';
		$atts['aria-current'] = $menu_item->current ? 'page' : '';

		/**
		 * Filters the HTML attributes applied to a menu item's anchor element.
		 *
		 * @since 3.6.0
		 * @since 4.1.0 The `$depth` parameter was added.
		 *
		 * @param array $atts {
		 *     The HTML attributes applied to the menu item's `<a>` element, empty strings are ignored.
		 *
		 *     @type string $title        Title attribute.
		 *     @type string $target       Target attribute.
		 *     @type string $rel          The rel attribute.
		 *     @type string $href         The href attribute.
		 *     @type string $aria-current The aria-current attribute.
		 * }
		 * @param WP_Post  $menu_item The current menu item object.
		 * @param stdClass $args      An object of wp_nav_menu() arguments.
		 * @param int      $depth     Depth of menu item. Used for padding.
		 */
		$atts = apply_filters( 'nav_menu_link_attributes', $atts, $menu_item, $args, $depth );

		$attributes = '';
		foreach ( $atts as $attr => $value ) {
			if ( is_scalar( $value ) && '' !== $value && false !== $value ) {
				$value       = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
				$attributes .= ' ' . $attr . '="' . $value . '"';
			}
		}

		/** This filter is documented in wp-includes/post-template.php */
		$title = apply_filters( 'the_title', $menu_item->title, $menu_item->ID );

		/**
		 * Filters a menu item's title.
		 *
		 * @since 4.4.0
		 *
		 * @param string   $title     The menu item's title.
		 * @param WP_Post  $menu_item The current menu item object.
		 * @param stdClass $args      An object of wp_nav_menu() arguments.
		 * @param int      $depth     Depth of menu item. Used for padding.
		 */
		$title = apply_filters( 'nav_menu_item_title', $title, $menu_item, $args, $depth );

		$item_output  = $args->before;
		$item_output .= '<a' . $attributes . '>';
		$item_output .= $args->link_before . $title . $args->link_after;
		$item_output .= '</a>';
		$item_output .= $args->after;

		/**
		 * Filters a menu item's starting output.
		 *
		 * The menu item's starting output only includes `$args->before`, the opening `<a>`,
		 * the menu item's title, the closing `</a>`, and `$args->after`. Currently, there is
		 * no filter for modifying the opening and closing `<li>` for a menu item.
		 *
		 * @since 3.0.0
		 *
		 * @param string   $item_output The menu item's starting HTML output.
		 * @param WP_Post  $menu_item   Menu item data object.
		 * @param int      $depth       Depth of menu item. Used for padding.
		 * @param stdClass $args        An object of wp_nav_menu() arguments.
		 */
		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $menu_item, $depth, $args );
	}

	/**
	 * Ends the element output, if needed.
	 *
	 * @since 3.0.0
	 * @since 5.9.0 Renamed `$item` to `$data_object` to match parent class for PHP 8 named parameter support.
	 *
	 * @see Walker::end_el()
	 *
	 * @param string   $output      Used to append additional content (passed by reference).
	 * @param WP_Post  $data_object Menu item data object. Not used.
	 * @param int      $depth       Depth of page. Not Used.
	 * @param stdClass $args        An object of wp_nav_menu() arguments.
	 */
	public function end_el( &$output, $data_object, $depth = 0, $args = null ) {
		if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
			$t = '';
			$n = '';
		} else {
			$t = "\t";
			$n = "\n";
		}
		$output .= "</li>{$n}";
	}

}

class Custom_Walker_Nav_Menu extends Custom_Walker_Nav_Menu_Class {
	function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		$item_output = $item->before;
		$item_output .= '<div class="col-md-2 hdr-linkHolder">';
		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}

		function end_el( &$output, $item, $depth = 0, $args = array() ) {
			$output .= '<div class="vertical-parent"><div class="vertical-align"><a class="hdr-link text-white py-3" href="'.$item->url.'">'.strtoupper($item->title).'</a></div></div></div>';
		}
		function start_lvl( &$output, $depth = 0, $args = array() ) {
		$indent = str_repeat("\t", $depth);
		$output .= "\n<div class='hover-menuHolder'><ul>\n";
	}

	

		function end_lvl( &$output, $depth = 0, $args = array() ) {
		$indent = str_repeat("\t", $depth);
		$output .= "</ul></div>\n";
	}



}