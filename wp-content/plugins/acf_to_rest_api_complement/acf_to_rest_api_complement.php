<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              thedeveloper.com
 * @since             1.0.0
 * @package           Acf_to_rest_api_complement
 *
 * @wordpress-plugin
 * Plugin Name:       Acf To Rest Api Complement
 * Plugin URI:        acf_to_rest_api_complement
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Diego Cardona
 * Author URI:        thedeveloper.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       acf_to_rest_api_complement
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'ACF_TO_REST_API_COMPLEMENT_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-acf_to_rest_api_complement-activator.php
 */
function activate_acf_to_rest_api_complement() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-acf_to_rest_api_complement-activator.php';
	Acf_to_rest_api_complement_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-acf_to_rest_api_complement-deactivator.php
 */
function deactivate_acf_to_rest_api_complement() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-acf_to_rest_api_complement-deactivator.php';
	Acf_to_rest_api_complement_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_acf_to_rest_api_complement' );
register_deactivation_hook( __FILE__, 'deactivate_acf_to_rest_api_complement' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-acf_to_rest_api_complement.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_acf_to_rest_api_complement() {

	$plugin = new Acf_to_rest_api_complement();
	$plugin->run();

}
run_acf_to_rest_api_complement();

header('Access-Control-Allow-Origin: *');

add_action( 'rest_api_init', function () {
  // register_rest_route( 'candidate', '/all', array(
  //     'methods' => 'GET',
  //     'callback' => 'handle_get_all',
  //     'permission_callback' => function () {
  //       return true;
  //     }
  //   )
  // );

  // register_rest_route( 'candidate', '/all', array(
  //     'methods' => 'POST',
  //     'callback' => 'handle_get_all2',
  //     'permission_callback' => function () {
  //       return true;
  //     }
  //   )
  // );

  register_rest_route( 'interview', '/add', array(
      'methods' => 'POST',
      'callback' => 'handle_interview_add',
      'permission_callback' => function () {
        return true;
      }
    )
  );

  register_rest_route( 'interview', '/update', array(
      'methods' => 'POST',
      'callback' => 'handle_interview_update',
      'permission_callback' => function () {
        return true;
      }
    )
  );

  register_rest_route( 'candidate', '/add', array(
      'methods' => 'POST',
      'callback' => 'handle_candidate_add',
      'permission_callback' => function () {
        return true;
      }
    )
  );

  register_rest_route( 'candidate', '/update', array(
      'methods' => 'POST',
      'callback' => 'handle_candidate_update',
      'permission_callback' => function () {
        return true;
      }
    )
  );

  register_rest_route( 'interviewer', '/add', array(
      'methods' => 'POST',
      'callback' => 'handle_interviewer_add',
      'permission_callback' => function () {
        return true;
      }
    )
  );

  register_rest_route( 'interviewer', '/update', array(
      'methods' => 'POST',
      'callback' => 'handle_interviewer_update',
      'permission_callback' => function () {
        return true;
      }
    )
  );
});



  function handle_interview_add($data){
    $config = array('interviewer' => 'field_5ceb5362f08a0','candidate' => 'field_5ceb5380f08a1'
                  ,'date' => 'field_5ceb539cf08a2','meetinglink' => 'field_5ceb53a0f08a3'
                  ,'rate' => 'field_5ceb53acf08a4','status' => 'field_5ceb53b2f08a5');
    $data = json_decode($data->get_body(), true);
    $post_id = $data['id'];
    foreach ($data as $key => $value) {
      if(isset($config[$key])){
        add_post_meta($post_id, $key, $value);
        add_post_meta($post_id, '_'.$key, $config[$key]);
      }
    }
    return array('status' => 'success');
  }

  function handle_interview_update($data){
    $config = array('interviewer' => 'field_5ceb5362f08a0','candidate' => 'field_5ceb5380f08a1'
                  ,'date' => 'field_5ceb539cf08a2','meetinglink' => 'field_5ceb53a0f08a3'
                  ,'rate' => 'field_5ceb53acf08a4','status' => 'field_5ceb53b2f08a5');
    $data = json_decode($data->get_body(), true);
    $post_id = $data['id'];
    foreach ($data as $key => $value) {
      if(isset($config[$key])){
        update_post_meta($post_id, $key, $value);
        update_post_meta($post_id, '_'.$key, $config[$key]);
      }
    }
    
    return array('status' => 'success');
  }

  function handle_candidate_add($data){
    $config = array('name' => 'field_5ceb52a084e52','lastname' => 'field_5ceb52ad84e53'
                  ,'email' => 'field_5ceb52b884e54','phonenumber' => 'field_5ceb52c384e55'
                  ,'position' => 'field_5ceb52cc84e56');
    $data = json_decode($data->get_body(), true);
    $post_id = $data['id'];
    foreach ($data as $key => $value) {
      if(isset($config[$key])){
        add_post_meta($post_id, $key, $value);
        add_post_meta($post_id, '_'.$key, $config[$key]);
      }
    }
    return array('status' => 'success', 'data' => $data, 'config' => $config);
  }

  function handle_candidate_update($data){
    $config = array('name' => 'field_5ceb52a084e52','lastname' => 'field_5ceb52ad84e53'
                  ,'email' => 'field_5ceb52b884e54','phonenumber' => 'field_5ceb52c384e55'
                  ,'position' => 'field_5ceb52cc84e56');
    $data = json_decode($data->get_body(), true);
    $post_id = $data['id'];
    foreach ($data as $key => $value) {
      if(isset($config[$key])){
        update_post_meta($post_id, $key, $value);
        update_post_meta($post_id, '_'.$key, $config[$key]);
      }
    }
    
    return array('status' => 'success', 'data' => $data, 'config' => $config);
  }

  function handle_interviewer_add($data){
    $config = array('name' => 'field_5ceb530ddaceb','lastname' => 'field_5ceb5314dacec'
                  ,'email' => 'field_5ceb531cdaced','phonenumber' => 'field_5ceb5321dacee'
                  ,'technologies_evaluated' => 'field_5ceb532ddacef');
    $data = json_decode($data->get_body(), true);
    $post_id = $data['id'];
    foreach ($data as $key => $value) {
      if(isset($config[$key])){
        add_post_meta($post_id, $key, $value);
        add_post_meta($post_id, '_'.$key, $config[$key]);
      }
    }
    return array('status' => 'success');
  }

  function handle_interviewer_update($data){
    $config = array('name' => 'field_5ceb530ddaceb','lastname' => 'field_5ceb5314dacec'
                  ,'email' => 'field_5ceb531cdaced','phonenumber' => 'field_5ceb5321dacee'
                  ,'technologies_evaluated' => 'field_5ceb532ddacef');
    $data = json_decode($data->get_body(), true);
    $post_id = $data['id'];
    foreach ($data as $key => $value) {
      if(isset($config[$key])){
        update_post_meta($post_id, $key, $value);
        update_post_meta($post_id, '_'.$key, $config[$key]);
      }
    }
    
    return array('status' => 'success');
  }