<?php

namespace Tests\Unit;
<<<<<<< HEAD
use App\Models\Task;

class TaskUnitTest extends TestCase{

    public function user_id_description() {
        $task1 = new Task([
            'user_id' => 1,
            'description' => "Psr Task Ryu"

        ]);
        $this->assertEquals(1,$task->user_id);
        $this->assertEquals('Psr Task Ryu',$task->description);

        $task2 = new Task([
            'user_id' => 2,
            'description' => "Psr Task Pure"

        ]);
        $this->assertEquals(2,$task->user_id);
        $this->assertEquals('Psr Task Pure',$task->description);

        $task3 = new Task([
            'user_id' => 3,
            'description' => "Psr Task sajah"

        ]);
        $this->assertEquals(3,$task->user_id);
        $this->assertEquals('Psr Task sajah',$task->description);
      
    }

    public function user_email_name(){
        $email1 = new Task([
            'user_email' => "user1@psr.com",
            'name' => "Phitsinee"

        ]);
        $this->assertEquals('Phitsinee',$email1->name);
        $this->assertEquals('user1@psr.com',$email1->user_email);

        $email2 = new Task([
            'user_email' => "user2@psr.com",
            'name' => "Natnicha"

        ]);
        $this->assertEquals('Natnicha',$email2->name);
        $this->assertEquals('user2@psr.com',$email1->user_email);

        $email3 = new Task([
            'user_email' => "user3@psr.com",
            'name' => "Thitiporn"

        ]);
        $this->assertEquals('Thitiporn',$email3->name);
        $this->assertEquals('user3@psr.com',$email3->user_email);

    }
    public function email_password(){

    }
    public function password_check(){
        
    }

}
=======

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Task;

class TaskUnitTest extends TestCase
{ 

    public function testTaskCreation()
    {

    }

    //Test Schema that description is correct
    public function test_schema_description()
    {

    }

    //Test Schema that User id is correct
    public function test_schema_userID()
    {

    }

    //Test Schema รองรับภาษาไทย




    //Test Schema รองรับคำที่ยาวมากได้ไหม

    //Test Schema null ได้ไหม





}


>>>>>>> e5207cecf85cfa6f9bebd868367436d7208e2177
