<?php


use Phinx\Seed\AbstractSeed;

class Autores extends AbstractSeed
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
        $faker=\Faker\Factory::create('en_US');
        for ($i=1; $i <=100; $i++) {
            $data[]=[
                'nombre'=>($i<50)?$faker->firstName('male'):$faker->firstName('female'),
                'apellidoP'=>($i<50)?$faker->firstNameMale:$faker->firstNameMale,
                'apellidoM'=>$faker->firstNameFemale,
                'telefono'=>$faker->isbn10,
                'id_usuario'=>rand(1, 100)
            ];
        }
        $this->table('autores')
            ->insert($data)
            ->save();
    }
}
