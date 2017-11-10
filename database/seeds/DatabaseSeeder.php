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

$admin = [
			[
        'username' => 'at',
        'nombre' => 'alex',
        'apellido' => 'tello',
        'telefono' => '3827342',
				'email'    => 'demo1@example.com',
				'password' => 'pass',
			],
			[
        'username' => 'et',
        'nombre' => 'edwin',
        'apellido' => 'tello',
        'telefono' => '38328392',
        'email'    => 'demo2@example.com',
        'password' => 'pass',
			],
		];

    foreach($admin as $ad){
      $nadmin = Sentinel::registerAndActivate($ad);
      $nadmin->roles()->attach($adminRole);
    }


    }
}
