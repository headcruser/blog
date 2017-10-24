<?php namespace core\ORM\Storage;
/**
 * IntefaceStorage
 * 
 * Define las operaciones genericas para para todos los repositorios
 * encargados de realizar las operaciones con la base de datos;
 * 
 * @version: php7
 * @author: Daniel Martinez | headcruser@gmail.com
 * @copyright: Daniel Martinez
 * @license: GNU General Public License (GPL)
 */
interface interfaceStorage
{
    public function find(int $entityID);
    public function findAll(array $columns=[] ) : array;
    public function delete($id);
}