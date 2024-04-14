<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder {

  public function run(): void {
    Customer::factory()
      ->count(25)
      ->hasInvoices(20)
      ->create();
    Customer::factory()
      ->count(100)
      ->hasInvoices(3)
      ->create();
    Customer::factory()
      ->count(100)
      ->hasInvoices(1)
      ->create();
    Customer::factory()
      ->count(5)
      ->create();
  }
}
