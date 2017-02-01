<?php
/**
 * Created by PhpStorm.
 * User: oem
 * Date: 1/21/17
 * Time: 9:01 PM
 */

namespace App\Models;

class Mailer
{

    public function sendemail($to, $subject, $body, $from, $errHuman)
    {

        // If there are no human errors, send the email
        if (empty($errHuman)) {

            if (mail ($to, $subject, $body, $from)) {

                $result='<div class="alert alert-success">Thank You! I will be in touch</div>';

            } else {

                $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';

            }

        }

        return $result;

    }
}