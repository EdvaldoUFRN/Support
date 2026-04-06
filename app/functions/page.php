<?php


function load()
{
    $page = filter_input(INPUT_GET, 'page', FILTER_DEFAULT);

    $page = (!$page) ? 'pages/home.php' : "pages/{$page}.php";


    if (!file_exists("." . DIRECTORY_SEPARATOR . "{$page}")) {
        throw new \Exception("Oops, something went wrong!");
    }

    return $page;
}
