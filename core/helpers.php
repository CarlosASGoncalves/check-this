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

    extract($data);// turns ['name' => 'joe'] into $name = 'joe' and than the view can use the $name variable to disply data. Probelm with colision

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