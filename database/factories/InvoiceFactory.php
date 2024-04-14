<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

class InvoiceFactory extends Factory {

  public function definition(): array {
    $status = $this->faker->randomElement(['B', 'P', 'V']);

    return [
      'customer_id' => Customer::factory(),
      'amount' => $this->faker->numberBetween(100, 20000),
      'status' => $status,
      'billed_dated' => $this->faker->dateTimeThisDecade(),
      'paid_dated' => $status == 'P' ? $this->faker->dateTimeThisDecade() : NULL,
    ];
  }
}
