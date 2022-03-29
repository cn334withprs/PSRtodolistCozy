<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Task;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'id' => 1,
            'name' => "Psrtodolist1",
            'email' => "psr1@mail.com",
            'password' => "password"

        ]);

        User::create([
            'id' => 2,
            'name' => "Psrtodolist2",
            'email' => "psr2@mail.com",
            'password' => "password"

        ]);

        User::create([
            'id' => 3,
            'name' => "Psrtodolist3",
            'email' => "psr3@mail.com",
            'password' => "password"

        ]);

        //Task seeder
        Task::create([
            'description' => "Psr1 Task",
            'user_id' => 1
  
        ]);

        Task::create([
            'description' => "Psr2 Task",
            'user_id' => 2
  
        ]);

        Task::create([
            'description' => "Psr3 Task",
            'user_id' => 3
  
        ]);
            
    }
}
