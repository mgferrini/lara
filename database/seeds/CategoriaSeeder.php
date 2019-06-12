<?php

use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
	/**
	* Run the database seeds.
	*
	* @return void
	*/
	public function run()
	{
		DB::table('categorias')->insert([
			'name' => 'Jabones',
			'top' => true,
			'parent' => 0,
		]);

		DB::table('categorias')->insert([
			'name' => 'Aceites',
			'top' => true,
			'parent' => 0,
		]);

		DB::table('categorias')->insert([
			'name' => 'Cremas',
			'top' => true,
			'parent' => 0,
		]);

		DB::table('categorias')->insert([
			'name' => 'Cabello',
			'top' => true,
			'parent' => 0,
		]);
		
		DB::table('categorias')->insert([
			'name' => 'Terapeuticos',
			'top' => false,
			'parent' => 1,
		]);
		
		DB::table('categorias')->insert([
			'name' => 'Dermatologicos',
			'top' => false,
			'parent' => 1,
		]);
		
		DB::table('categorias')->insert([
			'name' => 'Liquidos',
			'top' => false,
			'parent' => 1,
		]);
		
		DB::table('categorias')->insert([
			'name' => 'Aromaticos',
			'top' => false,
			'parent' => 1,
		]);
		
		DB::table('categorias')->insert([
			'name' => 'Cosmeticos',
			'top' => false,
			'parent' => 2,
		]);
		
		DB::table('categorias')->insert([
			'name' => 'Alimentacion',
			'top' => false,
			'parent' => 2,
		]);
		
		DB::table('categorias')->insert([
			'name' => 'Vegetales',
			'top' => false,
			'parent' => 2,
		]);
		
		DB::table('categorias')->insert([
			'name' => 'Corporales',
			'top' => false,
			'parent' => 3,
		]);
		
		DB::table('categorias')->insert([
			'name' => 'Faciales',
			'top' => false,
			'parent' => 3,
		]);
	}
}
