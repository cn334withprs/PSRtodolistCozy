<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Task;

class TaskUnitTest extends TestCase
{ 

    public function testTaskCreation()
    {
        
        $task = new Task();
        $task->description = "test PSR Task";
        $task->user_id = 1;

        $this->assertEquals('test PSR Task', $task->description);

    }
}


