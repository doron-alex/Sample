<?php


namespace ADoronichev\Sample;


class ValidateString
{

    /**
     * Check if email address valid or not.
     *
     * @param string $email Email to check
     * @return bool
     */
    public static function isEmail(string $email): bool
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL)
            && preg_match('/@.+\./', $email);
    }

}
