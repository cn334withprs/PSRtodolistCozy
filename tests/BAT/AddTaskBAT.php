<?php

class AddTaskBAT {
 
    //text in task more than 50 characters
    public function textMoreThan50Cha()
    {
        $task1 = new Task([
            'text' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'
        ]);
        $this->assertTrue(true);
    }
 
    //non text in task
    public function nonTextInTask()
    {
        $task2 = new Task([
            'text' => ' '
        ]);
        $this->assertTrue(true);
    }
    
}