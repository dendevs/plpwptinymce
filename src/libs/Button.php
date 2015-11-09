<?php 
namespace DenDev\Plpwptinymce\Lib;


class Button
{

	public function __construct()
	{
	}

    public function add_button( $button_name )
    {
		$this->_tmp == $button_name;
		add_filter('mce_buttons', array( $this, 'register_buttons_callback' ) );
	}

    // callback
    public function register_buttons_callback( $buttons )
    {
		$button_name = &$this->_tmp;
		echo $button_name ;
		array_push( $buttons, 'separator', 'myplugin' );
		return $buttons;
	}

    
}
