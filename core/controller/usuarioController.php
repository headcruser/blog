<?php
use core\lib\Controllers\Controller;
use core\model\Usuario;

/**
* usuarioController
*
* Administración de usuarios
*
* @version: php7
* @author: Daniel Martinez <headcruser@gmail.com>
* @copyright: Daniel Martinez
* @license https://opensource.org/licenses/mit-license.php MIT License
*/
class usuarioController extends Controller
{
    /**
     * Muestra la pagina principal
     * @return type void
     */
    public function index()
    {
        if (!$_SESSION['nombre']) {
            header('location: http://192.168.86.129/blog');
        }

        return $this->renderView("admin.usuario.index", "titulo", "Usuarios del sistema");
    }

    /**
     * Muestra El registro de usuario
     * nota** Revisar el sistema de envio del fomrulario
     * @return type void
     */
    public function crear()
    {
        if (!$_SESSION['nombre']) {
            header('location: http://192.168.86.129/blog');
        }

        $variables=array('accion'=>1);

        //Si envia datos, Agregar a la base de datos
        if ($_SERVER['REQUEST_METHOD']=='POST') {
            $validacion = new \GUMP();
            $_POST = $validacion->sanitize($_POST);
        
            $validacion->validation_rules(array(
                'nombre'    => 'required|max_len,30|min_len,4',
                'email'       => 'required|valid_email',
                'pasword'    => 'required|max_len,8|min_len,6',
                'pasword2'    => 'required|max_len,8|min_len,6',));

            $validacion->filter_rules(array(
                'nombre' => 'trim|sanitize_string',
                'email'    => 'trim|sanitize_email',
                'pasword' => 'trim',
                'pasword2' => 'trim',));

            $is_valid = $validacion->is_valid($_POST, array(
                'pasword'  => 'required|max_len,8|min_len,6',
                'pasword2' => 'equalsfield,pasword',));

            $validated_data = $validacion->run($_POST);

            if ($validated_data === false) {
                die($validacion->get_readable_errors(true));
            }
            
            if ($is_valid !== true) {
                die(print_r($is_valid));
            }
            
            
            $usuario=new Usuario();

            // //insertar nuevo usuario
            $usuario->nombre=$_POST['nombre'];
            $usuario->email=$_POST['email'];
            $usuario->password=$_POST['pasword'];
            $usuario->fecha_registro = date("Y-m-d");
            $usuario->activo="1";
            $usuario->guardar();
        }

         //Se va a registrar
        $variables['panelTitulo']='Ingresa tu información';
        $variables['titulo']='Crear Usuario';
        return $this->renderView("admin.usuario.index", 'variables', $variables);
    }

    /**
     * Muestra El registro de usuario
     * @return type Vista Muestra la vista al usuario
     */
    public function listar()
    {
        if (!$_SESSION['nombre']) {
            header('location: http://192.168.86.129/blog');
        }

        $usuario=new Usuario();
        $datos = $usuario->fetchAll(array("id","nombre","email"));
        $campos=$usuario->getNombresColumnas($datos);
        
        $variables['campos']=$campos;
        $variables['datos']=$datos;
        $variables['accion']=2;
        $variables['panelTitulo']='Lista de usuarios';
        $variables['titulo']='Administrar usuarios';

        return $this->renderView("admin.usuario.index", 'variables', $variables);
    }

    /**
     * Edita a un usuario especificado
     * @param   $id     identificador del usuario
     * @return type Vista Muestra la vista al usuario
     */
    public function editar($id)
    {
        if (!$_SESSION['nombre']) {
            header('location: http://192.168.86.129/blog/usuario');
        }
        
        if (!is_numeric($id)) {
            header('location: http://192.168.86.129/blog/usuario');
        }

        $usuario=new Usuario();
        $usuarios = $usuario->find($id);
        $variables['accion']=1;

        if (count($usuarios)) {
            $variables['usuarios']=$usuarios;
            $variables['panelTitulo']='Lista de usuarios';
            $variables['titulo']='Editar Usuario';
            return $this->renderView("admin.usuario.index", 'variables', $variables);
        }
        
        $variables['alerta']='El usuario especificado no existe';
        return $this->renderView("admin.usuario.index", 'variables', $variables);
    }

    public function eliminar($id)
    {
        if (!$_SESSION['nombre']) {
            header('location: http://192.168.86.129/blog/usuario');
        }
        
        if (!is_numeric($id)) {
            header('location: http://192.168.86.129/blog/usuario');
        }

        $User=new Usuario();
        $usuarios = $User->find($id);
        
        if (count($usuarios)) {
            if ($usuarios->eliminar($id)) {
                header('location: http://192.168.86.129/blog/usuario/listar');
            } else {
                $variables['alerta']='El usuario que desea eliminar no existe';
                return $this->renderView("admin.usuario.index", 'variables', $variables);
            }
        }
        
        $variables['alerta']='El usuario que desea eliminar no existe';
        return $this->renderView("admin.usuario.index", 'variables', $variables);
    }
}
