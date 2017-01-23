<?php
/**
 * Created by PhpStorm.
 * User: oem
 * Date: 1/21/17
 * Time: 8:34 PM
 */

namespace App\Controllers;

use App\Models\Mailer as Mailer;

class ContactController extends Mailer
{
    public function index()
    {
        if (isset($_POST["submit"])) {

            $name = $_POST['name'];

            $email = $_POST['email'];

            $message = $_POST['message'];

            $human = intval($_POST['human']);

            $from = "Demo Contact Form";

            $to = "chipreu@gmail.com";

            $subject = "Message from Contact Demo ";

            $body = "From: $name\n E-Mail: $email\n Message: $message";

            //Check if simple anti-bot test is correct
            if ($human !== 5) {

                $errHuman = 'Your anti-spam is incorrect';

            }

            $result = $this->sendemail($to, "$subject", $body, $from, $errHuman);

            return view('contact', [

                'name' => $name,

                'email' => $email,

                'message' => $message,

                'errHuman' => $errHuman,

                'result' => $result

            ]);

        }

    }

}