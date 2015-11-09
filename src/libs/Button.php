<?php 
namespace DenDev\Plpwptinymce\Lib;


class Button
{
	private $_tmp;


	public function __construct()
	{
	}

    public function add_button( $button_name )
    {
		$this->_tmp == $button_name;
		$ok_0 = add_filter('mce_buttons', array( $this, 'register_buttons_callback' ) );
		$ok_1 = add_filter('mce_external_plugins', array( $this, 'register_tinymce_javascript_callback' ) );
		return ( $ok_0 && $ok_1 ) ? true : false;
	}

    // callback
    public function register_buttons_callback( $buttons )
    {
		$button_name = &$this->_tmp;
		array_push( $buttons, 'separator', 'myplugin' );
		return $buttons;
	}

	public function register_tinymce_javascript_callback( $plugin_array )
	{
		$plugin_array['myplugin'] = plugins_url('/js/tinymce-plugin.js',__FILE__);
		return $plugin_array;
	}
}
