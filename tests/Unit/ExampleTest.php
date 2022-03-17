<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;

class ExampleTest extends TestCase
{
    
    public function testBasicTest()
{
    $this->assertTrue(true);
}

public function testUserCreation()
{
    
    $user = new User([
        'name' => "T User",
        'email' => "test@mail.com",
        'password' => bcrypt("testpassword")

    ]);   

    $this->assertEquals('T User', $user->name);
    }
}


