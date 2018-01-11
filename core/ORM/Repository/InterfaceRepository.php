<?php namespace core\ORM\Repository;

/**
 * IntefacRepository
 *
 * Define las operaciones para los repositorios del sistema
 *
 * @version: php7
 * @author: Daniel Martinez <headcruser@gmail.com>
 * @copyright: Daniel Martinez
 * @license https://opensource.org/licenses/mit-license.php MIT License
 */
interface interfaceStorage
{
    public function find(int $entityID);
    public function findAll(array $columns = []) : array;
}
