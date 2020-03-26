<?php
# Why Tasks: Because OOP says, hunt down the nouns

class Task
{
    public $description;

    public $title;

    public $completed = false;

    public function __construct($task_title, $task_desc)
    {
        $this->title = $task_title;
        $this->description = $task_desc;
        var_dump($this->title, $this->description);
    }

    public function complete()
    {
        $this->completed = true;
    }
}

$task1 = new Task('Learn OOP', 'Here is some description for task1');
$task2 = new Task('Pick up groceries', 'And another description specifically for task2');

$task2->complete();
// var_dump($task1->completed);
