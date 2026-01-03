<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Customer::insert([
            [
                'name' => 'John Doe',
                'email' => 'john@example.com',
                'phone' => '9876543210',
                'address' => 'Chennai',
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane@example.com',
                'phone' => '9123456780',
                'address' => 'Bangalore',
            ],
            [
                'name' => 'Michael',
                'email' => 'michael@example.com',
                'phone' => '9988776655',
                'address' => 'Hyderabad',
            ],
            [
                'name' => 'Sarah',
                'email' => 'sarah@example.com',
                'phone' => '9090909090',
                'address' => 'Mumbai',
            ],
            [
                'name' => 'David',
                'email' => 'david@example.com',
                'phone' => '8888888888',
                'address' => 'Delhi',
            ],
        ]);
    }
}
