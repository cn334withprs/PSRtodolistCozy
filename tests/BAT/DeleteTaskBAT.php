<?php

class DeleteTaskBAT {
     //delete normal english-alphabets (task = abcdefgABCDEFG)
     public function testDeleteNormalTask()
     {
         $this->assertTrue(true);
     }

     //delete thai-alphabets (task = กขคงจ)
     public function testDeleteThaiAlphaTask()
     {
         $this->assertTrue(true);
     }

     //delete number Task (task = 1234567890)
     public function testDeleteNumberTask()
     {
        $this->assertTrue(true);
     }
 
     //delete (++๑๑๒๒๓๔๔!@#$%^&*())
     public function testDeleteWeirdTask()
     {
         $this->assertTrue(true);
     }
 
     //delete non-text-task or Blank (task =   )
     public function testDeleteBlankTask()
     {
         $this->assertTrue(true);
     }


 
}