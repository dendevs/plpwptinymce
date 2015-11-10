<?php 
namespace DenDev\Plpwptinymce\Lib;


class ButtonLib
{
    private $_krl;
    private $_config;


    public function __construct( $krl, $config )
    {
	$this->_krl = $krl;
	$this->_config = $config;
    }

    public function add_button( $button_name, $script_file = false )
    {  
       	$script_file = ( $script_file ) ? $script_file : $button_name . '.js';

	$this->_config->set_value( 'button_name',  $button_name );
	$this->_config->set_value( 'script_file',  $script_file );

	$ok_0 = add_filter('mce_buttons', array( $this, 'register_buttons_callback' ) );
	$ok_1 = add_filter('mce_external_plugins', array( $this, 'register_tinymce_javascript_callback' ) );

	return ( $ok_0 && $ok_1 ) ? true : false;
    }

    // callback
    public function register_buttons_callback( $buttons )
    {
	$button_name = $this->_config->get_value( 'button_name' );

	array_push( $buttons, 'separator', $button_name );
	return $buttons;
    }

    public function register_tinymce_javascript_callback( $plugin_array )
    {
	$button_name = $this->_config->get_value( 'button_name' );
	$script_file = $this->_config->get_value( 'script_file' );

	$plugin_array[$button_name] = $this->_config->get_value( 'js_path' ) . $script_file;
	return $plugin_array;
    }
}
