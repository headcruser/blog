<?php
use core\lib\Controllers\Controller;
use core\model\Usuario;
/**
* Controla el panel de administración del sistema
*
* @author  Headcruser
* @copyright: Daniel Martinez
* @version 2017_v1
* @license https://opensource.org/licenses/mit-license.php MIT License
*/
class adminController extends Controller
{
    /**
     * Muestra la pagina principal
	 * @return type void
	 * @access public
     */
    public function index()
    {
        if (!$_SESSION['nombre']) 
            header('location: http://192.168.86.129/blog');
        
        return $this->renderView("admin.index");
    }

    public function entradas(){
        echo "entradas";
    }

    public function comentarios(){
        echo "comentarios";
    }
}