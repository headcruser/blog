<?php namespace core\ORM\Repository\Usuario;
use core\model\Usuario;
use core\ORM\Storage\interfaceStorage;
/**
 * UserRepository
 * 
 * Repositorio Encargado de recuperar la información del usuario.
 * Esta clase provee de metodos utiles para la busqueda de elementos.
 * 
 * @version: php7
 * @author: Daniel Martinez <headcruser@gmail.com>
 * @copyright: Daniel Martinez
 * @license https://opensource.org/licenses/mit-license.php MIT License
 */
class UserRepository
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
                $collection[] = Usuario::create(
                    $item['id'],
                    $item['nombre'],
                    $item['email'],
                    $item['password'],
                    $item['fecha_registro'],
                    $item['activo']
                );
            }
        }
        return $collection;
    }
}