<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;

<<<<<<< HEAD
class ExampleTest extends TestCase
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
=======
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
>>>>>>> e5207cecf85cfa6f9bebd868367436d7208e2177
}


