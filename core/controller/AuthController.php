<?php 
use core\lib\ManagerSession\Session;
use core\lib\Controllers\Controller;
use core\lib\Autentication\AutenticationService; 
/**
* AuthController 
*
* Control de acceso al sistema de usuarios
*
* @version: php7
* @author: Daniel Martinez <headcruser@gmail.com>
* @copyright: Daniel Martinez
* @license https://opensource.org/licenses/mit-license.php MIT License
*/
class AuthController extends Controller
{
	private $autentication;
	public function __construct()
	{
		parent::__construct();
		$this->autentication=new AutenticationService(new Session);
	}
	/**
	 * Muestra la pagina principal
	 * @return type void
	 */
	public function index()
	{	
		return $this->renderView('autentication.login');
	}
	/**
	 * Login 
	 *
	 * Concede el acceso al usuario
	 * @return mixed Obtiene un Json para conceder el acceso
	 */
	public function login()
	{
		if( $_SERVER['REQUEST_METHOD']!='POST')			
			return $this->renderView('error.exception','message','No has enviado por post');
		
		if( !isset($_POST['email']) || !isset($_POST['pasword']))
			return $this->renderView('error.exception','message','Revisa campos Vacios en el formulario');
		
		$email=$_POST['email'];
		$pasword=$_POST['pasword'];		


		if( !$this->autentication->login($email,$pasword))			
			return print ( $this->formatterToJson( array("estado"=>"false") ) ); 
		
		return print ( $this->formatterToJson( array("estado"=>"true") ) ); 
	}
	/**
	 * logout
	 * 
	 * Finaliza la sesion del usuario.
	 * @return mixed 
	 */
	function logout()
	{
		$this->autentication->logout();	
		header('location: http://'.$_SERVER['SERVER_NAME'].INDEX);
	}
}