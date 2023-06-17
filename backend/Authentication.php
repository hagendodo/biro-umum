<?php

class Authentication extends Session
{
    public function login(User $user)
    {

    }

    public function register(User $user)
    {

    }

    public function roleCheck($role): void
    {
        echo '<script>window.history.back();</script>';
    }
}