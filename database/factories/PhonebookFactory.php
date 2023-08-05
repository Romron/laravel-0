<?php

namespace Database\Factories;

use App\Models\Phonebook;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Phonebook>
 */
class PhonebookFactory extends Factory {
	/**
	 * Define the model's default state.
	 *
	 * @return array<string, mixed>
	 */
	public function definition( $faker ): array {
		return [ 
			'name' => $faker->name(),
			'email' => $faker->email,
			'phone' => $faker->el64PhoneNumber,
			'created_at' => $faker->dataTime(),
			'updated_at' => $faker->dataTime(),
		];
	}
}


// $factory->define( Phonebook::class, function ($faker) {

// 	return [ 
// 		'name' => $faker->name(),
// 		'email' => $faker->email,
// 		'phone' => $faker->el64PhoneNumber,
// 		'created_at' => $faker->dataTime(),
// 		'updated_at' => $faker->dataTime(),
// 	];

// } );