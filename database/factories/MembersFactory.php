<?php

namespace Database\Factories;

use App\Models\Members;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Members>
 */
class MembersFactory extends Factory
{
//     * The name of the factory's corresponding model.
//     *
//     * @var string
//     */
   protected $model = Members::class;

   /**
    * Define the model's default state.
    *
    * @return array
    */
   public function definition()
   {
       return [
           'name' => $this->faker->name,
           'birtday' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
           'age' => $this->faker->numberBetween($min = 18, $max = 90),
           'address' => $this->faker->address,
           'phone' => $this->faker->phoneNumber,
           'email' => $this->faker->unique()->safeEmail,
           'gender' => $this->faker->randomElement(['male', 'female']),
           'plan' => $this->faker->randomElement(['basic', 'premium', 'gold']),
           'height' => $this->faker->numberBetween($min = 150, $max = 200),
           'weight' => $this->faker->numberBetween($min = 50, $max = 100),
       ];
   }
}
