<?php

use App\Staff;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $staffs = [
            [
                'firstName' => 'John',
                'lastName' => 'Doe',
                'staffSalary' => 50000,
                'phone_number' => '555-555-5555',
                'email' => 'johndoe@example.com',
                'password' => Hash::make('password'),
            ],
            [
                'firstName' => 'Jane',
                'lastName' => 'Doe',
                'staffSalary' => 60000,
                'phone_number' => '555-555-5556',
                'email' => 'janedoe@example.com',
                'password' => Hash::make('password'),
            ]
        ];

        foreach ($staffs as $staff) {
            $existingStaff = Staff::where('email', $staff['email'])->first();
            if (!$existingStaff) {
                Staff::create($staff);
            } else {
                session()->flash('error', 'The email address '.$staff['email'].' is already taken. Please choose a different email address.');
            }
        }
    }
}