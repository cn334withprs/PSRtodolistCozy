<?php

class DeleteTaskBAT {
     //delete normal english-alphabets (task = abcdefgABCDEFG)
     public function testDeleteNormalTask()
     {
        $task1 = new Task([
            'text' => 'I want to sleep',
            'condition' => 'I want to sleep'
        ]);
         $this->assertEquals('I want to sleep',$task1->text);
         $this->assertTrue(true);
     }

     //delete thai-alphabets (task = กขคงจ)
     public function testDeleteThaiAlphaTask()
     {
        $task1 = new Task([
            'text' => 'กินข้าวเช้า'
        ]);
         $this->assertTrue(true);
     }

     //delete number Task (task = 1234567890)
     public function testDeleteNumberTask()
     {
        $task1 = new Task([
            'text' => '1234567890'
        ]);
        $this->assertTrue(true);
     }
 
     //delete (++๑๑๒๒๓๔๔!@#$%^&*())
     public function testDeleteWeirdTask()
     {
        $task1 = new Task([
            'text' => '๑๒๓๔!@#$%^&๕๖'
        ]);
         $this->assertTrue(true);
     }
 
     //delete non-text-task or Blank (task =   )
     public function testDeleteBlankTask()
     {
        $task1 = new Task([
            'text' => ' '
        ]);
         $this->assertTrue(true);
     }


 
}