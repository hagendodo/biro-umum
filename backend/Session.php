<?php

class Session
{
    public $id;
    public $username;
    public $role;
    public $divisi;
    public $logged;

    public function setSession(Session $session): void
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $_SESSION['id'] = $session->id;
        $_SESSION['username'] = $session->username;
        $_SESSION['role'] = $session->role;
        $_SESSION['divisi'] = $session->divisi;
        $_SESSION['isLoggedIn'] = true;
    }

    public function isLogin()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        return isset($_SESSION['isLoggedIn']);
    }
}
