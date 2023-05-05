<?php
function generate_random_psw($length, $possible_characters)
{
    if ($length && is_numeric($length)) {
        $password = '';
        for ($i = 0; $i < $length; $i++) {
            $number = rand(0, strlen($possible_characters));
            $password .= $possible_characters[$number];
        }
        return $password;
    }
}
