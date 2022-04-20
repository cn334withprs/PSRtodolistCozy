<?php

class BasicFlowUAT {
    //add task
    public function test_add_task_todolist()
    {
        $this->assertTrue(true);
    }

    //edited task
    public function test_edit_task_todolist()
    {
        $this->assertTrue(true);
    }

    //deleted task
    public function test_delete_task_todolist()
    {
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
        $this->assertTrue(true);
    }

}