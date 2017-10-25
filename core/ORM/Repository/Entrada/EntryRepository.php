<?php namespace core\ORM\Repository\Entrada;
use core\model\Entradas;
use core\ORM\Storage\interfaceStorage;
/**
 * EntryRepository
 * 
 * Repositorio encargado de construir las consultas básicas
 * de las entradas.
 * 
 * @version: php7
 * @author: Daniel Martinez <headcruser@gmail.com>
 * @copyright: Daniel Martinez
 */
class EntryRepository
{
    /** @var InterfaceStorag $storageAdapter */
    private $storageAdapter;

    public function __construct(InterfaceStorage $storageAdapter)
    {
        $this->storageAdapter = $storageAdapter;
    }

    public function find(int $idUser)
    {
        return $this->buildCollection($this->storageAdapter->find($idUser));
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
                $collection[] = Entradas::create(
                    $item['id'],
                    $item['autor_id'],
                    $item['url'],
                    $item['titulo'],
                    $item['texto'],
                    $item['fecha'],
                    $item['activa']
                );
            }
        }
        return $collection;
    }
}