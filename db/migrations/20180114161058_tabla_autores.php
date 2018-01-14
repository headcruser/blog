<?php


use Phinx\Migration\AbstractMigration;

class TablaAutores extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
        $autores = $this->table('autores');
        $autores->addColumn('nombre', 'string', ['limit' => 10])
              ->addColumn('apellidoP', 'string', ['limit' => 60])
              ->addColumn('apellidoM', 'string', ['limit' => 255])
              ->addColumn('telefono', 'string', ['limit' => 10])
              ->addColumn('id_usuario', 'integer')
              ->addForeignKey('id_usuario', 'usuarios', ['id'], ['delete'=> 'RESTRICT', 'update'=> 'CASCADE'])
              ->save();
    }
}
