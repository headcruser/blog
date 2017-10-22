<?php
use core\lib\Controllers\Controller;
use core\model\Entradas;
use core\model\Comentario;
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
        // if (!$_SESSION['nombre']) 
        //     header('location: http://192.168.86.129/blog');
        
        return $this->renderView("admin.index");
    }

    public function entradas(){

		$entradas=new Entradas();
		$datos = $entradas->fetchAll(array("id"));
		$campos=$entradas->getNombresColumnas($datos);
		
		$this->assign("datos",$datos);
        $this->assign("campos",$campos);
        $this->assign("accion",2);
        return $this->renderView("admin.entradas.index");
    }

    public function comentarios(){
        $comentarios=new Comentario();
		$datos = $comentarios->fetchAll(array("id","titulo"));
		$campos=$comentarios->getNombresColumnas($datos);
		
		$this->assign("datos",$datos);
        $this->assign("campos",$campos);
        $this->assign("accion",2);
        return $this->renderView("admin.comentarios.index");
    }

    public function favoritos(){
        echo "favoritos";
    }

    public function gestor()
    {
        return $this->renderView("admin.gestor");
    }
}