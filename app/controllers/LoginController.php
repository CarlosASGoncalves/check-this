<?php
/**
 * Created by PhpStorm.
 * User: chipreu
 * Date: 1/19/17
 * Time: 9:22 AM
 */

namespace App\Controllers;

use App\Models\User as User;

use App\Core\App;

session_start();

class LoginController extends User
{
    public function index()
    {

        if ($this->is_loggedin() != "") {

            redirect('pages/login/home');

        }

        if (isset($_POST['btn-login'])) {

            $user_name = $_POST['txt_uname_email'];
            $user_mail = $_POST['txt_uname_email'];
            $user_pass = $_POST['txt_password'];

            if ($this->loginuser($user_name, $user_mail, $user_pass)) {

                return redirect('home');

            } else {

                $error = "Wrong Details !";

            }
        }

        return view( 'pages/login/index', ['error' => $error] ) ;

    }

    public function home()
    {

        if(!$this->is_loggedin())
        {
            redirect('login');
        }

        $user_id = $_SESSION['user_session'];

        $user = App::get('database')->selectUser( 'login', $user_id);

        return view('pages/login/home', compact('user'));

    }

    public function logout()
    {

        unset($_SESSION['user_session']);

        // Unset all of the session variables.
        $_SESSION = array();

        // If it's desired to kill the session, also delete the session cookie.
        // Note: This will destroy the session, and not just the session data!
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }

        // Destroy the session.
        session_destroy();

        return redirect('login');

    }


}