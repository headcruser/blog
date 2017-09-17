<?php
/**
 * Blog(tm) : Desarrollo de un miniframework para aprendizaje personal
 * El desarrollo de este driver fue con la guia del repositorio de
 * Cake Software Foundation, Inc. 
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
namespace core\ORM\Database;
/**
 * Esta interface define los metodos que dependen en la conexión 
 */
interface IConnection
{
    /**
     * Obtiene la configuración de la conexión
     *
     * @return string
     */
    public function configName();
    /**
     * Get the configuration data used to create the connection.
     *
     * @return array
     */
    public function config();
    
}