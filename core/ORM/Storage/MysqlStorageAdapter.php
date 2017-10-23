<?php namespace core\ORM\Storage;

use core\ORM\Database\Connection;
use core\ORM\Storage\interfaceStorage;
use core\ORM\Database\Driver\MysqlDriver;
use NilPortugues\Sql\QueryBuilder\Builder\GenericBuilder;
/**
 * Mysql Storage
 * 
 * Define las operaciones básicas para que el repositorio
 * pueda realizar consultas mas avanzadas
 * 
 * @version: php7
 * @author: Daniel Martinez | headcruser@gmail.com
 * @copyright: Daniel Martinez
 * @license: GNU General Public License (GPL)
 */
abstract class MysqlStorageAdapter implements interfaceStorage
{
    /**
     * Conexion a base de datos;
     * 
     * @var $connection \core\ORM\Database\Connection;
     */
    protected $connection;
    /**
     * Construye las sentencias SQL
     * 
     * @var $queryBuilder \NilPortugues\Sql\QueryBuilder\Builder\GenericBuilder
     */
    protected $Querybuilder;
    /**
     * Referencia de la tabla en la base de datos
     * 
     * @var string $table
     */
    protected $table;
    
    public function __construct(string $nameTable)
    {
        $this->table=$nameTable;

        $this->connection = new Connection([
            'driver' => new MysqlDriver(),
            'name'=> "connectionBlog"
            ]);
        
        $this->Querybuilder = new GenericBuilder();

    }

    public function find(int $idUsuario)
    {
        return 1;
    }
    public function findAll() : array
    {
        return ['hola'];
    }

    public function delete($id)
    {
        print("Delete Usuarios");
    }
}