<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      $role = [
            'name' => 'Administrator',
            'slug' => 'administrator',
            ];
$adminRole = Sentinel::getRoleRepository()->createModel()->fill($role)->save();

$roleuser = [
      'name' => 'User',
      'slug' => 'user',
      ];
$nRole = Sentinel::getRoleRepository()->createModel()->fill($roleuser)->save();

$admin = [
			[
        'username' => 'at',
        'first_name' => 'alex',
        'last_name' => 'tello',
        'genero' => 'M',
        'residencia' => 'san juan',
        'nacimiento' => '2012/12/12',
        'telefono' => '3827342',
				'email'    => 'demo1@example.com',
				'password' => 'pass',
			],
			[
        'username' => 'et',
        'first_name' => 'edwin',
        'last_name' => 'tello',
        'telefono' => '38328392',
        'genero' => 'M',
        'residencia' => 'san juan',
        'nacimiento' => '2012/12/12',
        'email'    => 'demo2@example.com',
        'password' => 'pass',
			],
		];

    foreach($admin as $ad){
      $nadmin = Sentinel::registerAndActivate($ad);
      $nadmin->roles()->attach($adminRole);
    }


    DB::table('servicio')->insert([
              'codigo' => str_random(2),
              'tipo' => 'Consulta',
              'descripcion' => 'inspeccion de rutina',
              'costo' => '200',
      ]);

    }
}
