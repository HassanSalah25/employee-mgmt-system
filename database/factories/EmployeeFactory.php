<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class EmployeeFactory extends Factory
{
    protected $model = Employee::class;

    public function definition()
    {
        return [
            'lastname' => $this->faker->name,
            'firstname' => $this->faker->name,
            'middlename' => $this->faker->name,
            'address' => $this->faker->address,
            'city_id' => $this->faker->numberBetween(1,100),
            'state_id' => $this->faker->numberBetween(1,100),
            'country_id' => $this->faker->numberBetween(1,100),
            'zip' => $this->faker->unique()->safeEmail,
            'age' => $this->faker->unique()->safeEmail,
            'birthdate' => $this->faker->unique()->safeEmail,
            'date_hired' => $this->faker->unique()->safeEmail,
            'department_id' => $this->faker->unique()->safeEmail,
            'division_id' => $this->faker->unique()->safeEmail,
            'picture' => $this->faker->unique()->safeEmail,
        ];
    }
}
