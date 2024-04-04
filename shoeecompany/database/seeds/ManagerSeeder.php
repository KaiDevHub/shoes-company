<?php

use App\Manager;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ManagerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $managers = [
            [
                'firstName' => 'John',
                'lastName' => 'Smith',
                'phone_number' => '555-555-5555',
                'email' => 'johnsmith@example.com',
                'password' => Hash::make('password'),
            ],
            [
                'firstName' => 'Jane',
                'lastName' => 'Smith',
                'phone_number' => '555-555-5556',
                'email' => 'janesmith@example.com',
                'password' => Hash::make('password'),
            ]
        ];

        foreach ($managers as $manager) {
            $existingManager = Manager::where('email', $manager['email'])->first();
            if (!$existingManager) {
                Manager::create($manager);
            } else {
                // handle the duplicate email address
            }
        }
    }
}