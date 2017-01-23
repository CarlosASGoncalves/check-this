<?php

//psr2 coding standart
namespace App\Controllers;

use App\Models\User as User;

class Pagescontroller extends User
{

    public function home()
    {
       
       return view('index');  
        
    }

    public function about()
    {

        $label = 'Check This!';

        return view('about', ['label' => $label]);
    
    }

    public function contact()
    {

        return view('contact');

    }

    public function users()
    {

        return view('users');


    }

    public function upload()
    {

        return view('upload');


    }

    public function login()
    {

        return view('login/index');

    }

}