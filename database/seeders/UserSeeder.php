<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Task;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Task seeder
        Task::create([
            'name' => "Psrtodolist",
            'email' => "psr@mail.com",

        ]);
            
    }
}
