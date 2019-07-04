<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      $this->call(CategoriaSeeder::class);
      $this->call(ProductTableSeeder::class);
			
			
			DB::table('users')->insert([
            'name' => 'Marcos',
            'last_name' => 'Ferrini',
            'email' => 'marcos@dh.com',
            'password' => bcrypt('123456'),
            'role' => '9',
        ]);
  
      DB::table('users')->insert([
        'name' => 'Valeria',
        'last_name' => 'V',
        'email' => 'valeria@dh.com',
        'password' => bcrypt('123456'),
        'role' => '9',
      ]);
      DB::table('users')->insert([
        'name' => 'Ignacio',
        'last_name' => 'I',
        'email' => 'ignacio@dh.com',
        'password' => bcrypt('123456'),
        'role' => '9',
      ]);
      DB::table('users')->insert([
        'name' => 'Adela',
        'last_name' => 'A',
        'email' => 'adela@dh.com',
        'password' => bcrypt('123456'),
        'role' => '9',
      ]);
			
       /*App\User::updateOrCreate([
            'name' => 'Marcos',
            'email' => 'mferrini@hotmail.com',
            'password' => bcrypt('123456'),
            'role' => '9',
        ]);*/
    }
}
