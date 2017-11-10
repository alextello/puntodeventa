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
      DB::table('users')->insert([
          'username' => 'at',
          'email' => str_random(10).'@gmail.com',
          'password' => bcrypt('secret'),
          'telefono' => '123456',
          'nombre' => 'alex',
          'tello' => 'tello',
      ]);

      DB::table('departamentos')->insert([
          'id' => '9',
          'nombre' => 'Quetzaltenango',
          'codigopostal' => '09001',
      ]);

      DB::table('municipios')->insert([
          'id' => '8'.
          'nombre' => 'San Juan Ostuncalco',
          'codigopostal' => '09009',
          'departamento' => '9',
      ]);

      DB::table('detalleUsers')->insert([
          'direccion' => '3ra. avenida zona 3'.
          'departamento' => '9',
          'municipio' => '8',
          'dpi' => '5392039489',
      ]);

      DB::table('roles')->insert([
          'name' => 'Administrador'.
          'slug' => 'admin',
      ]);

      DB::table('role_users')->insert([
          'user_id' => '1'.
          'role_id' => '1',
      ]);

    }
}
