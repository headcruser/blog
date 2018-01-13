<?php


use Phinx\Seed\AbstractSeed;

class Clientes extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    public function run()
    {
         $data=[];
        $faker=\Faker\Factory::create('es_ES');
        for ($i=1; $i <=100; $i++) {
            $data[]=[
                'alias'=>trim($faker->text(10), '.'),
                'email'=>$faker->email,
                'password'=>$faker->password,
                'fecha_registro'=>date("Y-m-d H:i:s"),// 2001-03-10 17:16:18 (DATETIME de MySQL),
                'activo'=>1,
                'foto'=>'s/f'
            ];
        }
        $this->table('usuarios')
            ->insert($data)
            ->save();
    }
}
