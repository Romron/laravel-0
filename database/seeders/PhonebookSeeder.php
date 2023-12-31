<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PhonebookSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 */
	public function run(): void {
		factory( Phonebook::class, 100 )->create();
	}
}