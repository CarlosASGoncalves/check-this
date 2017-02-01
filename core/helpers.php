<?php

/**
 * Require a view
 *
 * @param string $name
 * @param array $data
 *
 */
function view($controller, $data = [])
{

    extract($data);

    return require "app/views/{$controller}.view.php";

}

/**
 * Redirect to a view
 *
 * @param  string $path
 */
function redirect($path)
{

    header("Location: /{$path}");

}