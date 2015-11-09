<?php
namespace DenDev\Plpwptinymce;
use DenDev\Plpwptinymce\Lib\Button;


class Tinymce
{
    private $_button;


    public function __construct()
    {
        $this->_button = new Button();
    }

    public function add_button()
    {
        $this->_button->add_button();
    }
}
