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
            'name_customer' => $this->faker->firstname,
            'phone_customer' => $this->faker->phoneNumber,
            'address_customer' => $this->faker->address,
            'email_customer' => $this->faker->unique()->safeEmail,
            'city_customer' => $this->faker->city
        ];
    }
}


// $factory->define(Customer::class, function (Faker $faker) {
//     return [
//         'name_customer' => $faker->firstname,
//         'phone_customer' => $faker->phoneNumber,
//         'address_customer' => $faker->address,
//         'email_customer' => $faker->unique()->safeEmail,
//         'city_customer' => $faker->city
//     ];
// });
