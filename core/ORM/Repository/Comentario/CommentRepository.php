<?php namespace core\ORM\Repository\Comentario;
use core\model\Comentario;
use core\ORM\Storage\InterfaceStorage;
/**
 * CommentRepository
 * 
 * Repositorio encargado de construir las consultas básicas
 * de los comentarios.
 * 
 * @version: php7
 * @author: Daniel Martinez <headcruser@gmail.com>
 * @copyright: Daniel Martinez
 * @license https://opensource.org/licenses/mit-license.php MIT License
 */
class CommentRepository
{
    /** @var InterfaceStorag $storageAdapter */
    private $storageAdapter;

    public function __construct(InterfaceStorage $storageAdapter)
    {
        $this->storageAdapter = $storageAdapter;
    }

    public function find(int $idComment)
    {
        return $this->buildCollection($this->storageAdapter->find($idComment));
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
                $collection[] = Comentario::create(
                    $item['id'],
                    $item['autor_id'],
                    $item['entrada_id'],
                    $item['titulo'],
                    $item['texto'],
                    $item['fecha']
                );
            }
        }
        return $collection;
    }
}