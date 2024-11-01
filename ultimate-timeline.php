<?php
/**
* Plugin Name: Ultimate Timeline - Responsive History Timeline
* Plugin URI: https://weblizar.com/ultimate-timeline/
* Description: Ultimate Timeline plugin creates beautiful history time-lines on your website. It is responsive time-line showcase in DESC order based on posted date of stories with colors, fontawsome icons.
* Version: 2.9
* Author: Weblizar
* Author URI: https://weblizar.com
* License:GPLv2 or later
* License URI: https://www.gnu.org/licenses/gpl-2.0.html
* Text Domain: ultimate-timeline
* Domain Path: /languages
 **/

defined('ABSPATH') || die;

if (!defined('WEBLIZAR_TIMELINE_CURRENT_VERSION')) {
    define('WEBLIZAR_TIMELINE_CURRENT_VERSION', '2.9');
}
define('WEBLIZAR_TIMELINE_DIR', plugin_dir_path(__FILE__));
define('WEBLIZAR_TIMELINE_URL', plugin_dir_url(__FILE__));

function ultimate_load_plugin_textdomain() {
    load_plugin_textdomain('ultimate-timeline', FALSE, basename(dirname(__FILE__)) . '/languages/');
}
add_action('plugins_loaded', 'ultimate_load_plugin_textdomain');

class WeblizarTimeline {
    private static $instance = null;
    public $error_message = null;
    function __construct() {
        require_once('includes/functions/weblizar-timeline-activation.php');
        WeblizarTimelineActivation::wct_include_files();
    }
    public static function get_instance() {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public static function activation() {
        include_once('includes/functions/weblizar-timeline-activation.php');
        WeblizarTimelineActivation::activation();
        flush_rewrite_rules();
    }

    public static function deactivation() {
        //Do Nothing
        flush_rewrite_rules();
    }
}
WeblizarTimeline::get_instance();
register_activation_hook(__FILE__, array('WeblizarTimeline', 'activation'));
register_deactivation_hook(__FILE__, array('WeblizarTimeline', 'deactivation'));

/**
 * Add setting link on plugin activation in plugin menu
 */
add_filter( 'plugin_action_links_'. plugin_basename(__FILE__), 'additional_links' );
function additional_links( $links ) {
    $link['settings'] = sprintf(
    '<a href="%s" aria-label="%s">%s</a>',
    esc_url( get_admin_url(null, 'edit.php?post_type=weblizar_timeline') ),
    esc_attr__( 'Go to setting page', 'ultimate-timeline' ),
    esc_html__( 'Settings', 'ultimate-timeline' )
    );
    
    return array_merge( $link, (array) $links );
}