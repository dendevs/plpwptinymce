<?php
namespace DenDev\Plpwptinymce;
use DenDev\Plpwptinymce\TinymceInterface;
use DenDev\Plpwptinymce\Lib\ButtonLib;


class Tinymce extends Relationship implements TinymceInterface
{
    private $_button;


    public function __construct( $krl = false, $config = false )
    {
        parent::__construct( $krl, $config );
        $this->_button = new ButtonLib( $this->_krl, $this->_config );
    }

    public function add_button( $button_name, $script_name = false )
    {
        $this->_button->add_button( $button_name, $script_name );
    }
}
