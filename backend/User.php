<?php

class User
{
    public $id;
    public $nama;
    public $username;
    public $role;
    public $divisi;
    public $password;

    public function __construct($nama = null, $username = null, $role = null, $divisi = null, $password = null)
    {
        $this->nama = $nama;
        $this->username = $username;
        $this->role = $role;
        $this->divisi = $divisi;
        $this->password = $password;
    }


}