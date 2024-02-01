<?php

require_once __DIR__ . "/entity/ToDoList.php";
require_once __DIR__ . "/helper/inputHelper.php";
require_once __DIR__ . "/repository/todoListRepository.php";
require_once __DIR__ . "/service/TodoListService.php";
require_once __DIR__ . "/View/TodoListView.php";
require_once __DIR__ . "/config/Database.php";

use Repository\TodoListRepositoryImpl;
use Service\TodoListServiceImpl;
use View\TodoListView;

echo "App Todolist" . PHP_EOL;

$connection = \Config\Database::getConnection();
$todoListRepository = new TodoListRepositoryImpl($connection);
$todoListService = new TodoListServiceImpl($todoListRepository);
$todoListView = new TodoListView($todoListService);

$todoListView->showTodoList();