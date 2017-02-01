<?php

namespace App\Models;

use App\Core\App;

use PDO;

class User
{

    public function loginuser($user_name, $user_mail, $user_pass)
    {

        $stmt = App::get('database')->selectUsersLogin(

            'login',

            $user_name,

            $user_mail,

            $user_pass

        );

        $userRow = $stmt->fetch(PDO::FETCH_ASSOC);

        if($stmt->rowCount() > 0)
        {
            if(password_verify($user_pass, $userRow['user_pass']))
            {

                $_SESSION['user_session'] = $userRow['user_id'];


                return true;

            }
            else
            {
                return false;
            }
        }

    }
//
    public function is_loggedin()
    {

        if(isset($_SESSION['user_session'])) // todo: refactor this
        {
            return true;
        }

    }

}