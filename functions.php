<?php
function dd($data) {
    echo "<pre>";
    print_r($data);
    echo "</pre>";
    die();
}

function urlIs($url) {
    return $_SERVER['REQUEST_URI'] === $url;
}

function authorize($condition, $status = 403) {
    if (!$condition) {
        abort($status);
    }
}

function base_path($path = '')
{
    return BASE_PATH . $path;
}

function view($path, $attributes = [])
{
    extract($attributes);
    require base_path('views/' . $path);
}