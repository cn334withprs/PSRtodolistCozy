<?php

class EditTaskBAT {
  //edit normal-Task (task = ABCDEabcde)
  public function testEditEngAlphaTask()
  {
    $task1 = new Task([
        'text' => 'ABCDEabcd',
        'condition' => 'ABCDEabcd'
    ]);
    $this->assertEquals('ABCDEabcd',$task1->text);
  }

  //edit number Task (task = 1234567890)
  public function testEditNumberTask()
  {
    $task1 = new Task([
        'text' => '1234567890',
        'condition' => '1234567890'
    ]);
    $this->assertEquals('1234567890',$task1->text);

  }

  //edit spacial-Alphabets (++๑๑๒๒๓๔๔!@#$%^&*())
  public function testEditTask()
  {
    $task1 = new Task([
        'text' => '++๑๑๒๒๓๔๔!@#$%^&*()',
        'condition' => '++๑๑๒๒๓๔๔!@#$%^&*()'
    ]);
    $this->assertEquals('++๑๑๒๒๓๔๔!@#$%^&*()',$task1->text);
  }

  //edit non-text-task or Blank (task =   )
  public function testEditBlankTask()
  {
    $task1 = new Task([
        'text' => ' ',
        'condition' => ' '
    ]);
    $this->assertEquals(' ',$task1->text);
  }




}