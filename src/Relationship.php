<?php 
namespace DenDev\Plpwptinymce;
use DenDev\Plpwptinymce\Config\Config;


class Relationship
{
    protected $_krl;
    protected $_config;
    protected $_service;


    public function __construct( $krl, $config )
    {
        $this->_set_krl( $krl );
        $this->_set_config( $config );
    }

    public function get_service( $id_service ) // in NoKernel ?
    {
        return $this->_krl->get_service( $id_service );
    }

    public function get_config_value( $config_name )
    {
        return $this->_config->get_value( $config_name );
    }

    public function write_log( $log_name, $message, $level, $extras ) // in NoKernel ?
    {
        $ok = false;

        if( $service = $this->get_service( 'logger' ) ) // 
        {
            $service->log( $log_name, $message, $level, $extras );
            $ok = 1;
        }
        else
        {
            $log_path = "logs/$log_name.log";
            // avoid big file
            if( file_exists( $log_path ) && filesize( $log_path ) >= 1024 )
            {
                unlink( $log_path );
            }

            // write
            error_log("$level: $message ( " .  print_r( $extras, true ) . " ) ", 3, "logs/$log_name.log");
            $ok = 2;
        }

        return $ok;
    }

    // -
    private function _set_krl( $krl )
    {
        if( is_object( $krl ) )
        {
            $this->_krl = $krl;
            $ok = true;
        }
        else
        {
            $this->_krl = new NoKernel();
            $ok = false;
        }

        return $ok;
    }

    private function _set_config( $config )
    {
        $default_config = new Config();

        if( is_object( $config ) ) // need DenDev\Plpkernel\Config\Config but object is good for testing
        {
            // $config->merge_default( $default_config ); // TODO dans kernel
            $this->_config = $config; // TODO merge default & set
            $ok = true;
        }
        else
        {
            $this->_config = $default_config;
            $ok = false;
        }

        return $ok;
    }
}

class NoKernel
{
    public function __call( $name, $args )
    {
        //echo "Appel de la méthode '$name' ". print_r( $args, true ). "\n";
    }

    public function get_service( $id_service )
    {
        return false;
    }
}
