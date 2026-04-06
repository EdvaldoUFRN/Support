<?php

function flash($key, $message, $type = 'danger')
{

    //adiciona a mensagem.
    if (!isset($_SESSION['flash'][$key])) {
        # code...
        $_SESSION['flash'][$key] = "<span class='alert alert-{$type}'>" . $message . "</span>";
    }
}

function get($key)
{

    //resgata a mensagem
    if (isset($_SESSION['flash'][$key])) {
        $message = $_SESSION['flash'][$key];

        unset($_SESSION['flash'][$key]);

        return $message ?? '';
    }
}
