<?php

require_once 'Container.php';
require_once 'Database.php';
require_once 'Logger.php';
require_once 'CommentsController.php';

$container = new Container();
$container->set('logger', function () {
    return new Logger();
});

$container->set('database', function () {
    // db config
    $dbUser = 'root';
    $dbPass = 'root';
    $dbName = 'sample';
    $dbHost = 'localhost';

    return new Database(
        $dbHost,
        $dbUser,
        $dbPass,
        $dbName
    );
});

$container->set('CommentsController', function ($container) {
    $logger = $container->get('logger');
    $database = $container->get('database');

    return new CommentsController($logger, $database);
});

$commentsController = $container->get('CommentsController');
$commentsController->all();