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