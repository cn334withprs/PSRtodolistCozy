<?php

class AddTaskBAT {
 
    //text in task more than 50 characters
    public function textMoreThan50Cha()
    {
        $user = new User([
            'addTask' => "111111111111111111111111111111111111111111111111111111111111",

        ]);

        $this->assertNotEquals('add test task', $user->addTask);
    }
 
    //non text in task
    public function nonTextInTask()
    {
        $user = new User([
            'addTask' => "",

        ]);

        $this->assertNotEquals('add test task', $user->addTask);
    }
    
}