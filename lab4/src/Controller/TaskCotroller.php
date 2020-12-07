<?php

namespace App\Controller;

use App\Form\Type\TaskType;
// ...

class TaskController extends AbstractController
{
    public function new(): Response
    {
        // creates a task object and initializes some data for this example
        $task = new Task();
        $task->setTask('Write a blog post');
        $task->setDueDate(new \DateTime('tomorrow'));

        $form = $this->createForm(TaskType::class, $task);

        // ...
    }
}



?>