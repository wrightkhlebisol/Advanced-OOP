<?php 
    # Why Tasks: Because OOP says, hunt down the nouns

class Task{
    public $description;

    public function __construct($task){
        var_dump('CALLED');
        $this->description = $task;
        echo $this->description;
    }
}

$task = new Task('Learn OOP');
// var_dump($task->description);