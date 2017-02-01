<?php

//psr2 coding standart
namespace App\Controllers;

use App\Core\App; 

class UsersController
{
    /**
     * Show all names/users.
     */
    public function index()
    {
        $users = App::get('database')->selectAll('users');

        return view('pages/names/index', compact('users'));

    }

    /**
     * Store a new name/user in the database.
     */
    public function store()
    {
        App::get('database')->insertUser('users', [

            'name' => $_POST['name']

        ]);

        return redirect('users');
    }

}