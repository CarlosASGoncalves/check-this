<?php

//psr2 coding standart
namespace App\Controllers;

use App\Models\User as User;

class Pagescontroller extends User
{

    public function home()
    {
       
       return view('pages/home');
        
    }

    public function about()
    {

        $label = 'Check This!';

        return view('pages/about', ['label' => $label]);
    
    }

    public function contact()
    {

        return view('pages/contact');

    }

    public function users()
    {

        return view('pages/names/index');


    }

    public function upload()
    {

        return view('pages/upload/index');


    }

    public function login()
    {

        return view('pages/login/index');

    }

}