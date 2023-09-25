<?php

// Function to add a task to the task list
function addTask($task) {
    $tasks = file_get_contents("tasks.txt");
    $tasks .= $task . PHP_EOL;
    file_put_contents("tasks.txt", $tasks);
    echo "Task added successfully.\n";
}

// Function to display the list of tasks
function displayTasks() {
    $tasks = file("tasks.txt");
    if (empty($tasks)) {
        echo "No tasks found.\n";
    } else {
        echo "Task List:\n";
        foreach ($tasks as $key => $task) {
            echo ($key + 1) . ". " . trim($task) . "\n";
        }
    }
}

// Function to delete a task by its index
function deleteTask($index) {
    $tasks = file("tasks.txt");
    if (isset($tasks[$index])) {
        unset($tasks[$index]);
        file_put_contents("tasks.txt", implode("", $tasks));
        echo "Task deleted successfully.\n";
    } else {
        echo "Invalid task index.\n";
    }
}

// Function to clear all tasks
function clearAllTasks() {
    file_put_contents("tasks.txt", "");
    echo "All tasks cleared.\n";
}

// Menu
while (true) {
    echo "Task List Manager Menu:\n";
    echo "1. Add Task\n";
    echo "2. Task List\n";
    echo "3. Delete Task\n";
    echo "4. Clear All\n";
    echo "5. Exit\n";

    $choice = readline("Enter your choice: ");

    switch ($choice) {
        case 1:
            $task = readline("Enter the task: ");
            addTask($task);
            break;
        case 2:
            displayTasks();
            break;
        case 3:
            $index = readline("Enter the index of the task to delete: ");
            deleteTask($index - 1); // Adjust index to match array indexing
            break;
        case 4:
            clearAllTasks();
            break;
        case 5:
            exit("Goodbye!\n");
        default:
            echo "Invalid choice. Please try again.\n";
    }
}
?>
