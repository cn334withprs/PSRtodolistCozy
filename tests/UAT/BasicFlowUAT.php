<?php

class BasicFlowUAT {
    //add task
    public function test_add_task_todolist()
    {
        $task1 = new Task([
            'addTask' => "Hello world",

        ]);

        $this->assertEquals('Hello world', $user->addTask);
    }

    //edited task
    public function test_edit_task_todolist()
    {
        $task1 = new Task([
            'text' => 'Hello world',
            'condition' => 'Hello world'
        ]);
        $this->assertEquals('Hello world',$task1->text);
    }

    //deleted task
    public function test_delete_task_todolist()
    {
        $task1 = new Task([
            'text' => 'Hello world',
            'condition' => 'Hello world'
        ]);
         $this->assertEquals('Hello world',$task1->text);
         $this->assertTrue(true);
    }

    //test register
    public function test_register_func()
    {
        $user = new User([
            'name' => "Psrtodolist",
            'email' => "psr@mail.com",
            'password' => bcrypt("testpassword")

        ]);   

        $this->assertEquals('Psrtodolist', $user->name);
        $this->assertEquals('psr@mail.com', $user->email);
    }

    //test login func
    public function test_login_func()
    {
        $user = new User([
            'email' => "psr@mail.com",
            'password' => bcrypt("testpassword")

        ]);

        $this->assertNotEquals('psr@mail.com', $user->email);
    }

}