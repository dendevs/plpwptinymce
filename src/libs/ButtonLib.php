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

    public function add_button( $button_name, $script_path = false )
    {
	$this->_config->set_value( 'button_name',  $button_name );
	$this->_config->set_value( 'script_path',  $script_path );

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
	$button_name = $this->_config->get_config_value( 'button_name' );
	$script_path = $this->_config->get_config_value( 'script_path' );

	$plugin_array[$button_name] = plugins_url( "/js/$script_path", __FILE__ );
	return $plugin_array;
    }
}
