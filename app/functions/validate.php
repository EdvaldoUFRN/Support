<?php

function validate(array $fields)
{

    $request = request();

    $validate = [];
    foreach ($fields as $key => $type) {
        switch ($type) {
            case 's':
                $validate[$key] = strip_tags($request[$key]);
                break;

            case 'i':
                $validate[$key] = filter_var($request[$key], FILTER_SANITIZE_NUMBER_INT);
                break;

            case 'e':
                $validate[$key] = filter_var($request[$key], FILTER_SANITIZE_EMAIL);
                break;
        }
    }

    return (object) $validate;
}


function isEmpty()
{

    $request = request();

    $empty = false;

    foreach ($request as $key => $value) {
        if (empty($request[$key])) {
            $empty = true;
        }
    }

    return $empty;
}
