<?php
use core\lib\Vista;
use core\model\Usuario;

/**
* Controla el panel de administración del sistema
*
* @author  Headcruser
* @copyright: Daniel Martinez
* @version 2017_v1
* @license https://opensource.org/licenses/mit-license.php MIT License
*/
class adminController
{
    /**
     * Muestra la pagina principal
	 * @return type void
	 * @access public
     */
    public function index()
    {
        if (!$_SESSION['nombre']) {
            header('location: http://192.168.86.129/blog');
        }

        return Vista::crear("admin.index");
    }
}
