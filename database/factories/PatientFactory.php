<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Patient::class, function (Faker $faker) {
	return [
		'user_id' 			=> 1,
		'patient_number' 	=> $faker->numerify('PA-#######'),
		'name' 				=> $faker->firstName . ' ' . $faker->lastName,
		'gender' 			=> $faker->randomElement(['M', 'F', 'U']),
		'date_of_birth' 	=> $faker->dateTimeBetween('-65 years', '-3 years'),
		'email' 			=> $faker->safeEmail,
		'datetime_phone' 	=> $faker->numerify('(###) ###-####'),
		'mobile_phone' 		=> $faker->numerify('(###) ###-####'),
		'health_status' 	=> $faker->randomElement(['Patient', 'Former Patient', 'Deceased', 'Archived']),
		'medicare_id' 		=> 'MDC-' . $faker->swiftBicNumber
	];
});
