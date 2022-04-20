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
}


