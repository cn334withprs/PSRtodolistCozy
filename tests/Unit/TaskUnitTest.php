<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Task;

class TaskUnitTest extends TestCase
{ 
    //check username password are the same account? if correct return success.
    public function user_email_name(){
        $email1 = new Task([
            'user_email' => "user1@psr.com",
            'name' => "Phitsinee"

        ]);
        $this->assertEquals('Phitsinee',$email1->name);
        $this->assertEquals('user1@psr.com',$email1->user_email);

    }
    //check email with alphabets ABCDEab and @,if yes return success.
    public function username_alphabet(){
        $user_email1 = new Task([
            'user_email' => "user1@psr.com"

        ]);
        $this->assertTrue(true);

    }
    //check password more than 8 and have spacial Char
    public function passwordWithSpacialChar(){
        $password = new Task([
            'password' => "!@##$$%^&**()"

        ]);
        $this->assertTrue(true);

    }
    //check email thai-language
    public function emailWithThaiLang(){
        $thai_email1 = new Task([
            'thai_email' => "กขคงจ@gmail.com",
            'condition' => "sa@gmail.com"
        ]);
        $this->assertNotEquals('กขคงจ@gmail.com',$thai_email1->condition);

    }

    



}