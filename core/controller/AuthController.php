<?php 
 use core\help\help;
 use core\lib\Vista;
 use core\lib\JsonFormat;
 use core\lib\Autentication\AutenticationService;
 use core\lib\ManagerSession\Session;
/**
* Control de acceso al sistema de usuarios
*
* @author  Headcruser
* @copyright: Daniel Martinez
* @version 2017_v1
* @license https://opensource.org/licenses/mit-license.php MIT License
*/
class AuthController 
{
	private $autentication;
	private $jsonArray;

	public function __construct()
	{
		$this->autentication=new AutenticationService(new Session);
		$this->jsonArray=new JsonFormat();
	}
	/**
	 * Muestra la pagina principal
	 * @return type void
	 */
	public function index()
	{	
		//Login pagina Completa
		print_r('Login Full');
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
			return Vista::crear("error.error","error","No has enviado por post");
		
		if( !isset($_POST['email']) || !isset($_POST['pasword']))
			return Vista::crear("error.error","error","Uno de los campos esta vacio");
		
		$email=help::validarCampo($_POST['email']);
		$pasword=help::validarCampo($_POST['pasword']);		
		
		if( !$this->autentication->login($email,$pasword))			
			return print ( $this->jsonArray->json_response(array("estado"=>"false") ) ); 
		
		return print ( $this->jsonArray->json_response( array("estado"=>"true") ) ); 
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