<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Customer;
use Faker\Generator as Faker;

class CustomerFactory extends Factory
{
    protected $model = Customer::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->firstname,
            'phone' => $this->faker->phoneNumber,
            'address' => $this->faker->address,
            'email' => $this->faker->unique()->safeEmail,
            'company' => $this->faker->company
        ];
    }
}


// $factory->define(Customer::class, function (Faker $faker) {
//     return [
//         'name' => $faker->firstname,
//         'phone' => $faker->phoneNumber,
//         'address' => $faker->address,
//         'email' => $faker->unique()->safeEmail,
//         'company' => $faker->company
//     ];
// });
