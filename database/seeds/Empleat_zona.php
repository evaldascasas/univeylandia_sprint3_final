<?php

use Illuminate\Database\Seeder;

class Empleat_zona extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('empleat_zona')->insert([
          'id_zona' => '1',
          'id_empleat' => '1',
          'data_inici' => '2019-12-18',
          'data_fi' => '2019-12-20',
      ]);

      DB::table('empleat_zona')->insert([
          'id_zona' => '2',
          'id_empleat' => '2',
          'data_inici' => '2019-12-19',
          'data_fi' => '2019-12-21',
      ]);

    }
}
