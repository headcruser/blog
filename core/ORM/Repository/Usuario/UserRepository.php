<?php namespace core\ORM\Repository\Usuario;
use core\model\Usuario;
/**
 * User
 * 
 * Define las operaciones básicas para que el repositorio
 * pueda realizar consultas mas avanzadas
 * 
 * @version: php7
 * @author: Daniel Martinez <headcruser@gmail.com>
 * @copyright: Daniel Martinez
 * @license: GNU General Public License (GPL)
 */
class UserRepository
{
    /** @var InterfaceStorag $storageAdapter */
    private $storageAdapter;

    public function __construct(InterfaceStorage $storageAdapter)
    {
        $this->storageAdapter = $storageAdapter;
    }

    public function find(int $gameId)
    {
        $gameFromStorage = $this->storageAdapter->find($gameId);

        return null;
    }

    public function findAll() : array
    {
        return $this->buildCollection($this->storageAdapter->findAll());
    }

    private function buildCollection(array $items) : array
    {
        $collection = [];
        if (0 < count($items)) 
        {
            foreach ($items as $item) 
            {
                $collection[] = Usuario::create(
                    $item['id'],
                    $item['name'],
                    $item['email']
                );
            }
        }
        return $collection;
    }
}