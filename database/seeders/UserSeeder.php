<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'John Doe',
                'email' => 'john@example.com',
                'phone' => '123-456-7890'
            ],
            [
                'name' => 'Jane Doe',
                'email' => 'jane@example.com',
                'phone' => '098-765-4321'
            ],
            [
                'name' => 'Bob Smith',
                'email' => 'bob@example.com',
                'phone' => '555-123-4567'
            ],
            [
                'name' => 'Alice Brown',
                'email' => 'alice@example.com',
                'phone' => '555-555-5555'
            ],
            [
                'name' => 'Mike Davis',
                'email' => 'mike@example.com',
                'phone' => '555-123-4567'
            ],
            [
                'name' => 'Emily Chen',
                'email' => 'emily@example.com',
                'phone' => '555-555-5555'
            ],
            [
                'name' => 'Kevin White',
                'email' => 'kevin@example.com',
                'phone' => '555-123-4567'
            ],
            [
                'name' => 'Sarah Lee',
                'email' => 'sarah@example.com',
                'phone' => '555-555-5555'
            ],
            [
                'name' => 'David Kim',
                'email' => 'david@example.com',
                'phone' => '555-123-4567'
            ],
            [
                'name' => 'Lisa Nguyen',
                'email' => 'lisa@example.com',
                'phone' => '555-555-5555'
            ]
        ];

        \App\Models\User::factory()->createMany($users);
    }
}
