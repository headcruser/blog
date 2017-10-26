<?php
use core\lib\Controllers\Controller;
use core\model\Entrada;
/**
* EntradaController
* 
* Administración de las entradas
*
* @version: php7
* @author: Daniel Martinez <headcruser@gmail.com>
* @copyright: Daniel Martinez
* @license https://opensource.org/licenses/mit-license.php MIT License
*/
class EntradaController extends Controller
{
	/**
	 * Muestra la pagina principal
	 * @return type void
	 */
	public function index()
	{
		$this->assign("campos", $this->container->get('dbEntrada')->getColumns());
		return $this->renderView("admin.entradas.index");
	}
	/**
	 * Muestra El registro de usuario
	 * @return type Vista Muestra la vista al usuario
	 */
	public function listar()
	{		
        
        $datos=$this->container->get('dbEntrada')->findAll();
        print ( $this->formatterToJson( $datos ) );

		//return $this->renderView("admin.usuario.index",'variables',$variables);
	}

	/**
	 * Edita a un usuario especificado
	 * @param 	$id 	identificador del usuario
	 * @return type Vista Muestra la vista al usuario
	 */
	public function editar($id)
	{
	}

	public function eliminar($id)
	{		
	}
}