<?php
namespace DenDev\Plpwptinymce\Config;


class Config
{
	private $_config;

	public function __construct( $values = array() ) 
	{
		$this->_config = $values;
		$this->_set_config();
	}

	public function get_value( $config_name )
	{
		$value = false;

		if( array_key_exists( $config_name, $this->_config ) )
		{
			$value = $this->_config[$config_name];
		}

		return $value;
	}

    public function set_value( $key, $value )
    {
        return $this->_config[$key] = $value;
    }

	public function get_values()
	{
		return $this->_config;
	}

	// -
	private function _set_config()
    {
        // general
        $root_path = str_replace( 'src/configs', '', dirname( __FILE__ ) );
		$this->_config['root_path'] = $root_path;
		$this->_config['assets_path'] = $root_path . 'assets/';
		$this->_config['js_path'] = $root_path . 'assets/js/';
		$this->_config['css_path'] = $root_path . 'assets/css/';
		$this->_config['img_path'] = $root_path . 'assets/img/';

        // specific
		$this->_config['button_name'] = 'button_url';

        // for phpunit
		$this->_config['test'] = 'test ok';
	}
}
