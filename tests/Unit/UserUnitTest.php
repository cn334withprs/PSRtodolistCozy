<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;

class UserUnitTest extends TestCase
{
    
    public function testBasicTest()
    {
        $this->assertTrue(true);
    }

    public function testUserCreation()
    {
        
        $user = new User([
            'name' => "Psrtodolist",
            'email' => "psr@mail.com",
            'password' => bcrypt("testpassword")

        ]);   

        $this->assertEquals('Psrtodolist', $user->name);
        $this->assertEquals('psr@mail.com', $user->email);
    }

    public function testThaiName()
    {

        $user = new User([
            'name' => "เทสชื่อ",
            'email' => "psr@mail.com",
            'password' => bcrypt("testpassword")

        ]);

        $this->assertEquals('เทสชื่อ', $user->name);
    }

    public function testThaiEmail()
    {

        $user = new User([
            'name' => "Psrtodolist",
            'email' => "เทสอีเมล@mail.com",
            'password' => bcrypt("testpassword")

        ]);

        $this->assertEquals('เทสอีเมล@mail.com', $user->email);
    }


}


