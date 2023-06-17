<?php

class Session
{
    private $id;
    private $username;
    private $email;
    private $role;
    private $divisi;
    private $logged;

    public function setSession(Session $session): void
    {
        $this->id = $session->id;
        $this->username = $session->username;
        $this->email = $session->email;
        $this->role = $session->role;
        $this->divisi = $session->divisi;
        $this->logged = true;
    }

    public function isLogin()
    {
        return isset($this->logged);
    }
}
