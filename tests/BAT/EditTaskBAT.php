<?php

class EditTaskBAT {
  //edit normal-Task (task = ABCDEabcde)
  public function testEditEngAlphaTask()
  {
      $this->assertTrue(true);
  }

  //edit number Task (task = 1234567890)
  public function testEditNumberTask()
  {
     $this->assertTrue(true);
  }

  //edit spacial-Alphabets (++๑๑๒๒๓๔๔!@#$%^&*())
  public function testEditSpacialTask()
  {
      $this->assertTrue(true);
  }

  //edit non-text-task or Blank (task =   )
  public function testEditBlankTask()
  {
      $this->assertTrue(true);
  }




}