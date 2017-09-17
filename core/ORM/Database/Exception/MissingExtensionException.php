<?php
/**
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @since         3.0.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
namespace core\ORM\Database\Exception;
use core\Exception\GenericException;
final class MissingExtensionException extends GenericException
{
    /**
     * {@inheritDoc}
     */
    protected $_messageTemplate = 'El driver de la base de datos %s No ha sido utilizado';
}